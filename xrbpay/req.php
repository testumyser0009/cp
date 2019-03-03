<?php
header("content-Type: text/html; charset=utf-8");
require_once("config.php");
require_once("./class.bankpay.php");
$order_id = $_REQUEST["MerBillNo"];
$bankid = $_REQUEST["BankCode"];
$uid = $_REQUEST["uid"];
$amount = floatval(sprintf("%.2f", $_REQUEST['Amount']));
$ordertime = date("Y-m-d H:i:s",time());
$rechId = $_REQUEST["type"];
switch($rechId){
	case 282:
	$bankType= $bankid;
	break;
	case 287:
	$bankType= 992;
	break;
	case 286:
	$bankType= 1004;
	break;
}
$returnurl ="http://".$_SERVER['HTTP_HOST']."/notify.php";
/*
 * 提交数据
 * */
$bankpay = new bankpay();
$bankpay->parter = $caihong_merchant_id;  //商家Id
$bankpay->key = $caihong_merchant_key; //商家密钥
$bankpay->type = $bankType;   //商家密钥
$bankpay->value = $amount;    //提交金额
$bankpay->attach = $bankType;    //提交金额
$bankpay->orderid = $order_id;   //订单Id号
$bankpay->callbackurl = $returnurl; //下行url地址
$bankpay->hrefbackurl = $caihong_bank_hrefbackurl; //下行url地址
//发送
$bankpay->send();
//$returnurl ="http://".$_SERVER['HTTP_HOST']."/notify.php";
//$hrefreturnurl = '';
//$hrefreturnurl ="http://".$_SERVER['HTTP_HOST']."/return.php";
// $signStr = '';
// $signStr = $signStr."userid".$userid;
// $signStr = $signStr."orderid".$orderid;
// $signStr = $signStr."btype".$btype;
// $signStr = $signStr."ptype".$ptype;
// $signStr = $signStr."value".$value;
// $signStr = $signStr."returnurl".$returnurl;
// $signStr = $signStr."hrefreturnurl".$hrefreturnurl;
//$signStr = $signStr."key".$priKey;
//echo $signStr;
//exit;
//$sign = md5($signStr.$priKey);
?>