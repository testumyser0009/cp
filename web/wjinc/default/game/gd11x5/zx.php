
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
    	<table class="u-table2"> 
      <thead id="lm_radios"> 
       <tr> 
        <th class="radio_td" onclick="$('#zx_table_3').hide();"><input type="radio" name="lm_type" value="213701" num="2" checked="checked" /></th> 
        <th class="radio_td" onclick="$('#zx_table_3').show();"><input type="radio" name="lm_type" value="213702" num="3" /></th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td class="odds not-event" id="play_name_213701">前二直选</td> 
        <td class="odds not-event" id="play_name_213702">前三直选</td> 
       </tr> 
       <tr> 
        <td class="odds not-event" id="play_odds_213701" class="odds"><span class="c-txt3">--</span></td> 
        <td class="odds not-event" id="play_odds_213702" class="odds"><span class="c-txt3">--</span></td> 
       </tr> 
      </tbody>
      </table>
     	 <div id="zx_checkboxs">

     	 <table class="u-table2 play_tab_zx_checkbox mt10" id="zx_table_1"> 
	      <thead> 
	       <tr>
	       	<th colspan="12">第一球</th>
	       </tr>
	      </thead> 
	      <tbody id="zx_checkbox_1"> 
	       <tr> 
	        <td class="name not-event"><span class="ball c-b1">1</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_1_1" type="checkbox" value="1" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">2</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_1_2" type="checkbox" value="2" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">3</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_1_3" type="checkbox" value="3" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">4</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_1_4" type="checkbox" value="4" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">5</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_1_5" type="checkbox" value="5" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">6</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_1_6" type="checkbox" value="6" />
	        </td>
	       </tr> 
	       <tr> 
	        <td class="name not-event"><span class="ball c-b1">7</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_1_7" type="checkbox" value="7" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">8</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_1_8" type="checkbox" value="8" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">9</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_1_9" type="checkbox" value="9" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">10</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_1_10" type="checkbox" value="10" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">11</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_1_11" type="checkbox" value="11" />
	        </td>
	        <td class="name not-event" colspan="2"></td> 
	       </tr> 
	      </tbody>
	      </table>
     	 <table class="u-table2 play_tab_zx_checkbox mt5" id="zx_table_2"> 
	      <thead> 
	       <tr>
	       	<th colspan="12">第二球</th>
	       </tr>
	      </thead> 
	      <tbody id="zx_checkbox_2"> 
	       <tr> 
	        <td class="name not-event"><span class="ball c-b1">1</span></td> 
	       	<td class="checkbox_td">
	        	<input id="zx_q_2_1" type="checkbox" value="1" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">2</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_2_2" type="checkbox" value="2" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">3</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_2_3" type="checkbox" value="3" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">4</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_2_4" type="checkbox" value="4" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">5</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_2_5" type="checkbox" value="5" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">6</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_2_6" type="checkbox" value="6" />
	        </td>
	       </tr> 
	       <tr> 
	        <td class="name not-event"><span class="ball c-b1">7</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_2_7" type="checkbox" value="7" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">8</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_2_8" type="checkbox" value="8" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">9</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_2_9" type="checkbox" value="9" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">10</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_2_10" type="checkbox" value="10" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">11</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_2_11" type="checkbox" value="11" />
	        </td>
	        <td class="name not-event" colspan="2"></td> 
	       </tr> 
	      </tbody>
	      </table>
     	 <table class="u-table2 play_tab_zx_checkbox hide mt5" id="zx_table_3"> 
	      <thead> 
	       <tr>
	       	<th colspan="12">第三球</th>
	       </tr>
	      </thead> 
	      <tbody id="zx_checkbox_3"> 
	       <tr> 
	        <td class="name not-event"><span class="ball c-b1">1</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_3_1" type="checkbox" value="1" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">2</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_3_2" type="checkbox" value="2" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">3</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_3_3" type="checkbox" value="3" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">4</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_3_4" type="checkbox" value="4" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">5</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_3_5" type="checkbox" value="5" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">6</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_3_6" type="checkbox" value="6" />
	        </td>
	       </tr> 
	       <tr> 
	        <td class="name not-event"><span class="ball c-b1">7</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_3_7" type="checkbox" value="7" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">8</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_3_8" type="checkbox" value="8" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">9</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_3_9" type="checkbox" value="9" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1" >10</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_3_10" type="checkbox" value="10" />
	        </td>
	        <td class="name not-event"><span class="ball c-b1">11</span></td> 
	        <td class="checkbox_td">
	        	<input id="zx_q_3_11" type="checkbox" value="11" />
	        </td>
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
			</tr>
		</thead>
	</table>
	<table class="u-table4">
		<tbody>
			<tr>
				<td class="f1 fwb">1</td>
				<td class="f1 fwb">2</td>
				<td class="f1 fwb">3</td>
				<td class="f1 fwb">4</td>
				<td class="f1 fwb">5</td>
				<td class="f1 fwb">6</td>
				<td class="f1 fwb">7</td>
				<td class="f1 fwb">8</td>
				<td class="f1 fwb">9</td>
				<td class="f1 fwb">10</td>
				<td class="f1 fwb">11</td>
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
				<th class="u-tb3-th2" id="stat_zhdx_btn" type="zhdx"
					onclick="StatGame.showStatType(this)">总和大小</th>
				<th class="u-tb3-th2" id="stat_zhds_btn" type="zhds"
					onclick="StatGame.showStatType(this)">总和单双</th>
				<th class="u-tb3-th2" id="stat_zhws_btn" type="zhws"
					onclick="StatGame.showStatType(this)">总和尾数大小</th>
				<th class="u-tb3-th2" id="stat_lh_btn" type="lh"
					onclick="StatGame.showStatType(this)">龙虎</th>
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
			<tr id="qiu1_size" class="stattd hide"></tr>
			<tr id="qiu2_size" class="stattd hide"></tr>
			<tr id="qiu3_size" class="stattd hide"></tr>
			<tr id="qiu4_size" class="stattd hide"></tr>
			<tr id="qiu5_size" class="stattd hide"></tr>
			<tr id="qiu1_firsts" class="stattd hide"></tr>
			<tr id="qiu2_firsts" class="stattd hide"></tr>
			<tr id="qiu3_firsts" class="stattd hide"></tr>
			<tr id="qiu4_firsts" class="stattd hide"></tr>
			<tr id="qiu5_firsts" class="stattd hide"></tr>
			<tr id="qiu1_zhdx" class="stattd hide"></tr>
			<tr id="qiu1_zhds" class="stattd hide"></tr>
			<tr id="qiu1_zhws" class="stattd hide"></tr>
			<tr id="qiu1_lh" class="stattd hide"></tr>
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
<script type="text/javascript" src="/static/js/lottery/gd11x5/stat.js" async="async"></script>
<script type="text/javascript">
	parent.UserBet.playType = "ZX";
</script>
</body>
</html>  


