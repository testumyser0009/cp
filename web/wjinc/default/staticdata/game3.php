<?php
$game3=$this->getRows("select * from {$this->prename}played_group order by id asc");
$allplayCat=array();
$playCates=array();
$idkey3=array();
foreach($game3 as $key => $var){
	$playCates['id']=intval($var['id']);
	$playCates['name']=$var['name'];

	$playCates['gameId'] = intval($var['type']);
	$playCates['code'] = $var['code'];
	$playCates['isShow'] = intval($var['isShow']);
	$playCates['enable'] = intval($var['enable']);//玩法禁用开关
	array_push($idkey3,$var['id']);
	array_push($allplayCat, $playCates);
}
$allplayCat2= array_combine($idkey3,$allplayCat);
echo 'var playCates = '.json_encode($allplayCat2).';';
?>
