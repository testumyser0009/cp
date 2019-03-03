
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
    <div class="clearfix" align="right"> 
      <button class="button" id="kjtz_btn" onclick="LHC.showKjtz(1)">快捷投注</button> 
    </div>
    <div class="cont-col3-bd" id="bet_tab"> 
    	<ul class="tab" style="height: 35px;">
    		<li class="tab_title02" id="tm_tabs">
		    	<a class="on" href="javascript:LHC.showTab('#TM_D_TAB');" type="D" id="TM_D_TAB">正一特</a>
				<a href="javascript:LHC.showTab('#TM_E_TAB');" type="E" id="TM_E_TAB">正二特</a>
				<a href="javascript:LHC.showTab('#TM_F_TAB');" type="F" id="TM_F_TAB">正三特</a>
				<a href="javascript:LHC.showTab('#TM_G_TAB');" type="G" id="TM_G_TAB">正四特</a>
				<a href="javascript:LHC.showTab('#TM_H_TAB');" type="H" id="TM_H_TAB">正五特</a>
				<a href="javascript:LHC.showTab('#TM_I_TAB');" type="I" id="TM_I_TAB">正六特</a>
    		</li>
    	</ul>
    	<div class="cont-col3-bd" id="bet_tab"> 
	    	<div id="TM_D_PAGE">
	    		<table class="u-table2 play_tab_92"> 
			      <thead> 
			       <tr> 
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th>
			         
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			        
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			        
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th>
			         
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			       </tr> 
			      </thead> 
			      <tbody> 
			       <tr> 
			        <td id="play_name_7092001" class="name"><i class="lhc_icon lhc_b01">01</i></td> 
			        <td id="play_odds_7092001" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092001" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092011" class="name"><i class="lhc_icon lhc_b11">11</i></td> 
			        <td id="play_odds_7092011" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092011" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092021" class="name"><i class="lhc_icon lhc_b21">21</i></td> 
			        <td id="play_odds_7092021" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092021" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092031" class="name"><i class="lhc_icon lhc_b31">31</i></td> 
			        <td id="play_odds_7092031" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092031" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092041" class="name"><i class="lhc_icon lhc_b41">41</i></td> 
			        <td id="play_odds_7092041" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092041" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092002" class="name"><i class="lhc_icon lhc_b02">02</i></td> 
			        <td id="play_odds_7092002" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092002" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092012" class="name"><i class="lhc_icon lhc_b12">12</i></td> 
			        <td id="play_odds_7092012" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092012" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092022" class="name"><i class="lhc_icon lhc_b22">22</i></td> 
			        <td id="play_odds_7092022" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092022" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092032" class="name"><i class="lhc_icon lhc_b32">32</i></td> 
			        <td id="play_odds_7092032" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092032" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092042" class="name"><i class="lhc_icon lhc_b42">42</i></td> 
			        <td id="play_odds_7092042" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092042" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092003" class="name"><i class="lhc_icon lhc_b03">03</i></td> 
			        <td id="play_odds_7092003" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092003" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092013" class="name"><i class="lhc_icon lhc_b13">13</i></td> 
			        <td id="play_odds_7092013" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092013" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092023" class="name"><i class="lhc_icon lhc_b23">23</i></td> 
			        <td id="play_odds_7092023" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092023" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092033" class="name"><i class="lhc_icon lhc_b33">33</i></td> 
			        <td id="play_odds_7092033" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092033" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092043" class="name"><i class="lhc_icon lhc_b43">43</i></td> 
			        <td id="play_odds_7092043" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092043" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092004" class="name"><i class="lhc_icon lhc_b04">04</i></td> 
			        <td id="play_odds_7092004" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092004" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092014" class="name"><i class="lhc_icon lhc_b14">14</i></td> 
			        <td id="play_odds_7092014" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092014" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092024" class="name"><i class="lhc_icon lhc_b24">24</i></td> 
			        <td id="play_odds_7092024" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092024" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092034" class="name"><i class="lhc_icon lhc_b34">34</i></td> 
			        <td id="play_odds_7092034" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092034" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092044" class="name"><i class="lhc_icon lhc_b44">44</i></td> 
			        <td id="play_odds_7092044" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092044" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092005" class="name"><i class="lhc_icon lhc_b05">05</i></td> 
			        <td id="play_odds_7092005" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092005" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092015" class="name"><i class="lhc_icon lhc_b15">15</i></td> 
			        <td id="play_odds_7092015" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092015" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092025" class="name"><i class="lhc_icon lhc_b25">25</i></td> 
			        <td id="play_odds_7092025" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092025" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092035" class="name"><i class="lhc_icon lhc_b35">35</i></td> 
			        <td id="play_odds_7092035" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092035" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092045" class="name"><i class="lhc_icon lhc_b45">45</i></td> 
			        <td id="play_odds_7092045" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092045" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092006" class="name"><i class="lhc_icon lhc_b06">06</i></td> 
			        <td id="play_odds_7092006" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092006" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092016" class="name"><i class="lhc_icon lhc_b16">16</i></td> 
			        <td id="play_odds_7092016" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092016" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092026" class="name"><i class="lhc_icon lhc_b26">26</i></td> 
			        <td id="play_odds_7092026" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092026" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092036" class="name"><i class="lhc_icon lhc_b36">36</i></td> 
			        <td id="play_odds_7092036" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092036" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092046" class="name"><i class="lhc_icon lhc_b46">46</i></td> 
			        <td id="play_odds_7092046" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092046" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092007" class="name"><i class="lhc_icon lhc_b07">07</i></td> 
			        <td id="play_odds_7092007" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092007" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092017" class="name"><i class="lhc_icon lhc_b17">17</i></td> 
			        <td id="play_odds_7092017" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092017" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092027" class="name"><i class="lhc_icon lhc_b27">27</i></td> 
			        <td id="play_odds_7092027" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092027" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092037" class="name"><i class="lhc_icon lhc_b37">37</i></td> 
			        <td id="play_odds_7092037" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092037" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092047" class="name"><i class="lhc_icon lhc_b47">47</i></td> 
			        <td id="play_odds_7092047" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092047" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092008" class="name"><i class="lhc_icon lhc_b08">08</i></td> 
			        <td id="play_odds_7092008" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092008" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092018" class="name"><i class="lhc_icon lhc_b18">18</i></td> 
			        <td id="play_odds_7092018" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092018" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092028" class="name"><i class="lhc_icon lhc_b28">28</i></td> 
			        <td id="play_odds_7092028" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092028" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092038" class="name"><i class="lhc_icon lhc_b38">38</i></td> 
			        <td id="play_odds_7092038" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092038" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092048" class="name"><i class="lhc_icon lhc_b48">48</i></td> 
			        <td id="play_odds_7092048" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092048" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092009" class="name"><i class="lhc_icon lhc_b09">09</i></td> 
			        <td id="play_odds_7092009" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092009" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092019" class="name"><i class="lhc_icon lhc_b19">19</i></td> 
			        <td id="play_odds_7092019" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092019" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092029" class="name"><i class="lhc_icon lhc_b29">29</i></td> 
			        <td id="play_odds_7092029" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092029" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092039" class="name"><i class="lhc_icon lhc_b39">39</i></td> 
			        <td id="play_odds_7092039" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092039" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092049" class="name"><i class="lhc_icon lhc_b49">49</i></td> 
			        <td id="play_odds_7092049" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092049" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092010" class="name"><i class="lhc_icon lhc_b10">10</i></td> 
			        <td id="play_odds_7092010" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092010" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092020" class="name"><i class="lhc_icon lhc_b20">20</i></td> 
			        <td id="play_odds_7092020" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092020" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092030" class="name"><i class="lhc_icon lhc_b30">30</i></td> 
			        <td id="play_odds_7092030" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092030" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092040" class="name"><i class="lhc_icon lhc_b40">40</i></td> 
			        <td id="play_odds_7092040" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092040" class="amount"><input type="text" /></td> 
			        
			        <td class="name not-event" colspan="3"></td> 
			       </tr> 
			      </tbody> 
			     </table> 
	    		<table class="u-table2 play_tab_92 mt10"> 
			      <thead> 
			       <tr> 
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th>
			         
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			        
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			       </tr> 
			      </thead> 
			      <tbody> 
			       <tr> 
			        <td id="play_name_7092052" class="name">正1-大</td> 
			        <td id="play_odds_7092052" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092052" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092050" class="name">正1-单</td> 
			        <td id="play_odds_7092050" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092050" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092054" class="name">正1-合单</td> 
			        <td id="play_odds_7092054" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092054" class="amount"><input type="text" /></td> 
			       </tr>
			        
			       <tr> 
			        <td id="play_name_7092053" class="name">正1-小</td> 
			        <td id="play_odds_7092053" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092053" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092051" class="name">正1-双</td> 
			        <td id="play_odds_7092051" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092051" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092055" class="name">正1-合双</td> 
			        <td id="play_odds_7092055" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092055" class="amount"><input type="text" /></td> 
			       </tr> 
			        
			       <tr> 
			        <td id="play_name_7092058" class="name">正1-红</td> 
			        <td id="play_odds_7092058" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092058" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092059" class="name">正1-蓝</td> 
			        <td id="play_odds_7092059" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092059" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092060" class="name">正1-绿</td> 
			        <td id="play_odds_7092060" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092060" class="amount"><input type="text" /></td> 
			       </tr> 
			      </tbody>
				 </table>
	    	</div>
	    	<div id="TM_E_PAGE" class="hide">
	    		<table class="u-table2 play_tab_92 "> 
			      <thead> 
			       <tr> 
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th>
			         
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			        
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			        
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th>
			         
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			       </tr> 
			      </thead> 
			      <tbody> 
			       <tr> 
			        <td id="play_name_7092063" class="name"><i class="lhc_icon lhc_b01">01</i></td> 
			        <td id="play_odds_7092063" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092063" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092073" class="name"><i class="lhc_icon lhc_b11">11</i></td> 
			        <td id="play_odds_7092073" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092073" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092083" class="name"><i class="lhc_icon lhc_b21">21</i></td> 
			        <td id="play_odds_7092083" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092083" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092093" class="name"><i class="lhc_icon lhc_b31">31</i></td> 
			        <td id="play_odds_7092093" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092093" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092103" class="name"><i class="lhc_icon lhc_b41">41</i></td> 
			        <td id="play_odds_7092103" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092103" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092064" class="name"><i class="lhc_icon lhc_b02">02</i></td> 
			        <td id="play_odds_7092064" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092064" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092074" class="name"><i class="lhc_icon lhc_b12">12</i></td> 
			        <td id="play_odds_7092074" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092074" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092084" class="name"><i class="lhc_icon lhc_b22">22</i></td> 
			        <td id="play_odds_7092084" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092084" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092094" class="name"><i class="lhc_icon lhc_b32">32</i></td> 
			        <td id="play_odds_7092094" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092094" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092104" class="name"><i class="lhc_icon lhc_b42">42</i></td> 
			        <td id="play_odds_7092104" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092104" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092065" class="name"><i class="lhc_icon lhc_b03">03</i></td> 
			        <td id="play_odds_7092065" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092065" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092075" class="name"><i class="lhc_icon lhc_b13">13</i></td> 
			        <td id="play_odds_7092075" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092075" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092085" class="name"><i class="lhc_icon lhc_b23">23</i></td> 
			        <td id="play_odds_7092085" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092085" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092095" class="name"><i class="lhc_icon lhc_b33">33</i></td> 
			        <td id="play_odds_7092095" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092095" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092105" class="name"><i class="lhc_icon lhc_b43">43</i></td> 
			        <td id="play_odds_7092105" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092105" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092066" class="name"><i class="lhc_icon lhc_b04">04</i></td> 
			        <td id="play_odds_7092066" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092066" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092076" class="name"><i class="lhc_icon lhc_b14">14</i></td> 
			        <td id="play_odds_7092076" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092076" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092086" class="name"><i class="lhc_icon lhc_b24">24</i></td> 
			        <td id="play_odds_7092086" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092086" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092096" class="name"><i class="lhc_icon lhc_b34">34</i></td> 
			        <td id="play_odds_7092096" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092096" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092106" class="name"><i class="lhc_icon lhc_b44">44</i></td> 
			        <td id="play_odds_7092106" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092106" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092067" class="name"><i class="lhc_icon lhc_b05">05</i></td> 
			        <td id="play_odds_7092067" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092067" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092077" class="name"><i class="lhc_icon lhc_b15">15</i></td> 
			        <td id="play_odds_7092077" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092077" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092087" class="name"><i class="lhc_icon lhc_b25">25</i></td> 
			        <td id="play_odds_7092087" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092087" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092097" class="name"><i class="lhc_icon lhc_b35">35</i></td> 
			        <td id="play_odds_7092097" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092097" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092107" class="name"><i class="lhc_icon lhc_b45">45</i></td> 
			        <td id="play_odds_7092107" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092107" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092068" class="name"><i class="lhc_icon lhc_b06">06</i></td> 
			        <td id="play_odds_7092068" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092068" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092078" class="name"><i class="lhc_icon lhc_b16">16</i></td> 
			        <td id="play_odds_7092078" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092078" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092088" class="name"><i class="lhc_icon lhc_b26">26</i></td> 
			        <td id="play_odds_7092088" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092088" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092098" class="name"><i class="lhc_icon lhc_b36">36</i></td> 
			        <td id="play_odds_7092098" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092098" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092108" class="name"><i class="lhc_icon lhc_b46">46</i></td> 
			        <td id="play_odds_7092108" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092108" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092069" class="name"><i class="lhc_icon lhc_b07">07</i></td> 
			        <td id="play_odds_7092069" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092069" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092079" class="name"><i class="lhc_icon lhc_b17">17</i></td> 
			        <td id="play_odds_7092079" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092079" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092089" class="name"><i class="lhc_icon lhc_b27">27</i></td> 
			        <td id="play_odds_7092089" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092089" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092099" class="name"><i class="lhc_icon lhc_b37">37</i></td> 
			        <td id="play_odds_7092099" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092099" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092109" class="name"><i class="lhc_icon lhc_b47">47</i></td> 
			        <td id="play_odds_7092109" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092109" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092070" class="name"><i class="lhc_icon lhc_b08">08</i></td> 
			        <td id="play_odds_7092070" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092070" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092080" class="name"><i class="lhc_icon lhc_b18">18</i></td> 
			        <td id="play_odds_7092080" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092080" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092090" class="name"><i class="lhc_icon lhc_b28">28</i></td> 
			        <td id="play_odds_7092090" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092090" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092100" class="name"><i class="lhc_icon lhc_b38">38</i></td> 
			        <td id="play_odds_7092100" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092100" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092110" class="name"><i class="lhc_icon lhc_b48">48</i></td> 
			        <td id="play_odds_7092110" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092110" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092071" class="name"><i class="lhc_icon lhc_b09">09</i></td> 
			        <td id="play_odds_7092071" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092071" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092081" class="name"><i class="lhc_icon lhc_b19">19</i></td> 
			        <td id="play_odds_7092081" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092081" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092091" class="name"><i class="lhc_icon lhc_b29">29</i></td> 
			        <td id="play_odds_7092091" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092091" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092101" class="name"><i class="lhc_icon lhc_b39">39</i></td> 
			        <td id="play_odds_7092101" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092101" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092111" class="name"><i class="lhc_icon lhc_b49">49</i></td> 
			        <td id="play_odds_7092111" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092111" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092072" class="name"><i class="lhc_icon lhc_b10">10</i></td> 
			        <td id="play_odds_7092072" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092072" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092082" class="name"><i class="lhc_icon lhc_b20">20</i></td> 
			        <td id="play_odds_7092082" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092082" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092092" class="name"><i class="lhc_icon lhc_b30">30</i></td> 
			        <td id="play_odds_7092092" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092092" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092102" class="name"><i class="lhc_icon lhc_b40">40</i></td> 
			        <td id="play_odds_7092102" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092102" class="amount"><input type="text" /></td> 
			        
			        <td class="name not-event" colspan="3"></td> 
			       </tr> 
			      </tbody> 
			     </table> 
	    	
	    		<table class="u-table2 play_tab_92 mt10"> 
			      <thead> 
			       <tr> 
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th>
			         
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			        
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			       </tr> 
			      </thead> 
			      <tbody> 
			       <tr> 
			        <td id="play_name_7092114" class="name">正2-大</td> 
			        <td id="play_odds_7092114" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092114" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092112" class="name">正2-单</td> 
			        <td id="play_odds_7092112" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092112" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092116" class="name">正2-合单</td> 
			        <td id="play_odds_7092116" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092116" class="amount"><input type="text" /></td> 
			       </tr>
			        
			       <tr> 
			        <td id="play_name_7092115" class="name">正2-小</td> 
			        <td id="play_odds_7092115" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092115" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092113" class="name">正2-双</td> 
			        <td id="play_odds_7092113" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092113" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092117" class="name">正2-合双</td> 
			        <td id="play_odds_7092117" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092117" class="amount"><input type="text" /></td> 
			       </tr> 
			        
			       <tr> 
			        <td id="play_name_7092120" class="name">正2-红</td> 
			        <td id="play_odds_7092120" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092120" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092121" class="name">正2-蓝</td> 
			        <td id="play_odds_7092121" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092121" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092122" class="name">正2-绿</td> 
			        <td id="play_odds_7092122" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092122" class="amount"><input type="text" /></td> 
			       </tr> 
			      </tbody>
				 </table>
	    	</div>
	    	
	    	<div id="TM_F_PAGE" class="hide">
	    		<table class="u-table2 play_tab_92 "> 
			      <thead> 
			       <tr> 
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th>
			         
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			        
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			        
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th>
			         
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			       </tr> 
			      </thead> 
			      <tbody> 
			       <tr> 
			        <td id="play_name_7092125" class="name"><i class="lhc_icon lhc_b01">01</i></td> 
			        <td id="play_odds_7092125" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092125" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092135" class="name"><i class="lhc_icon lhc_b11">11</i></td> 
			        <td id="play_odds_7092135" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092135" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092145" class="name"><i class="lhc_icon lhc_b21">21</i></td> 
			        <td id="play_odds_7092145" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092145" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092155" class="name"><i class="lhc_icon lhc_b31">31</i></td> 
			        <td id="play_odds_7092155" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092155" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092165" class="name"><i class="lhc_icon lhc_b41">41</i></td> 
			        <td id="play_odds_7092165" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092165" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092126" class="name"><i class="lhc_icon lhc_b02">02</i></td> 
			        <td id="play_odds_7092126" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092126" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092136" class="name"><i class="lhc_icon lhc_b12">12</i></td> 
			        <td id="play_odds_7092136" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092136" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092146" class="name"><i class="lhc_icon lhc_b22">22</i></td> 
			        <td id="play_odds_7092146" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092146" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092156" class="name"><i class="lhc_icon lhc_b32">32</i></td> 
			        <td id="play_odds_7092156" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092156" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092166" class="name"><i class="lhc_icon lhc_b42">42</i></td> 
			        <td id="play_odds_7092166" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092166" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092127" class="name"><i class="lhc_icon lhc_b03">03</i></td> 
			        <td id="play_odds_7092127" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092127" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092137" class="name"><i class="lhc_icon lhc_b13">13</i></td> 
			        <td id="play_odds_7092137" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092137" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092147" class="name"><i class="lhc_icon lhc_b23">23</i></td> 
			        <td id="play_odds_7092147" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092147" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092157" class="name"><i class="lhc_icon lhc_b33">33</i></td> 
			        <td id="play_odds_7092157" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092157" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092167" class="name"><i class="lhc_icon lhc_b43">43</i></td> 
			        <td id="play_odds_7092167" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092167" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092128" class="name"><i class="lhc_icon lhc_b04">04</i></td> 
			        <td id="play_odds_7092128" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092128" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092138" class="name"><i class="lhc_icon lhc_b14">14</i></td> 
			        <td id="play_odds_7092138" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092138" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092148" class="name"><i class="lhc_icon lhc_b24">24</i></td> 
			        <td id="play_odds_7092148" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092148" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092158" class="name"><i class="lhc_icon lhc_b34">34</i></td> 
			        <td id="play_odds_7092158" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092158" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092168" class="name"><i class="lhc_icon lhc_b44">44</i></td> 
			        <td id="play_odds_7092168" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092168" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092129" class="name"><i class="lhc_icon lhc_b05">05</i></td> 
			        <td id="play_odds_7092129" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092129" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092139" class="name"><i class="lhc_icon lhc_b15">15</i></td> 
			        <td id="play_odds_7092139" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092139" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092149" class="name"><i class="lhc_icon lhc_b25">25</i></td> 
			        <td id="play_odds_7092149" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092149" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092159" class="name"><i class="lhc_icon lhc_b35">35</i></td> 
			        <td id="play_odds_7092159" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092159" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092169" class="name"><i class="lhc_icon lhc_b45">45</i></td> 
			        <td id="play_odds_7092169" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092169" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092130" class="name"><i class="lhc_icon lhc_b06">06</i></td> 
			        <td id="play_odds_7092130" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092130" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092140" class="name"><i class="lhc_icon lhc_b16">16</i></td> 
			        <td id="play_odds_7092140" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092140" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092150" class="name"><i class="lhc_icon lhc_b26">26</i></td> 
			        <td id="play_odds_7092150" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092150" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092160" class="name"><i class="lhc_icon lhc_b36">36</i></td> 
			        <td id="play_odds_7092160" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092160" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092170" class="name"><i class="lhc_icon lhc_b46">46</i></td> 
			        <td id="play_odds_7092170" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092170" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092131" class="name"><i class="lhc_icon lhc_b07">07</i></td> 
			        <td id="play_odds_7092131" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092131" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092141" class="name"><i class="lhc_icon lhc_b17">17</i></td> 
			        <td id="play_odds_7092141" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092141" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092151" class="name"><i class="lhc_icon lhc_b27">27</i></td> 
			        <td id="play_odds_7092151" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092151" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092161" class="name"><i class="lhc_icon lhc_b37">37</i></td> 
			        <td id="play_odds_7092161" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092161" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092171" class="name"><i class="lhc_icon lhc_b47">47</i></td> 
			        <td id="play_odds_7092171" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092171" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092132" class="name"><i class="lhc_icon lhc_b08">08</i></td> 
			        <td id="play_odds_7092132" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092132" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092142" class="name"><i class="lhc_icon lhc_b18">18</i></td> 
			        <td id="play_odds_7092142" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092142" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092152" class="name"><i class="lhc_icon lhc_b28">28</i></td> 
			        <td id="play_odds_7092152" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092152" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092162" class="name"><i class="lhc_icon lhc_b38">38</i></td> 
			        <td id="play_odds_7092162" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092162" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092172" class="name"><i class="lhc_icon lhc_b48">48</i></td> 
			        <td id="play_odds_7092172" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092172" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092133" class="name"><i class="lhc_icon lhc_b09">09</i></td> 
			        <td id="play_odds_7092133" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092133" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092143" class="name"><i class="lhc_icon lhc_b19">19</i></td> 
			        <td id="play_odds_7092143" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092143" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092153" class="name"><i class="lhc_icon lhc_b29">29</i></td> 
			        <td id="play_odds_7092153" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092153" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092163" class="name"><i class="lhc_icon lhc_b39">39</i></td> 
			        <td id="play_odds_7092163" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092163" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092173" class="name"><i class="lhc_icon lhc_b49">49</i></td> 
			        <td id="play_odds_7092173" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092173" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092134" class="name"><i class="lhc_icon lhc_b10">10</i></td> 
			        <td id="play_odds_7092134" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092134" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092144" class="name"><i class="lhc_icon lhc_b20">20</i></td> 
			        <td id="play_odds_7092144" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092144" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092154" class="name"><i class="lhc_icon lhc_b30">30</i></td> 
			        <td id="play_odds_7092154" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092154" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092164" class="name"><i class="lhc_icon lhc_b40">40</i></td> 
			        <td id="play_odds_7092164" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092164" class="amount"><input type="text" /></td> 
			        
			        <td class="name not-event" colspan="3"></td> 
			       </tr> 
			      </tbody> 
			     </table> 
	    	
	    		<table class="u-table2 play_tab_92 mt10"> 
			      <thead> 
			       <tr> 
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th>
			         
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			        
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			       </tr> 
			      </thead> 
			      <tbody> 
			       <tr> 
			        <td id="play_name_7092176" class="name">正3-大</td> 
			        <td id="play_odds_7092176" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092176" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092174" class="name">正3-单</td> 
			        <td id="play_odds_7092174" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092174" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092178" class="name">正3-合单</td> 
			        <td id="play_odds_7092178" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092178" class="amount"><input type="text" /></td> 
			       </tr>
			        
			       <tr> 
			        <td id="play_name_7092177" class="name">正3-小</td> 
			        <td id="play_odds_7092177" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092177" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092175" class="name">正3-双</td> 
			        <td id="play_odds_7092175" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092175" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092179" class="name">正3-合双</td> 
			        <td id="play_odds_7092179" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092179" class="amount"><input type="text" /></td> 
			       </tr> 
			        
			       <tr> 
			        <td id="play_name_7092182" class="name">正3-红</td> 
			        <td id="play_odds_7092182" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092182" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092183" class="name">正3-蓝</td> 
			        <td id="play_odds_7092183" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092183" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092184" class="name">正3-绿</td> 
			        <td id="play_odds_7092184" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092184" class="amount"><input type="text" /></td> 
			       </tr> 
			      </tbody>
				 </table>
	    	</div>
	    	
	    	<div id="TM_G_PAGE" class="hide">
	    		<table class="u-table2 play_tab_92 "> 
			      <thead> 
			       <tr> 
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th>
			         
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			        
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			        
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th>
			         
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			       </tr> 
			      </thead> 
			      <tbody> 
			       <tr> 
			        <td id="play_name_7092187" class="name"><i class="lhc_icon lhc_b01">01</i></td> 
			        <td id="play_odds_7092187" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092187" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092197" class="name"><i class="lhc_icon lhc_b11">11</i></td> 
			        <td id="play_odds_7092197" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092197" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092207" class="name"><i class="lhc_icon lhc_b21">21</i></td> 
			        <td id="play_odds_7092207" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092207" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092217" class="name"><i class="lhc_icon lhc_b31">31</i></td> 
			        <td id="play_odds_7092217" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092217" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092227" class="name"><i class="lhc_icon lhc_b41">41</i></td> 
			        <td id="play_odds_7092227" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092227" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092188" class="name"><i class="lhc_icon lhc_b02">02</i></td> 
			        <td id="play_odds_7092188" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092188" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092198" class="name"><i class="lhc_icon lhc_b12">12</i></td> 
			        <td id="play_odds_7092198" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092198" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092208" class="name"><i class="lhc_icon lhc_b22">22</i></td> 
			        <td id="play_odds_7092208" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092208" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092218" class="name"><i class="lhc_icon lhc_b32">32</i></td> 
			        <td id="play_odds_7092218" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092218" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092228" class="name"><i class="lhc_icon lhc_b42">42</i></td> 
			        <td id="play_odds_7092228" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092228" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092189" class="name"><i class="lhc_icon lhc_b03">03</i></td> 
			        <td id="play_odds_7092189" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092189" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092199" class="name"><i class="lhc_icon lhc_b13">13</i></td> 
			        <td id="play_odds_7092199" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092199" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092209" class="name"><i class="lhc_icon lhc_b23">23</i></td> 
			        <td id="play_odds_7092209" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092209" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092219" class="name"><i class="lhc_icon lhc_b33">33</i></td> 
			        <td id="play_odds_7092219" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092219" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092229" class="name"><i class="lhc_icon lhc_b43">43</i></td> 
			        <td id="play_odds_7092229" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092229" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092190" class="name"><i class="lhc_icon lhc_b04">04</i></td> 
			        <td id="play_odds_7092190" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092190" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092200" class="name"><i class="lhc_icon lhc_b14">14</i></td> 
			        <td id="play_odds_7092200" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092200" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092210" class="name"><i class="lhc_icon lhc_b24">24</i></td> 
			        <td id="play_odds_7092210" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092210" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092220" class="name"><i class="lhc_icon lhc_b34">34</i></td> 
			        <td id="play_odds_7092220" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092220" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092230" class="name"><i class="lhc_icon lhc_b44">44</i></td> 
			        <td id="play_odds_7092230" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092230" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092191" class="name"><i class="lhc_icon lhc_b05">05</i></td> 
			        <td id="play_odds_7092191" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092191" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092201" class="name"><i class="lhc_icon lhc_b15">15</i></td> 
			        <td id="play_odds_7092201" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092201" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092211" class="name"><i class="lhc_icon lhc_b25">25</i></td> 
			        <td id="play_odds_7092211" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092211" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092221" class="name"><i class="lhc_icon lhc_b35">35</i></td> 
			        <td id="play_odds_7092221" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092221" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092231" class="name"><i class="lhc_icon lhc_b45">45</i></td> 
			        <td id="play_odds_7092231" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092231" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092192" class="name"><i class="lhc_icon lhc_b06">06</i></td> 
			        <td id="play_odds_7092192" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092192" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092202" class="name"><i class="lhc_icon lhc_b16">16</i></td> 
			        <td id="play_odds_7092202" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092202" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092212" class="name"><i class="lhc_icon lhc_b26">26</i></td> 
			        <td id="play_odds_7092212" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092212" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092222" class="name"><i class="lhc_icon lhc_b36">36</i></td> 
			        <td id="play_odds_7092222" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092222" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092232" class="name"><i class="lhc_icon lhc_b46">46</i></td> 
			        <td id="play_odds_7092232" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092232" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092193" class="name"><i class="lhc_icon lhc_b07">07</i></td> 
			        <td id="play_odds_7092193" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092193" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092203" class="name"><i class="lhc_icon lhc_b17">17</i></td> 
			        <td id="play_odds_7092203" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092203" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092213" class="name"><i class="lhc_icon lhc_b27">27</i></td> 
			        <td id="play_odds_7092213" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092213" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092223" class="name"><i class="lhc_icon lhc_b37">37</i></td> 
			        <td id="play_odds_7092223" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092223" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092233" class="name"><i class="lhc_icon lhc_b47">47</i></td> 
			        <td id="play_odds_7092233" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092233" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092194" class="name"><i class="lhc_icon lhc_b08">08</i></td> 
			        <td id="play_odds_7092194" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092194" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092204" class="name"><i class="lhc_icon lhc_b18">18</i></td> 
			        <td id="play_odds_7092204" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092204" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092214" class="name"><i class="lhc_icon lhc_b28">28</i></td> 
			        <td id="play_odds_7092214" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092214" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092224" class="name"><i class="lhc_icon lhc_b38">38</i></td> 
			        <td id="play_odds_7092224" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092224" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092234" class="name"><i class="lhc_icon lhc_b48">48</i></td> 
			        <td id="play_odds_7092234" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092234" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092195" class="name"><i class="lhc_icon lhc_b09">09</i></td> 
			        <td id="play_odds_7092195" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092195" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092205" class="name"><i class="lhc_icon lhc_b19">19</i></td> 
			        <td id="play_odds_7092205" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092205" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092215" class="name"><i class="lhc_icon lhc_b29">29</i></td> 
			        <td id="play_odds_7092215" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092215" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092225" class="name"><i class="lhc_icon lhc_b39">39</i></td> 
			        <td id="play_odds_7092225" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092225" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092235" class="name"><i class="lhc_icon lhc_b49">49</i></td> 
			        <td id="play_odds_7092235" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092235" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092196" class="name"><i class="lhc_icon lhc_b10">10</i></td> 
			        <td id="play_odds_7092196" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092196" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092206" class="name"><i class="lhc_icon lhc_b20">20</i></td> 
			        <td id="play_odds_7092206" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092206" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092216" class="name"><i class="lhc_icon lhc_b30">30</i></td> 
			        <td id="play_odds_7092216" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092216" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092226" class="name"><i class="lhc_icon lhc_b40">40</i></td> 
			        <td id="play_odds_7092226" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092226" class="amount"><input type="text" /></td> 
			        
			        <td class="name not-event" colspan="3"></td> 
			       </tr> 
			      </tbody> 
			     </table> 
	    	
	    		<table class="u-table2 play_tab_92 mt10"> 
			      <thead> 
			       <tr> 
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th>
			         
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			        
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			       </tr> 
			      </thead> 
			      <tbody> 
			       <tr> 
			        <td id="play_name_7092238" class="name">正4-大</td> 
			        <td id="play_odds_7092238" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092238" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092236" class="name">正4-单</td> 
			        <td id="play_odds_7092236" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092236" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092240" class="name">正4-合单</td> 
			        <td id="play_odds_7092240" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092240" class="amount"><input type="text" /></td> 
			       </tr>
			        
			       <tr> 
			        <td id="play_name_7092239" class="name">正4-小</td> 
			        <td id="play_odds_7092239" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092239" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092237" class="name">正4-双</td> 
			        <td id="play_odds_7092237" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092237" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092241" class="name">正4-合双</td> 
			        <td id="play_odds_7092241" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092241" class="amount"><input type="text" /></td> 
			       </tr> 
			        
			       <tr> 
			        <td id="play_name_7092244" class="name">正4-红</td> 
			        <td id="play_odds_7092244" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092244" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092245" class="name">正4-蓝</td> 
			        <td id="play_odds_7092245" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092245" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092246" class="name">正4-绿</td> 
			        <td id="play_odds_7092246" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092246" class="amount"><input type="text" /></td> 
			       </tr> 
			      </tbody>
				 </table>
	    	</div>
	    	
	    	<div id="TM_H_PAGE" class="hide">
	    		<table class="u-table2 play_tab_92 "> 
			      <thead> 
			       <tr> 
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th>
			         
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			        
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			        
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th>
			         
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			       </tr> 
			      </thead> 
			      <tbody> 
			       <tr> 
			        <td id="play_name_7092249" class="name"><i class="lhc_icon lhc_b01">01</i></td> 
			        <td id="play_odds_7092249" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092249" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092259" class="name"><i class="lhc_icon lhc_b11">11</i></td> 
			        <td id="play_odds_7092259" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092259" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092269" class="name"><i class="lhc_icon lhc_b21">21</i></td> 
			        <td id="play_odds_7092269" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092269" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092279" class="name"><i class="lhc_icon lhc_b31">31</i></td> 
			        <td id="play_odds_7092279" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092279" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092289" class="name"><i class="lhc_icon lhc_b41">41</i></td> 
			        <td id="play_odds_7092289" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092289" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092250" class="name"><i class="lhc_icon lhc_b02">02</i></td> 
			        <td id="play_odds_7092250" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092250" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092260" class="name"><i class="lhc_icon lhc_b12">12</i></td> 
			        <td id="play_odds_7092260" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092260" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092270" class="name"><i class="lhc_icon lhc_b22">22</i></td> 
			        <td id="play_odds_7092270" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092270" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092280" class="name"><i class="lhc_icon lhc_b32">32</i></td> 
			        <td id="play_odds_7092280" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092280" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092290" class="name"><i class="lhc_icon lhc_b42">42</i></td> 
			        <td id="play_odds_7092290" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092290" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092251" class="name"><i class="lhc_icon lhc_b03">03</i></td> 
			        <td id="play_odds_7092251" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092251" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092261" class="name"><i class="lhc_icon lhc_b13">13</i></td> 
			        <td id="play_odds_7092261" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092261" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092271" class="name"><i class="lhc_icon lhc_b23">23</i></td> 
			        <td id="play_odds_7092271" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092271" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092281" class="name"><i class="lhc_icon lhc_b33">33</i></td> 
			        <td id="play_odds_7092281" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092281" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092291" class="name"><i class="lhc_icon lhc_b43">43</i></td> 
			        <td id="play_odds_7092291" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092291" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092252" class="name"><i class="lhc_icon lhc_b04">04</i></td> 
			        <td id="play_odds_7092252" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092252" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092262" class="name"><i class="lhc_icon lhc_b14">14</i></td> 
			        <td id="play_odds_7092262" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092262" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092272" class="name"><i class="lhc_icon lhc_b24">24</i></td> 
			        <td id="play_odds_7092272" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092272" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092282" class="name"><i class="lhc_icon lhc_b34">34</i></td> 
			        <td id="play_odds_7092282" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092282" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092292" class="name"><i class="lhc_icon lhc_b44">44</i></td> 
			        <td id="play_odds_7092292" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092292" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092253" class="name"><i class="lhc_icon lhc_b05">05</i></td> 
			        <td id="play_odds_7092253" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092253" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092263" class="name"><i class="lhc_icon lhc_b15">15</i></td> 
			        <td id="play_odds_7092263" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092263" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092273" class="name"><i class="lhc_icon lhc_b25">25</i></td> 
			        <td id="play_odds_7092273" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092273" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092283" class="name"><i class="lhc_icon lhc_b35">35</i></td> 
			        <td id="play_odds_7092283" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092283" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092293" class="name"><i class="lhc_icon lhc_b45">45</i></td> 
			        <td id="play_odds_7092293" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092293" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092254" class="name"><i class="lhc_icon lhc_b06">06</i></td> 
			        <td id="play_odds_7092254" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092254" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092264" class="name"><i class="lhc_icon lhc_b16">16</i></td> 
			        <td id="play_odds_7092264" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092264" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092274" class="name"><i class="lhc_icon lhc_b26">26</i></td> 
			        <td id="play_odds_7092274" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092274" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092284" class="name"><i class="lhc_icon lhc_b36">36</i></td> 
			        <td id="play_odds_7092284" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092284" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092294" class="name"><i class="lhc_icon lhc_b46">46</i></td> 
			        <td id="play_odds_7092294" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092294" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092255" class="name"><i class="lhc_icon lhc_b07">07</i></td> 
			        <td id="play_odds_7092255" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092255" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092265" class="name"><i class="lhc_icon lhc_b17">17</i></td> 
			        <td id="play_odds_7092265" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092265" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092275" class="name"><i class="lhc_icon lhc_b27">27</i></td> 
			        <td id="play_odds_7092275" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092275" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092285" class="name"><i class="lhc_icon lhc_b37">37</i></td> 
			        <td id="play_odds_7092285" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092285" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092295" class="name"><i class="lhc_icon lhc_b47">47</i></td> 
			        <td id="play_odds_7092295" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092295" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092256" class="name"><i class="lhc_icon lhc_b08">08</i></td> 
			        <td id="play_odds_7092256" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092256" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092266" class="name"><i class="lhc_icon lhc_b18">18</i></td> 
			        <td id="play_odds_7092266" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092266" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092276" class="name"><i class="lhc_icon lhc_b28">28</i></td> 
			        <td id="play_odds_7092276" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092276" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092286" class="name"><i class="lhc_icon lhc_b38">38</i></td> 
			        <td id="play_odds_7092286" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092286" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092296" class="name"><i class="lhc_icon lhc_b48">48</i></td> 
			        <td id="play_odds_7092296" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092296" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092257" class="name"><i class="lhc_icon lhc_b09">09</i></td> 
			        <td id="play_odds_7092257" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092257" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092267" class="name"><i class="lhc_icon lhc_b19">19</i></td> 
			        <td id="play_odds_7092267" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092267" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092277" class="name"><i class="lhc_icon lhc_b29">29</i></td> 
			        <td id="play_odds_7092277" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092277" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092287" class="name"><i class="lhc_icon lhc_b39">39</i></td> 
			        <td id="play_odds_7092287" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092287" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092297" class="name"><i class="lhc_icon lhc_b49">49</i></td> 
			        <td id="play_odds_7092297" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092297" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092258" class="name"><i class="lhc_icon lhc_b10">10</i></td> 
			        <td id="play_odds_7092258" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092258" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092268" class="name"><i class="lhc_icon lhc_b20">20</i></td> 
			        <td id="play_odds_7092268" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092268" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092278" class="name"><i class="lhc_icon lhc_b30">30</i></td> 
			        <td id="play_odds_7092278" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092278" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092288" class="name"><i class="lhc_icon lhc_b40">40</i></td> 
			        <td id="play_odds_7092288" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092288" class="amount"><input type="text" /></td> 
			        
			        <td class="name not-event" colspan="3"></td> 
			       </tr> 
			      </tbody> 
			     </table> 
	    	
	    		<table class="u-table2 play_tab_92 mt10"> 
			      <thead> 
			       <tr> 
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th>
			         
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			        
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			       </tr> 
			      </thead> 
			      <tbody> 
			       <tr> 
			        <td id="play_name_7092300" class="name">正5-大</td> 
			        <td id="play_odds_7092300" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092300" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092298" class="name">正5-单</td> 
			        <td id="play_odds_7092298" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092298" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092302" class="name">正5-合单</td> 
			        <td id="play_odds_7092302" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092302" class="amount"><input type="text" /></td> 
			       </tr>
			        
			       <tr> 
			        <td id="play_name_7092301" class="name">正5-小</td> 
			        <td id="play_odds_7092301" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092301" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092299" class="name">正5-双</td> 
			        <td id="play_odds_7092299" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092299" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092303" class="name">正5-合双</td> 
			        <td id="play_odds_7092303" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092303" class="amount"><input type="text" /></td> 
			       </tr> 
			        
			       <tr> 
			        <td id="play_name_7092306" class="name">正5-红</td> 
			        <td id="play_odds_7092306" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092306" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092307" class="name">正5-蓝</td> 
			        <td id="play_odds_7092307" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092307" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092308" class="name">正5-绿</td> 
			        <td id="play_odds_7092308" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092308" class="amount"><input type="text" /></td> 
			       </tr> 
			      </tbody>
				 </table>
	    	</div>
	    	
	    	
	    	<div id="TM_I_PAGE" class="hide">
	    		<table class="u-table2 play_tab_92 "> 
			      <thead> 
			       <tr> 
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th>
			         
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			        
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			        
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th>
			         
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			       </tr> 
			      </thead> 
			      <tbody> 
			       <tr> 
			        <td id="play_name_7092311" class="name"><i class="lhc_icon lhc_b01">01</i></td> 
			        <td id="play_odds_7092311" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092311" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092321" class="name"><i class="lhc_icon lhc_b11">11</i></td> 
			        <td id="play_odds_7092321" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092321" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092331" class="name"><i class="lhc_icon lhc_b21">21</i></td> 
			        <td id="play_odds_7092331" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092331" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092341" class="name"><i class="lhc_icon lhc_b31">31</i></td> 
			        <td id="play_odds_7092341" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092341" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092351" class="name"><i class="lhc_icon lhc_b41">41</i></td> 
			        <td id="play_odds_7092351" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092351" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092312" class="name"><i class="lhc_icon lhc_b02">02</i></td> 
			        <td id="play_odds_7092312" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092312" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092322" class="name"><i class="lhc_icon lhc_b12">12</i></td> 
			        <td id="play_odds_7092322" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092322" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092332" class="name"><i class="lhc_icon lhc_b22">22</i></td> 
			        <td id="play_odds_7092332" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092332" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092342" class="name"><i class="lhc_icon lhc_b32">32</i></td> 
			        <td id="play_odds_7092342" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092342" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092352" class="name"><i class="lhc_icon lhc_b42">42</i></td> 
			        <td id="play_odds_7092352" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092352" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092313" class="name"><i class="lhc_icon lhc_b03">03</i></td> 
			        <td id="play_odds_7092313" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092313" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092323" class="name"><i class="lhc_icon lhc_b13">13</i></td> 
			        <td id="play_odds_7092323" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092323" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092333" class="name"><i class="lhc_icon lhc_b23">23</i></td> 
			        <td id="play_odds_7092333" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092333" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092343" class="name"><i class="lhc_icon lhc_b33">33</i></td> 
			        <td id="play_odds_7092343" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092343" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092353" class="name"><i class="lhc_icon lhc_b43">43</i></td> 
			        <td id="play_odds_7092353" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092353" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092314" class="name"><i class="lhc_icon lhc_b04">04</i></td> 
			        <td id="play_odds_7092314" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092314" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092324" class="name"><i class="lhc_icon lhc_b14">14</i></td> 
			        <td id="play_odds_7092324" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092324" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092334" class="name"><i class="lhc_icon lhc_b24">24</i></td> 
			        <td id="play_odds_7092334" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092334" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092344" class="name"><i class="lhc_icon lhc_b34">34</i></td> 
			        <td id="play_odds_7092344" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092344" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092354" class="name"><i class="lhc_icon lhc_b44">44</i></td> 
			        <td id="play_odds_7092354" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092354" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092315" class="name"><i class="lhc_icon lhc_b05">05</i></td> 
			        <td id="play_odds_7092315" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092315" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092325" class="name"><i class="lhc_icon lhc_b15">15</i></td> 
			        <td id="play_odds_7092325" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092325" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092335" class="name"><i class="lhc_icon lhc_b25">25</i></td> 
			        <td id="play_odds_7092335" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092335" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092345" class="name"><i class="lhc_icon lhc_b35">35</i></td> 
			        <td id="play_odds_7092345" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092345" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092355" class="name"><i class="lhc_icon lhc_b45">45</i></td> 
			        <td id="play_odds_7092355" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092355" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092316" class="name"><i class="lhc_icon lhc_b06">06</i></td> 
			        <td id="play_odds_7092316" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092316" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092326" class="name"><i class="lhc_icon lhc_b16">16</i></td> 
			        <td id="play_odds_7092326" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092326" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092336" class="name"><i class="lhc_icon lhc_b26">26</i></td> 
			        <td id="play_odds_7092336" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092336" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092346" class="name"><i class="lhc_icon lhc_b36">36</i></td> 
			        <td id="play_odds_7092346" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092346" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092356" class="name"><i class="lhc_icon lhc_b46">46</i></td> 
			        <td id="play_odds_7092356" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092356" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092317" class="name"><i class="lhc_icon lhc_b07">07</i></td> 
			        <td id="play_odds_7092317" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092317" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092327" class="name"><i class="lhc_icon lhc_b17">17</i></td> 
			        <td id="play_odds_7092327" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092327" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092337" class="name"><i class="lhc_icon lhc_b27">27</i></td> 
			        <td id="play_odds_7092337" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092337" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092347" class="name"><i class="lhc_icon lhc_b37">37</i></td> 
			        <td id="play_odds_7092347" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092347" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092357" class="name"><i class="lhc_icon lhc_b47">47</i></td> 
			        <td id="play_odds_7092357" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092357" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092318" class="name"><i class="lhc_icon lhc_b08">08</i></td> 
			        <td id="play_odds_7092318" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092318" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092328" class="name"><i class="lhc_icon lhc_b18">18</i></td> 
			        <td id="play_odds_7092328" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092328" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092338" class="name"><i class="lhc_icon lhc_b28">28</i></td> 
			        <td id="play_odds_7092338" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092338" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092348" class="name"><i class="lhc_icon lhc_b38">38</i></td> 
			        <td id="play_odds_7092348" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092348" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092358" class="name"><i class="lhc_icon lhc_b48">48</i></td> 
			        <td id="play_odds_7092358" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092358" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092319" class="name"><i class="lhc_icon lhc_b09">09</i></td> 
			        <td id="play_odds_7092319" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092319" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092329" class="name"><i class="lhc_icon lhc_b19">19</i></td> 
			        <td id="play_odds_7092329" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092329" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092339" class="name"><i class="lhc_icon lhc_b29">29</i></td> 
			        <td id="play_odds_7092339" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092339" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092349" class="name"><i class="lhc_icon lhc_b39">39</i></td> 
			        <td id="play_odds_7092349" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092349" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092359" class="name"><i class="lhc_icon lhc_b49">49</i></td> 
			        <td id="play_odds_7092359" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092359" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_7092320" class="name"><i class="lhc_icon lhc_b10">10</i></td> 
			        <td id="play_odds_7092320" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092320" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092330" class="name"><i class="lhc_icon lhc_b20">20</i></td> 
			        <td id="play_odds_7092330" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092330" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092340" class="name"><i class="lhc_icon lhc_b30">30</i></td> 
			        <td id="play_odds_7092340" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092340" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092350" class="name"><i class="lhc_icon lhc_b40">40</i></td> 
			        <td id="play_odds_7092350" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092350" class="amount"><input type="text" /></td> 
			        
			        <td class="name not-event" colspan="3"></td> 
			       </tr> 
			      </tbody> 
			     </table> 
	    	
	    		<table class="u-table2 play_tab_92 mt10"> 
			      <thead> 
			       <tr> 
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th>
			         
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			        
			        <th>号码</th> 
			        <th>赔率</th> 
			        <th>金额</th> 
			       </tr> 
			      </thead> 
			      <tbody> 
			       <tr> 
			        <td id="play_name_7092362" class="name">正6-大</td> 
			        <td id="play_odds_7092362" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092362" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092360" class="name">正6-单</td> 
			        <td id="play_odds_7092360" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092360" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092364" class="name">正6-合单</td> 
			        <td id="play_odds_7092364" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092364" class="amount"><input type="text" /></td> 
			       </tr>
			        
			       <tr> 
			        <td id="play_name_7092363" class="name">正6-小</td> 
			        <td id="play_odds_7092363" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092363" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092361" class="name">正6-双</td> 
			        <td id="play_odds_7092361" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092361" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092365" class="name">正6-合双</td> 
			        <td id="play_odds_7092365" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092365" class="amount"><input type="text" /></td> 
			       </tr> 
			        
			       <tr> 
			        <td id="play_name_7092368" class="name">正6-红</td> 
			        <td id="play_odds_7092368" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092368" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092369" class="name">正6-蓝</td> 
			        <td id="play_odds_7092369" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092369" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_7092370" class="name">正6-绿</td> 
			        <td id="play_odds_7092370" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_7092370" class="amount"><input type="text" /></td> 
			       </tr> 
			      </tbody>
				 </table>
	    	</div>
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

