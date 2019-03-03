
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
<script type="text/javascript" src="/static/lib/util/error.js" async></script>

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
     <table class="u-table2  play_tab_21"> 
      <thead> 
       <tr> 
        <th colspan="12">总和、总和过关</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_652101" class="name">总和大</td> 
        <td id="play_odds_652101" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652101" class="amount"><input type="text" /></td> 
        
        <td id="play_name_652102" class="name">总和小</td> 
        <td id="play_odds_652102" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652102" class="amount"><input type="text" /></td>
         
        <td id="play_name_652103" class="name">总和单</td> 
        <td id="play_odds_652103" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652103" class="amount"><input type="text" /></td>
         
        <td id="play_name_652104" class="name">总和双</td> 
        <td id="play_odds_652104" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652104" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_652105" class="name">总和810</td> 
        <td id="play_odds_652105" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652105" class="amount"><input type="text" /></td> 
        
        <td class="name not-event" colspan="9"></td> 
       </tr> 
       <tr> 
        <td id="play_name_652106" class="name">总大单</td> 
        <td id="play_odds_652106" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652106" class="amount"><input type="text" /></td> 
        
        <td id="play_name_652107" class="name">总大双</td> 
        <td id="play_odds_652107" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652107" class="amount"><input type="text" /></td>
         
        <td id="play_name_652108" class="name">总小单</td> 
        <td id="play_odds_652108" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652108" class="amount"><input type="text" /></td>
         
        <td id="play_name_652109" class="name">总小双</td> 
        <td id="play_odds_652109" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652109" class="amount"><input type="text" /></td> 
       </tr> 
      </tbody> 
     </table> 
      <table class="u-table2  play_tab_23 mt10"> 
      <thead> 
       <tr> 
        <th colspan="9">前后和</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_652301" class="name">前(多)</td> 
        <td id="play_odds_652301" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652301" class="amount"><input type="text" /></td> 
        
        <td id="play_name_652302" class="name">后(多)</td> 
        <td id="play_odds_652302" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652302" class="amount"><input type="text" /></td>
         
        <td id="play_name_652303" class="name">前后(和)</td> 
        <td id="play_odds_652303" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652303" class="amount"><input type="text" /></td>
       </tr> 
      </tbody> 
     </table> 
      <table class="u-table2  play_tab_24 mt10"> 
      <thead> 
       <tr> 
        <th colspan="9">单双和</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_652401" class="name">单多</td> 
        <td id="play_odds_652401" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652401" class="amount"><input type="text" /></td> 
        
        <td id="play_name_652402" class="name">双(多)</td> 
        <td id="play_odds_652402" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652402" class="amount"><input type="text" /></td>
         
        <td id="play_name_652403" class="name">单双(和)</td> 
        <td id="play_odds_652403" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652403" class="amount"><input type="text" /></td>
       </tr> 
      </tbody> 
     </table> 
      <table class="u-table2  play_tab_25 mt10"> 
      <thead> 
       <tr> 
        <th colspan="15">五行</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_652501" class="name">金</td> 
        <td id="play_odds_652501" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652501" class="amount"><input type="text" /></td> 
        
        <td id="play_name_652502" class="name">木</td> 
        <td id="play_odds_652502" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652502" class="amount"><input type="text" /></td>
         
        <td id="play_name_652503" class="name">水</td> 
        <td id="play_odds_652503" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652503" class="amount"><input type="text" /></td>
         
        <td id="play_name_652504" class="name">火</td> 
        <td id="play_odds_652504" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652504" class="amount"><input type="text" /></td>
        
        <td id="play_name_652505" class="name">土</td> 
        <td id="play_odds_652505" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652505" class="amount"><input type="text" /></td> 
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
		    
					    

					 <div id="game_count"> 
						<div class="count-wrap">
	<table class="u-table2">
		<thead>
			<tr id="stat_type">
				<th class="u-tb3-th2 select" id="stat_zhs_btn" type="zhs"
					onclick="StatGame.showStatType(this)">总和数</th>
				<th class="u-tb3-th2" id="stat_zhdx_btn" type="zhdx"
					onclick="StatGame.showStatType(this)">总和大小</th>
				<th class="u-tb3-th2" id="stat_zhds_btn" type="zhds"
					onclick="StatGame.showStatType(this)">总和单双</th>
				<th class="u-tb3-th2" id="stat_wx_btn" type="wx"
					onclick="StatGame.showStatType(this)">五行</th>
				<th class="u-tb3-th2" id="stat_qhh_btn" type="qhh"
					onclick="StatGame.showStatType(this)">前后和</th>
				<th class="u-tb3-th2" id="stat_dsh_btn" type="dsh"
					onclick="StatGame.showStatType(this)">单双和</th>
			</tr>
		</thead>
	</table>
	<table class="u-table4 table-td-valign-top">
		<tbody>
			<tr id="qiu1_zhs" class="stattd "></tr>
			<tr id="qiu1_zhdx" class="stattd hide"></tr>
			<tr id="qiu1_zhds" class="stattd hide"></tr>
			<tr id="qiu1_wx" class="stattd hide"></tr>
			<tr id="qiu1_qhh" class="stattd hide"></tr>
			<tr id="qiu1_dsh" class="stattd hide"></tr>
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
<script type="text/javascript" src="/static/js/lottery/bjkl8/stat.js" async></script>
</body>
</html>