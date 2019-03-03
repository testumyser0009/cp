<?php 
header('content-Type: text/html;charset=utf-8');
if($this->user['uid']){
	$url='http://ag.66acp.com/moban.json'; 
	$html=file_get_contents($url);
	
	if($html==1){
		require_once('index1.php');
		//header("Location:/member/index1"); 
		//$this->display("member/index1");
	}else{
		require_once('index11.php');
		//header("Location:/member/index"); 
	}
	
	
}else{
	//$url1='http://ag.98bei.com/fmoban.json'; 
	//$html1=file_get_contents($url1);
	//echo $html1;
	//if($html1==1){
		//require_once('index2.php');
	//}else{
		//header("Location:/user/login"); 
		require_once('login1.php');
		//require_once('index3.php');
	//}
}
?>