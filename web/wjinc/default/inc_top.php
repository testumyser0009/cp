<?php
if(!$this->user['type']){
	echo '您无权访问此页面';
	exit;
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
<meta NAME="robots" CONTENT="noindex,nofollow">
<meta name="robots" content="noarchive">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href='/skin/main/bl_ococ.css?version=20160420' rel="stylesheet" type="text/css" />
<link href="/skin/new/css/lib.min.css?version=20160420"  type="text/css" rel="stylesheet" />
<!--new-->
<link type="text/css" rel="stylesheet" href="/skin/js/jqueryui/skin/smoothness/jquery-ui-1.8.23.custom.css" />
<script type="text/javascript" src="/skin/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/skin/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/skin/js/Array.ext.js"></script>
<script>var TIP=true;</script>
<script type="text/javascript" src="/skin/main/function.js?version=20160420"></script>
<script type="text/javascript" src="/skin/main/onload.js?version=20160420"></script>
<script type="text/javascript" src="/skin/js/jqueryui/jquery-ui-1.8.23.custom.min.js"></script>
<script type="text/javascript" src="/skin/js/jqueryui/i18n/jquery.ui.datepicker-zh-CN.js"></script>
<script type="text/javascript" src="/skin/js/jquery.messager.js"></script>
<script type="text/javascript" src="/skin/js/gamecommon.js"></script>
<link href="/skin/new/css/mem.css" type="text/css" rel="stylesheet" />
<style type="text/css">
#dailinav {
	width: 916px;
	margin-top: 10px;
	margin-bottom:3px;
	padding: 5px 5px 5px 5px;
}
#dailinav li {
	padding: 5px;
	display: inline;
	list-style-type: none;
	background: #3682d0;
	/*background: #c32828;*/
	/*background: #414141;*/
}
#dailinav li a{
	color:#fff;
	font-size:14px;
}
</style>
<script type="text/javascript">
$(document).ready(function () {
    $("#member").click(
     function(){
		  $("#membernav").slideToggle();
		 }
    );
	$("#daili").click(
     function(){
		  $("#dailinav").slideToggle();
		 }
    );
	$("#report").click(
     function(){
		  $("#reportnav").slideToggle();
		 }
    );
});
</script>
</head>
<body>
<script>
$(document).ready(function () {
    $("#lotteryListEntry").click(
     function(){
		  $("#lotteryList").slideToggle();
		 }
    );
});
</script>
<div id="dailinav" style="font-weight: normal;">
  <li><a href="/team/memberList">会员管理</a></li>
  <li><a href="/team/onlineMember">在线会员</a></li>
  <li><a href="/team/gameRecord">团队记录</a></li>
  <li><a href="/team/report">团队盈亏</a></li>
  <li><a href="/team/coin">团队帐变</a></li>
  <li><a href="/team/cashRecord">团队提现</a></li>
  <li><a href="/team/linkList">推广链接</a></li>
</div>
