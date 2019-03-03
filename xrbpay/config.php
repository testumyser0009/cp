<?php
header("content-Type: text/html; charset=utf-8");
//=======================卡类支付和网银支付公用配置==================
//彩虹支付商户ID
$caihong_merchant_id		= '1808';
//彩虹支付通信密钥
$caihong_merchant_key		= '3563acf2f8184290ba17961750fcc289';	//hc6NOTDETVQe9Lgr
//==========================卡类支付配置=============================
//支付的区域 0代表全国通用	
$caihong_restrict			= '0';
//接收彩虹支付下行数据的地址, 该地址必须是可以再互联网上访问的网址
$caihong_callback_url		= "http://".$_SERVER['HTTP_HOST']."/notify.php";   
$caihong_callback_url_muti  = "http://www.caihongpay.com/callback/pay_card_callback_muti.php";
//======================网银支付配置=================================
error_reporting(0);

$dbhost="127.0.0.1:3306";
$dbname="boe2017";
$conf['db']['user']='root';
$conf['db']['password']='Caonima!@#888';
$conf['db']['charset']='utf8';
$conf['db']['prename']='ssc_';

?>