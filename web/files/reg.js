
function doRegister() {

	var b = $("#reg_username").val();
	if ("" == b) alert("请输入账号名称");
	else if (6 > b.length || 15 < b.length) alert("账号名称由6-15个数字字符组成。");
	else {
		var c = $("#reg_password").val(),
			a = $("#reg_password1").val();
			h = $("#reg_agent").val();
		if ("" == c) alert("请输入密码");
		else if (6 > c.length) alert("密码不能小于6位字符。");
		else if (c != a) alert("输入的密码不一致，请重新输入。");
		else if (a = $("#reg_name").val(), "" == a) alert("请输入真实姓名");
		else {
			var d = $("#reg_email").val();
			if ("" == d) alert("请输入您的电子邮件地址");
			else {
				var e = $("#reg_mobile").val();
				if ("" == e) alert("请输入您的手机号码");
				else {
					var f = $("#wechat").val();
					if ("" == f) alert("请输入您的微信号");
					else {
						var g = $("#reg_code").val();
						"" == g ? alert("请输入验证码。") : $.post(regUrl, {
							username: b,
							password: c,
							email: d,
							mobile: e,
							name: a,
							code: g,
							agent: h,
							weChatId: f
						}, function(a) {
							// console.log(a);
							alert(a.message);
							if(a.success == 1){
								window.location.href=gameUrl;
							}else{
								$("#codeImg").attr("src",codeUrl+"?"+Math.random());
							}
						})
					}
				}
			}
		}
	}
};