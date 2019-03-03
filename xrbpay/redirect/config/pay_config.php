<?php
//=======================卡类支付和网银支付公用配置==================
//爱扬商户ID
$aiyang_merchant_id		= '1808';

//爱扬通信密钥
$aiyang_merchant_key		= '3563acf2f8184290ba17961750fcc289';


//==========================卡类支付配置=============================
//支付的区域 0代表全国通用	
$aiyang_restrict			= '0';


//接收爱扬下行数据的地址, 该地址必须是可以再互联网上访问的网址
$aiyang_callback_url		= "http://www.0n2.com/php_demo/callback/card.php";   
$aiyang_callback_url_muti  = "http://www.0n2.com/php_demo/callback/muti_card.php";

//======================网银支付配置=================================
//接收爱扬网银支付接口的地址
$aiyang_bank_callback_url	= "http://www.0n2.com/php_demo/callback/bank.php";  


//网银支付跳转回的页面地址
$aiyang_bank_hrefbackurl	= '';


?>