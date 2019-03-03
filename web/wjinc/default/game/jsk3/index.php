
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
     <table class="u-table2 play_tab_56 "> 
      <thead> 
       <tr> 
        <th colspan="12">三军、大小</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_105601" class="name K3Term"><div class="ball-container1"><b class="b1">1</b></div></td> 
        <td id="play_odds_105601" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105601" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105602" class="name K3Term"><div class="ball-container1"><b class="b2">2</b></div></td> 
        <td id="play_odds_105602" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105602" class="amount"><input type="text" /></td>
         
        <td id="play_name_105603" class="name K3Term"><div class="ball-container1"><b class="b3">3</b></div></td> 
        <td id="play_odds_105603" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105603" class="amount"><input type="text" /></td>
         
        <td id="play_name_106101" class="name K3Term">大</td> 
        <td id="play_odds_106101" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_106101" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_105604" class="name K3Term"><div class="ball-container1"><b class="b4">4</b></div></td> 
        <td id="play_odds_105604" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105604" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105605" class="name K3Term"><div class="ball-container1"><b class="b5">5</b></div></td> 
        <td id="play_odds_105605" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105605" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105606" class="name K3Term"><div class="ball-container1"><b class="b6">6</b></div></td> 
        <td id="play_odds_105606" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105606" class="amount"><input type="text" /></td> 
        
        <td id="play_name_106102" class="name K3Term">小</td> 
        <td id="play_odds_106102" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_106102" class="amount"><input type="text" /></td> 
       </tr> 
      </tbody> 
     </table> 
     
     <table class="u-table2 play_tab_57 mt5"> 
      <thead> 
      	<tr> 
        <th colspan="9">围骰、全骰</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_105701" class="name K3Term"><div class="ball-container3"><b class="b1"></b><b class="b1"></b><b class="b1"></b></div></td> 
        <td id="play_odds_105701" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105701" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105702" class="name K3Term"><div class="ball-container3"><b class="b2"></b><b class="b2"></b><b class="b2"></b></div></td> 
        <td id="play_odds_105702" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105702" class="amount"><input type="text" /></td>
         
        <td id="play_name_105703" class="name K3Term"><div class="ball-container3"><b class="b3"></b><b class="b3"></b><b class="b3"></b></div></td> 
        <td id="play_odds_105703" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105703" class="amount"><input type="text" /></td>
       </tr>        <tr> 
        <td id="play_name_105704" class="name K3Term"><div class="ball-container3"><b class="b4">4</b><b class="b4">4</b><b class="b4">4</b></div></td> 
        <td id="play_odds_105704" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105704" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105705" class="name K3Term"><div class="ball-container3"><b class="b5">5</b><b class="b5">5</b><b class="b5">5</b></div></td> 
        <td id="play_odds_105705" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105705" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105706" class="name K3Term"><div class="ball-container3"><b class="b6">6</b><b class="b6">6</b><b class="b6">6</b></div></td> 
        <td id="play_odds_105706" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105706" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_106201" class="name">全骰</td> 
        <td id="play_odds_106201" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_106201" class="amount"><input type="text" /></td> 
        
        <td class="name not-event" colspan="6"></td> 
       </tr> 
      </tbody> 
     </table> 
     
     <table class="u-table2 play_tab_58 mt5"> 
      <thead> 
       <tr> 
        <th colspan="12">点数</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_105804" class="name">4点</td> 
        <td id="play_odds_105804" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105804" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105805" class="name">5点</td> 
        <td id="play_odds_105805" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105805" class="amount"><input type="text" /></td>
         
        <td id="play_name_105806" class="name">6点</td> 
        <td id="play_odds_105806" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105806" class="amount"><input type="text" /></td>
         
        <td id="play_name_105807" class="name">7点</td> 
        <td id="play_odds_105807" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105807" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_105808" class="name">8点</td> 
        <td id="play_odds_105808" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105808" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105809" class="name">9点</td> 
        <td id="play_odds_105809" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105809" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105810" class="name">10点</td> 
        <td id="play_odds_105810" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105810" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105811" class="name">11点</td> 
        <td id="play_odds_105811" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105811" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_105812" class="name">12点</td> 
        <td id="play_odds_105812" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105812" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105813" class="name">13点</td> 
        <td id="play_odds_105813" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105813" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105814" class="name">14点</td> 
        <td id="play_odds_105814" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105814" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105815" class="name">15点</td> 
        <td id="play_odds_105815" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105815" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_105816" class="name">16点</td> 
        <td id="play_odds_105816" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105816" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105817" class="name">17点</td> 
        <td id="play_odds_105817" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105817" class="amount"><input type="text" /></td> 
        
        <td class="name not-event" colspan="6"></td> 
       </tr> 
      </tbody> 
     </table> 
     
      <table class="u-table2 play_tab_59 mt5"> 
      <thead> 
      	<tr> 
        <th colspan="9">长牌</th> 
       </tr> 
      </thead>
      <tbody> 
       <tr> 
        <td id="play_name_105912" class="name K3Term"><div class="ball-container2"><b class="b1"></b><b class="b2"></b></div></td> 
        <td id="play_odds_105912" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105912" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105913" class="name K3Term"><div class="ball-container2"><b class="b1"></b><b class="b3"></b></div></td> 
        <td id="play_odds_105913" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105913" class="amount"><input type="text" /></td>
         
        <td id="play_name_105914" class="name K3Term"><div class="ball-container2"><b class="b1"></b><b class="b4"></b></div></td> 
        <td id="play_odds_105914" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105914" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_105915" class="name K3Term"><div class="ball-container2"><b class="b1"></b><b class="b5"></b></div></td> 
        <td id="play_odds_105915" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105915" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105916" class="name K3Term"><div class="ball-container2"><b class="b1"></b><b class="b6"></b></div></td> 
        <td id="play_odds_105916" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105916" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105923" class="name K3Term"><div class="ball-container2"><b class="b2"></b><b class="b3"></b></div></td> 
        <td id="play_odds_105923" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105923" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_105924" class="name K3Term"><div class="ball-container2"><b class="b2"></b><b class="b4"></b></div></td> 
        <td id="play_odds_105924" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105924" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105925" class="name K3Term"><div class="ball-container2"><b class="b2"></b><b class="b5"></b></div></td> 
        <td id="play_odds_105925" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105925" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105926" class="name K3Term"><div class="ball-container2"><b class="b2"></b><b class="b6"></b></td> 
        <td id="play_odds_105926" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105926" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_105934" class="name K3Term"><div class="ball-container2"><b class="b3"></b><b class="b4"></b></td> 
        <td id="play_odds_105934" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105934" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105935" class="name K3Term"><div class="ball-container2"><b class="b3"></b><b class="b5"></b></td> 
        <td id="play_odds_105935" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105935" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105936" class="name K3Term"><div class="ball-container2"><b class="b3"></b><b class="b6"></b></td> 
        <td id="play_odds_105936" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105936" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_105945" class="name K3Term"><div class="ball-container2"><b class="b4"></b><b class="b5"></b></div></td> 
        <td id="play_odds_105945" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105945" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105946" class="name K3Term"><div class="ball-container2"><b class="b4"></b><b class="b6"></b></div></td> 
        <td id="play_odds_105946" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105946" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105956" class="name K3Term"><div class="ball-container2"><b class="b5"></b><b class="b6"></b></div></td> 
        <td id="play_odds_105956" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105956" class="amount"><input type="text" /></td> 
       </tr> 
      </tbody> 
     </table> 
     
      <table class="u-table2 play_tab_60 mt5"> 
      <thead> 
      <tr> 
        <th colspan="9">短牌</th> 
       </tr>
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_106011" class="name K3Term"><div class="ball-container2"><b class="b1"></b><b class="b1"></b></div></td> 
        <td id="play_odds_106011" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_106011" class="amount"><input type="text" /></td> 
        
        <td id="play_name_106022" class="name K3Term"><div class="ball-container2"><b class="b2"></b><b class="b2"></b></div></td> 
        <td id="play_odds_106022" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_106022" class="amount"><input type="text" /></td>
         
        <td id="play_name_106033" class="name K3Term"><div class="ball-container2"><b class="b3"></b><b class="b3"></b></div></td> 
        <td id="play_odds_106033" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_106033" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_106044" class="name K3Term"><div class="ball-container2"><b class="b4"></b><b class="b4"></b></div></td> 
        <td id="play_odds_106044" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_106044" class="amount"><input type="text" /></td> 
        
        <td id="play_name_106055" class="name K3Term"><div class="ball-container2"><b class="b5"></b><b class="b5"></b></div></td> 
        <td id="play_odds_106055" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_106055" class="amount"><input type="text" /></td> 
        
        <td id="play_name_106066" class="name K3Term"><div class="ball-container2"><b class="b6"></b><b class="b6"></b></div></td> 
        <td id="play_odds_106066" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_106066" class="amount"><input type="text" /></td> 
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