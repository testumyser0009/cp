<?php $this->display('head.php');?>
<style>
/* Z-INDEX */
.formError { z-index: 990; }
.formError .formErrorContent { z-index: 991; }
.formError .formErrorArrow { z-index: 996; }

.ui-dialog .formError { z-index: 5000; }
.ui-dialog .formError .formErrorContent { z-index: 5001; }
.ui-dialog .formError .formErrorArrow { z-index: 5006; }




.inputContainer {
position: relative;
float: left;
}

.formError {
position: absolute;
top: 300px;
left: 300px;
display: block;
cursor: pointer;
text-align: left;
}

.formError.inline {
position: relative;
top: 0;
left: 0;
display: inline-block;
}

.ajaxSubmit {
padding: 20px;
background: #55ea55;
border: 1px solid #ff0000;
display: none;
}

.formError .formErrorContent {
width: 100%;
background: #ee0101;
position:relative;
color: #fff;
min-width: 120px;
font-size: 11px;
border: 2px solid #ddd;
box-shadow: 0 0 6px #000;
-moz-box-shadow: 0 0 6px #000;
-webkit-box-shadow: 0 0 6px #000;
-o-box-shadow: 0 0 6px #000;
padding: 4px 10px 4px 10px;
border-radius: 6px;
-moz-border-radius: 6px;
-webkit-border-radius: 6px;
-o-border-radius: 6px;
}

.formError.inline .formErrorContent {
box-shadow: none;
-moz-box-shadow: none;
-webkit-box-shadow: none;
-o-box-shadow: none;
border: none;
border-radius: 0;
-moz-border-radius: 0;
-webkit-border-radius: 0;
-o-border-radius: 0;
}

.greenPopup .formErrorContent {
background: #33be40;
}

.blackPopup .formErrorContent {
background: #393939;
color: #FFF;
}

.formError .formErrorArrow {
width: 15px;
margin: -2px 0 0 13px;
position:relative;
}
body[dir='rtl'] .formError .formErrorArrow,
body.rtl .formError .formErrorArrow {
margin: -2px 13px 0 0;
}

.formError .formErrorArrowBottom {
box-shadow: none;
-moz-box-shadow: none;
-webkit-box-shadow: none;
-o-box-shadow: none;
margin: 0px 0 0 12px;
top:2px;
}

.formError .formErrorArrow div {
border-left: 2px solid #ddd;
border-right: 2px solid #ddd;
box-shadow: 0 2px 3px #444;
-moz-box-shadow: 0 2px 3px #444;
-webkit-box-shadow: 0 2px 3px #444;
-o-box-shadow: 0 2px 3px #444;
font-size: 0px;
height: 1px;
background: #ee0101;
margin: 0 auto;
line-height: 0;
font-size: 0;
display: block;
}

.formError .formErrorArrowBottom div {
box-shadow: none;
-moz-box-shadow: none;
-webkit-box-shadow: none;
-o-box-shadow: none;
}

.greenPopup .formErrorArrow div {
background: #33be40;
}

.blackPopup .formErrorArrow div {
background: #393939;
color: #FFF;
}

.formError .formErrorArrow .line10 {
width: 15px;
border: none;
}

.formError .formErrorArrow .line9 {
width: 13px;
border: none;
}

.formError .formErrorArrow .line8 {
width: 11px;
}

.formError .formErrorArrow .line7 {
width: 9px;
}

.formError .formErrorArrow .line6 {
width: 7px;
}

.formError .formErrorArrow .line5 {
width: 5px;
}

.formError .formErrorArrow .line4 {
width: 3px;
}

.formError .formErrorArrow .line3 {
width: 1px;
border-left: 2px solid #ddd;
border-right: 2px solid #ddd;
border-bottom: 0 solid #ddd;
}

.formError .formErrorArrow .line2 {
width: 3px;
border: none;
background: #ddd;
}

.formError .formErrorArrow .line1 {
width: 1px;
border: none;
background: #ddd;
}
fieldset { margin-top:15px;padding:10px 0px;border:1px solid #ff0000;overflow:hidden; }
fieldset legend { margin:0px 12px;padding:2px 5px;color:#fff;font-weight:bold;font-size:14px; }
fieldset table { margin-top:0px; }
fieldset table th,fieldset table td { padding:2px 5px; }
fieldset table th { padding:2px 0px;width:150px;text-align:right;font-weight:normal; }
fieldset table th span { margin:0px 5px;color:#ff0000;font-weight:bold; }
INPUT.inp-txt {
height: 22px;
line-height: 22px;
padding: 2px 4px 0px 4px;
border: 1px solid #ff0000;
background: #FBFBFB;
box-shadow: inset 2px 2px 4px #5d0b0d;
}

.reg-btn { cursor:pointer;width:90px;height:28px;border:1px solid #707070;background:url(/yoy/images/btn-bg.png) repeat-x;color:#707070; }
.reg-btn:hover { border:1px solid #fea201;background-position:left bottom;color:#990000; }

.ag-btn { cursor:pointer;width:90px;height:28px;border:1px solid #707070;background:url(/yoy/images/btn-bg.png) repeat-x;color:#707070; }
.ag-btn:hover { border:1px solid #fea201;background-position:left bottom;color:#990000; }
</style>
<div class="bannerbg"><div class="banner"></div></div>
<div class="main">
<div class="gonggao">
<div class="wrap">
<div style="padding-right:100px; padding-left:140px; color:#FFF;">
<marquee  behavior="scroll" scrollamount="2" direction="left" style=" padding-top:13px;">
全网第一最具公信力信誉平台！两面赔率1.993  定位赔率9.93  期期返水0.5%！集齐当红最热高频彩票一站式体验！玩法公平、规则公正、信誉公开！大额无忧！百万取款3分钟内火速到账！
</marquee>
</div>
</div>
</div><div style="width:100%; float:left; height:46px;"></div>
<div class="wrap">
<div class="lefter">
<div class="leftbg">
<ul>
<li><a href="/At1.php">关于我们</a></li>
<li><a href="/At2.php">常见问题</a></li>
<li><a href="/At3.php">技术问题</a></li>
<li><a href="/At4.php">一般常见问题</a></li>
<li><a href="/At5.php">规则说明</a></li>
<li><a href="/At6.php">最新优惠</a></li>
<li><a href="/At7.php">存取帮助</a></li>
<li><a href="/At8.php">合作伙伴</a></li>
<li><a href="/At9.php">联系我们</a></li>

</ul>
</div>
<div class="leftkf"><a href="javascript:BBOnlineService();"><img src="/yoy/images/page/kf.png"></a></div>
</div><div class="righter">
<div class="right_wz">您当前所在的位置：<a href="/index.php">首页</a> > 会员注册</div>
<div class="right_t1"></div>
<div class="right_t2">
<div id="joinMember">
<form action="/index.php/user/registered" method="post" onajax="registerBeforSubmit" enter="true" call="registerSubmit" target="ajax">
<input type="hidden" name="parentId" value="<?=$args[0]?>" />
<input type="hidden" name="lid" value="<?=$linkData['lid']?>"  />
<fieldset>
<legend>注册帐号</legend>
<table style="color:#FFF">
<tbody>
<tr>
<th></th>
<td>账号规则：账号必须为6-15位数字和字母组合</td>
</tr>
<TR>
<TH><SPAN>*</SPAN>会员账号：</TH>
<TD><input name="username" id="username" type="text" size="40" class="inp-txt" /></TD>
</tr>
<tr>
<th></th>
<td>密码规则：密码必须为6-15位数字和字母组合</td>
</tr>
<TR>
<TH><SPAN>*</SPAN>登陆密码：</TH>
<TD><INPUT name="password" id="password" type="password" size="40" class="inp-txt" /></TD>
</tr>
<tr>
<th></th>
<td></td>
</tr>
<TR>
<TH><SPAN>*</SPAN>确认密码：</TH>
<TD><INPUT type="password" name="cpasswd" size="40" class="inp-txt" /></TD>
</TR>
<th></th>
<td style="color:#FF0000;">真实姓名必须与您用于提款的银行户名字一致</td>
</tr>
<TR>
<TH><SPAN>*</SPAN>真实姓名：</TH>
<TD><INPUT id="name" size="40" maxLength="10" name="name" class="inp-txt" /></TD>
</TR>
<tr>
<th></th>
<td style="color:#FF0000;">提款认证必须，务必记住</td>
</tr>
<TR>
<TH><SPAN>*</SPAN>取款密码：</TH>
<TD><INPUT type="text" name="coinpwd" size="40" class="inp-txt" /></TD>
</TR>
<!--<TR>
<TH><SPAN>*</SPAN>取款密码：</TH>
<TD>
<SELECT id="paypasswd" name="paypasswd1" style="width:46px;">
<OPTION selected value="0">0</OPTION>
<OPTION value="1">1</OPTION>
<OPTION value="2">2</OPTION>
<OPTION value="3">3</OPTION>
<OPTION value="4">4</OPTION>
<OPTION value="5">5</OPTION>
<OPTION value="6">6</OPTION>
<OPTION value="7">7</OPTION>
<OPTION value="8">8</OPTION>
<OPTION value="9">9</OPTION>
</SELECT>
<SELECT id="paypasswd" name="paypasswd2" style="width:46px;">
<OPTION selected value="0">0</OPTION>
<OPTION value="1">1</OPTION>
<OPTION value="2">2</OPTION>
<OPTION value="3">3</OPTION>
<OPTION value="4">4</OPTION>
<OPTION value="5">5</OPTION>
<OPTION value="6">6</OPTION>
<OPTION value="7">7</OPTION>
<OPTION value="8">8</OPTION>
<OPTION value="9">9</OPTION>
</SELECT>
<SELECT id="paypasswd" name="paypasswd3" style="width:46px;">
<OPTION selected value="0">0</OPTION>
<OPTION value="1">1</OPTION>
<OPTION value="2">2</OPTION>
<OPTION value="3">3</OPTION>
<OPTION value="4">4</OPTION>
<OPTION value="5">5</OPTION>
<OPTION value="6">6</OPTION>
<OPTION value="7">7</OPTION>
<OPTION value="8">8</OPTION>
<OPTION value="9">9</OPTION>
</SELECT>
<SELECT id="paypasswd" name="paypasswd4" style="width:46px;">
<OPTION selected value="0">0</OPTION>
<OPTION value="1">1</OPTION>
<OPTION value="2">2</OPTION>
<OPTION value="3">3</OPTION>
<OPTION value="4">4</OPTION>
<OPTION value="5">5</OPTION>
<OPTION value="6">6</OPTION>
<OPTION value="7">7</OPTION>
<OPTION value="8">8</OPTION>
<OPTION value="9">9</OPTION>
</SELECT>
<SELECT id="paypasswd" name="paypasswd5" style="width:46px;">
<OPTION selected value="0">0</OPTION>
<OPTION value="1">1</OPTION>
<OPTION value="2">2</OPTION>
<OPTION value="3">3</OPTION>
<OPTION value="4">4</OPTION>
<OPTION value="5">5</OPTION>
<OPTION value="6">6</OPTION>
<OPTION value="7">7</OPTION>
<OPTION value="8">8</OPTION>
<OPTION value="9">9</OPTION>
</SELECT>
<SELECT id="paypasswd" name="paypasswd6" style="width:46px;">
<OPTION selected value="0">0</OPTION>
<OPTION value="1">1</OPTION>
<OPTION value="2">2</OPTION>
<OPTION value="3">3</OPTION>
<OPTION value="4">4</OPTION>
<OPTION value="5">5</OPTION>
<OPTION value="6">6</OPTION>
<OPTION value="7">7</OPTION>
<OPTION value="8">8</OPTION>
<OPTION value="9">9</OPTION>
</SELECT>
</TD>
</TR>-->
<tr>
<th></th>
<td style="color:#FBFBFB;">电子邮箱(Email)格式：88888888@qq.com</td>
</tr>
<TR>
<TH><SPAN>*</SPAN>电子邮箱：</TH>
<TD>
<input name="email" type="text" size="40" maxlength="30" class="inp-txt" />
</TD>
</TR>
<TR>
<Td colspan="2" height="5"></TD>
</TR>
</tbody>
</table>
</fieldset>
<table style="width:700px; color:#FFF">
<tbody>
<tr><td height="70" align="center"><SPAN style="color:#fff100;">*</SPAN> <INPUT id="Checkbox" type="checkbox" name="Checkbox"  class="rdFace" /> 我已届满18岁合法博彩年龄﹐且同意各项开户条约。</td></tr>
<tr><td colspan="2" height="10"></td></tr>
<tr>
<td align="center">
<input type="submit" name="regBtn" value="立即提交" class="reg-btn" />
&nbsp; <input type="reset" name="regBtn2" value="重新填写" class="reg-btn" />
</td>
</tr>
<tr><td colspan="2" height="20"></td></tr>
</tbody>
</table>
</FORM>
</div>
</div>
</div>

</div>
<div class="links"><div class="linksbg"></div></div>
<?php $this->display('foot.php');?>