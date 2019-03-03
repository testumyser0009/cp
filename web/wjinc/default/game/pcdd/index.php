
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
						     <table class="u-table2 play_tab_112"> 
						      <thead> 
						       <tr> 
						        <th colspan="12">混合</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						       <tr> 
						        <td id="play_name_6611201" class="name">大</td> 
						        <td id="play_odds_6611201" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611201" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611202" class="name">小</td> 
						        <td id="play_odds_6611202" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611202" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611203" class="name">单</td> 
						        <td id="play_odds_6611203" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611203" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611204" class="name">双</td> 
						        <td id="play_odds_6611204" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611204" class="amount"><input type="text" /></td> 
						       </tr> 
						       <!-- 
						       <tr> 
						        <td id="play_name_6611205" class="name">大单</td> 
						        <td id="play_odds_6611205" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611205" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611206" class="name">大双</td> 
						        <td id="play_odds_6611206" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611206" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611207" class="name">小单</td> 
						        <td id="play_odds_6611207" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611207" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611208" class="name">小双</td> 
						        <td id="play_odds_6611208" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611208" class="amount"><input type="text" /></td> 
						       </tr> 
						        -->
						       <tr> 
						        <td id="play_name_6611209" class="name">极大</td> 
						        <td id="play_odds_6611209" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611209" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611210" class="name">极小</td> 
						        <td id="play_odds_6611210" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611210" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611211" class="name">豹子</td> 
						        <td id="play_odds_6611211" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611211" class="amount"><input type="text" /></td>
						         
						        <td id="" class="name"></td> 
						        <td id="" class="odds" class="odds"><span class="c-txt3"></span></td> 
						        <td id="" class="amount"></td> 
						       </tr> 
						      </tbody> 
						     </table> 
						     
						     
						     <table class="u-table2 play_tab_113 " style="margin-top: 10px;"> 
						      <thead> 
						       <tr> 
						        <th colspan="9">波色</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						       <tr> 
						        <td id="play_name_6611301" class="name">红波</td> 
						        <td id="play_odds_6611301" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611301" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611302" class="name">绿波</td> 
						        <td id="play_odds_6611302" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611302" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611303" class="name">蓝波</td> 
						        <td id="play_odds_6611303" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611303" class="amount"><input type="text" /></td>
						         
						       </tr> 
						      </tbody> 
						     </table>
						     
						     
						     <table class="u-table2 play_tab_114" style="margin-top: 10px;"> 
						      <thead> 
						       <tr> 
						        <th colspan="12">持码</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						       <tr> 
						        <td id="play_name_6611400" class="name">0</td> 
						        <td id="play_odds_6611400" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611400" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611407" class="name">7</td> 
						        <td id="play_odds_6611407" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611407" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611414" class="name">14</td> 
						        <td id="play_odds_6611414" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611414" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611421" class="name">21</td> 
						        <td id="play_odds_6611421" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611421" class="amount"><input type="text" /></td> 
						       </tr> 
						       
						       
						       <tr> 
						        <td id="play_name_6611401" class="name">1</td> 
						        <td id="play_odds_6611401" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611401" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611408" class="name">8</td> 
						        <td id="play_odds_6611408" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611408" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611415" class="name">15</td> 
						        <td id="play_odds_6611415" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611415" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611422" class="name">22</td> 
						        <td id="play_odds_6611422" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611422" class="amount"><input type="text" /></td> 
						       </tr> 
						       
						       
						       <tr> 
						        <td id="play_name_6611402" class="name">2</td> 
						        <td id="play_odds_6611402" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611402" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611409" class="name">9</td> 
						        <td id="play_odds_6611409" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611409" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611416" class="name">16</td> 
						        <td id="play_odds_6611416" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611416" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611423" class="name">23</td> 
						        <td id="play_odds_6611423" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611423" class="amount"><input type="text" /></td> 
						       </tr> 
						       
						       
						       <tr> 
						        <td id="play_name_6611403" class="name">3</td> 
						        <td id="play_odds_6611403" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611403" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611410" class="name">10</td> 
						        <td id="play_odds_6611410" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611410" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611417" class="name">17</td> 
						        <td id="play_odds_6611417" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611417" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611424" class="name">24</td> 
						        <td id="play_odds_6611424" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611424" class="amount"><input type="text" /></td> 
						       </tr> 
						       
						       
						       <tr> 
						        <td id="play_name_6611404" class="name">4</td> 
						        <td id="play_odds_6611404" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611404" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611411" class="name">11</td> 
						        <td id="play_odds_6611411" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611411" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611418" class="name">18</td> 
						        <td id="play_odds_6611418" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611418" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611425" class="name">25</td> 
						        <td id="play_odds_6611425" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611425" class="amount"><input type="text" /></td> 
						       </tr> 
						       
						       
						       <tr> 
						        <td id="play_name_6611405" class="name">5</td> 
						        <td id="play_odds_6611405" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611405" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611412" class="name">12</td> 
						        <td id="play_odds_6611412" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611412" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611419" class="name">19</td> 
						        <td id="play_odds_6611419" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611419" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611426" class="name">26</td> 
						        <td id="play_odds_6611426" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611426" class="amount"><input type="text" /></td> 
						       </tr> 
						       
						       <tr> 
						        <td id="play_name_6611406" class="name">6</td> 
						        <td id="play_odds_6611406" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611406" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611413" class="name">13</td> 
						        <td id="play_odds_6611413" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611413" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611420" class="name">20</td> 
						        <td id="play_odds_6611420" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611420" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611427" class="name">27</td> 
						        <td id="play_odds_6611427" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611427" class="amount"><input type="text" /></td> 
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