<?php
use GameRedis\RedisPackage;
use GatewayClient\Gateway;

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

function getConfig($id){
    $conModel = db("config");
    $co = $conModel->find($id);
    $num = $co['values'];
    return $num;
}

function redisd(){
     $redis=new RedisPackage();
     return $redis; 
}
function blsend($para, $method, $button_name,$url) {
			$sHtml = "<form id='blpaysubmit' name='blpaysubmit' action='".$url."' method='".$method."'>";
			while (list ($key, $val) = each ($para)) {
				$sHtml.= "<input type='hidden' name='".$key."' value='".$val."'/>";
			}
			$sHtml = $sHtml."<input type='submit' style='border:none;width:200px;height:35px;line-height:35px;background:none;font-size:18px;' value='".$button_name."'></form>";
			$sHtml = $sHtml."<script>document.forms['blpaysubmit'].submit();</script>";
			return $sHtml;
	}
/**
 * 发送数据
 * @param 协议号 $num
 * @param 数据 $data数组
 * @param 发送给谁 $client_id
 */
function send($num,$data,$uid){
    Gateway::$registerAddress = "127.0.0.1:1238";
    $data = json_encode($data);
    $key = "5e08323af9116a8824139704e36d7c15";
    $sign = md5($num.$data.$key);
    $array = array("action"=>$num,"data"=>$data,"sign"=>$sign);
    $str = json_encode($array);
    sendToByte($str);
    if($num!=0){
        echo "server:".$str."\n";
    }
    $ss = sendToByte($str);
    if(Gateway::isUidOnline($uid)){
        Gateway::sendToUid($uid, $ss);
    }
    
}
 	function createLinkstring($para) {
		$arg  = "";
	while (list ($key, $val) = each ($para)) {
		$arg.=$key."=".$val."&";
	}
	//去掉最后一个&字符
	$arg = substr($arg,0,count($arg)-2);
	
	//如果存在转义字符，那么去掉转义
	if(get_magic_quotes_gpc()){$arg = stripslashes($arg);}
	
	return $arg;
	}
    /*去掉字符空值*/
	function paraFilter($para){
		$para_filter = array();
		while (list ($key, $val) = each ($para)){
			if($key == "sign")continue;
			else
				$para_filter[$key] = $para[$key];
			}
			return $para_filter;
			}
   /*数组排序*/
   function argSort($para){
	   ksort($para);
	   reset($para);
	   return $para;
	   }
   function md5Verify($prestr,$sign=null,$key) {
	   $para=paraFilter($prestr);
	   $parm=argSort($para);
	   $prestr=createLinkstring($parm);
	   $prestr = $prestr.$key;
	   $mysgin = md5($prestr);
	   if($sign==null){
		   return $mysgin;
	   }else{
	   if($mysgin == $sign) {
		   return true;
		   }else{
			   return false;
			   }
	   }
	  }
function sendToAll($num,$data){
    Gateway::$registerAddress = "127.0.0.1:1238";
    $data = json_encode($data);
    $key = "5e08323af9116a8824139704e36d7c15";
    $sign = md5($num.$data.$key);
    $array = array("action"=>$num,"data"=>$data,"sign"=>$sign);
    $str = json_encode($array);
    sendToByte($str);
    if($num!=0){
        echo "server:".$str."\n";
    }
    $ss = sendToByte($str);
    Gateway::sendToAll($ss);
}



/**
 * 编辑数据成包头包体
 * @param unknown $client_id
 * @param unknown $str
 * @return boolean
 */
function sendToByte($str){
    $a = strlen($str);
    if($a>0&&$a<10){
        $c = "000".$a;
    }elseif($a<100){
        $c = "00".$a;
    }elseif($a<1000){
        $c = "0".$a;
    }elseif($a<10000){
        $c = $a;
    }else{
        return false;
    }
    $str = $c.$str;
    return $str;
}
