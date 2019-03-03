<?php
$this->type=$gameId=intval($_GET['gameId']);
$pagenum=intval($_GET['page']);
$pagesize=intval($_GET['rows']);
$elemet=$_GET['elemet'];
$settled=$_GET['settled'];

if($this->type){
$sql=" and type={$this->type} ";
}
if($settled=='false'){
$sql=$sql." and lotteryNo='' ";
}elseif($settled=='true'){
$sql=$sql." and lotteryNo !='' ";
}
$datestr=strtotime('00:00');
if($settled=='true'){
$sql=$sql." and actionTime >= {$datestr} ";
}
$sql=$sql.' order by id desc';
if($this->user['testFlag']==1){
$list=$this->getPage("select * from {$this->prename}guestbets where  isDelete=0 and uid={$this->user['uid']} {$sql}",$pagenum,$pagesize);
}else{
$list=$this->getPage("select * from {$this->prename}bets where  isDelete=0 and uid={$this->user['uid']} {$sql}",$pagenum,$pagesize);
}
$allarr=array();
$allarr['data']=null;
$allarr['totalCount']=0;
$allarr['otherData']=null;

$dataarr=array();
$dataarr['id']=null;
$dataarr['userId']=null;
$dataarr['userName']=null;
/* $dataarr['dlId']=null;
$dataarr['zdlId']=null; */
$dataarr['playId']=null;
$dataarr['playCateId']=null;
$dataarr['odds']=null;
$dataarr['rebate']=0;
$dataarr['addTime']=null;
$dataarr['turnNum']=null;
$dataarr['gameId']=null;
$dataarr['status']=0; //0为未结明细,1为已结明细
$dataarr['rebateMoney']=0;
$dataarr['orderNo']=null;
$dataarr['lotteryNo']=null;
$dataarr['remark']='';
$dataarr['openTime']=null;
$dataarr['testFlag']=$this->user['testFlag'];
$dataarr['multiple']=1;
$dataarr['betInfo']='';
$dataarr['betmoney']=0; //投注金额
$dataarr['resultMoney']=0;

$allarr['otherData']=array();
$allarr['otherData']['totalRebateMoney']=0;
$allarr['otherData']['totalResultMoney']=0;
$allarr['otherData']['totalBetMoney']=0;

if($list['data']){
$allarr['data']=array();
foreach($list['data'] as $key => $var){ 
$dataarr['id']=intval($var['id']);
$dataarr['userId']=intval($var['uid']);
$dataarr['userName']=$var['username'];
/* $dataarr['dlId']=null; //代理
$dataarr['zdlId']=null;//总代理 */
$dataarr['playId']=intval($var['playedId']);
$dataarr['playCateId']=intval($var['playedGroup']);
$dataarr['odds']=floatval($var['odds']);
$dataarr['rebate']=floatval($var['rebate']);
$dataarr['addTime']=date("Y-m-d H:i:s",$var['actionTime']);
$dataarr['turnNum']=$var['actionNo'];
$dataarr['gameId']=intval($var['type']);
if($var['betInfo'] !=''){
		$dataarr['betInfo']=$var['betInfo'];
		$tzmoney=$var['money'] * $var['totalNums'];
		$dataarr['multiple']=$var['totalNums'];
}else{
		$tzmoney=$var['money'];
}

if($settled=='true'){
	//已结算明细
	$dataarr['status']=1;
	$dataarr['betmoney']=floatval($tzmoney);
	$dataarr['rebateMoney']=$tzmoney*$var['rebate']; //已退水金额
	$allarr['otherData']['totalRebateMoney']+=floatval(sprintf("%.2f",$tzmoney*$var['rebate'])); //退水总计
	$dataarr['resultMoney']=floatval(sprintf("%.2f",$var['bonus']-$tzmoney+$tzmoney*$var['rebate'])); //未结明细为可赢金额//已结明细为赢亏结果包括退水

}else{
	//未结算明细
	$dataarr['status']=0;	
	$dataarr['betmoney']=floatval($tzmoney);
	$dataarr['resultMoney']=floatval(sprintf("%.2f",$var['money']*$var['odds']-$tzmoney+$tzmoney*$var['rebate']));//未结明细可赢额金包括退水//已结明细结果包括退水
	
}

$dataarr['orderNo']=$var['wjorderId'];
$dataarr['lotteryNo']=$var['lotteryNo'];
$dataarr['remark']=$var['lotteryNo'];
$lastNo=$this->getGameLastNo($var['type'],$var['time']);
$dataarr['openTime']=date("Y-m-d H:i:s",$var['kjTime']);
$dataarr['testFlag']=$this->user['testFlag'];//测试用户为1
array_push($allarr['data'],$dataarr);

$allarr['otherData']['totalResultMoney']+=$dataarr['resultMoney'];
$allarr['otherData']['totalBetMoney']+=$tzmoney;

}
$allarr['totalCount']=$list['total'];
}
echo json_encode($allarr);
?>
