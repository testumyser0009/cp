
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<title>Welcome</title>
<meta name="renderer" content="webkit" /> 
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/static/css/style.css" rel="stylesheet" type="text/css" />
<link href="/static/css/skin.css" rel="stylesheet" type="text/css" />
<link href="/static/css/balls.css" rel="stylesheet" type="text/css" /> 
	<link href="/static/css/margin.css" rel="stylesheet" type="text/css"/>
	<link href="/static/css/center.css" rel="stylesheet" type="text/css"/>
</head>
<body class="iframe-body">
<script type="text/javascript" src="/static/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/static/lib/jquery.cookie.js"></script>
<script type="text/javascript" src="/static/js/skin.js"></script>
<script type="text/javascript" src="/static/lib/util/common.js"></script>
<script type="text/javascript"> 
	var staticFileUrl = parent.getStaticDomain();
// 	var lunarDate = parent.lunarDate;
	var animalsYear = parent.animalsYear;
	var sysServerDate = parent.sysServerDate;
	var defaultSkin = parent.defaultSkin;
	var sysTrialGamePro = parent.sysTrialGamePro;
	var gameMap = parent.gameMap;
	var games = parent.games;
	var layer = parent.layer;
	parent.UserBet.playType = "NORMAL";
</script>
<script type="text/javascript"> 
$.ajaxSetup ({
	cache: false //close AJAX cache
});
</script>
<!--  error.js要放在最后面  -->
<script type="text/javascript" src="/static/lib/util/error.js" async="async"></script>

	<div>
		<input id="pageType" type="hidden" value="FUNDPWD" />
		<div class="memberheader">
	<div class="useravatar floatleft">
		<img src="/static/images/skin/blue/userlogo.jpg" width="84" height="83" alt="">
	</div>
	<div class="memberinfo floatleft">
		<h1 class="floatleft">
			<script language="javaScript">
				now = new Date(), hour = now.getHours()
				if (hour < 6) {
					document.write("凌晨好")
				} else if (hour < 9) {
					document.write("早上好")
				} else if (hour < 12) {
					document.write("上午好")
				} else if (hour < 14) {
					document.write("中午好")
				} else if (hour < 17) {
					document.write("下午好")
				} else if (hour < 19) {
					document.write("傍晚好")
				} else if (hour < 22) {
					document.write("晚上好")
				} else {
					document.write("夜里好")
				}
			</script>
			, <span id="userName" class="blue"></span>
		</h1>
		<div class="balance floatleft">
			<div class="balancevalue floatleft">
				中心钱包 : <span class="blue"><span id="balance" class="balanceCount">0</span> 元</span>
			</div>
			<div
				class="floatright margintop7 marginright10 marginleft5 pointer">
				<a onclick="Center.init();" href="javascript:;">
					<img src="/static/images/skin/blue/btnrefresh.jpg" width="16" height="17" alt="">
				</a>
			</div>

		</div>
		<div class="gap5"></div>
		<p>彩票网投领导者·实力铸就品牌·诚信打造一切·相信品牌的力量</p>
		<p>最后登录：<span id="loginTime"></span></p>
	</div>
</div>
		
		<div class="membersubnavi">
			<!--<div class="subnavi blue">
				<a href="/center/user/notice.html">消息中心</a>
			</div>-->
			<div class="subnavi blue">
				<a href="/center/user/loginpwd.html">密码设置</a>
			</div>
			<div class="subnavi blue">
				提款密码<div class="subnaviarrow"></div>
			</div>
		</div>
		
		<div id="withdrawal1" class="subcontent1 margintop20 hide">
			<div class="addbankcard">
				<div class="logo-th-2"></div>
				<p class="bigtxt aligncenter gray">您还未设置提款密码，请先设置提款密码</p>
				<div class="formpanel margintop20">
					<div class="wd-row">
						<div class="wd-col1">登录密码：</div>
						<div class="wd-col2">
							<input type="password" id="loginpwd" class="textfield1">
						</div>
					</div>
					<div class="wd-row">
						<div class="wd-col1">提款密码：</div>
						<div class="wd-col2">
							<input type="password" id="drawcode" class="textfield1">
						</div>
					</div>
					<div class="wd-row">
						<div class="wd-col1">重复密码：</div>
						<div class="wd-col2">
							<input type="password" id="redrawcode" class="textfield1">
						</div>
					</div>
					<div class="wd-row" style="text-align: center;">
						<input type="button" class="c-button" onclick="User.setFundPwd();" value="提交">
					</div>
				</div>
			</div>
		</div>
		
		<div id="withdrawal2" class="subcontent1 margintop20 hide">
			<!-- <p class="bigtxt aligncenter gray">修改提款密码</p> -->
			<div class="formpanel">
				<div class="wd-row">
					<div class="wd-col1">当前提款密码：</div>
					<div class="wd-col2">
						<input type="password" id="fundpwd" class="textfield1">
					</div>
				</div>
				<div class="wd-row">
					<div class="wd-col1">新提款密码：</div>
					<div class="wd-col2">
						<input type="password" id="newpwd" class="textfield1">
					</div>
				</div>
				<div class="wd-row">
					<div class="wd-col1">确认密码：</div>
					<div class="wd-col2">
						<input type="password" id="rednewpwd" class="textfield1">
					</div>
				</div>
				<div class="wd-row" style="text-align: center;">
					<input type="button" class="c-button" onclick="User.updateFundPwd();" value="提交">
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="/static/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript">
var layer = parent.layer;
parent.UserBet.playType = "NORMAL";
</script>
<script type="text/javascript" src="/static/lib/util/md5.js"></script>
<script type="text/javascript" src="/static/lib/util/common.js"></script>
<script type="text/javascript" src="/static/lib/util/ctab.min.js"></script>
<!--  error.js要放在最后面  -->
<script type="text/javascript" src="/static/lib/util/error.js"></script>
	<script type="text/javascript" src="/static/js/center.js"></script>
</body>
</html>