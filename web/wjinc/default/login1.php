<!DOCTYPE html>
<!-- saved from url=(0038)http://ssc888.bkpf.mobi -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="Keywords" content="Welcome" />
    <meta name="Description" content="" />
    <link rel="stylesheet" href="./login_file/css/core.css" />
    <link rel="stylesheet" href="./login_file/layer.css" id="layui_layer_layercss">
    <link rel="stylesheet" href="./login_file/layer(1).css" id="layui_layer_skinlayercss">
    <script src="./login_file/js/browserRedirect.js"></script>
    <script src="./login_file/js/jquery-1.12.4.min.js"></script>
    <script src="./login_file/layer.min.js " type="text/javascript"></script>
    <script src="./js/guest.js " type="text/javascript"></script>
</head>

<body>
    <!--global header start-->
    <div class="header">
        <div class="container clearfix">
            <div class="logo fl">
                <img src="./login_file/img/logo.png" alt="" />
            </div>
            <div class="nav fl" id="nav">
                <ul class="clearfix">
                    <li><a href="/reg.php">立即开户</a></li>
                    <li><a href="javascript:hezuo()">代理合作</a></li>
                    <li><a href="javascript:youhui()">最新优惠</a></li>
                    <li><a href="javascript:answer()">常见问题</a></li>
                    <li><a href="javascript:about()">关于我们</a></li>
                </ul>
            </div>
			<div class="tool-bar">
				<ul>
					<li class="lan clearfix">
						<span>永发娱乐场欢迎您的光临！</span>
						<a href="javascript:void(0);" class="cn"></a>
						<a href="javascript:void(0);" class="hk"></a>
						<a href="javascript:void(0);" class="us"></a>
					</li>
				</ul>
			</div>
        </div>
    </div>
    <div class="lgbox" id="lg_box">
        <div class="container">
            <form action="/user/loginedto1" method="post" id="login_form" style="position: relative;">
                <ul class="clearfix">
                    <li class="tit">THE LOGIN</li>
                    <li>
                        <!-- <label for="username" class="cover">账号</label> -->
                        <input type="text" id="username" maxlength="15" placeholder="账号" />
                    </li>
                    <li>
                        <!-- <label for="password" class="cover">密码</label> -->
                        <input type="password" id="password" maxlength="20" placeholder="密码" />
                    </li>
                    <!-- <li><label for="loginVcode" class="cover">验证码</label><input type="text" id="loginVcode" maxlength="4" /><font id="numberCode" onselectstart="return false">8888</font></li> -->
                    <li>
                        <input type="submit" value="" class="btn-lg" id="loginSubmitBtn" />
                    </li>
                    <li><a href="/reg.php" class="btn-reg"></a></li>

                </ul>
            </form>
        </div>
    </div>
    <!--global header end-->
    <div class="banner-index">
        <div class="lb-wrap">
            <div id="lb_Index" class="lb-index">
                <ul>
                    <li><img src="./login_file/img/lb/b4.jpg" alt="" /></li>
                    <li><img src="./login_file/img/lb/b2.jpg" alt="" /></li>
                    <li><img src="./login_file/img/lb/b5.jpg" alt="" /></li>
                </ul>
            </div>
        </div>
        <div class="radio">
            <div class="wrap">
                <div class="tit">
                    <i></i>
                    <span>公告NEWS:</span>
                </div>
                <div class="marquee" id="noticeDom">
                    <marquee id="noticeDiv" direction="left" scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()"> </marquee>
                </div>
            </div>
        </div>
    </div>
    <div class="main-index" id="gamelist">
        <div class="wrap">
            <ul class="clearfix">
                <li> <a href="javascript:gAlert('请先登录');"> <img src="./login_file/img/gamelist/g1.png" alt="" /> <span>立即开始</span> </a> </li>
                <li> <a href="javascript:gAlert('请先登录');"> <img src="./login_file/img/gamelist/g2.png" alt="" /> <span>立即开始</span> </a> </li>
                <li> <a href="javascript:gAlert('请先登录');"> <img src="./login_file/img/gamelist/g3.png" alt="" /> <span>立即开始</span> </a> </li>
                <li> <a href="javascript:gAlert('请先登录');"> <img src="./login_file/img/gamelist/g4.png" alt="" /> <span>立即开始</span> </a> </li>
                <li> <a href="javascript:gAlert('请先登录');"> <img src="./login_file/img/gamelist/g5.png" alt="" /> <span>立即开始</span> </a> </li>
            </ul>
        </div>
    </div>
    <!-- global footer start -->
    <div class="footer">
        <div class="wrap">
            <div class="paylist"></div>
            <div class="servicelist">
                <ul class="clearfix">

                    <li> <a href="javascript:qqService();" target="_blank" class="qq">联系QQ <span class="cfgMainCustomerQQ">465420700</span></a> </li>
                    <li> <a href="javascript:void(0);" class="email">客服邮箱 <span class="cfgMainEmail">465420700@qq.com</span></a> </li>
                    <li class="last"> <a href="javascript:BBOnlineService();" class="online"><span>7X24</span> 小时在线客服</a> </li>
                </ul>
            </div>
            <div class="line"></div>
            <div class="detaillist">
                <ul class="clearfix">
                    <li>
                        <div class="titimg service"></div>
                        <div class="bankshow">
                            <div class="deposit">
                                <div class="clearfix textbox">
                                    <div class="leftbox fl">
                                        <p class="t1">存款火速到账</p>
                                        <p class="t2">平均时间</p>
                                    </div>
                                    <div class="rightbox fr">
                                        <span class="num" id="sec">0</span>
                                        <span>秒</span>
                                    </div>
                                </div>
                                <div class="lineshow">
                                    <i class="floatling" id="secLine"></i>
                                </div>
                            </div>
                            <div class="withdraw">
                                <div class="clearfix textbox">
                                    <div class="leftbox fl">
                                        <p class="t1">取款火速到账</p>
                                        <p class="t2">平均时间</p>
                                    </div>
                                    <div class="rightbox fr">
                                        <span class="num" id="min">0.00</span>
                                        <span>分</span>
                                    </div>
                                </div>
                                <div class="lineshow">
                                    <i class="floatling" id="minLine"></i>
                                </div>
                            </div>
                            <div class="banks">
                                <div class="clearfix textbox">
                                    <div class="leftbox fl">
                                        <p class="t1">便捷的银行服务</p>
                                        <p class="t2">目前我们支持的机构有：</p>
                                    </div>
                                    <div class="rightbox fr">
                                        <span class="num">35</span>
                                        <span>家</span>
                                    </div>
                                </div>
                                <div class="imgshow"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="titimg product"></div>
                        <div class="textshow">
                            <div>
                                <p class="tit">快乐彩KENO</p>
                                <p class="text">永发娱乐城快乐彩，兼容iPAD/iPHONE等各种移动设备，是目前市面上用户体验最优秀的产品。</p>
                            </div>
                            <div>
                                <p class="tit">平台优势ADVANTAGES</p>
                                <p class="text">永发娱乐城的用户体验中心设计的投注界面，能够让您轻松、怡静的享受体育投注的乐趣。</p>
                            </div>
                            <div>
                                <p class="tit">信誉保证CREDIT GUARANTEE</p>
                                <p class="text">永发娱乐城所使用的娱乐城平台必须经过TST GAME 国际认证，保证每款游戏公平公正。</p>
                            </div>
                        </div>
                    </li>
                    <li class="last">
                        <div class="titimg help"></div>
                        <div class="textshow">
                            <div>
                                <p class="tit">颠覆性产品 <span>SUBVERSIVE PRODUCTS</span></p>
                                <p class="text2">每一款全新上线的永发娱乐城产品都是经过大量测试后证实最符合亚洲人的产品，这是一个对既定现状做出强势挑战的创新团队。</p>
                            </div>
                            <div>
                                <p class="tit">合作伙伴 <span>PARTNERS</span></p>
                                <div class="partnerimg"></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- aside -->
    <div class="float" id="float2">
        <ul>
            <li class="service">
                <a href="javascript:BBOnlineService();"></a>
            </li>
            <li class="register">
                <a href="reg.html"></a>
            </li>
            <li class="try">
                <a href="javascript:guestLogin();"></a>
            </li>
            <li class="qq">
                <a href="tencent://message/?uin=465420700&Menu=yes" target="_blank">
                    <span class="cfgMainCustomerQQ">465420700</span>
                </a>
            </li>
            <li id="float_close" class="close">
                <a href="javascript:void(0);"></a>
            </li>
        </ul>
    </div>
    <!-- aside end -->
    <!-- layer -->
    <div id="m1" class="taninx">
        <div class="closebtn"></div>
        <div class="">
            <a class="dailibtn fr" onclick="window.open('http://api1.pop800.com/chat/307374','','width=800,height=500');" style="cursor:pointer " target="_blank">申请代理</a>
            <div class="cl"></div>
        </div>
        <div class="tannr">
            <br> <span class="hong">联盟方案：</span>
            <br>
            <br>永发娱乐城拥有多元化的产品，使用最公平、公正、公开的系统， 在市场上的众多博彩网站中，我们自豪的提供会员最优惠的回
            <br>馈，给予合作伙伴最优势的营利回报! 无论拥有的是网络资源，或是人脉资源，都欢迎您来加入永发娱乐城网合作伙伴的行列，
            <br> 无须负担任何费用，就可以开始无上限的收入。选择永发娱乐城网，绝对是您最聪明的选择!
            <br>
            <br> <span class="hong">代理条件：</span>
            <br>
            <br>a.具有便利的计算机上网设备。
            <br>b.有一定的人脉资源、网络资源或自己的广告网站。
            <br>
            <br> <span class="hong">有效会员：</span>
            <br>
            <br>（六合彩不计算在内）
            <br>
            <br> <span class="hong">代理收入：</span>
            <br>
            <br>A：比如您本月的代理账号内有赢利的情况下，就可拥有以下收入:
            <br>1.一个月内公司在您的代理账号内纯赢利达到1000元-50000元，可享受其中15%的佣金。
            <br>2.一个月内公司在您的代理账号内纯赢利达到50001元-100000元，可享受其中20%的佣金。
            <br>3.一个月内公司在您的代理账号内纯赢利达到100001元-200000元，可享受其中25%的佣金。
            <br>4.一个月内公司在您的代理账号内纯赢利达到200001元-500000元，可享受其中30%的佣金。
            <br>5.一个月内公司在您的代理账号内纯赢利达到500001元以上，可享受其中35%的佣金。
            <br>
            <br> <span class="hong">请注意：</span>
            <br>
            <font color="red">注:禁止代理商私自开设会员帐号进行非法投注套利。 任何使用不诚实方法骗取代理佣金或下线会员与代理商同IP的我们视为
                <br> 代理商自己开设会员游戏， 将取消代理资格并永久冻结账户，佣金一律不予发放。同IP出现多个会员的话， 将被视为无效会
                <br> 员，不得计算在内。 敬请联系代理专员详细洽谈</font>
        </div>
    </div>
    <div id="m2" class="taninx">
        <p><strong>回馈新老客户，高频彩票不计输赢、期期退水0.5%，双面盘1.99定位胆9.9全网赔率最好，信誉最好！</strong></p>
        <p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;text-indent: 2em">
            <br>
        </p>
        <table width="570">
            <tbody>
                <tr class="firstRow">
                    <th width="150" style="border: 1px solid #8d8d8d;padding: 0px;font-size: 14px"><span style=";padding: 0px;font-size: 10px">会员级别</span></th>
                    <th style="border: 1px solid #8d8d8d;padding: 0px;font-size: 14px"><span style=";padding: 0px;font-size: 10px">返水比例</span></th>
                </tr>
                <tr>
                    <th style="border: 1px solid #8d8d8d;padding: 0px;color: rgb(255, 0, 0);font-size: 14px"><span style=";padding: 0px;color: rgb(229, 51, 51);font-size: 10px">所有会员</span></th>
                    <th style="border: 1px solid #8d8d8d;padding: 0px;color: rgb(255, 0, 0);font-size: 14px"><span style=";padding: 0px;color: rgb(229, 51, 51);font-size: 10px">高频彩有效投注额X0.5%</span></th>
                </tr>
                <tr>
                    <th style="border: 1px solid #8d8d8d;padding: 0px;color: rgb(255, 0, 0);font-size: 14px"><span style=";padding: 0px;color: rgb(229, 51, 51);font-size: 10px">所有会员</span></th>
                    <th style="border: 1px solid #8d8d8d;padding: 0px;color: rgb(255, 0, 0);font-size: 14px"><span style=";padding: 0px;color: rgb(229, 51, 51);font-size: 10px">香港彩特A 42.5倍 13% 特B 48倍 0%</span></th>
                </tr>
            </tbody>
        </table>
        <p style="margin-top: 0px;margin-bottom: 0px;padding: 0px">
            <br>
        </p>
        <p style="margin-top: 0px;margin-bottom: 0px;padding: 0px"><strong style=";padding: 10px 0px 0px;height: 30px;line-height: 30px;display: block">活动规则：</strong></p>
        <p style="margin-top: 0px;margin-bottom: 0px;padding: 0px">1.本次优惠活动于2017年01月28日生效。优惠活动适用于所有会员，无需申请系统自动派发；</p>
        <p style="margin-top: 0px;margin-bottom: 0px;padding: 0px">2.期期退水可享有：无上限优惠，无须打码量即可取款；</p>
        <p style="margin-top: 0px;margin-bottom: 0px;padding: 0px">3.任何滥用优惠、下注套利、非法程序下注的行为，经查实将取消优惠以及优惠产生的赢利；</p>
        <p style="margin-top: 0px;margin-bottom: 0px;padding: 0px">4.游戏过程中，出现对冲或对打投注,将取消优惠以及优惠产生的赢利（例如在北京赛车同局投注大/小）；</p>
        <p style="margin-top: 0px;margin-bottom: 0px;padding: 0px">5.永发娱乐城网保留所有权利在任何时候可以更改、停止、取消优惠活动并不会做出任何书面解释。</p>
        <p style="margin-top: 0px;margin-bottom: 0px;padding: 0px">
            <br>
        </p>
        <p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;text-indent: 2em">
            <br>
        </p>
        <p style="margin-top: 0px;margin-bottom: 0px;padding: 0px;text-indent: 2em">
            <br>
        </p>
    </div>
    <div id="m3" class="taninx">
        <div class="f12 l24">
            <span class="hong">一般常见问题</span>
            <br>
            <br> <span class="hong">Q1: 如何加入永发娱乐城？</span>
            <br>A1: 您可以直接点选 "立即开户"，确实填写资料后，可立即登记成为永发娱乐城会员。
            <br> <span class="hong">Q2: 我可以直接在网络上存款提款吗？</span>
            <br>A2: 可以，永发娱乐城提供多种线上存款选择，详情请参照 "存款提款"
            <br> <span class="hong">Q3: 我在哪里可以找到游戏规则？</span>
            <br>A3: 在未登入前，您可以在游戏的最外层看到"游戏规则"选项，清楚告诉您游戏的玩法、规则及派彩方式。
            <br> 在游戏视窗中,也有"规则"选项，让您在享受游戏乐趣的同时，弹跳视窗随时提醒您游戏规则。
            <br> <span class="hong">Q4:单注投注额最低是？</span>
            <br>A4: 我们单注最低投注额为人民币1元.
            <br> <span class="hong">Q5: 最高投注额有限制吗？</span>
            <br>A5: 任何一家正规博彩和网络博彩公司对客户的帐户投注都有单注和单注限额，没有限额的公司都基本属于没有任何风险控制
            <br> 的私人或骗子公司，今天的控制是为了明天能保证100%提款给您，这点您可以自行分析。每个项目都有不同的限额设定，
            <br> 详细请登陆会员都在「会员资料」页面查看。
            <br> <span class="hong">Q6:我帐户里面的帐怎麽结算？</span>
            <br>A6: 请到登入会员，会员页面查看，「结算报表」按天显示每天的结算结果， 点击退水后的结果一栏对应的结果数字进入明细！
            <br>
            <br>游戏及投注问题
            <br>
            <br> <span class="hong">Q1: 请问如何加入永发娱乐城？</span>
            <br>A1: 您可以直接点选 "立即开户"，确实填写资料后，可立即登记成为彩票王现金网会员
            <br> <span class="hong">Q2: 我哪里可以找到游戏的规则？</span>
            <br>A2: 请查看"规则说明"页面，清楚告诉您游戏的玩法、规则及派彩方式。
            <br> <span class="hong">Q3: 如果忘记密码怎麽办？</span>
            <br>A3: 你可以在首页点击"忘记密码"系统自助取回密码，或者联系24小时线上客服人员谘询协助取回你的帐号密码。
            <br>
            <span class="hong">Q4: 当忘记提款密码时怎么办？</span>
            <br> A4: 你可通过24小时线上客服人员协助处理。
        </div>
    </div>
    <div id="m4" class="taninx">
        <div class="f12 l24">
            <span class="hong">关于我们</span>
            <br>
            <br>永发娱乐城于2011年成立，专业经营各项博彩业务，现与US平台合作，推出高频彩票现金投注网，开种广东快乐十分、重庆时彩、
            <br>北京快乐8、北京赛车PK10等项目，完全自助注册开户，现金开户， 现金投注 。我们拥有稳定的平台，成熟的玩法，简单的下
            <br>注流程、以及优质的客户服务。永发娱乐城公司为彩票博彩爱好者提供最优惠的赔率和最优质的博彩服务。彩票王一直深受会员好
            <br>评，一 直以来以良好的信誉和服务得到许多会员的支持和肯定，接受业界各行业与会员的监督！如您对本公司有所疑惑，欢迎
            <br>您对本公司的监督。永发娱乐城为正派且稳健经营的网站，一直以最优 惠的赔率和优质的服务深受会员好评，请放心进行投注，如
            <br>您之前不了解本公司，欢迎您对本公司进行关注。
            <br>
            <br> <span class="hong">【菲律宾执照】</span>
            <br>
            <br>我們提供的所有產品和服務，是由菲律賓政府卡格揚河經濟特區 First Cagayan leisure and Resort Corporation.
            <br> 所授權和監管。這是一家位於Cagayan特別經濟區和自由口岸 (CSEZFP) 的機構，並且是互動遊戲的
            <br>授權者及管理者.
            <br>
            <br> <span class="hong">【安全与保密】</span>
            <br>我们采用了目前最好的加密技术（1024位RSA密钥交换和 448位blowfish）和防火墙系统保护你的安全、私隐，并保证你享受
            <br>公平的 游戏。 客户在本平台的所有动均严格保密，我们不会向第三方包括政府透露客户资料。所有银行交易 由国际金融机
            <br>构在高标准的安全和机密的网络中进行。进入玩家帐户资料也必须有玩家唯一的登录ID和密码，确保客户的资 金安全有保障。
            <br>永发娱乐城拥有高素质的客户服务，无论在处理任何事情上，都以简单和快捷享誉全球。 如免费开户，即时存款，实时QQ,MSN回
            <br>复客户的询问以及处理客户的难题等。 永发娱乐城全年24小时运营，全天候处理客户出入款等相关事宜，严格训练的客服团队，
            <br>以专业、亲切的态度著称，尽速解决您对于网 站、游戏的种种疑难杂症，不但让所有客户皆有宾至如归的感觉，同时我们以
            <br>业界前所未见的各种优惠方式回馈我们的客户，绝对是您最明智的选择！
        </div>
    </div>
    <!-- layer end -->
    <script src="./login_file/js/unslider.min.js"></script>
    <script src="./login_file/js/core.js"></script>
    <script src="./login_file/js/jquery.hhService.js"></script>
    <script type="text/javascript">
    var data = "欢迎进入本网站，祝您喜中大奖！！！ ";
    $(document).ready(function() {
        $("#float2").fix({float:'right',minStatue:false,skin:'green',durationTime:500});
        $("#noticeDiv").text(data);
        $("#loginSubmitBtn").click(function() {
            var username = $("#username").val();
            var password = $("#password").val();
            if (username == '') {
                $("#username").focus();
                alert('请输入您的用户名');
                return false;
            }
            if (password == '') {
                $("#password").focus();
                alert('请输入您的密码');
                return false;
            }
            $.post("/user/loginedto1", { username: username, password: password }, function(data) {
                //alert(data);
                //if(data.status == 1){
                window.location.href = 'member/tran';
                //}
            }).error(function() { alert("用户名或密码错误!!"); });
            return false;
        });
        $('#guestLogin').click(function() {
            var username = '!guest!';
            var password = '!guest!';
            $.post("Every/Index/login", { username: username, password: password }, function(data) {
                alert(data.msg);
                if (data.status == 1) {
                    window.location.href = 'agreement.html';
                }
            });
            return false;
        });
    });

    function hezuo() {
        layer.open({
            type: 1,
            title: '<span class="gundong"></span><img src="/Public/Home/Img/tl1.png" alt="" />',
            shadeClose: true,
            shade: 0.8,
            area: ['803px', '85%'],
            content: $('#m1')

        });
    }

    function youhui() {
        layer.open({
            type: 1,
            title: '<span class="gundong"></span><img src="/Public/Home/Img/tl2.png" alt="" />',
            shadeClose: true,
            shade: 0.8,
            area: ['803px', '85%'],
            content: $('#m2')

        });
    }

    function answer() {
        layer.open({
            type: 1,
            title: '<span class="gundong"></span><img src="/Public/Home/Img/tl3.png" alt="" />',
            shadeClose: true,
            shade: 0.8,
            area: ['803px', '80%'],
            content: $('#m3')

        });
    }

    function about() {
        layer.open({
            type: 1,
            title: '<span class="gundong"></span><img src="/Public/Home/Img/tl4.png" alt="" />',
            shadeClose: true,
            shade: 0.8,
            area: ['803px', '80%'],
            content: $('#m4')

        });
    }
    </script>
</body>

</html>