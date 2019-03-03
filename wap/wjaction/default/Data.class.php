<?php
include_once 'Bet.class.php';
class Data extends WebLoginBase{
    
	//投注
	public final function postcode(){
		if($this->user['testFlag']==1){
			$this->guestpostcode();
		}else{
			if($this->user['panid']==1){
				$this->postcodea();
			}elseif($this->user['panid']==2){
				$this->postcodeb();
			}else{
				$this->postcodea();			
			}
		}
	}
	public final function postcodea(){
		//header('content-Type: text/html;charset=utf-8');		
		$betBean=$_POST['betBean'];	
		$gameId=intval($_POST['gameId']);
		$turnNum=$_POST['turnNum'];
		$postftime=$_POST['ftime'];
		$totalNums=intval($_POST['totalNums']);	
		$totalMoney=intval($_POST['totalMoney']);				
		$betinfo=array();
		$betinfo['success']=false;
		$betinfo['msg']='';
		$betinfo['code']=0;


		$liqType=101;
		$info='投注';
		$this->getSystemSettings();
		$this->freshSession();
		if(intval($this->settings['switchBuy'])==0){
			$betinfo['msg']='本平台已停止购买！';	
			echo json_encode($betinfo);
			exit;
		}elseif(intval($this->settings['switchDLBuy'])==0 && $this->user['type']==1){
			$betinfo['msg']='代理不能投注！';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('代理不能买单！');
		}elseif(intval($this->settings['switchZDLBuy'])==0 &&  $this->user['type']==2){
			$betinfo['msg']='总代理不能投注！';	
			echo json_encode($betinfo); 
			exit;
		}elseif(intval($this->settings['switchGDBuy'])==0 &&  $this->user['type']==3){
			$betinfo['msg']='股东不能投注！';	
			echo json_encode($betinfo); 
			exit;
		}elseif(count($betBean)==0){
			$betinfo['msg']='请先选择号码再提交投注';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('请先选择号码再提交投注');
			
		}elseif($postftime < $this->time){
			$betinfo['msg']='提交数据出错,请刷新再投';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('提交数据出错,请刷新再投');
		}
		
		$gameenable=$this->getValue("select enable from {$this->prename}type where id={$gameId}");
		if($gameenable !=1){  
			$betinfo['msg']='该游戏已停用,请刷新再投';	
			echo json_encode($betinfo); 
			exit;
		} 
		
		// 查询用户可用资金
		$userAmount=$this->getValue("select coin from {$this->prename}members where uid={$this->user['uid']}");
		if($userAmount < $totalMoney){  
			$betinfo['msg']='您的可用资金不足，请先充值';	//throw new Exception('您的可用资金不足，是否充值？');
			echo json_encode($betinfo); 
			exit;
		} 

		//检查时间 期数
		$ftime=$this->getTypeFtime($gameId);  //封单时间
		$actionTime=$this->getGameActionTime($gameId);  //当期时间
		$actionNo=$this->getGameActionNo($gameId);  //当期期数
		if($actionTime-$ftime != $postftime){
			$betinfo['msg']='投注失败1：你投注第'.$turnNum.'已过购买时间';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('投注失败：你投注第'.$turnNum.'已过购买时间');
		}
		if($actionNo != $turnNum){  
			$betinfo['msg']='投注失败2：你投注第'.$actionNo.'已过购买时间';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('投注失败：你投注第'.$turnNum.'已过购买时间');
		}
		if($actionTime-$ftime < $this->time){  
			$betinfo['msg']='投注失败3：你投注第'.$turnNum.'已过购买时间';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('投注失败：你投注第'.$turnNum.'已过购买时间');
		} 
		// 检查注数
		if($totalNums<1){  
			$betinfo['msg']='注数不能小于1，请重新投注';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('注数不能小于1，请重新投注');
		}
		
		if($totalNums > 1000){  
			$betinfo['msg']='注数不能大于1000，请重新投注';	//此处用于限制复选非正常投注及跳过POST数据限制
			echo json_encode($betinfo); 
			exit;
		}
		
		if($totalMoney<1){
			$betinfo['msg']='投注总金额不能小于1，请重新投注';	//此处用于限制复选非正常投注及跳过POST数据限制
			echo json_encode($betinfo); 
			exit;
		}
		
		//查询当前期数已投注总额
		$actionNoMoney=$this->getValue("select sum(money * totalNums) from {$this->prename}bets where uid={$this->user['uid']} and type={$gameId} and actionNo={$actionNo}");
		//查询用户单期投注总额限制		
		$usermaxTurnMoney=$this->getValue("select maxTurnMoney from {$this->prename}members where uid={$this->user['uid']}");
		if(($actionNoMoney +$totalMoney) > $usermaxTurnMoney && $usermaxTurnMoney){  
			$betinfo['msg']='您的单期投注金额只能小于'.$usermaxTurnMoney.',现已投注'.$actionNoMoney;	
			echo json_encode($betinfo); 
			exit;
		} 
		
		//$money2=0;
		// 查检每注的赔率是否正常
		$this->getPlayeds();
		foreach($betBean as $code){
			//检查时间 期数2
		    $ftime2=$this->getTypeFtime($gameId);  //封单时间2
		    $actionTime2=$this->getGameActionTime($gameId);  //当期时间2
		    $actionNo2=$this->getGameActionNo($gameId);  //当期期数2
            if($actionTime2-$ftime2 != $postftime){  
			$betinfo['msg']='投注失败：你投注第'.$turnNum.'已过购买时间';	
			echo json_encode($betinfo); 
			exit;
			}
		    if($actionNo2 != $turnNum){  
			$betinfo['msg']='投注失败：你投注第'.$turnNum.'已过购买时间';	
			echo json_encode($betinfo); 
			exit;
			}
		    if($actionTime-$ftime2 < $this->time){  
			$betinfo['msg']='投注失败：你投注第'.$turnNum.'已过购买时间';	
			echo json_encode($betinfo); 
			exit;
			}
			
			//检查开启
			$played=$this->playeds[$code['playId']];
			if(!$played['enable']){  
			$betinfo['msg']='游戏玩法已停用,请刷新再投'.$code['playId'];	//throw new Exception('游戏玩法组已停,请刷新再投');
			echo json_encode($betinfo); 
			exit;
			}
			
            //检查ID
			if($played['id'] != intval($code['playId'])){  
			$betinfo['msg']='提交数据出错，请重新投注';	//throw new Exception('提交数据出错，请重新投注');
			echo json_encode($betinfo); 
			exit;
			}
			
			//查询当前期数每个玩法已投注总额
			$code['playId']=intval($code['playId']);
			$playsql="select sum(money * totalNums) from {$this->prename}bets where uid={$this->user['uid']} and type={$gameId} and actionNo={$actionNo} and playedId={$code['playId']}";
			$playMoney=$this->getValue($playsql);
			//查询玩法设置中的每期每个玩法的投注总额限制
			$maxcount=$this->getmaxcount($code['playId']);
			if(($playMoney +intval($code['money'])) > $maxcount['maxTurnMoney']){ 
				$playeds=$this->playeds[$code['playId']];
				$playedGroup=$this->playedGroup[$playeds['played_groupid']];
				$betinfo['msg']='游戏玩法（'.$playedGroup['name'].'-'.$playeds['name'].'）每期金额只能小于'.$maxcount['maxTurnMoney'].',现已投注'.$playMoney;
				echo json_encode($betinfo); 
				exit;
			}
			
			$usermaxMoney=$this->getValue("select maxMoney from {$this->prename}members where uid={$this->user['uid']}");
			if($usermaxMoney < intval($code['money']) && $usermaxMoney){  
				$betinfo['msg']='您的单注金额只能小于'.$usermaxMoney;	
				echo json_encode($betinfo); 
				exit;
			} 
			
			if(floatval($code['money'])<$maxcount['minMoney']){  
			$betinfo['msg']='单注金额只能为大于'.$maxcount['minMoney'].'正整数';	//throw new Exception('金额只能为大于1正整数');
			echo json_encode($betinfo); 
			exit;
			}
		
			//单注最高检查
			if(floatval($code['money']) > $maxcount['maxMoney']){  
				$betinfo['msg']='单注金额只能为小于'.$maxcount['maxMoney'].'正整数';	//throw new Exception('金额只能为大于1正整数');
				echo json_encode($betinfo); 
				exit;
			}
		
			//$money2 +=intval($code['money']);
		}		
		
		// 开始事物处理
		$this->beginTransaction();
		try{
			$randorderid=mt_rand(10000,99999);
			if(isset($turnNum)) unset($turnNum);
			if(isset($postftime)) unset($postftime);
			foreach($betBean as $code){
				// 插入投注表
				$code['wjorderId']=date('YmdHis',$this->time).strval($this->createRandomStr(10));
				$code['orderId']=strval(date('YmdHis',$this->time)).$randorderid;
				$code['money']=floatval($code['money']);
				$amount=abs($code['money']);
				$sql=$code['wjorderId'].', ';
				$playeds=$this->playeds[$code['playId']];
				$playedGroup=$this->playedGroup[$playeds['played_groupid']];
				if($this->user['rebate']>0){
					$userrebate=$this->user['rebate'];
				}else{
					$userrebate=$playeds['rebate'];
				}
					$para=array(
					'wjorderId'=>$code['wjorderId'],
					'orderId'=>$code['orderId'],
					'serializeId'=>uniqid(),
					'uid'=>$this->user['uid'],
					'username'=>$this->user['username'],
					'nickname'=>$this->user['nickname'],
					'type'=>$gameId,
					'playedGroup'=>$playeds['played_groupid'],
					'playedId'=>$playeds['id'],
					'Groupname'=>$playedGroup['name'],
					//'playedname'=>$playeds['name'],
					'odds'=>$playeds['odds'],
					'actionNo'=>$actionNo,
					'actionTime'=>$this->time,
					'actionIP'=>$this->ip(true),
					'actionData' => $playeds['name'],
					'rebate' => $userrebate,
					'money' => $code['money'],
					'kjTime'=>$actionTime
					);
					
				//判断是否复选
				if($code['betInfo']){
					$para['betInfo']=$code['betInfo'];
					if($playedGroup['name'] != '连肖连尾'){
					$para['totalMoney']=$totalMoney;
					$para['totalNums']=$totalNums;
					$amount=$totalMoney;
					}
				}
				$this->insertRow($this->prename .'bets', $para);
	
				// 添加用户资金流动日志
				$this->addCoin(array(
					'uid'=>$this->user['uid'],
					'type'=>$gameId,
					'playedId'=>$para['playedId'],
					'liqType'=>$liqType,
					'info'=>$info,
					'extfield0'=>$this->lastInsertId(),
					'extfield1'=>$para['serializeId'],
					//'extfield2'=>$data['orderId'],
					'coin'=>-$amount,
					//'fcoin'=>$amount
				));
			}
			$this->commit();
			$betinfo['success']=true;
			$betinfo['msg']='投注成功';	//throw new Exception('您的可用资金不足，是否充值？');
			echo json_encode($betinfo); 
		}catch(Exception $e){
			$this->rollBack();
			$betinfo['success']=false;
			$betinfo['msg']='异常错误:'.$e.'请联系管理员';	//throw new Exception('您的可用资金不足，是否充值？');
			echo json_encode($betinfo); 
			exit;
			//throw $e;
		}
	}
	
	public final function postcodeb(){
		//header('content-Type: text/html;charset=utf-8');		
		$betBean=$_POST['betBean'];	
		$gameId=intval($_POST['gameId']);
		$turnNum=$_POST['turnNum'];
		$postftime=$_POST['ftime'];
		$totalNums=intval($_POST['totalNums']);	
		$totalMoney=intval($_POST['totalMoney']);				
		$betinfo=array();
		$betinfo['success']=false;
		$betinfo['msg']='';
		$betinfo['code']=0;


		$liqType=101;
		$info='投注';
		$this->getSystemSettings();
		$this->freshSession();
		if(intval($this->settings['switchBuy'])==0){
			$betinfo['msg']='本平台已停止购买！';	
			echo json_encode($betinfo);
			exit;
		}elseif(intval($this->settings['switchDLBuy'])==0 && $this->user['type']==1){
			$betinfo['msg']='代理不能投注！';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('代理不能买单！');
		}elseif(intval($this->settings['switchZDLBuy'])==0 &&  $this->user['type']==2){
			$betinfo['msg']='总代理不能投注！';	
			echo json_encode($betinfo); 
			exit;
		}elseif(intval($this->settings['switchGDBuy'])==0 &&  $this->user['type']==3){
			$betinfo['msg']='股东不能投注！';	
			echo json_encode($betinfo); 
			exit;
		}elseif(count($betBean)==0){
			$betinfo['msg']='请先选择号码再提交投注';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('请先选择号码再提交投注');
			
		}elseif($postftime < $this->time){
			$betinfo['msg']='提交数据出错,请刷新再投';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('提交数据出错,请刷新再投');
		}
		
		$gameenable=$this->getValue("select enable from {$this->prename}type where id={$gameId}");
		if($gameenable !=1){  
			$betinfo['msg']='该游戏已停用,请刷新再投';	
			echo json_encode($betinfo); 
			exit;
		} 

		// 查询用户可用资金
		$userAmount=$this->getValue("select coin from {$this->prename}members where uid={$this->user['uid']}");
		if($userAmount < $totalMoney){  
			$betinfo['msg']='您的可用资金不足，是否充值？';	//throw new Exception('您的可用资金不足，是否充值？');
			echo json_encode($betinfo); 
			exit;
		} 

		//检查时间 期数
		$ftime=$this->getTypeFtime($gameId);  //封单时间
		$actionTime=$this->getGameActionTime($gameId);  //当期时间
		$actionNo=$this->getGameActionNo($gameId);  //当期期数
		if($actionTime-$ftime != $postftime){
			$betinfo['msg']='投注失败1：你投注第'.$turnNum.'已过购买时间';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('投注失败：你投注第'.$turnNum.'已过购买时间');
		}
		if($actionNo != $turnNum){  
			$betinfo['msg']='投注失败2：你投注第'.$turnNum.'已过购买时间';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('投注失败：你投注第'.$turnNum.'已过购买时间');
		}
		if($actionTime-$ftime < $this->time){  
			$betinfo['msg']='投注失败3：你投注第'.$turnNum.'已过购买时间';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('投注失败：你投注第'.$turnNum.'已过购买时间');
		} 
		// 检查注数
		if($totalNums<1){  
			$betinfo['msg']='注数不能小于1，请重新投注';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('注数不能小于1，请重新投注');
		}
		
		if($totalNums > 1000){  
			$betinfo['msg']='注数不能大于1000，请重新投注';	//此处用于限制复选非正常投注及跳过POST数据限制
			echo json_encode($betinfo); 
			exit;
		}
		
		if($totalMoney<1){
			$betinfo['msg']='投注总金额不能小于1，请重新投注';	//此处用于限制复选非正常投注及跳过POST数据限制
			echo json_encode($betinfo); 
			exit;
		}

		//查询当前期数已投注总额
		$actionNoMoney=$this->getValue("select sum(money * totalNums) from {$this->prename}bets where uid={$this->user['uid']} and type={$gameId} and actionNo={$actionNo}");
		//查询用户单期投注总额限制		
		$usermaxTurnMoney=$this->getValue("select maxTurnMoney from {$this->prename}members where uid={$this->user['uid']}");
		if(($actionNoMoney +$totalMoney) > $usermaxTurnMoney && $usermaxTurnMoney){  
			$betinfo['msg']='您的单期投注金额只能小于'.$usermaxTurnMoney.',现已投注'.$actionNoMoney;	
			echo json_encode($betinfo); 
			exit;
		} 
		
		//$money2=0;
		// 查检每注的赔率是否正常
		$this->getplayeds2();
		foreach($betBean as $code){
			//检查时间 期数2
		    $ftime2=$this->getTypeFtime($gameId);  //封单时间2
		    $actionTime2=$this->getGameActionTime($gameId);  //当期时间2
		    $actionNo2=$this->getGameActionNo($gameId);  //当期期数2
            if($actionTime2-$ftime2 != $postftime){  
			$betinfo['msg']='投注失败：你投注第'.$turnNum.'已过购买时间';	
			echo json_encode($betinfo); 
			exit;
			}
		    if($actionNo2 != $turnNum){  
			$betinfo['msg']='投注失败：你投注第'.$turnNum.'已过购买时间';	
			echo json_encode($betinfo); 
			exit;
			}
		    if($actionTime-$ftime2 < $this->time){  
			$betinfo['msg']='投注失败：你投注第'.$turnNum.'已过购买时间';	
			echo json_encode($betinfo); 
			exit;
			}
			
			//检查开启
			$played=$this->playeds2[$code['playId']];
			if(!$played['enable']){  
			$betinfo['msg']='游戏玩法已停用,请刷新再投'.$code['playId'];	//throw new Exception('游戏玩法组已停,请刷新再投');
			echo json_encode($betinfo); 
			exit;
			}
			
            //检查ID
			if($played['id'] != intval($code['playId'])){  
			$betinfo['msg']='提交数据出错，请重新投注';	//throw new Exception('提交数据出错，请重新投注');
			echo json_encode($betinfo); 
			exit;
			}
			
			//查询当前期数每个玩法已投注总额
			$code['playId']=intval($code['playId']);
			$playsql="select sum(money * totalNums) from {$this->prename}bets where uid={$this->user['uid']} and type={$gameId} and actionNo={$actionNo} and playedId={$code['playId']}";
			$playMoney=$this->getValue($playsql);
			//查询玩法设置中的每期每个玩法的投注总额限制
			$maxcount2=$this->getmaxcount2($code['playId']);
			if(($playMoney +intval($code['money'])) > $maxcount2['maxTurnMoney']){ 
				$playeds2=$this->playeds2[$code['playId']];
				$playedGroup=$this->playedGroup[$playeds2['played_groupid']];
				$betinfo['msg']='游戏玩法（'.$playedGroup['name'].'-'.$playeds2['name'].'）每期金额只能小于'.$maxcount2['maxTurnMoney'].',现已投注'.$playMoney;
				echo json_encode($betinfo); 
				exit;
			}

			$usermaxMoney=$this->getValue("select maxMoney from {$this->prename}members where uid={$this->user['uid']}");
			if($usermaxMoney < intval($code['money']) && $usermaxMoney){  
				$betinfo['msg']='您的单注金额只能小于'.$usermaxMoney;	
				echo json_encode($betinfo); 
				exit;
			} 
			
			if(floatval($code['money'])<$maxcount2['minMoney']){  
			$betinfo['msg']='单注金额只能为大于'.$maxcount2['minMoney'].'正整数';	//throw new Exception('金额只能为大于1正整数');
			echo json_encode($betinfo); 
			exit;
			}
		
			//单注最高检查
			if(floatval($code['money']) > $maxcount2['maxMoney']){  
				$betinfo['msg']='单注金额只能为小于'.$maxcount2['maxMoney'].'正整数';	//throw new Exception('金额只能为大于1正整数');
				echo json_encode($betinfo); 
				exit;
			}
		
			//$money2 +=intval($code['money']);
		}		
		
		// 开始事物处理
		$this->beginTransaction();
		try{
			$randorderid=mt_rand(10000,99999);
			if(isset($turnNum)) unset($turnNum);
			if(isset($postftime)) unset($postftime);
			foreach($betBean as $code){
				// 插入投注表
				$code['wjorderId']=date('YmdHis',$this->time).strval($this->createRandomStr(10));
				$code['orderId']=strval(date('YmdHis',$this->time)).$randorderid;
				$code['money']=floatval($code['money']);
				$amount=abs($code['money']);
				$sql=$code['wjorderId'].', ';
				$playeds2=$this->playeds2[$code['playId']];
				$playedGroup=$this->playedGroup[$playeds2['played_groupid']];
				if($this->user['rebate']>0){
					$userrebate=$this->user['rebate'];
				}else{
					$userrebate=$playeds2['rebate'];
				}
					$para=array(
					'wjorderId'=>$code['wjorderId'],
					'orderId'=>$code['orderId'],
					'serializeId'=>uniqid(),
					'uid'=>$this->user['uid'],
					'username'=>$this->user['username'],
					'nickname'=>$this->user['nickname'],
					'type'=>$gameId,
					'playedGroup'=>$playeds2['played_groupid'],
					'playedId'=>$playeds2['id'],
					'Groupname'=>$playedGroup['name'],
					//'playedname'=>$playeds2['name'],
					'odds'=>$playeds2['odds'],
					'actionNo'=>$actionNo,
					'actionTime'=>$this->time,
					'actionIP'=>$this->ip(true),
					'actionData' => $playeds2['name'],
					'rebate' => $userrebate,
					'money' => $code['money'],
					'kjTime'=>$actionTime
					);
					
				//判断是否复选
				if($code['betInfo']){
					$para['betInfo']=$code['betInfo'];
					if($playedGroup['name'] != '连肖连尾'){
					$para['totalMoney']=$totalMoney;
					$para['totalNums']=$totalNums;
					$amount=$totalMoney;
					}
				}
				$this->insertRow($this->prename .'bets', $para);
	
				// 添加用户资金流动日志
				$this->addCoin(array(
					'uid'=>$this->user['uid'],
					'type'=>$gameId,
					'playedId'=>$para['playedId'],
					'liqType'=>$liqType,
					'info'=>$info,
					'extfield0'=>$this->lastInsertId(),
					'extfield1'=>$para['serializeId'],
					//'extfield2'=>$data['orderId'],
					'coin'=>-$amount,
					//'fcoin'=>$amount
				));
			}
			$this->commit();
			$betinfo['success']=true;
			$betinfo['msg']='投注成功';	//throw new Exception('您的可用资金不足，是否充值？');
			echo json_encode($betinfo); 
		}catch(Exception $e){
			$this->rollBack();
			$betinfo['success']=false;
			$betinfo['msg']='异常错误:'.$e.'请联系管理员';	//throw new Exception('您的可用资金不足，是否充值？');
			echo json_encode($betinfo); 
			exit;
			//throw $e;
		}
	}
	/**
	 * {{{ ajax撤单
	 */
	public final function deleteCode($id){
		$id=intval($id);
		$this->beginTransaction();
		try{
			throw new Exception('不能撤单');
			exit;
			$sql="select * from {$this->prename}bets where id=?";
			if(!$data=$this->getRow($sql, $id)) throw new Exception('找不到定单。');
			if($data['isDelete']) throw new Exception('这单子已经撤单过了。');
			if($data['uid']!=$this->user['uid']) throw new Exception('这单子不是您的，您不能撤单。');		// 可考虑管理员能给用户撤单情况
			if($data['kjTime']<=$this->time) throw new Exception('已经开奖，不能撤单');
			if($data['lotteryNo']) throw new Exception('已经开奖，不能撤单');

			// 冻结时间后不能撤单
			$this->getTypes();
			$ftime=$this->getTypeFtime($data['type']);
			if($data['kjTime']-$ftime<$this->time) throw new Exception('这期已经结冻，不能撤单');

			$amount=$data['money'];
			$amount=abs($amount);
			// 添加用户资金变更日志
			$this->addCoin(array(
				'uid'=>$data['uid'],
				'type'=>$data['type'],
				'playedId'=>$data['playedId'],
				'liqType'=>7,
				'info'=>"撤单",
				'extfield0'=>$id,
				'coin'=>$amount,
				//'fcoin'=>-$amount
			));

			// 更改定单为已经删除状态
			$sql="update {$this->prename}bets set isDelete=1 where id=?";
			$this->update($sql, $id);

			$this->commit();
		}catch(Exception $e){
			$this->rollBack();
			throw $e;
		}
	}
	
	public final function guestpostcode(){
		//header('content-Type: text/html;charset=utf-8');		
		$betBean=$_POST['betBean'];	
		$gameId=intval($_POST['gameId']);
		$turnNum=$_POST['turnNum'];
		$postftime=$_POST['ftime'];
		$totalNums=intval($_POST['totalNums']);	
		$totalMoney=intval($_POST['totalMoney']);				
		$betinfo=array();
		$betinfo['success']=false;
		$betinfo['msg']='';
		$betinfo['code']=0;


		$liqType=101;
		$info='投注';
		$this->getSystemSettings();
		$this->freshSession();
		if(intval($this->settings['switchBuy'])==0){
			$betinfo['msg']='本平台已停止购买！';	
			echo json_encode($betinfo);
			exit;
		}elseif(intval($this->settings['switchDLBuy'])==0 && $this->user['type']==1){
			$betinfo['msg']='代理不能投注！';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('代理不能买单！');
		}elseif(intval($this->settings['switchZDLBuy'])==0 &&  $this->user['type']==2){
			$betinfo['msg']='总代理不能投注！';	
			echo json_encode($betinfo); 
			exit;
		}elseif(intval($this->settings['switchGDBuy'])==0 &&  $this->user['type']==3){
			$betinfo['msg']='股东不能投注！';	
			echo json_encode($betinfo); 
			exit;
		}elseif(count($betBean)==0){
			$betinfo['msg']='请先选择号码再提交投注';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('请先选择号码再提交投注');
			
		}elseif($postftime < $this->time){
			$betinfo['msg']='提交数据出错,请刷新再投';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('提交数据出错,请刷新再投');
		}
		
		$gameenable=$this->getValue("select enable from {$this->prename}type where id={$gameId}");
		if($gameenable !=1){  
			$betinfo['msg']='该游戏已停用,请刷新再投';	
			echo json_encode($betinfo); 
			exit;
		} 
		
		// 查询用户可用资金
		$userAmount=$this->getValue("select coin from {$this->prename}guestmembers where uid={$this->user['uid']}");
		if($userAmount < $totalMoney){  
			$betinfo['msg']='您的可用资金不足，请先充值';	//throw new Exception('您的可用资金不足，是否充值？');
			echo json_encode($betinfo); 
			exit;
		} 

		//检查时间 期数
		$ftime=$this->getTypeFtime($gameId);  //封单时间
		$actionTime=$this->getGameActionTime($gameId);  //当期时间
		$actionNo=$this->getGameActionNo($gameId);  //当期期数
		if($actionTime-$ftime != $postftime){
			$betinfo['msg']='投注失败1：你投注第'.$turnNum.'已过购买时间';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('投注失败：你投注第'.$turnNum.'已过购买时间');
		}
		if($actionNo != $turnNum){  
			$betinfo['msg']='投注失败2：你投注第'.$actionNo.'已过购买时间';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('投注失败：你投注第'.$turnNum.'已过购买时间');
		}
		if($actionTime-$ftime < $this->time){  
			$betinfo['msg']='投注失败3：你投注第'.$turnNum.'已过购买时间';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('投注失败：你投注第'.$turnNum.'已过购买时间');
		} 
		// 检查注数
		if($totalNums<1){  
			$betinfo['msg']='注数不能小于1，请重新投注';	
			echo json_encode($betinfo); 
			exit;
			//throw new Exception('注数不能小于1，请重新投注');
		}
		
		if($totalNums > 1000){  
			$betinfo['msg']='注数不能大于1000，请重新投注';	//此处用于限制复选非正常投注及跳过POST数据限制
			echo json_encode($betinfo); 
			exit;
		}
		
		if($totalMoney<1){
			$betinfo['msg']='投注总金额不能小于1，请重新投注';	//此处用于限制复选非正常投注及跳过POST数据限制
			echo json_encode($betinfo); 
			exit;
		}
		
		//查询当前期数已投注总额
		$actionNoMoney=$this->getValue("select sum(money * totalNums) from {$this->prename}guestbets where uid={$this->user['uid']} and type={$gameId} and actionNo={$actionNo}");
		//查询用户单期投注总额限制		
		$usermaxTurnMoney=$this->getValue("select maxTurnMoney from {$this->prename}guestmembers where uid={$this->user['uid']}");
		if(($actionNoMoney +$totalMoney) > $usermaxTurnMoney && $usermaxTurnMoney){  
			$betinfo['msg']='您的单期投注金额只能小于'.$usermaxTurnMoney.',现已投注'.$actionNoMoney;	
			echo json_encode($betinfo); 
			exit;
		} 
		
		//$money2=0;
		// 查检每注的赔率是否正常
		$this->getPlayeds();
		foreach($betBean as $code){
			//检查时间 期数2
		    $ftime2=$this->getTypeFtime($gameId);  //封单时间2
		    $actionTime2=$this->getGameActionTime($gameId);  //当期时间2
		    $actionNo2=$this->getGameActionNo($gameId);  //当期期数2
            if($actionTime2-$ftime2 != $postftime){  
			$betinfo['msg']='投注失败：你投注第'.$turnNum.'已过购买时间';	
			echo json_encode($betinfo); 
			exit;
			}
		    if($actionNo2 != $turnNum){  
			$betinfo['msg']='投注失败：你投注第'.$turnNum.'已过购买时间';	
			echo json_encode($betinfo); 
			exit;
			}
		    if($actionTime-$ftime2 < $this->time){  
			$betinfo['msg']='投注失败：你投注第'.$turnNum.'已过购买时间';	
			echo json_encode($betinfo); 
			exit;
			}
			
			//检查开启
			$played=$this->playeds[$code['playId']];
			if(!$played['enable']){  
			$betinfo['msg']='游戏玩法已停用,请刷新再投'.$code['playId'];	//throw new Exception('游戏玩法组已停,请刷新再投');
			echo json_encode($betinfo); 
			exit;
			}
			
            //检查ID
			if($played['id'] != intval($code['playId'])){  
			$betinfo['msg']='提交数据出错，请重新投注';	//throw new Exception('提交数据出错，请重新投注');
			echo json_encode($betinfo); 
			exit;
			}
			
			//查询当前期数每个玩法已投注总额
			$code['playId']=intval($code['playId']);
			$playsql="select sum(money * totalNums) from {$this->prename}guestbets where uid={$this->user['uid']} and type={$gameId} and actionNo={$actionNo} and playedId={$code['playId']}";
			$playMoney=$this->getValue($playsql);
			//查询玩法设置中的每期每个玩法的投注总额限制
			$maxcount=$this->getmaxcount($code['playId']);
			if(($playMoney +intval($code['money'])) > $maxcount['maxTurnMoney']){ 
				$playeds=$this->playeds[$code['playId']];
				$playedGroup=$this->playedGroup[$playeds['played_groupid']];
				$betinfo['msg']='游戏玩法（'.$playedGroup['name'].'-'.$playeds['name'].'）每期金额只能小于'.$maxcount['maxTurnMoney'].',现已投注'.$playMoney;
				echo json_encode($betinfo); 
				exit;
			}
			
			$usermaxMoney=$this->getValue("select maxMoney from {$this->prename}guestmembers where uid={$this->user['uid']}");
			if($usermaxMoney < intval($code['money']) && $usermaxMoney){  
				$betinfo['msg']='您的单注金额只能小于'.$usermaxMoney;	
				echo json_encode($betinfo); 
				exit;
			} 
			
			if(floatval($code['money'])<$maxcount['minMoney']){  
			$betinfo['msg']='单注金额只能为大于'.$maxcount['minMoney'].'正整数';	//throw new Exception('金额只能为大于1正整数');
			echo json_encode($betinfo); 
			exit;
			}
		
			//单注最高检查
			if(floatval($code['money']) > $maxcount['maxMoney']){  
				$betinfo['msg']='单注金额只能为小于'.$maxcount['maxMoney'].'正整数';	//throw new Exception('金额只能为大于1正整数');
				echo json_encode($betinfo); 
				exit;
			}
		
			//$money2 +=intval($code['money']);
		}		
		
		// 开始事物处理
		$this->beginTransaction();
		try{
			$randorderid=mt_rand(10000,99999);
			if(isset($turnNum)) unset($turnNum);
			if(isset($postftime)) unset($postftime);
			foreach($betBean as $code){
				// 插入投注表
				$code['wjorderId']=date('YmdHis',$this->time).strval($this->createRandomStr(10));
				$code['orderId']=strval(date('YmdHis',$this->time)).$randorderid;
				$code['money']=floatval($code['money']);
				$amount=abs($code['money']);
				$sql=$code['wjorderId'].', ';
				$playeds=$this->playeds[$code['playId']];
				$playedGroup=$this->playedGroup[$playeds['played_groupid']];
				if($this->user['rebate']>0){
					$userrebate=$this->user['rebate'];
				}else{
					$userrebate=$playeds['rebate'];
				}
					$para=array(
					'wjorderId'=>$code['wjorderId'],
					'orderId'=>$code['orderId'],
					'serializeId'=>uniqid(),
					'uid'=>$this->user['uid'],
					'username'=>$this->user['username'],
					'nickname'=>$this->user['nickname'],
					'type'=>$gameId,
					'playedGroup'=>$playeds['played_groupid'],
					'playedId'=>$playeds['id'],
					'Groupname'=>$playedGroup['name'],
					//'playedname'=>$playeds['name'],
					'odds'=>$playeds['odds'],
					'actionNo'=>$actionNo,
					'actionTime'=>$this->time,
					'actionIP'=>$this->ip(true),
					'actionData' => $playeds['name'],
					'rebate' => $userrebate,
					'money' => $code['money'],
					'kjTime'=>$actionTime
					);
					
				//判断是否复选
				if($code['betInfo']){
					$para['betInfo']=$code['betInfo'];
					if($playedGroup['name'] != '连肖连尾'){
					$para['totalMoney']=$totalMoney;
					$para['totalNums']=$totalNums;
					$amount=$totalMoney;
					}
				}
				$this->insertRow($this->prename .'guestbets', $para);
	
				// 添加用户资金流动日志
				$this->guestaddCoin(array(
					'uid'=>$this->user['uid'],
					'type'=>$gameId,
					'playedId'=>$para['playedId'],
					'liqType'=>$liqType,
					'info'=>$info,
					'extfield0'=>$this->lastInsertId(),
					'extfield1'=>$para['serializeId'],
					//'extfield2'=>$data['orderId'],
					'coin'=>-$amount,
					//'fcoin'=>$amount
				));
			}
			$this->commit();
			$betinfo['success']=true;
			$betinfo['msg']='投注成功';	//throw new Exception('您的可用资金不足，是否充值？');
			echo json_encode($betinfo); 
		}catch(Exception $e){
			$this->rollBack();
			$betinfo['success']=false;
			$betinfo['msg']='异常错误:'.$e.'请联系管理员';	//throw new Exception('您的可用资金不足，是否充值？');
			echo json_encode($betinfo); 
			exit;
			//throw $e;
		}
	}
}
