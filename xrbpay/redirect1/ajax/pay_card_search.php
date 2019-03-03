<?php
error_reporting(0);
header('Content-Type:text/html;charset=GB2312');
include_once("../config/pay_config.php");
include_once("../aiyang/class.aiyangpay.php");
$aiyangpay = new ekapay();
$aiyangpay->parter 		= $aiyang_merchant_id;		//商家Id
$aiyangpay->key 			= $aiyang_merchant_key;	//商家密钥

$result	= $aiyangpay->search($_POST['order_id']);

$data = '{"success": "'.$result.'","message": "'. $aiyangpay->message .'"}';
die($data);
?>