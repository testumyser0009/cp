
<html>
<head>
<script type="text/javascript" src="/static/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/static/lib/util/httpUtil.js"></script>
<link href="/static/css/popup.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div class="popup">
		<div class="popupinternal order-submit2">
			<input id="cfgId" type="hidden" />
			<div class="col-left">
				<p>请转账至下列银行账户中：</p>
				<table class="table" style="height: 150px">
					<tbody>
						<tr>
							<td colspan="3"><img id="rechImg" src="/static/images/bank/ZFB_s.jpg"></td>
						</tr>
                        <tr id="code_str">
                            <td>附言：</td>
                            <td><input type="text" id="copy_code" readonly style="width: 170px" value="<?=rand(100000,999999)?> "/></td>
                            <td><span class="copy">复制</span></td>
                        </tr>
						<tr>
							<td>姓名：</td>
							<td><input type="text" id="copy_username" readonly style="width: 170px"/></td>
							<td><span class="copy">复制</span></td>
						</tr>
						<tr>
							<td>帐号：</td>
							<td><input type="text" id="copy_cardid" readonly style="width: 170px"/></td>
							<td><span class="copy">复制</span></td>
						</tr>
						<tr id="copy_address_tr">
							<td>备注：</td>
							<td colspan="2"><input type="text" id="copy_address" readonly style="width: 222px" /></td>
						</tr>
					</tbody>
				</table>

				<div class="three-second">
					<h4>存款信息</h4>
					<div class="post-info">
						<p>
							存款金额：<input type="text" id="amount"  onkeypress="return isNumber(event)" onblur="changeRebateMoney()" autocomplete="off">
						</p>
						<p>
							<span id="nickname_desc">用户姓名</span>：<input type="text" id="userName" >
						</p>

						<p id="type_str">
                            存款方式：<select id="type">
                                <option value="">请选择存款方式</option>
                                <option value="支付宝转账">支付宝转账</option>
                                <option value="银行柜台">银行柜台</option>
                                <option value="ATM现金">ATM现金</option>
                                <option value="ATM卡转">ATM卡转</option>
                                <option value="网银转账">网银转账</option>
                            </select>

						</p>

						<p>
							存款时间：<input style="width: 70px;" name="cn_date" type="text" id="cn_date" value="" size="10" maxlength="10">
							<input style="width: 20px;" name="s_h" id="s_h" type="text" size="2" maxlength="2" value="00" onkeypress="return isNumber(event)">
							  时
							<input style="width: 20px;" name="s_i" id="s_i" type="text" size="2" maxlength="2" value="00" onkeypress="return isNumber(event)">
							分
						</p>
						<p id="rebate_html" class="hide">
							赠送金额：<span id="rebate_money">0</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-right">
				<div class="jc-info">
					<h4>复制提示</h4>
					<p>浏览器不支持复制,点击“复制”后请使用Ctrl+C或者鼠标右键菜单</p>
				</div>
				<div id="bank-info1" class="bank-info hide">
					<h4>充值教程</h4>
					<img id="payImg" width="180" height="180" style="margin:0;">
				</div>
				
				<div id="bank-info2" class="bank-info hide">
					<h4>常用网银网址</h4>
					<div class="bank-info-left">
						<p><a target="_blank" href="http://www.icbc.com.cn/">工商银行</a></p>
						<p><a target="_blank" href="http://www.ccb.com/">建设银行</a></p>
						<p><a target="_blank" href="http://www.abchina.com/cn/">农业银行</a></p>
						<p><a target="_blank" href="http://www.bankcomm.com">交通银行</a></p>
						<p><a target="_blank" href="http://www.boc.cn/">中国银行</a></p>
						<p><a target="_blank" href="http://www.cebbank.com/">光大银行</a></p>
						<p><a target="_blank" href="http://www.cmbc.com.cn/">民生银行</a></p>
						<p><a target="_blank" href="http://www.psbc.com/">邮政银行</a></p>
					</div>
					<div class="bank-info-right">
						<p><a target="_blank" href="http://www.cmbchina.com/">招商银行</a></p>
						<p><a target="_blank" href="http://www.cib.com.cn/">兴业银行</a></p>
						<p><a target="_blank" href="http://bank.ecitic.com/">中信银行</a></p>
						<p><a target="_blank" href="http://www.cgbchina.com.cn/">广发银行</a></p>
						<p><a target="_blank" href="http://www.spdb.com.cn/">浦发银行</a></p>
						<p><a target="_blank" href="http://www.hxb.com.cn/">华夏银行</a></p>
						<p><a target="_blank" href="http://www.baidu.com/">其他银行</a></p>
					</div>
				</div>

			</div>

			<div class="fullwidth">
				<div class="container">
					<input type="submit" class="button" id="btnSubmit1" onclick="doPay();" style="cursor:pointer" value="提交订单">
				</div>
			</div>

		</div>
	</div>
	
	<script type="text/javascript" src="/static/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript">
var layer = parent.layer;
parent.UserBet.playType = "NORMAL";
</script>
<script type="text/javascript" src="/static/lib/util/md5.js"></script>
<script type="text/javascript" src="/static/lib/util/common.js"></script>
<script type="text/javascript" src="/static/lib/util/ctab.min.js"></script>
<!--  error.js要放在最后面  -->
<script type="text/javascript" src="/static/lib/util/error.js"></script>
	<script src="/static/lib/zeroclipboard-2.2.0/dist/ZeroClipboard.min.js" type="text/javascript"></script>
	
	<script type="text/javascript">
		var layer = parent.layer;
		var rebate=0;
	
		$(function() {
			var client = new ZeroClipboard($('.copy'));
			client.on('ready', function(event) {
				client.on('copy', function(event) {
					var text = $(event.target).parent().prev().find('input').val();
					event.clipboardData.setData('text/plain', text);
				});

				client.on('aftercopy', function(event) {
					alert("复制成功");
				});
			});
			
			var dateStr = new Date().format('yyyy-MM-dd hh:mm:ss');
			$('#cn_date').val(dateStr.substr(0, 10));
			$('#s_h').val(dateStr.substr(11, 2));
			$('#s_i').val(dateStr.substr(14, 2));
			
			var Pay = parent.framePage.Pay;
			var radio = Pay.getSelectRadio();
			if(radio) {
				$('#cfgId').val(radio.val());
				$('#copy_username').val(radio.attr('payee-name'));
				$('#copy_cardid').val(radio.attr('payee'));
				
				if(radio.attr('bank-address')) {
					$('#copy_address').val(radio.attr('bank-address'));
					$('#copy_address_tr').show();
				}
				
				var RECH_TYPE_KEY = parent.framePage.RECH_TYPE_KEY;
				var payVal =parent.framePage.$("#payVal").val();
				var code = radio.attr('code');
				rebate=getPayRebate(payVal);
				
				if(rebate>0){
					$("#rebate_html").show();
				}else{
					$("#rebate_html").hide();
				}
				
				$('#rechImg').attr('src', '/static/images/bank/' + code + '_s.jpg');
				
				if(code == "WEIXIN"){
					$("#nickname_desc").html("微信昵称");
				}else  if(code == "ZFB"||code == "CFT"){
					$("#nickname_desc").html("用户昵称");
				}
				
				if(code=="ZFB"){
					$("#userName").attr("placeholder","请填写支付宝昵称")
				}else if(code == "CFT"){
					$("#userName").attr("placeholder","请填写汇款人真实姓名")
				}
				
				if(code == "WEIXIN" || code == "ZFB") {
					var imgUrl = radio.attr('pay-img');
					if(imgUrl.indexOf('http') != 0) {
						//imgUrl = parent.staticFileUrl + imgUrl;
					}
					$('#payImg').attr('src', imgUrl);
					$('#bank-info1').show();
                    $('#code_str').addClass('hide');
                    $('#type_str').addClass('hide');
				} else if (code == "CFT") {
                $('#payImg').attr('src', '/static/images/bank/dsn_CMB.jpg');
                $('#bank-info1').show();
                }
				else {
					$('#bank-info2').show();
                    $('#code_str').addClass('hide');
                    $('#type_str').addClass('hide');
				}
			}
		});
		
		function doPay() {
			var cfgId = $('#cfgId').val();
			if(!cfgId) {
				return;
			}
			
			var amount = $('#amount').val();
			
			var re=/^[0-9]+.?[0-9]*$/;
			
			if (!re.test(amount)) {
				layer.alert('请输入正确的金额', {icon : 2});
				return false;
			}
			
			if (!amount) {
				layer.alert('请输入存款金额', {icon : 2});
				return false;
			}
			if(parseInt(amount) < 10) {
				layer.alert('存款金额至少10元', {icon : 2});
				return false;
			}
			if(amount>9999999){
				layer.alert('存款金额超过9999999元', {icon : 2});
				return false;
			}
			var userName = $('#userName').val();
			if (!userName) {
				layer.alert('请输入用户姓名', {icon : 2});
				return false;
			}
// 			var cardId = $('#cardId').val();
// 			if (!cardId) {
// 				layer.alert('请输入存款帐号', {icon : 2});
// 				return false;
// 			}
			
			var cn_date = $('#cn_date').val();
			var s_h = $('#s_h').val();
			var s_i = $('#s_i').val();
			var depositTime = cn_date + " " + s_h + ":" + s_i + ":00";
			var dateRegx=/^(d{4})-(d{2})-(d{2}) (d{2}):(d{2}):(d{2})$/;

		    if(dateRegx.exec(depositTime)) {
		    	layer.alert('存款时间格式不正确', {icon : 2});
				return false
		    }

            var code = $('#copy_code').val();
            var address = $('#copy_address').val();
            var type = $('#type').val();

            if (!userName && cfgId == 290) {
                layer.alert('请选择存款方式', {icon : 2});
                return false;
            }

		    amount=parseFloat(amount).toFixed(2);
			
			$.ajax({
				type:"post",
				url: '/userrech/save.do',
				data: {
					cfgId: cfgId, 
					amount: amount, 
					username: userName, 
// 					account: cardId,
 					address: address,
 					code: code,
 					type: type,
					depositTime: depositTime
				},
				dataType: "text",
				success: function(data) {
					layer.closeAll();
					layer.alert(data, {icon : 1});
				}
			});
		}
		
		
		function getPayRebate(type){
			var rechTypes = parent.PARAM_CFG["rech_type"];
			var rebate=0;
			for(var i in rechTypes){
				var rechType=rechTypes[i];
				if(rechType.value==type){
					rebate=rechType.rebate;
					break;
				}
			}
			return rebate;
		}
		
		function changeRebateMoney(){
			var amount=$("#amount").val();
			if(amount>0 && rebate>0){
				$("#rebate_money").html(amount*rebate);
			}
		}
	</script>
</body>
</html>