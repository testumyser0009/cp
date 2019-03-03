<!DOCTYPE html>
<!-- saved from url=(0038)http://ssc888.bkpf.mobi -->
<html class="no-js" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?></title>
<meta name="keyword" content="Welcome">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link type="text/css" href="./login_file/loginstyle.css" rel="stylesheet">
<link rel="stylesheet" href="./login_file/layer.css" id="layui_layer_layercss">
<script src="./login_file/jquery.js " type="text/javascript"></script>
<script src="./login_file/jquery.cycle.all.min.js " type="text/javascript"></script>
<script src="./login_file/layer.min.js " type="text/javascript"></script><link rel="stylesheet" href="./login_file/layer(1).css" id="layui_layer_skinlayercss">
<script src="./js/guest.js " type="text/javascript"></script>
<script type="text/javascript">

	var data = "欢迎进入本网站，祝您喜中大奖！！！ ";
	$(document).ready(function() {
		$("#noticeDiv").text(data);


	});

	



	$(function() {
		$('#promodiv').load('promo');
	})
</script>

<script type="text/javascript">
	$(function() {
		$("#username").focus(function() {
			$(this).addClass("input-txt");
		});
		$("#username").blur(function() {
			$(this).removeClass("input-txt");
			var txt_value = $(this).val(); // 得到当前文本框的值
			if (txt_value != "") {
				$(this).addClass("input-txt");
			}
		})

		$("#password_txt").focus(function() {
			$(this).addClass("input-txt");
		});
		$("#password_txt").blur(function() {
			$(this).removeClass("input-txt");
			var txt_value = $(this).val(); // 得到当前文本框的值
			if (txt_value != "") {
				$(this).addClass("input-txt");
			}
		})

		$("#loginSubmitBtn").click(function(){
			// alert(1);
			var username = $("#username").val();
			if(username == ''){
				alert('请输入您的用户名');
				return false;
			}
			var password = $("#password").val();
			if(password == ''){
				alert('请输入您的密码');
				return false;
			}
			$.post("/user/loginedto1",{username:username,password:password},function(data){
				//alert(data);
				//if(data.status == 1){
					window.location.href= 'member/tran';
				//}
			}).error(function() { alert("用户名或密码错误!!"); });
			return false;
	  	})
	});
</script>
</head>
<body>
	<span class="el-2"></span>
	<span class="el-3"></span>
	<div class="wrapper">
		<span class="el-1"></span>
		<!-- header -->
		<div class="header">
			<div class="logo">
				<object id="FlashA" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="260" height="110" class="flash">
					<param name="movie" value="./login_file/reglogo.swf ">
					<param name="quality" value="high">
					<param name="wmode" value="transparent">
					<param name="swfversion" value="6.0.65.0">
					<!--[if !IE]>-->
					<object type="application/x-shockwave-flash" data="./login_file/reglogo.swf " width="260" height="110">
						<!--<![endif]-->
						<param name="quality" value="high">
						<param name="wmode" value="transparent">
						<param name="swfversion" value="6.0.65.0">
						<!--[if !IE]>-->
					</object>
					<!--<![endif]-->
				</object>
				<div class="logo-wenzi"></div>
			</div>
			<div class="notice">
				<h2>最新公告：</h2>
				<div class="cont">
					<marquee id="noticeDiv" direction="left" scrollamount="4" onMouseOver="this.stop()" onMouseOut="this.start()">欢迎进入本网站，祝您喜中大奖！！！</marquee>
				</div>
			</div>
			<ul class="nav">
				<li><a href="/reg.php">立即开户</a></li>
				<li><a href="javascript:hezuo()">代理合作</a></li>
				<li><a href="javascript:youhui()">最新优惠</a></li>
				<li><a href="javascript:answer()">常见问题</a></li>
				<li><a href="javascript:about()">关于我们</a></li>
			</ul>
		</div>

		<!-- conetent -->
		<div class="content">

			<div class="clearfix">
				<!-- login -->
				<div class="login">
					<div class="hd">
						<h2>用户登录</h2>
						<a class="btn-kf" onclick="window.open('http://api1.pop800.com/chat/307374','','width=800,height=500');" style="cursor:pointer " target="_blank"></a>
					</div>
					<div class="bd">
						<form action="/user/loginedto1" method="post" id="login_form" style="position: relative;">
							<ul class="fm-list">
								<li><input class="ipt i-user" type="text" id="username" name="username" value="" required="required" placeholder="请输入您的账号"></li>
								<li><input class="ipt i-pass" type="password" id="password" name="password" value="" required="required" placeholder="您的密码"></li> 
								<li>
									<button class="btn-submit" id="loginSubmitBtn" type="submit" name="button">登录</button> 
									<a class="btn-reg" href="/reg.php">注册</a>
								</li>
								<li><a class="btn-in"  href="javascript:guestLogin();">游客参观</a></li>
							</ul>
						</form>
					</div>
				</div>

				<!-- m1 -->
				<div id="m1" class="taninx">
					<div class="closebtn"></div>
					<div class="">
                    <a class="dailibtn fr" onclick="window.open('http://api1.pop800.com/chat/307374','','width=800,height=500');" style="cursor:pointer " target="_blank">申请代理</a>
						<div class="cl"></div>
					</div>

					<div class="tannr">

						<br> <span class="hong">联盟方案：</span> <br> <br><?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>拥有多元化的产品，使用最公平、公正、公开的系统，
						在市场上的众多博彩网站中，我们自豪的提供会员最优惠的回 <br>馈，给予合作伙伴最优势的营利回报! 无论拥有的是网络资源，或是人脉资源，都欢迎您来加入<?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>网合作伙伴的行列， <br>
						无须负担任何费用，就可以开始无上限的收入。选择<?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>网，绝对是您最聪明的选择! <br> <br> <span class="hong">代理条件：</span> <br> <br>a.具有便利的计算机上网设备。
						<br>b.有一定的人脉资源、网络资源或自己的广告网站。  <br> <br> <span class="hong">有效会员：</span> <br> <br>（六合彩不计算在内）
						<br> <br> <span class="hong">代理收入：</span> <br> <br>A：比如您本月的代理账号内有赢利的情况下，就可拥有以下收入:
						<br>1.一个月内公司在您的代理账号内纯赢利达到1000元-50000元，可享受其中15%的佣金。 <br>2.一个月内公司在您的代理账号内纯赢利达到50001元-100000元，可享受其中20%的佣金。
						<br>3.一个月内公司在您的代理账号内纯赢利达到100001元-200000元，可享受其中25%的佣金。 <br>4.一个月内公司在您的代理账号内纯赢利达到200001元-500000元，可享受其中30%的佣金。
						<br>5.一个月内公司在您的代理账号内纯赢利达到500001元以上，可享受其中35%的佣金。 <br> <br> <span class="hong">请注意：</span> <br></font>* <font color="red">注:禁止代理商私自开设会员帐号进行非法投注套利。
						任何使用不诚实方法骗取代理佣金或下线会员与代理商同IP的我们视为 <br> 代理商自己开设会员游戏， 将取消代理资格并永久冻结账户，佣金一律不予发放。同IP出现多个会员的话， 将被视为无效会 <br>
						员，不得计算在内。 敬请联系代理专员详细洽谈</font>
					</div>
				</div>

				<div id="m2" class="taninx">
					<p><strong>回馈新老客户，高频彩票不计输赢、期期退水0.5%，双面盘1.99定位胆9.9全网赔率最好，信誉最好！</strong></p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;text-indent: 2em"><br></p><table width="570"><tbody><tr class="firstRow"><th width="150" style="border: 1px solid #8d8d8d;padding: 0px;font-size: 14px"><span style=";padding: 0px;font-size: 10px">会员级别</span></th><th style="border: 1px solid #8d8d8d;padding: 0px;font-size: 14px"><span style=";padding: 0px;font-size: 10px">返水比例</span></th></tr><tr><th style="border: 1px solid #8d8d8d;padding: 0px;color: rgb(255, 0, 0);font-size: 14px"><span style=";padding: 0px;color: rgb(229, 51, 51);font-size: 10px">所有会员</span></th><th style="border: 1px solid #8d8d8d;padding: 0px;color: rgb(255, 0, 0);font-size: 14px"><span style=";padding: 0px;color: rgb(229, 51, 51);font-size: 10px">高频彩有效投注额X0.5%</span></th></tr><tr><th style="border: 1px solid #8d8d8d;padding: 0px;color: rgb(255, 0, 0);font-size: 14px"><span style=";padding: 0px;color: rgb(229, 51, 51);font-size: 10px">所有会员</span></th>
					<th style="border: 1px solid #8d8d8d;padding: 0px;color: rgb(255, 0, 0);font-size: 14px"><span style=";padding: 0px;color: rgb(229, 51, 51);font-size: 10px">香港彩特A 42.5倍 13% 特B 48倍 0%</span></th>
					</tr></tbody></table><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px"><br></p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px"><strong style=";padding: 10px 0px 0px;height: 30px;line-height: 30px;display: block">活动规则：</strong></p>
					<p style="margin-top: 0px;margin-bottom: 0px;padding: 0px">1.本次优惠活动于2017年01月28日生效。优惠活动适用于所有会员，无需申请系统自动派发；</p>
					<p style="margin-top: 0px;margin-bottom: 0px;padding: 0px">2.期期退水可享有：无上限优惠，无须打码量即可取款；</p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px">3.任何滥用优惠、下注套利、非法程序下注的行为，经查实将取消优惠以及优惠产生的赢利；</p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px">4.游戏过程中，出现对冲或对打投注,将取消优惠以及优惠产生的赢利（例如在北京赛车同局投注大/小）；</p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px">5.<?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>网保留所有权利在任何时候可以更改、停止、取消优惠活动并不会做出任何书面解释。</p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px"><br></p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;text-indent: 2em"><br></p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;text-indent: 2em"><br></p><!--<p>优惠二：</p><h1 style=";padding: 0px;font-size: 12px"></h1><h1 style=";padding: 0px;font-size: 12px;text-indent: 0;text-align: center"><span style=";padding: 0px;color: rgb(229, 51, 51);font-size: 32px;font-family: SimSun"><hr>微信群发齐分享,最高可获88元彩金！</span></h1><hr><p><br></p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;text-indent: 0"><strong><span style=";padding: 0px;font-size: 10px;font-family: 宋体">活动对象：</span></strong><span style=";padding: 0px;font-size: 10px;font-family: 宋体"><?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>网所有注册会员</span></p><p style="margin-top: 0px;margin-bottom: 0px;margin-left: 0;padding: 0px;text-indent: 0"><strong><span style=";padding: 0px;font-size: 10px;font-family: 宋体">活动要求：</span></strong><span style=";padding: 0px;font-size: 10px;font-family: 宋体">只需群发消息内容为：</span><strong><span style=";padding: 0px;font-size: 10px;font-family: 宋体">（</span></strong><strong><span style=";padding: 0px;font-size: 10px;font-family: 宋体"><?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>网</span></strong><strong><span style=";padding: 0px;font-size: 10px;font-family: 宋体">）</span></strong><strong><span style=";padding: 0px;color: rgb(229, 51, 51);font-size: 10px;font-family: 宋体">主营北京赛车PK10<strong style="white-space: normal;"><span style="padding: 0px; color: rgb(229, 51, 51); font-size: 10px; font-family: 宋体;"><strong><span style="padding: 0px; font-size: 10px;">，幸运飞艇</span></strong></span></strong>，重庆时时彩 双面盘1.99 定位胆9.9 期期返水0.3% 香港彩特码赔率48 免费开户ssc888.bkpf.mobi 手机开户<strong style="white-space: normal;"><sfpan style="padding: 0px; color: rgb(229, 51, 51); font-size: 10px; font-family: 宋体;">打开手机浏览器输入</span></strong>m.98bei.com </span></strong></p>
					<p style="margin-top: 0px;margin-bottom: 0px;margin-left: 0;padding: 0px;text-indent: 0"><span style=";padding: 0px;font-size: 10px;font-family: 宋体">嘿~~~你知道吗？微信群发有礼送喔！！最高可获得88元，不要白不要啦~~~~~快来啊！</span></p><table width="368"><tbody><tr class="firstRow"><td width="184" valign="top" style=";padding: 0px;border:1px solid #8d8d8d"><p style="margin-left: 0;text-align: center"><strong><span style=";padding: 0px;color: rgb(51, 127, 229);font-size: 18px;font-family: 宋体">朋友圈好友数量</span></strong></p></td><td width="184" valign="top" style=";padding: 0px;border:1px solid #8d8d8d"><p style="margin-left: 0;text-align: center"><strong><span style=";padding: 0px;color: rgb(51, 127, 229);font-size: 18px;font-family: 宋体">微信群发彩金</span></strong></p></td></tr><tr><td width="184" valign="top" style=";padding: 0px;border:1px solid #8d8d8d"><p style="margin-left: 0;text-align: center"><strong><span style=";padding: 0px;color: rgb(255, 0, 0);font-size: 18px;font-family: 宋体">60人</span></strong></p></td><td width="184" valign="top" style=";padding: 0px;border:1px solid #8d8d8d"><p style="margin-left: 0;text-align: center"><strong><span style=";padding: 0px;color: rgb(255, 0, 0);font-size: 18px;font-family: 宋体">18</span></strong></p></td></tr><tr><td width="184" valign="top" style=";padding: 0px;border:1px solid #8d8d8d"><p style="margin-left: 0;text-align: center"><strong><span style=";padding: 0px;color: rgb(255, 0, 0);font-size: 18px;font-family: 宋体">150人</span></strong></p></td><td width="184" valign="top" style=";padding: 0px;border:1px solid #8d8d8d"><p style="margin-left: 0;text-align: center"><strong><span style=";padding: 0px;color: rgb(255, 0, 0);font-size: 18px;font-family: 宋体">38</span></strong></p></td></tr><tr><td width="184" valign="top" style=";padding: 0px;border:1px solid #8d8d8d"><p style="margin-left: 0;text-align: center"><strong><span style=";padding: 0px;color: rgb(255, 0, 0);font-size: 18px;font-family: 宋体">300人</span></strong></p></td><td width="184" valign="top" style=";padding: 0px;border:1px solid #8d8d8d"><p style="margin-left: 0;text-align: center"><strong><span style=";padding: 0px;color: rgb(255, 0, 0);font-size: 18px;font-family: 宋体">58</span></strong></p></td></tr><tr><td width="184" valign="top" style=";padding: 0px;border:1px solid #8d8d8d"><p style="margin-left: 0;text-align: center"><strong><span style=";padding: 0px;color: rgb(255, 0, 0);font-size: 18px;font-family: 宋体">500人</span></strong></p></td><td width="184" valign="top" style=";padding: 0px;border:1px solid #8d8d8d"><p style="margin-left: 0;text-align: center"><strong><span style=";padding: 0px;color: rgb(255, 0, 0);font-size: 18px;font-family: 宋体">88</span></strong></p></td></tr></tbody></table><p><br></p><p><br></p><p style="margin-top: 0px;margin-bottom: 0px;margin-left: 0;padding: 0px;text-indent: 0"><strong><span style=";padding: 0px;font-size: 10px;font-family: 宋体">微信群发步骤：</span></strong><span style=";padding: 0px;font-size: 10px;font-family: 宋体">登录微信--设置--通用--功能--群发助手--开始群发--新建群发--选择所有好友（全选）--下一步--输入群发信息【</span><strong><span style=";padding: 0px;font-size: 10px;font-family: 宋体">(</span></strong><strong><span style=";padding: 0px;font-size: 10px;font-family: 宋体"><?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?></span></strong><strong><span style=";padding: 0px;font-size: 10px;font-family: 宋体">)</span></strong><strong><span style=";padding: 0px;color: rgb(229, 51, 51);font-size: 10px;font-family: 宋体"><strong style="white-space: normal;"><span style="padding: 0px; color: rgb(229, 51, 51); font-size: 10px; font-family: 宋体;">主营北京赛车PK10，幸运飞艇，重庆时时彩 双面盘1.985 定位胆9.85 期期返水0.3% 香港彩特码赔率48 免费开户ssc888.bkpf.mobi 手机开户<strong><span style="padding: 0px; font-size: 10px;">打开手机浏览器输入</span></strong>m.98bei.com </span></strong></span></strong><span style=";padding: 0px;font-size: 10px;font-family: 宋体">】</span></p><p style="margin-top: 0px;margin-bottom: 0px;margin-left: 0;padding: 0px;text-indent: 0"><strong><span style=";padding: 0px;font-size: 10px;font-family: 宋体">活动规则：</span></strong></p><p style="margin-top: 0px;margin-bottom: 0px;margin-left: 0;padding: 0px;text-indent: 0"><span style=";padding: 0px;font-size: 10px;font-family: 宋体">1.本次优惠活动即日起生效，优惠活动适用于<?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>全体会员；</span></p><p style="margin-top: 0px;margin-bottom: 0px;margin-left: 0;padding: 0px;text-indent: 0"><span style=";padding: 0px;font-size: 10px;font-family: 宋体">2.彩金无须流水，只需盈利达到100即可申请提款；</span><span style=";padding: 0px;font-size: 14px;font-family: 宋体"><br></span><span style=";padding: 0px;font-size: 10px;font-family: 宋体">3.每个微信帐号只限申请一次彩金,重复参与取消资格；</span><span style=";padding: 0px;font-size: 14px;font-family: 宋体"><br></span><span style=";padding: 0px;font-size: 10px;font-family: 宋体">4.所有会员只能拥有一个帐号申请该优惠，同一个IP，同一存/提款卡视为同一客户。如果发现同一个人拥有两个或以上的帐号，重复的帐号将被冻结，每IP地址只能被推荐一次；&nbsp;</span><span style=";padding: 0px;font-size: 14px;font-family: 宋体"><br></span><span style=";padding: 0px;font-size: 10px;font-family: 宋体">5.此活动可以与其他优惠同时进行享用；&nbsp;</span><span style=";padding: 0px;font-size: 14px;font-family: 宋体"><br></span><span style=";padding: 0px;font-size: 10px;font-family: 宋体">6.<?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>保留所有权利在任何时候可以更改、停止、取消优惠活动并不会做出任何书面解释；</span></p><p style="margin-top: 0px;margin-bottom: 0px;margin-left: 0;padding: 0px;text-indent: 0"><br></p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px"><br></p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px"><br></p><p>优惠三：</p><h1 style=";padding: 0px;font-size: 12px;white-space: normal;text-indent: 2em"><hr></h1><h1 style=";padding: 0px;font-size: 12px;text-align: center"><span style=";padding: 0px;color: rgb(229, 51, 51);font-size: 32px;font-family: SimSun">邀请好友加入<?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>网丰厚彩金等您来拿！</span></h1><h1 style=";padding: 0px;font-size: 12px;white-space: normal;text-indent: 2em"><span style=";padding: 0px;color: rgb(229, 51, 51);font-size: 32px;font-family: SimSun"></span><span style=";padding: 0px;color: rgb(229, 51, 51);font-size: 32px;font-family: SimSun"><hr></span></h1><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;white-space: normal;"><span style=";padding: 0px;color: rgb(229, 51, 51);font-size: 32px;font-family: SimSun"><br></span></p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;white-space: normal;"><strong style=";padding: 10px 0px 0px;height: 30px;line-height: 30px;display: block">活动对象：</strong><?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>网所有注册会员</p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;white-space: normal;"><strong style=";padding: 10px 0px 0px;height: 30px;line-height: 30px;display: block">活动申明：</strong>本活动与代理无关，只限<?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>网全体会员，谢谢大家！</p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;white-space: normal;">独乐乐不如众乐乐，您还在单打独斗吗？立即呼唤请朋友好友体验组队娱乐的乐趣，每推荐一位好友即可领取<?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>网为您贴心准备的推荐彩金！</p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;white-space: normal;text-indent: 2em"><br></p><table width="570"><tbody><tr class="firstRow"><th colspan="4" style="border: 1px solid #8d8d8d;padding: 0px;color: rgb(255, 0, 0);font-size: 14px">礼金大回馈</th></tr><tr><th style="border: 1px solid #8d8d8d;padding: 0px;color: rgb(255, 0, 0);font-size: 14px">介绍人数</th><th style="border: 1px solid #8d8d8d;padding: 0px;color: rgb(255, 0, 0);font-size: 14px">存款次数</th><th style="border: 1px solid #8d8d8d;padding: 0px;color: rgb(255, 0, 0);font-size: 14px">存款金额</th><th style="border: 1px solid #8d8d8d;padding: 0px;color: rgb(255, 0, 0);font-size: 14px">彩金回馈</th></tr><tr><th style="border: 1px solid #8d8d8d;padding: 0px;color: rgb(255, 0, 0);font-size: 14px">1人以上</th><th style="border: 1px solid #8d8d8d;padding: 0px;color: rgb(255, 0, 0);font-size: 14px">3次</th><th style="border: 1px solid #8d8d8d;padding: 0px;color: rgb(255, 0, 0);font-size: 14px">100元</th><th style="border: 1px solid #8d8d8d;padding: 0px;color: rgb(255, 0, 0);font-size: 14px">58元</th></tr><tr><th colspan="4" style="border: 1px solid #8d8d8d;padding: 0px;color: rgb(0, 0, 255)">即日起您每成功推荐一位会员并存款次数达到3次以上、单次存款金额100元，即获得58元彩金红利回馈，介绍的朋友越多，您获得的奖金也就越多！！</th></tr></tbody></table><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;white-space: normal;"><br></p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;white-space: normal;">申请步骤：</p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;white-space: normal;">步骤一： 请联系在线客服提交您推荐的用户账号；</p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;white-space: normal;">步骤二： 被推荐人需达到要求存款总额/次数；（被推荐人必须是没存款的新会员）</p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;white-space: normal;">步骤三： 推荐人即可联系在线客服申请58元彩金红利，礼金无需倍数流水，即可提款。</p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;white-space: normal;"><strong style=";padding: 10px 0px 0px;height: 30px;line-height: 30px;display: block">活动规则：</strong></p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;white-space: normal;">1.本次优惠活动即日起生效，优惠活动适用于<?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>网全体会员；</p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;white-space: normal;">2.彩金无须流水即可申请提款；</p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;white-space: normal;">3.所有会员只能拥有一个帐号申请该优惠，同一个IP，同一存/提款卡视为同一客户。如果发现同一个人拥有</p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;white-space: normal;">两个或以上的帐号，重复的帐号将被冻结，每IP地址只能被推荐一次；</p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;white-space: normal;">4.推荐人是不能注册成为自己的被推荐人，如有违反规则，将被没收彩金；</p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;white-space: normal;">5.此活动可以与其他优惠同时进行享用；</p><p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;white-space: normal;">6.<?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>保留所有权利在任何时候可以更改、停止、取消优惠活动并不会做出任何书面解释；</p><p><br></p>-->				</div>



				<div id="m3" class="taninx">
					<div class="f12 l24">
						<span class="hong">一般常见问题</span> <br> <br> <span class="hong">Q1: 如何加入<?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>？</span> <br>A1: 您可以直接点选
						"立即开户"，确实填写资料后，可立即登记成为<?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>会员。 <br> <span class="hong">Q2: 我可以直接在网络上存款提款吗？</span> <br>A2:
						可以，<?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>提供多种线上存款选择，详情请参照 "存款提款" <br> <span class="hong">Q3: 我在哪里可以找到游戏规则？</span> <br>A3:
						在未登入前，您可以在游戏的最外层看到"游戏规则"选项，清楚告诉您游戏的玩法、规则及派彩方式。 <br> 在游戏视窗中,也有"规则"选项，让您在享受游戏乐趣的同时，弹跳视窗随时提醒您游戏规则。 <br> <span class="hong">Q4:单注投注额最低是？</span> <br>A4: 我们单注最低投注额为人民币1元. <br> <span class="hong">Q5: 最高投注额有限制吗？</span>
						<br>A5: 任何一家正规博彩和网络博彩公司对客户的帐户投注都有单注和单注限额，没有限额的公司都基本属于没有任何风险控制 <br>
						的私人或骗子公司，今天的控制是为了明天能保证100%提款给您，这点您可以自行分析。每个项目都有不同的限额设定， <br> 详细请登陆会员都在「会员资料」页面查看。 <br> <span class="hong">Q6:我帐户里面的帐怎麽结算？</span> <br>A6: 请到登入会员，会员页面查看，「结算报表」按天显示每天的结算结果， 点击退水后的结果一栏对应的结果数字进入明细！ <br>
						<br>游戏及投注问题 <br> <br> <span class="hong">Q1: 请问如何加入<?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>？</span> <br>A1: 您可以直接点选
						"立即开户"，确实填写资料后，可立即登记成为彩票王现金网会员 <br> <span class="hong">Q2: 我哪里可以找到游戏的规则？</span> <br>A2:
						请查看"规则说明"页面，清楚告诉您游戏的玩法、规则及派彩方式。 <br> <span class="hong">Q3: 如果忘记密码怎麽办？</span> <br>A3:
						你可以在首页点击"忘记密码"系统自助取回密码，或者联系24小时线上客服人员谘询协助取回你的帐号密码。 <br> 
						<span class="hong">Q4: 当忘记提款密码时怎么办？</span> <br>
						A4:
						你可通过24小时线上客服人员协助处理。
					</div>
				</div>


				<div id="m4" class="taninx">
					<div class="f12 l24">
						<span class="hong">关于我们</span> <br> <br><?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>于2011年成立，专业经营各项博彩业务，现与US平台合作，推出高频彩票现金投注网，开种广东快乐十分、重庆时彩、 <br>北京快乐8、北京赛车PK10等项目，完全自助注册开户，现金开户，
						现金投注 。我们拥有稳定的平台，成熟的玩法，简单的下 <br>注流程、以及优质的客户服务。<?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>公司为彩票博彩爱好者提供最优惠的赔率和最优质的博彩服务。彩票王一直深受会员好 <br>评，一
						直以来以良好的信誉和服务得到许多会员的支持和肯定，接受业界各行业与会员的监督！如您对本公司有所疑惑，欢迎 <br>您对本公司的监督。<?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>为正派且稳健经营的网站，一直以最优
						惠的赔率和优质的服务深受会员好评，请放心进行投注，如 <br>您之前不了解本公司，欢迎您对本公司进行关注。 <br> <br> <span class="hong">【菲律宾执照】</span> <br>
						<br>我們提供的所有產品和服務，是由菲律賓政府卡格揚河經濟特區 First Cagayan leisure and Resort Corporation. <br>
						所授權和監管。這是一家位於Cagayan特別經濟區和自由口岸 (CSEZFP) 的機構，並且是互動遊戲的 <br>授權者及管理者. <br> <br> <span class="hong">【安全与保密】</span>
						<br>我们采用了目前最好的加密技术（1024位RSA密钥交换和 448位blowfish）和防火墙系统保护你的安全、私隐，并保证你享受 <br>公平的 游戏。
						客户在本平台的所有动均严格保密，我们不会向第三方包括政府透露客户资料。所有银行交易 由国际金融机 <br>构在高标准的安全和机密的网络中进行。进入玩家帐户资料也必须有玩家唯一的登录ID和密码，确保客户的资
						金安全有保障。 <br><?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>拥有高素质的客户服务，无论在处理任何事情上，都以简单和快捷享誉全球。 如免费开户，即时存款，实时QQ,MSN回 <br>复客户的询问以及处理客户的难题等。
						<?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>全年24小时运营，全天候处理客户出入款等相关事宜，严格训练的客服团队， <br>以专业、亲切的态度著称，尽速解决您对于网 站、游戏的种种疑难杂症，不但让所有客户皆有宾至如归的感觉，同时我们以 <br>业界前所未见的各种优惠方式回馈我们的客户，绝对是您最明智的选择！
					</div>
				</div>

				<!-- slider -->
				<div id="slider">
					<div id="slideshow" style="position: relative;">
						<div class="slider-item" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 5; opacity: 0; width: 652px; height: 327px;">
							<a href="http://ssc888.bkpf.mobi"><img src="./login_file/1.png" alt="icon"></a>
						</div>
						<div class="slider-item" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 5; opacity: 0; width: 652px; height: 327px;">
							<a href="http://ssc888.bkpf.mobi"><img src="./login_file/2.png" alt="icon"></a>
						</div>
						<div class="slider-item" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 5; opacity: 0; width: 652px; height: 327px;">
							<a href="http://ssc888.bkpf.mobi"><img src="./login_file/3.png" alt="icon"></a>
						</div>
						<div class="slider-item" style="position: absolute; top: 0px; left: 0px; display: block; z-index: 6; opacity: 1; width: 652px; height: 327px;">
							<a href="http://ssc888.bkpf.mobi"><img src="./login_file/4.png" alt="icon"></a>
						</div>
						<div class="slider-item" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 5; opacity: 0; width: 652px; height: 327px;">
							<a href="http://ssc888.bkpf.mobi"><img src="./login_file/5.png" alt="icon"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer">CopyRight 2002-2025 <?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?> All Rights Reserved</div>

		</div>

	</div>


	<script type="text/javascript">
			$(document).ready(function() {
				$('#slideshow').cycle({
					fx : 'fade',
					speed : 'slow',
					timeout : 5000,
					pager : '#slider_nav',
					pagerAnchorBuilder : function(idx, slide) {
						return '#slider_nav li:eq(' + (idx) + ') a';
					}
				});
				$('#promodiv').load('promo');
			});
		function hezuo() {
			layer.open({
				type : 1,
				title : '<span class="gundong"></span><img src="/Public/Home/Img/tl1.png" alt="" />',
				shadeClose : true,
				shade : 0.8,
				area : [ '803px', '85%' ],
				content : $('#m1')

			});
		}

		function youhui() {
			layer.open({
				type : 1,
				title : '<span class="gundong"></span><img src="/Public/Home/Img/tl2.png" alt="" />',
				shadeClose : true,
				shade : 0.8,
				area : [ '803px', '85%' ],
				content : $('#m2')

			});
		}

		function answer() {
			layer.open({
				type : 1,
				title : '<span class="gundong"></span><img src="/Public/Home/Img/tl3.png" alt="" />',
				shadeClose : true,
				shade : 0.8,
				area : [ '803px', '80%' ],
				content : $('#m3')

			});
		}

		function about() {
			layer.open({
				type : 1,
				title : '<span class="gundong"></span><img src="/Public/Home/Img/tl4.png" alt="" />',
				shadeClose : true,
				shade : 0.8,
				area : [ '803px', '80%' ],
				content : $('#m4')

			});
		}

		$('#guestLogin').click(function(){
			var username = '!guest!';
			var password = '!guest!';
	  		$.post("Every/Index/login",{username:username,password:password},function(data){
				alert(data.msg);
				if(data.status == 1){
					window.location.href='agreement.html';
				}
			});
			return false;
		});
	</script>

</body></html>