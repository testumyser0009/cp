<?php
/*
===============================================================================
接收银行支付的下行数据

orderid	
上行过程中传入的orderid

opstate	
操作结果状态:
	0 在线支付成功
	-1 请求参数无效
	-2 签名错误
	-5 在线支付失败

ovalue	
实际支付的金额，单位元

sysorderid
	网银接口v1.2 版本新增
	此次卡消耗过程中爱扬系统的订单Id。为保持和以前版本兼容，该值不加入返回结果签名验证。

systime
	网银接口v1.2 版本新增
	此次卡消耗过程中爱扬系统的订单结束时间。格式为年/月/日 时：分：秒，如2010/04/05 21:50:58。
	为保持和以前版本兼容，该值不加入返回结果签名验证。
================================================================================
*/
header('Content-Type:text/html;charset=GB2312');
require_once("../config/pay_config.php");
require_once("../aiyang/class.bankpay.php");

//获取返回的下行数据
$orderid        = trim($_GET['orderid']);
$opstate        = trim($_GET['opstate']);
$ovalue         = trim($_GET['ovalue']);
$sysorderid		= trim($_GET['sysorderid']);
$completiontime		= trim($_GET['systime']);

//进行爱扬签名认证
$bankpay		= new bankpay();
$bankpay->key	= $aiyang_merchant_key;
$bankpay->recive();

//////////////////////////////////////////////////////////////////////////
// 进入到这一步，说明签名已经验证成功，
// 你可以在这里加入自己的代码, 例如：可以将处理结果存入数据库






//////////////////////////////////////////////////////////////////////////
//完成之后返回成功
/*
	协议:
	0 成功
	-1 请求参数无效
	-2 签名错误
*/
die("opstate=0");
?>