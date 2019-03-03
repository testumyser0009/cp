<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0033)http://www.88jc5.com/member/index -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="user-scalable=yes, width=1225, target-densityDpi=device-dpi">
<title><?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?></title>
<link rel="stylesheet" type="text/css" href="./files/main.css">
<link rel="stylesheet" type="text/css" href="./files/balls.css">
<link rel="stylesheet" type="text/css" href="./files/colorbox.css">
<script type="text/javascript">var skinColor="";</script>
<script type="text/javascript" src="./files/jquery.js"></script>
<script type="text/javascript" src="./files/jquery-ui.js"></script>
<script type="text/javascript" src="./files/libs.js"></script>
<script type="text/javascript" src="./files/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="./files/custompage.js"></script>
<script type="text/javascript" src="./files/json2.js"></script>
<script type="text/javascript" src="./files/swfobject.js"></script>
<script type="text/javascript" src="./files/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="./files/member.js"></script>
<script type="text/javascript" src="./files/skin.js"></script>
<script type="text/javascript" src="./files/notices.js"></script>
<script type="text/javascript" src="./files/hk6Base.js"></script>
<script type="text/javascript" src="./files/drawurls.js"></script>
<script type="text/javascript" src="/static/lib/jquery/jquery-1.11.2.min.js" ></script>
<script type="text/javascript" src="/static/lib/layer/layer.js" ></script>
<script type="text/javascript" src='/config/config.js'></script>

<script type="text/javascript" src="/static/js/index.pack.min.js?v=1610251708" ></script>

<script type="text/javascript">
var staticFileUrl=getStaticDomain();
HttpUtil.loadJs(staticFileUrl + "data/dataVersion.js?t="+ Math.random());
</script>
<script type="text/javascript">
	$("html").hide();
	layer.config({
	    skin: 'demo-class'
	});
	
	$.ajaxSetup ({
		cache: false //close AJAX cache
	});
	
	$LAB
    .script("/api/getServerData.do?t="+ Math.random())
    .script('/game/getServerData.do?t=' + Math.random())
    .script(staticFileUrl + 'data/messages.js?v='+dataVersion)
    .script(staticFileUrl + 'data/paramcfg.js?v='+dataVersion)
    .script(staticFileUrl + 'data/gamedatas.js?v='+dataVersion)
    .script(staticFileUrl + 'data/configjs.js?v='+dataVersion)
    .script(staticFileUrl + 'data/gameCommon.js')
    //.script(staticFileUrl + 'data/playCates.js')
    //.script(staticFileUrl + 'data/plays.js')
    .wait(function(){// 等待所有script加载完再执行这个代码块
    	$("html").show();
	  	//处理声音
	  	SoundManage.initVoiceSwitch();
	  	//处理子页面
	  	frameAutoHeight();
		window.setInterval(frameAutoHeight, 200);
		//处理游戏菜单
		HomeMenu.init();
		//判断用户账号是否已封停
		if(user.enable==0){//账号封停
			layer.open({
				  title:"提示",
				  type: 1,
				  area: ['250px', '120px'],
				  closeBtn: 0, 
				  shift: 2,
				  shadeClose: false, 
				  content: "<div style='margin: 10px;'>您的账号已经被冻结，请联系上级！</div>"
				});
		}
		
		if(user.updatePw==1){//是否需要修改密码
			UserInfos.showUpdatePwWin();
		}
		
		
		// 同步时间
		SyncSysDate.sync();
		
		// 隐藏游客权限
		trialGameProPageInit();
		
		// 处理是否需要显示默认的隐藏按钮
		showSysBtn();
		
		HomeMenu.showInfo();
		
		// 每10秒请求一次消息
		window.setInterval(function() {
			PullMsg.getUserMsg(200);
		},10000);
		
		$('a[target="framePage"]').bind('click', function(event) {
			$("#framePage").attr("src", $(this).attr('href'));
			event.preventDefault();
			event.stopPropagation();
		});
		 
//		PullMsg.getLotteryData();
		 
		//事件
		document.onkeydown = function (e) {
			var theEvent = window.event || e;
			var code = theEvent.keyCode || theEvent.which;
			if (code == 13) {
				if(UserBet.step==0) {
					UserBet.openBetWindow();
				}else if(UserBet.step==1){
					UserBet.submitBet();
					if(UserBet.step==0){
						setTimeout(function() {
							layer.closeAll();
				        }, 200);
					}
				}
			}
		}
		
    	//公告
		var noticeList = MESSAGES.type_1; //公告列表
		if(noticeList){
			var html = "<ul>";
			$.each(noticeList, function(index,item){
				html += '<li><a href="javascript:showAnnounceList()">'+ item.title + '</a></li>'
			});
			html +="</ul>";
			
			$('#announce-list').html(html);
		}
		$('#announce-list').scrollbox({
			speed: 100
		});
    })
    ;
	
	function showAnnounceList(){
		layer.open({
            type: 2,
            title: '公告列表',
            shadeClose: true,
            scrollbar :false,
            shade: [0.5],
            area: ['700px', '400px'],
            content: '/notice/list.html?t='+ Date.parse(new Date())
        });
	}

</script>
<script type="text/javascript">
var MAX_DIVIDEND=5000000;
var SOUND_URL = '/newdsn/css/images/kaijiang.mp3';
var g_showflag=0;
function doLoad(){
	if( g_showflag==1 ) return;
	g_showflag=1;
	//alert('尊敬的会员您好：微信扫码、支付宝扫码已全部恢复，微信在线支付、支付宝支付、方便快捷，无需审核及时到账，祝您游戏愉快~盈利多多~');
}
//skinColor=LIBS.cookie("_skin_");
//if( skinColor==null ) skinColor="red";
/*
$(function(){
function showLeftTime(){var c=new Date();var b=c.format("yyyy-MM-dd hh:mm:ss");$(".showTime").html(b);
var a=setTimeout(showLeftTime,1000)}
showLeftTime();
});*/
</script>
</head>
<body class="skin_blue">
<div id="header" class="header">
<div class="logo"><img src="./files/logo_jc.png" alt="聚彩"></div>
<div class="top">
<div class="menu">
  <div class="menu1"> 
        <div id="result_info" class="draw_number"><div>北京赛车(PK10)</div><div>618702期开奖</div></div>
        <a id="result_balls" target="_blank" onclick="return false;" href="http://www.88jc5.com/member/index#" class="T_PK10 L_BJPK10" style="margin-top: -5px;"><span><b class="b6">6</b></span><span><b class="b10">10</b></span><span><b class="b4">4</b></span><span><b class="b2">2</b></span><span><b class="b1">1</b></span><span><b class="b9">9</b></span><span><b class="b5">5</b></span><span><b class="b8">8</b></span><span><b class="b3">3</b></span><span><b class="b7">7</b></span><div class="result_stat clearfix"><div class="statitm">16</div><div class="statitm">大</div><div class="statitm">双</div><div class="statitm">虎</div><div class="statitm">龙</div><div class="statitm">虎</div><div class="statitm">虎</div><div class="statitm">虎</div></div></a>
  </div>
  <div class="menu2">
    <span><a target="frame" href="/game/stat/betList.html?settled=false">未结明细</a></span> |
    <span><a target="frame" href="/game/stat/betList.html?settled=true">今天已结</a></span> |
    <span><a target="frame" href="/game/stat/statBet.html">历史报表</a></span> <br>
    <span><a target="frame" href="/game/include/user_bet_info.html">个人资讯</a></span> |
  
    <span><a  href="javascript:History.loadPage()">开奖结果</a></span> |
  	<span><a target="frame" href="/game/include/game_rule.html">游戏规则</a></span> 
	<?php 
		if($this->user['type']>0){ ?>
		<span ><a href="/daili/userbetinfo.html" target="frame">即时滚单</a></span> |
		<?php }else{ ?>
		<span><a href="/center/pay/list.html" target="frame">充值记录</a></span> |
		<?php } ?>
  </div>
  <div class="menu4"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=80075800&site=qq&menu=yes" class="support"></a></div>
  <div class="menu3">
  		<div class="themepicker">
           	 	<div class="themeicon icon1 icon1active" rel="blue"></div>
                <div class="themeicon icon2" rel="gold"></div>
                <div class="themeicon icon3" rel="red"></div>
           </div>
           <a href="http://www.88jc5.com/member/logout"><button type="button" class="logout"><div>退出</div></button></a>
       </div>
  <div style="clear:both;"></div>
</div>
<div class="lotterys">
<div class="menucontainer">
<div class="spritearrow arrowup"></div>
<div id="lotterys" style="display: none">







 



</div>
<div class="show">
<ul class="items" id="items">
<li><div class="item"><a href="javascript:void(0)" rel="0" id="l_BJPK10" lang="PK10_0" class="selected"><span>北京赛车(PK10)</span></a><div class="removebtn"></div></div></li><li><div class="item"><a href="javascript:void(0)" rel="1" id="l_CQSSC" lang="SSC_0"><span>重庆时时彩</span></a><div class="removebtn"></div></div></li><li><div class="item"><a href="javascript:void(0)" rel="2" id="l_XYFT" lang="PK10_0"><span>幸运飞艇</span></a><div class="removebtn"></div></div></li><li><div class="item"><a href="javascript:void(0)" rel="3" id="l_XYNC" lang="KLSF_0"><span>重庆幸运农场</span></a><div class="removebtn"></div></div></li><li><div class="item"><a href="javascript:void(0)" rel="6" id="l_AULUCKY10" lang="PK10_0"><span>澳洲赛车</span></a><div class="removebtn"></div></div></li><li><div class="item"><a href="javascript:void(0)" rel="4" id="l_AULUCKY5" lang="SSC_0"><span>澳洲时时彩</span></a><div class="removebtn"></div></div></li><li><div class="item"><a href="javascript:void(0)" rel="5" id="l_AULUCKY8" lang="KLSF_0"><span>澳洲快乐十分</span></a><div class="removebtn"></div></div></li><li><div class="item"><a href="javascript:void(0)" rel="7" id="l_HK6" lang="HK6_2"><span>香港六合彩</span></a><div class="removebtn"></div></div></li></ul>
</div>
	<div class="menumoregame">
		 <div id="moregames">更多游戏</div>
		 <div id="moregameicon">▼</div>
	</div>
</div>	
	<div class="gamecontainer" style="display: none;">
		<div style="height: 20px;"></div>
		<div class="gamebox clearfix" style="display:block"><div class="itemmg"><a href="javascript:void(0)" rel="8" id="l_XJSSC" lang="SSC_0"><span>新疆时时彩</span></a><div class="addbtn"></div></div><div class="itemmg"><a href="javascript:void(0)" rel="9" id="l_TJSSC" lang="SSC_0"><span>天津时时彩</span></a><div class="addbtn"></div></div><div class="itemmg"><a href="javascript:void(0)" rel="10" id="l_GDKLSF" lang="KLSF_0"><span>广东快乐十分</span></a><div class="addbtn"></div></div></div>
		<div class="gamesmltxt">注：已选择的彩种可通过鼠标拖动改变排列顺序。</div>
		<div class="editon"><button class="gamebtn1">编辑</button></div>
		<div class="editoff" style="display: none">
			<button class="gamebtn2">取消</button>
			<button class="gamebtn1">确定</button>
	   </div>
	</div>
</div>
<div class="sub">
<div id="sub_BJPK10" style=""><a href="./files/load.html" class="selected">两面盘</a> |
<a href="http://www.88jc5.com/member/load?lottery=BJPK10&page=110">单号1 ~ 10</a> |
<a href="http://www.88jc5.com/member/load?lottery=BJPK10&page=gy">冠亚军组合</a></div>
<div id="sub_CQSSC" style="display:none"><a href="http://www.88jc5.com/member/load?lottery=CQSSC&page=lm">整合</a> |
<a href="http://www.88jc5.com/member/load?lottery=CQSSC&page=ball&index=1">第一球</a> |
<a href="http://www.88jc5.com/member/load?lottery=CQSSC&page=ball&index=2">第二球</a> |
<a href="http://www.88jc5.com/member/load?lottery=CQSSC&page=ball&index=3">第三球</a> |
<a href="http://www.88jc5.com/member/load?lottery=CQSSC&page=ball&index=4">第四球</a> |
<a href="http://www.88jc5.com/member/load?lottery=CQSSC&page=ball&index=5">第五球</a></div>
<div id="sub_XYFT" style="display:none"><a href="http://www.88jc5.com/member/load?lottery=XYFT&page=lm">两面盘</a> |
<a href="http://www.88jc5.com/member/load?lottery=XYFT&page=110">单号1 ~ 10</a> |
<a href="http://www.88jc5.com/member/load?lottery=XYFT&page=gy">冠亚军组合</a></div>
<div id="sub_XYNC" style="display:none"><a href="http://www.88jc5.com/member/load?lottery=XYNC&page=lm">两面盘</a> |
<a href="http://www.88jc5.com/member/load?lottery=XYNC&page=balls">单球1～8</a> |
<a href="http://www.88jc5.com/member/load?lottery=XYNC&page=ball&index=1">第一球</a> |
<a href="http://www.88jc5.com/member/load?lottery=XYNC&page=ball&index=2">第二球</a> |
<a href="http://www.88jc5.com/member/load?lottery=XYNC&page=ball&index=3">第三球</a> |
<a href="http://www.88jc5.com/member/load?lottery=XYNC&page=ball&index=4">第四球</a> |
<a href="http://www.88jc5.com/member/load?lottery=XYNC&page=ball&index=5">第五球</a> |
<a href="http://www.88jc5.com/member/load?lottery=XYNC&page=ball&index=6">第六球</a> |
<a href="http://www.88jc5.com/member/load?lottery=XYNC&page=ball&index=7">第七球</a> |
<a href="http://www.88jc5.com/member/load?lottery=XYNC&page=ball&index=8">第八球</a> |
<a href="http://www.88jc5.com/member/load?lottery=XYNC&page=mp">连码</a></div>
<div id="sub_XJSSC" style="display:none"><a href="http://www.88jc5.com/member/load?lottery=XJSSC&page=lm">整合</a> |
<a href="http://www.88jc5.com/member/load?lottery=XJSSC&page=ball&index=1">第一球</a> |
<a href="http://www.88jc5.com/member/load?lottery=XJSSC&page=ball&index=2">第二球</a> |
<a href="http://www.88jc5.com/member/load?lottery=XJSSC&page=ball&index=3">第三球</a> |
<a href="http://www.88jc5.com/member/load?lottery=XJSSC&page=ball&index=4">第四球</a> |
<a href="http://www.88jc5.com/member/load?lottery=XJSSC&page=ball&index=5">第五球</a></div>
<div id="sub_TJSSC" style="display:none"><a href="http://www.88jc5.com/member/load?lottery=TJSSC&page=lm">整合</a> |
<a href="http://www.88jc5.com/member/load?lottery=TJSSC&page=ball&index=1">第一球</a> |
<a href="http://www.88jc5.com/member/load?lottery=TJSSC&page=ball&index=2">第二球</a> |
<a href="http://www.88jc5.com/member/load?lottery=TJSSC&page=ball&index=3">第三球</a> |
<a href="http://www.88jc5.com/member/load?lottery=TJSSC&page=ball&index=4">第四球</a> |
<a href="http://www.88jc5.com/member/load?lottery=TJSSC&page=ball&index=5">第五球</a></div>
<div id="sub_GDKLSF" style="display:none"><a href="http://www.88jc5.com/member/load?lottery=GDKLSF&page=lm">两面盘</a> |
<a href="http://www.88jc5.com/member/load?lottery=GDKLSF&page=balls">单球1～8</a> |
<a href="http://www.88jc5.com/member/load?lottery=GDKLSF&page=ball&index=1">第一球</a> |
<a href="http://www.88jc5.com/member/load?lottery=GDKLSF&page=ball&index=2">第二球</a> |
<a href="http://www.88jc5.com/member/load?lottery=GDKLSF&page=ball&index=3">第三球</a> |
<a href="http://www.88jc5.com/member/load?lottery=GDKLSF&page=ball&index=4">第四球</a> |
<a href="http://www.88jc5.com/member/load?lottery=GDKLSF&page=ball&index=5">第五球</a> |
<a href="http://www.88jc5.com/member/load?lottery=GDKLSF&page=ball&index=6">第六球</a> |
<a href="http://www.88jc5.com/member/load?lottery=GDKLSF&page=ball&index=7">第七球</a> |
<a href="http://www.88jc5.com/member/load?lottery=GDKLSF&page=ball&index=8">第八球</a> |
<a href="http://www.88jc5.com/member/load?lottery=GDKLSF&page=mp">连码</a></div>
<div id="sub_AULUCKY5" style="display:none"><a href="http://www.88jc5.com/member/load?lottery=AULUCKY5&page=lm">整合</a> |
<a href="http://www.88jc5.com/member/load?lottery=AULUCKY5&page=ball&index=1">第一球</a> |
<a href="http://www.88jc5.com/member/load?lottery=AULUCKY5&page=ball&index=2">第二球</a> |
<a href="http://www.88jc5.com/member/load?lottery=AULUCKY5&page=ball&index=3">第三球</a> |
<a href="http://www.88jc5.com/member/load?lottery=AULUCKY5&page=ball&index=4">第四球</a> |
<a href="http://www.88jc5.com/member/load?lottery=AULUCKY5&page=ball&index=5">第五球</a></div>
<div id="sub_AULUCKY8" style="display:none"><a href="http://www.88jc5.com/member/load?lottery=AULUCKY8&page=lm">两面盘</a> |
<a href="http://www.88jc5.com/member/load?lottery=AULUCKY8&page=balls">单球1～8</a> |
<a href="http://www.88jc5.com/member/load?lottery=AULUCKY8&page=ball&index=1">第一球</a> |
<a href="http://www.88jc5.com/member/load?lottery=AULUCKY8&page=ball&index=2">第二球</a> |
<a href="http://www.88jc5.com/member/load?lottery=AULUCKY8&page=ball&index=3">第三球</a> |
<a href="http://www.88jc5.com/member/load?lottery=AULUCKY8&page=ball&index=4">第四球</a> |
<a href="http://www.88jc5.com/member/load?lottery=AULUCKY8&page=ball&index=5">第五球</a> |
<a href="http://www.88jc5.com/member/load?lottery=AULUCKY8&page=ball&index=6">第六球</a> |
<a href="http://www.88jc5.com/member/load?lottery=AULUCKY8&page=ball&index=7">第七球</a> |
<a href="http://www.88jc5.com/member/load?lottery=AULUCKY8&page=ball&index=8">第八球</a> |
<a href="http://www.88jc5.com/member/load?lottery=AULUCKY8&page=mp">连码</a></div>
<div id="sub_AULUCKY10" style="display:none"><a href="http://www.88jc5.com/member/load?lottery=AULUCKY10&page=lm">两面盘</a> |
<a href="http://www.88jc5.com/member/load?lottery=AULUCKY10&page=110">单号1 ~ 10</a> |
<a href="http://www.88jc5.com/member/load?lottery=AULUCKY10&page=gy">冠亚军组合</a></div>
<div id="sub_HK6" style="display:none"><a href="http://www.88jc5.com/member/load?lottery=HK6&page=tm&index=B">特码</a> |
<a href="http://www.88jc5.com/member/load?lottery=HK6&page=lm">两面</a> |
<a href="http://www.88jc5.com/member/load?lottery=HK6&page=sb">色波半波</a> |
<a href="http://www.88jc5.com/member/load?lottery=HK6&page=12sx">特肖头尾数</a> |
<a href="http://www.88jc5.com/member/load?lottery=HK6&page=hx">合肖</a> |
<a href="http://www.88jc5.com/member/load?lottery=HK6&page=zma">正码</a> |
<a href="http://www.88jc5.com/member/load?lottery=HK6&page=zmt1">正码特</a> |
<a href="http://www.88jc5.com/member/load?lottery=HK6&page=zm16">正码1-6</a> |
<a href="http://www.88jc5.com/member/load?lottery=HK6&page=wx">五行</a> |
<a href="http://www.88jc5.com/member/load?lottery=HK6&page=yx">一肖总肖平特尾数</a> |
<a href="http://www.88jc5.com/member/load?lottery=HK6&page=zx">正肖7色波</a> |
<a href="http://www.88jc5.com/member/load?lottery=HK6&page=zxbz">自选不中</a> |
<a href="http://www.88jc5.com/member/load?lottery=HK6&page=dpelx2">连肖连尾</a> |
<a href="http://www.88jc5.com/member/load?lottery=HK6&page=mp">连码</a></div>
</div>
</div>
</div>
<div id="main">
<div class="side_left" id="side">
<div class="user_info leftpanel">
<div class="lpheader">账户信息</div>
<div class="lpcontent" id="account">
 账号：试玩<br>
额度：<span class="balance">2000</span><br>
未结算金额：<span class="betting">0</span>
</div>
<div class="clearfix">
<div class="lpheader2" style="cursor:pointer" onclick="window.open(&#39;http://jc.jc5.com&#39;)">DNS教程</div>
<div class="lpheader2" style="cursor:pointer" onclick="window.open(&#39;http://www.jc599.com/&#39;)">线路检测</div>
<div class="lpheader2" style="cursor:pointer" onclick="window.open(&#39;http://www.jc5.com/&#39;)">网址导航</div>
<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=80075800&site=qq&menu=yes"><button class="supportbtn"><div style="margin-left:48px;"><img src="./files/mic2.png" width="23" height="21"></div> <div style="margin: 2px 0 0 5px;">在线客服</div></button></a>
<div class="lpheader2">最新注单</div>
</div>
</div>
<div class="betdone" id="lastBets">
<ul class="bets"></ul>
</div>
<div style="display:none" id="betResultPanel">
<div class="bresults">
<ul class="bets" id="betReulstList"></ul>
<table class="total s0">
<tbody>
<tr><td class="label">下注期数</td><td id="betResultDrawNumber"></td></tr>
<tr><td class="label">下注金额</td><td id="betResultCount"></td></tr>
<tr><td class="label">合计金额</td><td id="betResultTotal"></td></tr>
<tr><td colspan="2"><input type="button" class="button" value="返 回" onclick="resetPanel()"></td></tr>
</tbody></table>
</div>
</div>
</div>
<div class="frame" style="-webkit-overflow-scrolling:touch;overflow:auto;"><iframe id="frame" name="frame" frameborder="0" onload="doLoad()" src="./files/load.html"></iframe></div>
</div>
<div id="footer"><div class="info"><marquee id="notices" scrollamount="2"><span class="notice_new">尊敬的会员您好：微信扫码、支付宝扫码已全部恢复，微信在线支付、支付宝支付、方便快捷，无需审核及时到账，祝您游戏愉快~盈利多多~</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="notice_new">北京时间2017-05-18返水已在今天10:00返到您的游戏账户上，请注意查收</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</marquee></div><a href="javascript:void(0)" class="more">更多</a></div>


<div id="resultList" class="result_list ui-draggable ui-draggable-handle" style="display:none">
<div class="result_list_header">
	<span>弹窗可拖动</span>
	<div class="result_list_close" onclick="$(&#39;#resultList&#39;).hide();">×</div>
	<div id="resultListHeader" style="background:Gainsboro;text-align:center;font-weight: bold;"></div>
</div>
<div class="result_list_block"></div>
<iframe id="resultFrame" name="resultFrame" class="result_frame" frameborder="0"></iframe>
</div>
<script type="text/javascript">
		$(document).ready(function(){
			//窗口的拖动
			var video_box_bool=false;
			var offsetX=0;
			var offsetY=0;
			$("#ui-id-4").mousedown(function(event){
				offsetX = event.offsetX;
				offsetY = event.offsetY;
				video_box_bool=true;
			})
		
			$(document).mousemove(function(event){
				if(video_box_bool) {
					var x = event.clientX-offsetX;
					var y = event.clientY-offsetY;
					if(event.clientX > 0 && event.clientY > 0) {
						$("#video_box").css("left", x);
						$("#video_box").css("top", y);
					}
				}
		
			})
			.mouseup(function(){video_box_bool=false;
			})
			$("#video_box_close1").click(function() {
				$("#video_box").hide();
				$("#myiframe").attr("src", "");
			})
		});
	</script>
<div id="video_box" class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="moreNotice" aria-labelledby="ui-id-4" style="position:absolute;height:655px;width:984px;top:110px;left:160px;display:none;z-index:101;">
	<div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle">
		<span id="ui-id-4" class="ui-dialog-title-move" style="cursor:move;color:white;padding:0 350px">开奖视频由 www.jc5.com 提供(可拖拽移动)</span>
		<button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" style="cursor:pointer;float:right" title="关闭" id="video_box_close1">
			<span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span>
			<span class="ui-button-text" style="cursor:pointer">close</span>
		</button>
	</div>
	<iframe src="" id="myiframe" scrolling="no" frameborder="0" width="984px" height="635px"></iframe>
</div>
<script>
setSkin(skinColor, $('body'));
</script>




<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button type="button" id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="settingbet" aria-labelledby="ui-id-1" style="display: none; position: relative;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-1" class="ui-dialog-title">快选金额</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="settingbet" style="display: block;" class="ui-dialog-content ui-widget-content">
<input name="bet_1" placeholder="快选金额" class="ds"><br>
<input name="bet_2" placeholder="快选金额" class="ds"><br>
<input name="bet_3" placeholder="快选金额" class="ds"><br>
<input name="bet_4" placeholder="快选金额" class="ds"><br>
<input name="bet_5" placeholder="快选金额" class="ds"><br>
<input name="bet_6" placeholder="快选金额" class="ds"><br>
<input name="bet_7" placeholder="快选金额" class="ds"><br>
<input name="bet_8" placeholder="快选金额" class="ds"><br>
  <label><input name="settingbet" type="radio" id="settingbet_0" value="1" checked="checked">启动</label>
  <label><input name="settingbet" type="radio" id="settingbet_1" value="0">停用</label>
  <br><br>
<input type="button" class="button" value="储存" onclick="submitsetting()">
</div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div></body></html>