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
<body >
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

	<div style="padding: 10px 20px">

		<table class="u-table2">
			<thead>
				<tr>
					<th class="u-tb3-th2">标题</th>
					<th class="u-tb3-th2">时间</th>
				</tr>
			</thead>
			<tbody id="notice_list_body">
				<tr>
				</tr>
			</tbody>
		</table>
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

	<script type="text/javascript">
		var MESSAGES=parent.MESSAGES; 
		var noticeList = MESSAGES.type_1; //公告列表
		$(function() {
			if (noticeList) {
				var bodyHtmlStrFormat = '\
	    		 	<tr> \
			         <td class="f1" style="word-wrap: break-word;word-break:break-all;"><a href="javascript:showDetail({index})">{title}</a></td> \
			         <td class="f1">{updateTime}</td> \
			        </tr>';
				var bodyHtmlStr = "";
				$.each(noticeList, function(index, item) {
					bodyHtmlStr += bodyHtmlStrFormat.format({
						"title" : item.title,
						"index" : index,
						"updateTime" : item.updateTime
					});
				});
				$('#notice_list_body').html(bodyHtmlStr);
			}
		});
		function showDetail(index) { // 显示详情
			var notice = noticeList[index];
			if (notice) {
				var htmlBody = notice.message;
				layer.open({
					title : notice.title,
					type : 1,
					shift : 2,
					area : [ '600px', "300px" ],
					shadeClose : false,
					// 开启遮罩关闭
					content : '<div style="padding: 10px">' + htmlBody + '</div>'
				});
			}

		}
	</script>
</body>
</html>