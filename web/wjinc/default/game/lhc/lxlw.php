
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
		    	<a class="on" href="javascript:LHC.showTab('#TM_A_TAB');" type="A" id="TM_A_TAB" play_id="709901" min_sel="2" max_sel="12">二连肖</a>
				<a href="javascript:LHC.showTab('#TM_B_TAB');" type="B" id="TM_B_TAB" play_id="709902" min_sel="3" max_sel="12">三连肖</a>
				<a href="javascript:LHC.showTab('#TM_C_TAB');" type="C" id="TM_C_TAB" play_id="709903" min_sel="4" max_sel="12">四连肖</a>
				<a href="javascript:LHC.showTab('#TM_D_TAB');" type="D" id="TM_D_TAB" play_id="709904" min_sel="5" max_sel="12">五连肖</a>
				<a href="javascript:LHC.showTab('#TM_E_TAB');" type="E" id="TM_E_TAB" play_id="709905" min_sel="2" max_sel="12">二连尾</a>
				<a href="javascript:LHC.showTab('#TM_F_TAB');" type="F" id="TM_F_TAB" play_id="709906" min_sel="3" max_sel="12">三连尾</a>
				<a href="javascript:LHC.showTab('#TM_G_TAB');" type="G" id="TM_G_TAB" play_id="709907" min_sel="4" max_sel="12">四连尾</a>
				<a href="javascript:LHC.showTab('#TM_H_TAB');" type="H" id="TM_H_TAB" play_id="709979" min_sel="5" max_sel="12">五连尾</a>
    		</li>
    	</ul>
    	<div class="cont-col3-bd" id="bet_tab"> 
    		<div id="lxlw_checkboxs">
	    		<div id="TM_A_PAGE">
	    			<table class="u-table2"> 
				      <thead> 
				       <tr> 
				        <th>生肖</th> 
				        <th>号</th> 
				        <th>赔率</th>
				        <th>勾选</th>
				         
				        <th>生肖</th> 
				        <th>号</th> 
				        <th>赔率</th>
				        <th>勾选</th> 
				       </tr> 
				      </thead> 
				      <tbody> 
				       <tr> 
				        <td class="name not-event">鼠</td> 
				        <td id="2lx_shu" class="qiu not-event"><script>LHC.getSxList("鼠","#2lx_shu")</script></td> 
				        <td class="odds not-event" pid="709901"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709901" value="鼠" id="2lx_shu_value" type="2lx_shu" /></td>
				         
				        <td class="name not-event">马</td> 
				        <td id="2lx_ma" class="qiu not-event"><script>LHC.getSxList("马","#2lx_ma")</script></td> 
				        <td class="odds not-event" pid="709907"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709907" value="马" id="2lx_ma_value" type="2lx_ma" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">牛</td> 
				        <td id="2lx_niu" class="qiu not-event"><script>LHC.getSxList("牛","#2lx_niu")</script></td> 
				        <td class="odds not-event" pid="709902"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709902" value="牛" id="2lx_niu_value" type="2lx_niu" /></td>
				         
				        <td class="name not-event">羊</td> 
				        <td id="2lx_yang" class="qiu not-event"><script>LHC.getSxList("羊","#2lx_yang")</script></td> 
				        <td class="odds not-event" pid="709908"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709908" value="羊" id="2lx_yang_value" type="2lx_yang" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">虎</td> 
				        <td id="2lx_hu" class="qiu not-event"><script>LHC.getSxList("虎","#2lx_hu")</script></td> 
				        <td class="odds not-event" pid="709903"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709903" value="虎" id="2lx_hu_value" type="2lx_hu" /></td>
				         
				        <td class="name not-event">猴</td> 
				        <td id="2lx_hou" class="qiu not-event"><script>LHC.getSxList("猴","#2lx_hou")</script></td> 
				        <td class="odds not-event" pid="709909"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709909" value="猴" id="2lx_hou_value" type="2lx_hou" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">兔</td>
				        <td id="2lx_tu" class="qiu not-event"><script>LHC.getSxList("兔","#2lx_tu")</script></td> 
				        <td class="odds not-event" pid="709904"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709904" value="兔" id="2lx_tu_value" type="2lx_tu" /></td>
				         
				        <td class="name not-event">鸡</td> 
				        <td id="2lx_ji" class="qiu not-event"><script>LHC.getSxList("鸡","#2lx_ji")</script></td> 
				        <td class="odds not-event" pid="709910"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709910" value="鸡" id="2lx_ji_value" type="2lx_ji" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">龙</td> 
				        <td id="2lx_long" class="qiu not-event"><script>LHC.getSxList("龙","#2lx_long")</script></td> 
				        <td class="odds not-event" pid="709905"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709905" value="龙" id="2lx_long_value" type="2lx_long" /></td>
				         
				        <td class="name not-event">狗</td> 
				        <td id="2lx_gou" class="qiu not-event"><script>LHC.getSxList("狗","#2lx_gou")</script></td> 
				        <td class="odds not-event" pid="709911"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709911" value="狗" id="2lx_gou_value" type="2lx_gou" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">蛇</td> 
				        <td id="2lx_she" class="qiu not-event"><script>LHC.getSxList("蛇","#2lx_she")</script></td> 
				        <td class="odds not-event" pid="709906"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709906" value="蛇" id="2lx_she_value" type="2lx_she" /></td>
				         
				        <td class="name not-event">猪</td> 
				        <td id="2lx_zhu" class="qiu not-event"><script>LHC.getSxList("猪","#2lx_zhu")</script></td> 
				        <td class="odds not-event" pid="709912"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709912" value="猪" id="2lx_zhu_value" type="2lx_zhu" /></td> 
				       </tr> 
				      </tbody> 
				     </table> 
	    			</div>
	    			<div id="TM_B_PAGE" class="hide">
	    			<table class="u-table2"> 
				      <thead> 
				       <tr> 
				        <th>生肖</th> 
				        <th>号</th> 
				        <th>赔率</th>
				        <th>勾选</th>
				         
				        <th>生肖</th> 
				        <th>号</th> 
				        <th>赔率</th>
				        <th>勾选</th> 
				       </tr> 
				      </thead> 
				      <tbody> 
				       <tr> 
				        <td class="name not-event">鼠</td> 
				        <td id="3lx_shu" class="qiu not-event"><script>LHC.getSxList("鼠","#3lx_shu")</script></td> 
				        <td class="odds not-event" pid="709913"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709913" value="鼠" id="3lx_shu_value" type="3lx_shu" /></td>
				         
				        <td class="name not-event">马</td> 
				        <td id="3lx_ma" class="qiu not-event"><script>LHC.getSxList("马","#3lx_ma")</script></td> 
				        <td class="odds not-event" pid="709919"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709919" value="马" id="3lx_ma_value" type="ma" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">牛</td> 
				        <td id="3lx_niu" class="qiu not-event"><script>LHC.getSxList("牛","#3lx_niu")</script></td> 
				        <td class="odds not-event" pid="709914"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709914" value="牛" id="3lx_niu_value" type="3lx_niu" /></td>
				         
				        <td class="name not-event">羊</td> 
				        <td id="3lx_yang" class="qiu not-event"><script>LHC.getSxList("羊","#3lx_yang")</script></td> 
				        <td class="odds not-event" pid="709920"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709920" value="羊" id="3lx_yang_value" type="3lx_yang" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">虎</td> 
				        <td id="3lx_hu" class="qiu not-event"><script>LHC.getSxList("虎","#3lx_hu")</script></td> 
				        <td class="odds not-event" pid="709915"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709915" value="虎" id="3lx_hu_value" type="3lx_hu" /></td>
				         
				        <td class="name not-event">猴</td> 
				        <td id="3lx_hou" class="qiu not-event"><script>LHC.getSxList("猴","#3lx_hou")</script></td> 
				        <td class="odds not-event" pid="709921"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709921" value="猴" id="3lx_hou_value" type="3lx_hou" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">兔</td> 
				        <td id="3lx_tu" class="qiu not-event"><script>LHC.getSxList("兔","#3lx_tu")</script></td> 
				        <td class="odds not-event" pid="709916"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709916" value="兔" id="3lx_tu_value" type="3lx_tu" /></td>
				         
				        <td class="name not-event">鸡</td> 
				        <td id="3lx_ji" class="qiu not-event"><script>LHC.getSxList("鸡","#3lx_ji")</script></td> 
				        <td class="odds not-event" pid="709922"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709922" value="鸡" id="3lx_ji_value" type="3lx_ji" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">龙</td> 
				        <td id="3lx_long" class="qiu not-event"><script>LHC.getSxList("龙","#3lx_long")</script></td> 
				        <td class="odds not-event" pid="709917"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709917" value="龙" id="3lx_long_value" type="3lx_long" /></td>
				         
				        <td class="name not-event">狗</td> 
				        <td id="3lx_gou" class="qiu not-event"><script>LHC.getSxList("狗","#3lx_gou")</script></td> 
				        <td class="odds not-event" pid="709923"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709923" value="狗" id="3lx_gou_value" type="3lx_gou" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">蛇</td> 
				        <td id="3lx_she" class="qiu not-event"><script>LHC.getSxList("蛇","#3lx_she")</script></td> 
				        <td class="odds not-event" pid="709918"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" value="蛇"  pid="709918" id="3lx_she_value" type="3lx_she" /></td>
				         
				        <td class="name not-event">猪</td> 
				        <td id="3lx_zhu" class="qiu not-event"><script>LHC.getSxList("猪","#3lx_zhu")</script></td> 
				        <td class="odds not-event" pid="709924"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709924" value="猪" id="3lx_zhu_value" type="3lx_zhu" /></td> 
				       </tr> 
				      </tbody> 
				     </table> 
	    			</div>
	    			<div id="TM_C_PAGE" class="hide">
	    			<table class="u-table2"> 
				      <thead> 
				       <tr> 
				        <th>生肖</th> 
				        <th>号</th> 
				        <th>赔率</th>
				        <th>勾选</th>
				         
				        <th>生肖</th> 
				        <th>号</th> 
				        <th>赔率</th>
				        <th>勾选</th> 
				       </tr> 
				      </thead> 
				      <tbody> 
				       <tr> 
				        <td class="name not-event">鼠</td> 
				        <td id="4lx_shu" class="qiu not-event"><script>LHC.getSxList("鼠","#4lx_shu")</script></td> 
				        <td class="odds not-event" pid="709925"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709925" value="鼠" id="4lx_shu_value" type="4lx_shu" /></td>
				         
				        <td class="name not-event">马</td> 
				        <td id="4lx_ma" class="qiu not-event"><script>LHC.getSxList("马","#4lx_ma")</script></td> 
				        <td class="odds not-event" pid="709931"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709931" value="马" id="4lx_ma_value" type="4lx_ma" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">牛</td> 
				        <td id="4lx_niu" class="qiu not-event"><script>LHC.getSxList("牛","#4lx_niu")</script></td> 
				        <td class="odds not-event" pid="709926"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709926" value="牛" id="4lx_niu_value" type="4lx_niu" /></td>
				         
				        <td class="name not-event">羊</td> 
				        <td id="4lx_yang" class="qiu not-event"><script>LHC.getSxList("羊","#4lx_yang")</script></td> 
				        <td class="odds not-event" pid="709932"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709932" value="羊" id="4lx_yang_value" type="4lx_yang" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">虎</td> 
				        <td id="4lx_hu" class="qiu not-event"><script>LHC.getSxList("虎","#4lx_hu")</script></td> 
				        <td class="odds not-event" pid="709927"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709927" value="虎" id="4lx_hu_value" type="4lx_hu" /></td>
				         
				        <td class="name not-event">猴</td> 
				        <td id="4lx_hou" class="qiu not-event"><script>LHC.getSxList("猴","#4lx_hou")</script></td> 
				        <td class="odds not-event" pid="709933"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709933" value="猴" id="4lx_hou_value" type="4lx_hou" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">兔</td> 
				        <td id="4lx_tu" class="qiu not-event"><script>LHC.getSxList("兔","#4lx_tu")</script></td> 
				        <td class="odds not-event" pid="709928"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709928" value="兔" id="4lx_tu_value" type="4lx_tu" /></td>
				         
				        <td class="name not-event">鸡</td> 
				        <td id="4lx_ji" class="qiu not-event"><script>LHC.getSxList("鸡","#4lx_ji")</script></td> 
				        <td class="odds not-event" pid="709934"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709934" value="鸡" id="4lx_ji_value" type="4lx_ji" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">龙</td> 
				        <td id="4lx_long" class="qiu not-event"><script>LHC.getSxList("龙","#4lx_long")</script></td> 
				        <td class="odds not-event" pid="709929"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709929" value="龙" id="4lx_long_value" type="4lx_long" /></td>
				         
				        <td class="name not-event">狗</td> 
				        <td id="4lx_gou" class="qiu not-event"><script>LHC.getSxList("狗","#4lx_gou")</script></td> 
				        <td class="odds not-event" pid="709935"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709935" value="狗" id="4lx_gou_value" type="4lx_gou" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">蛇</td> 
				        <td id="4lx_she" class="qiu not-event"><script>LHC.getSxList("蛇","#4lx_she")</script></td> 
				        <td class="odds not-event" pid="709930"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709930" value="蛇" id="4lx_she_she_value" type="4lx_she" /></td>
				         
				        <td class="name not-event">猪</td> 
				        <td id="4lx_zhu" class="qiu not-event"><script>LHC.getSxList("猪","#4lx_zhu")</script></td> 
				        <td class="odds not-event" pid="709936"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709936" value="猪" id="4lx_zhu_value" type="4lx_zhu" /></td> 
				       </tr> 
				      </tbody> 
				     </table> 
	    			</div>
	    			<div id="TM_D_PAGE" class="hide">
	    			<table class="u-table2"> 
				      <thead> 
				       <tr> 
				        <th>生肖</th> 
				        <th>号</th> 
				        <th>赔率</th>
				        <th>勾选</th>
				         
				        <th>生肖</th> 
				        <th>号</th> 
				        <th>赔率</th>
				        <th>勾选</th> 
				       </tr> 
				      </thead> 
				      <tbody> 
				       <tr> 
				        <td class="name not-event">鼠</td> 
				        <td id="5lx_shu" class="qiu not-event"><script>LHC.getSxList("鼠","#5lx_shu")</script></td> 
				        <td class="odds not-event" pid="709937"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709937" value="鼠" id="5lx_shu_value" type="5lx_shu" /></td>
				         
				        <td class="name not-event">马</td> 
				        <td id="5lx_ma" class="qiu not-event"><script>LHC.getSxList("马","#5lx_ma")</script></td> 
				        <td class="odds not-event" pid="709943"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709943" value="马" id="5lx_ma_value" type="5lx_ma" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">牛</td> 
				        <td id="5lx_niu" class="qiu not-event"><script>LHC.getSxList("牛","#5lx_niu")</script></td> 
				        <td class="odds not-event" pid="709938"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709938" value="牛" id="5lx_niu_value" type="5lx_niu" /></td>
				         
				        <td class="name not-event">羊</td> 
				        <td id="5lx_yang" class="qiu not-event"><script>LHC.getSxList("羊","#5lx_yang")</script></td> 
				        <td class="odds not-event" pid="709944"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709944" value="羊" id="5lx_yang_value" type="5lx_yang" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">虎</td> 
				        <td id="5lx_hu" class="qiu not-event"><script>LHC.getSxList("虎","#5lx_hu")</script></td> 
				        <td class="odds not-event" pid="709939"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709939" value="虎" id="5lx_hu_value" type="5lx_hu" /></td>
				         
				        <td class="name not-event">猴</td> 
				        <td id="5lx_hou" class="qiu not-event"><script>LHC.getSxList("猴","#5lx_hou")</script></td> 
				        <td class="odds not-event" pid="709945"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709945" value="猴" id="5lx_hou_value" type="5lx_hou" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">兔</td> 
				        <td id="5lx_tu" class="qiu not-event"><script>LHC.getSxList("兔","#5lx_tu")</script></td> 
				        <td class="odds not-event" pid="709940"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709940" value="兔" id="5lx_tu_value" type="5lx_tu" /></td>
				         
				        <td class="name not-event">鸡</td> 
				        <td id="5lx_ji" class="qiu not-event"><script>LHC.getSxList("鸡","#5lx_ji")</script></td> 
				        <td class="odds not-event" pid="709946"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709946" value="鸡" id="5lx_ji_value" type="5lx_ji" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">龙</td> 
				        <td id="5lx_long" class="qiu not-event"><script>LHC.getSxList("龙","#5lx_long")</script></td> 
				        <td class="odds not-event" pid="709941"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709941" value="龙" id="5lx_long_value" type="5lx_long" /></td>
				         
				        <td class="name not-event">狗</td> 
				        <td id="5lx_gou" class="qiu not-event"><script>LHC.getSxList("狗","#5lx_gou")</script></td> 
				        <td class="odds not-event" pid="709947"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709947" value="狗" id="5lx_gou_value" type="5lx_gou" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">蛇</td> 
				        <td id="5lx_she" class="qiu not-event"><script>LHC.getSxList("蛇","#5lx_she")</script></td> 
				        <td class="odds not-event" pid="709942"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709942" value="蛇" id="5lx_she_value" type="5lx_she" /></td>
				         
				        <td class="name not-event">猪</td> 
				        <td id="5lx_zhu" class="qiu not-event"><script>LHC.getSxList("猪","#5lx_zhu")</script></td> 
				        <td class="odds not-event" pid="709948"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709948" value="猪" id="5lx_zhu_value" type="5lx_zhu" /></td> 
				       </tr> 
				      </tbody> 
				     </table> 
	    			</div>
	    			<div id="TM_E_PAGE" class="hide">
    				<table class="u-table2"> 
				      <thead> 
				       <tr> 
				        <th>种类</th> 
				        <th>号</th> 
				        <th>赔率</th>
				        <th>勾选</th>
				         
				        <th>种类</th> 
				        <th>号</th> 
				        <th>赔率</th>
				        <th>勾选</th> 
				       </tr> 
				      </thead> 
				      <tbody> 
				       <tr> 
				        <td class="name not-event">0尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b10 mr2">10</i>
				        	<i class="lhc_icon lhc_b20 mr2">20</i>
				        	<i class="lhc_icon lhc_b30 mr2">30</i>
				        	<i class="lhc_icon lhc_b40 mr2">40</i>
				       	</td> 
				        <td class="odds not-event" pid="709949"><span class="c-txt3">--</span></td>  
				        <td class="checkbox_td"><input type="checkbox" pid="709949" value="0" id="2lw_0_value" type="2lw_0" /></td>
				         
				        <td class="name not-event">5尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b05 mr2">05</i>
				        	<i class="lhc_icon lhc_b15 mr2">15</i>
				        	<i class="lhc_icon lhc_b25 mr2">25</i>
				        	<i class="lhc_icon lhc_b35 mr2">35</i>
				        	<i class="lhc_icon lhc_b45 mr2">45</i>
						</td> 
				        <td class="odds not-event" pid="709954"><span class="c-txt3">--</span></td>  
				        <td class="checkbox_td"><input type="checkbox" pid="709954" value="5" id="2lw_5_value" type="2lw_5" /></td>
				       </tr> 
				       <tr> 
				        <td class="name not-event">1尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b01 mr2">01</i>
				        	<i class="lhc_icon lhc_b11 mr2">11</i>
				        	<i class="lhc_icon lhc_b21 mr2">21</i>
				        	<i class="lhc_icon lhc_b31 mr2">31</i>
				        	<i class="lhc_icon lhc_b41 mr2">41</i>
						</td> 
				        <td class="odds not-event" pid="709950"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709950" value="1" id="2lw_1_value" type="2lw_1" /></td>
				         
				        <td class="name not-event">6尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b06 mr2">06</i>
				        	<i class="lhc_icon lhc_b16 mr2">16</i>
				        	<i class="lhc_icon lhc_b26 mr2">26</i>
				        	<i class="lhc_icon lhc_b36 mr2">36</i>
				        	<i class="lhc_icon lhc_b46 mr2">46</i>
						</td> 
				        <td class="odds not-event" pid="709955"><span class="c-txt3">--</span></td>  
				        <td class="checkbox_td"><input type="checkbox" pid="709955" value="6" id="2lw_6_value" type="2lw_6" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">2尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b02 mr2">02</i>
				        	<i class="lhc_icon lhc_b12 mr2">12</i>
				        	<i class="lhc_icon lhc_b22 mr2">22</i>
				        	<i class="lhc_icon lhc_b32 mr2">32</i>
				        	<i class="lhc_icon lhc_b42 mr2">42</i>
						</td> 
				        <td class="odds not-event" pid="709951"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709951" value="2" id="2lw_2_value" type="2lw_2" /></td>
				         
				        <td class="name not-event">7尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b07 mr2">07</i>
				        	<i class="lhc_icon lhc_b17 mr2">17</i>
				        	<i class="lhc_icon lhc_b27 mr2">27</i>
				        	<i class="lhc_icon lhc_b37 mr2">37</i>
				        	<i class="lhc_icon lhc_b47 mr2">47</i>
						</td> 
				        <td class="odds not-event" pid="709956"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709956" value="7" id="2lw_7_value" type="2lw_7" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">3尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b03 mr2">03</i>
				        	<i class="lhc_icon lhc_b13 mr2">13</i>
				        	<i class="lhc_icon lhc_b23 mr2">23</i>
				        	<i class="lhc_icon lhc_b33 mr2">33</i>
				        	<i class="lhc_icon lhc_b43 mr2">43</i>
						</td> 
				        <td class="odds not-event" pid="709952"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709952" value="3" id="2lw_3_value" type="2lw_3" /></td>
				         
				        <td class="name not-event">8尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b08 mr2">08</i>
				        	<i class="lhc_icon lhc_b18 mr2">18</i>
				        	<i class="lhc_icon lhc_b28 mr2">28</i>
				        	<i class="lhc_icon lhc_b38 mr2">38</i>
				        	<i class="lhc_icon lhc_b48 mr2">48</i>
				        </td> 
				        <td class="odds not-event" pid="709957"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709957" value="8" id="2lw_8_value" type="2lw_8" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">4尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b04 mr2">04</i>
				        	<i class="lhc_icon lhc_b14 mr2">14</i>
				        	<i class="lhc_icon lhc_b24 mr2">24</i>
				        	<i class="lhc_icon lhc_b34 mr2">34</i>
				        	<i class="lhc_icon lhc_b44 mr2">44</i>
						</td> 
				        <td class="odds not-event" pid="709953"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709953" value="4" id="2lw_4_value" type="2lw_4" /></td>
				         
				        <td class="name not-event">9尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b09 mr2">09</i>
				        	<i class="lhc_icon lhc_b19 mr2">19</i>
				        	<i class="lhc_icon lhc_b29 mr2">29</i>
				        	<i class="lhc_icon lhc_b39 mr2">39</i>
				        	<i class="lhc_icon lhc_b49 mr2">49</i>
				        </td> 
				        <td class="odds not-event" pid="709958"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709958" value="9" id="2lw_9_value" type="2lw_9" /></td> 
				       </tr> 
				      </tbody> 
				     </table>
				     </div>
				     
				    <div id="TM_F_PAGE" class="hide">
    				<table class="u-table2"> 
				      <thead> 
				       <tr> 
				        <th>种类</th> 
				        <th>号</th> 
				        <th>赔率</th>
				        <th>勾选</th>
				         
				        <th>种类</th> 
				        <th>号</th> 
				        <th>赔率</th>
				        <th>勾选</th> 
				       </tr> 
				      </thead> 
				      <tbody> 
				       <tr> 
				        <td class="name not-event">0尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b10 mr2">10</i>
				        	<i class="lhc_icon lhc_b20 mr2">20</i>
				        	<i class="lhc_icon lhc_b30 mr2">30</i>
				        	<i class="lhc_icon lhc_b40 mr2">40</i>
				       	</td> 
				        <td class="odds not-event" pid="709959"><span class="c-txt3">--</span></td>  
				        <td class="checkbox_td"><input type="checkbox" pid="709959" value="0" id="3lw_0_value" type="3lw_0" /></td>
				         
				        <td class="name not-event">5尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b05 mr2">05</i>
				        	<i class="lhc_icon lhc_b15 mr2">15</i>
				        	<i class="lhc_icon lhc_b25 mr2">25</i>
				        	<i class="lhc_icon lhc_b35 mr2">35</i>
				        	<i class="lhc_icon lhc_b45 mr2">45</i>
						</td> 
				        <td class="odds not-event" pid="709964"><span class="c-txt3">--</span></td>  
				        <td class="checkbox_td"><input type="checkbox" pid="709964" value="5" id="3lw_5_value" type="3lw_5" /></td>
				       </tr> 
				       <tr> 
				        <td class="name not-event">1尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b01 mr2">01</i>
				        	<i class="lhc_icon lhc_b11 mr2">11</i>
				        	<i class="lhc_icon lhc_b21 mr2">21</i>
				        	<i class="lhc_icon lhc_b31 mr2">31</i>
				        	<i class="lhc_icon lhc_b41 mr2">41</i>
						</td> 
				        <td class="odds not-event" pid="709960"><span class="c-txt3">--</span></td>   
				        <td class="checkbox_td"><input type="checkbox" pid="709960" value="1" id="3lw_1_value" type="3lw_1" /></td>
				         
				        <td class="name not-event">6尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b06 mr2">06</i>
				        	<i class="lhc_icon lhc_b16 mr2">16</i>
				        	<i class="lhc_icon lhc_b26 mr2">26</i>
				        	<i class="lhc_icon lhc_b36 mr2">36</i>
				        	<i class="lhc_icon lhc_b46 mr2">46</i>
						</td> 
				        <td class="odds not-event" pid="709965"><span class="c-txt3">--</span></td>  
				        <td class="checkbox_td"><input type="checkbox" pid="709965" value="6" id="3lw_6_value" type="3lw_6" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">2尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b02 mr2">02</i>
				        	<i class="lhc_icon lhc_b12 mr2">12</i>
				        	<i class="lhc_icon lhc_b22 mr2">22</i>
				        	<i class="lhc_icon lhc_b32 mr2">32</i>
				        	<i class="lhc_icon lhc_b42 mr2">42</i>
						</td> 
				        <td class="odds not-event" pid="709961"><span class="c-txt3">--</span></td>   
				        <td class="checkbox_td"><input type="checkbox" pid="709961" value="2" id="3lw_2_value" type="3lw_2" /></td>
				         
				        <td class="name not-event">7尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b07 mr2">07</i>
				        	<i class="lhc_icon lhc_b17 mr2">17</i>
				        	<i class="lhc_icon lhc_b27 mr2">27</i>
				        	<i class="lhc_icon lhc_b37 mr2">37</i>
				        	<i class="lhc_icon lhc_b47 mr2">47</i>
						</td> 
				        <td class="odds not-event" pid="709966"><span class="c-txt3">--</span></td>   
				        <td class="checkbox_td"><input type="checkbox" pid="709966" value="7" id="3lw_7_value" type="3lw_7" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">3尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b03 mr2">03</i>
				        	<i class="lhc_icon lhc_b13 mr2">13</i>
				        	<i class="lhc_icon lhc_b23 mr2">23</i>
				        	<i class="lhc_icon lhc_b33 mr2">33</i>
				        	<i class="lhc_icon lhc_b43 mr2">43</i>
						</td> 
				        <td class="odds not-event" pid="709962"><span class="c-txt3">--</span></td>   
				        <td class="checkbox_td"><input type="checkbox" pid="709962" value="3" id="3lw_3_value" type="3lw_3" /></td>
				         
				        <td class="name not-event">8尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b08 mr2">08</i>
				        	<i class="lhc_icon lhc_b18 mr2">18</i>
				        	<i class="lhc_icon lhc_b28 mr2">28</i>
				        	<i class="lhc_icon lhc_b38 mr2">38</i>
				        	<i class="lhc_icon lhc_b48 mr2">48</i>
				        </td> 
				        <td class="odds not-event" pid="709967"><span class="c-txt3">--</span></td>   
				        <td class="checkbox_td"><input type="checkbox" pid="709967" value="8" id="3lw_8_value" type="3lw_8" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">4尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b04 mr2">04</i>
				        	<i class="lhc_icon lhc_b14 mr2">14</i>
				        	<i class="lhc_icon lhc_b24 mr2">24</i>
				        	<i class="lhc_icon lhc_b34 mr2">34</i>
				        	<i class="lhc_icon lhc_b44 mr2">44</i>
						</td> 
				        <td class="odds not-event" pid="709963"><span class="c-txt3">--</span></td>   
				        <td class="checkbox_td"><input type="checkbox" pid="709963" value="4" id="3lw_4_value" type="3lw_4" /></td>
				         
				        <td class="name not-event">9尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b09 mr2">09</i>
				        	<i class="lhc_icon lhc_b19 mr2">19</i>
				        	<i class="lhc_icon lhc_b29 mr2">29</i>
				        	<i class="lhc_icon lhc_b39 mr2">39</i>
				        	<i class="lhc_icon lhc_b49 mr2">49</i>
				        </td> 
				        <td class="odds not-event" pid="709968"><span class="c-txt3">--</span></td>   
				        <td class="checkbox_td"><input type="checkbox" pid="709968" value="9" id="3lw_9_value" type="3lw_9" /></td> 
				       </tr> 
				      </tbody> 
				     </table>
				     </div>
				     <div id="TM_G_PAGE" class="hide">
    				<table class="u-table2"> 
				      <thead> 
				       <tr> 
				        <th>种类</th> 
				        <th>号</th> 
				        <th>赔率</th>
				        <th>勾选</th>
				         
				        <th>种类</th> 
				        <th>号</th> 
				        <th>赔率</th>
				        <th>勾选</th> 
				       </tr> 
				      </thead> 
				      <tbody> 
				       <tr> 
				        <td class="name not-event">0尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b10 mr2">10</i>
				        	<i class="lhc_icon lhc_b20 mr2">20</i>
				        	<i class="lhc_icon lhc_b30 mr2">30</i>
				        	<i class="lhc_icon lhc_b40 mr2">40</i>
				       	</td> 
				        <td class="odds not-event" pid="709969"><span class="c-txt3">--</span></td>  
				        <td class="checkbox_td"><input type="checkbox" pid="709969" value="0" id="4lw_0_value" type="4lw_0" /></td>
				         
				        <td class="name not-event">5尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b05 mr2">05</i>
				        	<i class="lhc_icon lhc_b15 mr2">15</i>
				        	<i class="lhc_icon lhc_b25 mr2">25</i>
				        	<i class="lhc_icon lhc_b35 mr2">35</i>
				        	<i class="lhc_icon lhc_b45 mr2">45</i>
						</td> 
				        <td class="odds not-event" pid="709974"><span class="c-txt3">--</span></td>  
				        <td class="checkbox_td"><input type="checkbox" pid="709974" value="5" id="4lw_5_value" type="4lw_5" /></td>
				       </tr> 
				       <tr> 
				        <td class="name not-event">1尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b01 mr2">01</i>
				        	<i class="lhc_icon lhc_b11 mr2">11</i>
				        	<i class="lhc_icon lhc_b21 mr2">21</i>
				        	<i class="lhc_icon lhc_b31 mr2">31</i>
				        	<i class="lhc_icon lhc_b41 mr2">41</i>
						</td> 
				        <td class="odds not-event" pid="709970"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709970" value="1" id="4lw_1_value" type="4lw_1" /></td>
				         
				        <td class="name not-event">6尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b06 mr2">06</i>
				        	<i class="lhc_icon lhc_b16 mr2">16</i>
				        	<i class="lhc_icon lhc_b26 mr2">26</i>
				        	<i class="lhc_icon lhc_b36 mr2">36</i>
				        	<i class="lhc_icon lhc_b46 mr2">46</i>
						</td> 
				        <td class="odds not-event" pid="709975"><span class="c-txt3">--</span></td>  
				        <td class="checkbox_td"><input type="checkbox" pid="709975" value="6" id="4lw_6_value" type="4lw_6" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">2尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b02 mr2">02</i>
				        	<i class="lhc_icon lhc_b12 mr2">12</i>
				        	<i class="lhc_icon lhc_b22 mr2">22</i>
				        	<i class="lhc_icon lhc_b32 mr2">32</i>
				        	<i class="lhc_icon lhc_b42 mr2">42</i>
						</td> 
				        <td class="odds not-event" pid="709971"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709971" value="2" id="4lw_2_value" type="4lw_2" /></td>
				         
				        <td class="name not-event">7尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b07 mr2">07</i>
				        	<i class="lhc_icon lhc_b17 mr2">17</i>
				        	<i class="lhc_icon lhc_b27 mr2">27</i>
				        	<i class="lhc_icon lhc_b37 mr2">37</i>
				        	<i class="lhc_icon lhc_b47 mr2">47</i>
						</td> 
				        <td class="odds not-event" pid="709976"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709976" value="7" id="4lw_7_value" type="4lw_7" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">3尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b03 mr2">03</i>
				        	<i class="lhc_icon lhc_b13 mr2">13</i>
				        	<i class="lhc_icon lhc_b23 mr2">23</i>
				        	<i class="lhc_icon lhc_b33 mr2">33</i>
				        	<i class="lhc_icon lhc_b43 mr2">43</i>
						</td> 
				        <td class="odds not-event" pid="709972"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709972" value="3" id="4lw_3_value" type="4lw_3" /></td>
				         
				        <td class="name not-event">8尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b08 mr2">08</i>
				        	<i class="lhc_icon lhc_b18 mr2">18</i>
				        	<i class="lhc_icon lhc_b28 mr2">28</i>
				        	<i class="lhc_icon lhc_b38 mr2">38</i>
				        	<i class="lhc_icon lhc_b48 mr2">48</i>
				        </td> 
				        <td class="odds not-event" pid="709977"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709977" value="8" id="4lw_8_value" type="4lw_8" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">4尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b04 mr2">04</i>
				        	<i class="lhc_icon lhc_b14 mr2">14</i>
				        	<i class="lhc_icon lhc_b24 mr2">24</i>
				        	<i class="lhc_icon lhc_b34 mr2">34</i>
				        	<i class="lhc_icon lhc_b44 mr2">44</i>
						</td> 
				        <td class="odds not-event" pid="709973"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709973" value="4" id="4lw_4_value" type="4lw_4" /></td>
				         
				        <td class="name not-event">9尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b09 mr2">09</i>
				        	<i class="lhc_icon lhc_b19 mr2">19</i>
				        	<i class="lhc_icon lhc_b29 mr2">29</i>
				        	<i class="lhc_icon lhc_b39 mr2">39</i>
				        	<i class="lhc_icon lhc_b49 mr2">49</i>
				        </td> 
				        <td class="odds not-event" pid="709978"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709978" value="9" id="4lw_9_value" type="4lw_9" /></td> 
				       </tr> 
				      </tbody> 
				     </table>
				     </div>
				     
				     <div id="TM_H_PAGE" class="hide">
    				<table class="u-table2"> 
				      <thead> 
				       <tr> 
				        <th>种类</th> 
				        <th>号</th> 
				        <th>赔率</th>
				        <th>勾选</th>
				         
				        <th>种类</th> 
				        <th>号</th> 
				        <th>赔率</th>
				        <th>勾选</th> 
				       </tr> 
				      </thead> 
				      <tbody> 
				       <tr> 
				        <td class="name not-event">0尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b10 mr2">10</i>
				        	<i class="lhc_icon lhc_b20 mr2">20</i>
				        	<i class="lhc_icon lhc_b30 mr2">30</i>
				        	<i class="lhc_icon lhc_b40 mr2">40</i>
				       	</td> 
				        <td class="odds not-event" pid="709979"><span class="c-txt3">--</span></td>  
				        <td class="checkbox_td"><input type="checkbox" pid="709979" value="0" id="5lw_0_value" type="5lw_0" /></td>
				         
				        <td class="name not-event">5尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b05 mr2">05</i>
				        	<i class="lhc_icon lhc_b15 mr2">15</i>
				        	<i class="lhc_icon lhc_b25 mr2">25</i>
				        	<i class="lhc_icon lhc_b35 mr2">35</i>
				        	<i class="lhc_icon lhc_b45 mr2">45</i>
						</td> 
				        <td class="odds not-event" pid="709984"><span class="c-txt3">--</span></td>  
				        <td class="checkbox_td"><input type="checkbox" pid="709984" value="5" id="5lw_5_value" type="5lw_5" /></td>
				       </tr> 
				       <tr> 
				        <td class="name not-event">1尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b01 mr2">01</i>
				        	<i class="lhc_icon lhc_b11 mr2">11</i>
				        	<i class="lhc_icon lhc_b21 mr2">21</i>
				        	<i class="lhc_icon lhc_b31 mr2">31</i>
				        	<i class="lhc_icon lhc_b41 mr2">41</i>
						</td> 
				        <td class="odds not-event" pid="709980"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709980" value="1" id="5lw_1_value" type="5lw_1" /></td>
				         
				        <td class="name not-event">6尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b06 mr2">06</i>
				        	<i class="lhc_icon lhc_b16 mr2">16</i>
				        	<i class="lhc_icon lhc_b26 mr2">26</i>
				        	<i class="lhc_icon lhc_b36 mr2">36</i>
				        	<i class="lhc_icon lhc_b46 mr2">46</i>
						</td> 
				        <td class="odds not-event" pid="709985"><span class="c-txt3">--</span></td>
				        <td class="checkbox_td"><input type="checkbox" pid="709985" value="6" id="5lw_6_value" type="5lw_6" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">2尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b02 mr2">02</i>
				        	<i class="lhc_icon lhc_b12 mr2">12</i>
				        	<i class="lhc_icon lhc_b22 mr2">22</i>
				        	<i class="lhc_icon lhc_b32 mr2">32</i>
				        	<i class="lhc_icon lhc_b42 mr2">42</i>
						</td> 
				        <td class="odds not-event" pid="709981"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709981" value="2" id="5lw_2_value" type="5lw_2" /></td>
				         
				        <td class="name not-event">7尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b07 mr2">07</i>
				        	<i class="lhc_icon lhc_b17 mr2">17</i>
				        	<i class="lhc_icon lhc_b27 mr2">27</i>
				        	<i class="lhc_icon lhc_b37 mr2">37</i>
				        	<i class="lhc_icon lhc_b47 mr2">47</i>
						</td> 
				        <td class="odds not-event" pid="709986"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709986" value="7" id="5lw_7_value" type="5lw_7" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">3尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b03 mr2">03</i>
				        	<i class="lhc_icon lhc_b13 mr2">13</i>
				        	<i class="lhc_icon lhc_b23 mr2">23</i>
				        	<i class="lhc_icon lhc_b33 mr2">33</i>
				        	<i class="lhc_icon lhc_b43 mr2">43</i>
						</td> 
				        <td class="odds not-event" pid="709982"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709982" value="3" id="5lw_3_value" type="5lw_3" /></td>
				         
				        <td class="name not-event">8尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b08 mr2">08</i>
				        	<i class="lhc_icon lhc_b18 mr2">18</i>
				        	<i class="lhc_icon lhc_b28 mr2">28</i>
				        	<i class="lhc_icon lhc_b38 mr2">38</i>
				        	<i class="lhc_icon lhc_b48 mr2">48</i>
				        </td> 
				        <td class="odds not-event" pid="709987"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709987" value="8" id="5lw_8_value" type="5lw_8" /></td> 
				       </tr> 
				       <tr> 
				        <td class="name not-event">4尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b04 mr2">04</i>
				        	<i class="lhc_icon lhc_b14 mr2">14</i>
				        	<i class="lhc_icon lhc_b24 mr2">24</i>
				        	<i class="lhc_icon lhc_b34 mr2">34</i>
				        	<i class="lhc_icon lhc_b44 mr2">44</i>
						</td> 
				        <td class="odds not-event" pid="709983"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709983" value="4" id="5lw_4_value" type="5lw_4" /></td>
				         
				        <td class="name not-event">9尾</td> 
				        <td class="qiu not-event">
				        	<i class="lhc_icon lhc_b09 mr2">09</i>
				        	<i class="lhc_icon lhc_b19 mr2">19</i>
				        	<i class="lhc_icon lhc_b29 mr2">29</i>
				        	<i class="lhc_icon lhc_b39 mr2">39</i>
				        	<i class="lhc_icon lhc_b49 mr2">49</i>
				        </td> 
				        <td class="odds not-event" pid="709988"><span class="c-txt3">--</span></td> 
				        <td class="checkbox_td"><input type="checkbox" pid="709988" value="9" id="5lw_9_value" type="5lw_9" /></td> 
				       </tr> 
				      </tbody> 
				     </table>
				     </div>
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
<script type="text/javascript">
	parent.UserBet.playType = "LXLW";
</script>
</body>
</html>

