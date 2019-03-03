<?php
class Withdraw extends WebLoginBase{
	
	public final function getWithDrawListdo(){
		$this->display('Withdraw/getWithDrawList.php');
	}

	/**
	 * 提现申请
	 */
	public final function submitdo(){
		if(!$_POST){echo '参数出错';exit;}
		$para['amount']=$_POST['amount'];
		$para['coinpwd']=$_POST['coinpwd'];
		$bank=$this->getRow("select username,account,bankId from {$this->prename}member_bank where uid=? limit 1",$this->user['uid']);
		$para['username']=$bank['username'];
		$para['account']=$bank['account'];
		$para['bankId']=$bank['bankId'];
		if(!ctype_digit($para['amount'])){echo '提现金额包含非法字符';exit;} //throw new Exception('提现金额包含非法字符');
		if($para['amount']<=0){echo '提现金额只能为正整数';exit;} //throw new Exception("提现金额只能为正整数");
		if($para['amount']>$this->user['coin']){echo '提款金额大于可用余额，无法提款';exit;} //throw new Exception("提款金额大于可用余额，无法提款");
		if($this->user['coin']<=0){echo '可用余额为零，无法提款';exit;} //throw new Exception("可用余额为零，无法提款");
		
		//提示时间检查
		$baseTime=strtotime(date('Y-m-d ',$this->time).'06:00');
		$fromTime=strtotime(date('Y-m-d ',$this->time).$this->settings['cashFromTime'].':00');
		$toTime=strtotime(date('Y-m-d ',$this->time).$this->settings['cashToTime'].':00');
		if($toTime<$baseTime) $toTime.=24*3600;
		if($this->time < $fromTime || $this->time > $toTime ){echo "提现时间：从".$this->settings['cashFromTime']."到".$this->settings['cashToTime'];exit;} 
		//throw new Exception("提现时间：从".$this->settings['cashFromTime']."到".$this->settings['cashToTime']);

		//消费判断
		$cashAmout=0;
		$rechargeAmount=0;
		$rechargeTime=strtotime('00:00')-2*24*3600;
		if($this->settings['cashMinAmount']){
			$cashMinAmount=$this->settings['cashMinAmount']/100;
			$gRs=$this->getRow("select sum(case when rechargeAmount>0 then rechargeAmount else amount end) as rechargeAmount from {$this->prename}member_recharge where  uid={$this->user['uid']} and state in (1,2,9) and isDelete=0 and rechargeTime>=".$rechargeTime);
			if($gRs){
				$rechargeAmount=$gRs["rechargeAmount"]*$cashMinAmount;
			}
			if($rechargeAmount){
				//消费总额
				$cashAmout=$this->getValue("select sum(mode*beiShu*actionNum) from {$this->prename}bets where actionTime>={$rechargeTime} and uid={$this->user['uid']} and isDelete=0");
				if(floatval($cashAmout)<floatval($rechargeAmount)){echo "消费满".$this->settings['cashMinAmount']."%才能提现";exit;}  
				//throw new Exception("消费满".$this->settings['cashMinAmount']."%才能提现");
			}
		}//消费判断结束
		$this->beginTransaction();
		try{
			$this->freshSession();
			if($this->user['coinPassword']!=md5($para['coinpwd'])){echo '提款密码不正确';exit;} //throw new Exception('提款密码不正确');
			unset($para['coinpwd']);
			
			if($this->user['coin']<$para['amount']){echo '你帐户资金不足';exit;} //throw new Exception('你帐户资金不足');
		
			// 查询最大提现次数与已经提现次数
			$time=strtotime(date('Y-m-d', $this->time));
			/*if($times=$this->getValue("select count(*) from {$this->prename}member_cash where actionTime>=$time and uid=?", $this->user['uid'])){
				if($times>=5) throw new Exception('对不起，今天你提现次数已达到最大限额，请明天再来');
			}*/
			
			// 插入提现请求表
			$para['actionTime']=$this->time;
			$para['uid']=$this->user['uid'];
			if(!$this->insertRow($this->prename .'member_cash', $para)){echo '提交提现请求出错';exit;} //throw new Exception('提交提现请求出错');
			$id=$this->lastInsertId();
			
			// 流动资金
			$this->addCoin(array(
				'coin'=>0-$para['amount'],
				'fcoin'=>$para['amount'],
				'uid'=>$para['uid'],
				'liqType'=>106,
				'info'=>"提现[$id]资金冻结",
				'extfield0'=>$id
			));

			$this->commit();
			echo 'ok';
			exit;
			//return '申请提现成功，请等待客服人员审核';
		}catch(Exception $e){
			$this->rollBack();
			//return 9999;
			throw $e;
		}
	}
}

?>