<?php 
	$conf[0]['title']='腾讯分分彩';
	$conf[0]['source']='腾讯官网';
	$conf[0]['enable']= true;
	$conf[0]['url']='http://www.test1.com?type=212&time=3';
	$conf[0]['parsefun']= 'txff';
	//如果是post的话
	$conf[0]['type']= 71;
	$conf[0]['params']['code'] = 'jsssc';
	
	
	$conf[1]['title']='极速飞艇';
	$conf[1]['source']='极速飞艇官网';
	$conf[1]['enable']= true;
	$conf[1]['url']='http://www.test1.com?type=212&time=31';
	$conf[1]['parsefun']= 'jsft';
	$conf[1]['type']= 72;
	//如果是post的话
	$conf[1]['params']['code'] = 'jsssc';
	$conf[1]['params']['id'] = '12';