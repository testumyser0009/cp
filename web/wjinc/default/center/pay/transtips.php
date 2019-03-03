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
 	<script type="text/javascript" src="/static/lib/util/httpUtil.js"></script>
 	<link href="/static/css/popup.css" rel="stylesheet" type="text/css"  />
	<style type="text/css">
	 	body{ font-size:14px; font-family:font-Arial,sans-serif; margin:0; padding:0; }
		div,ul,ol,li,form,img,h1,h2,h3,h4,h5,h6,hr,p,blockquote,dl,dt,dd,pre,code,form,fieldset,legend,button,input,textarea{ margin:0; padding:0; border:0; list-style:none; overflow:hidden;}
		a{ text-decoration:none;}
	</style>
</head>
<body>
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

 <body> 				
	<div class="popup">
		    <div class="popupinternal order-submit">
	    <div class="loading-container">
	      <h4>支付信息</h4>
	      <p>支付方式：在线支付</p>
			<p>支付金额：￥<span id="rechMoney"></span></p>
			<p id="rebate_html" class="hide">赠送金额：<span id="rebate_money">0</span>	</p>
			<p>
	        1. 成功付款后将会自动到帐，并弹出到帐提示。<br>
	        2. 长时间无反应，请联系客服。
	      </p>
	    </div>
	    <div class="button-container">
	      <a class="btn-blue button" href="javascript:parent.hideOrderInfo();">查看交易</a>
	      <a class="btn-blue button" href="javascript:parent.onlineService();">联系客服</a>
	    </div>
	  </div>
	</div>
	<script type="text/javascript">
		var rechMoney = HttpUtil.GetUrlPara()["rechMoney"];
		var rebateMoney = HttpUtil.GetUrlPara()["rebateMoney"];
		$("#rechMoney").html(rechMoney);
		if(rebateMoney>0){
			$("#rebate_html").show();
			$("#rebate_money").html(rebateMoney);
		}
	</script>
<script type="text/javascript">
function Centerinit() {
		$.ajax({
			type : "get",
			url : '/Userrech/detail.do',
			dataType : "json",
			success : function(data) {
				if (!data) {
					return;
				}

				$(self.parent.frames["framePage"].document).find('#balance').html(data.money);
				//console.log($(self.parent.frames["framePage"].document).find('#balance').text()); 				
				parent.PullMsg.animateUserMoney(data.money);
			}
		});
}
setInterval("Centerinit()",3000);
</script>
 </body>
</html>