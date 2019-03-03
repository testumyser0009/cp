
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
    <table class="u-table2 play_tab_75 K3Term"> 
      <thead> 
       <tr> 
        <th colspan="12">第一球</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_607501" class="name"><span class="ball c-b1">01</span></td> 
        <td id="play_odds_607501" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607501" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607506" class="name"><span class="ball c-b1">06</span></td> 
        <td id="play_odds_607506" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607506" class="amount"><input type="text" /></td>
         
        <td id="play_name_607511" class="name"><span class="ball c-b1">11</span></td> 
        <td id="play_odds_607511" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607511" class="amount"><input type="text" /></td>
         
        <td id="play_name_607516" class="name"><span class="ball c-b1">16</span></td> 
        <td id="play_odds_607516" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607516" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_607502" class="name"><span class="ball c-b1">02</span></td> 
        <td id="play_odds_607502" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607502" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607507" class="name"><span class="ball c-b1">07</span></td> 
        <td id="play_odds_607507" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607507" class="amount"><input type="text" /></td>
         
        <td id="play_name_607512" class="name"><span class="ball c-b1">12</span></td> 
        <td id="play_odds_607512" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607512" class="amount"><input type="text" /></td>
         
        <td id="play_name_607517" class="name"><span class="ball c-b1">17</span></td> 
        <td id="play_odds_607517" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607517" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_607503" class="name"><span class="ball c-b1">03</span></td> 
        <td id="play_odds_607503" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607503" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607508" class="name"><span class="ball c-b1">08</span></td> 
        <td id="play_odds_607508" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607508" class="amount"><input type="text" /></td>
         
        <td id="play_name_607513" class="name"><span class="ball c-b1">13</span></td> 
        <td id="play_odds_607513" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607513" class="amount"><input type="text" /></td>
         
        <td id="play_name_607518" class="name"><span class="ball c-b1">18</span></td> 
        <td id="play_odds_607518" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607518" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_607504" class="name"><span class="ball c-b1">04</span></td> 
        <td id="play_odds_607504" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607504" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607509" class="name"><span class="ball c-b1">09</span></td> 
        <td id="play_odds_607509" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607509" class="amount"><input type="text" /></td>
         
        <td id="play_name_607514" class="name"><span class="ball c-b1">14</span></td> 
        <td id="play_odds_607514" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607514" class="amount"><input type="text" /></td>
         
        <td id="play_name_607519" class="name"><span class="ball c-b1">19</span></td> 
        <td id="play_odds_607519" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607519" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_607505" class="name"><span class="ball c-b1">05</span></td> 
        <td id="play_odds_607505" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607505" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607510" class="name"><span class="ball c-b1">10</span></td> 
        <td id="play_odds_607510" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607510" class="amount"><input type="text" /></td>
         
        <td id="play_name_607515" class="name"><span class="ball c-b1">15</span></td> 
        <td id="play_odds_607515" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607515" class="amount"><input type="text" /></td>
         
        <td id="play_name_607520" class="name"><span class="ball c-b1">20</span></td> 
        <td id="play_odds_607520" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607520" class="amount"><input type="text" /></td>
       </tr> 
      </tbody> 
     </table> 
     
     <table class="u-table2 play_tab_76 K3Term mt5"> 
      <thead> 
       <tr> 
        <th colspan="12">第二球</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_607601" class="name"><span class="ball c-b1">01</span></td> 
        <td id="play_odds_607601" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607601" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607606" class="name"><span class="ball c-b1">06</span></td> 
        <td id="play_odds_607606" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607606" class="amount"><input type="text" /></td>
         
        <td id="play_name_607611" class="name"><span class="ball c-b1">11</span></td> 
        <td id="play_odds_607611" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607611" class="amount"><input type="text" /></td>
         
        <td id="play_name_607616" class="name"><span class="ball c-b1">16</span></td> 
        <td id="play_odds_607616" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607616" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_607602" class="name"><span class="ball c-b1">02</span></td> 
        <td id="play_odds_607602" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607602" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607607" class="name"><span class="ball c-b1">07</span></td> 
        <td id="play_odds_607607" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607607" class="amount"><input type="text" /></td>
         
        <td id="play_name_607612" class="name"><span class="ball c-b1">12</span></td> 
        <td id="play_odds_607612" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607612" class="amount"><input type="text" /></td>
         
        <td id="play_name_607617" class="name"><span class="ball c-b1">17</span></td> 
        <td id="play_odds_607617" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607617" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_607603" class="name"><span class="ball c-b1">03</span></td> 
        <td id="play_odds_607603" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607603" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607608" class="name"><span class="ball c-b1">08</span></td> 
        <td id="play_odds_607608" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607608" class="amount"><input type="text" /></td>
         
        <td id="play_name_607613" class="name"><span class="ball c-b1">13</span></td> 
        <td id="play_odds_607613" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607613" class="amount"><input type="text" /></td>
         
        <td id="play_name_607618" class="name"><span class="ball c-b1">18</span></td> 
        <td id="play_odds_607618" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607618" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_607604" class="name"><span class="ball c-b1">04</span></td> 
        <td id="play_odds_607604" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607604" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607609" class="name"><span class="ball c-b1">09</span></td> 
        <td id="play_odds_607609" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607609" class="amount"><input type="text" /></td>
         
        <td id="play_name_607614" class="name"><span class="ball c-b1">14</span></td> 
        <td id="play_odds_607614" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607614" class="amount"><input type="text" /></td>
         
        <td id="play_name_607619" class="name"><span class="ball c-b1">19</span></td> 
        <td id="play_odds_607619" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607619" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_607605" class="name"><span class="ball c-b1">05</span></td> 
        <td id="play_odds_607605" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607605" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607610" class="name"><span class="ball c-b1">10</span></td> 
        <td id="play_odds_607610" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607610" class="amount"><input type="text" /></td>
         
        <td id="play_name_607615" class="name"><span class="ball c-b1">15</span></td> 
        <td id="play_odds_607615" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607615" class="amount"><input type="text" /></td>
         
        <td id="play_name_607620" class="name"><span class="ball c-b1">20</span></td> 
        <td id="play_odds_607620" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607620" class="amount"><input type="text" /></td>
       </tr> 
      </tbody> 
     </table> 
     
     <table class="u-table2 play_tab_77 K3Term mt5"> 
      <thead> 
       <tr> 
        <th colspan="12">第三球</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_607701" class="name"><span class="ball c-b1">01</span></td> 
        <td id="play_odds_607701" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607701" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607706" class="name"><span class="ball c-b1">06</span></td> 
        <td id="play_odds_607706" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607706" class="amount"><input type="text" /></td>
         
        <td id="play_name_607711" class="name"><span class="ball c-b1">11</span></td> 
        <td id="play_odds_607711" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607711" class="amount"><input type="text" /></td>
         
        <td id="play_name_607716" class="name"><span class="ball c-b1">16</span></td> 
        <td id="play_odds_607716" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607716" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_607702" class="name"><span class="ball c-b1">02</span></td> 
        <td id="play_odds_607702" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607702" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607707" class="name"><span class="ball c-b1">07</span></td> 
        <td id="play_odds_607707" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607707" class="amount"><input type="text" /></td>
         
        <td id="play_name_607712" class="name"><span class="ball c-b1">12</span></td> 
        <td id="play_odds_607712" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607712" class="amount"><input type="text" /></td>
         
        <td id="play_name_607717" class="name"><span class="ball c-b1">17</span></td> 
        <td id="play_odds_607717" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607717" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_607703" class="name"><span class="ball c-b1">03</span></td> 
        <td id="play_odds_607703" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607703" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607708" class="name"><span class="ball c-b1">08</span></td> 
        <td id="play_odds_607708" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607708" class="amount"><input type="text" /></td>
         
        <td id="play_name_607713" class="name"><span class="ball c-b1">13</span></td> 
        <td id="play_odds_607713" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607713" class="amount"><input type="text" /></td>
         
        <td id="play_name_607718" class="name"><span class="ball c-b1">18</span></td> 
        <td id="play_odds_607718" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607718" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_607704" class="name"><span class="ball c-b1">04</span></td> 
        <td id="play_odds_607704" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607704" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607709" class="name"><span class="ball c-b1">09</span></td> 
        <td id="play_odds_607709" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607709" class="amount"><input type="text" /></td>
         
        <td id="play_name_607714" class="name"><span class="ball c-b1">14</span></td> 
        <td id="play_odds_607714" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607714" class="amount"><input type="text" /></td>
         
        <td id="play_name_607719" class="name"><span class="ball c-b1">19</span></td> 
        <td id="play_odds_607719" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607719" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_607705" class="name"><span class="ball c-b1">05</span></td> 
        <td id="play_odds_607705" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607705" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607710" class="name"><span class="ball c-b1">10</span></td> 
        <td id="play_odds_607710" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607710" class="amount"><input type="text" /></td>
         
        <td id="play_name_607715" class="name"><span class="ball c-b1">15</span></td> 
        <td id="play_odds_607715" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607715" class="amount"><input type="text" /></td>
         
        <td id="play_name_607720" class="name"><span class="ball c-b1">20</span></td> 
        <td id="play_odds_607720" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607720" class="amount"><input type="text" /></td>
       </tr> 
      </tbody> 
     </table> 
     
     <table class="u-table2 play_tab_78 K3Term mt5"> 
      <thead> 
       <tr> 
        <th colspan="12">第四球</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_607801" class="name"><span class="ball c-b1">01</span></td> 
        <td id="play_odds_607801" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607801" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607806" class="name"><span class="ball c-b1">06</span></td> 
        <td id="play_odds_607806" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607806" class="amount"><input type="text" /></td>
         
        <td id="play_name_607811" class="name"><span class="ball c-b1">11</span></td> 
        <td id="play_odds_607811" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607811" class="amount"><input type="text" /></td>
         
        <td id="play_name_607816" class="name"><span class="ball c-b1">16</span></td> 
        <td id="play_odds_607816" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607816" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_607802" class="name"><span class="ball c-b1">02</span></td> 
        <td id="play_odds_607802" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607802" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607807" class="name"><span class="ball c-b1">07</span></td> 
        <td id="play_odds_607807" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607807" class="amount"><input type="text" /></td>
         
        <td id="play_name_607812" class="name"><span class="ball c-b1">12</span></td> 
        <td id="play_odds_607812" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607812" class="amount"><input type="text" /></td>
         
        <td id="play_name_607817" class="name"><span class="ball c-b1">17</span></td> 
        <td id="play_odds_607817" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607817" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_607803" class="name"><span class="ball c-b1">03</span></td> 
        <td id="play_odds_607803" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607803" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607808" class="name"><span class="ball c-b1">08</span></td> 
        <td id="play_odds_607808" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607808" class="amount"><input type="text" /></td>
         
        <td id="play_name_607813" class="name"><span class="ball c-b1">13</span></td> 
        <td id="play_odds_607813" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607813" class="amount"><input type="text" /></td>
         
        <td id="play_name_607818" class="name"><span class="ball c-b1">18</span></td> 
        <td id="play_odds_607818" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607818" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_607804" class="name"><span class="ball c-b1">04</span></td> 
        <td id="play_odds_607804" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607804" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607809" class="name"><span class="ball c-b1">09</span></td> 
        <td id="play_odds_607809" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607809" class="amount"><input type="text" /></td>
         
        <td id="play_name_607814" class="name"><span class="ball c-b1">14</span></td> 
        <td id="play_odds_607814" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607814" class="amount"><input type="text" /></td>
         
        <td id="play_name_607819" class="name"><span class="ball c-b1">19</span></td> 
        <td id="play_odds_607819" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607819" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_607805" class="name"><span class="ball c-b1">05</span></td> 
        <td id="play_odds_607805" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607805" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607810" class="name"><span class="ball c-b1">10</span></td> 
        <td id="play_odds_607810" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607810" class="amount"><input type="text" /></td>
         
        <td id="play_name_607815" class="name"><span class="ball c-b1">15</span></td> 
        <td id="play_odds_607815" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607815" class="amount"><input type="text" /></td>
         
        <td id="play_name_607820" class="name"><span class="ball c-b1">20</span></td> 
        <td id="play_odds_607820" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607820" class="amount"><input type="text" /></td>
       </tr> 
      </tbody> 
     </table> 
     
     <table class="u-table2 play_tab_79 K3Term mt5"> 
      <thead> 
       <tr> 
        <th colspan="12">第五球</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_607901" class="name"><span class="ball c-b1">01</span></td> 
        <td id="play_odds_607901" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607901" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607906" class="name"><span class="ball c-b1">06</span></td> 
        <td id="play_odds_607906" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607906" class="amount"><input type="text" /></td>
         
        <td id="play_name_607911" class="name"><span class="ball c-b1">11</span></td> 
        <td id="play_odds_607911" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607911" class="amount"><input type="text" /></td>
         
        <td id="play_name_607916" class="name"><span class="ball c-b1">16</span></td> 
        <td id="play_odds_607916" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607916" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_607902" class="name"><span class="ball c-b1">02</span></td> 
        <td id="play_odds_607902" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607902" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607907" class="name"><span class="ball c-b1">07</span></td> 
        <td id="play_odds_607907" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607907" class="amount"><input type="text" /></td>
         
        <td id="play_name_607912" class="name"><span class="ball c-b1">12</span></td> 
        <td id="play_odds_607912" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607912" class="amount"><input type="text" /></td>
         
        <td id="play_name_607917" class="name"><span class="ball c-b1">17</span></td> 
        <td id="play_odds_607917" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607917" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_607903" class="name"><span class="ball c-b1">03</span></td> 
        <td id="play_odds_607903" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607903" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607908" class="name"><span class="ball c-b1">08</span></td> 
        <td id="play_odds_607908" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607908" class="amount"><input type="text" /></td>
         
        <td id="play_name_607913" class="name"><span class="ball c-b1">13</span></td> 
        <td id="play_odds_607913" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607913" class="amount"><input type="text" /></td>
         
        <td id="play_name_607918" class="name"><span class="ball c-b1">18</span></td> 
        <td id="play_odds_607918" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607918" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_607904" class="name"><span class="ball c-b1">04</span></td> 
        <td id="play_odds_607904" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607904" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607909" class="name"><span class="ball c-b1">09</span></td> 
        <td id="play_odds_607909" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607909" class="amount"><input type="text" /></td>
         
        <td id="play_name_607914" class="name"><span class="ball c-b1">14</span></td> 
        <td id="play_odds_607914" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607914" class="amount"><input type="text" /></td>
         
        <td id="play_name_607919" class="name"><span class="ball c-b1">19</span></td> 
        <td id="play_odds_607919" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607919" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_607905" class="name"><span class="ball c-b1">05</span></td> 
        <td id="play_odds_607905" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607905" class="amount"><input type="text" /></td> 
        
        <td id="play_name_607910" class="name"><span class="ball c-b1">10</span></td> 
        <td id="play_odds_607910" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607910" class="amount"><input type="text" /></td>
         
        <td id="play_name_607915" class="name"><span class="ball c-b1">15</span></td> 
        <td id="play_odds_607915" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607915" class="amount"><input type="text" /></td>
         
        <td id="play_name_607920" class="name"><span class="ball c-b1">20</span></td> 
        <td id="play_odds_607920" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_607920" class="amount"><input type="text" /></td>
       </tr> 
      </tbody> 
     </table> 
     
     <table class="u-table2 play_tab_80 K3Term mt5"> 
      <thead> 
       <tr> 
        <th colspan="12">第六球</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_608001" class="name"><span class="ball c-b1">01</span></td> 
        <td id="play_odds_608001" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608001" class="amount"><input type="text" /></td> 
        
        <td id="play_name_608006" class="name"><span class="ball c-b1">06</span></td> 
        <td id="play_odds_608006" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608006" class="amount"><input type="text" /></td>
         
        <td id="play_name_608011" class="name"><span class="ball c-b1">11</span></td> 
        <td id="play_odds_608011" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608011" class="amount"><input type="text" /></td>
         
        <td id="play_name_608016" class="name"><span class="ball c-b1">16</span></td> 
        <td id="play_odds_608016" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608016" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_608002" class="name"><span class="ball c-b1">02</span></td> 
        <td id="play_odds_608002" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608002" class="amount"><input type="text" /></td> 
        
        <td id="play_name_608007" class="name"><span class="ball c-b1">07</span></td> 
        <td id="play_odds_608007" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608007" class="amount"><input type="text" /></td>
         
        <td id="play_name_608012" class="name"><span class="ball c-b1">12</span></td> 
        <td id="play_odds_608012" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608012" class="amount"><input type="text" /></td>
         
        <td id="play_name_608017" class="name"><span class="ball c-b1">17</span></td> 
        <td id="play_odds_608017" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608017" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_608003" class="name"><span class="ball c-b1">03</span></td> 
        <td id="play_odds_608003" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608003" class="amount"><input type="text" /></td> 
        
        <td id="play_name_608008" class="name"><span class="ball c-b1">08</span></td> 
        <td id="play_odds_608008" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608008" class="amount"><input type="text" /></td>
         
        <td id="play_name_608013" class="name"><span class="ball c-b1">13</span></td> 
        <td id="play_odds_608013" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608013" class="amount"><input type="text" /></td>
         
        <td id="play_name_608018" class="name"><span class="ball c-b1">18</span></td> 
        <td id="play_odds_608018" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608018" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_608004" class="name"><span class="ball c-b1">04</span></td> 
        <td id="play_odds_608004" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608004" class="amount"><input type="text" /></td> 
        
        <td id="play_name_608009" class="name"><span class="ball c-b1">09</span></td> 
        <td id="play_odds_608009" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608009" class="amount"><input type="text" /></td>
         
        <td id="play_name_608014" class="name"><span class="ball c-b1">14</span></td> 
        <td id="play_odds_608014" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608014" class="amount"><input type="text" /></td>
         
        <td id="play_name_608019" class="name"><span class="ball c-b1">19</span></td> 
        <td id="play_odds_608019" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608019" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_608005" class="name"><span class="ball c-b1">05</span></td> 
        <td id="play_odds_608005" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608005" class="amount"><input type="text" /></td> 
        
        <td id="play_name_608010" class="name"><span class="ball c-b1">10</span></td> 
        <td id="play_odds_608010" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608010" class="amount"><input type="text" /></td>
         
        <td id="play_name_608015" class="name"><span class="ball c-b1">15</span></td> 
        <td id="play_odds_608015" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608015" class="amount"><input type="text" /></td>
         
        <td id="play_name_608020" class="name"><span class="ball c-b1">20</span></td> 
        <td id="play_odds_608020" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608020" class="amount"><input type="text" /></td>
       </tr> 
      </tbody> 
     </table>
     
     
     <table class="u-table2 play_tab_81 K3Term mt5"> 
      <thead> 
       <tr> 
        <th colspan="12">第七球</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_608101" class="name"><span class="ball c-b1">01</span></td> 
        <td id="play_odds_608101" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608101" class="amount"><input type="text" /></td> 
        
        <td id="play_name_608106" class="name"><span class="ball c-b1">06</span></td> 
        <td id="play_odds_608106" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608106" class="amount"><input type="text" /></td>
         
        <td id="play_name_608111" class="name"><span class="ball c-b1">11</span></td> 
        <td id="play_odds_608111" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608111" class="amount"><input type="text" /></td>
         
        <td id="play_name_608116" class="name"><span class="ball c-b1">16</span></td> 
        <td id="play_odds_608116" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608116" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_608102" class="name"><span class="ball c-b1">02</span></td> 
        <td id="play_odds_608102" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608102" class="amount"><input type="text" /></td> 
        
        <td id="play_name_608107" class="name"><span class="ball c-b1">07</span></td> 
        <td id="play_odds_608107" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608107" class="amount"><input type="text" /></td>
         
        <td id="play_name_608112" class="name"><span class="ball c-b1">12</span></td> 
        <td id="play_odds_608112" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608112" class="amount"><input type="text" /></td>
         
        <td id="play_name_608117" class="name"><span class="ball c-b1">17</span></td> 
        <td id="play_odds_608117" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608117" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_608103" class="name"><span class="ball c-b1">03</span></td> 
        <td id="play_odds_608103" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608103" class="amount"><input type="text" /></td> 
        
        <td id="play_name_608108" class="name"><span class="ball c-b1">08</span></td> 
        <td id="play_odds_608108" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608108" class="amount"><input type="text" /></td>
         
        <td id="play_name_608113" class="name"><span class="ball c-b1">13</span></td> 
        <td id="play_odds_608113" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608113" class="amount"><input type="text" /></td>
         
        <td id="play_name_608118" class="name"><span class="ball c-b1">18</span></td> 
        <td id="play_odds_608118" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608118" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_608104" class="name"><span class="ball c-b1">04</span></td> 
        <td id="play_odds_608104" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608104" class="amount"><input type="text" /></td> 
        
        <td id="play_name_608109" class="name"><span class="ball c-b1">09</span></td> 
        <td id="play_odds_608109" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608109" class="amount"><input type="text" /></td>
         
        <td id="play_name_608114" class="name"><span class="ball c-b1">14</span></td> 
        <td id="play_odds_608114" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608114" class="amount"><input type="text" /></td>
         
        <td id="play_name_608119" class="name"><span class="ball c-b1">19</span></td> 
        <td id="play_odds_608119" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608119" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_608105" class="name"><span class="ball c-b1">05</span></td> 
        <td id="play_odds_608105" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608105" class="amount"><input type="text" /></td> 
        
        <td id="play_name_608110" class="name"><span class="ball c-b1">10</span></td> 
        <td id="play_odds_608110" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608110" class="amount"><input type="text" /></td>
         
        <td id="play_name_608115" class="name"><span class="ball c-b1">15</span></td> 
        <td id="play_odds_608115" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608115" class="amount"><input type="text" /></td>
         
        <td id="play_name_608120" class="name"><span class="ball c-b1">20</span></td> 
        <td id="play_odds_608120" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608120" class="amount"><input type="text" /></td>
       </tr> 
      </tbody> 
     </table>
     
     
     <table class="u-table2 play_tab_82 K3Term mt5"> 
      <thead> 
       <tr> 
        <th colspan="12">第八球</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_608201" class="name"><span class="ball c-b1">01</span></td> 
        <td id="play_odds_608201" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608201" class="amount"><input type="text" /></td> 
        
        <td id="play_name_608206" class="name"><span class="ball c-b1">06</span></td> 
        <td id="play_odds_608206" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608206" class="amount"><input type="text" /></td>
         
        <td id="play_name_608211" class="name"><span class="ball c-b1">11</span></td> 
        <td id="play_odds_608211" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608211" class="amount"><input type="text" /></td>
         
        <td id="play_name_608216" class="name"><span class="ball c-b1">16</span></td> 
        <td id="play_odds_608216" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608216" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_608202" class="name"><span class="ball c-b1">02</span></td> 
        <td id="play_odds_608202" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608202" class="amount"><input type="text" /></td> 
        
        <td id="play_name_608207" class="name"><span class="ball c-b1">07</span></td> 
        <td id="play_odds_608207" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608207" class="amount"><input type="text" /></td>
         
        <td id="play_name_608212" class="name"><span class="ball c-b1">12</span></td> 
        <td id="play_odds_608212" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608212" class="amount"><input type="text" /></td>
         
        <td id="play_name_608217" class="name"><span class="ball c-b1">17</span></td> 
        <td id="play_odds_608217" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608217" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_608203" class="name"><span class="ball c-b1">03</span></td> 
        <td id="play_odds_608203" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608203" class="amount"><input type="text" /></td> 
        
        <td id="play_name_608208" class="name"><span class="ball c-b1">08</span></td> 
        <td id="play_odds_608208" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608208" class="amount"><input type="text" /></td>
         
        <td id="play_name_608213" class="name"><span class="ball c-b1">13</span></td> 
        <td id="play_odds_608213" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608213" class="amount"><input type="text" /></td>
         
        <td id="play_name_608218" class="name"><span class="ball c-b1">18</span></td> 
        <td id="play_odds_608218" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608218" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_608204" class="name"><span class="ball c-b1">04</span></td> 
        <td id="play_odds_608204" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608204" class="amount"><input type="text" /></td> 
        
        <td id="play_name_608209" class="name"><span class="ball c-b1">09</span></td> 
        <td id="play_odds_608209" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608209" class="amount"><input type="text" /></td>
         
        <td id="play_name_608214" class="name"><span class="ball c-b1">14</span></td> 
        <td id="play_odds_608214" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608214" class="amount"><input type="text" /></td>
         
        <td id="play_name_608219" class="name"><span class="ball c-b1">19</span></td> 
        <td id="play_odds_608219" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608219" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_608205" class="name"><span class="ball c-b1">05</span></td> 
        <td id="play_odds_608205" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608205" class="amount"><input type="text" /></td> 
        
        <td id="play_name_608210" class="name"><span class="ball c-b1">10</span></td> 
        <td id="play_odds_608210" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608210" class="amount"><input type="text" /></td>
         
        <td id="play_name_608215" class="name"><span class="ball c-b1">15</span></td> 
        <td id="play_odds_608215" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608215" class="amount"><input type="text" /></td>
         
        <td id="play_name_608220" class="name"><span class="ball c-b1">20</span></td> 
        <td id="play_odds_608220" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608220" class="amount"><input type="text" /></td>
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
				<th class="u-tb3-th2" id="qiu6_th" onclick="StatGame.showStat(6)"
					qiu="6">第六球</th>
				<th class="u-tb3-th2" id="qiu7_th" onclick="StatGame.showStat(7)"
					qiu="7">第七球</th>
				<th class="u-tb3-th2" id="qiu8_th" onclick="StatGame.showStat(8)"
					qiu="8">第八球</th>
			</tr>
		</thead>
	</table>
	<table class="u-table4">
		<tbody>
			<tr>
				<td class="f1 fwb">01</td>
				<td class="f1 fwb">02</td>
				<td class="f1 fwb">03</td>
				<td class="f1 fwb">04</td>
				<td class="f1 fwb">05</td>
				<td class="f1 fwb">06</td>
				<td class="f1 fwb">07</td>
				<td class="f1 fwb">08</td>
				<td class="f1 fwb">09</td>
				<td class="f1 fwb">10</td>
				<td class="f1 fwb">11</td>
				<td class="f1 fwb">12</td>
				<td class="f1 fwb">13</td>
				<td class="f1 fwb">14</td>
				<td class="f1 fwb">15</td>
				<td class="f1 fwb">16</td>
				<td class="f1 fwb">17</td>
				<td class="f1 fwb">18</td>
				<td class="f1 fwb">19</td>
				<td class="f1 fwb">20</td>
			</tr>
			<tr id="qiu1_body">
				<td id="q1_1_time">0</td>
				<td id="q1_2_time">0</td>
				<td id="q1_3_time">0</td>
				<td id="q1_4_time">0</td>
				<td id="q1_5_time">0</td>
				<td id="q1_6_time">0</td>
				<td id="q1_7_time">0</td>
				<td id="q1_8_time">0</td>
				<td id="q1_9_time">0</td>
				<td id="q1_10_time">0</td>
				<td id="q1_11_time">0</td>
				<td id="q1_12_time">0</td>
				<td id="q1_13_time">0</td>
				<td id="q1_14_time">0</td>
				<td id="q1_15_time">0</td>
				<td id="q1_16_time">0</td>
				<td id="q1_17_time">0</td>
				<td id="q1_18_time">0</td>
				<td id="q1_19_time">0</td>
				<td id="q1_20_time">0</td>
			</tr>
			<tr id="qiu2_body" class="hide">
				<td id="q2_1_time">0</td>
				<td id="q2_2_time">0</td>
				<td id="q2_3_time">0</td>
				<td id="q2_4_time">0</td>
				<td id="q2_5_time">0</td>
				<td id="q2_6_time">0</td>
				<td id="q2_7_time">0</td>
				<td id="q2_8_time">0</td>
				<td id="q2_9_time">0</td>
				<td id="q2_10_time">0</td>
				<td id="q2_11_time">0</td>
				<td id="q2_12_time">0</td>
				<td id="q2_13_time">0</td>
				<td id="q2_14_time">0</td>
				<td id="q2_15_time">0</td>
				<td id="q2_16_time">0</td>
				<td id="q2_17_time">0</td>
				<td id="q2_18_time">0</td>
				<td id="q2_19_time">0</td>
				<td id="q2_20_time">0</td>
			</tr>
			<tr id="qiu3_body" class="hide">
				<td id="q3_1_time">0</td>
				<td id="q3_2_time">0</td>
				<td id="q3_3_time">0</td>
				<td id="q3_4_time">0</td>
				<td id="q3_5_time">0</td>
				<td id="q3_6_time">0</td>
				<td id="q3_7_time">0</td>
				<td id="q3_8_time">0</td>
				<td id="q3_9_time">0</td>
				<td id="q3_10_time">0</td>
				<td id="q3_11_time">0</td>
				<td id="q3_12_time">0</td>
				<td id="q3_13_time">0</td>
				<td id="q3_14_time">0</td>
				<td id="q3_15_time">0</td>
				<td id="q3_16_time">0</td>
				<td id="q3_17_time">0</td>
				<td id="q3_18_time">0</td>
				<td id="q3_19_time">0</td>
				<td id="q3_20_time">0</td>
			</tr>
			<tr id="qiu4_body" class="hide">
				<td id="q4_1_time">0</td>
				<td id="q4_2_time">0</td>
				<td id="q4_3_time">0</td>
				<td id="q4_4_time">0</td>
				<td id="q4_5_time">0</td>
				<td id="q4_6_time">0</td>
				<td id="q4_7_time">0</td>
				<td id="q4_8_time">0</td>
				<td id="q4_9_time">0</td>
				<td id="q4_10_time">0</td>
				<td id="q4_11_time">0</td>
				<td id="q4_12_time">0</td>
				<td id="q4_13_time">0</td>
				<td id="q4_14_time">0</td>
				<td id="q4_15_time">0</td>
				<td id="q4_16_time">0</td>
				<td id="q4_17_time">0</td>
				<td id="q4_18_time">0</td>
				<td id="q4_19_time">0</td>
				<td id="q4_20_time">0</td>
			</tr>
			<tr id="qiu5_body" class="hide">
				<td id="q5_1_time">0</td>
				<td id="q5_2_time">0</td>
				<td id="q5_3_time">0</td>
				<td id="q5_4_time">0</td>
				<td id="q5_5_time">0</td>
				<td id="q5_6_time">0</td>
				<td id="q5_7_time">0</td>
				<td id="q5_8_time">0</td>
				<td id="q5_9_time">0</td>
				<td id="q5_10_time">0</td>
				<td id="q5_11_time">0</td>
				<td id="q5_12_time">0</td>
				<td id="q5_13_time">0</td>
				<td id="q5_14_time">0</td>
				<td id="q5_15_time">0</td>
				<td id="q5_16_time">0</td>
				<td id="q5_17_time">0</td>
				<td id="q5_18_time">0</td>
				<td id="q5_19_time">0</td>
				<td id="q5_20_time">0</td>
			</tr>
			<tr id="qiu6_body" class="hide">
				<td id="q6_1_time">0</td>
				<td id="q6_2_time">0</td>
				<td id="q6_3_time">0</td>
				<td id="q6_4_time">0</td>
				<td id="q6_5_time">0</td>
				<td id="q6_6_time">0</td>
				<td id="q6_7_time">0</td>
				<td id="q6_8_time">0</td>
				<td id="q6_9_time">0</td>
				<td id="q6_10_time">0</td>
				<td id="q6_11_time">0</td>
				<td id="q6_12_time">0</td>
				<td id="q6_13_time">0</td>
				<td id="q6_14_time">0</td>
				<td id="q6_15_time">0</td>
				<td id="q6_16_time">0</td>
				<td id="q6_17_time">0</td>
				<td id="q6_18_time">0</td>
				<td id="q6_19_time">0</td>
				<td id="q6_20_time">0</td>
			</tr>
			<tr id="qiu7_body" class="hide">
				<td id="q7_1_time">0</td>
				<td id="q7_2_time">0</td>
				<td id="q7_3_time">0</td>
				<td id="q7_4_time">0</td>
				<td id="q7_5_time">0</td>
				<td id="q7_6_time">0</td>
				<td id="q7_7_time">0</td>
				<td id="q7_8_time">0</td>
				<td id="q7_9_time">0</td>
				<td id="q7_10_time">0</td>
				<td id="q7_11_time">0</td>
				<td id="q7_12_time">0</td>
				<td id="q7_13_time">0</td>
				<td id="q7_14_time">0</td>
				<td id="q7_15_time">0</td>
				<td id="q7_16_time">0</td>
				<td id="q7_17_time">0</td>
				<td id="q7_18_time">0</td>
				<td id="q7_19_time">0</td>
				<td id="q7_20_time">0</td>
			</tr>
			<tr id="qiu8_body" class="hide">
				<td id="q8_1_time">0</td>
				<td id="q8_2_time">0</td>
				<td id="q8_3_time">0</td>
				<td id="q8_4_time">0</td>
				<td id="q8_5_time">0</td>
				<td id="q8_6_time">0</td>
				<td id="q8_7_time">0</td>
				<td id="q8_8_time">0</td>
				<td id="q8_9_time">0</td>
				<td id="q8_10_time">0</td>
				<td id="q8_11_time">0</td>
				<td id="q8_12_time">0</td>
				<td id="q8_13_time">0</td>
				<td id="q8_14_time">0</td>
				<td id="q8_15_time">0</td>
				<td id="q8_16_time">0</td>
				<td id="q8_17_time">0</td>
				<td id="q8_18_time">0</td>
				<td id="q8_19_time">0</td>
				<td id="q8_20_time">0</td>
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
				<th class="u-tb3-th2" id="stat_lh_btn" type="lh"
					onclick="StatGame.showStatType(this)">龙虎</th>
				<th class="u-tb3-th2" id="stat_lh_btn" type="wsdx"
					onclick="StatGame.showStatType(this)">尾数大小</th>
				<th class="u-tb3-th2" id="stat_lh_btn" type="hsds"
					onclick="StatGame.showStatType(this)">合数单双</th>
				<th class="u-tb3-th2" id="stat_zhdx_btn" type="zhdx"
					onclick="StatGame.showStatType(this)">总和大小</th>
				<th class="u-tb3-th2" id="stat_zhds_btn" type="zhds"
					onclick="StatGame.showStatType(this)">总和单双</th>
				<th class="u-tb3-th2" id="stat_zhws_btn" type="zhws"
					onclick="StatGame.showStatType(this)">总尾数大小</th>
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
			<tr id="qiu6_nums" class="stattd hide"></tr>
			<tr id="qiu7_nums" class="stattd hide"></tr>
			<tr id="qiu8_nums" class="stattd hide"></tr>
			<tr id="qiu1_size" class="stattd hide"></tr>
			<tr id="qiu2_size" class="stattd hide"></tr>
			<tr id="qiu3_size" class="stattd hide"></tr>
			<tr id="qiu4_size" class="stattd hide"></tr>
			<tr id="qiu5_size" class="stattd hide"></tr>
			<tr id="qiu6_size" class="stattd hide"></tr>
			<tr id="qiu7_size" class="stattd hide"></tr>
			<tr id="qiu8_size" class="stattd hide"></tr>
			<tr id="qiu1_firsts" class="stattd hide"></tr>
			<tr id="qiu2_firsts" class="stattd hide"></tr>
			<tr id="qiu3_firsts" class="stattd hide"></tr>
			<tr id="qiu4_firsts" class="stattd hide"></tr>
			<tr id="qiu5_firsts" class="stattd hide"></tr>
			<tr id="qiu6_firsts" class="stattd hide"></tr>
			<tr id="qiu7_firsts" class="stattd hide"></tr>
			<tr id="qiu8_firsts" class="stattd hide"></tr>
			<tr id="qiu1_lh" class="stattd hide"></tr>
			<tr id="qiu2_lh" class="stattd hide"></tr>
			<tr id="qiu3_lh" class="stattd hide"></tr>
			<tr id="qiu4_lh" class="stattd hide"></tr>
			<tr id="qiu1_wsdx" class="stattd hide"></tr>
			<tr id="qiu2_wsdx" class="stattd hide"></tr>
			<tr id="qiu3_wsdx" class="stattd hide"></tr>
			<tr id="qiu4_wsdx" class="stattd hide"></tr>
			<tr id="qiu5_wsdx" class="stattd hide"></tr>
			<tr id="qiu6_wsdx" class="stattd hide"></tr>
			<tr id="qiu7_wsdx" class="stattd hide"></tr>
			<tr id="qiu8_wsdx" class="stattd hide"></tr>
			<tr id="qiu1_hsds" class="stattd hide"></tr>
			<tr id="qiu2_hsds" class="stattd hide"></tr>
			<tr id="qiu3_hsds" class="stattd hide"></tr>
			<tr id="qiu4_hsds" class="stattd hide"></tr>
			<tr id="qiu5_hsds" class="stattd hide"></tr>
			<tr id="qiu6_hsds" class="stattd hide"></tr>
			<tr id="qiu7_hsds" class="stattd hide"></tr>
			<tr id="qiu8_hsds" class="stattd hide"></tr>
			<tr id="qiu1_zhdx" class="stattd hide"></tr>
			<tr id="qiu1_zhds" class="stattd hide"></tr>
			<tr id="qiu1_zhws" class="stattd hide"></tr>
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
<script type="text/javascript" src="/static/js/lottery/xync/stat.js" async="async"></script>
</body>
</html>

