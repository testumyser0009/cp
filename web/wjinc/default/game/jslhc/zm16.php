
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

<script type="text/javascript" src="/static/js/lottery/lhc/lhc.js"></script>
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
			       <tr> 
			        <th align="left" style="padding-left: 20px;border-right: none;">
			        	<span id="page_game_name">香港六合彩</span>&nbsp;&nbsp;-&nbsp;&nbsp;<span id="page_name">两面盘</span>
			        	<span id="total_sum_money_text">
			        	&nbsp;&nbsp
			        	当前彩种输赢：<span id="total_sum_money">0</span>
			        	</span>
			        </th>
			        <th align="right" style="padding-right:20px; color:#fff; font-size:14px;font-weight:normal; border-left: none;">
			        	<span class="c-txt2" id="next_turn_num"></span>&nbsp;期
			        	距离封盘：<span class="c-txt1" id="bet-date">00:00</span>
			        	距离开奖：<span class="c-txt1" id="open-date">00:00</span>
			        </th>  
			       </tr> 
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
    	<div class="cont-col3-bd" id="bet_tab"> 
    		<table class="u-table2 play_tab_90 "> 
		      <thead> 
		       <tr> 
		        <th colspan="3">正码一</th> 
		        <th colspan="3">正码二</th> 
		        <th colspan="3">正码三</th> 
		       </tr> 
		      </thead> 
		      <tbody> 
		       <tr> 
		        <td id="play_name_7092050" class="name">单码</td> 
		        <td id="play_odds_7092050" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092050" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092112" class="name">单码</td> 
		        <td id="play_odds_7092112" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092112" class="amount"><input type="text" /></td> 

		        
		        <td id="play_name_7092174" class="name">单码</td> 
		        <td id="play_odds_7092174" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092174" class="amount"><input type="text" /></td>
		       </tr> 
		       <tr> 
		        <td id="play_name_7092051" class="name">双码</td> 
		        <td id="play_odds_7092051" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092051" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092113" class="name">双码</td> 
		        <td id="play_odds_7092113" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092113" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092175" class="name">双码</td> 
		        <td id="play_odds_7092175" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092175" class="amount"><input type="text" /></td>
		       </tr> 
		       <tr> 
		        <td id="play_name_7092052" class="name">大码</td> 
		        <td id="play_odds_7092052" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092052" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092114" class="name">大码</td> 
		        <td id="play_odds_7092114" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092114" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092176" class="name">大码</td> 
		        <td id="play_odds_7092176" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092176" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_7092053" class="name">小码</td> 
		        <td id="play_odds_7092053" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092053" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092115" class="name">小码</td> 
		        <td id="play_odds_7092115" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092115" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092177" class="name">小码</td> 
		        <td id="play_odds_7092177" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092177" class="amount"><input type="text" /></td>
		       </tr> 
		       <tr> 
		        <td id="play_name_7092054" class="name">合单</td> 
		        <td id="play_odds_7092054" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092054" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092116" class="name">合单</td> 
		        <td id="play_odds_7092116" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092116" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092178" class="name">合单</td> 
		        <td id="play_odds_7092178" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092178" class="amount"><input type="text" /></td>
		       </tr> 
		       <tr> 
		        <td id="play_name_7092055" class="name">合双</td> 
		        <td id="play_odds_7092055" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092055" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092117" class="name">合双</td> 
		        <td id="play_odds_7092117" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092117" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092179" class="name">合双</td> 
		        <td id="play_odds_7092179" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092179" class="amount"><input type="text" /></td>
		       </tr> 
		       <tr> 
		        <td id="play_name_7092056" class="name">合大</td> 
		        <td id="play_odds_7092056" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092056" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092118" class="name">合大</td> 
		        <td id="play_odds_7092118" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092118" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092180" class="name">合大</td> 
		        <td id="play_odds_7092180" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092180" class="amount"><input type="text" /></td>
		       </tr> 
		       <tr> 
		        <td id="play_name_7092057" class="name">合小</td> 
		        <td id="play_odds_7092057" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092057" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092119" class="name">合小</td> 
		        <td id="play_odds_7092119" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092119" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092181" class="name">合小</td> 
		        <td id="play_odds_7092181" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092181" class="amount"><input type="text" /></td>
		       </tr> 
		       <tr> 
		        <td id="play_name_7092058" class="name">红波</td> 
		        <td id="play_odds_7092058" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092058" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092120" class="name">红波</td> 
		        <td id="play_odds_7092120" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092120" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092182" class="name">红波</td> 
		        <td id="play_odds_7092182" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092182" class="amount"><input type="text" /></td>
		       </tr> 
		       <tr> 
		        <td id="play_name_7092059" class="name">蓝波</td> 
		        <td id="play_odds_7092059" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092059" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092121" class="name">蓝波</td> 
		        <td id="play_odds_7092121" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092121" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092183" class="name">蓝波</td> 
		        <td id="play_odds_7092183" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092183" class="amount"><input type="text" /></td>
		       </tr> 
		       <tr> 
		        <td id="play_name_7092060" class="name">绿波</td> 
		        <td id="play_odds_7092060" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092060" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092122" class="name">绿波</td> 
		        <td id="play_odds_7092122" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092122" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092184" class="name">绿波</td> 
		        <td id="play_odds_7092184" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092184" class="amount"><input type="text" /></td>
		       </tr> 
		       <tr> 
		        <td id="play_name_7092061" class="name">尾大</td> 
		        <td id="play_odds_7092061" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092061" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092123" class="name">尾大</td> 
		        <td id="play_odds_7092123" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092123" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092185" class="name">尾大</td> 
		        <td id="play_odds_7092185" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092185" class="amount"><input type="text" /></td>
		       </tr> 
		       <tr> 
		        <td id="play_name_7092062" class="name">尾小</td> 
		        <td id="play_odds_7092062" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092062" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092124" class="name">尾小</td> 
		        <td id="play_odds_7092124" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092124" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092186" class="name">尾小</td> 
		        <td id="play_odds_7092186" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092186" class="amount"><input type="text" /></td>
		       </tr> 
		      </tbody> 
		     </table> 
		     
		   <table class="u-table2 play_tab_90 mt5">
		      <thead> 
		       <tr>
		        <th colspan="3">正码四</th> 
		        <th colspan="3">正码五</th> 
		        <th colspan="3">正码六</th> 
		       </tr> 
		      </thead> 
		      <tbody> 
		       <tr> 
		        <td id="play_name_7092236" class="name">单码</td> 
		        <td id="play_odds_7092236" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092236" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092298" class="name">单码</td> 
		        <td id="play_odds_7092298" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092298" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092360" class="name">单码</td> 
		        <td id="play_odds_7092360" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092360" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 		         
		        <td id="play_name_7092237" class="name">双码</td> 
		        <td id="play_odds_7092237" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092237" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092299" class="name">双码</td> 
		        <td id="play_odds_7092299" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092299" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092361" class="name">双码</td> 
		        <td id="play_odds_7092361" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092361" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_7092238" class="name">大码</td> 
		        <td id="play_odds_7092238" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092238" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092300" class="name">大码</td> 
		        <td id="play_odds_7092300" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092300" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092362" class="name">大码</td> 
		        <td id="play_odds_7092362" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092362" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_7092239" class="name">小码</td> 
		        <td id="play_odds_7092239" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092239" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092301" class="name">小码</td> 
		        <td id="play_odds_7092301" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092301" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092363" class="name">小码</td> 
		        <td id="play_odds_7092363" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092363" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_7092240" class="name">合单</td> 
		        <td id="play_odds_7092240" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092240" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092302" class="name">合单</td> 
		        <td id="play_odds_7092302" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092302" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092364" class="name">合单</td> 
		        <td id="play_odds_7092364" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092364" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_7092241" class="name">合双</td> 
		        <td id="play_odds_7092241" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092241" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092303" class="name">合双</td> 
		        <td id="play_odds_7092303" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092303" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092365" class="name">合双</td> 
		        <td id="play_odds_7092365" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092365" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_7092242" class="name">合大</td> 
		        <td id="play_odds_7092242" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092242" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092304" class="name">合大</td> 
		        <td id="play_odds_7092304" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092304" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092366" class="name">合大</td> 
		        <td id="play_odds_7092366" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092366" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_7092243" class="name">合小</td> 
		        <td id="play_odds_7092243" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092243" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092305" class="name">合小</td> 
		        <td id="play_odds_7092305" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092305" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092367" class="name">合小</td> 
		        <td id="play_odds_7092367" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092367" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_7092244" class="name">红波</td> 
		        <td id="play_odds_7092244" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092244" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092306" class="name">红波</td> 
		        <td id="play_odds_7092306" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092306" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092368" class="name">红波</td> 
		        <td id="play_odds_7092368" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092368" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_7092245" class="name">蓝波</td> 
		        <td id="play_odds_7092245" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092245" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092307" class="name">蓝波</td> 
		        <td id="play_odds_7092307" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092307" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092369" class="name">蓝波</td> 
		        <td id="play_odds_7092369" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092369" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_7092246" class="name">绿波</td> 
		        <td id="play_odds_7092246" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092246" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092308" class="name">绿波</td> 
		        <td id="play_odds_7092308" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092308" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092370" class="name">绿波</td> 
		        <td id="play_odds_7092370" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092370" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_7092247" class="name">尾大</td> 
		        <td id="play_odds_7092247" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092247" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092309" class="name">尾大</td> 
		        <td id="play_odds_7092309" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092309" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092371" class="name">尾大</td> 
		        <td id="play_odds_7092371" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092371" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_7092248" class="name">尾小</td> 
		        <td id="play_odds_7092248" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092248" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092310" class="name">尾小</td> 
		        <td id="play_odds_7092310" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092310" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_7092372" class="name">尾小</td> 
		        <td id="play_odds_7092372" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_7092372" class="amount"><input type="text" /></td> 
		       </tr> 
		      </tbody> 
		     </table> 
    	</div>
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
</body>
</html>

