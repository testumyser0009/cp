<?php 
$dataarr=$this->getRows("select * from {$this->prename}content where enable=1 order by addtime desc, id desc");
if($dataarr){
	$data=array();
	$data['type_1']=array();
	foreach($dataarr as $var){
		$list=array();
		$list['id']=$var['id'];
		$list['userId']=$var['userId'];
		$list['type']=intval($var['type']);
		$list['message']=$var['content'];
		$list['channel']=$var['channel'];
		$list['title']=$var['title'];
		$list['addTime']=date('Y-m-d H:i:s',$var['addTime']);
		$list['updateTime']=date('Y-m-d H:i:s',$var['addTime']);
		array_push($data['type_1'], $list);
		
	}
	echo 'var MESSAGES = '.json_encode($data);	
}

/*var MESSAGES = {"type_1":[],"type_0":[]};*/
?>