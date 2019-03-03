<?php 
$sql=" and (name='大' or name='小' or name='单' or name='双' or name='龙' or name='虎' or name like '冠亚%')";	
$clong=$this->getRows("select id, name, played_groupid from {$this->prename}played where type={$gameId} {$sql} order by id asc");
/*echo $this->pk10changlong(50, '冠亚大');
echo $this->pk10changlong(50, '冠亚小');
echo $this->pk10changlong(50, '冠亚小');*/
$curStatList=array();
$statarr=array();
if($clong){
	foreach($clong as $key => $var){
		$playedGroup=$this->playedGroup[$var['played_groupid']];
		$count=$this->pk10cl($gameId, $var['name'],$playedGroup['name']);
		if($count>2){
		$statarr['playId']=$var['id'];
		$statarr['playName']=$var['name'];
		$statarr['gameId']=$gameId;
		$statarr['playCateId']=$var['played_groupid'];
		$statarr['playCateName']=$playedGroup['name'];
		$statarr['count']=$count;
		array_push($curStatList,$statarr);
		}
		//echo $this->pk10cl($gameId, $var['name'],$playedGroup['name']);
	}
	foreach($curStatList as $arr2){
	$curStatList2[]=$arr2["count"];
	}
	array_multisort($curStatList2, SORT_DESC, $curStatList);	
	//var_dump($curStatList);
	echo 'curStatList='.json_encode($curStatList).';jsonpStatCallback(curStatList)';
}
?>