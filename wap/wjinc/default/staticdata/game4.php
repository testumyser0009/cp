<?php
if($this->user['panid']==1){
$playsgame=$this->getRows("select * from {$this->prename}played order by id asc");
}elseif($this->user['panid']==2){
$playsgame=$this->getRows("select * from {$this->prename}played2 order by id asc");
}else{
$playsgame=$this->getRows("select * from {$this->prename}played order by id asc");
}
$playsjson=array();
$playsall=array();
$idkey4=array();
foreach($playsgame as $key => $var){
	$playsjson['id']=intval($var['id']);
	$playsjson['name']=$var['name'];
	if($var['alias'] == ''){
	$playsjson['alias']=null;	
	}else{
	$playsjson['alias'] = $var['alias'];
	}
	if($var['code'] == ''){
	$playsjson['code'] = null;
	}else{
	$playsjson['code'] = $var['code'];
	}
	$playsjson['gameId'] = intval($var['type']);
	$playsjson['playCateId'] = intval($var['played_groupid']);
	$playsjson['odds'] = floatval($var['odds']);
	$playsjson['rebate'] = floatval($var['rebate']);
	$playsjson['minMoney'] = intval($var['minMoney']);
	$playsjson['maxMoney'] = intval($var['maxMoney']);
	$playsjson['maxTurnMoney'] = intval($var['maxTurnMoney']);
	$playsjson['rebateDouble'] = doubleval($var['rebateDouble']);
	$playsjson['oddsDouble'] = doubleval($var['oddsDouble']);
	$playsjson['enable'] = intval($var['enable']);//玩法禁用开关
	array_push($idkey4,$var['id']);
	array_push($playsall,$playsjson);
	//$playsall[$var['id']]=array();
/*	if(max(array_keys($playsgame)) != $key){
	$playsall=$playsall.'"'.$var['id'].'":'.json_encode($playsjson).',';
	}else{
	$playsall=$playsall.'"'.$var['id'].'":'.json_encode($playsjson);
	}*/
}

$playsall2= array_combine($idkey4,$playsall);
echo 'var plays = '.json_encode($playsall2).';';
?>
