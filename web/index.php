<?php
require 'lib/core/DBAccess.class';
require 'lib/core/Object.class';
require 'wjaction/default/WebBase.class.php';
require 'wjaction/default/WebLoginBase.class.php';

require 'config.php';


//php判断客户端是否为手机  
$agent = $_SERVER['HTTP_USER_AGENT'];
/*
if((strpos($agent,"NetFront") || strpos($agent,"iPhone") || strpos($agent,"MIDP-2.0")
    || strpos($agent,"Opera Mini") || strpos($agent,"UCWEB") || strpos($agent,"Android")
    || strpos($agent,"Windows CE") || strpos($agent,"SymbianOS")) && !isset($_GET['from']))
	header("Location:http://m.66acp.com/");
*/
$para=array();
if(isset($_SERVER['PATH_INFO'])){
	$para=explode('/', substr(str_replace('//','/',$_SERVER['PATH_INFO']),1));
	if($control=array_shift($para)){
		if($control=='static'){
			$control='static'.array_shift($para);
			$action=array_shift($para);
		}elseif(count($para)){
			$action=array_shift($para);
		}else{
			$action=$control;
			$control='index';
		}
		
	}else{
		$control='index';
		$action='main';
	}
}else{
	$control='index';
	$action='main';
}

$control=ucfirst($control);

if(strpos($action,'-')!==false){
	list($action, $page)=explode('-',$action);
}

if($control=='Game' || $control=='Center'){
//$action=preg_replace('/[0-9]/','',$action);
$action2=str_replace('.html','',strtolower(array_shift($para)));
if($action2 != 'index'){
$action=$action.$action2;
}
}
$action=str_replace('.','',$action);
$file=$conf['action']['modals'].$control.'.class.php';
if(!is_file($file)) notfound('找不到控制器');
try{
	require $file;
}catch(Exception $e){
	print_r($e);
	exit;
}

if(!class_exists($control)) notfound('找不到控制器1');
$jms=new $control($conf['db']['dsn'], $conf['db']['user'], $conf['db']['password']);
$jms->debugLevel=$conf['debug']['level'];

if(!method_exists($jms, $action)) notfound('方法不存在');
$reflection=new ReflectionMethod($jms, $action);
if($reflection->isStatic()) notfound('不允许调用Static修饰的方法');
if(!$reflection->isFinal()) notfound('只能调用final修饰的方法');

$jms->controller=$control;
$jms->action=$action;

$jms->charset=$conf['db']['charset'];
$jms->cacheDir=$conf['cache']['dir'];
$jms->setCacheDir($conf['cache']['dir']);
$jms->expire=($conf['cache']['expire']);
$jms->actionTemplate=$conf['action']['template'];
$jms->prename=$conf['db']['prename'];
$jms->title=$conf['web']['title'];
if(method_exists($jms, 'getSystemSettings')) $jms->getSystemSettings();

if($jms->settings['switchWeb']=='0'){
	$jms->display('close-service.php');
	exit;
}

if(isset($page)) $jms->page=$page;

if($q=$_SERVER['QUERY_STRING']){
	$para=array_merge($para, explode('/', $q));
}
if($para==null) $para=array();

$jms->headers=getallheaders();
if(isset($jms->headers['x-call'])){
	// 函数调用
	header('content-Type: application/json');
	try{
		ob_start();
		echo json_encode($reflection->invokeArgs($jms, $_POST));
		ob_flush();
	}catch(Exception $e){
		$jms->error($e->getMessage(), true);
	}
}elseif(isset($jms->headers['x-form-call'])){

	// 表单调用
	$accept=strpos($jms->headers['Accept'], 'application/json')===0;
	if($accept) header('content-Type: application/json');
	try{
		ob_start();
		if($accept){
			echo json_encode($reflection->invokeArgs($jms, $_POST));
		}else{
			json_encode($reflection->invokeArgs($jms, $_POST));
		}
		ob_flush();
	}catch(Exception $e){
		$jms->error($e->getMessage(), true);
	}
}elseif(strpos($jms->headers['Accept'], 'application/json')===0){
	// AJAX调用
	header('content-Type: application/json;charset=utf-8');
	try{
		call_user_func_array(array($jms, $action), $para);
		//echo json_encode($reflection->invokeArgs($jms, $para));
		//echo json_encode(call_user_func_array(array($jms, $action), $para));
	}catch(Exception $e){
		$jms->error($e->getmessage());
	}
}else{
	// 普通请求
	header('content-Type: text/html;charset=utf-8');
	//$reflection->invokeArgs($jms, $para);
	call_user_func_array(array($jms, $action), $para);
}
$jms=null;

function notfound($message){
	header('content-Type: text/plain; charset=utf8');
	header('HTTP/1.1 404 Not Found');
	die($message);
}
