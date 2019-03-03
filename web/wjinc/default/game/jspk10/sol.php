
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
			        	今日输赢：
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
       <table class="u-table2 play_tab_11"> 
        <thead> 
         <tr> 
          <th colspan="3">冠军</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_501107" class="name"><span class="ball c-n1"></span></td> 
          <td id="play_odds_501107" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501107" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501108" class="name"><span class="ball c-n2"></span></td> 
          <td id="play_odds_501108" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501108" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501109" class="name"><span class="ball c-n3"></span></td> 
          <td id="play_odds_501109" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501109" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501110" class="name"><span class="ball c-n4"></span></td> 
          <td id="play_odds_501110" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501110" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501111" class="name"><span class="ball c-n5"></span></td> 
          <td id="play_odds_501111" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501111" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501112" class="name"><span class="ball c-n6"></span></td> 
          <td id="play_odds_501112" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501112" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501113" class="name"><span class="ball c-n7"></span></td> 
          <td id="play_odds_501113" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501113" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501114" class="name"><span class="ball c-n8"></span></td> 
          <td id="play_odds_501114" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501114" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501115" class="name"><span class="ball c-n9"></span></td> 
          <td id="play_odds_501115" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501115" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501116" class="name"><span class="ball c-n10"></span></td> 
          <td id="play_odds_501116" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501116" class="amount"><input type="text" /></td>
         </tr> 
        </tbody> 
       </table> </li> 
      <li> 
       <table class="u-table2 play_tab_12"> 
        <thead> 
         <tr> 
          <th colspan="3">亚军</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_501207" class="name"><span class="ball c-n1"></span></td> 
          <td id="play_odds_501207" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501207" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501208" class="name"><span class="ball c-n2"></span></td> 
          <td id="play_odds_501208" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501208" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501209" class="name"><span class="ball c-n3"></span></td> 
          <td id="play_odds_501209" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501209" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501210" class="name"><span class="ball c-n4"></span></td> 
          <td id="play_odds_501210" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501210" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501211" class="name"><span class="ball c-n5"></span></td> 
          <td id="play_odds_501211" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501211" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501212" class="name"><span class="ball c-n6"></span></td> 
          <td id="play_odds_501212" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501212" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501213" class="name"><span class="ball c-n7"></span></td> 
          <td id="play_odds_501213" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501213" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501214" class="name"><span class="ball c-n8"></span></td> 
          <td id="play_odds_501214" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501214" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501215" class="name"><span class="ball c-n9"></span></td> 
          <td id="play_odds_501215" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501215" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501216" class="name"><span class="ball c-n10"></span></td> 
          <td id="play_odds_501216" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501216" class="amount"><input type="text" /></td>
         </tr> 
        </tbody> 
       </table> </li> 
      <li> 
       <table class="u-table2 play_tab_13"> 
        <thead> 
         <tr> 
          <th colspan="3">第三名</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_501307" class="name"><span class="ball c-n1"></span></td> 
          <td id="play_odds_501307" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501307" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501308" class="name"><span class="ball c-n2"></span></td> 
          <td id="play_odds_501308" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501308" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501309" class="name"><span class="ball c-n3"></span></td> 
          <td id="play_odds_501309" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501309" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501310" class="name"><span class="ball c-n4"></span></td> 
          <td id="play_odds_501310" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501310" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501311" class="name"><span class="ball c-n5"></span></td> 
          <td id="play_odds_501311" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501311" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501312" class="name"><span class="ball c-n6"></span></td> 
          <td id="play_odds_501312" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501312" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501313" class="name"><span class="ball c-n7"></span></td> 
          <td id="play_odds_501313" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501313" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501314" class="name"><span class="ball c-n8"></span></td> 
          <td id="play_odds_501314" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501314" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501315" class="name"><span class="ball c-n9"></span></td> 
          <td id="play_odds_501315" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501315" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501316" class="name"><span class="ball c-n10"></span></td> 
          <td id="play_odds_501316" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501316" class="amount"><input type="text" /></td>
         </tr> 
        </tbody>
       </table> </li> 
      <li> 
       <table class="u-table2 play_tab_14"> 
        <thead> 
         <tr> 
          <th colspan="3">第四名</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_501407" class="name"><span class="ball c-n1"></span></td> 
          <td id="play_odds_501407" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501407" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501408" class="name"><span class="ball c-n2"></span></td> 
          <td id="play_odds_501408" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501408" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501409" class="name"><span class="ball c-n3"></span></td> 
          <td id="play_odds_501409" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501409" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501410" class="name"><span class="ball c-n4"></span></td> 
          <td id="play_odds_501410" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501410" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501411" class="name"><span class="ball c-n5"></span></td> 
          <td id="play_odds_501411" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501411" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501412" class="name"><span class="ball c-n6"></span></td> 
          <td id="play_odds_501412" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501412" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501413" class="name"><span class="ball c-n7"></span></td> 
          <td id="play_odds_501413" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501413" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501414" class="name"><span class="ball c-n8"></span></td> 
          <td id="play_odds_501414" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501414" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501415" class="name"><span class="ball c-n9"></span></td> 
          <td id="play_odds_501415" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501415" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501416" class="name"><span class="ball c-n10"></span></td> 
          <td id="play_odds_501416" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501416" class="amount"><input type="text" /></td>
         </tr> 
        </tbody>
       </table> </li> 
      <li> 
       <table class="u-table2 play_tab_15"> 
        <thead> 
         <tr> 
          <th colspan="3">第五名</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_501507" class="name"><span class="ball c-n1"></span></td> 
          <td id="play_odds_501507" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501507" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501508" class="name"><span class="ball c-n2"></span></td> 
          <td id="play_odds_501508" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501508" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501509" class="name"><span class="ball c-n3"></span></td> 
          <td id="play_odds_501509" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501509" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501510" class="name"><span class="ball c-n4"></span></td> 
          <td id="play_odds_501510" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501510" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501511" class="name"><span class="ball c-n5"></span></td> 
          <td id="play_odds_501511" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501511" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501512" class="name"><span class="ball c-n6"></span></td> 
          <td id="play_odds_501512" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501512" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501513" class="name"><span class="ball c-n7"></span></td> 
          <td id="play_odds_501513" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501513" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501514" class="name"><span class="ball c-n8"></span></td> 
          <td id="play_odds_501514" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501514" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501515" class="name"><span class="ball c-n9"></span></td> 
          <td id="play_odds_501515" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501515" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501516" class="name"><span class="ball c-n10"></span></td> 
          <td id="play_odds_501516" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501516" class="amount"><input type="text" /></td>
         </tr>  
        </tbody> 
       </table> </li> 
     </ul>
      
      
      <ul class="cont-list1 clearfix"> 
      <li> 
       <table class="u-table2 play_tab_16"> 
        <thead> 
         <tr> 
          <th colspan="3">第六名</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_501607" class="name"><span class="ball c-n1"></span></td> 
          <td id="play_odds_501607" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501607" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501608" class="name"><span class="ball c-n2"></span></td> 
          <td id="play_odds_501608" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501608" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501609" class="name"><span class="ball c-n3"></span></td> 
          <td id="play_odds_501609" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501609" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501610" class="name"><span class="ball c-n4"></span></td> 
          <td id="play_odds_501610" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501610" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501611" class="name"><span class="ball c-n5"></span></td> 
          <td id="play_odds_501611" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501611" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501612" class="name"><span class="ball c-n6"></span></td> 
          <td id="play_odds_501612" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501612" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501613" class="name"><span class="ball c-n7"></span></td> 
          <td id="play_odds_501613" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501613" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501614" class="name"><span class="ball c-n8"></span></td> 
          <td id="play_odds_501614" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501614" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501615" class="name"><span class="ball c-n9"></span></td> 
          <td id="play_odds_501615" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501615" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501616" class="name"><span class="ball c-n10"></span></td> 
          <td id="play_odds_501616" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501616" class="amount"><input type="text" /></td>
         </tr>   
        </tbody> 
       </table> </li> 
      <li> 
       <table class="u-table2 play_tab_17"> 
        <thead> 
         <tr> 
          <th colspan="3">第七名</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_501707" class="name"><span class="ball c-n1"></span></td> 
          <td id="play_odds_501707" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501707" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501708" class="name"><span class="ball c-n2"></span></td> 
          <td id="play_odds_501708" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501708" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501709" class="name"><span class="ball c-n3"></span></td> 
          <td id="play_odds_501709" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501709" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501710" class="name"><span class="ball c-n4"></span></td> 
          <td id="play_odds_501710" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501710" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501711" class="name"><span class="ball c-n5"></span></td> 
          <td id="play_odds_501711" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501711" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501712" class="name"><span class="ball c-n6"></span></td> 
          <td id="play_odds_501712" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501712" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501713" class="name"><span class="ball c-n7"></span></td> 
          <td id="play_odds_501713" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501713" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501714" class="name"><span class="ball c-n8"></span></td> 
          <td id="play_odds_501714" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501714" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501715" class="name"><span class="ball c-n9"></span></td> 
          <td id="play_odds_501715" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501715" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501716" class="name"><span class="ball c-n10"></span></td> 
          <td id="play_odds_501716" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501716" class="amount"><input type="text" /></td>
         </tr>  
        </tbody> 
       </table> </li> 
      <li> 
       <table class="u-table2 play_tab_18"> 
        <thead> 
         <tr> 
          <th colspan="3">第八名</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_501807" class="name"><span class="ball c-n1"></span></td> 
          <td id="play_odds_501807" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501807" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501808" class="name"><span class="ball c-n2"></span></td> 
          <td id="play_odds_501808" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501808" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501809" class="name"><span class="ball c-n3"></span></td> 
          <td id="play_odds_501809" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501809" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501810" class="name"><span class="ball c-n4"></span></td> 
          <td id="play_odds_501810" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501810" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501811" class="name"><span class="ball c-n5"></span></td> 
          <td id="play_odds_501811" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501811" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501812" class="name"><span class="ball c-n6"></span></td> 
          <td id="play_odds_501812" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501812" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501813" class="name"><span class="ball c-n7"></span></td> 
          <td id="play_odds_501813" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501813" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501814" class="name"><span class="ball c-n8"></span></td> 
          <td id="play_odds_501814" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501814" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501815" class="name"><span class="ball c-n9"></span></td> 
          <td id="play_odds_501815" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501815" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501816" class="name"><span class="ball c-n10"></span></td> 
          <td id="play_odds_501816" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501816" class="amount"><input type="text" /></td>
         </tr>  
        </tbody>
       </table> </li> 
      <li> 
       <table class="u-table2 play_tab_19"> 
        <thead> 
         <tr> 
          <th colspan="3">第九名</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_501907" class="name"><span class="ball c-n1"></span></td> 
          <td id="play_odds_501907" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501907" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501908" class="name"><span class="ball c-n2"></span></td> 
          <td id="play_odds_501908" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501908" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501909" class="name"><span class="ball c-n3"></span></td> 
          <td id="play_odds_501909" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501909" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501910" class="name"><span class="ball c-n4"></span></td> 
          <td id="play_odds_501910" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501910" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501911" class="name"><span class="ball c-n5"></span></td> 
          <td id="play_odds_501911" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501911" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501912" class="name"><span class="ball c-n6"></span></td> 
          <td id="play_odds_501912" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501912" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501913" class="name"><span class="ball c-n7"></span></td> 
          <td id="play_odds_501913" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501913" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501914" class="name"><span class="ball c-n8"></span></td> 
          <td id="play_odds_501914" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501914" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501915" class="name"><span class="ball c-n9"></span></td> 
          <td id="play_odds_501915" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501915" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_501916" class="name"><span class="ball c-n10"></span></td> 
          <td id="play_odds_501916" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_501916" class="amount"><input type="text" /></td>
         </tr>  
        </tbody>
       </table> </li> 
      <li> 
       <table class="u-table2 play_tab_20"> 
        <thead> 
         <tr> 
          <th colspan="3">第十名</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_502007" class="name"><span class="ball c-n1"></span></td> 
          <td id="play_odds_502007" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_502007" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_502008" class="name"><span class="ball c-n2"></span></td> 
          <td id="play_odds_502008" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_502008" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_502009" class="name"><span class="ball c-n3"></span></td> 
          <td id="play_odds_502009" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_502009" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_502010" class="name"><span class="ball c-n4"></span></td> 
          <td id="play_odds_502010" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_502010" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_502011" class="name"><span class="ball c-n5"></span></td> 
          <td id="play_odds_502011" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_502011" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_502012" class="name"><span class="ball c-n6"></span></td> 
          <td id="play_odds_502012" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_502012" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_502013" class="name"><span class="ball c-n7"></span></td> 
          <td id="play_odds_502013" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_502013" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_502014" class="name"><span class="ball c-n8"></span></td> 
          <td id="play_odds_502014" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_502014" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_502015" class="name"><span class="ball c-n9"></span></td> 
          <td id="play_odds_502015" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_502015" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_502016" class="name"><span class="ball c-n10"></span></td> 
          <td id="play_odds_502016" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_502016" class="amount"><input type="text" /></td>
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