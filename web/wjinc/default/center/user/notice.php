
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
	<link rel="stylesheet" href="/static/lib/jquery/page/pagination.css"/>
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

	<script type="text/javascript" src="/static/lib/jquery/page/jquery.pagination.js"></script>
	<div>
		<input id="pageType" type="hidden" value="PAY" />
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
			<div class="subnavi blue">
				消息中心<div class="subnaviarrow"></div>
			</div>
			<div class="subnavi blue">
				<a href="/center/user/loginpwd.html">密码设置</a>
			</div>
			<div class="subnavi blue">
				<a href="/center/user/fundpwd.html">提款密码</a>
			</div>
		</div>

		<div class="records margintop20">
			<table class="table">
				<thead>
					<tr class="trcolor">
						<th style="width: 10%">标题</th>
						<th style="width: 8%">发送人</th>
						<th style="width: 6%">时间</th>
						<th style="width: 6%">详情</th>
					</tr>
				</thead>
				<tbody id="noticelist-tbody"></tbody>
			</table>
		</div>
		
		<div class="page_info">
			<div id="listPage" class="megas512"></div>
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
	
	<script type="text/javascript">
		$(function() {
			User.getNoticeList({
				page: 1,
				rows: 8,
				elemet : "#listPage"
			});
		});
	</script>
</body>
</html>