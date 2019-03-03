
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
    <table class="u-table2 play_tab_64 XYNCTerm"> 
      <thead> 
       <tr> 
        <th colspan="12">第一球</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_616401" class="name"><b class="b01">01</b></td> 
        <td id="play_odds_616401" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616401" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616406" class="name"><b class="b06"></b></td> 
        <td id="play_odds_616406" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616406" class="amount"><input type="text" /></td>
         
        <td id="play_name_616411" class="name"><b class="b11"></b></td> 
        <td id="play_odds_616411" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616411" class="amount"><input type="text" /></td>
         
        <td id="play_name_616416" class="name"><b class="b16"></b></td> 
        <td id="play_odds_616416" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616416" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616402" class="name"><b class="b02">02</b></td> 
        <td id="play_odds_616402" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616402" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616407" class="name"><b class="b07"></b></td> 
        <td id="play_odds_616407" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616407" class="amount"><input type="text" /></td>
         
        <td id="play_name_616412" class="name"><b class="b12"></b></td> 
        <td id="play_odds_616412" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616412" class="amount"><input type="text" /></td>
         
        <td id="play_name_616417" class="name"><b class="b17"></b></td> 
        <td id="play_odds_616417" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616417" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616403" class="name"><b class="b03"></b></td> 
        <td id="play_odds_616403" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616403" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616408" class="name"><b class="b08"></b></td> 
        <td id="play_odds_616408" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616408" class="amount"><input type="text" /></td>
         
        <td id="play_name_616413" class="name"><b class="b13"></b></td> 
        <td id="play_odds_616413" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616413" class="amount"><input type="text" /></td>
         
        <td id="play_name_616418" class="name"><b class="b18"></b></td> 
        <td id="play_odds_616418" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616418" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616404" class="name"><b class="b04"></b></td> 
        <td id="play_odds_616404" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616404" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616409" class="name"><b class="b09"></b></td> 
        <td id="play_odds_616409" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616409" class="amount"><input type="text" /></td>
         
        <td id="play_name_616414" class="name"><b class="b14"></b></td> 
        <td id="play_odds_616414" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616414" class="amount"><input type="text" /></td>
         
        <td id="play_name_616419" class="name"><b class="b19"></b></td> 
        <td id="play_odds_616419" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616419" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616405" class="name"><b class="b05"></b></td> 
        <td id="play_odds_616405" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616405" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616410" class="name"><b class="b10"></b></td> 
        <td id="play_odds_616410" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616410" class="amount"><input type="text" /></td>
         
        <td id="play_name_616415" class="name"><b class="b15"></b></td> 
        <td id="play_odds_616415" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616415" class="amount"><input type="text" /></td>
         
        <td id="play_name_616420" class="name"><b class="b20"></b></td> 
        <td id="play_odds_616420" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616420" class="amount"><input type="text" /></td>
       </tr> 
      </tbody> 
     </table> 
     
     <table class="u-table2 play_tab_65 XYNCTerm mt5"> 
      <thead> 
       <tr> 
        <th colspan="12">第二球</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_616501" class="name"><b class="b01">01</b></td> 
        <td id="play_odds_616501" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616501" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616506" class="name"><b class="b06"></b></td> 
        <td id="play_odds_616506" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616506" class="amount"><input type="text" /></td>
         
        <td id="play_name_616511" class="name"><b class="b11"></b></td> 
        <td id="play_odds_616511" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616511" class="amount"><input type="text" /></td>
         
        <td id="play_name_616516" class="name"><b class="b16"></b></td> 
        <td id="play_odds_616516" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616516" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616502" class="name"><b class="b02">02</b></td> 
        <td id="play_odds_616502" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616502" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616507" class="name"><b class="b07"></b></td> 
        <td id="play_odds_616507" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616507" class="amount"><input type="text" /></td>
         
        <td id="play_name_616512" class="name"><b class="b12"></b></td> 
        <td id="play_odds_616512" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616512" class="amount"><input type="text" /></td>
         
        <td id="play_name_616517" class="name"><b class="b17"></b></td> 
        <td id="play_odds_616517" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616517" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616503" class="name"><b class="b03"></b></td> 
        <td id="play_odds_616503" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616503" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616508" class="name"><b class="b08"></b></td> 
        <td id="play_odds_616508" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616508" class="amount"><input type="text" /></td>
         
        <td id="play_name_616513" class="name"><b class="b13"></b></td> 
        <td id="play_odds_616513" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616513" class="amount"><input type="text" /></td>
         
        <td id="play_name_616518" class="name"><b class="b18"></b></td> 
        <td id="play_odds_616518" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616518" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616504" class="name"><b class="b04"></b></td> 
        <td id="play_odds_616504" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616504" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616509" class="name"><b class="b09"></b></td> 
        <td id="play_odds_616509" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616509" class="amount"><input type="text" /></td>
         
        <td id="play_name_616514" class="name"><b class="b14"></b></td> 
        <td id="play_odds_616514" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616514" class="amount"><input type="text" /></td>
         
        <td id="play_name_616519" class="name"><b class="b19"></b></td> 
        <td id="play_odds_616519" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616519" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616505" class="name"><b class="b05"></b></td> 
        <td id="play_odds_616505" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616505" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616510" class="name"><b class="b10"></b></td> 
        <td id="play_odds_616510" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616510" class="amount"><input type="text" /></td>
         
        <td id="play_name_616515" class="name"><b class="b15"></b></td> 
        <td id="play_odds_616515" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616515" class="amount"><input type="text" /></td>
         
        <td id="play_name_616520" class="name"><b class="b20"></b></td> 
        <td id="play_odds_616520" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616520" class="amount"><input type="text" /></td>
       </tr> 
      </tbody> 
     </table> 
     
     <table class="u-table2 play_tab_66 XYNCTerm mt5"> 
      <thead> 
       <tr> 
        <th colspan="12">第三球</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_616601" class="name"><b class="b01">01</b></td> 
        <td id="play_odds_616601" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616601" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616606" class="name"><b class="b06"></b></td> 
        <td id="play_odds_616606" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616606" class="amount"><input type="text" /></td>
         
        <td id="play_name_616611" class="name"><b class="b11"></b></td> 
        <td id="play_odds_616611" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616611" class="amount"><input type="text" /></td>
         
        <td id="play_name_616616" class="name"><b class="b16"></b></td> 
        <td id="play_odds_616616" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616616" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616602" class="name"><b class="b02">02</b></td> 
        <td id="play_odds_616602" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616602" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616607" class="name"><b class="b07"></b></td> 
        <td id="play_odds_616607" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616607" class="amount"><input type="text" /></td>
         
        <td id="play_name_616612" class="name"><b class="b12"></b></td> 
        <td id="play_odds_616612" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616612" class="amount"><input type="text" /></td>
         
        <td id="play_name_616617" class="name"><b class="b17"></b></td> 
        <td id="play_odds_616617" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616617" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616603" class="name"><b class="b03"></b></td> 
        <td id="play_odds_616603" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616603" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616608" class="name"><b class="b08"></b></td> 
        <td id="play_odds_616608" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616608" class="amount"><input type="text" /></td>
         
        <td id="play_name_616613" class="name"><b class="b13"></b></td> 
        <td id="play_odds_616613" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616613" class="amount"><input type="text" /></td>
         
        <td id="play_name_616618" class="name"><b class="b18"></b></td> 
        <td id="play_odds_616618" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616618" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616604" class="name"><b class="b04"></b></td> 
        <td id="play_odds_616604" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616604" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616609" class="name"><b class="b09"></b></td> 
        <td id="play_odds_616609" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616609" class="amount"><input type="text" /></td>
         
        <td id="play_name_616614" class="name"><b class="b14"></b></td> 
        <td id="play_odds_616614" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616614" class="amount"><input type="text" /></td>
         
        <td id="play_name_616619" class="name"><b class="b19"></b></td> 
        <td id="play_odds_616619" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616619" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616605" class="name"><b class="b05"></b></td> 
        <td id="play_odds_616605" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616605" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616610" class="name"><b class="b10"></b></td> 
        <td id="play_odds_616610" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616610" class="amount"><input type="text" /></td>
         
        <td id="play_name_616615" class="name"><b class="b15"></b></td> 
        <td id="play_odds_616615" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616615" class="amount"><input type="text" /></td>
         
        <td id="play_name_616620" class="name"><b class="b20"></b></td> 
        <td id="play_odds_616620" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616620" class="amount"><input type="text" /></td>
       </tr> 
      </tbody> 
     </table> 
     
     <table class="u-table2 play_tab_67 XYNCTerm mt5"> 
      <thead> 
       <tr> 
        <th colspan="12">第四球</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_616701" class="name"><b class="b01">01</b></td> 
        <td id="play_odds_616701" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616701" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616706" class="name"><b class="b06"></b></td> 
        <td id="play_odds_616706" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616706" class="amount"><input type="text" /></td>
         
        <td id="play_name_616711" class="name"><b class="b11"></b></td> 
        <td id="play_odds_616711" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616711" class="amount"><input type="text" /></td>
         
        <td id="play_name_616716" class="name"><b class="b16"></b></td> 
        <td id="play_odds_616716" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616716" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616702" class="name"><b class="b02">02</b></td> 
        <td id="play_odds_616702" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616702" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616707" class="name"><b class="b07"></b></td> 
        <td id="play_odds_616707" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616707" class="amount"><input type="text" /></td>
         
        <td id="play_name_616712" class="name"><b class="b12"></b></td> 
        <td id="play_odds_616712" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616712" class="amount"><input type="text" /></td>
         
        <td id="play_name_616717" class="name"><b class="b17"></b></td> 
        <td id="play_odds_616717" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616717" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616703" class="name"><b class="b03"></b></td> 
        <td id="play_odds_616703" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616703" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616708" class="name"><b class="b08"></b></td> 
        <td id="play_odds_616708" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616708" class="amount"><input type="text" /></td>
         
        <td id="play_name_616713" class="name"><b class="b13"></b></td> 
        <td id="play_odds_616713" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616713" class="amount"><input type="text" /></td>
         
        <td id="play_name_616718" class="name"><b class="b18"></b></td> 
        <td id="play_odds_616718" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616718" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616704" class="name"><b class="b04"></b></td> 
        <td id="play_odds_616704" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616704" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616709" class="name"><b class="b09"></b></td> 
        <td id="play_odds_616709" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616709" class="amount"><input type="text" /></td>
         
        <td id="play_name_616714" class="name"><b class="b14"></b></td> 
        <td id="play_odds_616714" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616714" class="amount"><input type="text" /></td>
         
        <td id="play_name_616719" class="name"><b class="b19"></b></td> 
        <td id="play_odds_616719" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616719" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616705" class="name"><b class="b05"></b></td> 
        <td id="play_odds_616705" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616705" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616710" class="name"><b class="b10"></b></td> 
        <td id="play_odds_616710" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616710" class="amount"><input type="text" /></td>
         
        <td id="play_name_616715" class="name"><b class="b15"></b></td> 
        <td id="play_odds_616715" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616715" class="amount"><input type="text" /></td>
         
        <td id="play_name_616720" class="name"><b class="b20"></b></td> 
        <td id="play_odds_616720" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616720" class="amount"><input type="text" /></td>
       </tr> 
      </tbody> 
     </table> 
     
     <table class="u-table2 play_tab_68 XYNCTerm mt5"> 
      <thead> 
       <tr> 
        <th colspan="12">第五球</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_616801" class="name"><b class="b01">01</b></td> 
        <td id="play_odds_616801" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616801" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616806" class="name"><b class="b06"></b></td> 
        <td id="play_odds_616806" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616806" class="amount"><input type="text" /></td>
         
        <td id="play_name_616811" class="name"><b class="b11"></b></td> 
        <td id="play_odds_616811" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616811" class="amount"><input type="text" /></td>
         
        <td id="play_name_616816" class="name"><b class="b16"></b></td> 
        <td id="play_odds_616816" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616816" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616802" class="name"><b class="b02">02</b></td> 
        <td id="play_odds_616802" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616802" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616807" class="name"><b class="b07"></b></td> 
        <td id="play_odds_616807" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616807" class="amount"><input type="text" /></td>
         
        <td id="play_name_616812" class="name"><b class="b12"></b></td> 
        <td id="play_odds_616812" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616812" class="amount"><input type="text" /></td>
         
        <td id="play_name_616817" class="name"><b class="b17"></b></td> 
        <td id="play_odds_616817" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616817" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616803" class="name"><b class="b03"></b></td> 
        <td id="play_odds_616803" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616803" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616808" class="name"><b class="b08"></b></td> 
        <td id="play_odds_616808" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616808" class="amount"><input type="text" /></td>
         
        <td id="play_name_616813" class="name"><b class="b13"></b></td> 
        <td id="play_odds_616813" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616813" class="amount"><input type="text" /></td>
         
        <td id="play_name_616818" class="name"><b class="b18"></b></td> 
        <td id="play_odds_616818" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616818" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616804" class="name"><b class="b04"></b></td> 
        <td id="play_odds_616804" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616804" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616809" class="name"><b class="b09"></b></td> 
        <td id="play_odds_616809" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616809" class="amount"><input type="text" /></td>
         
        <td id="play_name_616814" class="name"><b class="b14"></b></td> 
        <td id="play_odds_616814" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616814" class="amount"><input type="text" /></td>
         
        <td id="play_name_616819" class="name"><b class="b19"></b></td> 
        <td id="play_odds_616819" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616819" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616805" class="name"><b class="b05"></b></td> 
        <td id="play_odds_616805" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616805" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616810" class="name"><b class="b10"></b></td> 
        <td id="play_odds_616810" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616810" class="amount"><input type="text" /></td>
         
        <td id="play_name_616815" class="name"><b class="b15"></b></td> 
        <td id="play_odds_616815" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616815" class="amount"><input type="text" /></td>
         
        <td id="play_name_616820" class="name"><b class="b20"></b></td> 
        <td id="play_odds_616820" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616820" class="amount"><input type="text" /></td>
       </tr> 
      </tbody> 
     </table> 
     
     <table class="u-table2 play_tab_69 XYNCTerm mt5"> 
      <thead> 
       <tr> 
        <th colspan="12">第六球</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_616901" class="name"><b class="b01">01</b></td> 
        <td id="play_odds_616901" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616901" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616906" class="name"><b class="b06"></b></td> 
        <td id="play_odds_616906" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616906" class="amount"><input type="text" /></td>
         
        <td id="play_name_616911" class="name"><b class="b11"></b></td> 
        <td id="play_odds_616911" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616911" class="amount"><input type="text" /></td>
         
        <td id="play_name_616916" class="name"><b class="b16"></b></td> 
        <td id="play_odds_616916" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616916" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616902" class="name"><b class="b02">02</b></td> 
        <td id="play_odds_616902" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616902" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616907" class="name"><b class="b07"></b></td> 
        <td id="play_odds_616907" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616907" class="amount"><input type="text" /></td>
         
        <td id="play_name_616912" class="name"><b class="b12"></b></td> 
        <td id="play_odds_616912" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616912" class="amount"><input type="text" /></td>
         
        <td id="play_name_616917" class="name"><b class="b17"></b></td> 
        <td id="play_odds_616917" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616917" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616903" class="name"><b class="b03"></b></td> 
        <td id="play_odds_616903" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616903" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616908" class="name"><b class="b08"></b></td> 
        <td id="play_odds_616908" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616908" class="amount"><input type="text" /></td>
         
        <td id="play_name_616913" class="name"><b class="b13"></b></td> 
        <td id="play_odds_616913" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616913" class="amount"><input type="text" /></td>
         
        <td id="play_name_616918" class="name"><b class="b18"></b></td> 
        <td id="play_odds_616918" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616918" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616904" class="name"><b class="b04"></b></td> 
        <td id="play_odds_616904" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616904" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616909" class="name"><b class="b09"></b></td> 
        <td id="play_odds_616909" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616909" class="amount"><input type="text" /></td>
         
        <td id="play_name_616914" class="name"><b class="b14"></b></td> 
        <td id="play_odds_616914" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616914" class="amount"><input type="text" /></td>
         
        <td id="play_name_616919" class="name"><b class="b19"></b></td> 
        <td id="play_odds_616919" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616919" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_616905" class="name"><b class="b05"></b></td> 
        <td id="play_odds_616905" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616905" class="amount"><input type="text" /></td> 
        
        <td id="play_name_616910" class="name"><b class="b10"></b></td> 
        <td id="play_odds_616910" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616910" class="amount"><input type="text" /></td>
         
        <td id="play_name_616915" class="name"><b class="b15"></b></td> 
        <td id="play_odds_616915" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616915" class="amount"><input type="text" /></td>
         
        <td id="play_name_616920" class="name"><b class="b20"></b></td> 
        <td id="play_odds_616920" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_616920" class="amount"><input type="text" /></td>
       </tr> 
      </tbody> 
     </table> 
     
     <table class="u-table2 play_tab_70 XYNCTerm mt5"> 
      <thead> 
       <tr> 
        <th colspan="12">第七球</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_617001" class="name"><b class="b01">01</b></td> 
        <td id="play_odds_617001" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617001" class="amount"><input type="text" /></td> 
        
        <td id="play_name_617006" class="name"><b class="b06"></b></td> 
        <td id="play_odds_617006" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617006" class="amount"><input type="text" /></td>
         
        <td id="play_name_617011" class="name"><b class="b11"></b></td> 
        <td id="play_odds_617011" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617011" class="amount"><input type="text" /></td>
         
        <td id="play_name_617016" class="name"><b class="b16"></b></td> 
        <td id="play_odds_617016" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617016" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_617002" class="name"><b class="b02">02</b></td> 
        <td id="play_odds_617002" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617002" class="amount"><input type="text" /></td> 
        
        <td id="play_name_617007" class="name"><b class="b07"></b></td> 
        <td id="play_odds_617007" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617007" class="amount"><input type="text" /></td>
         
        <td id="play_name_617012" class="name"><b class="b12"></b></td> 
        <td id="play_odds_617012" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617012" class="amount"><input type="text" /></td>
         
        <td id="play_name_617017" class="name"><b class="b17"></b></td> 
        <td id="play_odds_617017" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617017" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_617003" class="name"><b class="b03"></b></td> 
        <td id="play_odds_617003" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617003" class="amount"><input type="text" /></td> 
        
        <td id="play_name_617008" class="name"><b class="b08"></b></td> 
        <td id="play_odds_617008" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617008" class="amount"><input type="text" /></td>
         
        <td id="play_name_617013" class="name"><b class="b13"></b></td> 
        <td id="play_odds_617013" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617013" class="amount"><input type="text" /></td>
         
        <td id="play_name_617018" class="name"><b class="b18"></b></td> 
        <td id="play_odds_617018" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617018" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_617004" class="name"><b class="b04"></b></td> 
        <td id="play_odds_617004" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617004" class="amount"><input type="text" /></td> 
        
        <td id="play_name_617009" class="name"><b class="b09"></b></td> 
        <td id="play_odds_617009" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617009" class="amount"><input type="text" /></td>
         
        <td id="play_name_617014" class="name"><b class="b14"></b></td> 
        <td id="play_odds_617014" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617014" class="amount"><input type="text" /></td>
         
        <td id="play_name_617019" class="name"><b class="b19"></b></td> 
        <td id="play_odds_617019" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617019" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_617005" class="name"><b class="b05"></b></td> 
        <td id="play_odds_617005" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617005" class="amount"><input type="text" /></td> 
        
        <td id="play_name_617010" class="name"><b class="b10"></b></td> 
        <td id="play_odds_617010" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617010" class="amount"><input type="text" /></td>
         
        <td id="play_name_617015" class="name"><b class="b15"></b></td> 
        <td id="play_odds_617015" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617015" class="amount"><input type="text" /></td>
         
        <td id="play_name_617020" class="name"><b class="b20"></b></td> 
        <td id="play_odds_617020" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617020" class="amount"><input type="text" /></td>
       </tr> 
      </tbody> 
     </table> 
     
     
     <table class="u-table2 play_tab_71 XYNCTerm mt5"> 
      <thead> 
       <tr> 
        <th colspan="12">第八球</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_617101" class="name"><b class="b01">01</b></td> 
        <td id="play_odds_617101" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617101" class="amount"><input type="text" /></td> 
        
        <td id="play_name_617106" class="name"><b class="b06"></b></td> 
        <td id="play_odds_617106" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617106" class="amount"><input type="text" /></td>
         
        <td id="play_name_617111" class="name"><b class="b11"></b></td> 
        <td id="play_odds_617111" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617111" class="amount"><input type="text" /></td>
         
        <td id="play_name_617116" class="name"><b class="b16"></b></td> 
        <td id="play_odds_617116" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617116" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_617102" class="name"><b class="b02">02</b></td> 
        <td id="play_odds_617102" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617102" class="amount"><input type="text" /></td> 
        
        <td id="play_name_617107" class="name"><b class="b07"></b></td> 
        <td id="play_odds_617107" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617107" class="amount"><input type="text" /></td>
         
        <td id="play_name_617112" class="name"><b class="b12"></b></td> 
        <td id="play_odds_617112" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617112" class="amount"><input type="text" /></td>
         
        <td id="play_name_617117" class="name"><b class="b17"></b></td> 
        <td id="play_odds_617117" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617117" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_617103" class="name"><b class="b03"></b></td> 
        <td id="play_odds_617103" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617103" class="amount"><input type="text" /></td> 
        
        <td id="play_name_617108" class="name"><b class="b08"></b></td> 
        <td id="play_odds_617108" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617108" class="amount"><input type="text" /></td>
         
        <td id="play_name_617113" class="name"><b class="b13"></b></td> 
        <td id="play_odds_617113" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617113" class="amount"><input type="text" /></td>
         
        <td id="play_name_617118" class="name"><b class="b18"></b></td> 
        <td id="play_odds_617118" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617118" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_617104" class="name"><b class="b04"></b></td> 
        <td id="play_odds_617104" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617104" class="amount"><input type="text" /></td> 
        
        <td id="play_name_617109" class="name"><b class="b09"></b></td> 
        <td id="play_odds_617109" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617109" class="amount"><input type="text" /></td>
         
        <td id="play_name_617114" class="name"><b class="b14"></b></td> 
        <td id="play_odds_617114" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617114" class="amount"><input type="text" /></td>
         
        <td id="play_name_617119" class="name"><b class="b19"></b></td> 
        <td id="play_odds_617119" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617119" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_617105" class="name"><b class="b05"></b></td> 
        <td id="play_odds_617105" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617105" class="amount"><input type="text" /></td> 
        
        <td id="play_name_617110" class="name"><b class="b10"></b></td> 
        <td id="play_odds_617110" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617110" class="amount"><input type="text" /></td>
         
        <td id="play_name_617115" class="name"><b class="b15"></b></td> 
        <td id="play_odds_617115" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617115" class="amount"><input type="text" /></td>
         
        <td id="play_name_617120" class="name"><b class="b20"></b></td> 
        <td id="play_odds_617120" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_617120" class="amount"><input type="text" /></td>
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
  
