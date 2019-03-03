<?php
$gameId=intval($_POST['gameId']);
$toTime=strtotime('00:00:00');
$totalMoney=$balancedMoney=$unbalancedMoney=0;

if($gameId==70){
$actionNo=$this->getGamenextNo($gameId);
$lastNo=intval($actionNo['actionNo'])-1;
//echo $lastNo;
$sql=" and type={$gameId} and actionNo={$lastNo} ";
}elseif($gameId){
$sql=" and type={$gameId} and actionTime>={$toTime} ";
}else{
$sql=" and actionTime>={$toTime} ";
}
$sql=$sql.' order by id desc';
if($this->user['testFlag']==1){
$list=$this->getRows("select * from {$this->prename}guestbets where  isDelete=0 and uid={$this->user['uid']}  {$sql}");
$userAmount=$this->getValue("select coin from {$this->prename}guestmembers where uid={$this->user['uid']}");
}else{
$list=$this->getRows("select * from {$this->prename}bets where  isDelete=0 and uid={$this->user['uid']}  {$sql}");
$userAmount=$this->getValue("select coin from {$this->prename}members where uid={$this->user['uid']}");
}

$userinfo=array();
$userAmount=$this->getValue("select coin from {$this->prename}members where uid={$this->user['uid']}");
$userinfo['balance']=floatval($userAmount);		
$userinfo['unbalancedMoney']=floatval($unbalancedMoney);		
$userinfo['totalTotalMoney']=floatval($TotalMoney-$balancedMoney);

$userinfo['userBetNew']=null;
$userinfo['userBetWinList']=null;
$userinfo['pushMessage']=null;
$userinfo['userNoticeMsg']=0;

$listarr=array();
$listarr['id']=null;
$listarr['userId']=null;
$listarr['userName']=null;
/*$listarr['dlId']=null;
$listarr['dlName']=null;
$listarr['zdlId']=null;
$listarr['zdlName']=null;*/
$listarr['playId']=null;
$listarr['playCateId']=null;
$listarr['money']=0;
$listarr['odds']=0;
$listarr['rebate']=0;
$listarr['addTime']=null;
$listarr['turnNum']=null;
$listarr['gameId']=null;
$listarr['status']=0; //0为未结明细,1为已结明细
$listarr['orderNo']=null;
$listarr['openNum']=null;
$listarr['openTime']=null;
$listarr['testFlag']=$this->user['testFlag'];
$listarr['multiple']=1;
$listarr['betInfo']='';
$listarr['betRebateMoney']=0;
$listarr['unbalancedMoney']=0;
$listarr['resultMoney']=0;

if($list){
$userinfo['userBetNew']=array();	
	foreach($list as $key => $var){ 

		if(!$var['lotteryNo'] && $key <15){	
			$betmoney=$var['money'] * $var['totalNums'];
			$listarr['id']=intval($var['id']);
			$listarr['userId']=intval($var['uid']);
			$listarr['userName']=$var['username'];
			/*$listarr['dlId']=null; //代理
			$listarr['zdlId']=null;//总代理*/
			$listarr['playId']=intval($var['playedId']);
			$listarr['playCateId']=intval($var['playedGroup']);
			$listarr['odds']=floatval($var['odds']);
			$listarr['rebate']=floatval($var['rebate']);
			$listarr['addTime']=date("Y-m-d H:i:s",$var['actionTime']);
			$listarr['turnNum']=$var['actionNo'];
			$listarr['gameId']=$var['type'];
			$listarr['money']=$betmoney;
			//未结算明细
			$listarr['unbalancedMoney']=floatval(sprintf("%.2f",$var['money']*$var['odds']-$betmoney+$betmoney*$var['rebate']));//用户金额变化未结算显示实际可赢金额包括退水
			$listarr['resultMoney']=$listarr['unbalancedMoney']; //未结明细可赢额包括退水//已结明细结果包括退水
			if($var['rebate']){
			$listarr['betRebateMoney']=$betmoney*$var['rebate']; //投注退水金额
			}
			$listarr['orderNo']=$var['wjorderId'];
			$listarr['openNum']=$var['lotteryNo'];
			$listarr['remark']='';
			$lastNo=$this->getGameLastNo($var['type'],$var['time']);
			$listarr['openTime']=date("Y-m-d H:i:s", $var['kjTime']);
			$listarr['testFlag']=$this->user['testFlag'];//测试用户为1		
			array_push($userinfo['userBetNew'], $listarr); 
		}
			if(!$var['lotteryNo']){
				//未开奖投注总金额		
				$unbalancedMoney+=$betmoney;
			}
			if($var['lotteryNo']){
				//已开奖投注总金额
				if($var['betInfo'] !=''){
					$betmoney2=$var['money'] * $var['totalNums'];	
				}else{
					$betmoney2=$var['money'];
				}
				$balancedMoney+=$betmoney2;
				$totalrebatemoney+=$var['rebateMoney'];			
			}			
			if($var['zjCount'] && $var['lotteryNo']){
			//已派奖总金额
			$TotalMoney+=$var['bonus'];
			}

	}
		$userinfo['unbalancedMoney']=floatval($unbalancedMoney);	
		$userinfo['totalTotalMoney']=floatval(sprintf("%.2f",$TotalMoney-$balancedMoney+$totalrebatemoney));
}
echo json_encode($userinfo);

/*{"balance":1996.0,"unbalancedMoney":4.0,"totalTotalMoney":0.0,"userBetWinList":null,
"userBetNew":[{"id":20630469,"userId":70742,"userName":"guest_148165246240","dlId":null,"dlName":"null","zdlId":null,"zdlName":"null",
"playId":5510411,"playCateId":104,"betInfo":"","multiple":1,"winCount":null,"money":2.0,"odds":1.99,"rebate":0.005,"addTime":"2016-12-14 02:09:06",
"turnNum":"20161213158","gameId":55,"status":0,"reward":0.0,"rewardRebate":null,"rebateMoney":null,"betSrc":0,"orderNo":"12161214020906790912562",
"openNum":"null","remark":"null","result":0,"userCount":null,"move":0,"openTime":null,"statTime":"2016-12-13 00:00:00",
"testFlag":1,"fullName":"null","formatAddTime":"12-14 02:09","rebateDouble":0.005,"betRebateMoney":0.01,"winMoney":3.98,
"oddsDouble":1.99,"moneyDouble":2.0,"rewardRebateDouble":0.0,"unbalancedMoney":1.99,"resultMoney":1.99}
],"pushMessage":null,"userNoticeMsg":0}
*/	
?>
