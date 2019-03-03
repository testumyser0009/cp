
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
     <ul class="cont-list1 clearfix"> 
      <li>
      	<table class="u-table2 play_tab_102"> 
        <thead> 
         <tr> 
          <th colspan="3">冠军</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_5510201" class="name"><span class="ball c-n1"></span></td> 
          <td id="play_odds_5510201" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510201" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510202" class="name"><span class="ball c-n2"></span></td> 
          <td id="play_odds_5510202" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510202" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510203" class="name"><span class="ball c-n3"></span></td> 
          <td id="play_odds_5510203" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510203" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510204" class="name"><span class="ball c-n4"></span></td> 
          <td id="play_odds_5510204" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510204" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510205" class="name"><span class="ball c-n5"></span></td> 
          <td id="play_odds_5510205" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510205" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510206" class="name"><span class="ball c-n6"></span></td> 
          <td id="play_odds_5510206" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510206" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510207" class="name"><span class="ball c-n7"></span></td> 
          <td id="play_odds_5510207" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510207" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510208" class="name"><span class="ball c-n8"></span></td> 
          <td id="play_odds_5510208" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510208" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510209" class="name"><span class="ball c-n9"></span></td> 
          <td id="play_odds_5510209" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510209" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510210" class="name"><span class="ball c-n10"></span></td> 
          <td id="play_odds_5510210" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510210" class="amount"><input type="text" /></td>
         </tr> 
        </tbody> 
       </table>
      </li> 
      <li> 
       <table class="u-table2 play_tab_103"> 
        <thead> 
         <tr> 
          <th colspan="3">亚军</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_5510301" class="name"><span class="ball c-n1"></span></td> 
          <td id="play_odds_5510301" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510301" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510302" class="name"><span class="ball c-n2"></span></td> 
          <td id="play_odds_5510302" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510302" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510303" class="name"><span class="ball c-n3"></span></td> 
          <td id="play_odds_5510303" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510303" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510304" class="name"><span class="ball c-n4"></span></td> 
          <td id="play_odds_5510304" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510304" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510305" class="name"><span class="ball c-n5"></span></td> 
          <td id="play_odds_5510305" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510305" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510306" class="name"><span class="ball c-n6"></span></td> 
          <td id="play_odds_5510306" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510306" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510307" class="name"><span class="ball c-n7"></span></td> 
          <td id="play_odds_5510307" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510307" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510308" class="name"><span class="ball c-n8"></span></td> 
          <td id="play_odds_5510308" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510308" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510309" class="name"><span class="ball c-n9"></span></td> 
          <td id="play_odds_5510309" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510309" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510310" class="name"><span class="ball c-n10"></span></td> 
          <td id="play_odds_5510310" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510310" class="amount"><input type="text" /></td>
         </tr> 
        </tbody> 
       </table> </li> 
      
      <li> 
       	<table class="u-table2 play_tab_104"> 
        <thead> 
         <tr> 
          <th colspan="3">第三名</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_5510401" class="name"><span class="ball c-n1"></span></td> 
          <td id="play_odds_5510401" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510401" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510402" class="name"><span class="ball c-n2"></span></td> 
          <td id="play_odds_5510402" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510402" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510403" class="name"><span class="ball c-n3"></span></td> 
          <td id="play_odds_5510403" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510403" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510404" class="name"><span class="ball c-n4"></span></td> 
          <td id="play_odds_5510404" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510404" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510405" class="name"><span class="ball c-n5"></span></td> 
          <td id="play_odds_5510405" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510405" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510406" class="name"><span class="ball c-n6"></span></td> 
          <td id="play_odds_5510406" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510406" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510407" class="name"><span class="ball c-n7"></span></td> 
          <td id="play_odds_5510407" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510407" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510408" class="name"><span class="ball c-n8"></span></td> 
          <td id="play_odds_5510408" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510408" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510409" class="name"><span class="ball c-n9"></span></td> 
          <td id="play_odds_5510409" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510409" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510410" class="name"><span class="ball c-n10"></span></td> 
          <td id="play_odds_5510410" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510410" class="amount"><input type="text" /></td>
         </tr> 
        </tbody> 
       </table>
      </li> 
      <li>
      	<table class="u-table2 play_tab_105"> 
        <thead> 
         <tr> 
          <th colspan="3">第四名</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_5510501" class="name"><span class="ball c-n1"></span></td> 
          <td id="play_odds_5510501" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510501" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510502" class="name"><span class="ball c-n2"></span></td> 
          <td id="play_odds_5510502" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510502" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510503" class="name"><span class="ball c-n3"></span></td> 
          <td id="play_odds_5510503" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510503" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510504" class="name"><span class="ball c-n4"></span></td> 
          <td id="play_odds_5510504" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510504" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510505" class="name"><span class="ball c-n5"></span></td> 
          <td id="play_odds_5510505" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510505" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510506" class="name"><span class="ball c-n6"></span></td> 
          <td id="play_odds_5510506" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510506" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510507" class="name"><span class="ball c-n7"></span></td> 
          <td id="play_odds_5510507" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510507" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510508" class="name"><span class="ball c-n8"></span></td> 
          <td id="play_odds_5510508" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510508" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510509" class="name"><span class="ball c-n9"></span></td> 
          <td id="play_odds_5510509" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510509" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510510" class="name"><span class="ball c-n10"></span></td> 
          <td id="play_odds_5510510" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510510" class="amount"><input type="text" /></td>
         </tr> 
        </tbody> 
       </table> 
      </li> 
      <li> 
       <table class="u-table2 play_tab_106"> 
        <thead> 
         <tr> 
          <th colspan="3">第五名</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_5510601" class="name"><span class="ball c-n1"></span></td> 
          <td id="play_odds_5510601" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510601" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510602" class="name"><span class="ball c-n2"></span></td> 
          <td id="play_odds_5510602" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510602" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510603" class="name"><span class="ball c-n3"></span></td> 
          <td id="play_odds_5510603" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510603" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510604" class="name"><span class="ball c-n4"></span></td> 
          <td id="play_odds_5510604" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510604" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510605" class="name"><span class="ball c-n5"></span></td> 
          <td id="play_odds_5510605" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510605" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510606" class="name"><span class="ball c-n6"></span></td> 
          <td id="play_odds_5510606" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510606" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510607" class="name"><span class="ball c-n7"></span></td> 
          <td id="play_odds_5510607" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510607" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510608" class="name"><span class="ball c-n8"></span></td> 
          <td id="play_odds_5510608" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510608" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510609" class="name"><span class="ball c-n9"></span></td> 
          <td id="play_odds_5510609" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510609" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510610" class="name"><span class="ball c-n10"></span></td> 
          <td id="play_odds_5510610" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510610" class="amount"><input type="text" /></td>
         </tr> 
        </tbody> 
       </table>
      </li> 
     </ul>
      
      
      <ul class="cont-list1 clearfix"> 
      <li> 
       <table class="u-table2 play_tab_107"> 
        <thead> 
         <tr> 
          <th colspan="3">第六名</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_5510701" class="name"><span class="ball c-n1"></span></td> 
          <td id="play_odds_5510701" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510701" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510702" class="name"><span class="ball c-n2"></span></td> 
          <td id="play_odds_5510702" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510702" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510703" class="name"><span class="ball c-n3"></span></td> 
          <td id="play_odds_5510703" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510703" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510704" class="name"><span class="ball c-n4"></span></td> 
          <td id="play_odds_5510704" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510704" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510705" class="name"><span class="ball c-n5"></span></td> 
          <td id="play_odds_5510705" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510705" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510706" class="name"><span class="ball c-n6"></span></td> 
          <td id="play_odds_5510706" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510706" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510707" class="name"><span class="ball c-n7"></span></td> 
          <td id="play_odds_5510707" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510707" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510708" class="name"><span class="ball c-n8"></span></td> 
          <td id="play_odds_5510708" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510708" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510709" class="name"><span class="ball c-n9"></span></td> 
          <td id="play_odds_5510709" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510709" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510710" class="name"><span class="ball c-n10"></span></td> 
          <td id="play_odds_5510710" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510710" class="amount"><input type="text" /></td>
         </tr> 
        </tbody> 
       </table>
      </li> 
      <li> 
       <table class="u-table2 play_tab_108"> 
        <thead> 
         <tr> 
          <th colspan="3">第七名</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_5510801" class="name"><span class="ball c-n1"></span></td> 
          <td id="play_odds_5510801" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510801" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510802" class="name"><span class="ball c-n2"></span></td> 
          <td id="play_odds_5510802" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510802" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510803" class="name"><span class="ball c-n3"></span></td> 
          <td id="play_odds_5510803" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510803" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510804" class="name"><span class="ball c-n4"></span></td> 
          <td id="play_odds_5510804" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510804" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510805" class="name"><span class="ball c-n5"></span></td> 
          <td id="play_odds_5510805" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510805" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510806" class="name"><span class="ball c-n6"></span></td> 
          <td id="play_odds_5510806" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510806" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510807" class="name"><span class="ball c-n7"></span></td> 
          <td id="play_odds_5510807" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510807" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510808" class="name"><span class="ball c-n8"></span></td> 
          <td id="play_odds_5510808" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510808" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510809" class="name"><span class="ball c-n9"></span></td> 
          <td id="play_odds_5510809" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510809" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510810" class="name"><span class="ball c-n10"></span></td> 
          <td id="play_odds_5510810" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510810" class="amount"><input type="text" /></td>
         </tr> 
        </tbody> 
       </table> </li> 
      <li> 
       <table class="u-table2 play_tab_109"> 
        <thead> 
         <tr> 
          <th colspan="3">第八名</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_5510901" class="name"><span class="ball c-n1"></span></td> 
          <td id="play_odds_5510901" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510901" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510902" class="name"><span class="ball c-n2"></span></td> 
          <td id="play_odds_5510902" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510902" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510903" class="name"><span class="ball c-n3"></span></td> 
          <td id="play_odds_5510903" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510903" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510904" class="name"><span class="ball c-n4"></span></td> 
          <td id="play_odds_5510904" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510904" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510905" class="name"><span class="ball c-n5"></span></td> 
          <td id="play_odds_5510905" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510905" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510906" class="name"><span class="ball c-n6"></span></td> 
          <td id="play_odds_5510906" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510906" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510907" class="name"><span class="ball c-n7"></span></td> 
          <td id="play_odds_5510907" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510907" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510908" class="name"><span class="ball c-n8"></span></td> 
          <td id="play_odds_5510908" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510908" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510909" class="name"><span class="ball c-n9"></span></td> 
          <td id="play_odds_5510909" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510909" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5510910" class="name"><span class="ball c-n10"></span></td> 
          <td id="play_odds_5510910" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5510910" class="amount"><input type="text" /></td>
         </tr> 
        </tbody> 
       </table> </li> 
      <li> 
       <table class="u-table2 play_tab_110"> 
        <thead> 
         <tr> 
          <th colspan="3">第九名</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_5511001" class="name"><span class="ball c-n1"></span></td> 
          <td id="play_odds_5511001" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5511001" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5511002" class="name"><span class="ball c-n2"></span></td> 
          <td id="play_odds_5511002" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5511002" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5511003" class="name"><span class="ball c-n3"></span></td> 
          <td id="play_odds_5511003" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5511003" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5511004" class="name"><span class="ball c-n4"></span></td> 
          <td id="play_odds_5511004" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5511004" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5511005" class="name"><span class="ball c-n5"></span></td> 
          <td id="play_odds_5511005" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5511005" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5511006" class="name"><span class="ball c-n6"></span></td> 
          <td id="play_odds_5511006" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5511006" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5511007" class="name"><span class="ball c-n7"></span></td> 
          <td id="play_odds_5511007" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5511007" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5511008" class="name"><span class="ball c-n8"></span></td> 
          <td id="play_odds_5511008" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5511008" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5511009" class="name"><span class="ball c-n9"></span></td> 
          <td id="play_odds_5511009" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5511009" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5511010" class="name"><span class="ball c-n10"></span></td> 
          <td id="play_odds_5511010" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5511010" class="amount"><input type="text" /></td>
         </tr> 
        </tbody> 
       </table> </li> 
      <li> 
       <table class="u-table2 play_tab_111"> 
        <thead> 
         <tr> 
          <th colspan="3">第十名</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_5511101" class="name"><span class="ball c-n1"></span></td> 
          <td id="play_odds_5511101" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5511101" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5511102" class="name"><span class="ball c-n2"></span></td> 
          <td id="play_odds_5511102" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5511102" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5511103" class="name"><span class="ball c-n3"></span></td> 
          <td id="play_odds_5511103" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5511103" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5511104" class="name"><span class="ball c-n4"></span></td> 
          <td id="play_odds_5511104" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5511104" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5511105" class="name"><span class="ball c-n5"></span></td> 
          <td id="play_odds_5511105" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5511105" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5511106" class="name"><span class="ball c-n6"></span></td> 
          <td id="play_odds_5511106" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5511106" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5511107" class="name"><span class="ball c-n7"></span></td> 
          <td id="play_odds_5511107" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5511107" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5511108" class="name"><span class="ball c-n8"></span></td> 
          <td id="play_odds_5511108" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5511108" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5511109" class="name"><span class="ball c-n9"></span></td> 
          <td id="play_odds_5511109" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5511109" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_5511110" class="name"><span class="ball c-n10"></span></td> 
          <td id="play_odds_5511110" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_5511110" class="amount"><input type="text" /></td>
         </tr> 
        </tbody> 
       </table> </li> 
     </ul>
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
                                   <th class="u-tb3-th2 select" id="qiu1_th" onclick="StatGame.showStat(1)" qiu="1">冠军</th>
                                   <th class="u-tb3-th2" id="qiu2_th" onclick="StatGame.showStat(2)"  qiu="2">亚军</th>
                                   <th class="u-tb3-th2" id="qiu3_th" onclick="StatGame.showStat(3)"  qiu="3">第三名</th>
                                   <th class="u-tb3-th2" id="qiu4_th" onclick="StatGame.showStat(4)" qiu="4">第四名</th>
                                   <th class="u-tb3-th2" id="qiu5_th" onclick="StatGame.showStat(5)" qiu="5">第五名</th>
                                   <th class="u-tb3-th2" id="qiu6_th" onclick="StatGame.showStat(6)" qiu="6">第六名</th>
                                   <th class="u-tb3-th2" id="qiu7_th" onclick="StatGame.showStat(7)" qiu="7">第七名</th>
                                   <th class="u-tb3-th2" id="qiu8_th" onclick="StatGame.showStat(8)" qiu="8">第八名</th>
                                   <th class="u-tb3-th2" id="qiu9_th" onclick="StatGame.showStat(9)" qiu="9">第九名</th>
                                   <th class="u-tb3-th2" id="qiu10_th" onclick="StatGame.showStat(10)" qiu="10">第十名</th>
                               </tr>
                           </thead>
                       </table>
                       <table class="u-table4">
                           <tbody>
                               <tr>
                                   <td class="f1 fwb">1</td>
                                   <td class="f1 fwb">2</td>
                                   <td class="f1 fwb">3</td>
                                   <td class="f1 fwb">4</td>
                                   <td class="f1 fwb">5</td>
                                   <td class="f1 fwb">6</td>
                                   <td class="f1 fwb">7</td>
                                   <td class="f1 fwb">8</td>
                                   <td class="f1 fwb">9</td>
                                   <td class="f1 fwb">10</td>
                               </tr>
                                <tr id="qiu1_body" >
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
                               </tr>
                               <tr id="qiu9_body" class="hide">
                                   <td id="q9_1_time">0</td>
                                   <td id="q9_2_time">0</td>
                                   <td id="q9_3_time">0</td>
                                   <td id="q9_4_time">0</td>
                                   <td id="q9_5_time">0</td>
                                   <td id="q9_6_time">0</td>
                                   <td id="q9_7_time">0</td>
                                   <td id="q9_8_time">0</td>
                                   <td id="q9_9_time">0</td>
                                   <td id="q9_10_time">0</td>
                               </tr>
                               <tr id="qiu10_body" class="hide">
                                   <td id="q10_1_time">0</td>
                                   <td id="q10_2_time">0</td>
                                   <td id="q10_3_time">0</td>
                                   <td id="q10_4_time">0</td>
                                   <td id="q10_5_time">0</td>
                                   <td id="q10_6_time">0</td>
                                   <td id="q10_7_time">0</td>
                                   <td id="q10_8_time">0</td>
                                   <td id="q10_9_time">0</td>
                                   <td id="q10_10_time">0</td>
                               </tr>
                           </tbody>
                       </table>
                       
                      <table class="u-table2 mt5">
                           <thead>
                               <tr id="stat_type">
                                   <th class="u-tb3-th2 select" id="stat_nums_btn" type="nums" onclick="StatGame.showStatType(this)">第一球</th>
                                   <th class="u-tb3-th2" id="stat_size_btn" type="size" onclick="StatGame.showStatType(this)">大小</th>
                                   <th class="u-tb3-th2" id="stat_firsts_btn" type="firsts" onclick="StatGame.showStatType(this)">单双</th>
                                   <th class="u-tb3-th2" id="stat_gyh_btn" type="gyh" onclick="StatGame.showStatType(this)">冠、亚军和</th>
                                   <th class="u-tb3-th2" id="stat_gyhdx_btn" type="gyhdx" onclick="StatGame.showStatType(this)">冠、亚军和 大小</th>
                                   <th class="u-tb3-th2" id="stat_gyhds_btn" type="gyhds" onclick="StatGame.showStatType(this)">冠、亚军和 单双</th>
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
                               <tr id="qiu9_nums" class="stattd hide"></tr>
                               <tr id="qiu10_nums" class="stattd hide"></tr>
                               <tr id="qiu1_size" class="stattd hide"></tr>
                               <tr id="qiu2_size" class="stattd hide"></tr>
                               <tr id="qiu3_size" class="stattd hide"></tr>
                               <tr id="qiu4_size" class="stattd hide"></tr>
                               <tr id="qiu5_size" class="stattd hide"></tr>
                               <tr id="qiu6_size" class="stattd hide"></tr>
                               <tr id="qiu7_size" class="stattd hide"></tr>
                               <tr id="qiu8_size" class="stattd hide"></tr>
                               <tr id="qiu9_size" class="stattd hide"></tr>
                               <tr id="qiu10_size" class="stattd hide"></tr>
                               <tr id="qiu1_firsts" class="stattd hide"></tr>
                               <tr id="qiu2_firsts" class="stattd hide"></tr>
                               <tr id="qiu3_firsts" class="stattd hide"></tr>
                               <tr id="qiu4_firsts" class="stattd hide"></tr>
                               <tr id="qiu5_firsts" class="stattd hide"></tr>
                               <tr id="qiu6_firsts" class="stattd hide"></tr>
                               <tr id="qiu7_firsts" class="stattd hide"></tr>
                               <tr id="qiu8_firsts" class="stattd hide"></tr>
                               <tr id="qiu9_firsts" class="stattd hide"></tr>
                               <tr id="qiu10_firsts" class="stattd hide"></tr>
                               <tr id="qiu1_gyh" class="stattd hide"></tr>
                               <tr id="qiu1_gyhdx" class="stattd hide"></tr>
                               <tr id="qiu1_gyhds" class="stattd hide"></tr>
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
<script type="text/javascript" src="/static/js/lottery/pk10/stat.js" async="async"></script>
</body>
</html>