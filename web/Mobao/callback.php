<?php
/* *
 * 功能：支付回调文件
 * 版本：1.0
 * 日期：2015-03-26
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码。
 */
 
	require_once("Mobaopay.Config.php");
	require_once("lib/MobaoPay.class.php");
	require_once("../../include/conn_1.php");
	require_once("../../include/public.php");


	// 请求数据赋值
	$data = "";
	$data['apiName'] = $_REQUEST["apiName"];
	// 通知时间
	$data['notifyTime'] = $_REQUEST["notifyTime"];
	// 支付金额(单位元，显示用)
	$data['tradeAmt'] = $_REQUEST["tradeAmt"];
	// 商户号
	$data['merchNo'] = $_REQUEST["merchNo"];
	// 商户参数，支付平台返回商户上传的参数，可以为空
	$data['merchParam'] = $_REQUEST["merchParam"];
	// 商户订单号
	$data['orderNo'] = $_REQUEST["orderNo"];
	// 商户订单日期
	$data['tradeDate'] = $_REQUEST["tradeDate"];
	// Mo宝支付订单号
	$data['accNo'] = $_REQUEST["accNo"];
	// Mo宝支付账务日期
	$data['accDate'] = $_REQUEST["accDate"];
	// 订单状态，0-未支付，1-支付成功，2-失败，4-部分退款，5-退款，9-退款处理中
	$data['orderStatus'] = $_REQUEST["orderStatus"];
	// 签名数据
	$data['signMsg'] = $_REQUEST["signMsg"];

	if(empty($_REQUEST)){
		die();
	}
 
	$sqlsc = "select username,amount,status,ordernumber from  {$db_prefix}member_order where ordernumber = '".$data['orderNo']."'";
		$rssc = $db->get_one($sqlsc);
		if($rssc['status'] == 1){
			$url = "notify.php";
			Header("Location: $url");
			return true;
		}else if((int)$rssc['amount'] !== (int)$data['tradeAmt']){
			echo "金额不相等";
			return false;
		}else{

			$addamount    = $rssc['amount'];
			$username  	  = $rssc['username'];

			//查询上家
			$sqlSj 	 = "select inviter from {$db_prefix}member where username = '".$username."'";
			$rs_sj   = $db->get_one($sqlSj);
			$Topusername  = trim($rs_sj['inviter']);	//上线
			
			//发送记录
			$compnayN = configW('webname');
			$title    = "尊敬的".$username."会员您好！您成功充值".$addamount."元";
			$content  = "您成功充值".$addamount."元";
			$memo     = "在线充值";
			$rs_msg   = sendMsg($username,$compnayN,$title,$content,$memo);

			//增加积分
			$sql_amo = "update {$db_prefix}member set amount = amount + {$addamount}  where  username = '".$username."'";
			$rs_amo  =$db->query($sql_amo);

			//更新状态，插入记录
			$sql_lgn = "update {$db_prefix}member_order set status = 1,paytime = '".time()."',accNo = '".$data['accNo']."'  where  ordernumber = '".$data['orderNo']."'";
			$rs_plus =$db->query($sql_lgn);

			//对下线充值奖励
			// if(!empty($Topusername)){

			// 	//查询奖励比例
			// 	$sqlpr = "select XiaXianFenCheng from  {$db_prefix}member_config where id = 1";
			// 	$rssc = $db->get_one($sqlpr);
			// 	$XiaXianFenCheng = $rssc['XiaXianFenCheng'];	//下线分成比例
			// 	$XiaXianAmount   = $rssc['XiaXianFenCheng'] * $addamount;	//抽成金额
			// 	$XiaXianAmount   = intval($XiaXianAmount); 
				
			// 	//插入分成数据
			// 	$sqlFc="insert into {$db_prefix}member_cashback(username,xxusername,amount,preamount,type,status,posttime) values('{$Topusername}','{$username}','{$addamount}','{$XiaXianAmount}','下线分成',1,'".time()."')";
			// 	$db->query($sqlFc);

			// 	//发送记录
			// 	$title    = "尊敬的".$Topusername."会员您好！您的下线分成".$XiaXianAmount."元";
			// 	$content  = "您的下线".$username."充值分成".$XiaXianAmount."元,已赠送到您的账号。";
			// 	$memo     = "下线分成";
			// 	$rs_msg   = sendMsg($Topusername,$compnayN,$title,$content,$memo);

			// 	//增加金额
			// 	$sql_inver = "update {$db_prefix}member set amount = amount + {$XiaXianAmount}  where  username = '".$Topusername."'";
			// 	$db->query($sql_inver);
			// }

			if($rs_msg && $rs_amo && $rs_plus){
				//$url = "notify.php";
				//Header("Location: $url");
				echo "充值成功!";
				return true;
			}else{
				echo $rssc['ordernumber'].",充值不成功";
				return false;
			}
		}

	//print_r( $data);
	// 初始化
	$cMbPay = new MbPay($mbp_key, $mobaopay_gateway);
	// 准备准备验签数据
	$str_to_sign = $cMbPay->prepareSign($data);
	// 验证签名
	$resultVerify = $cMbPay->verify($str_to_sign, $data['signMsg']);
	//var_dump($data);
	if ($resultVerify) 
	{
		if ('1' == $_REQUEST["notifyType"]) {
			$url = "notify.php";
			Header("Location: $url");
			return true;
		}
		// 签名验证通过
		
		 
	}else{
		// 签名验证失败
		echo "验证签名失败";
		return false;
	}
?>