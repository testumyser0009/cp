<div class="footer">
<div class="footerbg">
<div class="footerm">        


<a href="/At1.php">关于我们</a>｜ 
<a href="/At7.php">存取帮助</a>｜ 
<a href="/At5.php">规则说明</a>｜ 
<a href="/At2.php">常见问题</a>｜ 
<a href="/At8.php">加盟合作</a>｜ 
<a href="/At9.php">联系我们</a>
</div>
<span style="letter-spacing:1px;">
Copyright © 永利国际 Reserved <br>
代理QQ：80216733 客服QQ：839972222 客服QQ：839982222  E-Mail：839982222@QQ.COM
</span> 
</div>
</div>
</div>
<style type="text/css">
#float_r_ight {
display: none;
width: 41px;
height: 293px;
position: absolute;
right: 0;
top: 15px;
z-index: 1100;
overflow: hidden;
}

.float_right_l {
padding-top: 50px;
width: 161px;
height: 241px;
position: absolute;
padding-left:10px;
right: -171px;
top:0px;
z-index: 1099;
background: url('yoy/images/kf/float_bg.png') no-repeat;
}

#float_right_log {
cursor: pointer;
width: 41px;
height: 275px;
position: absolute;
right: 171px;
top: 12px;
z-index: 1100;
background-image: url('yoy/images/kf/float_click.png');
}

.float_right_l span{
position: relative;
padding-left: 5px;
}

#right_img1,#right_img1 a, {
width: 193px;
height: 68px;
}
#right_img2, #right_img3,
#right_img2 a, #right_img3 a{
width: 193px;
height: 48px;
}
</style>
<div id="float_r_ight">
<div class="float_right_l" id="float_right_l">
<div id="float_right_log"></div>
<span id="right_img1"><a href="javascript:void(0);" onclick="BBOnlineService();"><img src="/yoy/images/kf/1.png"></a></span>
<span id="right_img2"><a href="/reg.php"><img src="/yoy/images/kf/2.png"></a></span>
<span id="right_img3"><a href="javascript:void(0);" onclick="guestLogin();"><img src="/yoy/images/kf/3.png"></a></span>


</div>
</div>

<script>
var float_box = document.getElementById("float_r_ight"),
float_box_list = $('#float_right_l'),
float_box_log = $("#float_right_log"), fin, fout, fstatus = 'close';
var flaot_box_in = function () {
fstatus = 'open';
float_box_list.stop().animate({right:0},300);
$(float_box).stop().animate({width:246},300);
float_box_log.css('backgroundPosition' , '100% 0');
}
var flaot_box_out = function () {
fstatus = 'close';
float_box_list.stop().animate({right:-171},300);
$(float_box).stop().animate({width:41},300);
float_box_log.css('backgroundPosition' , '0 100%');
}

window.onload = window.onresize = window.onscroll = function () {
var iScrollTop = document.documentElement.scrollTop || document.body.scrollTop;

setTimeout(function () {
clearInterval(float_box.timer);
var iTop = parseInt((document.documentElement.clientHeight - float_box.offsetHeight)/2) + iScrollTop;

float_box.timer = setInterval(function () {
var iSpeed = (iTop - float_box.offsetTop) / 8;
iSpeed = iSpeed > 0 ? Math.ceil(iSpeed) : Math.floor(iSpeed);
float_box.offsetTop == iTop ? clearInterval(float_box.timer) : (float_box.style.top = float_box.offsetTop + iSpeed + "px");
}, 30);
}, 50);
float_box.style.display="block";
};
float_box_list.hover(
function () {
clearTimeout(fin);
fout = setTimeout(flaot_box_in, 100);
}, function () {
clearTimeout(fout);
fin = setTimeout(flaot_box_out, 100);
}
);
float_box_list.click(function () {
if (fstatus == 'close') {
flaot_box_in();
} else {
flaot_box_out();
}
});
</script>   
</body>



</html>