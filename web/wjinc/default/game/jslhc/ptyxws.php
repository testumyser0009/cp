
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
   		<ul class="tab" style="height: 35px;">
    		<li class="tab_title02" id="tm_tabs">
		    	<a class="on" href="javascript:LHC.showTab('#TM_A_TAB');" type="A" id="TM_A_TAB">一肖</a>
				<a href="javascript:LHC.showTab('#TM_B_TAB');" type="B" id="TM_B_TAB">尾数</a>
    		</li>
    	</ul>
    	<div class="cont-col3-bd" id="bet_tab"> 
	       <div id="TM_A_PAGE">
    		<table class="u-table2 play_tab_88 "> 
		      <thead> 
		       <tr> 
		        <th>生肖</th> 
		        <th style="width: 200px">号</th> 
		        <th>赔率</th>
		        <th>金额</th>
		         
		        <th>生肖</th> 
		        <th style="width: 200px">号</th> 
		        <th>赔率</th>
		        <th>金额</th> 
		       </tr> 
		      </thead> 
		      <tbody> 
		       <tr> 
		        <td id="play_name_709401" class="name">鼠</td> 
		        <td id="play_desc_709401" class="qiu"><script>LHC.getSxList("鼠","#play_desc_709401")</script></td> 
		        <td id="play_odds_709401" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709401" class="amount"><input type="text" /></td>
		         
		        <td id="play_name_709407" class="name">马</td> 
		        <td id="play_desc_709407" class="qiu"><script>LHC.getSxList("马","#play_desc_709407")</script></td> 
		        <td id="play_odds_709407" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709407" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_709402" class="name">牛</td> 
		        <td id="play_desc_709402" class="qiu"><script>LHC.getSxList("牛","#play_desc_709402")</script></td> 
		        <td id="play_odds_709402" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709402" class="amount"><input type="text" /></td>
		         
		        <td id="play_name_709408" class="name">羊</td> 
		        <td id="play_desc_709408" class="qiu"><script>LHC.getSxList("羊","#play_desc_709408")</script></td> 
		        <td id="play_odds_709408" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709408" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_709403" class="name">虎</td> 
		        <td id="play_desc_709403" class="qiu"><script>LHC.getSxList("虎","#play_desc_709403")</script></td> 
		        <td id="play_odds_709403" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709403" class="amount"><input type="text" /></td>
		         
		        <td id="play_name_709409" class="name">猴</td> 
		        <td id="play_desc_709409" class="qiu"><script>LHC.getSxList("猴","#play_desc_709409")</script></td> 
		        <td id="play_odds_709409" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709409" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_709404" class="name">兔</td> 
		        <td id="play_desc_709404" class="qiu"><script>LHC.getSxList("兔","#play_desc_709404")</script></td> 
		        <td id="play_odds_709404" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709404" class="amount"><input type="text" /></td>
		         
		        <td id="play_name_709410" class="name">鸡</td> 
		        <td id="play_desc_709410" class="qiu"><script>LHC.getSxList("鸡","#play_desc_709410")</script></td> 
		        <td id="play_odds_709410" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709410" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_709405" class="name">龙</td> 
		        <td id="play_desc_709405" class="qiu"><script>LHC.getSxList("龙","#play_desc_709405")</script></td> 
		        <td id="play_odds_709405" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709405" class="amount"><input type="text" /></td>
		         
		        <td id="play_name_709411" class="name">狗</td> 
		        <td id="play_desc_709411" class="qiu"><script>LHC.getSxList("狗","#play_desc_709411")</script></td> 
		        <td id="play_odds_709411" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709411" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_709406" class="name">蛇</td> 
		        <td id="play_desc_709406" class="qiu"><script>LHC.getSxList("蛇","#play_desc_709406")</script></td> 
		        <td id="play_odds_709406" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709406" class="amount"><input type="text" /></td>
		         
		        <td id="play_name_709412" class="name">猪</td> 
		        <td id="play_desc_709412" class="qiu"><script>LHC.getSxList("猪","#play_desc_709412")</script></td> 
		        <td id="play_odds_709412" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709412" class="amount"><input type="text" /></td> 
		       </tr> 
		      </tbody> 
		     </table> 
		    </div>
		    <div id="TM_B_PAGE" class="hide">
    		<table class="u-table2 play_tab_94 "> 
		      <thead> 
		       <tr> 
		        <th>生肖</th> 
		        <th style="width: 200px">号</th> 
		        <th>赔率</th>
		        <th>金额</th>
		         
		        <th>生肖</th> 
		        <th style="width: 200px">号</th> 
		        <th>赔率</th>
		        <th>金额</th> 
		       </tr> 
		      </thead> 
		      <tbody> 
		       <tr> 
		        <td id="play_name_709413" class="name">0尾</td> 
		        <td id="play_desc_709413" class="qiu">
		        	<i class="lhc_icon lhc_b10 mr2">10</i>
		        	<i class="lhc_icon lhc_b20 mr2">20</i>
		        	<i class="lhc_icon lhc_b30 mr2">30</i>
		        	<i class="lhc_icon lhc_b40 mr2">40</i>
		       	</td> 
		        <td id="play_odds_709413" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709413" class="amount"><input type="text" /></td>
		         
		        <td id="play_name_709418" class="name">5尾</td> 
		        <td id="play_desc_709418" class="qiu">
		        	<i class="lhc_icon lhc_b05 mr2">05</i>
		        	<i class="lhc_icon lhc_b15 mr2">15</i>
		        	<i class="lhc_icon lhc_b25 mr2">25</i>
		        	<i class="lhc_icon lhc_b35 mr2">35</i>
		        	<i class="lhc_icon lhc_b45 mr2">45</i>
				</td> 
		        <td id="play_odds_709418" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709418" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_709414" class="name">1尾</td> 
		        <td id="play_desc_709414" class="qiu">
		        	<i class="lhc_icon lhc_b01 mr2">01</i>
		        	<i class="lhc_icon lhc_b11 mr2">11</i>
		        	<i class="lhc_icon lhc_b21 mr2">21</i>
		        	<i class="lhc_icon lhc_b31 mr2">31</i>
		        	<i class="lhc_icon lhc_b41 mr2">41</i>
				</td> 
		        <td id="play_odds_709414" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709414" class="amount"><input type="text" /></td>
		         
		        <td id="play_name_709419" class="name">6尾</td> 
		        <td id="play_desc_709419" class="qiu">
		        	<i class="lhc_icon lhc_b06 mr2">06</i>
		        	<i class="lhc_icon lhc_b16 mr2">16</i>
		        	<i class="lhc_icon lhc_b26 mr2">26</i>
		        	<i class="lhc_icon lhc_b36 mr2">36</i>
		        	<i class="lhc_icon lhc_b46 mr2">46</i>
				</td> 
		        <td id="play_odds_709419" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709419" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_709415" class="name">2尾</td> 
		        <td id="play_desc_709415" class="qiu">
		        	<i class="lhc_icon lhc_b02 mr2">02</i>
		        	<i class="lhc_icon lhc_b12 mr2">12</i>
		        	<i class="lhc_icon lhc_b22 mr2">22</i>
		        	<i class="lhc_icon lhc_b32 mr2">32</i>
		        	<i class="lhc_icon lhc_b42 mr2">42</i>
				</td> 
		        <td id="play_odds_709415" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709415" class="amount"><input type="text" /></td>
		         
		        <td id="play_name_709420" class="name">7尾</td> 
		        <td id="play_desc_709420" class="qiu">
		        	<i class="lhc_icon lhc_b07 mr2">07</i>
		        	<i class="lhc_icon lhc_b17 mr2">17</i>
		        	<i class="lhc_icon lhc_b27 mr2">27</i>
		        	<i class="lhc_icon lhc_b37 mr2">37</i>
		        	<i class="lhc_icon lhc_b47 mr2">47</i>
				</td> 
		        <td id="play_odds_709420" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709420" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_709416" class="name">3尾</td> 
		        <td id="play_desc_709416" class="qiu">
		        	<i class="lhc_icon lhc_b03 mr2">03</i>
		        	<i class="lhc_icon lhc_b13 mr2">13</i>
		        	<i class="lhc_icon lhc_b23 mr2">23</i>
		        	<i class="lhc_icon lhc_b33 mr2">33</i>
		        	<i class="lhc_icon lhc_b43 mr2">43</i>
				</td> 
		        <td id="play_odds_709416" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709416" class="amount"><input type="text" /></td>
		         
		        <td id="play_name_709421" class="name">8尾</td> 
		        <td id="play_desc_709421" class="qiu">
		        	<i class="lhc_icon lhc_b08 mr2">08</i>
		        	<i class="lhc_icon lhc_b18 mr2">18</i>
		        	<i class="lhc_icon lhc_b28 mr2">28</i>
		        	<i class="lhc_icon lhc_b38 mr2">38</i>
		        	<i class="lhc_icon lhc_b48 mr2">48</i>
		        </td> 
		        <td id="play_odds_709421" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709421" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_709417" class="name">4尾</td> 
		        <td id="play_desc_709417" class="qiu">
		        	<i class="lhc_icon lhc_b04 mr2">04</i>
		        	<i class="lhc_icon lhc_b14 mr2">14</i>
		        	<i class="lhc_icon lhc_b24 mr2">24</i>
		        	<i class="lhc_icon lhc_b34 mr2">34</i>
		        	<i class="lhc_icon lhc_b44 mr2">44</i>
				</td> 
		        <td id="play_odds_709417" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709417" class="amount"><input type="text" /></td>
		         
		        <td id="play_name_709422" class="name">9尾</td> 
		        <td id="play_desc_709422" class="qiu">
		        	<i class="lhc_icon lhc_b09 mr2">09</i>
		        	<i class="lhc_icon lhc_b19 mr2">19</i>
		        	<i class="lhc_icon lhc_b29 mr2">29</i>
		        	<i class="lhc_icon lhc_b39 mr2">39</i>
		        	<i class="lhc_icon lhc_b49 mr2">49</i>
		        </td> 
		        <td id="play_odds_709422" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_709422" class="amount"><input type="text" /></td> 
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


