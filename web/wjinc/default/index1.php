<!DOCTYPE html>
<html>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<title><?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?></title>
<meta name="renderer" content="webkit" /> 
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
<meta name="keywords" content="" />
<meta name="description" content="" />
<script type="text/javascript"> 
	/* var baseUrl = "http://"+window.location.host+"/"; */
	var url = '/api/checkLoginJs.do?t='+Math.random();
	document.write("<script type='text/javascript' src='"+url+"'><\/script>");
	document.close();
</script>

<link href="static/css/index.pack.min.css?v=1610251708" rel="stylesheet" />

<script type="text/javascript" src="/static/lib/jquery/jquery-1.11.2.min.js" ></script>
<script type="text/javascript" src="/static/lib/layer/layer.js" ></script>
<script type="text/javascript" src='/config/config.js'></script>

<script type="text/javascript" src="/static/js/index.pack.min2.js?v=1610251708" ></script>

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

</head>
<body>
<div class="main-body">
<div class="header">
	  <div class="logo2" style="text-align: center;">
	  	<img src='' alt="<?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>" height="53" id="domain_logo_url">
	  	<script type="text/javascript">
			//处理默认样式
			changePageSkin();
		</script>
	  </div>
	  <div class="menu1"> 
	        <div class="draw_number"><div id="header_game_name"></div><div><span class="cur_turn_num" id="cur_turn_num"></span>期开奖</div></div>
	        <a id="result_balls" target="_blank"></a>
	        <div class="open_sound" onclick="SoundManage.voiceSwitch()" id="countdown_sound" title="点击关闭提醒声音"></div>
	  </div>
	  <div class="menu2">
	    <span><a href="/game/stat/betList.html?settled=false" target="framePage">未结明细</a></span>
	    <span><a href="/game/stat/betList.html?settled=true" target="framePage">今天已结</a></span>
	    <span class="trial-cls"><a href="/game/stat/statBet.html" target="framePage">历史报表</a></span>
	    <span><a href="javascript:History.loadPage()">开奖结果</a></span><br>
	    <span><a href="/game/include/user_bet_info.html" target="framePage">个人资讯</a></span>
	  	<span><a href="/game/include/game_rule.html" target="framePage">游戏规则</a></span>
		<?php 
		if($this->user['type']>0){ ?>
		<span class="trial-cls"><a href="/daili/userbetinfo.html" target="framePage">即时滚单</a></span>
		<?php }else{ ?>
		<span class="trial-cls"><a href="/center/pay/list.html" target="framePage">充值记录</a></span>
		<?php } ?>
	  	<span id="skinPanel">更换皮肤</span>
	  </div>
	  <div class="trial-cls menu4"><a href="#" class="support"></a></div>
	  <div class="menu3"><a href="javascript:logout();" class="logout"></a></div>
	  <div style="clear:both;"></div>
	<div class="lotterys">
		<div class="show" id="homeMenus">
<a class="more_game" style="display: block;"><span>更多游戏  ▼</span></a>
        </div>
        <div style="clear:both;"></div>
        <div class="sub" id="homeCateMenus">
            <div id="cate_menus_50" class="show cate_menu">
                <a class="selected" href="/game/pk10/index.html" onclick="HomeMenu.selCateMenuClass(this);"
                   target="framePage" cate_id="1">两面盘</a>
                |
                <a href="/game/pk10/sol.html" target="framePage" onclick="HomeMenu.selCateMenuClass(this);" cate_id="2">单号1~10</a>
                |
                <a href="/game/pk10/com.html" target="framePage" onclick="HomeMenu.selCateMenuClass(this);" cate_id="3">冠亚组合</a>
            </div>
            <div id="cate_menus_72" class="show cate_menu">
                <a class="selected" href="/game/jspk10/index.html" onclick="HomeMenu.selCateMenuClass(this);"
                   target="framePage" cate_id="1">两面盘</a>
                |
                <a href="/game/jspk10/sol.html" target="framePage" onclick="HomeMenu.selCateMenuClass(this);"
                   cate_id="2">单号1~10</a>
                |
                <a href="/game/jspk10/com.html" target="framePage" onclick="HomeMenu.selCateMenuClass(this);"
                   cate_id="3">冠亚组合</a>
            </div>
            <div id="cate_menus_55" class="show cate_menu">
                <a class="selected" href="/game/xyft/index.html" onclick="HomeMenu.selCateMenuClass(this);"
                   target="framePage" cate_id="1">两面盘</a>
                |
                <a href="/game/xyft/sol.html" target="framePage" onclick="HomeMenu.selCateMenuClass(this);" cate_id="2">单号1~10</a>
                |
                <a href="/game/xyft/com.html" target="framePage" onclick="HomeMenu.selCateMenuClass(this);" cate_id="3">冠亚组合</a>
            </div>
            <div id="cate_menus_1" class="hide cate_menu">
                <a class="selected" href="/game/cqssc/index.html" onclick="HomeMenu.selCateMenuClass(this);"
                   target="framePage" cate_id="1">整合</a>
                |
                <a href="/game/cqssc/sol.html?ball=1" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="2">第一球</a>
                |
                <a href="/game/cqssc/sol.html?ball=2" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="3">第二球</a>
                |
                <a href="/game/cqssc/sol.html?ball=3" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="4">第三球</a>
                |
                <a href="/game/cqssc/sol.html?ball=4" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="5">第四球</a>
                |
                <a href="/game/cqssc/sol.html?ball=5" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="6">第五球</a>
            </div>
            <div id="cate_menus_73" class="hide cate_menu">
                <a class="selected" href="/game/jsssc/index.html" onclick="HomeMenu.selCateMenuClass(this);"
                   target="framePage" cate_id="1">整合</a>
                |
                <a href="/game/jsssc/sol.html?ball=1" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="2">第一球</a>
                |
                <a href="/game/jsssc/sol.html?ball=2" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="3">第二球</a>
                |
                <a href="/game/jsssc/sol.html?ball=3" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="4">第三球</a>
                |
                <a href="/game/jsssc/sol.html?ball=4" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="5">第四球</a>
                |
                <a href="/game/jsssc/sol.html?ball=5" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="6">第五球</a>
            </div>
            <div id="cate_menus_60" class="hide cate_menu">
                <a class="selected" href="/game/gdkl10/index.html" onclick="HomeMenu.selCateMenuClass(this);"
                   target="framePage" cate_id="1">两面盘</a>
                |
                <a href="/game/gdkl10/sol.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="2">单号1~8</a>
                |
                <a href="/game/gdkl10/q1.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="3">第一球</a>
                |
                <a href="/game/gdkl10/q2.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="4">第二球</a>
                |
                <a href="/game/gdkl10/q3.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="5">第三球</a>
                |
                <a href="/game/gdkl10/q4.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="6">第四球</a>
                |
                <a href="/game/gdkl10/q5.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="7">第五球</a>
                |
                <a href="/game/gdkl10/q6.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="8">第六球</a>
                |
                <a href="/game/gdkl10/q7.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="9">第七球</a>
                |
                <a href="/game/gdkl10/q8.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="10">第八球</a>
                |
                <a href="/game/gdkl10/zm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="11">正码</a>
                |
                <a href="/game/gdkl10/lm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="12">连码</a>
            </div>
            <div id="cate_menus_10" class="hide cate_menu">
                <a class="selected" href="/game/jsk3/index.html" onclick="HomeMenu.selCateMenuClass(this);"
                   target="framePage" cate_id="1">大小骰宝</a>
            </div>
            <div id="cate_menus_61" class="hide cate_menu">
                <a class="selected" href="/game/xync/index.html" onclick="HomeMenu.selCateMenuClass(this);"
                   target="framePage" cate_id="1">两面盘</a>
                |
                <a href="/game/xync/sol.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="2">单号1~8</a>
                |
                <a href="/game/xync/q1.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="3">第一球</a>
                |
                <a href="/game/xync/q2.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">第二球</a>
                |
                <a href="/game/xync/q3.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="5">第三球</a>
                |
                <a href="/game/xync/q4.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="6">第四球</a>
                |
                <a href="/game/xync/q5.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="7">第五球</a>
                |
                <a href="/game/xync/q6.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="8">第六球</a>
                |
                <a href="/game/xync/q7.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="9">第七球</a>
                |
                <a href="/game/xync/q8.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="10">第八球</a>
                |
                <a href="/game/xync/zm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="11">正码</a>
                |
                <a href="/game/xync/lm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="12">连码</a>
            </div>
            <div id="cate_menus_65" class="hide cate_menu">
                <a class="selected" href="/game/bjkl8/index.html" onclick="HomeMenu.selCateMenuClass(this);"
                   target="framePage" cate_id="1">总和、比数、五行</a>
                |
                <a href="/game/bjkl8/sol.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="2">正码</a>
            </div>
            <div id="cate_menus_66" class="hide cate_menu">
                <a class="selected" href="/game/pcdd/index.html" onclick="HomeMenu.selCateMenuClass(this);"
                   target="framePage" cate_id="1">PC蛋蛋</a>
            </div>
            <div id="cate_menus_21" class="hide cate_menu">
                <a class="selected" href="/game/gd11x5/index.html" onclick="HomeMenu.selCateMenuClass(this);"
                   target="framePage" cate_id="1">两面</a>
                |
                <a href="/game/gd11x5/sol.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="1">单号</a>
                |
                <a href="/game/gd11x5/lm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="1">连码</a>
                |
                <a href="/game/gd11x5/zx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="1">直选</a>
            </div>
            <div id="cate_menus_70" class="hide cate_menu">
                <a class="selected" href="/game/lhc/index.html" onclick="HomeMenu.selCateMenuClass(this);"
                   target="framePage" cate_id="85">特码</a>
                |
                <a href="/game/lhc/2m.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="86">两面</a>
                |
                <a href="/game/lhc/sb.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="87">色波</a>
                |
                <a href="/game/lhc/tx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="88">特肖</a>
                |
                <a href="/game/lhc/hx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="89">合肖</a>
                |
                <a href="/game/lhc/tws.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="90">特码头尾数</a>
                |
                <a href="/game/lhc/zm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="91">正码</a>
                |
                <a href="/game/lhc/zmt.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="92">正码特</a>
                |
                <a href="/game/lhc/zm16.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="93">正码1~6</a>
                |
                <a href="/game/lhc/wx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="94">五行</a>
                |
                <a href="/game/lhc/ptyxws.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="95">平特一肖尾数</a>
                |
                <a href="/game/lhc/zx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="95">正肖</a>
                |
                <a href="/game/lhc/7sb.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="96">7色波</a>
                |
                <a href="/game/lhc/zhongxiao.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="97">总肖</a>
                |
                <a href="/game/lhc/zxbz.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="98">自选不中</a>
                |
                <a href="/game/lhc/lxlw.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="99">连肖连尾</a>
                |
                <a href="/game/lhc/lm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="100">连码</a>
            </div>
            <div id="cate_menus_74" class="hide cate_menu">
                <a class="selected" href="/game/lhc/index.html" onclick="HomeMenu.selCateMenuClass(this);"
                   target="framePage" cate_id="85">特码</a>
                |
                <a href="/game/lhc/2m.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="86">两面</a>
                |
                <a href="/game/lhc/sb.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="87">色波</a>
                |
                <a href="/game/lhc/tx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="88">特肖</a>
                |
                <a href="/game/lhc/hx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="89">合肖</a>
                |
                <a href="/game/lhc/tws.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="90">特码头尾数</a>
                |
                <a href="/game/lhc/zm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="91">正码</a>
                |
                <a href="/game/lhc/zmt.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="92">正码特</a>
                |
                <a href="/game/lhc/zm16.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="93">正码1~6</a>
                |
                <a href="/game/lhc/wx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="94">五行</a>
                |
                <a href="/game/lhc/ptyxws.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="95">平特一肖尾数</a>
                |
                <a href="/game/lhc/zx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="95">正肖</a>
                |
                <a href="/game/lhc/7sb.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="96">7色波</a>
                |
                <a href="/game/lhc/zhongxiao.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="97">总肖</a>
                |
                <a href="/game/lhc/zxbz.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="98">自选不中</a>
                |
                <a href="/game/lhc/lxlw.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage"
                   cate_id="99">连肖连尾</a>
                |
                <a href="/game/lhc/lm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="100">连码</a>
            </div>
	</div>
	<div style="clear:both;"></div> 
</div>

<!--main-->
<div class="main clearfix">

	<!--siderbar-->
	<div class="siderbar" id="left_main">
		<div class="side_left">
			<div class="title">
					账户信息
			</div>
			
			<div class="sider-col1">
				<div class="info"><label>账号：</label><span id="userinfo_name">加载中</span><script type="text/javascript">$("#userinfo_name").html(user.userName);</script></div>
				<div class="info"><label>帐号余额：</label><span id="userinfo_money" class="balance">加载中</span></div>
				<div class="info">
					<label>未结金额：</label><span id="userinfo_unbalancedMoney" class="betting">加载中</span>
					<a href="javascript:PullMsg.getLotteryData(200)" title="点击刷新消息">
					<img alt="点击刷新消息" src="/static/images/refresh.png" width="18" height="18" title="点击刷新消息" style="vertical-align: middle;margin-left: 10px;cursor:pointer">
					</a>
				</div>
			</div>
			<?php 
			if($this->user['type']>0){
			?>
			<div class="title hide" id="kjzb_div"><a href="/team/report" target="framePage">代理中心</a></div>
			<?php } ?>
			<div class="title trial-cls"><a href="/center/pay/index.html?v6" target="framePage">在线充值</a></div>
			<div class="title trial-cls"><a href="/center/withdraw/index.html" target="framePage">在线提款</a></div>
			<div class="title trial-cls"><a href="/center/pay/list.html" target="framePage">存取纪录</a></div>
			<div class="title trial-cls"><a href="/center/user/loginpwd.html" target="framePage" style="padding-left: 55px;">个人中心
				<div style="width: 56px;float:right;" align="left">&nbsp;
				<img alt="点击刷新消息" src="/static/images/msg_new2.png" id="left_user_new_notice"  title="您有新的消息">
				</div>
				</a>
			</div>
			<div class="title trial-cls">最新注单</div>

		</div>
		<div class="sider-col2">
            <div id="lastBets" class="side_left">
	            <ul class="bets" id="user-bet-list">
	    		 </ul>
    		 </div>
		</div>
	</div>
	<!--/siderbar-->
	
	
	<!--content-->
	<div class="content" >
		<iframe id="framePage" name="framePage" src="" width="100%" height="300px" style="border: none;bacbackground-color: #feefef" allowTransparency="true" border="0" frameborder="no" ></iframe>
	</div>
	<!--/content-->
</div>
<!--/main-->
<!--announce-box-->
	<audio src="/static/sound/du.mp3" id="duSound" style="display:none;"></audio>
<audio src="/static/sound/win.mp3" id="winSound" style="display:none;"></audio>
<audio src="/static/sound/new_msg.mp3" id="nweNoticeSound" style="display:none;"></audio>

<div class="announce">
	<h3 class="announc3-hd">公告</h3>
    <div id="announce-list" class="announce-list">
        
    </div>
</div>

<!--/announce-->
</div>

					<div  id="win_bet" class="hide" style="width: 430px; margin: 10px;">
						<div style="max-height: 280px; overflow-y:auto; margin-bottom: 10px">
							<table class="u-table10" > 
						      <thead> 
						       <tr> 
						        <th style="width: 60%;">号码</th> 
						        <th style="width: 15%">赔率</th> 
						        <th style="width: 15%">金额</th> 
						        <th style="width: 10%">确认</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						      </tbody> 
						     </table>
					     </div>
					     <div class="bet-bottom"><span class="bcount">组数：<b class="bcountVal">0</b></span><span class="btotal">总金额：<b class="btotalVal">0</b></span></div>
				     </div>

	<div  id="user_msg_list" class="pop-tips hide">
		<h3 class="pop-tips-hd" id="user_msg_title"></h3>
		<div class="pop-tips-bd" id="user_msg_dev">
			<ul id="user_msg_content" class="mb10">
			</ul>
		</div>
		<a href="javascript:UserBet.closeUserMsgWiondow()" class="btn-pop-close">&times;</a>
	</div>
	<!--/右下角弹窗-->

<div class="mask" id="mask"></div>

</body>
</html>
