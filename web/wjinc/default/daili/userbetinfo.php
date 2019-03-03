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
function SetCookie(b, c, a) {
    var d = new Date();
    d.setTime(d.getTime() + (a * 1000));
    document.cookie = b + "=" + escape(c) + ";expires=" + d.toUTCString()
}
function getCookie(b) {
    var a = document.cookie.match(new RegExp("(^| )" + b + "=([^;]*)(;|$)"));
    if (a != null) {
        return unescape(a[2])
    }
    return null
}
function delCookie(a) {
    var c = new Date();
    c.setTime(c.getTime() - 1);
    var b = getCookie(a);
    if (b != null) {
        document.cookie = a + "=" + b + ";expires=" + c.toGMTString()
    }
}
delCookie('page');
</script>
<script type="text/javascript"> 
$.ajaxSetup ({
	cache: false //close AJAX cache
});
</script>
<!--  error.js要放在最后面  -->
<script type="text/javascript" src="/static/lib/util/error.js" async></script>

 <div class="cp-box1" style="width: 950px;">
   <div style="padding: 5px 0px; text-align: right;" id="params_dev">
	   	<input type="hidden" id="betDate" value="">
	   	<select id="betGameId">
	   	</select>
   </div>
   <table class="u-table2" > 
    <thead> 
     <tr> 
      <th class="u-tb3-th2" style="width: 110px; height: 26px; font-size: 13px; color: #762d08;">定单号</th> 
      <th class="u-tb3-th2" style="width: 100px; height: 26px; font-size: 13px; color: #762d08;">会员账号</th> 
      <th class="u-tb3-th2" style="width: 100px; height: 26px; font-size: 13px; color: #762d08;">投注时间</th> 
      <th class="u-tb3-th2" style="width: 180px; height: 26px; font-size: 13px; color: #762d08;">彩种期数</th> 
      <th class="u-tb3-th2" style="width: 220px; height: 26px; font-size: 13px; color: #762d08;">投注玩法</th> 
<!--       <th class="u-tb3-th2">赔率</th>  -->
      <th class="u-tb3-th2" style=" height: 26px; font-size: 13px; color: #762d08;">下注金额</th> 
      <th class="u-tb3-th2" style=" height: 26px; font-size: 13px; color: #762d08;">退水</th> 
      <th class="u-tb3-th2" style="width: 100px; height: 26px; font-size: 13px; color: #762d08;"><span id="column_desc"></span></th> 
     </tr>
    </thead>
    <tbody id="bet_list_body"></tbody> 
   </table>
   <div id="listPage" class="megas512"></div>
   </div>
  </div>
  <link rel="stylesheet" href="/static/lib/jquery/page/pagination.css"/>
  <script type="text/javascript" src="/static/lib/jquery/page/jquery.pagination.js"></script>
  <script type="text/javascript" src="/static/lib/util/httpUtil.js"></script>
  <script type="text/javascript" src="/static/js/lottery/dailiBetBill.js"></script>
  <script type="text/javascript" src="/static/js/util/PlatCommon.js"></script>
  <script type="text/javascript">
 	 function showOtherTips(objId) {
		$(objId).next("ul").show();
	}
	function hideOtherTips(objId) {
		$(objId).next("ul").hide();
	}
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
		$(obj).html('<option value="">显示所有</option>'+optionStr);
	}
 	initGameSelect("#betGameId");
    var date=HttpUtil.GetUrlPara()["date"]
    var urlGameId=HttpUtil.GetUrlPara()["gameId"];
    if(urlGameId){
 		$("#betGameId").val(urlGameId);
    }
    var gameId="";
    if(date){
    	$("#params_dev").show();
    	date=date.split(" ")[0];
		gameId=$("#betGameId").val();
    }
	$("#betDate").val(date);
	function getBetBillto(){
	gameId=$("#betGameId").val();
	pageto=getCookie('page');
	if(!pageto){
		pageto=1;
	}
	UserBetBill.getBetBills({
	  		page : pageto,// 当前页
			rows : 15,
			elemet : "#listPage",
			date : date,
			gameId: gameId
	});
	}
	setInterval("getBetBillto()",2000);

  </script>
 </body>
</html>