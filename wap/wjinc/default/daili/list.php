<?php 
if(!$this->user['type']){
	exit;
}
?>
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

<script type="text/javascript" src="/static/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/static/lib/moment.min.js"></script>
<style type="text/css">
	th{font-size: 12px!important;height: 26px!important;}
	td{font-size: 12px!important;height: 24px!important;font-weight: normal!important;}
	.membersubnavi {
    position: absolute;
    top: 10px;
    left: 0;
}
.subnavi {
    padding: 0 20px;
    float: left;
    font-size: 17px;
    color: #217eec;
}
.subnavi a {
    color: #777f89;
}
</style>
	<div style="width:100%">
		<div class="membersubnavi">
			<div class="subnavi blue">
				盈亏统计<div class="subnaviarrow"></div>
			</div>
			<div class="subnavi blue">
				<a href="/center/user/loginpwd.html">密码设置</a>
			</div>
			<div class="subnavi blue">
				<a href="/center/user/fundpwd.html">提款密码</a>
			</div>
		</div>
    </div>
<div id="statBet_tables" class="cp-box1" style="position:absolute; left:0; top:30px; width:950px;">
		 <div style="padding: 5px 0px; background-color: #414141; color: #ffffff;">
			日期：
		   	<input id="startDate" class="Wdate" onClick="WdatePicker()" >
		   	至
		   	<script type="text/javascript">
				var d1 = moment().add(-8, 'days');
				var d2 = moment();
				/*var diffDay=-1;
				if(d2.hour()<=5){
					diffDay+=-1;
				}*/
				//d2 = d2.add(diffDay, 'days');
				var maxWdate=d2.format('YYYY-MM-DD');
			</script>
		   	<input id="endDate" class="Wdate" onClick="WdatePicker()" onfocus="WdatePicker({maxDate:maxWdate})">
		   	&nbsp;&nbsp;
			<a class="u-btn u-btn17" onclick="StatBet.query()" >查询</a>
		 </div>
		<table class="u-table2 play_tab_10" id="preWeekTable">
			<thead>
				<tr>
					<th>日期</th>
                    <th>账户名</th>
                    <th>账户类型</th>
					<th>注数</th>
					<th>下注金额</th>
                    <th>中奖金额</th>
					<th>退水</th>
					<th>盈亏</th>
					<th width="">查看详情</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
		<div id="listPage" class="megas512"></div>
</div>
<link rel="stylesheet" href="/static/lib/jquery/page/pagination.css"/>
<script type="text/javascript" src="/static/lib/jquery/page/jquery.pagination.js"></script>
<script type="text/javascript" src="/static/lib/util/common.js"></script>
<script type="text/javascript" src="/static/lib/util/dateUtil.js"></script>
<script type="text/javascript" src="/static/js/lottery/report.js"></script>
<script type="text/javascript">
	$("#startDate").val(d1.format('YYYY-MM-DD'));
	$("#endDate").val(d2.format('YYYY-MM-DD'));
	StatBet.query()
</script>
</body>
</html>