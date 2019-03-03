<?php
class Business extends AdminBase{
	public $pageSize=15;
	
	public final function cash(){
		$this->display('business/cash.php');
	}
	
	public final function cashLog(){
		$this->display('business/cash-log.php');
	}
	
	public final function cashLogList(){
		$this->display('business/cash-log-list.php');
	}
	
	
	
	/**
	 * 弹出提现处理弹出层
	 */
	public final function cashActionModal($id){
		$id=intval($id);
		$sql="select b.name bankName, b.home bankHome, c.*, u.username userAccount from {$this->prename}bank_list b, {$this->prename}member_cash c, {$this->prename}members u where b.isDelete=0 and c.bankId=b.id and c.uid=u.uid and c.id=?";
		$data=$this->getRow($sql, $id);
		if(!$data) throw new Exception('参数出错');
		
		switch($data['state']){
			case 0: throw new Exception('提现已经到帐');
			case 1:
				$this->display('business/cash-action.php', 0, $data);
			break;
			case 2: throw new Exception('用户已经取消提现申请');
			case 3: throw new Exception('提现已经支付过了');
			case 4: throw new Exception('提现已经失败');
			case 5: throw new Exception('提现己经完成');
			case 6: throw new Exception('删除');
			default: throw new Exception('未知出错');
		}
	}
	
	/**
	 * 投注信息弹出层
	 */
	public final function betInfo($id){
		$id=intval($id);
		$this->getTypes();
		$this->display('business/bet-info.php',0,$id);
	}
	
	//提现提醒
	public final function getTip(){
		$sql="select id from {$this->prename}member_cash where state=1 and actionTime>".strtotime('00:00');
		if($data=$this->getCol($sql)){
			
			if($cookie=$_COOKIE['cash-tip']){
				$cookie=explode(',',$cookie);
				if(!array_diff($data, $cookie)) return array('flag'=>false);
			}

			$data=implode(',', $data);
			if($data) setcookie('cash-tip', $data);
			
			return array(
				'flag'=>true,
				'message'=>'有新的提现请求需要处理',
				'buttons'=>'前往处理:goToDealWithCash|忽略:defaultCloseModal'
			);
		}
		
	}
	
	//充值处理提醒
	public final function getRecharge(){
		$sql="select id from {$this->prename}member_recharge where state=0 and rechType !='' and isDelete=0 and actionTime>".strtotime('00:00');
		if($data=$this->getCol($sql)){
			
			if($cookie=$_COOKIE['recharge-tip']){
				$cookie=explode(',',$cookie);
				if(!array_diff($data, $cookie)) return array('flag'=>false);
			}

			$data=implode(',', $data);
			if($data) setcookie('recharge-tip', $data);
			
			return array(
				'flag'=>true,
				'message'=>'有新的充值请求需要处理',
				'buttons'=>'前往处理:goToDealWithRecharge|忽略:defaultCloseModal'
			);
		}
		
	}
	//充值提现详细信息弹出
	public final function rechargeInfo($id){
		$id=intval($id);
		$this->getTypes();
		$this->display('business/recharge-info.php', 0 , $id);
	}
	public final function cashInfo($id){
		$id=intval($id);
		$this->getTypes();
		$this->display('business/cash-info.php', 0 , $id);
	}
		
	/**
	 * 提现处理
	 */
	public final function cashDealWith($id){//, $actionFlag,
		//throw new Exception($id);
		$id=intval($id);
		$actionFlag=intval($_POST['type']);
		$info=$_POST['info'];
		$sql="select b.name bankName, c.*, u.username userAccount from {$this->prename}bank_list b, {$this->prename}member_cash c, {$this->prename}members u where b.isDelete=0 and c.bankId=b.id and c.uid=u.uid and c.id=?";
		$data=$this->getRow($sql, $id);
		if(!$data) throw new Exception('参数出错');
		
		switch($data['state']){
			case 0: throw new Exception('提现已经到帐');
			case 1:
				$log=array(
					'uid'=>$data['uid'],
					'fcoin'=>-$data['amount']
				);
				
				if($actionFlag){
					$row=array(
						'info'=>$info,
						'state'=>4
					);
					$log['info']="提现[{$data['id']}]处理失败";
					$log['coin']=$data['amount'];
					$log['liqType']=8;
					$log['extfield0']=$data['id'];
				}else{
					$row=array('state'=>0);
					$log['info']="提现[{$data['id']}]成功扣除冻结金额";
					$log['liqType']=107;
					$log['extfield0']=$data['id'];
				}
				
				$this->beginTransaction();
				try{
					$this->addCoin($log);
					$this->updateRows($this->prename .'member_cash', $row, 'id='.$id);
					$this->commit();
					
					$this->addLog(1,$this->adminLogType[1].'[ID:'.$data['id'].']', $data['uid'], $data['username']);
					
					return '操作成功';
				}catch(Exception $e){
					$this->rollBack();
					//print_r($this->errorCode());
					throw $e;
				}
				
			break;
			//case 2: throw new Exception('用户已经取消提现申请');
			//case 3: throw new Exception('提现已经支付过了');
			case 4: throw new Exception('提现已经失败');
			//case 5: throw new Exception('提现己经完成');
			case 6: throw new Exception('已删除');
			default: throw new Exception('未知出错');
		}
	}
	
	/**
	 * 提现记录删除
	 */
	public final function cashLogDelete($id){
		//throw new Exception($id);
		$id=intval($id);
		
		$sql="select b.name bankName, c.*, u.username userAccount from {$this->prename}bank_list b, {$this->prename}member_cash c, {$this->prename}members u where b.isDelete=0 and c.bankId=b.id and c.uid=u.uid and c.id=?";
		$data=$this->getRow($sql, $id);
		if(!$data) throw new Exception('参数出错');
		
		switch($data['state']){
			//case 0: throw new Exception('提现已经到帐');
			//case 1: throw new Exception('提现申请还没有处理');
			//case 2: throw new Exception('用户已经取消提现申请');
			//case 3: throw new Exception('用户还没有确认到帐');
			//case 4: throw new Exception('提现已经失败');
			//case 5: throw new Exception('记录已经删除');
			//default: throw new Exception('未知出错');
		}
		if($this->updateRows($this->prename .'member_cash', array('isDelete'=>5), 'id='.$data['id'])){
			return '操作成功';
		}
		
		throw new Exception('未知出错');
	}

	/**
	 * 充值记录
	 */
	public final function rechargeLog(){
		$this->display('business/recharge-log.php');
	}
	public final function rechargeLogList(){
		$this->display('business/recharge-log-list.php');
	}
	/**
	 * 充值弹出层
	 */
	public final function rechargeModal(){
		$this->display('business/recharge-modal.php');
	}
	
	/**
	 * 充值操作
	 */
	public final function rechargeAction($uid, $amount,$uIN){
		
		if($uIN==1){
			$uid=intval($uid);
			if($uid<=0) throw new Exception('用户ID不正确');
		}

		$amount=floatval($amount);
		//if($amount<=0) throw new Exception('充值金额不能为负值');
		
		$data=array(
			'amount'=>$amount,
			'actionUid'=>$this->user['uid'],
			'actionIP'=>$this->ip(true),
			'actionTime'=>$this->time,
			'rechargeTime'=>$this->time
		);
		
		$this->beginTransaction();
		try{
			// 查找用户信息
			if($uIN==1){
				$user=$this->getRow("select uid, username, coin, fcoin from {$this->prename}members where uid=$uid");
			}else{
				$user=$this->getRow("select uid, username, coin, fcoin from {$this->prename}members where username='$uid'");
			}
			if(!$user) throw new Exception('用户不存在');
			//if(($amount+$user['coin'])<0) $amount=$user['coin'];
			
			$data['uid']=$user['uid'];
			$data['coin']=$user['coin'];
			$data['fcoin']=$user['fcoin'];
			$data['username']=$user['username'];
			$data['info']='系统充值';
			$data['state']=9;

			$sql="select id from {$this->prename}member_recharge where rechargeId=?";
			do{
				$data['rechargeId']=mt_rand(100000,999999);
			}while($this->getValue($sql, $data['rechargeId']));

			if($this->insertRow($this->prename .'member_recharge', $data)){
				$dataId=$this->lastInsertId();
				$this->addCoin(array(
					'uid'=>$user['uid'],
					'liqType'=>1,
					'coin'=>$amount,
					'extfield0'=>$dataId,
					'extfield1'=>$data['rechargeId'],
					'info'=>'充值'
				));
			}
			$this->addLog(3,$this->adminLogType[3].'[ID:'.$dataId.']', $data['uid'], $data['username']);
			
			$this->commit();
			return "充值成功";
		}catch(Exception $e){
			$this->rollBack();
			throw $e;
		}
	}
		
	/**
	 * 充值记录删除
	 */
	public final function rechargeDelete($id){
		$id=intval($id);
		if($this->updateRows($this->prename .'member_recharge', array('isDelete'=>1), 'id='.$id)){
			return '操作成功';
		}else{
			throw new Exception('操作失败');
		}
	}

	public final function rechargecd($id){
		$id=intval($id);
		if($this->updateRows($this->prename .'member_recharge', array('state'=>3), 'id='.$id)){
			return '操作成功';
		}else{
			throw new Exception('操作失败');
		}
	}
	/**
	*确认充值处理
	*/
	public final function rechargeActionModal($id){
		$id=intval($id);
		$this->display('business/rechargeOn-modal.php', 0, $id);
	}
	public final function rechargeHandle(){
		$para=$_POST;
		$id=$para['id'];
		unset($para['username']);
		$sql="select * from {$this->prename}member_recharge where id=?";
		$data=$this->getRow($sql, $id);
		if(!$data) throw new Exception('参数出错');
		if($data['state']) throw new Exception('充值已经到帐，请不要重复确认');
		if($data['isDelete']) throw new Exception('充值已经被删除');

		try{
			$this->beginTransaction();
			$para=array_merge(array('rechargeAmount'=>$para['rechargeAmount'], 'state'=>1, 'info'=>'手动确认', 'actionUid'=>$this->user['uid'], 'rechargeTime'=>$this->time, 'actionIP'=>$this->ip(true)), $this->getRow("select coin, fcoin from {$this->prename}members where uid={$data['uid']}"));

			if($this->updateRows($this->prename .'member_recharge', $para, 'id='. $data['id'])){
				$this->addCoin(array(
					'uid'=>$data['uid'],
					'coin'=>$para['rechargeAmount'],
					'liqType'=>1,
					'extfield0'=>$data['id'],
					'extfield1'=>$data['rechargeId'],
					'info'=>'充值'
				));
				
				$this->update("UPDATE {$this->prename}order SET state = 2 WHERE state=0 and order_number = ?", $data['rechargeId']);
			}

			$this->addLog(2,$this->adminLogType[2].'[充值编号:'.$data['rechargeId'].']', $data['uid'], $data['username']);
			$this->commit();
			echo '操作成功';
		}catch(Exception $e){
			$this->rollBack();
			throw $e;
		}
	}
	
	/*修改投注信息*/
	public final function betInfoUpdate($id){
		$id=intval($id);
		$this->display('business/update-bet-info.php', 0, $id);
	}
	/*更新订单信息*/
	public final function betinfoUpdateed(){
		$para=$_POST;
		$betid=$para['betid'];
		$uid=$para['uid'];
		$username=$para['username'];
		$cd=$para['cd'];
		unset($para['betid']);
		unset($para['uid']);
		unset($para['username']);
		unset($para['cd']);
		if($cd=='2'){
		   //撤销单据判断
		$this->beginTransaction();
		  try{
			$sql="select * from {$this->prename}bets where id=?";
			if(!$data=$this->getRow($sql, $betid)) throw new Exception('找不到该订单!');
			if($data['isDelete']) throw new Exception('这单子已经撤单过了。');
			if($data['lotteryNo']) throw new Exception('已经开奖，不能撤单!');
			if($data['betInfo']!=''){
			$amount=$data['totalMoney'];
			}else{
			$amount=$data['money'];
			}
			$amount=abs($amount);
			// 添加用户资金变更日志
			$this->addCoin(array(
				'uid'=>$data['uid'],
				'type'=>$data['type'],
				'playedId'=>$data['playedId'],
				'liqType'=>7,
				'info'=>"系统撤单",
				'extfield0'=>$id,
				'coin'=>$amount,
			));
			// 更改定单为已经删除状态
			$sql="update {$this->prename}bets set isDelete=1 where id=?";
			$this->update($sql, $betid);
			$this->commit();
		  }catch(Exception $e){
			$this->rollBack();
			throw $e;
		  }
		}
		$bet=$this->getRow("select * from {$this->prename}bets where id={$betid}");
	    if(!$bet) throw new Exception('单号不存在');
		if($bet['lotteryNo']) throw new Exception('已开奖过，不能再修改投注信息');
		$this->getPlayeds();
		$played=$this->playeds[$para['playedId']];
		$playedGroup=$this->playedGroup[$played['played_groupid']];
		$para=array_merge($para,array('playedGroup'=>$playedGroup['id'], 'Groupname'=>$playedGroup['name'], 'actionData'=>$played['name']));

		if($this->updateRows($this->prename .'bets', $para, 'id='.$betid)){
			$this->addLog(18,$this->adminLogType[18].'[投注编号：'.$betid.']',$uid,$username);
			echo '修改成功';
		}else{
			throw new Exception('未知出错');
		}
		
	}
	/*
		
		*/
	public final function betLog(){
		$this->display('business/bet-log.php');
	}
	
	public final function znzLog(){
		$this->display('business/bet-znz-log.php');
	}
	
	public final function coinLog(){
		$this->display('business/coin-log.php');
	}

}