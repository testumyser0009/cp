<?php
class bankpay{
	/*
	* 993  财付通网银支付接口URL
	*/
	const caihong_bank_url	= 'http://vip.629o.com/bank/';
	/*
	* 商户id，由993  993  彩虹支付分配
	*/
	var $parter;
	
	/*
	* 准备使用网银支付的银行
	*/
	var $type;
	
	/*
	* 支付金额
	*/
	var $value;
	
	/*
	* 请求发起方自己的订单号，该订单号将作为彩虹支付的返回数据
	*/
	var $orderid;
	
	/*
	* 在下行过程中返回结果的地址，需要以http://开头。
	*/
	var $callbackurl;
	
	/*
	* 支付完成之后彩虹支付会自动跳转回到的页面
	*/
	var $hrefbackurl;
	
	/*
	* 商户密钥
	*/
	var $attach;
	
	/*
	* 商户密钥
	*/
	var $key;
	
	
	/*
	*构造函数
	*/
	public function bankpay(){
		
	}
	
	/*
	///发送到彩虹支付网银消费接口
	*/
	public function send(){
		//检查是否正确
		$error 	= 0;
		$msg		= '您调用彩虹支付网银支付接口的参数有误，错误信息如下：';
		if(empty($this->parter)){
			$error 	= 1;
			$msg 	.= '<li>parter不能为空: 商户id，由米优付分配</li>';
		}
		if(empty($this->type)){
			$error 	= 1;
			$msg 	.= '<li>type不能为空: 网银种类</li>';
		}
		if(empty($this->value)){
			$error 	= 1;
			$msg 	.= '<li>value提交有误: 支付金额</li>';
		}
		if(empty($this->callbackurl)){
			$error 	= 1;
			$msg 	.= '<li>callbackurl不能为空：下行过程中返回结果的地址</li>';
		}
		if(empty($this->orderid)){
			$error 	= 1;
			$msg 	.= '<li>orderid不能为空：订单号</li>';
		}
		if(empty($this->key)){
			$error 	= 1;
			$msg 	.= '<li>key不能为空：商户密钥</li>';
		}
		//若提交参数有误，则提示错误信息
		if($error){
			die($msg);
		}
	
		//
		$url = "parter=". $this->parter ."&type=". $this->type ."&value=". $this->value. "&orderid=". $this->orderid ."&callbackurl=". $this->callbackurl;
		//签名
		$sign	= md5($url. $this->key);
		
		//最终url
		$url	= bankpay::caihong_bank_url . "?" . $url . "&sign=" .$sign. "&hrefbackurl=". $this->hrefbackurl. "&attach=". $this->attach;				
		
		//页面跳转
		header("location:" .$url);
	}
	
	
	/*
	///接收彩虹支付消息，这会判断签名是否正确
	*/
	public function recive(){
		header('Content-Type:text/html;charset=GB2312');
		$orderid        = trim($_GET['orderid']);
		$opstate        = trim($_GET['opstate']);
		$ovalue         = trim($_GET['ovalue']);
		$sign           = trim($_GET['sign']);
		
		//订单号为必须接收的参数，若没有该参数，则返回错误
		if(empty($orderid)){
			die("opstate=-1");		//签名不正确，则按照协议返回数据
		}
		
		$sign_text	= "orderid=$orderid&opstate=$opstate&ovalue=$ovalue".$this->key;
		$sign_md5 = md5($sign_text);
		if($sign_md5 != $sign){
			die("opstate=-2");		//签名不正确，则按照协议返回数据
		}	
	}
	
}
?>