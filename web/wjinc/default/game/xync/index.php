
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
     <table class="u-table2 play_tab_63"> 
      <thead> 
       <tr> 
        <th colspan="9">总和</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_616301" class="name">总和大</td> 
        <td id="play_odds_616301" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616301" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616303" class="name">总和单</td> 
        <td id="play_odds_616303" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616303" class="amount"><input type="text" /></td>
         
        <td id="play_name_616305" class="name">总和尾大</td> 
        <td id="play_odds_616305" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616305" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616302" class="name">总和小</td> 
        <td id="play_odds_616302" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616302" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616304" class="name">总和双</td> 
        <td id="play_odds_616304" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616304" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616306" class="name">总和尾小</td> 
        <td id="play_odds_616306" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616306" class="amount"><input type="text" /></td> 
       </tr> 
      </tbody> 
     </table> 
     <ul class="cont-list1 clearfix"> 
      <li style="width: 24.5%"> 
       <table class="u-table2 play_tab_64"> 
        <thead> 
         <tr> 
          <th colspan="3">第一球</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_616421" class="name">大</td> 
          <td id="play_odds_616421" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616421" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616422" class="name">小</td> 
          <td id="play_odds_616422" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616422" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616423" class="name">单</td> 
          <td id="play_odds_616423" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616423" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616424" class="name">双</td> 
          <td id="play_odds_616424" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616424" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616425" class="name">尾大</td> 
          <td id="play_odds_616425" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616425" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616426" class="name">尾小</td> 
          <td id="play_odds_616426" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616426" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616427" class="name">合数单</td> 
          <td id="play_odds_616427" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616427" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616428" class="name">合数双</td> 
          <td id="play_odds_616428" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616428" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616436" class="name">龙</td> 
          <td id="play_odds_616436" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616436" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616437" class="name">虎</td> 
          <td id="play_odds_616437" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616437" class="amount"><input type="text" /></td>
         </tr> 
        </tbody> 
       </table> </li> 
      <li style="width: 24.5%"> 
       <table class="u-table2 play_tab_65"> 
        <thead> 
         <tr> 
          <th colspan="3">第二球</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_616521" class="name">大</td> 
          <td id="play_odds_616521" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616521" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616522" class="name">小</td> 
          <td id="play_odds_616522" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616522" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616523" class="name">单</td> 
          <td id="play_odds_616523" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616523" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616524" class="name">双</td> 
          <td id="play_odds_616524" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616524" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616525" class="name">尾大</td> 
          <td id="play_odds_616525" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616525" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616526" class="name">尾小</td> 
          <td id="play_odds_616526" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616526" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616527" class="name">合数单</td> 
          <td id="play_odds_616527" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616527" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616528" class="name">合数双</td> 
          <td id="play_odds_616528" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616528" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616536" class="name">龙</td> 
          <td id="play_odds_616536" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616536" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616537" class="name">虎</td> 
          <td id="play_odds_616537" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616537" class="amount"><input type="text" /></td>
         </tr> 
        </tbody> 
       </table> </li> 
      <li style="width: 24.5%"> 
       <table class="u-table2 play_tab_66"> 
        <thead> 
         <tr> 
          <th colspan="3">第三球</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_616621" class="name">大</td> 
          <td id="play_odds_616621" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616621" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616622" class="name">小</td> 
          <td id="play_odds_616622" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616622" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616623" class="name">单</td> 
          <td id="play_odds_616623" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616623" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616624" class="name">双</td> 
          <td id="play_odds_616624" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616624" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616625" class="name">尾大</td> 
          <td id="play_odds_616625" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616625" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616626" class="name">尾小</td> 
          <td id="play_odds_616626" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616626" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616627" class="name">合数单</td> 
          <td id="play_odds_616627" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616627" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616628" class="name">合数双</td> 
          <td id="play_odds_616628" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616628" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616636" class="name">龙</td> 
          <td id="play_odds_616636" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616636" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616637" class="name">虎</td> 
          <td id="play_odds_616637" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616637" class="amount"><input type="text" /></td>
         </tr> 
        </tbody>
       </table> </li> 
      <li style="width: 24.5%"> 
       <table class="u-table2 play_tab_67"> 
        <thead> 
         <tr> 
          <th colspan="3">第四球</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_616721" class="name">大</td> 
          <td id="play_odds_616721" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616721" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616722" class="name">小</td> 
          <td id="play_odds_616722" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616722" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616723" class="name">单</td> 
          <td id="play_odds_616723" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616723" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616724" class="name">双</td> 
          <td id="play_odds_616724" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616724" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616725" class="name">尾大</td> 
          <td id="play_odds_616725" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616725" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616726" class="name">尾小</td> 
          <td id="play_odds_616726" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616726" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616727" class="name">合数单</td> 
          <td id="play_odds_616727" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616727" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616728" class="name">合数双</td> 
          <td id="play_odds_616728" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616728" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616736" class="name">龙</td> 
          <td id="play_odds_616736" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616736" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616737" class="name">虎</td> 
          <td id="play_odds_616737" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616737" class="amount"><input type="text" /></td>
         </tr> 
        </tbody>
       </table> </li> 
     </ul> 
     <ul class="cont-list1 clearfix"> 
      <li style="width: 24.5%"> 
       <table class="u-table2 play_tab_68"> 
        <thead> 
         <tr> 
          <th colspan="3">第五球</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_616821" class="name">大</td> 
          <td id="play_odds_616821" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616821" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616822" class="name">小</td> 
          <td id="play_odds_616822" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616822" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616823" class="name">单</td> 
          <td id="play_odds_616823" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616823" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616824" class="name">双</td> 
          <td id="play_odds_616824" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616824" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616825" class="name">尾大</td> 
          <td id="play_odds_616825" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616825" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616826" class="name">尾小</td> 
          <td id="play_odds_616826" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616826" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616827" class="name">合数单</td> 
          <td id="play_odds_616827" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616827" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616828" class="name">合数双</td> 
          <td id="play_odds_616828" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616828" class="amount"><input type="text" /></td>
         </tr> 
        </tbody> 
       </table> </li> 
      <li style="width: 24.5%"> 
       <table class="u-table2 play_tab_69"> 
        <thead> 
         <tr> 
          <th colspan="3">第六球</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_616921" class="name">大</td> 
          <td id="play_odds_616921" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616921" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616922" class="name">小</td> 
          <td id="play_odds_616922" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616922" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616923" class="name">单</td> 
          <td id="play_odds_616923" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616923" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616924" class="name">双</td> 
          <td id="play_odds_616924" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616924" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616925" class="name">尾大</td> 
          <td id="play_odds_616925" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616925" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616926" class="name">尾小</td> 
          <td id="play_odds_616926" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616926" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616927" class="name">合数单</td> 
          <td id="play_odds_616927" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616927" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_616928" class="name">合数双</td> 
          <td id="play_odds_616928" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_616928" class="amount"><input type="text" /></td>
         </tr> 
        </tbody> 
       </table> </li> 
      <li style="width: 24.5%"> 
       <table class="u-table2 play_tab_70"> 
        <thead> 
         <tr> 
          <th colspan="3">第七球</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_617021" class="name">大</td> 
          <td id="play_odds_617021" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_617021" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_617022" class="name">小</td> 
          <td id="play_odds_617022" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_617022" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_617023" class="name">单</td> 
          <td id="play_odds_617023" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_617023" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_617024" class="name">双</td> 
          <td id="play_odds_617024" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_617024" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_617025" class="name">尾大</td> 
          <td id="play_odds_617025" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_617025" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_617026" class="name">尾小</td> 
          <td id="play_odds_617026" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_617026" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_617027" class="name">合数单</td> 
          <td id="play_odds_617027" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_617027" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_617028" class="name">合数双</td> 
          <td id="play_odds_617028" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_617028" class="amount"><input type="text" /></td>
         </tr> 
        </tbody>
       </table> </li> 
      <li style="width: 24.5%"> 
       <table class="u-table2 play_tab_71"> 
        <thead> 
         <tr> 
          <th colspan="3">第八球</th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr> 
          <td id="play_name_617121" class="name">大</td> 
          <td id="play_odds_617121" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_617121" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_617122" class="name">小</td> 
          <td id="play_odds_617122" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_617122" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_617123" class="name">单</td> 
          <td id="play_odds_617123" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_617123" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_617124" class="name">双</td> 
          <td id="play_odds_617124" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_617124" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_617125" class="name">尾大</td> 
          <td id="play_odds_617125" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_617125" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_617126" class="name">尾小</td> 
          <td id="play_odds_617126" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_617126" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_617127" class="name">合数单</td> 
          <td id="play_odds_617127" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_617127" class="amount"><input type="text" /></td>
         </tr> 
         <tr> 
          <td id="play_name_617128" class="name">合数双</td> 
          <td id="play_odds_617128" class="odds"><span class="c-txt3">--</span></td> 
          <td id="play_text_617128" class="amount"><input type="text" /></td>
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
				<td class="f1 fwb">西瓜</td>
				<td class="f1 fwb">椰子</td>
				<td class="f1 fwb">榴莲</td>
				<td class="f1 fwb">柚子</td>
				<td class="f1 fwb">菠萝</td>
				<td class="f1 fwb">葡萄</td>
				<td class="f1 fwb">荔枝</td>
				<td class="f1 fwb">樱桃</td>
				<td class="f1 fwb">草莓</td>
				<td class="f1 fwb">番茄</td>
				<td class="f1 fwb">梨子</td>
				<td class="f1 fwb">苹果</td>
				<td class="f1 fwb">桃子</td>
				<td class="f1 fwb">柑橘</td>
				<td class="f1 fwb">冬瓜</td>
				<td class="f1 fwb">萝卜</td>
				<td class="f1 fwb">南瓜</td>
				<td class="f1 fwb">茄子</td>
				<td class="f1 fwb">家犬</td>
				<td class="f1 fwb">奶牛</td>
			</tr>
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
<script type="text/javascript" src="/static/js/lottery/xync/stat.js"></script>
</body>
</html>