<?php
$gametype=$this->getRows("select * from {$this->prename}type order by sort asc");
if($gametype){
$games=array();
$allgames=array();
$idkey2=array();

	foreach($gametype as $key => $var){
		$games['id']=intval($var['id']);
		$games['name']=$var['title'];
		$games['sort'] = intval($var['sort']);
		$games['cate'] = intval($var['type']);
		$games['maxReward'] = 0;
		$games['open'] = abs($var['enable']-1); //彩种开启关闭
		$games['iconUrl'] = '';
		$games['pageUrl'] = "/game/".$var['name']."/index.html";
		$games['restStartDate'] = null;
		$games['restEndDate'] = null;
		
		$games['turnFormat'] = 'yyyyMMdd'; //备用参数
		$games['curTurnNum'] = ''; //备用参数
		
		$games['amount'] = intval($var['num']);
		$games['enable'] = $var['enable']; //玩法禁用
/*if(max(array_keys($gametype)) != $key){
$gametype2=$gametype2.json_encode($games).',';
$gametype22=$gametype22.'"'.$var['id'].'":'.json_encode($games).',';

}else{
$gametype2=$gametype2.json_encode($games);
$gametype22=$gametype22.'"'.$var['id'].'":'.json_encode($games);

}*/

	array_push($allgames,$games);	
	array_push($idkey2, $var['id']);
	
	}

}
$gameMap=array_combine($idkey2, $allgames);
echo 'var games = '.json_encode($allgames).';';
echo 'var gameMap = '.json_encode($gameMap).';';
?>