<?php 
$this->freshSession();
$checklogin=array();
//if(!is_null($_COOKIE['token'])){
$checklogin['token']= $_COOKIE['token'];
//}else{
//$checklogin['token']= '';
//}
$checklogin['serverTime']=date('Y-m-d H:i:s',time());
$checklogin['userId']=intval($this->user['uid']);
$checklogin['username']=$this->user['username'];
$checklogin['fullName']=$this->user['name'];
$checklogin['loginTime']=$this->user['updateTime'];
$checklogin['lastLoginTime']=$this->user['updateTime'];
$checklogin['money']=floatval($this->user['coin']);
$checklogin['email']=$this->user['email'];
if($this->user['coinPassword']){
$checklogin['hasFundPwd']=true;
}else{
$checklogin['hasFundPwd']=false;	
}
//$checklogin['loginDomain']=$_SERVER['HTTP_HOST']; 
//$checklogin['ext']=null;
//$checklogin['menu']=null;
//$checklogin['filter']=null;
$checklogin['testFlag']=intval($this->user['testFlag']);  //测试用户为1
$checklogin['updatePw']=intval($this->user['updatePw']); //为1需要修改密码
$checklogin['updatePayPw']=0;
$checklogin['enable']=intval($this->user['enable']); //为0账号被封停
echo json_encode($checklogin);

//{"token":"","serverTime":"2016-12-14 16:33:05","userId":67473,"userName":"","fullName":"","loginTime":"2016-12-14 16:30:36","lastLoginTime":"2016-12-14 16:30:36","money":0.0,"email":"123456@qq.com","hasFundPwd":true,"testFlag":0,"updatePw":0,"updatePayPw":0}
?>