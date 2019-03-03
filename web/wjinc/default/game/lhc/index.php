
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
    	<ul class="tab" style="height: 35px">
    		<li class="tab_title02" id="tm_tabs">
				<a class="on" href="javascript:LHC.showTab('#TM_B_TAB');" type="B" id="TM_B_TAB">特码B</a>
		    	<a href="javascript:LHC.showTab('#TM_A_TAB');" type="A" id="TM_A_TAB">特码A</a>
    		</li>
    	</ul>
    	<div class="cont-col3-bd" id="bet_tab"> 
	    	<div id="TM_A_PAGE" class="hide">
	    		<table class="u-table2 play_tab_85"> 
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
			        <td id="play_name_708501" class="name"><i class="lhc_icon lhc_b01">01</i></td> 
			        <td id="play_odds_708501" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708501" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708511" class="name"><i class="lhc_icon lhc_b11">11</i></td> 
			        <td id="play_odds_708511" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708511" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708521" class="name"><i class="lhc_icon lhc_b21">21</i></td> 
			        <td id="play_odds_708521" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708521" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708531" class="name"><i class="lhc_icon lhc_b31">31</i></td> 
			        <td id="play_odds_708531" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708531" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708541" class="name"><i class="lhc_icon lhc_b41">41</i></td> 
			        <td id="play_odds_708541" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708541" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_708502" class="name"><i class="lhc_icon lhc_b02">02</i></td> 
			        <td id="play_odds_708502" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708502" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708512" class="name"><i class="lhc_icon lhc_b12">12</i></td> 
			        <td id="play_odds_708512" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708512" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708522" class="name"><i class="lhc_icon lhc_b22">22</i></td> 
			        <td id="play_odds_708522" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708522" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708532" class="name"><i class="lhc_icon lhc_b32">32</i></td> 
			        <td id="play_odds_708532" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708532" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708542" class="name"><i class="lhc_icon lhc_b42">42</i></td> 
			        <td id="play_odds_708542" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708542" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_708503" class="name"><i class="lhc_icon lhc_b03">03</i></td> 
			        <td id="play_odds_708503" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708503" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708513" class="name"><i class="lhc_icon lhc_b13">13</i></td> 
			        <td id="play_odds_708513" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708513" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708523" class="name"><i class="lhc_icon lhc_b23">23</i></td> 
			        <td id="play_odds_708523" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708523" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708533" class="name"><i class="lhc_icon lhc_b33">33</i></td> 
			        <td id="play_odds_708533" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708533" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708543" class="name"><i class="lhc_icon lhc_b43">43</i></td> 
			        <td id="play_odds_708543" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708543" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_708504" class="name"><i class="lhc_icon lhc_b04">04</i></td> 
			        <td id="play_odds_708504" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708504" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708514" class="name"><i class="lhc_icon lhc_b14">14</i></td> 
			        <td id="play_odds_708514" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708514" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708524" class="name"><i class="lhc_icon lhc_b24">24</i></td> 
			        <td id="play_odds_708524" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708524" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708534" class="name"><i class="lhc_icon lhc_b34">34</i></td> 
			        <td id="play_odds_708534" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708534" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708544" class="name"><i class="lhc_icon lhc_b44">44</i></td> 
			        <td id="play_odds_708544" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708544" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_708505" class="name"><i class="lhc_icon lhc_b05">05</i></td> 
			        <td id="play_odds_708505" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708505" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708515" class="name"><i class="lhc_icon lhc_b15">15</i></td> 
			        <td id="play_odds_708515" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708515" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708525" class="name"><i class="lhc_icon lhc_b25">25</i></td> 
			        <td id="play_odds_708525" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708525" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708535" class="name"><i class="lhc_icon lhc_b35">35</i></td> 
			        <td id="play_odds_708535" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708535" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708545" class="name"><i class="lhc_icon lhc_b45">45</i></td> 
			        <td id="play_odds_708545" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708545" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_708506" class="name"><i class="lhc_icon lhc_b06">06</i></td> 
			        <td id="play_odds_708506" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708506" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708516" class="name"><i class="lhc_icon lhc_b16">16</i></td> 
			        <td id="play_odds_708516" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708516" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708526" class="name"><i class="lhc_icon lhc_b26">26</i></td> 
			        <td id="play_odds_708526" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708526" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708536" class="name"><i class="lhc_icon lhc_b36">36</i></td> 
			        <td id="play_odds_708536" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708536" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708546" class="name"><i class="lhc_icon lhc_b46">46</i></td> 
			        <td id="play_odds_708546" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708546" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_708507" class="name"><i class="lhc_icon lhc_b07">07</i></td> 
			        <td id="play_odds_708507" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708507" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708517" class="name"><i class="lhc_icon lhc_b17">17</i></td> 
			        <td id="play_odds_708517" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708517" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708527" class="name"><i class="lhc_icon lhc_b27">27</i></td> 
			        <td id="play_odds_708527" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708527" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708537" class="name"><i class="lhc_icon lhc_b37">37</i></td> 
			        <td id="play_odds_708537" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708537" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708547" class="name"><i class="lhc_icon lhc_b47">47</i></td> 
			        <td id="play_odds_708547" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708547" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_708508" class="name"><i class="lhc_icon lhc_b08">08</i></td> 
			        <td id="play_odds_708508" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708508" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708518" class="name"><i class="lhc_icon lhc_b18">18</i></td> 
			        <td id="play_odds_708518" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708518" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708528" class="name"><i class="lhc_icon lhc_b28">28</i></td> 
			        <td id="play_odds_708528" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708528" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708538" class="name"><i class="lhc_icon lhc_b38">38</i></td> 
			        <td id="play_odds_708538" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708538" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708548" class="name"><i class="lhc_icon lhc_b48">48</i></td> 
			        <td id="play_odds_708548" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708548" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_708509" class="name"><i class="lhc_icon lhc_b09">09</i></td> 
			        <td id="play_odds_708509" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708509" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708519" class="name"><i class="lhc_icon lhc_b19">19</i></td> 
			        <td id="play_odds_708519" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708519" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708529" class="name"><i class="lhc_icon lhc_b29">29</i></td> 
			        <td id="play_odds_708529" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708529" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708539" class="name"><i class="lhc_icon lhc_b39">39</i></td> 
			        <td id="play_odds_708539" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708539" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708549" class="name"><i class="lhc_icon lhc_b49">49</i></td> 
			        <td id="play_odds_708549" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708549" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_708510" class="name"><i class="lhc_icon lhc_b10">10</i></td> 
			        <td id="play_odds_708510" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708510" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708520" class="name"><i class="lhc_icon lhc_b20">20</i></td> 
			        <td id="play_odds_708520" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708520" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708530" class="name"><i class="lhc_icon lhc_b30">30</i></td> 
			        <td id="play_odds_708530" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708530" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708540" class="name"><i class="lhc_icon lhc_b40">40</i></td> 
			        <td id="play_odds_708540" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708540" class="amount"><input type="text" /></td> 
			        
			        <td class="name not-event" colspan="3"></td> 
			       </tr> 
			      </tbody> 
			     </table> 
	    	</div>
	    	<div id="TM_B_PAGE" >
	    		<table class="u-table2 play_tab_85 "> 
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
			        <td id="play_name_708550" class="name"><i class="lhc_icon lhc_b01">01</i></td> 
			        <td id="play_odds_708550" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708550" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708560" class="name"><i class="lhc_icon lhc_b11">11</i></td> 
			        <td id="play_odds_708560" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708560" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708570" class="name"><i class="lhc_icon lhc_b21">21</i></td> 
			        <td id="play_odds_708570" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708570" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708580" class="name"><i class="lhc_icon lhc_b31">31</i></td> 
			        <td id="play_odds_708580" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708580" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708590" class="name"><i class="lhc_icon lhc_b41">41</i></td> 
			        <td id="play_odds_708590" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708590" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_708551" class="name"><i class="lhc_icon lhc_b02">02</i></td> 
			        <td id="play_odds_708551" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708551" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708561" class="name"><i class="lhc_icon lhc_b12">12</i></td> 
			        <td id="play_odds_708561" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708561" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708571" class="name"><i class="lhc_icon lhc_b22">22</i></td> 
			        <td id="play_odds_708571" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708571" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708581" class="name"><i class="lhc_icon lhc_b32">32</i></td> 
			        <td id="play_odds_708581" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708581" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708591" class="name"><i class="lhc_icon lhc_b42">42</i></td> 
			        <td id="play_odds_708591" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708591" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_708552" class="name"><i class="lhc_icon lhc_b03">03</i></td> 
			        <td id="play_odds_708552" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708552" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708562" class="name"><i class="lhc_icon lhc_b13">13</i></td> 
			        <td id="play_odds_708562" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708562" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708572" class="name"><i class="lhc_icon lhc_b23">23</i></td> 
			        <td id="play_odds_708572" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708572" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708582" class="name"><i class="lhc_icon lhc_b33">33</i></td> 
			        <td id="play_odds_708582" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708582" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708592" class="name"><i class="lhc_icon lhc_b43">43</i></td> 
			        <td id="play_odds_708592" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708592" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_708553" class="name"><i class="lhc_icon lhc_b04">04</i></td> 
			        <td id="play_odds_708553" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708553" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708563" class="name"><i class="lhc_icon lhc_b14">14</i></td> 
			        <td id="play_odds_708563" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708563" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708573" class="name"><i class="lhc_icon lhc_b24">24</i></td> 
			        <td id="play_odds_708573" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708573" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708583" class="name"><i class="lhc_icon lhc_b34">34</i></td> 
			        <td id="play_odds_708583" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708583" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708593" class="name"><i class="lhc_icon lhc_b44">44</i></td> 
			        <td id="play_odds_708593" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708593" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_708554" class="name"><i class="lhc_icon lhc_b05">05</i></td> 
			        <td id="play_odds_708554" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708554" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708564" class="name"><i class="lhc_icon lhc_b15">15</i></td> 
			        <td id="play_odds_708564" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708564" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708574" class="name"><i class="lhc_icon lhc_b25">25</i></td> 
			        <td id="play_odds_708574" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708574" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708584" class="name"><i class="lhc_icon lhc_b35">35</i></td> 
			        <td id="play_odds_708584" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708584" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708594" class="name"><i class="lhc_icon lhc_b45">45</i></td> 
			        <td id="play_odds_708594" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708594" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_708555" class="name"><i class="lhc_icon lhc_b06">06</i></td> 
			        <td id="play_odds_708555" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708555" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708565" class="name"><i class="lhc_icon lhc_b16">16</i></td> 
			        <td id="play_odds_708565" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708565" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708575" class="name"><i class="lhc_icon lhc_b26">26</i></td> 
			        <td id="play_odds_708575" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708575" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708585" class="name"><i class="lhc_icon lhc_b36">36</i></td> 
			        <td id="play_odds_708585" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708585" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708595" class="name"><i class="lhc_icon lhc_b46">46</i></td> 
			        <td id="play_odds_708595" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708595" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_708556" class="name"><i class="lhc_icon lhc_b07">07</i></td> 
			        <td id="play_odds_708556" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708556" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708566" class="name"><i class="lhc_icon lhc_b17">17</i></td> 
			        <td id="play_odds_708566" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708566" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708576" class="name"><i class="lhc_icon lhc_b27">27</i></td> 
			        <td id="play_odds_708576" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708576" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708586" class="name"><i class="lhc_icon lhc_b37">37</i></td> 
			        <td id="play_odds_708586" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708586" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708596" class="name"><i class="lhc_icon lhc_b47">47</i></td> 
			        <td id="play_odds_708596" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708596" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_708557" class="name"><i class="lhc_icon lhc_b08">08</i></td> 
			        <td id="play_odds_708557" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708557" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708567" class="name"><i class="lhc_icon lhc_b18">18</i></td> 
			        <td id="play_odds_708567" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708567" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708577" class="name"><i class="lhc_icon lhc_b28">28</i></td> 
			        <td id="play_odds_708577" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708577" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708587" class="name"><i class="lhc_icon lhc_b38">38</i></td> 
			        <td id="play_odds_708587" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708587" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708597" class="name"><i class="lhc_icon lhc_b48">48</i></td> 
			        <td id="play_odds_708597" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708597" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_708558" class="name"><i class="lhc_icon lhc_b09">09</i></td> 
			        <td id="play_odds_708558" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708558" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708568" class="name"><i class="lhc_icon lhc_b19">19</i></td> 
			        <td id="play_odds_708568" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708568" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708578" class="name"><i class="lhc_icon lhc_b29">29</i></td> 
			        <td id="play_odds_708578" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708578" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708588" class="name"><i class="lhc_icon lhc_b39">39</i></td> 
			        <td id="play_odds_708588" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708588" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708598" class="name"><i class="lhc_icon lhc_b49">49</i></td> 
			        <td id="play_odds_708598" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708598" class="amount"><input type="text" /></td> 
			       </tr> 
			       <tr> 
			        <td id="play_name_708559" class="name"><i class="lhc_icon lhc_b10">10</i></td> 
			        <td id="play_odds_708559" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708559" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708569" class="name"><i class="lhc_icon lhc_b20">20</i></td> 
			        <td id="play_odds_708569" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708569" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708579" class="name"><i class="lhc_icon lhc_b30">30</i></td> 
			        <td id="play_odds_708579" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708579" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708589" class="name"><i class="lhc_icon lhc_b40">40</i></td> 
			        <td id="play_odds_708589" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708589" class="amount"><input type="text" /></td> 
			        
			        <td class="name not-event" colspan="3"></td> 
			       </tr> 
			      </tbody> 
			     </table> 
	    	</div>
	    	<table class="u-table2 play_tab_86 mt10"> 
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
			       </tr> 
			      </thead> 
			      <tbody> 
			       <tr> 
			        <td id="play_name_708601" class="name">特大</td> 
			        <td id="play_odds_708601" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708601" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708603" class="name">特单</td> 
			        <td id="play_odds_708603" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708603" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708605" class="name">特合大</td> 
			        <td id="play_odds_708605" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708605" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708607" class="name">特合单</td> 
			        <td id="play_odds_708607" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708607" class="amount"><input type="text" /></td> 
			       </tr>
			        
			       <tr> 
			        <td id="play_name_708602" class="name">特小</td> 
			        <td id="play_odds_708602" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708602" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708604" class="name">特双</td> 
			        <td id="play_odds_708604" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708604" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708606" class="name">特合小</td> 
			        <td id="play_odds_708606" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708606" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708608" class="name">特合双</td> 
			        <td id="play_odds_708608" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708608" class="amount"><input type="text" /></td> 
			       </tr> 
			        
			       <tr> 
			        <td id="play_name_708609" class="name">特尾大</td> 
			        <td id="play_odds_708609" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708609" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708611" class="name">特大单</td> 
			        <td id="play_odds_708611" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708611" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708613" class="name">特小单</td> 
			        <td id="play_odds_708613" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708613" class="amount"><input type="text" /></td> 
			        
			        <td class="name not-event" colspan="3"></td> 
			       </tr> 
			        
			       <tr> 
			        <td id="play_name_708610" class="name">特尾小</td> 
			        <td id="play_odds_708610" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708610" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708612" class="name">特大双</td> 
			        <td id="play_odds_708612" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708612" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708614" class="name">特小双</td> 
			        <td id="play_odds_708614" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708614" class="amount"><input type="text" /></td> 
			        
			        <td class="name not-event" colspan="3"></td> 
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