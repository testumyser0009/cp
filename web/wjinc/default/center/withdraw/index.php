
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
	<link href="/static/css/margin.css" rel="stylesheet" type="text/css"/>
	<link href="/static/css/center.css" rel="stylesheet" type="text/css"/>
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

	<div>
		<input id="pageType" type="hidden" value="WITHDRAWAL" />
		<div class="memberheader">
	<div class="useravatar floatleft">
		<img src="/static/images/skin/blue/userlogo.jpg" width="84" height="83" alt="">
	</div>
	<div class="memberinfo floatleft">
		<h1 class="floatleft">
			<script language="javaScript">
				now = new Date(), hour = now.getHours()
				if (hour < 6) {
					document.write("凌晨好")
				} else if (hour < 9) {
					document.write("早上好")
				} else if (hour < 12) {
					document.write("上午好")
				} else if (hour < 14) {
					document.write("中午好")
				} else if (hour < 17) {
					document.write("下午好")
				} else if (hour < 19) {
					document.write("傍晚好")
				} else if (hour < 22) {
					document.write("晚上好")
				} else {
					document.write("夜里好")
				}
			</script>
			, <span id="userName" class="blue"></span>
		</h1>
		<div class="balance floatleft">
			<div class="balancevalue floatleft">
				中心钱包 : <span class="blue"><span id="balance" class="balanceCount">0</span> 元</span>
			</div>
			<div
				class="floatright margintop7 marginright10 marginleft5 pointer">
				<a onclick="Center.init();" href="javascript:;">
					<img src="/static/images/skin/blue/btnrefresh.jpg" width="16" height="17" alt="">
				</a>
			</div>

		</div>
		<div class="gap5"></div>
		<p>彩票网投领导者·实力铸就品牌·诚信打造一切·相信品牌的力量</p>
		<p>最后登录：<span id="loginTime"></span></p>
	</div>
</div>

		<div class="membersubnavi">
			<div class="subnavi blue">
				<a href="/center/pay/index.html">充值</a>
			</div>
			<div class="subnavi blue">
				提款
				<div class="subnaviarrow"></div>
			</div>
			<div class="subnavi blue">
				<a href="/center/pay/list.html">充值记录</a>
			</div>
			<div class="subnavi blue">
				<a href="/center/withdraw/list.html">提款记录</a>
			</div>
		</div>
		<div class="stepswithdraw">
			<div class="substeps">
				<div class="substepitmgray1 substepitmblue1">
					<b>01</b> 提交
				</div>
				<div class="substepitmgray2">
					<b>02</b> 审核
				</div>
				<div class="substepitmgray2">
					<b>03</b> 出款
				</div>
				<div class="substepitmgray2">
					<b>04</b> 到账
				</div>
			</div>
			<div class="line2"></div>
		</div>

		<div id="withdrawal1" class="subcontent2 hide">
			<div class="addbankcard">
				<div class="logo-th-2"></div>
				<p class="bigtxt aligncenter gray">
					您的中心钱包余额尚未达到提款标准<br> 提款金额最少为100.00元
				</p>
				<div class="th-btn">
					<input type="button" class="c-button" onclick="window.location.href='/center/pay/index.html'" value="快速存款">
				</div>
			</div>
		</div>

		<div id="withdrawal2" class="subcontent2 hide">
			<div class="addbankcard">
				<div id="card_h">
					<div class="logo-th-2"></div>
					<p class="bigtxt aligncenter gray">添加一张银行卡开始提款吧</p>
					<div class="margintop40 aligncenter">
						<img src="/static/images/bank/addbankcard.jpg" width="214" height="112" onclick="WithDraw.showAddBank();">
					</div>
				</div>
				<div id="card_s" class="formpanel margintop20 hide">
					<div class="wd-row">
						<div class="wd-col1">持卡人姓名：</div>
						<div class="wd-col2">
						<?php if($this->user['name']){
						?><input type="text" disabled class="textfield1" id="fullName" style="color:#999;" value="<?=$this->user['name']?>" readonly>
						<?php }else{?><input type="text" class="textfield1" id="fullName">
						<?php }?>
						</div>
					</div>
					<div class="wd-row">
						<div class="wd-col1">选择银行：</div>
						<div class="wd-col2">
							<select id="bankId" class="selectbox gray">
                           	<?php
							$data=$this->getRows("select * from {$this->prename}bank_list where isDelete=0 order by sort asc");
							foreach($data as $var){
                           	?>
								<option value="<?=$var['id']?>"><?=$var['name']?></option>
                             <?php }?>
							</select>
						</div>
					</div>
					<div class="wd-row">
						<div class="wd-col1">银行卡号：</div>
						<div class="wd-col2">
							<input type="text" id="cardId" class="textfield1">
						</div>
					</div>
					<div class="wd-row">
						<div class="wd-col1">开户网点：</div>
						<div class="wd-col2">
							<input type="text" id="bankaddress" class="textfield1">
						</div>
					</div>
					<div class="wd-row" style="text-align: center;">
						<input type="button" class="c-button" onclick="WithDraw.bindBank();" value="提交">
					</div>
				</div>
			</div>
		</div>

		<div id="withdrawal3" class="subcontent2 hide">
			<div class="addbankcard">
				<div class="logo-th-2"></div>
				<p class="bigtxt aligncenter gray">您还未设置提款密码，请先设置提款密码</p>
				<div class="formpanel margintop20">
					<div class="wd-row">
						<div class="wd-col1">登录密码：</div>
						<div class="wd-col2">
							<input type="password" id="loginpwd" class="textfield1">
						</div>
					</div>
					<div class="wd-row">
						<div class="wd-col1">提款密码：</div>
						<div class="wd-col2">
							<input type="password" id="drawcode" class="textfield1">
						</div>
					</div>
					<div class="wd-row">
						<div class="wd-col1">重复密码：</div>
						<div class="wd-col2">
							<input type="password" id="redrawcode" class="textfield1">
						</div>
					</div>
					<div class="wd-row" style="text-align: center;">
						<input type="button" class="c-button" onclick="WithDraw.setFundPwd();" value="提交">
					</div>
				</div>
			</div>
		</div>

		<div id="withdrawal4" class="subcontent2 hide">
			<div class="addbankcard">
				<div class="formpanel margintop20">
					<div class="wd-row">
						<div class="wd-col1">提款金额：</div>
						<div class="wd-col2">
							<input id="drawamount" type="text" class="textfield1">
						</div>
					</div>
					<div class="wd-row">
						<div class="wd-col1">银行卡号：</div>
						<div class="wd-col2">

							<div class="radio-bank-2">
								<div class="radio">
									<input type="radio" name="bank" value="123456" checked="checked">
								</div>
								<div class="radio-label">
									<span id="bankName" class="name">银行</span> <span>尾号：</span><span id="lastCard">加载中...</span>
								</div>
							</div>
							<a id="rebindBtn" href="javascript:WithDraw.rebindBank()" style="line-height: 34px;margin-left: 20px;">重新绑定</a>
						</div>
					</div>
					<div class="wd-row">
						<div class="wd-col1">提款密码：</div>
						<div class="wd-col2">
							<input id="drawcode1" type="password" class="textfield1">
						</div>
					</div>
					<div class="wd-row" style="text-align: center;">
						<input type="button" class="c-button" value="提交" onclick="WithDraw.submit();">
					</div>
					<div class="wd-row">
						<div class="wd-col1">注意：</div>
						<div class="wd-col2">每天每位用户支持$5笔提款，每笔提款间隔时间必须超过1小时。</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="/static/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript">
var layer = parent.layer;
parent.UserBet.playType = "NORMAL";
</script>
<script type="text/javascript" src="/static/lib/util/md5.js"></script>
<script type="text/javascript" src="/static/lib/util/common.js"></script>
<script type="text/javascript" src="/static/lib/util/ctab.min.js"></script>
<!--  error.js要放在最后面  -->
<script type="text/javascript" src="/static/lib/util/error.js"></script>
	<script type="text/javascript" src="/static/js/center.js"></script>
</body>
</html>