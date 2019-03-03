<?php if($this->user['uid']){	
header('location: /');
exit;
 } ?>
<!DOCTYPE HTML>
<html>
<head><meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>永利国际</title>
<link href="/yoy/css/home.css" rel="stylesheet">
<script type="text/javascript" src="/skin/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/skin/main/onload.js?version=20160420"></script>
<script type="text/javascript" src="/skin/main/reglogin.js"></script>
<script type="text/javascript" src="/js/guest.js"></script>
<script type="text/javascript" src="/yoy/js/global.js"></script>
<?php
if(!$_SESSION['from']){
	if($_GET['from'] == 'm'){
		session_start;
		$_SESSION['from']=$_GET['from'];
	}else{
		echo '<script type="text/javascript">browserRedirect();</script>';
	}
}
?>	
</head>

<body style="background-color:#be3918;">
<div class="header">
<div class="wrap">
<div class="header-1">
<span style="float:right">
<a href="javascript:void(0);" style="padding-right:5px;"><img src="/yoy/images/zh/1.png"></a>
<a href="javascript:void(0);" style="padding-right:5px;"><img src="/yoy/images/zh/2.png"></a>
<a href="javascript:void(0);"><img src="/yoy/images/zh/3.png"></a>
</span>
<a href="javascript:void(0);" onclick="down();">手机客户端下载</a>
<span style="padding:0px 15px;">|</span><a href="javascript:void(0);" onclick="guestLogin();">免费试玩</a>
<span style="padding:0px 15px;">|</span><a href="xl/index.php" target=_blank>线路检测</a><span style="padding:0px 15px;">|</span>
<a href="javascript:void(0);" onclick="SetHome(this,location.href);">设为首页</a><span style="padding:0px 15px;">|</span>
<a href="javascript:void(0);" onclick="AddFavorite()" style="padding-right:20px;">收藏本站</a>
</div>

<div class="header-2">
<div class="logoer">
<div id="ele-logo-wrap">
<a href="/index.php"  id="ele-logo-img" title="首页"><img src="/yoy/logoo.gif"  style="margin-top:5px;"></a>
</div>


  <style>
#ele-logo-wrap,
#ele-logo-img {
width: 320px;
height: 100px;
display: block;
cursor: pointer;
}
#ele-logo-wrap{ background-position: 100% 100%;}
#ele-logo-img { background-position: 0 0; }
  </style>
   



</div>
<div class="welcom"></div>
<div class="logins">
<div class="login-wrap">
<form action="/user/loginedto" method="post" onajax="userBeforeLoginto" enter="true" call="userLoginto" target="ajax">


<p class="login-unit login-unit-user">
<input name="username" id="username" type="text" class="login-input" tabindex="1" placeholder="账户" style="width:145px;">

</p>
<p class="login-unit-chk">
<span style="float:right; padding-right:10px; padding-top:3px;">
<a class="header-forget-pw" href="javascript:alert('请联系在线客服取回密码')" style="color:#FFF">忘记密码</a>
</span>
<input name="vcode" id="vcode" type="text" size="4" maxlength="4" style="padding-left:8px;" class="login-input" tabindex="3" placeholder="验证码">
<img alt="验证码" src="/user/vcode/<?=$this->time?>" title="看不清楚，点我换图" onclick="this.src='/user/vcode/'+(new Date()).getTime()" style="position: absolute; width:42px; height:18px;left: 62px;top: 5px;cursor: pointer;">
</p>
<p class="login-unit login-unit-pwd">
<input name="password" id="password" type="password" autocomplete="off" class="login-input" tabindex="2" placeholder="密码"/>
</p>
<input class="login-submit" name="Submit" type="submit" value="" tabindex="4" />

<a  href="/reg.php" ><img src="/yoy/images/join.png" width="82" height="29" style="margin-top:5px;"></a>
</form>

</div>
</div>
<div class="menuer">
<ul>
<li><a href="/index.php">网站首页</a></li>
<li><a href="/reg.php">注册开户</a></li>
<li><a href="/At7.php">存取帮助</a></li>
<li style="width:108px;"><a href="/At5.php">规则说明</a></li>
<li><a href="/At2.php">常见问题</a></li>
<li style="width:118px;"><a href="/At1.php">关于我们</a></li>
<li style="width:76px;"><a href="/At8.php">加盟合作</a></li>
<li style="width:138px;"><a href="/At6.php">最新优惠</a></li>
<li style="width:68px;"><a href="javascript:BBOnlineService();">在线客服</a></li>
</ul>
</div>
</div>


</div>
</div>