<?php
$this->freshSession();
$toTime=strtotime('00:00:00');
$list=$this->getRow("select * from {$this->prename}members where uid={$this->user['uid']}");
if($list){
$bank=$this->getRow("select * from {$this->prename}member_bank where uid=?",$this->user['uid']);
$data=array();
$data['userId']=$this->user['uid'];
$data['fullName']=$bank['username'];
$data['money']=floatval($list['coin']);
$data['panid']=$list['panid'];
$data['superName']=$list['name'];
$data['rebate']=$list['rebate'];
$data['loginTime']=$list['updateTime'];
$data['updateTime']=$list['updateTime'];
$data['fundPwd']=null;
$data['userType']=$list['type'];
$data['enable']=$list['enable'];
$data['regIp']=$list['regIp'];
$data['userName']=$list['username'];
$data['phone']=$list['phone'];
$data['email']=$list['email'];
if($list['coinPassword']){
$data['isSetFundPwd']=1;
$data['oldPaypasswd']=1;
}
if($bank['account']){
$data['bankName']=$this->getValue("select name from {$this->prename}bank_list where id=?", $bank['bankId']);	
$data['cardNo']=$bank['account'];	
}
echo json_encode($data);
}
?>

