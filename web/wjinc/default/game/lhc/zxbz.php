
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
    <div id="zxbz_tab"> 
    	<div class="cont-col3-bd" id="bet_tab"> 
    		<table class="u-table2 play_tab_98" > 
		      <thead> 
		       <tr> 
		        <th width="50%">种类</th> 
		        <th>自选不中</th> 
		       </tr> 
		      </thead> 
		      <tbody>
		      	 <tr> 
			        <td class="not-event">赔率</td> 
			        <td class="not-event"><span class="c-txt3" id="lhc_odds" start-play-id="709800"  min-num="5" max-num="12">--</span></td>
			     </tr> 
		      </tbody>
		    </table>
    		<table class="u-table2 mt10" id="lhc_checkboxs"> 
		      <thead> 
		       <tr> 
		        <th>号</th> 
		        <th>勾选</th> 
		         
		        <th>号</th> 
		        <th>勾选</th> 
		         
		        <th>号</th> 
		        <th>勾选</th> 
		         
		        <th>号</th> 
		        <th>勾选</th> 
		         
		        <th>号</th> 
		        <th>勾选</th> 
		       </tr> 
		      </thead> 
		      <tbody> 
		       <tr> 
		        <td class="name not-event"><i class="lhc_icon lhc_b01">01</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="1" id="zxbz_1_value" type="1" /></td>
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b11">11</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="11" id="hx_11_value" type="11" /></td> 
		        
		        <td class="name not-event"><i class="lhc_icon lhc_b21">21</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="21" id="hx_21_value" type="21" /></td>
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b31">31</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="31" id="hx_31_value" type="31" /></td> 
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b41">41</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="41" id="hx_41_value" type="41" /></td> 
		       </tr> 
		       <tr> 
		        <td class="name not-event"><i class="lhc_icon lhc_b02">02</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="2" id="zxbz_2_value" type="2"></td>
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b12">12</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="12" id="hx_12_value" type="12" /></td> 
		        
		        <td class="name not-event"><i class="lhc_icon lhc_b22">22</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="22" id="hx_22_value" type="22" /></td>
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b32">32</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="32" id="hx_32_value" type="32" /></td> 
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b42">42</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="42" id="hx_42_value" type="42" /></td> 
		       </tr> 
		       <tr> 
		        <td class="name not-event"><i class="lhc_icon lhc_b03">03</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="3" id="zxbz_3_value" type="3"></td>
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b13">13</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="13" id="hx_13_value" type="13" /></td> 
		        
		        <td class="name not-event"><i class="lhc_icon lhc_b23">23</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="23" id="hx_23_value" type="23" /></td>
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b33">33</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="33" id="hx_33_value" type="33" /></td> 
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b43">43</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="43" id="hx_43_value" type="43" /></td> 
		       </tr> 
		       <tr> 
		        <td class="name not-event"><i class="lhc_icon lhc_b04">04</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="4" id="zxbz_4_value" type="4"></td>
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b14">14</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="14" id="hx_14_value" type="14" /></td> 
		        
		        <td class="name not-event"><i class="lhc_icon lhc_b24">24</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="24" id="hx_24_value" type="24" /></td>
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b34">34</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="34" id="hx_34_value" type="34" /></td> 
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b44">44</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="44" id="hx_44_value" type="44" /></td> 
		       </tr> 
		       <tr> 
		        <td class="name not-event"><i class="lhc_icon lhc_b05">05</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="5" id="zxbz_5_value" type="5"></td>
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b15">15</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="15" id="hx_15_value" type="15" /></td> 
		        
		        <td class="name not-event"><i class="lhc_icon lhc_b25">25</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="25" id="hx_25_value" type="25" /></td>
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b35">35</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="35" id="hx_35_value" type="35" /></td> 
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b45">45</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="45" id="hx_45_value" type="45" /></td> 
		       </tr> 
		       <tr> 
		        <td class="name not-event"><i class="lhc_icon lhc_b06">06</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="6" id="zxbz_6_value" type="6"></td>
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b16">16</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="16" id="hx_16_value" type="16" /></td> 
		        
		        <td class="name not-event"><i class="lhc_icon lhc_b26">26</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="26" id="hx_26_value" type="26" /></td>
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b36">36</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="36" id="hx_36_value" type="36" /></td> 
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b46">46</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="46" id="hx_46_value" type="46" /></td> 
		       </tr> 
		       <tr> 
		        <td class="name not-event"><i class="lhc_icon lhc_b07">07</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="7" id="zxbz_7_value" type="7" /></td>
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b17">17</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="17" id="hx_17_value" type="17" /></td> 
		        
		        <td class="name not-event"><i class="lhc_icon lhc_b27">27</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="27" id="hx_27_value" type="27" /></td>
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b37">37</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="37" id="hx_37_value" type="37" /></td> 
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b47">47</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="47" id="hx_47_value" type="47" /></td> 
		       </tr> 
		       <tr> 
		        <td class="name not-event"><i class="lhc_icon lhc_b08">08</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="8" id="zxbz_8_value" type="8" /></td>
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b18">18</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="18" id="hx_18_value" type="18" /></td> 
		        
		        <td class="name not-event"><i class="lhc_icon lhc_b28">28</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="28" id="hx_28_value" type="28" /></td>
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b38">38</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="38" id="hx_38_value" type="38" /></td> 
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b48">48</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="48" id="hx_48_value" type="48" /></td> 
		       </tr> 
		       <tr> 
		        <td class="name not-event"><i class="lhc_icon lhc_b09">09</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="9" id="zxbz_9_value" type="9" /></td>
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b19">19</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="19" id="hx_19_value" type="19" /></td> 
		        
		        <td class="name not-event"><i class="lhc_icon lhc_b29">29</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="29" id="hx_29_value" type="29" /></td>
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b39">39</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="39" id="hx_39_value" type="39" /></td> 
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b49">49</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="49" id="hx_49_value" type="49" /></td> 
		       </tr> 
		       <tr> 
		        <td class="name not-event"><i class="lhc_icon lhc_b10">10</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="10" id="zxbz_10_value" type="10" /></td>
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b20">20</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="20" id="hx_20_value" type="20" /></td> 
		        
		        <td class="name not-event"><i class="lhc_icon lhc_b30">30</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="30" id="hx_30_value" type="30" /></td>
		         
		        <td class="name not-event"><i class="lhc_icon lhc_b40">40</i></td> 
		        <td class="checkbox_td"><input type="checkbox" value="40" id="hx_40_value" type="40" /></td> 
		         
		        <td class="name not-event" colspan="2"></td> 
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
<script type="text/javascript">
	parent.UserBet.playType = "HX";
</script>
</body>
</html>

