
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
<script type="text/javascript" src="/static/lib/util/error.js" async></script>

<link rel="stylesheet" href="/static/lib/jquery/page/pagination.css"/>
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
				<a href="/center/pay/index.html">充值</a>
			</div>
			<div class="subnavi blue">
				<a href="/center/withdraw/index.html">提款</a>
			</div>
			<div class="subnavi blue">
				充值记录
				<div class="subnaviarrow"></div>
			</div>
			<div class="subnavi blue">
				<a href="/center/withdraw/list.html">提款记录</a>
			</div>
		</div>

		<div class="search-bar">
			<ul>
				<li>单据状态：</li>
				<li>
					<select id="status" class="province floatleft  select1">
						<option value="99" selected="selected">全部</option>
						<option value="0">处理中</option>
						<option value="1">成功</option>
						<option value="3">失败</option>
					</select>
				</li>
				
				<li class="marginleft10">起止日期：</li>
				<li>
					<input id="startDate" type="text" onClick="WdatePicker()"> ~ 
					<input id="endDate" type="text" onClick="WdatePicker()">
				</li>
				
				<li>
					<button type="button" class="btn" onclick="Pay.getRechList();">搜索</button>
				</li>
			</ul>
		</div>

		<div class="records">
			<table class="table">
				<thead>
					<tr class="trcolor">
						<th style="width: 10%">时间</th>
						<th style="width: 6%">充值方式</th>
						<th style="width: 6%">金额</th>
						<th style="width: 6%">优惠奖励</th>
						<th style="width: 22%">交易描述</th>
						<th style="width: 12%">单据状态</th>
					</tr>
				</thead>
				<tbody id="paylist-tbody"></tbody>
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
			Pay.getRechList({
				elemet : "#listPage"
			});
		});
	</script>
</body>
</html>