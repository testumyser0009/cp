<?php
require_once ("config.php");
require_once("class.bankpay.php");
$rechargeId = $orderid = $_REQUEST['orderid'];
$result = $_REQUEST['result'];
$opstate        = trim($_REQUEST['opstate']);
$amount = $realvalue = $_REQUEST['ovalue'];
$amount = $_REQUEST['ovalue'];
$sign = $_REQUEST['sign'];
//进行彩虹签名认证
$bankpay		= new bankpay();
$bankpay->key	= $caihong_merchant_key;
$bankpay->recive();

if($btype==84){
$info='支付宝扫码自动到账1';
}elseif($btype==83){
$info='微信扫码自动到账1';
}else{
$info='在线支付自动到账';
}

if($amount && $rechargeId){
$dbpre=$conf['db']['prename'];
$conn = mysql_connect($dbhost,$conf['db']['user'],$conf['db']['password']);
if (!$conn)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname,$conn);
mysql_query("SET NAMES UTF8");
$chaxun = mysql_query("SELECT state,username FROM ".$conf['db']['prename']."order WHERE state='0' and order_number = '".$rechargeId."'");
if(mysql_num_rows($chaxun) == 0){
echo "ok";
exit;
}
$jiancha = mysql_result($chaxun,0,"state");
$username = mysql_result($chaxun,0,"username");
$chaxun2 = mysql_query("select actionIP from ".$dbpre."member_recharge where rechargeid= '".$rechargeId."'");
$actionIP = mysql_result($chaxun2,0);
$chaxun3 = mysql_query("select id from ".$dbpre."member_recharge where rechargeid= '".$rechargeId."'");
$id = mysql_result($chaxun3,0);
$chaxun4 = mysql_query("select uid from ".$dbpre."member_recharge where rechargeid= '".$rechargeId."'");
$uid = mysql_result($chaxun4,0);
$chaxun5 = mysql_query("select coin from ".$dbpre."members where uid= '".$uid."'");
$coin = mysql_result($chaxun5,0);
$chaxun6 = mysql_query("select username from ".$dbpre."members where uid= '".$uid."'");
$username = mysql_result($chaxun6,0);
if(!$id || !$uid){
echo '操作错误';
exit;	
}
$inserts = "insert into ".$dbpre."coin_log (uid,type,playedId,coin,userCoin,fcoin,liqType,actionUID,actionTime,actionIP,info,extfield0,extfield1) values ('".$uid."',0,0,'".$amount."','".$coin."'+'".$amount."',0,1,0,UNIX_TIMESTAMP(),'".$actionIP."','".$info."','".$id."','".$uid."')";
$update1 = "UPDATE ".$dbpre."order SET state = 2 WHERE state='0' and order_number = '".$rechargeId."'";
$update2 = "UPDATE ".$dbpre."members SET coin = coin+'".$amount."' WHERE username = '".$username."'";
$update3 = "update ".$dbpre."member_recharge set state=2,rechargeTime=UNIX_TIMESTAMP(),rechargeAmount='".$amount."',coin='".$coin."', info='".$info."', rechType='onlinePayment' where rechargeid='".$rechargeId."'";
if($jiancha==0){
if($trade_status=="SUCCESS"){
mysql_query($update1,$conn);
if(mysql_affected_rows()==1){
mysql_query($update2,$conn);
mysql_query($update3,$conn);
mysql_query($inserts,$conn);
echo "ok";
}else{
echo "error";
}
}else{
echo "error";
}
}else{
echo "ok";
exit;
}

}
?>