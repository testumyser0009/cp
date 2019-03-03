<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- saved from url=(0044)http://www.yx3301.com/member/payment/deposit -->
<html class="no-js" lang=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>充值页面</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/jquery-ui.css">
        <link rel="stylesheet" href="./css/admin.css">
        <script type="text/javascript" src="./js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="./js/laydate.min.js"></script><link type="text/css" rel="stylesheet" href="./充值页面_files/laydate.css"><link type="text/css" rel="stylesheet" href="./js/laydate(1).css" id="LayDateSkin">
        <script type="text/javascript" src="./js/admin_content.js"></script>
        <script type="text/javascript" src="./js/jquery-ui.js"></script>
		<script type="text/javascript" src="./js/dialog.js"></script>
		<script type="text/javascript" src="./js/libs.js"></script>
		<script type="text/javascript" src="./js/common.js"></script>
		<script type="text/javascript" src="./js/index.js"></script>
		<script type="text/javascript">var MIN_AMOUNT=100;</script>
		<script type="text/javascript" src="./js/deposit.js"></script>
    	<script type="text/javascript" src="./js/skin.js"></script> 
    	<script>
    		var skinColor
			setSkin(skinColor, $('body'));
		</script>
    </head>
    <body id="bodyid" class="skin_blue">

                <div class="rightpanel">
                <div class="contentcontainer">
                	<div class="nc_left">
                		
                	</div>
                	<p>
                	
                  </p><div class="row mt10">
              		<div class="messagetxt">选择充值模式：</div>
                    <a href="javascript:void(0);" class="tabnavi tabnaviactive">在线支付</a>
                    <a href="javascript:void(0);" class="tabnavi ">微信扫一扫</a>
                    <a href="javascript:void(0);" class="tabnavi ">支付宝扫码</a>
              	  </div>
                  <div class="row" style="overflow: visible;">
                  
                  		<!-- tabbox1 -->
                        <div class="tabbox clearfix subcontent" style="display: block;">
                            <form action="pay_go.php" target="_blank" method="post" onsubmit="javascript:return validateTransaction(this, -1);">
                          <div class="row">
                                    <div class="col1">充值金额：</div>
                                    <div class="col2"><input name="amount" onkeypress="return isNumber(event)" type="text" class="textbox2">
                                    <img src="./images/warningsmallicon.jpg" class="mt4 ml10"> <div class="pink mt4">请输入充值金额，最低金额100</div></div>
                          </div>
                          <div class="row clearfix">
                                    <div class="col1">银行种类：</div>
                            <div class="col2">
                                <div class="selectbox">
                                    <input type="radio" id="ICBC" name="payId" value="967" class="mt4">
                                            <div class="sprite ico-icbc"></div>
                                            <div>工商银行</div>
                                </div>
                                <div class="selectbox">
                                            <input type="radio" id="CCB" name="payId" value="965" class="mt4">
                                            <div class="sprite ico-ccb"></div>
                                            <div>建设银行</div>
                                </div>
                                <div class="selectbox">
                                            <input type="radio" id="ABC" name="payId" value="964" class="mt4">
                                            <div class="sprite ico-abc"></div>
                                            <div>农业银行</div>
                                </div>
                                <div class="selectbox">
                                            <input type="radio" id="BOCOM" name="payId" value="981" class="mt4">
                                            <div class="sprite ico-boco"></div>
                                            <div>交通银行</div>
                                </div>
                                <div class="selectbox">
                                            <input type="radio" id="BOC" name="payId" value="963" class="mt4">
                                            <div class="sprite ico-boc"></div>
                                            <div>中国银行</div>
                                </div>
                                <div class="selectbox">
                                            <input type="radio" id="CEBBANK" name="payId" value="986" class="mt4">
                                            <div class="sprite ico-cebb"></div>
                                            <div>光大银行</div>
                                </div>
                                <div class="selectbox">
                                            <input type="radio" id="CMBCS" name="payId" value="980" class="mt4">
                                            <div class="sprite ico-cmbc"></div>
                                            <div>民生银行</div>
                                </div>
                                <div class="selectbox">
                                            <input type="radio" id="PSBC" name="payId" value="971" class="mt4">
                                            <div class="sprite ico-post"></div>
                                            <div>邮政银行</div>
                                </div>
                                <div class="selectbox">
                                            <input type="radio" id="CMBC" name="payId" value="970" class="mt4">
                                            <div class="sprite ico-cmb"></div>
                                            <div>招商银行</div>
                                </div>
                                <div class="selectbox">
                                            <input type="radio" id="CIB" name="payId" value="972" class="mt4">
                                            <div class="sprite ico-cib"></div>
                                            <div>兴业银行</div>
                                </div>
                                <div class="selectbox">
                                            <input type="radio" id="ECITIC" name="payId" value="962" class="mt4">
                                            <div class="sprite ico-cccb"></div>
                                            <div>中信银行</div>
                                </div>
                                <div class="selectbox">
                                            <input type="radio" id="CGB" name="payId" value="985" class="mt4">
                                            <div class="sprite ico-gdb"></div>
                                            <div>广发银行</div>
                                </div>
                                <div class="selectbox">
                                            <input type="radio" id="SPDB" name="payId" value="977" class="mt4">
                                            <div class="sprite ico-spdb"></div>
                                            <div>浦发银行</div>
                                </div>
                                <div class="selectbox">
                                            <input type="radio" id="HXB" name="payId" value="982" class="mt4">
                                            <div class="sprite ico-hxb"></div>
                                            <div>华夏银行</div>
                                </div>
                                <div class="selectbox">
                                            <input type="radio" id="BOS" name="payId" value="975" class="mt4">
                                            <div class="sprite ico-shb"></div>
                                            <div>上海银行</div>
                                </div>
                                <div class="selectbox">
                                            <input type="radio" id="PINGAN" name="payId" value="978" class="mt4">
                                            <div class="sprite ico-pab"></div>
                                            <div>平安银行</div>
                                </div>
                            </div>
                            
                          </div>
						  <div class="row smtxt">
							<div class="col1"></div>
							<div class="col2"><span style="color: red">* 单笔充值最低100</span></div>
							</div>
                          <div class="row mt15">
                                <div class="col1"></div>
                                <div class="col2">
                                <button class="btnsubmit">开始充值</button>
                                </div>
                            </div>
                        </form>
                        </div>
                        <div class="tabbox clearfix subcontent">
					<form action="pay_go.php" target="_blank" method="post" onsubmit="javascript:return validateTransaction(this, -1);">
                          <div class="row">
                                    <div class="col1">充值金额：</div>
                                    <div class="col2"><input name="amount" onkeypress="return isNumber(event)" type="text" class="textbox2">
                                    <img src="./images/warningsmallicon.jpg" class="mt4 ml10"> <div class="pink mt4">请输入充值金额，最低金额100</div></div>
                          </div>
                          <div class="row clearfix">
                                    <div class="col1">银行种类：</div>
                            <div class="col2">
                                <div class="selectbox">
                                            <input type="radio" id="wxpay" name="payId" value="1004" class="mt4">
                                            <div class="sprite ico-wxzf"></div>
                                            <div>微信支付</div>
                                </div>
                            </div>
                          </div>
						  <div class="row smtxt">
							<div class="col1"></div>
							<div class="col2"><span style="color: red">* 无限制多次充值(入款收取1%手续费）手机支付须保存二维码，用微信扫一扫选择相册二维码即可支付。建议使用网银行在线充值</span></div>
							</div>
                          <div class="row mt15">
                                <div class="col1"></div>
                                <div class="col2">
                                <button class="btnsubmit">开始充值</button>
                                </div>
                            </div>
                        </form>
                        </div>
                        <div class="tabbox clearfix subcontent">
						  <form action="pay_go.php" target="_blank" method="post" onsubmit="javascript:return validateTransaction(this, -1);">
                          <div class="row">
                                    <div class="col1">充值金额：</div>
                                    <div class="col2"><input name="amount" onkeypress="return isNumber(event)" type="text" class="textbox2">
                                    <img src="./images/warningsmallicon.jpg" class="mt4 ml10"> <div class="pink mt4">请输入充值金额，最低金额100</div></div>
                          </div>
                          <div class="row clearfix">
                                    <div class="col1">银行种类：</div>
                            <div class="col2">
                                <div class="selectbox">
                                            <input type="radio" id="ZFB" name="payId" value="992" class="mt4">
                                            <div class="sprite ico-zfb"></div>
                                            <div>支付宝</div>
                                </div>
                            </div>
                          </div>
						  <div class="row smtxt">
							<div class="col1"></div>
							<div class="col2"><span style="color: red">* 无限制多次充值(入款收取1%手续费）手机支付须保存二维码，用支付宝扫一扫选择相册二维码即可支付。建议使用网银行在线充值</span></div>
							</div>
                          <div class="row mt15">
                                <div class="col1"></div>
                                <div class="col2">
                                <button class="btnsubmit">开始充值</button>
                                </div>
                            </div>
                        </form>
                        </div>
                  </div>
                  
              </div>

          </div>
    
    
</body></html>