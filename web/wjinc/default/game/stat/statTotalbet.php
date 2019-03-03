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
<style type="text/css">
	th{font-size: 12px!important;height: 26px!important;}
	td{font-size: 12px!important;height: 24px!important;font-weight: normal!important;}
</style>
<div id="statBet_tables" class="cp-box1">
		<div style="padding: 5px 0px; text-align: right;">
			<a href="javascript:history.go(-1)">返回</a>
		</div>
		<table class="u-table2 play_tab_10" id="preWeekTable">
			<thead>
				<tr>
					<th width="16%">游戏</th>
					<th width="16%">注数</th>
					<th width="16%">下注金额</th>
					<th width="16%">返水</th>
					<th width="16%">盈亏</th>
					<th width="">查看注单</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
</div>
<script type="text/javascript" src="/static/lib/util/common.js"></script>
<script type="text/javascript" src="/static/lib/util/dateUtil.js"></script>
<script type="text/javascript" src="/static/js/lottery/statBet.js"></script>
<script type="text/javascript" src="/static/lib/moment.min.js"></script>
<script type="text/javascript" src="/static/lib/util/httpUtil.js"></script>
<script type="text/javascript">
	var d1 = moment().add(-8, 'days');
	var d2 = moment();
	
	$("#startDate").val(d1.format('YYYY-MM-DD'));
	$("#endDate").val(d2.format('YYYY-MM-DD'));
	StatTotalBet.query()
</script>
</body>
</html>
