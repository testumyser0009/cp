<?php 
$pagenum=intval($_GET['page']);
$pagesize=intval($_GET['rows']);
$startDate=$_GET['startDate'];
$endDate=$_GET['endDate'];
$state=intval($_GET['status']);
if($startDate){
$startDate=strtotime($_GET['startDate']);
$sql=" and c.actionTime >={$startDate} ";
}
if($endDate){
$endDate=strtotime($endDate.' 23:59:59');
$sql.=" and c.actionTime <= {$endDate} ";
}
//充值订单状态：0申请，1手动到账,2自动到账,3充值失败,9管理员充值
if($state==0 || $state==3){
$sql.=" and c.state in(0,3) ";
}elseif($state==1){
$sql.=" and c.state=1 ";
}elseif($state==2 || $state==4){
$sql.=" and c.state in(2,4) ";
}else{
$sql.=" and c.state < 5 ";
}
$sql="select b.name bankName, c.*, u.username userAccount, u.gudongId, u.zparentId, u.parentId, d.countname from {$this->prename}bank_list b, {$this->prename}member_cash c, {$this->prename}members u,{$this->prename}member_bank d where b.isDelete=0 and c.isDelete=0 and u.uid={$this->user['uid']} {$sql} and c.bankId=b.id and c.uid=u.uid and u.uid=d.uid order by c.id desc";
//$sql;
$list=$this->getPage($sql, $pagenum, $pagesize);
//提现状态：0已到帐, 1用户申请，2已取消，3已支付，4提现失败，0确认到帐, 5后台删除
//$stateName=array('已到帐','申请中','已取消','已支付','已失败','已删除');

$allarr=array();
$allarr['data']=array();
$allarr['totalCount']=0;
$allarr['otherData']=null;
if($list){
	$listarr=array();
	foreach($list[data] as $var){
			$listarr['id']=intval($var['id']);
			$listarr['userId']=intval($var['uid']);
			$listarr['applyMoney']=floatval($var['amount']);
			$listarr['orderNo']=date("YmdHis",$var['actionTime']).$var['uid'];
			$listarr['applyTime']=date("Y-m-d H:i:s",$var['actionTime']);
			$listarr['reason']=$var['bankName'].'尾号'.substr($var['account'],-4);
			$listarr['checkStatus']=intval($var['state']);
			$listarr['bankName']=$var['bankName'];
			$listarr['bankCard']=$var['account'];
			$listarr['bankAccount']=$var['username'];
			array_push($allarr['data'], $listarr);
	}
	$allarr['totalCount']=$list['total'];
}
echo json_encode($allarr);

/*{"data":[{"id":288658,"userId":67473,"account":"","userName":"","dlId":3,"dlName":"dl01","accountMoney":0.0,"rechMoney":20.0,"orderNo":"10161220222206972992","addTime":"2016-12-20 22:22:07","status":2,"rechTime":"2016-12-20 22:22:07","remark":"通过闪付充值20.0元","channel":55,"operator":null,"operatorTime":null,"rechType":"onlinePayment","rechName":"在线支付","payeeName":null,"payee":"610208","payeeInfo":null,"payeeBankName":null,"actualMoney":20.0,"updateTime":"2016-12-20 22:24:34","thirdOrderNo":null,"rechLevel":"0","rebateMoney":0.0,"thirdChannel":"57","statDate":"2016-12-20 22:24:34","onlineType":7}],"totalCount":2,"otherData":null}*/
?>