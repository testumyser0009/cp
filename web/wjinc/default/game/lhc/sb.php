
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
    		
    		
    		<table class="u-table2 play_tab_87 "> 
		      <thead> 
		       <tr> 
		        <th style="width: 4%;">色波</th> 
		        <th style="width: 50%">号</th> 
		        <th style="width: 6%">赔率</th> 
		        <th style="width: 10%">金额</th>
		       </tr> 
		      </thead> 
		      <tbody> 
		       <tr> 
		        <td id="play_name_708701" class="name">红波</td> 
		        <td id="play_desc_708701" class="qiu">
		        	<i class="lhc_icon lhc_b01 mr1">01</i>
		        	<i class="lhc_icon lhc_b02 mr1">02</i>
		        	<i class="lhc_icon lhc_b07 mr1">07</i>
		        	<i class="lhc_icon lhc_b08 mr1">08</i>
		        	<i class="lhc_icon lhc_b12 mr1">12</i>
		        	<i class="lhc_icon lhc_b13 mr1">13</i>
		        	<i class="lhc_icon lhc_b18 mr1">18</i>
		        	<i class="lhc_icon lhc_b19 mr1">19</i>
		        	<i class="lhc_icon lhc_b23 mr1">23</i>
		        	<i class="lhc_icon lhc_b24 mr1">24</i>
		        	<i class="lhc_icon lhc_b29 mr1">29</i>
		        	<i class="lhc_icon lhc_b30 mr1">30</i>
		        	<i class="lhc_icon lhc_b34 mr1">34</i>
		        	<i class="lhc_icon lhc_b35 mr1">35</i>
		        	<i class="lhc_icon lhc_b40 mr1">40</i>
		        	<i class="lhc_icon lhc_b45 mr1">45</i>
		        	<i class="lhc_icon lhc_b46 mr1">46</i>
		        </td> 
		        <td id="play_odds_708701" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708701" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_708702" class="name">蓝波</td> 
		        <td id="play_desc_708702" class="qiu">
		        	<i class="lhc_icon lhc_b03 mr1">03</i>
		        	<i class="lhc_icon lhc_b04 mr1">04</i>
		        	<i class="lhc_icon lhc_b09 mr1">09</i>
		        	<i class="lhc_icon lhc_b10 mr1">10</i>
		        	<i class="lhc_icon lhc_b14 mr1">14</i>
		        	<i class="lhc_icon lhc_b15 mr1">15</i>
		        	<i class="lhc_icon lhc_b20 mr1">20</i>
		        	<i class="lhc_icon lhc_b25 mr1">25</i>
		        	<i class="lhc_icon lhc_b26 mr1">26</i>
		        	<i class="lhc_icon lhc_b31 mr1">31</i>
		        	<i class="lhc_icon lhc_b36 mr1">36</i>
		        	<i class="lhc_icon lhc_b37 mr1">37</i>
		        	<i class="lhc_icon lhc_b41 mr1">41</i>
		        	<i class="lhc_icon lhc_b42 mr1">42</i>
		        	<i class="lhc_icon lhc_b47 mr1">47</i>
		        	<i class="lhc_icon lhc_b48 mr1">48</i>
		        </td> 
		        <td id="play_odds_708702" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708702" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_708703" class="name">绿波</td> 
		        <td id="play_desc_708703" class="qiu">
		        	<i class="lhc_icon lhc_b05 mr1">05</i>
		        	<i class="lhc_icon lhc_b06 mr1">06</i>
		        	<i class="lhc_icon lhc_b11 mr1">11</i>
		        	<i class="lhc_icon lhc_b16 mr1">16</i>
		        	<i class="lhc_icon lhc_b17 mr1">17</i>
		        	<i class="lhc_icon lhc_b21 mr1">21</i>
		        	<i class="lhc_icon lhc_b22 mr1">22</i>
		        	<i class="lhc_icon lhc_b27 mr1">27</i>
		        	<i class="lhc_icon lhc_b28 mr1">28</i>
		        	<i class="lhc_icon lhc_b32 mr1">32</i>
		        	<i class="lhc_icon lhc_b33 mr1">33</i>
		        	<i class="lhc_icon lhc_b38 mr1">38</i>
		        	<i class="lhc_icon lhc_b39 mr1">39</i>
		        	<i class="lhc_icon lhc_b43 mr1">43</i>
		        	<i class="lhc_icon lhc_b44 mr1">44</i>
		        	<i class="lhc_icon lhc_b49 mr1">49</i>
		        </td> 
		        <td id="play_odds_708703" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708703" class="amount"><input type="text" /></td> 
		       </tr> 
		      </tbody> 
		     </table> 
		     
		     
		     <table class="u-table2 play_tab_87 mt10"> 
		      <thead> 
		       <tr> 
		        <th style="width: 4%;">半波</th> 
		        <th style="width: 6%">赔率</th> 
		        <th style="width: 10%">金额</th>
		         
		        <th style="width: 4%">半波</th> 
		        <th style="width: 6%">赔率</th> 
		        <th style="width: 8%">金额</th> 
		        
		        <th style="width: 4%">半波</th> 
		        <th style="width: 6%">赔率</th> 
		        <th style="width: 8%">金额</th> 
		       </tr> 
		      </thead> 
		      <tbody> 
		       <tr> 
		        <td id="play_name_708704" class="name">红单</td> 
		        <td id="play_odds_708704" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708704" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708708" class="name">蓝单</td> 
		        <td id="play_odds_708708" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708708" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708712" class="name">绿单</td> 
		        <td id="play_odds_708712" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708712" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_708705" class="name">红双</td> 
		        <td id="play_odds_708705" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708705" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708709" class="name">蓝双</td> 
		        <td id="play_odds_708709" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708709" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708713" class="name">绿双</td> 
		        <td id="play_odds_708713" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708713" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_708706" class="name">红大</td> 
		        <td id="play_odds_708706" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708706" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708710" class="name">蓝大</td> 
		        <td id="play_odds_708710" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708710" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708714" class="name">绿大</td> 
		        <td id="play_odds_708714" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708714" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_708707" class="name">红小</td> 
		        <td id="play_odds_708707" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708707" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708711" class="name">蓝小</td> 
		        <td id="play_odds_708711" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708711" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708715" class="name">绿小</td> 
		        <td id="play_odds_708715" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708715" class="amount"><input type="text" /></td> 
		       </tr> 
		      </tbody>
		     </table>
		     
		     <table class="u-table2 play_tab_87 mt10"> 
		      <thead> 
		       <tr> 
		        <th style="width: 4%;">半半波</th> 
		        <th style="width: 6%">赔率</th> 
		        <th style="width: 10%">金额</th>
		         
		        <th style="width: 4%">半半波</th> 
		        <th style="width: 6%">赔率</th> 
		        <th style="width: 8%">金额</th> 
		        
		        <th style="width: 4%">半半波</th> 
		        <th style="width: 6%">赔率</th> 
		        <th style="width: 8%">金额</th> 
		       </tr> 
		      </thead> 
		      <tbody> 
		       <tr> 
		        <td id="play_name_708716" class="name">红大单</td> 
		        <td id="play_odds_708716" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708716" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708720" class="name">蓝大单</td> 
		        <td id="play_odds_708720" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708720" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708724" class="name">绿大单</td> 
		        <td id="play_odds_708724" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708724" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_708717" class="name">红大双</td> 
		        <td id="play_odds_708717" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708717" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708721" class="name">蓝大双</td> 
		        <td id="play_odds_708721" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708721" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708725" class="name">绿大双</td> 
		        <td id="play_odds_708725" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708725" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_708718" class="name">红小单</td> 
		        <td id="play_odds_708718" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708718" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708722" class="name">蓝小单</td> 
		        <td id="play_odds_708722" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708722" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708726" class="name">绿小单</td> 
		        <td id="play_odds_708726" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708726" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_708719" class="name">红小双</td> 
		        <td id="play_odds_708719" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708719" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708723" class="name">蓝小双</td> 
		        <td id="play_odds_708723" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708723" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708727" class="name">绿小双</td> 
		        <td id="play_odds_708727" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708727" class="amount"><input type="text" /></td> 
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

