<?php 
$checklogin=array();
$checklogin['userId']=intval($this->user['uid']);
$checklogin['userName']=$this->user['username'];
$checklogin['loginDomain']=$_SERVER['HTTP_HOST']; 
$checklogin['ext']=null;
$checklogin['menu']=null;
$checklogin['filter']=null;
$checklogin['enable']=$this->user['enable']; //为0账号被封停
$checklogin['loginDomain']=$_SERVER['HTTP_HOST'];
$checklogin['updatePw']=$this->user['updatePw']; //为1需要修改密码
$checklogin['testFlag']=$this->user['testFlag'];  //测试用户为1
$checklogin['token']= $_COOKIE['token'];
echo 'var user = '.json_encode($checklogin).';' 
/*'var user = {"userId":67473,"userName":"","ext":null,"menu":null,"filter":null,"enable":1,"loginDomain":"game.zc222.com","updatePw":0,"testFlag":0,"token":"pfeYBAZhI51G2UYbpYW3IjZwg7fYBnL4ON9yvyxWFkOFf6jL"};'*/

?>