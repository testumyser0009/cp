<?php
$this->freshSession();



if($this->user['uid']){
$rechargeId=$this->getRechId();
$bankid=$_REQUEST["payId"];
$uid=$this->user['uid'];
$amount=floatval($_REQUEST['amount']);
$time=date('Y-m-d H:i:s', time());

if($amount && $uid && $rechargeId){
	if($this->update("INSERT INTO {$this->prename}order (order_number, username, recharge_amount, state, time) VALUES('{$rechargeId}', '{$uid}', '{$amount}', '0', '{$time}')")){
		$para=array();
		$para['mBankId']=intval($bankid);
		$para['amount']=floatval($amount);
		$para['rechargeId']=$rechargeId;
		$para['actionTime']=$this->time;
		$para['uid']=$this->user['uid'];
		$para['username']=$this->user['username'];
		$para['actionIP']=$this->ip(true);
		if($bankid==992 || $bankid=='ZHIFUBAO'){
		$para['info']='支付宝扫码充值';
		$lb='1';
		}elseif($bankid==1004 || $bankid=='WEIXIN'){
		$para['info']='微信扫码充值';
		$lb='3';
		}else{
			$lb='2';
		$para['info']='用户在线充值';
		}
		
		$parter = '1832';
   $key = '5ad4ef6146a948cc8d0b1cad78bc5126';
   $callbackurl = "http://".$_SERVER['HTTP_HOST']."";
   $hrefbackurl = "http://".$_SERVER['HTTP_HOST']."/wjinc/default/userrech/return.php";

   $signStr = "pid=3020256657&money=$amount&data=$rechargeId&url=$callbackurl";

   $sign	= md5($signStr.$key);

		if($this->insertRow($this->prename .'member_recharge', $para)){
			
			   $url="http://pay1.youyunnet.com/pay?" . $signStr . "&sign=" .$sign. "&hrefbackurl=".$hrefbackurl;
				header("Location: ".$url); 
						
			
		}else{
			echo '充值订单生成出错';
			exit;
		}		
	}else{
	echo '操作错误';
	exit;	
	}
}
}
?>