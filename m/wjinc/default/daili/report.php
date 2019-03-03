<?php 
if(!$this->user['type']){
	exit;
}
?><?php 
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
if($startDate && $endDate) {
$sql=" and date >='{$startDate}' and date <= '{$endDate}' ";
}
if($this->user['type']==1){
$sql=$sql." and parentId={$this->user['uid']} ";	//gudongId={$this->user['uid']} or zparentId={$this->user['uid']} or 
}elseif($this->user['type']==2){
$sql=$sql." and zparentId={$this->user['uid']} ";	//gudongId={$this->user['uid']} or zparentId={$this->user['uid']} or 
}elseif($this->user['type']==2){
$sql=$sql." and gudongId={$this->user['uid']} ";	//gudongId={$this->user['uid']} or zparentId={$this->user['uid']} or 
}
$sql=$sql.' order by date desc';
$list=$this->getPage("select * from {$this->prename}report where 1=1 {$sql}",$pagenum,$pagesize);

$allarr=array();
$allarr['data']=array();
$allarr['totalCount']=0;
$allarr['otherData']=null;

$dataarr=array();
$dataarr['id']=null;
$dataarr['type']=null;
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
$usertype=$this->getValue("select type from {$this->prename}members where uid={$var['uid']}");
if($usertype==1){
	$dataarr['type']='代理';
}elseif($usertype==2){
	$dataarr['type']='总代理';
}elseif($usertype==3){
	$dataarr['type']='股东';
}else{
	$dataarr['type']='会员';
}
$dataarr['userId']=intval($var['uid']);
$dataarr['userName']=$var['username'];
$dataarr['statDate']=$var['date'];
$dataarr['betCount']=$var['betCount'];
$dataarr['zjAmount']=$var['zjAmount'];
$dataarr['rebateMoneyDouble']=floatval($var['rebateMoney']);
$dataarr['rewardRebateDouble']=floatval($var['zjAmount'] + $var['rebateMoney'] - $var['betAmount']);
$dataarr['betMoneyDouble']=floatval($var['betAmount']);

array_push($allarr['data'],$dataarr);

}
$allarr['totalCount']=$list['total'];
}
echo json_encode($allarr);

/*{"data":[{"id":null,"type":null,"userId":67473,"dlId":null,"dlName":null,"zdlId":null,"zdlName":null,"userName":"","statDate":"2016-12-20 星期二","betCount":10,"betMoney":16.0,"reward":-2.47,"rewardRebate":-2.39,"rebateMoney":0.08,"userCount":null,"fullName":null,"rewardDouble":-2.47,"rebateMoneyDouble":0.08,"rewardRebateDouble":-2.39,"betMoneyDouble":16.0}],"totalCount":1,"otherData":null}*/
?>