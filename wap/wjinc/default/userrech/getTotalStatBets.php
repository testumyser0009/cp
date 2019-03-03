<?php 
$elemet=$_GET['elemet'];
$settled=$_GET['settled'];
$Date=date("Y-m-d",strtotime($_POST['date']));
/*$datestr=time()-24*3600;
if($endDate>$datestr){
	exit;
}*/
$sql=" and date = '{$Date}' ";
$sql=$sql.' order by type asc';
$list=$this->getRows("select * from {$this->prename}count where uid={$this->user['uid']} {$sql}");
$idkey=array();
$datanewarr=array();
$data=array();
$data['id']=null;
$data['gameId']=null;
$data['userId']=null;
$data['userName']=null;
$data['statDate']=null;
$data['betCount']=null;
$data['betMoney']=null;
$data['reward']=null;
$data['rewardRebate']=null;
$data['rebateMoney']=null;
$data['rewardDouble']=null;
$data['rebateMoneyDouble']=null;
$data['rewardRebateDouble']=null;
$data['betMoneyDouble']=null;
if($list){
foreach($list as $var){ 
$data['id']=null;
$data['gameId']=intval($var['type']);
$data['userId']=intval($var['uid']);
$data['userName']=$var['username'];
$data['statDate']=$var['date'];
$data['betCount']=$var['betCount'];
$data['betMoney']=floatval($var['betAmount']);
/*$data['reward']=floatval($var['zjAmount']);
$data['rewardRebate']=floatval($var['zjAmount']+$var['rebateMoney']);
$data['rebateMoney']=floatval($var['rebateMoney']);
$data['rewardDouble']=floatval($var['zjAmount']+$var['rebateMoney']);*/
$data['rebateMoneyDouble']=floatval($var['rebateMoney']);
$data['rewardRebateDouble']=floatval($var['zjAmount'] + $var['rebateMoney'] - $var['betAmount']);
$data['betMoneyDouble']=floatval($var['betAmount']);
array_push($idkey, $var['type']);
array_push($datanewarr, $data);
}
}
$datanewarr2= array_combine($idkey,$datanewarr);
echo json_encode($datanewarr2);

/*{"1":{"id":null,"gameId":1,"userId":null,"dlId":null,"dlName":null,"zdlId":null,"zdlName":null,"userName":null,"statDate":"2016-12-20 星期二","betCount":3,"betMoney":3.0,"reward":-1.01,"rewardRebate":-0.995,"rebateMoney":0.015,"userCount":null,"fullName":null,"rewardDouble":-1.01,"rebateMoneyDouble":0.015,"rewardRebateDouble":-0.995,"betMoneyDouble":3.0},"50":{"id":null,"gameId":50,"userId":null,"dlId":null,"dlName":null,"zdlId":null,"zdlName":null,"userName":null,"statDate":"2016-12-20 星期二","betCount":7,"betMoney":13.0,"reward":-1.46,"rewardRebate":-1.395,"rebateMoney":0.065,"userCount":null,"fullName":null,"rewardDouble":-1.46,"rebateMoneyDouble":0.065,"rewardRebateDouble":-1.395,"betMoneyDouble":13.0}}*/
?>