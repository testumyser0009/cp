<!DOCTYPE html>
<!-- saved from url=(0036)https://www.555123.com/register.html -->
<html class="no-js" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title><?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?></title>
<meta name="keywords" content="">
<meta name="description" content="">
<link type="text/css" href="/files/loginstyle.css" rel="stylesheet">
<link href="/files/validationEngine.css" type="text/css" rel="stylesheet">
<script type="text/javascript">
	var regUrl = "/every/index/register.html";
	var loginUrl = "/home/index/login.html";
	var codeUrl = "/every/index/code.html";
	var gameUrl = "/game.html";
</script>
<script src="/files/jquery.js" type="text/javascript"></script>
<script src="/files/jquery.cycle.all.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/files/jquery1.js"></script>
<script type="text/javascript" src="/files/jquery_003.js"></script>
<script type="text/javascript" src="/files/jquery2.js"></script>
<script type="text/javascript" src="/files/reg.js"></script>

<script type="text/javascript">
	var data = "欢迎进入永发娱乐场，祝您喜中大奖！ ";
	$(document).ready(function() {
		$("#noticeDiv").text(data);
		

	});
</script>
</head>

<body>
	<div class="minbox">
		<span class="el-2"></span>
		<span class="el-3"></span>
		<div class="wrapper">
			<span class="el-1"></span>
			<!-- header -->
		<div class="header">
			<div class="logo">
				<object id="FlashA" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="278" height="110" class="flash">
					<param name="movie" value="/Public/Home/Img/reglogo.swf">
					<param name="quality" value="high">
					<param name="wmode" value="transparent">
					<param name="swfversion" value="6.0.65.0">
					<!--[if !IE]>-->
					<object type="application/x-shockwave-flash" data="./login_file/reglogo.swf " width="260" height="87">
						<!--<![endif]-->
						<param name="quality" value="high">
						<param name="wmode" value="transparent">
						<param name="swfversion" value="6.0.65.0">
						<!--[if !IE]>-->
					</object>
					<!--<![endif]-->
			  </object>
				</div>
				<div class="notice">
					<h2>最新公告：</h2>
					<div class="cont">
						<marquee id="noticeDiv" direction="left" scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()">欢迎进入98彩票网，</marquee>
					</div>
				</div>
			</div>

			<div style="width: 1000px; margin: 0  auto; overflow: hidden;"><img src="./files/toubu.png"></div>
			<div class="kaihubg cur" style="display: block;">
				<div class="kaihu">
					<div class="kaihuin">
						<div class="kaihutl">请在以下填写您的注册信息</div>
						<div class="cl h28"></div>
						<script type="text/javascript">
							jQuery(document).ready(function() {
								var theForm = $("#main");
								theForm.validationEngine();
								$('input[name=regBtn]').click(function() {
									if (theForm.validationEngine('validate')) {
										theForm.submit();
									}
								});
							});
						</script>
						<form id="main" method="post" onajax="registerBeforSubmit" enter="true" call="registerSubmit" target="ajax" name="main" action="/index.php/user/registered">
							<input type="hidden" name="keys" value="add" />
							<input type="hidden" name="website" value="18b18.com" /> 
							<table class="zhucetable">
								<tbody><tr>
									<td width="96"><div class="tar f15">会员账号：</div></td>
									<td width=""><input size="40" name="username" id="username" maxlength="15" class="validate[required,custom[onlyLetterNumber],minSize[6],maxSize[15]] zucenpt" type="text"> <span class="pl8 f15">账号规则：账号必须为6-15为数字和字母组合</span></td>

								</tr>
								<tr>
									<td width="96"><div class="tar f15">登陆密码：</div></td>
									<td width=""><input name="password" id="password" maxlength="15" size="40" class="validate[required,minSize[6],maxSize[15]] zucenpt" type="password"> <span class="pl8 f15">密码规则：密码长度要有6-15个字符，以及必须含有数字和字母组合</span>
									</td>

								</tr>
								<tr>
									<td width="96"><div class="tar f15">确认密码：</div></td>
									<td width=""><input name="cpasswd" id="cpasswd" maxlength="15" size="40" class="validate[required,equals[password]] zucenpt" type="password"> <span class="pl8 f15">确定密码</span></td>

								</tr>
								<tr>
									<td width="96"><div class="tar f15">真实姓名：</div></td>
									<td width=""><input id="name" name="name" size="40" maxlength="10" class="validate[required] zucenpt"> <span class="pl8 f15">姓名必须与你用于提款的银行户口名字一致，否则无法提款</span></td>

								</tr>
								<tr>
									<td width="96"><div class="tar f15" >电子邮箱：</div></td>
									<td width=""><input id="email" name="email" size="40" maxlength="30" class="validate[required,custom[email],minSize[4]] zucenpt" type="text"> <span class="pl8 f15">email格式：888888@qq.com</span>
									</td>
								</tr>
	 							<tr>
									<td width="96"><div class="tar f15">取款密码：</div></td>
									<td width=""><input id="coinpwd" name="coinpwd" size="40" maxlength="10" class="validate[required] zucenpt">
									</td>

								</tr>
								<tr>
									<td height="70" colspan="2" align="center">
										<SPAN style="color:#fff100;">*</SPAN>
										<INPUT id="Checkbox" type="checkbox" name="Checkbox"  class="rdFace" /> 
										我已届满18岁合法博彩年龄﹐且同意各项开户条约。</td>
								</tr>

								<tr>
									<td width="96"><div class="tar f15">&nbsp;</div></td>
									<td width=""><input type="button" name="regBtn1" id="regBtn" class="subbtn fl mr12" value=""> <a href="/index.php" class="wydeng">我要登录</a></td>

								</tr>
								<input type="hidden" id="reg_agent" name="agent" value="">
							</tbody></table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<script>
		$("#regBtn").click(function(){
			var theForm = $("#main");
				theForm.validationEngine();
								
				if (theForm.validationEngine('validate')) {
						var username = $("#username").val();
						if(username == ''){
							alert('请输入您的用户名');
							return false;
						}
						var password = $("#password").val();
						var password2 = $("#cpasswd").val();
						var reg_code=$("#coinpwd").val();
						var cod=/^[0-9]{6,}$/;
						if(!cod.test(reg_code)){alert("密码至少6位数字!!");return false;}
						//reg_code.test();
						var email =$("#email").val();
						var name=$("#name").val();
						var Checkbox=$("#Checkbox").val();
						if(password == ''){
							alert('请输入您的密码');
							return false;
						}
						// $('#main').submit();
						$.post("/index.php/user/registered",{coinpwd:reg_code,keys:"add",website:"18b18.com",username:username,password:password,
						cpasswd:password2,email:email,name:name,Checkbox:Checkbox
						
						},function(data){
							//alert(data);
							//if(data.status == 1){
								window.location.href='member/tran';
							//}
						}).error(function(data) { alert("用户名已经存在"); });
					}
								
			// alert(1);
			
			return false;
	  	})
</script>

</body></html>