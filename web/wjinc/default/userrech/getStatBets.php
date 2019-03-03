<?php 
$pagenum=intval($_GET['page']);
$pagesize=intval($_GET['rows']);
$elemet=$_GET['elemet'];
$settled=$_GET['settled'];
$startDate=$_GET['startDate'];
$endDate=$_GET['endDate'];

$startDate=date("Y-m-d",strtotime($_GET['startDate']));
$endDate=date("Y-m-d",strtotime($endDate));
/*$datestr=time()-24*3600;
if($endDate>$datestr){
	exit;
}*/
$sql=" and date >='{$startDate}' and date <= '{$endDate}' ";
$sql=$sql.' order by id desc';
$list=$this->getPage("select * from {$this->prename}report where uid={$this->user['uid']} {$sql}",$pagenum,$pagesize);

$allarr=array();
$allarr['data']=array();
$allarr['totalCount']=0;
$allarr['otherData']=null;

$dataarr=array();
$dataarr['id']=null;
$dataarr['gameId']=null;
$dataarr['userId']=null;
$dataarr['userName']=null;
$dataarr['statDate']=null;
$dataarr['betCount']=null;
$dataarr['betMoney']=null;
$dataarr['reward']=null;
$dataarr['rewardRebate']=null;
$dataarr['rebateMoney']=null;
$dataarr['rewardDouble']=null;
$dataarr['rebateMoneyDouble']=null;
$dataarr['rewardRebateDouble']=null;
$dataarr['betMoneyDouble']=null;
if($list['data']){
$allarr['data']=array();
foreach($list['data'] as $key => $var){ 
$dataarr=array();
$dataarr['id']=null;
$dataarr['gameId']=null;
$dataarr['userId']=intval($var['uid']);
$dataarr['userName']=$var['username'];
$dataarr['statDate']=$var['date'];
$dataarr['betCount']=$var['betCount'];
//$dataarr['betMoney']=floatval($var['betAmount']);
$dataarr['reward']=floatval($var['zjAmount']);
/*$dataarr['rewardRebate']=floatval($var['zjAmount'] + $var['rebateMoney'] - $var['betAmount']);
$dataarr['rebateMoney']=floatval($var['rebateMoney']);
$dataarr['rewardDouble']=floatval($var['zjAmount'] + $var['rebateMoney'] - $var['betAmount']);*/
$dataarr['rebateMoneyDouble']=floatval($var['rebateMoney']);
$dataarr['rewardRebateDouble']=floatval($var['zjAmount'] + $var['rebateMoney'] - $var['betAmount']);
$dataarr['betMoneyDouble']=floatval($var['betAmount']);

array_push($allarr['data'],$dataarr);

}
$allarr['totalCount']=$list['total'];
}
echo json_encode($allarr);

/*{"data":[{"id":null,"gameId":null,"userId":67473,"dlId":null,"dlName":null,"zdlId":null,"zdlName":null,"userName":"","statDate":"2016-12-20 星期二","betCount":10,"betMoney":16.0,"reward":-2.47,"rewardRebate":-2.39,"rebateMoney":0.08,"userCount":null,"fullName":null,"rewardDouble":-2.47,"rebateMoneyDouble":0.08,"rewardRebateDouble":-2.39,"betMoneyDouble":16.0}],"totalCount":1,"otherData":null}*/
?>