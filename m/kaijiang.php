<?php
date_default_timezone_set('PRC');
	if($_GET["type"]==73){
	$arr= array();
	while(count($arr)<10){
		$rand_num = rand(1,10);
		if(!in_array($rand_num,$arr)){
			array_push($arr,$rand_num);
		}
	}

	$time = strtotime(date('Y-m-d',time()));
	
	$actionNo = intval((time()-$time)/90);
	$issue = date("ymd").substr(1000+$actionNo,1);

	//$issue = "20190222046";
	$codes = implode(",",$arr);
	$data[0]['issue'] = $issue;
	$data[0]['code'] = $codes;
	echo json_encode($data);
	}else{
	$arr= array();
	while(count($arr)<10){
		$rand_num = rand(1,10);
		if(!in_array($rand_num,$arr)){
			array_push($arr,$rand_num);
		}
	}

	$time = strtotime(date('Y-m-d',time()));
	
	$actionNo = intval((time()-$time)/75);
	$issue = date("Ymd").substr(10000+$actionNo,1);

	//$issue = "20190222046";
	$codes = implode(",",$arr);
	$data[0]['issue'] = $issue;
	$data[0]['code'] = $codes;
	echo json_encode($data);
		
		
		
		
	}