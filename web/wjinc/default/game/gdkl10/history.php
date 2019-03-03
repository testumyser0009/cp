
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
<script type="text/javascript" src="/static/lib/util/error.js" async></script>

<script type="text/javascript" src="/static/lib/util/httpUtil.js"></script>
<script type="text/javascript" src="/static/js/lottery/history.js"></script>
<script type="text/javascript" src="/static/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/static/lib/moment.min.js"></script>  
<script type="text/javascript">
function initGameSelect(obj){
	var optionFormatStr='<option value="{gameId}">{gameName}</option>';
	var optionStr="";
	for(var g in games){
		var game=games[g];
		if(game.open==0){
			optionStr+=optionFormatStr.format({
				"gameId":game.id,
				"gameName":game.name
			});
		}
	}
	$(obj).html(optionStr);
}
</script>
  <div id="subpage" class="cp-box2" style="width: 900px"> 
    <div style="padding: 5px 0px;">
	<select id="historyQueryParamGameId" onchange="historyDateChange()">
        <option value="50">北京赛车PK10</option>
        <option value="72">极速赛车</option>
        <option value="73">极速时时彩</option>
        <option value="74">极速六合彩</option>
        <option value="1">重庆时时彩</option>
        <option value="60">广东快乐10分</option>
        <option value="10">江苏骰宝</option>
        <option value="61">重庆幸运农场</option>
        <option value="65">北京快乐8</option>
        <option value="21">广东11选5</option>
        <option value="70">香港六合彩</option>
	 </select>
	日期：
   	<input id="historyQueryParamOpenTime" onClick="WdatePicker({onpicking:function(dp){History.getHistoryData('',dp.cal.getNewDateStr())}})" onchange="">
 </div>
 <script type="text/javascript">
 	initGameSelect("#historyQueryParamGameId");
 	function historyDateChange(){
 		var date=$('#historyQueryParamOpenTime').val();
 		var gameId=$("#historyQueryParamGameId").val();
 		parent.History.loadPage(gameId,  date);
 	}
 </script>
   <table class="u-table2 play_tab_10" id="history_table"> 
      <thead> 
       <tr> 
        <th style="width: 100px">期数</th> 
        <th style="width: 100px">开奖时间</th> 
        <th colspan="8">开出号码</th> 
        <th colspan="4">总和</th> 
        <th colspan="4">龙虎</th> 
       </tr> 
      </thead> 
      <tbody>
       
      </tbody> 
     </table> 
  </div>  
  <script type="text/javascript">
  var date=HttpUtil.GetUrlPara()["date"];
  	History.getHistoryData(60,date);
  </script>
 </body>
 </html>