<?php 
$pagenum=intval($_GET['page']);
$pagesize=intval($_GET['rows']);
$startDate=$_GET['startDate'];
$endDate=$_GET['endDate'];
$state=intval($_GET['status']);
if($startDate){
$startDate=strtotime($_GET['startDate']);
$sql=" and actionTime >={$startDate} ";
}
if($endDate){
$endDate=strtotime($endDate.' 23:59:59');
$sql.=" and actionTime <= {$endDate} ";
}
//充值订单状态：0申请，1手动到账,2自动到账,3充值失败,9管理员充值
if($state==0 && !is_null($_GET['status'])){
$sql.=" and state=0 ";
}elseif($state==1){
$sql.=" and state in(1,2,9) ";
}elseif($state==3){
$sql.=" and state=3 ";
}
$sql=$sql.' order by id desc';
$list=$this->getPage("select * from {$this->prename}member_recharge where isDelete=0 and amount>0 and uid={$this->user['uid']} {$sql}",$pagenum,$pagesize);
$allarr=array();
$allarr['data']=array();
$allarr['totalCount']=0;
$allarr['otherData']=null;
if($list){
	$listarr=array();
	foreach($list[data] as $var){
			$listarr['id']=intval($var['id']);
			$listarr['userId']=intval($var['uid']);
			$listarr['userName']=$var['username'];
			/*$listarr['dlId']=null; //代理
			$listarr['zdlId']=null;//总代理*/
			$listarr['accountMoney']=0;
			$listarr['rechMoney']=floatval($var['amount']);
			$listarr['orderNo']=$this->ifs($var['rechargeId'], '管理员充值');
			$listarr['addTime']=date("Y-m-d H:i:s",$var['actionTime']);
			$listarr['status']=$var['state'];
			$listarr['rechTime']=date("Y-m-d H:i:s",$var['actionTime']);
			$listarr['remark']=$var['info'];
			$listarr['rechName']=$var['info'];
			if($var['rechType']){
			$listarr['rechType']=$var['rechType'];
			}elseif($var['info']=='系统充值'){
			$listarr['rechType']='adminAddMoney';
			}else{
			$listarr['rechType']='onlinePayment';
			}
			array_push($allarr['data'], $listarr);
	}
	$allarr['totalCount']=$list['total'];
}
echo json_encode($allarr);

/*{"data":[{"id":288658,"userId":67473,"account":"","userName":"","dlId":3,"dlName":"dl01","accountMoney":0.0,"rechMoney":20.0,"orderNo":"10161220222206972992","addTime":"2016-12-20 22:22:07","status":2,"rechTime":"2016-12-20 22:22:07","remark":"通过闪付充值20.0元","channel":55,"operator":null,"operatorTime":null,"rechType":"onlinePayment","rechName":"在线支付","payeeName":null,"payee":"610208","payeeInfo":null,"payeeBankName":null,"actualMoney":20.0,"updateTime":"2016-12-20 22:24:34","thirdOrderNo":null,"rechLevel":"0","rebateMoney":0.0,"thirdChannel":"57","statDate":"2016-12-20 22:24:34","onlineType":7}],"totalCount":2,"otherData":null}*/
?>