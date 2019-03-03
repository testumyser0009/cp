<?php
	include "functions.php";
	include "parse_function.php";
	include "config.php";
	$item = $conf[1];
	
	$url  = $item['url'];
	$params  = $item['params'];
	$html = get_html($url,$params);
	if(!function_exists($item['parsefun'])){
		$msg = $item['title']."的数据解析方法".$item['parsefun']."不存在";
		log_error($msg);
		return false;
	}
	$results = $item['parsefun']($html,$item['type']);
	if($results['status']==0){
		log_error($results['msg']);
		return false;
	}
	$msg = $item['title'].' '.$results['data']['number'].' 采集成功!数据为: '.$results['data']['data'];
	log_info($msg);
	$number = $results['data']['number'];
	$type = $results['data']['type'];
	$time = $results['data']['time'];
	$data = $results['data']['data'];
	
	$sql = "SELECT * FROM ssc_data WHERE type={$type} AND number='{$number}'";
	if(0){
		$msg = $item['title'].' '.$results['data']['number'].'数据库已经存在了该数据';
		log_info($msg);
	}
	
	$sql ="insert into ssc_data(type, time, number, data) values({$type},{$time},'{$number}','{$data}')";
	
	//开奖
	
	

	
