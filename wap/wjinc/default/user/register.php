<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?></title>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=360, initial-scale=0.5, user-scalable=0, minimum-scale=0.5, maximum-scale=1.0">
<!--<meta name="viewport" content="user-scalable=no, initial-scale=0.5, minimal-ui, width=360" id="viewport" />-->
<meta http-equiv="cleartype" content="on">
<meta name="apple-mobile-web-app-status-bar-style" content="yes" />
<script type="text/javascript" src="/skin/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/skin/main/onload.js?version=20160420"></script>
<script type="text/javascript" src="/skin/main/reglogin.js"></script>
<style type="text/css">
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
body {
    font-family: Tahoma, Helvetica, Arial, "Microsoft Yahei","微软雅黑", STXihei, "华文细黑", sans-serif;
    font-size: 24px;
    font-weight: 200;
    line-height: 32px;
    /*color: #828a94;*/
	margin:0;
}
h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
}
h1, .h1, h2, .h2, h3, .h3 {
    margin-top: 20px;
    margin-bottom: 10px;
}
p {
    margin: 0 0 10px;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
input {
    line-height: normal;
}
button, html input[type="button"], input[type="reset"], input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer;
}

.white {
    color: #fff;
}

.header {
    position: fixed;
    top: 0;
    width: 100%;
    height: auto;
    z-index: 999;
}
.graynavi {
    height: 100px;
    width: 100%;
    background-color: #f2f2f2;
    position: relative;
    border-top: 2px solid #fff;
}
.aligncenter {
    text-align: center;
}
.cnbig1 {
    font-size: 22px;
    line-height: 20px;
    font-weight: 400;
}
.graybartitle {
    padding-top: 27px;
}
.graynavibtn {
    position: absolute;
    left: 20px;
    top: 32px;
}
.graynavi a {
    color: #000;
}
.marginleft20 {
    margin-left: 20px;
}
.container {
    margin-right: auto;
    margin-left: auto;
    padding-left: 10px;
    padding-right: 10px;
}
.cmargin20 {
    padding: 20px;
}
.cmargintop2 {
    margin-top: 150px;
}
.container h1 {
    font-size: 30px;
}
.container p {
    font-size: 26px;
}
.gap10 {
    height: 10px;
}
.rowfield {
    padding: 10px 0;
}
.rowfield .col1 {
    width: 25%;
    height: auto;
}
.margintop15 {
    margin-top: 15px;
}
.rowfield .col2 {
    width: 75%;
    height: auto;
}
.field_input {
    width: 100%;
    height: 65px;
    border: 2px solid #b6b6b6;
    padding: 20px;
}
input, button, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
.red {
    color: #fe6767;
}
.cnsmall1 {
    font-size: 22px;
}
.field_input2 {
    width: 50%;
    height: 65px;
    border: 2px solid #b6b6b6;
    padding: 20px;
}
.fl {
    float: left;
}
.cnbig1 {
    font-size: 22px;
    line-height: 20px;
    font-weight: 400;
}
.btnresetpass {
    width: 50%;
    text-align: center;
    padding: 20px 0;
    cursor: pointer;
    margin: 0 auto;
    background-color: #2061b3;
}
.clearfix:before, .clearfix:after, .dl-horizontal dd:before, .dl-horizontal dd:after, .container:before, .container:after, .container-fluid:before, .container-fluid:after, .row:before, .row:after, .form-horizontal .form-group:before, .form-horizontal .form-group:after {
    content: " ";
    display: table;
}
.clearfix:after, .dl-horizontal dd:after, .container:after, .container-fluid:after, .row:after, .form-horizontal .form-group:after {
    clear: both;
}
</style>
  <script type="text/javascript">
  $(document).ready(function() { 
    $('.infopanelrow .accounts:first').show();
    if (screen.width > 360 && !navigator.userAgent.match("UCBrowser") && navigator.userAgent.match("Android")) {
      $('body').css("zoom","0.5")
    }
  });
  </script>

</head>
<body>
<div class="header">
    <div class="graynavi">
        <div class="graybartitle blue aligncenter cnbig1">
            注册
          </div>
        <div class="graynavibtn" rel="login.html">
            <a href="/"><div class="fl"><img src="/images/backarrow.jpg" width="23" height="35" alt="">
              </div>
              <div class="fl marginleft20">主页</div>
            </a>
          </div>
    </div>
</div>
<form action="/index.php/user/registered" method="post" onajax="registerBeforSubmit" enter="true" call="registerSubmit" target="ajax">
    <div class="container cmargin20 cmargintop2 subcontent2">
      <h1>注册</h1>
        <p>请在以下填写您的注册信息。</p>
    <div class="gap10"></div>
   
    <div class="rowfield clearfix">
        <div class="col1 fl margintop15">登录账号：</div>
          <div class="col2 fl"><input type="text" id="username" name="username" class="text field_input">
            <div class="red cnsmall1" id='nameTips'>＊帐户名由4-16个字符组成</div>
          </div>
    </div>
    <div class="rowfield clearfix">
        <div class="col1 fl margintop15">登录密码：</div>
          <div class="col2 fl"><input type="password" id="password" name="password" class="text field_input">
            <div class="red cnsmall1">＊6-20个字母、数字或组合组成，区分大小写</div>
          </div>
    </div>
    <div class="rowfield clearfix">
        <div class="col1 fl margintop15">确认密码：</div>
          <div class="col2 fl"><input type="password" name="cpasswd" id="cpasswd" class="text field_input">
            <div class="red cnsmall1">＊请再次输入密码以确保输入无误</div>
          </div>
    </div>
    <div class="rowfield clearfix">
        <div class="col1 fl margintop15">QQ号码：</div>
          <div class="col2 fl"><input type="text" name="qq" id="qq" maxlength="12" class="text field_input">
            <div class="red cnsmall1">请输入QQ号码</div>
          </div>
    </div>
    <div class="rowfield clearfix">
      <div class="col1 fl margintop15">验证码：</div>
        <div class="col2 fl"><input type="text" name="vcode" id="vcode" class="field_input2 fl">
          <div class="captcha capcha fl"><img width="178" height="64" alt="验证码" align="absmiddle" src="/user/vcode/<?=$this->time?>" title="看不清楚，点我换图" onclick="this.src='/user/vcode/'+(new Date()).getTime()"/></div>
        </div>
    </div>
    </div>
    <div class="rowfield clearfix">
      <div class="col1 fl margintop15"></div>
        <div class="col2 fl"><input type="submit" class="btnresetpass white cnbig1" id="btnRegister" value="创建帐号"></div>
      </div>
</form>
</body>
</html>
