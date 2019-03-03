
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
    <ul class="tab hide">
    		<li class="tab_title02" id="tm_tabs">
		    	<a class="on" type="C" id="tm_a_tab"></a>
			</li>
	</ul>
    <div class="cont-col3-bd" id="bet_tab"> 
    	<div class="cont-col3-bd" id="bet_tab"> 
    		<table class="u-table2 play_tab_91 mt10"> 
		      <thead> 
		       <tr> 
		        <th style="width: 4%;">号码</th> 
		        <th style="width: 6%">赔率</th> 
		        <th style="width: 8%">金额</th>
		         
		        <th style="width: 4%">号码</th> 
		        <th style="width: 6%">赔率</th> 
		        <th style="width: 8%">金额</th> 
		        
		        <th style="width: 4%">号码</th> 
		        <th style="width: 6%">赔率</th> 
		        <th style="width: 8%">金额</th> 
		        
		        <th style="width: 4%">号码</th> 
		        <th style="width: 6%">赔率</th> 
		        <th style="width: 8%">金额</th> 
		        
		        <th style="width: 4%">号码</th> 
		        <th style="width: 6%">赔率</th> 
		        <th style="width: 8%">金额</th> 
		       </tr> 
		      </thead> 
		      <tbody> 
		       <tr> 
		        <td id="play_name_709101" class="name"><i class="lhc_icon lhc_b01">01</i></td> 
		        <td id="play_odds_709101" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709101" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709111" class="name"><i class="lhc_icon lhc_b11">11</i></td> 
		        <td id="play_odds_709111" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709111" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709121" class="name"><i class="lhc_icon lhc_b21">21</i></td> 
		        <td id="play_odds_709121" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709121" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709131" class="name"><i class="lhc_icon lhc_b31">31</i></td> 
		        <td id="play_odds_709131" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709131" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709141" class="name"><i class="lhc_icon lhc_b41">41</i></td> 
		        <td id="play_odds_709141" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709141" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_709102" class="name"><i class="lhc_icon lhc_b02">02</i></td> 
		        <td id="play_odds_709102" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709102" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709112" class="name"><i class="lhc_icon lhc_b12">12</i></td> 
		        <td id="play_odds_709112" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709112" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709122" class="name"><i class="lhc_icon lhc_b22">22</i></td> 
		        <td id="play_odds_709122" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709122" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709132" class="name"><i class="lhc_icon lhc_b32">32</i></td> 
		        <td id="play_odds_709132" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709132" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709142" class="name"><i class="lhc_icon lhc_b42">42</i></td> 
		        <td id="play_odds_709142" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709142" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_709103" class="name"><i class="lhc_icon lhc_b03">03</i></td> 
		        <td id="play_odds_709103" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709103" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709113" class="name"><i class="lhc_icon lhc_b13">13</i></td> 
		        <td id="play_odds_709113" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709113" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709123" class="name"><i class="lhc_icon lhc_b23">23</i></td> 
		        <td id="play_odds_709123" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709123" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709133" class="name"><i class="lhc_icon lhc_b33">33</i></td> 
		        <td id="play_odds_709133" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709133" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709143" class="name"><i class="lhc_icon lhc_b43">43</i></td> 
		        <td id="play_odds_709143" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709143" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_709104" class="name"><i class="lhc_icon lhc_b04">04</i></td> 
		        <td id="play_odds_709104" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709104" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709114" class="name"><i class="lhc_icon lhc_b14">14</i></td> 
		        <td id="play_odds_709114" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709114" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709124" class="name"><i class="lhc_icon lhc_b24">24</i></td> 
		        <td id="play_odds_709124" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709124" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709134" class="name"><i class="lhc_icon lhc_b34">34</i></td> 
		        <td id="play_odds_709134" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709134" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709144" class="name"><i class="lhc_icon lhc_b44">44</i></td> 
		        <td id="play_odds_709144" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709144" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_709105" class="name"><i class="lhc_icon lhc_b05">05</i></td> 
		        <td id="play_odds_709105" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709105" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709115" class="name"><i class="lhc_icon lhc_b15">15</i></td> 
		        <td id="play_odds_709115" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709115" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709125" class="name"><i class="lhc_icon lhc_b25">25</i></td> 
		        <td id="play_odds_709125" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709125" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709135" class="name"><i class="lhc_icon lhc_b35">35</i></td> 
		        <td id="play_odds_709135" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709135" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709145" class="name"><i class="lhc_icon lhc_b45">45</i></td> 
		        <td id="play_odds_709145" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709145" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_709106" class="name"><i class="lhc_icon lhc_b06">06</i></td> 
		        <td id="play_odds_709106" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709106" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709116" class="name"><i class="lhc_icon lhc_b16">16</i></td> 
		        <td id="play_odds_709116" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709116" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709126" class="name"><i class="lhc_icon lhc_b26">26</i></td> 
		        <td id="play_odds_709126" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709126" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709136" class="name"><i class="lhc_icon lhc_b36">36</i></td> 
		        <td id="play_odds_709136" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709136" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709146" class="name"><i class="lhc_icon lhc_b46">46</i></td> 
		        <td id="play_odds_709146" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709146" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_709107" class="name"><i class="lhc_icon lhc_b07">07</i></td> 
		        <td id="play_odds_709107" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709107" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709117" class="name"><i class="lhc_icon lhc_b17">17</i></td> 
		        <td id="play_odds_709117" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709117" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709127" class="name"><i class="lhc_icon lhc_b27">27</i></td> 
		        <td id="play_odds_709127" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709127" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709137" class="name"><i class="lhc_icon lhc_b37">37</i></td> 
		        <td id="play_odds_709137" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709137" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709147" class="name"><i class="lhc_icon lhc_b47">47</i></td> 
		        <td id="play_odds_709147" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709147" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_709108" class="name"><i class="lhc_icon lhc_b08">08</i></td> 
		        <td id="play_odds_709108" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709108" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709118" class="name"><i class="lhc_icon lhc_b18">18</i></td> 
		        <td id="play_odds_709118" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709118" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709128" class="name"><i class="lhc_icon lhc_b28">28</i></td> 
		        <td id="play_odds_709128" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709128" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709138" class="name"><i class="lhc_icon lhc_b38">38</i></td> 
		        <td id="play_odds_709138" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709138" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709148" class="name"><i class="lhc_icon lhc_b48">48</i></td> 
		        <td id="play_odds_709148" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709148" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_709109" class="name"><i class="lhc_icon lhc_b09">09</i></td> 
		        <td id="play_odds_709109" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709109" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709119" class="name"><i class="lhc_icon lhc_b19">19</i></td> 
		        <td id="play_odds_709119" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709119" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709129" class="name"><i class="lhc_icon lhc_b29">29</i></td> 
		        <td id="play_odds_709129" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709129" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709139" class="name"><i class="lhc_icon lhc_b39">39</i></td> 
		        <td id="play_odds_709139" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709139" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709149" class="name"><i class="lhc_icon lhc_b49">49</i></td> 
		        <td id="play_odds_709149" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709149" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_709110" class="name"><i class="lhc_icon lhc_b10">10</i></td> 
		        <td id="play_odds_709110" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709110" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709120" class="name"><i class="lhc_icon lhc_b20">20</i></td> 
		        <td id="play_odds_709120" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709120" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709130" class="name"><i class="lhc_icon lhc_b30">30</i></td> 
		        <td id="play_odds_709130" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709130" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_709140" class="name"><i class="lhc_icon lhc_b40">40</i></td> 
		        <td id="play_odds_709140" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709140" class="amount"><input type="text" /></td> 
		        
		        <td class="name not-event" colspan="3"></td> 
		       </tr> 
		      </tbody> 
		     </table>
		     
		     <table class="u-table2 play_tab_86 mt10"> 
			      <thead> 
			       <tr> 
			        <th style="width: 6%;">号码</th> 
			        <th style="width: 6%">赔率</th> 
			        <th style="width: 10%">金额</th>
			         
			        <th style="width: 6%">号码</th> 
			        <th style="width: 6%">赔率</th> 
			        <th style="width: 8%">金额</th> 
			        
			        <th style="width: 6%">号码</th> 
			        <th style="width: 6%">赔率</th> 
			        <th style="width: 8%">金额</th> 
			        
			        <th style="width: 6%">号码</th> 
			        <th style="width: 6%">赔率</th> 
			        <th style="width: 8%">金额</th>
			       </tr> 
			      </thead> 
			      <tbody> 
			       <tr> 
			        <td id="play_name_708623" class="name">总大</td> 
			        <td id="play_odds_708623" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708623" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708624" class="name">总小</td> 
			        <td id="play_odds_708624" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708624" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708621" class="name">总单</td> 
			        <td id="play_odds_708621" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708621" class="amount"><input type="text" /></td> 
			        
			        <td id="play_name_708622" class="name">总双</td> 
			        <td id="play_odds_708622" class="odds"><span class="c-txt3">--</span></td> 
			        <td id="play_text_708622" class="amount"><input type="text" /></td> 
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


