
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

<!--main-->
<div class="main clearfix">
	<div class="content">
		<div class="sub-wrap clearfix">
			<!--cont-main-->
			<div class="cont-main">
					  <div id="subpage"> 
						   <div class="cont-col3"> 
						                   <table class="u-table2 play_tab_1">
			      <thead> 
			        <th align="left" style="padding-left: 20px;border-right: none;">
			        	<span id="page_game_name"></span>&nbsp;&nbsp;-&nbsp;&nbsp;<span id="page_name">两面盘</span>
			        	<span>
			        	&nbsp;&nbsp
			        	当前彩种输赢：
			        	</span>
			        	<span id="total_sum_money" style="color: red;">0</span>
			        </th>
			        <th align="right" style="padding-right:20px; color:#fff; font-size:14px;font-weight:normal; border-left: none;">
			        	<span class="c-txt2" id="next_turn_num"></span>&nbsp;期
			        	距离封盘：<span class="c-txt1" id="bet-date">00:00</span>
			        	距离开奖：<span class="c-txt1" id="open-date">00:00</span>
			        </th>  
			      </thead> 
			     </table>
						    	<div class="cont-col3-hd clearfix"> 
     <!-- 
        <div class="cont-col3-box1">
         	   投注类型：
            <a href="#" class="cur">快捷</a>
            <a href="#">一般</a>
        </div>
     --> 
     <div class="cont-col3-box2"> 
<!--       <label> <input type="checkbox" class="u-cb1" /> 预设 </label>  -->
      	金额 
      <input id="bet_money1" type="text" class="bet-money" /> 
      <a href="javascript:parent.UserBet.openBetWindow()" id="openBetWinBtn1" class="u-btn1">确定</a> 
      <a href="javascript:parent.UserBet.resetData()" class="u-btn1">重置</a> 
     </div> 
    </div> 
						    <div class="cont-col3-bd" id="bet_tab"> 
						     <table class="u-table2 play_tab_1">
						      <thead> 
						       <tr> 
						        <th colspan="12">总和-龙虎和</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						       <tr> 
						        <td id="play_name_1101" class="name">总和大</td> 
						        <td id="play_odds_1101" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1101" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_1102" class="name">总和小</td> 
						        <td id="play_odds_1102" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1102" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_1103" class="name">总和单</td> 
						        <td id="play_odds_1103" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1103" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_1104" class="name">总和双</td> 
						        <td id="play_odds_1104" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1104" class="amount"><input type="text" /></td> 
						       </tr> 
						       <tr> 
						        <td id="play_name_1105" class="name">龙</td> 
						        <td id="play_odds_1105" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1105" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_1106" class="name">虎</td> 
						        <td id="play_odds_1106" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1106" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_1107" class="name">和</td> 
						        <td id="play_odds_1107" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1107" class="amount"><input type="text" /></td> 
						        
						        <td class="name not-event" colspan="3"></td> 
						       </tr> 
						      </tbody> 
						     </table> 
						     
						     <table class="cont-list1">
						     	<tr>
						     		<td>
						     			<table class="u-table2 play_tab_2"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第一球</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_1210" class="name">大</td> 
								          <td id="play_odds_1210" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1210" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1211" class="name">小</td> 
								          <td id="play_odds_1211" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1211" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1212" class="name">单</td> 
								          <td id="play_odds_1212" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1212" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1213" class="name">双</td> 
								          <td id="play_odds_1213" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1213" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1200" class="name"><span class="ball c-b1">0</span></td> 
								          <td id="play_odds_1200" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1200" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1201" class="name"><span class="ball c-b1">1</span></td> 
								          <td id="play_odds_1201" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1201" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1202" class="name"><span class="ball c-b1">2</span></td> 
								          <td id="play_odds_1202" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1202" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1203" class="name"><span class="ball c-b1">3</span></td> 
								          <td id="play_odds_1203" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1203" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1204" class="name"><span class="ball c-b1">4</span></td> 
								          <td id="play_odds_1204" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1204" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1205" class="name"><span class="ball c-b1">5</span></td> 
								          <td id="play_odds_1205" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1205" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1206" class="name"><span class="ball c-b1">6</span></td> 
								          <td id="play_odds_1206" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1206" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1207" class="name"><span class="ball c-b1">7</span></td> 
								          <td id="play_odds_1207" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1207" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1208" class="name"><span class="ball c-b1">8</span></td> 
								          <td id="play_odds_1208" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1208" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1209" class="name"><span class="ball c-b1">9</span></td> 
								          <td id="play_odds_1209" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1209" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody> 
								       </table>
						     		</td>
						     		
						     		<td>
						     			<table class="u-table2 play_tab_3"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第二球</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_1310" class="name">大</td> 
								          <td id="play_odds_1310" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1310" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1311" class="name">小</td> 
								          <td id="play_odds_1311" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1311" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1312" class="name">单</td> 
								          <td id="play_odds_1312" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1312" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1313" class="name">双</td> 
								          <td id="play_odds_1313" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1313" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1300" class="name"><span class="ball c-b1">0</span></td> 
								          <td id="play_odds_1300" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1300" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1301" class="name"><span class="ball c-b1">1</span></td> 
								          <td id="play_odds_1301" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1301" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1302" class="name"><span class="ball c-b1">2</span></td> 
								          <td id="play_odds_1302" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1302" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1303" class="name"><span class="ball c-b1">3</span></td> 
								          <td id="play_odds_1303" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1303" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1304" class="name"><span class="ball c-b1">4</span></td> 
								          <td id="play_odds_1304" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1304" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1305" class="name"><span class="ball c-b1">5</span></td> 
								          <td id="play_odds_1305" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1305" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1306" class="name"><span class="ball c-b1">6</span></td> 
								          <td id="play_odds_1306" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1306" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1307" class="name"><span class="ball c-b1">7</span></td> 
								          <td id="play_odds_1307" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1307" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1308" class="name"><span class="ball c-b1">8</span></td> 
								          <td id="play_odds_1308" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1308" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1309" class="name"><span class="ball c-b1">9</span></td> 
								          <td id="play_odds_1309" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1309" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody> 
								       </table>
						     		</td>
						     		
						     		<td>
						     			<table class="u-table2 play_tab_4"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第三球</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_1410" class="name">大</td> 
								          <td id="play_odds_1410" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1410" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1411" class="name">小</td> 
								          <td id="play_odds_1411" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1411" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1412" class="name">单</td> 
								          <td id="play_odds_1412" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1412" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1413" class="name">双</td> 
								          <td id="play_odds_1413" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1413" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1400" class="name"><span class="ball c-b1">0</span></td> 
								          <td id="play_odds_1400" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1400" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1401" class="name"><span class="ball c-b1">1</span></td> 
								          <td id="play_odds_1401" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1401" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1402" class="name"><span class="ball c-b1">2</span></td> 
								          <td id="play_odds_1402" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1402" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1403" class="name"><span class="ball c-b1">3</span></td> 
								          <td id="play_odds_1403" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1403" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1404" class="name"><span class="ball c-b1">4</span></td> 
								          <td id="play_odds_1404" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1404" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1405" class="name"><span class="ball c-b1">5</span></td> 
								          <td id="play_odds_1405" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1405" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1406" class="name"><span class="ball c-b1">6</span></td> 
								          <td id="play_odds_1406" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1406" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1407" class="name"><span class="ball c-b1">7</span></td> 
								          <td id="play_odds_1407" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1407" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1408" class="name"><span class="ball c-b1">8</span></td> 
								          <td id="play_odds_1408" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1408" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1409" class="name"><span class="ball c-b1">9</span></td> 
								          <td id="play_odds_1409" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1409" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody>
								       </table>
						     		</td>
						     		
						     		<td>
						     			<table class="u-table2 play_tab_5"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第四球</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_1510" class="name">大</td> 
								          <td id="play_odds_1510" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1510" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1511" class="name">小</td> 
								          <td id="play_odds_1511" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1511" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1512" class="name">单</td> 
								          <td id="play_odds_1512" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1512" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1513" class="name">双</td> 
								          <td id="play_odds_1513" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1513" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1500" class="name"><span class="ball c-b1">0</span></td> 
								          <td id="play_odds_1500" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1500" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1501" class="name"><span class="ball c-b1">1</span></td> 
								          <td id="play_odds_1501" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1501" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1502" class="name"><span class="ball c-b1">2</span></td> 
								          <td id="play_odds_1502" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1502" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1503" class="name"><span class="ball c-b1">3</span></td> 
								          <td id="play_odds_1503" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1503" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1504" class="name"><span class="ball c-b1">4</span></td> 
								          <td id="play_odds_1504" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1504" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1505" class="name"><span class="ball c-b1">5</span></td> 
								          <td id="play_odds_1505" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1505" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1506" class="name"><span class="ball c-b1">6</span></td> 
								          <td id="play_odds_1506" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1506" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1507" class="name"><span class="ball c-b1">7</span></td> 
								          <td id="play_odds_1507" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1507" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1508" class="name"><span class="ball c-b1">8</span></td> 
								          <td id="play_odds_1508" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1508" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1509" class="name"><span class="ball c-b1">9</span></td> 
								          <td id="play_odds_1509" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1509" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody>
								       </table>
						     		</td>
						     		
						     		<td>
						     			<table class="u-table2 play_tab_6"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第五球</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_1610" class="name">大</td> 
								          <td id="play_odds_1610" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1610" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1611" class="name">小</td> 
								          <td id="play_odds_1611" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1611" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1612" class="name">单</td> 
								          <td id="play_odds_1612" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1612" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1613" class="name">双</td> 
								          <td id="play_odds_1613" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1613" class="amount"><input type="text" /></td>
								         </tr> 
								          <tr> 
								          <td id="play_name_1600" class="name"><span class="ball c-b1">0</span></td> 
								          <td id="play_odds_1600" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1600" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1601" class="name"><span class="ball c-b1">1</span></td> 
								          <td id="play_odds_1601" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1601" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1602" class="name"><span class="ball c-b1">2</span></td> 
								          <td id="play_odds_1602" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1602" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1603" class="name"><span class="ball c-b1">3</span></td> 
								          <td id="play_odds_1603" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1603" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1604" class="name"><span class="ball c-b1">4</span></td> 
								          <td id="play_odds_1604" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1604" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1605" class="name"><span class="ball c-b1">5</span></td> 
								          <td id="play_odds_1605" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1605" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1606" class="name"><span class="ball c-b1">6</span></td> 
								          <td id="play_odds_1606" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1606" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1607" class="name"><span class="ball c-b1">7</span></td> 
								          <td id="play_odds_1607" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1607" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1608" class="name"><span class="ball c-b1">8</span></td> 
								          <td id="play_odds_1608" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1608" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_1609" class="name"><span class="ball c-b1">9</span></td> 
								          <td id="play_odds_1609" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_1609" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody> 
								       </table>
						     		</td>
						     	</tr>
						     </table>
						     
						     	<!-- 前三中三后三 -->
	<table class="u-table2 play_tab_7" style="margin-top: 10px;" > 
      <thead> 
       <tr> 
        <th colspan="15">前三</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_1701" class="name">豹子</td> 
        <td id="play_odds_1701" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1701" class="amount"><input type="text" /></td> 
        
        <td id="play_name_1702" class="name">顺子</td> 
        <td id="play_odds_1702" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1702" class="amount"><input type="text" /></td>
        
        <td id="play_name_1703" class="name">对子</td> 
        <td id="play_odds_1703" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1703" class="amount"><input type="text" /></td>
         
        <td id="play_name_1704" class="name">半顺</td> 
        <td id="play_odds_1704" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1704" class="amount"><input type="text" /></td> 
        
        <td id="play_name_1705" class="name">杂六</td> 
        <td id="play_odds_1705" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1705" class="amount"><input type="text" /></td> 
       </tr> 
      </tbody> 
     </table> 
     <table class="u-table2 play_tab_8" style="margin-top: 10px;"> 
      <thead> 
       <tr> 
        <th colspan="15">中三</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_1801" class="name">豹子</td> 
        <td id="play_odds_1801" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1801" class="amount"><input type="text" /></td> 
        
        <td id="play_name_1802" class="name">顺子</td> 
        <td id="play_odds_1802" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1802" class="amount"><input type="text" /></td> 
        
        <td id="play_name_1803" class="name">对子</td> 
        <td id="play_odds_1803" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1803" class="amount"><input type="text" /></td> 
        
        <td id="play_name_1804" class="name">半顺</td> 
        <td id="play_odds_1804" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1804" class="amount"><input type="text" /></td> 
        
        <td id="play_name_1805" class="name">杂六</td> 
        <td id="play_odds_1805" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1805" class="amount"><input type="text" /></td> 
       </tr> 
      </tbody> 
     </table> 
     <table class="u-table2 play_tab_9" style="margin-top: 10px;" > 
      <thead> 
       <tr> 
        <th colspan="15">后三</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_1901" class="name">豹子</td> 
        <td id="play_odds_1901" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1901" class="amount"><input type="text" /></td> 
        
        <td id="play_name_1902" class="name">顺子</td> 
        <td id="play_odds_1902" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1902" class="amount"><input type="text" /></td> 
        
        <td id="play_name_1903" class="name">对子</td> 
        <td id="play_odds_1903" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1903" class="amount"><input type="text" /></td> 
        
        <td id="play_name_1904" class="name">半顺</td> 
        <td id="play_odds_1904" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1904" class="amount"><input type="text" /></td> 
        
        <td id="play_name_1905" class="name">杂六</td> 
        <td id="play_odds_1905" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1905" class="amount"><input type="text" /></td> 
       </tr> 
      </tbody> 
     </table>  
						     <div class="cont-col3-hd clearfix" style="margin-top: 20px"> 
     <!-- 
        <div class="cont-col3-box1">
         	   投注类型：
            <a href="#" class="cur">快捷</a>
            <a href="#">一般</a>
        </div>
     --> 
     <div class="cont-col3-box2"> 
<!--       <label> <input type="checkbox" class="u-cb1" /> 预设 </label>  -->
      	金额 
      <input id="bet_money2" type="text" class="bet-money" /> 
      <a href="javascript:parent.UserBet.openBetWindow()" id="openBetWinBtn2" class="u-btn1">确定</a> 
      <a href="javascript:parent.UserBet.resetData()" class="u-btn1">重置</a> 
     </div> 
    </div> 
						     
						    </div> 
						   </div> 
						  </div>

					 <div id="game_count"> 
						
<div class="count-wrap">
	<table class="u-table2" id="stat_qiu">
		<thead>
			<tr>
				<th class="u-tb3-th2 select" id="qiu1_th"
					onclick="StatGame.showStat(1)" qiu="1">第一球</th>
				<th class="u-tb3-th2" id="qiu2_th" onclick="StatGame.showStat(2)"
					qiu="2">第二球</th>
				<th class="u-tb3-th2" id="qiu3_th" onclick="StatGame.showStat(3)"
					qiu="3">第三球</th>
				<th class="u-tb3-th2" id="qiu4_th" onclick="StatGame.showStat(4)"
					qiu="4">第四球</th>
				<th class="u-tb3-th2" id="qiu5_th" onclick="StatGame.showStat(5)"
					qiu="5">第五球</th>
			</tr>
		</thead>
	</table>
	<table class="u-table4">
		<tbody>
			<tr>
				<td class="f1 fwb">0</td>
				<td class="f1 fwb">1</td>
				<td class="f1 fwb">2</td>
				<td class="f1 fwb">3</td>
				<td class="f1 fwb">4</td>
				<td class="f1 fwb">5</td>
				<td class="f1 fwb">6</td>
				<td class="f1 fwb">7</td>
				<td class="f1 fwb">8</td>
				<td class="f1 fwb">9</td>
			</tr>
			<tr id="qiu1_body">
				<td id="q1_0_time">0</td>
				<td id="q1_1_time">0</td>
				<td id="q1_2_time">0</td>
				<td id="q1_3_time">0</td>
				<td id="q1_4_time">0</td>
				<td id="q1_5_time">0</td>
				<td id="q1_6_time">0</td>
				<td id="q1_7_time">0</td>
				<td id="q1_8_time">0</td>
				<td id="q1_9_time">0</td>
			</tr>
			<tr id="qiu2_body" class="hide">
				<td id="q2_0_time">0</td>
				<td id="q2_1_time">0</td>
				<td id="q2_2_time">0</td>
				<td id="q2_3_time">0</td>
				<td id="q2_4_time">0</td>
				<td id="q2_5_time">0</td>
				<td id="q2_6_time">0</td>
				<td id="q2_7_time">0</td>
				<td id="q2_8_time">0</td>
				<td id="q2_9_time">0</td>
			</tr>
			<tr id="qiu3_body" class="hide">
				<td id="q3_0_time">0</td>
				<td id="q3_1_time">0</td>
				<td id="q3_2_time">0</td>
				<td id="q3_3_time">0</td>
				<td id="q3_4_time">0</td>
				<td id="q3_5_time">0</td>
				<td id="q3_6_time">0</td>
				<td id="q3_7_time">0</td>
				<td id="q3_8_time">0</td>
				<td id="q3_9_time">0</td>
			</tr>
			<tr id="qiu4_body" class="hide">
				<td id="q4_0_time">0</td>
				<td id="q4_1_time">0</td>
				<td id="q4_2_time">0</td>
				<td id="q4_3_time">0</td>
				<td id="q4_4_time">0</td>
				<td id="q4_5_time">0</td>
				<td id="q4_6_time">0</td>
				<td id="q4_7_time">0</td>
				<td id="q4_8_time">0</td>
				<td id="q4_9_time">0</td>
			</tr>
			<tr id="qiu5_body" class="hide">
				<td id="q5_0_time">0</td>
				<td id="q5_1_time">0</td>
				<td id="q5_2_time">0</td>
				<td id="q5_3_time">0</td>
				<td id="q5_4_time">0</td>
				<td id="q5_5_time">0</td>
				<td id="q5_6_time">0</td>
				<td id="q5_7_time">0</td>
				<td id="q5_8_time">0</td>
				<td id="q5_9_time">0</td>
			</tr>
		</tbody>
	</table>

	<table class="u-table2 mt5">
		<thead>
			<tr id="stat_type">
				<th class="u-tb3-th2 select" id="stat_nums_btn" type="nums"
					onclick="StatGame.showStatType(this)">第一球</th>
				<th class="u-tb3-th2" id="stat_size_btn" type="size"
					onclick="StatGame.showStatType(this)">大小</th>
				<th class="u-tb3-th2" id="stat_firsts_btn" type="firsts"
					onclick="StatGame.showStatType(this)">单双</th>
				<th class="u-tb3-th2" id="stat_zhdx_btn" type="zhdx"
					onclick="StatGame.showStatType(this)">总和大小</th>
				<th class="u-tb3-th2" id="stat_zhds_btn" type="zhds"
					onclick="StatGame.showStatType(this)">总和单双</th>
				<th class="u-tb3-th2" id="stat_lhh_btn" type="lhh"
					onclick="StatGame.showStatType(this)">龙虎和</th>
			</tr>
		</thead>
	</table>
	<table class="u-table4 table-td-valign-top">
		<tbody>
			<tr id="qiu1_nums" class="stattd "></tr>
			<tr id="qiu2_nums" class="stattd hide"></tr>
			<tr id="qiu3_nums" class="stattd hide"></tr>
			<tr id="qiu4_nums" class="stattd hide"></tr>
			<tr id="qiu5_nums" class="stattd hide"></tr>
			<tr id="qiu1_size" class="stattd hide"></tr>
			<tr id="qiu2_size" class="stattd hide"></tr>
			<tr id="qiu3_size" class="stattd hide"></tr>
			<tr id="qiu4_size" class="stattd hide"></tr>
			<tr id="qiu5_size" class="stattd hide"></tr>
			<tr id="qiu1_firsts" class="stattd hide"></tr>
			<tr id="qiu2_firsts" class="stattd hide"></tr>
			<tr id="qiu3_firsts" class="stattd hide"></tr>
			<tr id="qiu4_firsts" class="stattd hide"></tr>
			<tr id="qiu5_firsts" class="stattd hide"></tr>
			<tr id="qiu1_zhdx" class="stattd hide"></tr>
			<tr id="qiu1_zhds" class="stattd hide"></tr>
			<tr id="qiu1_lhh" class="stattd hide"></tr>
		</tbody>
	</table>
</div>

					</div> 
			</div>
			<!--/cont-main-->
			
			<div id="right_page" class="cont-sider">
	<div class="sider-box1 mt5" id="stat_play_ctn">
		<table class="u-table2">
			<thead> 
	         <tr> 
	          <th id="stat_play_list_desc">第一球</th> 
	         </tr> 
	        </thead> 
		</table>
		<table class="u-table5">
			<tbody id="stat_play_list">
			</tbody>
		</table>
	</div>
	<div id="kjtz-ctn" class="mt5 hide">
	<table class="u-table2 play_tab_85">
		<thead>
			<tr>
				<th colspan="3">快捷投注</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'DANMA_PLAYIDS')"><span>单码</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'XIAODAN_PLAYIDS')"><span>小单</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'HEDAN_PLAYIDS')"><span>合单</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'SHUANMA_PLAYIDS')"><span>双码</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'XIAOSHUAN_PLAYIDS')"><span>小双</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'HESHUAN_PLAYIDS')"><span>合双</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'DAMA_PLAYIDS')"><span>大码</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'DADAN_PLAYIDS')"><span>大单</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'HEDA_PLAYIDS')"><span>合大</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'XIAOMA_PLAYIDS')"><span>小码</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'DASHUAN_PLAYIDS')"><span>大双</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'HEXIAO_PLAYIDS')"><span>合小</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'LINTOU_PLAYIDS')"><span>0头</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LINWEI_PLAYIDS')"><span>0尾</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'WUWEI_PLAYIDS')"><span>5尾</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'YITOU_PLAYIDS')"><span>1头</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'YIWEI_PLAYIDS')"><span>1尾</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LIUWEI_PLAYIDS')"><span>6尾</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'ERTOU_PLAYIDS')"><span>2头</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'ERWEI_PLAYIDS')"><span>2尾</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'QIWEI_PLAYIDS')"><span>7尾</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'SANTOU_PLAYIDS')"><span>3头</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'SANWEI_PLAYIDS')"><span>3尾</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'BAWEI_PLAYIDS')"><span>8尾</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'SITOU_PLAYIDS')"><span>4头</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'SIWEI_PLAYIDS')"><span>4尾</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'JIU_PLAYIDS')"><span>9尾</span></td>
			</tr>
			<tr>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'鼠')"><span>鼠</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'龙')"><span>龙</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'猴')"><span>猴</span></td>
			</tr>
			<tr>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'牛')"><span>牛</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'蛇')"><span>蛇</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'鸡')"><span>鸡</span></td>
			</tr>
			<tr>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'虎')"><span>虎</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'马')"><span>马</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'狗')"><span>狗</span></td>
			</tr>
			<tr>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'兔')"><span>兔</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'羊')"><span>羊</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'猪')"><span>猪</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'HONG')"><span>红</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LAN')"><span>蓝</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LV')"><span>绿</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'HONE_DAN')"><span>红单</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LAN_DAN')"><span>蓝单</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LV_DAN')"><span>绿单</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'HONE_SHUAN')"><span>红双</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LAN_SHUAN')"><span>蓝双</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LV_SHUAN')"><span>绿双</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'HONE_DA')"><span>红大</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LAN_DA')"><span>蓝大</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LV_DA')"><span>绿大</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'HONE_XIAO')"><span>红小</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LAN_XIAO')"><span>蓝小</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LV_XIAO')"><span>绿小</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'QUANGXUAN')"><span>全选</span></td>
				<td onclick="LHC_KJTZ.reverseSel(this,'QUANGXUAN')"><span>反选</span></td>
				<td onclick="LHC_KJTZ.cancelAll(this)"><span>取消</span></td>
			</tr>
		</tbody>
	</table>
</div>
</div>
		</div>
	</div>
	<!--/content-->
</div>
<!--/main-->

<script type="text/javascript">
window.onload = function() {
	document.onkeydown = function (e) {
		var theEvent = window.event || e;
		var code = theEvent.keyCode || theEvent.which;
		if (code == 13) {
			if(parent.UserBet.step==0) {
				parent.UserBet.openBetWindow();
			}else if(parent.UserBet.step==1){
				parent.UserBet.submitBet();
				if(parent.UserBet.step==0){
					setTimeout(function() {
						parent.layer.closeAll();
			        }, 200);
				}
			}
		}
	}
}
</script>
<script type="text/javascript" src="/static/js/lottery/ssc/stat.js" async="async"></script>
</body>
</html>