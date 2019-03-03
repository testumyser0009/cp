<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript">
				/*	var url = window.location.href;
                   if (url.indexOf("https") < 0) {
                      url = url.replace("http:", "https:");
                       window.location.replace(url);
                   }*/
</script>
<?php
if(!$_SESSION['from']){
	if($_GET['from'] == 'm'){
		session_start;
		$_SESSION['from']=$_GET['from'];
	}
}
?>
</head><body>﻿
    <meta http-equiv="Content-Language" content="zh-cn">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="format-detection" content="telephone=no">
    <title>万利国际</title>

    <link href="/yoy/css/login.min.css" rel="stylesheet" type="text/css">


    <script src="/yoy/js/js.js"></script>
    <script src="/yoy/js/jquery-1.8.2.min.js"></script>
    <link rel="stylesheet" href="/yoy/css/validationEngine.jquery.css">
    <script src="/yoy/js/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
    <!--script src="js/11111.js"></script-->
    <script src="/yoy/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="/skin/main/onload.js?version=20160420"></script>
	<script type="text/javascript" src="/skin/main/reglogin.js"></script>
	<script type="text/javascript" src="/js/guest.js"></script>
	<script type="text/javascript" src="/yoy/js/global.js"></script>
    <script type="text/javascript">
        $(function(){
            window.onload = function () {
                $("#home").fadeIn(1000);
		

            };
        });

    </script>
    <script>
		function SetHome(obj,url){
		  try{
			obj.style.behavior='url(#default#homepage)';
			obj.setHomePage(url);
		  }catch(e){
			if(window.netscape){
			 try{
			   netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
			 }catch(e){
			   alert("&#x62B1;&#x6B49;&#xFF0C;&#x6B64;&#x64CD;&#x4F5C;&#x88AB;&#x6D4F;&#x89C8;&#x5668;&#x62D2;&#x7EDD;&#xFF01;\n\n&#x8BF7;&#x5728;&#x6D4F;&#x89C8;&#x5668;&#x5730;&#x5740;&#x680F;&#x8F93;&#x5165;&#x201C;about:config&#x201D;&#x5E76;&#x56DE;&#x8F66;&#x7136;&#x540E;&#x5C06;[signed.applets.codebase_principal_support]&#x8BBE;&#x7F6E;&#x4E3A;'true'");
			 }
			}else{
			alert("&#x62B1;&#x6B49;&#xFF0C;&#x60A8;&#x6240;&#x4F7F;&#x7528;&#x7684;&#x6D4F;&#x89C8;&#x5668;&#x65E0;&#x6CD5;&#x5B8C;&#x6210;&#x6B64;&#x64CD;&#x4F5C;&#x3002;\n\n&#x60A8;&#x9700;&#x8981;&#x624B;&#x52A8;&#x5C06;&#x3010;"+url+"&#x3011;&#x8BBE;&#x7F6E;&#x4E3A;&#x9996;&#x9875;&#x3002;");
			}
		 }
		}

		function AddFavorite(sURL, sTitle) {
					sURL = encodeURI(sURL); 
				var e=sURL,i=sTitle;
				try{
					if(document.all)window.external.AddFavorite(e,i);
					else if(window.sidebar)window.sidebar.addPanel(i,e,"");
					else if(window.external)window.external.AddFavorite(e,i);
					else if(window.opera&&window.print)
					return!0
				}catch(t){
					alert("&#x60A8;&#x597D;&#xFF0C;&#x60A8;&#x7684;&#x6D4F;&#x89C8;&#x5668;&#x4E0D;&#x652F;&#x6301;&#x81EA;&#x52A8;&#x52A0;&#x5165;&#x6536;&#x85CF;&#xFF0C;&#x8BF7;&#x4F7F;&#x7528;Ctrl+D&#x8BD5;&#x8BD5;&#xFF0C;&#x611F;&#x8C22;&#x60A8;&#x7684;&#x4F7F;&#x7528;!")
				}
			   
		 
			}
    </script>

    <script>
        setInterval(function(){
            var date = new Date()
            document.getElementById("clock").innerHTML = date.toLocaleTimeString();
        }, 1000);
    </script>
    
    <script type="text/javascript">
        jQuery(document).ready(function(){
            var theForm=$("#main1");
            theForm.validationEngine();
            $(":reset").click(function(){ theForm.validationEngine("hide"); });
        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            var theForm=$("#main2");
            theForm.validationEngine();
            $(":reset").click(function(){ theForm.validationEngine("hide"); });
        });
        function getPwd() {
            alert("&#x8BF7;&#x4E0E;&#x5BA2;&#x670D;&#x8054;&#x7CFB;&#xFF01;")
        }
    </script>
    <!-- Demo end -->


    <link rel="stylesheet" href="/yoy/css/slide.css">
    <style>
        .ck-slide{
            width:100%;
            height: 517px;
        }
        .ck-slide-wrapper li{ margin-left:-57px!important;}
    </style>


<div class="fixled" style="display: none;">
    <div class="closefix" style=" margin:10px auto; width:30%; height:30px;"></div>
    <ul>
  <li style=" width:100%; margin-top:30px; height:60px;">
<a href="" style="width:100%; height:100%; display:block;" target="_blank"></a></li>
  <li style=" width:100%;margin-top:18px; height:36px;" target="_blank"><a href="" style="width:100%;  height:100%; display:block;" target="_blank"></a></li>
  <li style=" width:100%;margin-top:9px; height:30px;" target="_blank"><a href="" style="width:100%;  height:100%; display:block;" target="_blank"></a></li>
  <li style=" width:100%;margin-top:9px; height:32px;" target="_blank"><a href="" style="width:100%;  height:100%; display:block;" target="_blank"></a></li>
  <li style=" width:100%;margin-top:8px; height:50px;" target="_blank"><a href="" style="width:100%;  height:100%; display:block;" target="_blank"></a></li>
</ul>
    <div class="cuocuocuo" style=" cursor:pointer; margin-top: 95px; height:40px; width:100%;"></div>
</div>
<div class="quanmin-top">
    <div class="nav-top">
        <div id="clock">下午2:43:28</div>
        <div class="timess_i">营业时间：24小时营业/全年无休</div>
        <div class="guanfangwangzhan" style=" display:none;"></div><!--&#x6682;&#x65F6;&#x6CA1;&#x6709;-->
        <div class="logo2" style="width: 341px; height: 100px;">
            <img src="/yoy/images/logo.png" alt="LOGO">
        </div>
        <div class="right-top">菲律宾热线：0063-9060012888&nbsp;<a href="javascript:void(0);" onclick="guestLogin();">免费试玩</a>|<a href="xl/index.php" target=_blank>线路检测</a>|<a onclick="SetHome(this,location.href);">设为首页</a>|<a href="javascript:void(0);" onclick="AddFavorite()">收藏本站</a></div>
        <div class="">
           <form action="/user/loginedto" id="login_form" class="login_form" method="post" onajax="userBeforeLoginto" enter="true" call="userLoginto" target="ajax">
				<dl>
                    <dt class="positionre">
                        <input name="username" id="login" class="required w100 error" type="text" autocomplete="off" autocapitalize="off" placeholder="请输入账号" aria-required="true"><label id="login-error" class="error" for="login">必填</label>
                    </dt>

                     <dt class="positionre">
                        <input name="password" id="pass" class="required w100 error" type="password" autocomplete="off" placeholder="请输入密码" aria-required="true"><label id="pass-error" class="error" for="pass">必填</label>
                    </dt>
					<dt style="position:relative;left:-10px;">
						<input name="vcode" id="vcode" type="text" size="4" maxlength="4" style="padding-left:8px;" class="login-input" tabindex="3" placeholder="验证码">
						<img alt="验证码" src="/user/vcode/<?=$this->time?>" title="看不清楚，点我换图" onclick="this.src='/user/vcode/'+(new Date()).getTime()" style="position: absolute; width:42px; height:30px;left: 62px;top: 0px;cursor: pointer;">
                    </dt>
					<!--dt class="positionre" style="width: 50px;">
                        <input name="loginName" id="login" class="required w100 error" type="text" autocomplete="off" autocapitalize="off" placeholder="&#x9A8C;&#x8BC1;&#x7801;" aria-required="true"><label id="login-error" class="error" for="login">&#x5FC5;&#x586B;</label>
                    </dt>

                    <dt class="cc" style="width: 50px; height: 20px;"><img src="images/dtt.png"></dt-->
                    <dt style="margin-right:0px;">
                    <button type="submit" id="send-button" value="">登录</button>
                    </dt>
                    <dt>
                        <a href="/reg.php" style="color:#000;background-color:#eaff38;display: block;width: 55px;text-align: center;color: #333;" id="send-button">注册</a>
                    </dt>
                    <a class="header-forget-pw" href="javascript:alert('请联系在线客服取回密码')" style="color:#FFF">忘记密码</a>
                </dl>
            </form>
        </div>
    </div>
</div>
<!-- hasder -->
<div class="hasder">
    <div class="cantent-center">

        <ul class="etabs ">
            <li class="tab"><a href="/index.php">首 页</a></li>
            <li class="tab"><a href="/reg.php">加入会员</a></li>
            <li class="menu-hoover tab"><a href="/At7.php">存款取款</a>
            </li>
            <li class="tab"><a href="/At2.php">常见问题</a></li>
            <li class="menu-lasts tab"><a href="/At1.php">关于我们</a>
            </li>
            <li class="tab"><a href="/At8.php">加盟合作</a></li>
            <li class="tab"><a href="/At6.php">优惠活动</a></li>
            <li class="tab"><a href="javascript:BBOnlineService();" >在线客服</a></li>
            <!--<li class="tab"><a href="" target="_blank">代理咨询</a></li>-->
        </ul>

    </div>

</div>
<div class="s2">
    <div class="ges_k">
        <img src="/yoy/images/p1_03.jpg">  <div id="gongao">
            <div style="width:900px;height:30px;margin:0 auto;white-space: nowrap;overflow:hidden;" id="scroll_div" class="scroll_div">
                <div id="scroll_begin" style="line-height:34px; font-size:14px; color:#FFF;">
                    全民彩票一直深受会员好评，一直以来以良好的信誉和服务得到许多会员的支持和肯定，接受业界各行业与会员的监督！如您对本公司有所疑惑，欢迎您对本公司的监督！
                </div>
                <div id="scroll_end" style="line-height:34px; font-size:14px; color:#FFF;">
                    全民彩票一直深受会员好评，一直以来以良好的信誉和服务得到许多会员的支持和肯定，接受业界各行业与会员的监督！如您对本公司有所疑惑，欢迎您对本公司的监督！
                </div>
            </div>
            <script type="text/javascript">ScrollImgLeft();</script>
        </div> </div>
</div>
<!-- &#x9801;&#x7C64; -->



    <!-- &#x9801;&#x7C64; -->

	<div class="banner">
		<div id="demo01" class="flexslider">
			
		<div class="flex-vifewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-3166px, 0px, 0px);"><li class="clone" style="width: 1583px; float: left; display: block;"><img src="/yoy/images/banner3.jpg" style="vertical-align:top;width:100%;"></li>
                <li class="" style="width: 1583px; float: left; display: block;"><img src="/yoy/images/banner2.jpg" style="vertical-align:top;width:100%;"></li>
				<li style="width: 1583px; float: left; display: block;" class="flex-active-slide"><img src="/yoy/images/banner1.jpg" style="vertical-align:top;width:100%;"></li>				
				<li style="width: 1583px; float: left; display: block;" class=""><img src="/yoy/images/banner3.jpg" style="vertical-align:top;width:100%;"></li>
			<li class="clone" style="width: 1583px; float: left; display: block;"><img src="/yoy/images/banner2.jpg" style="vertical-align:top;width:100%;"></li></ul></div><ol class="flex-control-nav flex-control-paging"><li><a class="">1</a></li><li><a class="flex-active">2</a></li><li><a class="">3</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="">Previous</a></li><li><a class="flex-next" href="">Next</a></li></ul></div>
	</div>
 <div class="la_e"><img src="/yoy/images/ra.jpg"></div>
    <div style=" width:100%; background:#fff5eb;">
     <div class="nav_tv">     
     	<ul>
     		<li class="small"><a href=""></a></li>
     		<li class="samll_01 img_to"><a href=""></a></li>
     		<li class="samll_02 img_to"><a href=""></a></li>
     		<li class="samll_03 img_to"><a href=""></a></li>
     		<li class="samll_04 img_to"><a href=""></a></li>
     	</ul>
     </div>
     </div>
    <!-- &#x5E95;&#x90E8; -->
    <div class="footer">
		<div class="footer-top"></div>
        <div class="footer-inner container">
            <div class="footer-info">                
                <div class="footer-links">
                    <ul>
                        <a href="/At1.php" xhr="#default_about" class="My_models_Default" target="_blank">关于我们</a> |
                        <a href="/At9.php" xhr="#transazctions" class="My_models_Default" target="_blank">联系我们</a> |
                        <a href="/At8.php" xhr="#faq" class="My_models_Default" target="_blank">合作伙伴</a> |
                        <a href="/At7.php" xhr="#contact" class="My_models_Default" target="_blank">存款帮助</a>|
                        <a href="At7.php" xhr="#contact" class="My_models_Default" target="_blank">取款帮助</a>|
                        <a href="At2.php" xhr="#contact" class="My_models_Default" target="_blank">常见问题</a>|
                        <a href="javascript:BBOnlineService();" xhr="#contact" class="My_models_Default" target="_blank">在线客服</a>
                    </ul>
                </div>
              
                <p>Copyright ? 全民彩票网 Reserved</p>
            </div>
        </div>
       
    </div>   
<div class="fixled" style="display: none;">
<div class="closefix" style="margin: 10px auto; width:20%; height:35px;"></div>
<ul>
  <li style=" width:100%; margin-top:30px; height:60px;"><a href="" style="width:100%; height:100%; display:block;" target="_blank"></a></li>
  <li style=" width:100%;margin-top:18px; height:36px;"><a href="" style="width:100%;  height:100%; display:block;" target="_blank"></a></li>
  <li style=" width:100%;margin-top:9px; height:30px;"><a href="" style="width:100%;  height:100%; display:block;" target="_blank"></a></li>
  <li style=" width:100%;margin-top:9px; height:32px;"><a href="" style="width:100%;  height:100%; display:block;" target="_blank"></a></li>
  <li style=" width:100%;margin-top:8px; height:50px;"><a href="" style="width:100%;  height:100%; display:block;" target="_blank"></a></li>
</ul>
<div class="cuocuocuo" style=" cursor:pointer; margin-top: 95px; height:40px; width:100%;"></div>
</div>
	<script type="text/javascript" src="/yoy/js/slider.js"></script> 
	<script type="text/javascript">
	$(function(){
		$('#demo01').flexslider({
			animation: "slide",
			direction:"horizontal",
			play_speed: 5000,
			easing:"swing"
		});
		$('.closefix').click(function(){
			$('.fixled').slideUp(500);
			})
	});
	</script>
    

<br>
<b>Warning</b>:  Unknown: open(H:\phpStudy\tmp\tmp\sess_1m11tmtc8ottobtuhvbauff6i6, O_RDWR) failed: No such file or directory (2) in <b>Unknown</b> on line <b>0</b><br>
<br>
<b>Warning</b>:  Unknown: Failed to write session data (files). Please verify that the current setting of session.save_path is correct (H:\phpStudy\tmp\tmp) in <b>Unknown</b> on line <b>0</b><br>
</body></html>