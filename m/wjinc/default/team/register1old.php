<!doctype html>
<html>
<meta charset="UTF-8"/>
<meta http-equiv = "X-UA-Compatible" content = "IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<head>
<meta NAME="robots" CONTENT="noindex,nofollow">
<meta name="robots" content="noarchive">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?></title>
<script type="text/javascript">
function browserRedirect() {
    var sUserAgent = navigator.userAgent.toLowerCase();
    //var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
    var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
    var bIsMidp = sUserAgent.match(/midp/i) == "midp";
    var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
    var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
    var bIsAndroid = sUserAgent.match(/android/i) == "android";
    var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
    var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
    if (( bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) )
	{
		//window.location.href="";  //
	}
}
//browserRedirect();
</script>
<link href="/skin/new/css/lib.min.css?version=20160420"  type="text/css" rel="stylesheet" /> <!--new-->
<script type="text/javascript" src="/skin/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/skin/main/onload.js?version=20160420"></script>
<script type="text/javascript" src="/skin/main/reglogin.js"></script>
<script type="text/javascript" src="/skin/js/gamecommon.js"></script>
<link rel="stylesheet" href="/css/nw_style.css"  type="text/css" />
</head>

<body class="login_bgsrcoll">
		<form action="/index.php/user/registered" method="post" onajax="registerBeforSubmit" enter="true" call="registerSubmit" target="ajax">
        	<input type="hidden" name="parentId" value="<?=$args[0]?>" />
            <input type="hidden" name="lid" value="<?=$linkData['lid']?>"  />
	<div class="login_masklayer">		
	<!--<div class="login_logo"></div>-->
		<div class="login_logoform">
        	<ul>
                <li><label class="label_icon01">用户名：</label><input name="username" maxlength="11" id="username" placeholder="请输入您的用户名" data-explain="用户名须是6-12位数字+字母组合。" /></li>
                <li><label class="label_icon02">密码：</label><input name="password" maxlength="16" id="password" placeholder="请设置密码" data-explain="6~16位组成，建议使用字母和数字混合。" /></li>
                <li><label class="label_icon02">确认密码：</label><input type="password" name="cpasswd" maxlength="16" id="cpasswd" placeholder="请再次输入您设置的密码" data-explain="请再次输入密码" /></li>
                <li><label class="label_icon02">QQ号码：</label><input type="text" maxlength="11" name="qq" id="qq" placeholder="请输入QQ号码" data-explain="请输入QQ号码" /></li>
              <li class="nbr"><div class="yzm_div"><label class="label_icon03">验证码：</label><input name="vcode" id="vcode" type="text" value="" class="txt01" placeholder="验证码" /></div><div class="yzm"><img style="cursor:pointer;margin-bottom:0px;" alt="验证码" align="absmiddle" src="/user/vcode/<?=$this->time?>" title="看不清楚，点我换图" onclick="this.src='/user/vcode/'+(new Date()).getTime()"/></div></li>
              <li class="nbr"><a href="javascript:void(0);" onclick="$(this).closest('form').submit()" class="login_btn">注 册</a></li>
            </ul>
        </div>
 <div class="login_copyight">
    <p class="p1"></p>
  </div>
    </div>
</form>
<!--漂浮-->
<div class="intro skrollable skrollable-between">
    <div class="container-fluid banner">
	<canvas id="canvas_bg"></canvas>
	</div>
  <span class="shadow"></span> 
  </div>
<!--<script language="javascript" type="text/javascript" src="/user/js/common/jquery.md5.js"></script>-->
<script language="javascript" type="text/javascript" src="/js/layer/layer.js"></script>
<script language="javascript" type="text/javascript" src="/js/ban.js"></script>
	</body>
</html>