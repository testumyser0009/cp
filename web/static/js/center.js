var CHECK_STATUS = {
	0 : '提现成功',
	1 : '申请中',
	2 : '提现失败',
	3 : '提现成功',
	4 : '提现失败',
	5 : '撤销'
};

var RECH_STATUS = {
	0 : '处理中',
	1 : '充值成功',
	2 : '充值成功',
	3 : '充值失败',
	4 : '充值失败',
	9 : '充值成功'
};

var RECH_TYPE = {
	"onlinePayment" : '在线充值',
	"weixin" : '微信转账',
	"alipay" : '支付宝转账',
	"cft" : '财付通转账',
	"bankTransfer" : '银行卡转账',
	"adminAddMoney" : '系统充值'
};

var PAGE_TYPE = {
	PAY : 'PAY',
	WITHDRAWAL : 'WITHDRAWAL',
	FUNDPWD : 'FUNDPWD'
};

var RECH_TYPE_KEY = {
	ONLINE : "onlinePayment",
	WEIXIN : "weixin",
	ALIPAY : "alipay",
	CFT : "cft",
	BANK : "bankTransfer"
};

var BANK_ICO = {
	"ICBC" : "ico-icbc",
	"CCB" : "ico-ccb",
	"ABC" : "ico-abc",
	"BOCO" : "ico-boco",
	"BOC" : "ico-boc",
	"CEBB" : "ico-cebb",
	"CMBC" : "ico-cmbc",
	"POST" : "ico-post",
	"CMB" : "ico-cmb",
	"CIB" : "ico-cib",
	"CCCB" : "ico-cccb",
	"GDB" : "ico-gdb",
	"SPDB" : "ico-spdb",
	"HXB" : "ico-hxb"
};

$(function() {
	// 事件委托，当动态添加元素后委托绑定click事件
	$(document).on('click', '.banklist', function() {
		$(this).find("input:radio").prop("checked", !0);
	});

	Center.init(function() {
		var pageType = $('#pageType').val();
		// 如果是提款，需要判断是否达到提款条件
		if (pageType == PAGE_TYPE.WITHDRAWAL) {
			WithDraw.init();
		}
		else if(pageType == PAGE_TYPE.FUNDPWD) {
			User.initFundPwdPage();
		}
	});

	Pay.initPayType();
});

var ThirdChannels={
	    "57": "微信支付",
	    "758": "支付宝在线支付",
	    "3001": "招商银行",
	    "3002": "中国工商银行",
	    "3003": "中国建设银行",
	    "3004": "上海浦东发展银行",
	    "3005": "中国农业银行",
	    "3006": "中国民生银行",
	    "3009": "兴业银行",
	    "3020": "中国交通银行",
	    "3022": "中国光大银行",
	    "3026": "中国银行",
	    "3032": "北京银行",
	    "3035": "平安银行",
	    "3036": "广发银行",
	    "3037": "上海农商银行",
	    "3038": "中国邮政储蓄银行",
	    "3039": "中信银行"
	};

var ThkThirdChannels={
		"ICBC": "中国工商银行",
		"CCB": "中国建设银行",
		"ABC": "中国农业银行",
		"BOCOM": "中国交通银行",
		"BOC": "中国银行",
		"CEBBANK": "中国光大银行",
		"CMBCS": "中国民生银行",
		"PSBC": "中国邮政储蓄银行",
		"CIB": "兴业银行",
	    "CMBC": "招商银行",
	    "ECITIC": "中信银行",
	    "CGB": "广发银行",
	    "SPDB": "浦发银行",
	    "HXB": "华夏银行",
	    "PINGAN": "平安银行",
	    "BCCB": "北京银行",
	    "BOS": "上海银行",
	    "BRCB": "北京农商"
	};


var ZfThirdChannels={
		"ABC": "中国农业银行",
		"ICBC": "中国工商银行",
		"CCB": "中国建设银行",
		"BCOM": "中国交通银行",
		"BOC": "中国银行",
		"CMB": "招商银行",
		"CMBC": "中国民生银行",
		"CEBB": "中国光大银行",
		"BOB": "北京银行",
		"SHB": "上海银行",
		"HXB": "华夏银行",
		"CIB": "兴业银行",
		"PSBC": "中国邮政储蓄银行",
		"SPABANK": "平安银行",
		"SPDB": "浦发银行",
		"ECITIC": "中信银行",
		"GDB": "广发银行",
};

var Center = {
	init : function(callback) {
		$.ajax({
			type : "get",
			url : '/Userrech/detail.do',
			dataType : "json",
			success : function(data) {
				if (!data) {
					return;
				}

				Center.user = data;

				$('#userName').html(data.userName);
				$('#balance').html(data.money);
				$('#loginTime').html(data.loginTime);
				
				if (typeof(callback) == 'function') {
					callback();
				}
			}
		});
	}
};

var User = {
	initFundPwdPage: function() {
		if (!Center.user.isSetFundPwd && !Center.user.oldPaypasswd) {
			$('#withdrawal1').show();
		} else {
			$('#withdrawal2').show();
		}
	},
	
	updatePwd: function() {
		var loginpwd = $('#loginpwd').val();
		if(!loginpwd) {
			layer.alert('请输入当前登录密码', {icon : 2});
			return false;
		}
		
		var newpwd = $('#newpwd').val();
		if(!newpwd) {
			layer.alert('请输入要设置的新的登录密码', {icon : 2});
			return false;
		}
		
		var rednewpwd = $('#rednewpwd').val();
		
		if(newpwd != rednewpwd) {
			layer.alert('两次输入的密码不一致，请重新输入', {icon : 2});
			return false;
		}
		
		$.ajax({
			type : "post",
			url : '/safe/setPasswd.do',
			data : {
				oldPwd : loginpwd,
				newPwd : newpwd
			},
			success : function(g) {
				layer.alert(g, {icon : 1});
			}
		});
	},
	
	setFundPwd : function(callback) {
		var loginpwd = $('#loginpwd').val();
		if (!loginpwd) {
			layer.alert('请输入登录密码', {
				icon : 2
			});
			return false;
		}

		var drawcode = $('#drawcode').val();
		if (!drawcode) {
			layer.alert('请输入提款密码', {
				icon : 2
			});
			return false;
		}

		var redrawcode = $('#redrawcode').val();
		if (drawcode != redrawcode) {
			layer.alert('提款密码和重复密码不一致', {
				icon : 2
			});
			return false;
		}

		if (drawcode.length < 6) {
			layer.alert('提款密码不能小于6位', {
				icon : 2
			});
			return false;
		}

		$.ajax({
			type : "post",
			url : '/user/setFundPwd.do',
			data : {
				loginpwd : hex_md5(loginpwd),
				coinpwd : hex_md5(drawcode)
			},
			success : function(g) {
				layer.alert(g, {
					icon : 1
				}, function(index) {
					layer.close(index);
					
					if(typeof(callback) == 'function' && g=='设置提款密码成功') {
						callback();
					}
				});
			}
		});
	},
	
	updateFundPwd: function() {
		var fundpwd = $('#fundpwd').val();
		if (!loginpwd) {
			layer.alert('请输入当前提款密码', {
				icon : 2
			});
			return false;
		}

		var newpwd = $('#newpwd').val();
		if (!newpwd) {
			layer.alert('请输入新的提款密码', {
				icon : 2
			});
			return false;
		}
		
		//var patrn= /^[0-9]{6,15}$/; 
		if (newpwd.length < 6){
			 alert('请设置至少6位的提款密码');
			return;
		}
		var rednewpwd = $('#rednewpwd').val();
		if (newpwd != rednewpwd) {
			layer.alert('两次输入的密码不一致，请重新输入', {
				icon : 2
			});
			return false;
		}

		$.ajax({
			type : "post",
			url : '/safe/setCoinPwd.do',
			data : {
				oldPwd : fundpwd,
				newPwd : newpwd
			},
			success : function(g) {
				layer.alert(g, {
					icon : 1
				});
			}
		});
	},
	
	getNoticeList: function(pageOption) {
		pageOption.nextPageCallback = "";// 清空回调函数
		$.ajax({
			  type: "GET",
			  url: "/notice/queryPage.do?t="+Date.parse(new Date()),
			  data: pageOption,
			  dataType: "json",
			  success: function(result){
			     if(result && result.totalCount>0){
			    	 var bodyHtmlStr = "";
			    	 var bodyHtmlStrFormat='<tr class="{trcolor}">\
			    	 		<td>{title}</td>\
			    	 		<td>系统管理员</td>\
			    	 		<td >{addDate}<input type="hidden" id="notice_content_{id}" value="{content}"></td>\
			    		 	<td><a onclick="User.showNoticeDetail(\'{id}\',\'\');" href="javascript:;">详情{isNew}</a></td>\
			    	 		</tr>';
			    	 $(result.data).each(function(i,n){
			    		 var newStr='<i id="new_user_notice_msg'+n.id+'" class="new_user_notice_msg " title="您有新的消息" style="margin: -6px 12px 0 5px;"></i>';
			    		 if(n.isRead==1){
			    			 newStr="";
			    		 }
			    		 bodyHtmlStr += bodyHtmlStrFormat.format({
			    			 "id" : n.id,
			    			 "title" : n.title,
			    			 "content" : n.content,
			    			 "operatorName" : n.operatorName,
			    			 "addDate" : n.addDate,
			    			 "isNew": newStr,
			    			 "trcolor": i % 2 == 0 ? "trcolor" : ""
			    		 });
					 });
			    	 $("#noticelist-tbody").html(bodyHtmlStr);
			    	 
			    	 pageOption.totalCount = result.totalCount;
					 pageOption.nextPageCallback = User.getNoticeList;
					 new cpPage(pageOption).pagination(); 	
			     }else {
			    	 $("#listPage").html('');
			    	 $("#noticelist-tbody").html('<tr class="trcolor"><td colspan="4">暂无数据</td></tr>');
			   	  }
			  }
		});
	},
	
	showNoticeDetail: function(id,content) {
		$.ajax({
			  type: "GET",
			  url: "/notice/updateIsRead.do?t="+Date.parse(new Date()),
			  data: {noticeId:id},
			  dataType: "json",
			  success: function(result){
			  }
		});
		$("#new_user_notice_msg"+id).remove();
		var content = $("#notice_content_" + id).val();
		layer.open({
			type : 1,
			title : '消息详情',
			scrollbar : false,
			shade : [ 0.5 ],
			area : [ '500px', '400px' ],
			content : '<div class="pop-detail">' + content + '</div>'
		});
	}
};

var Pay = {
	/**
	 * 初始化充值类型，获取该用户有哪些充值方式，页面只显示有的充值方式
	 */
	initPayType : function() {
		if (!parent.PARAM_CFG) {
			layer.alert('充值类型配置错误，请刷新页面重试', {
				icon : 2
			});
			return false;
		}

		var rechTypeList = parent.PARAM_CFG["rech_type"];
		if (!rechTypeList || rechTypeList.length == 0) {
			layer.alert('充值类型配置错误，请刷新页面重试', {
				icon : 2
			});
			return false;
		}
		
		$(".tab").click(function() {
			var a = $(this).attr("id");
			$(".subcontent").hide();
			$(".tab").removeClass("tabactive");
			$("#subpage" + a).show();
			$(this).addClass("tabactive");
			$("#payVal").val($(this).attr("payval"));
			Pay.currRechId = $("#subpage" + a).find("input[name='rechId']").val();
		});

		var rechTypeMap = {};
		for ( var i in rechTypeList) {
			// 过滤掉关闭的充值类型
			if (rechTypeList[i].open == 0) {
				rechTypeMap[rechTypeList[i].value] = {
					isOpen : false
				};
			}
		}

		$.ajax({
			type : "get",
			url : '/userrech/getUserRechCfg.do',
			dataType : "json",
			success : function(data) {
				if (!data) {
					layer.alert('充值帐户配置错误，请刷新页面重试', {
						icon : 2
					});
					return false;
				}

				var rechCfgMap = {};
				for ( var i in data) {
					var rechType = rechTypeMap[data[i].rechType];
					if (rechType) {
						rechType.isOpen = true;
						var cfgList = rechType.cfgList || [];
						cfgList.push(data[i]);
						rechType.cfgList = cfgList;
						
						rechCfgMap[data[i].id] = data[i];
					}
				}
				Pay.rechCfgMap = rechCfgMap;

				for ( var key in rechTypeMap) {
					if (!rechTypeMap[key].isOpen) {
						continue;
					}
					if (key == RECH_TYPE_KEY.ONLINE) {
						$('#tp_zxzf').removeClass("hide");
						var onlineRechCfgs = rechTypeMap[key].cfgList;
						if( onlineRechCfgs){ 
							var onlineHtmlStr = "";
							var onlineHtmlFormat='<label style="padding: 0px 5px 0px 11px" title="{payname}">\
													<input type="radio" name="rechId" onclick="Pay.showBank({onlineType}, this)" id="rechId{num}" payname="{payname}" value="{rechfId}" domain="{domain}">&nbsp;在线支付{num}\
												  </label>';
							
							var rn=Math.floor(Math.random()*10+1);//生成1~10的随机数
							var rechList = [];
							if(rn==10){//十分之一的机会sf充值排在第一位
								for(var i=0;i<onlineRechCfgs.length;i++){
									var orc=onlineRechCfgs[i];
									if(orc.onlineType==2){//sf网银
										rechList.unshift(orc);
									}else{
										rechList.push(orc);
									}
								}
							}else{
								for(var i=0;i<onlineRechCfgs.length;i++){
									var orc=onlineRechCfgs[i];
									if(orc.onlineType!=2){
										rechList.unshift(orc);
									}else{
										rechList.push(orc);
									}
								}
							}
							var num=0;
							for(var i=0;i<rechList.length;i++){
								var orc=rechList[i];
								if(orc.onlineType==4){//th_wx
									$("#tp_th_wx").show();
									$("#th_rech_id").val(orc.id);
									continue;
								}
								else if(orc.onlineType==5 || orc.onlineType==13){//th_ck
									continue;
									
								}
								else if(orc.onlineType==6){//sf_zfb
									$("#tp_sf_zfb").show();
									$("#sf_zfb_rech_id").val(orc.id);
									continue;
								}
								else if(orc.onlineType==7){//sf_wx
									$("#tp_sf_wx").show();
									$("#sf_wx_rech_id").val(orc.id);
									continue;
								}
								else if(orc.onlineType==9){//zf_wx
									$("#tp_zf_wx").show();
									$("#zf_wx_rech_id").val(orc.id);
									continue;
								}
								else if(orc.onlineType==10){//zf_zfb
									$("#tp_zf_zfb").show();
									$("#zf_zfb_rech_id").val(orc.id);
									continue;
								}
								else if(orc.onlineType==12){//ly_wx
									$("#tp_ly_wx").show();
									$("#ly_wx_rech_id").val(orc.id);
									continue;
								}
								else if(orc.onlineType==14){//jf_wx
									$("#tp_jf_wx").show();
									$("#jf_wx_rech_id").val(orc.id);
									continue;
								}
								else if(orc.onlineType==16){//jf_wx
									$("#tp_qw_zfb").show();
									$("#qw_zfb_rech_id").val(orc.id);
									continue;
								}
								else if(orc.onlineType==17){//jf_wx
									$("#tp_th_zfb").show();
									$("#th_zfb_rech_id").val(orc.id);
									continue;
								}
								num+=1;
								
								onlineHtmlStr += onlineHtmlFormat.format({
									"num" : num,
									"rechfId" : orc.id,
									"onlineType" : orc.onlineType,
									"domain" : orc.domain||"",
									"payname":orc.payeeName
								});
							}
							
							//$("#online_channel").show();
						}
						$("#online_channel_html").html(onlineHtmlStr);
						$("#online_channel_html").find('input[type="radio"]').first().click();//默认选择第一位
					} else if (key == RECH_TYPE_KEY.BANK) {
						$('#tp_bank').removeClass("hide");
					} else if (key == RECH_TYPE_KEY.ALIPAY) {
						$('#tp_zfb').removeClass("hide");
					} else if (key == RECH_TYPE_KEY.WEIXIN) {
						$('#tp_wx').removeClass("hide");
					} else if (key == RECH_TYPE_KEY.CFT) {
						$('#tp_cft').removeClass("hide");
					}
				}

				var tabs = $('.tabs > .tab:not(".hide")');
				if (tabs.length == 0) {
					return false;
				}
				var firstTab = tabs[0];
				$(firstTab).addClass("tabactive");
				var firstTabId = $(firstTab).attr("id");
				$("#subpage" + firstTabId).show();
				$("#amount").focus();
				Pay.rechTypeMap = rechTypeMap;
			}
		});
	},
	
	showBank:function(type, obj){
		if(type==1||type==2){
			$("#bf-banks").show();
			$("#thk-banks").hide();
			$("#zf-banks").hide();
			$("#ly-banks").hide();
			$("#qw-banks").hide();
			$("#bf-banks").find("input[type='radio']").first().click();
		}else if(type==3){
			$("#thk-banks").show();
			$("#bf-banks").hide();
			$("#zf-banks").hide();
			$("#ly-banks").hide();
			$("#qw-banks").hide();
			$("#thk-banks").find("input[type='radio']").first().click();
		}else if(type==8){
			$("#zf-banks").show();
			$("#bf-banks").hide();
			$("#thk-banks").hide();
			$("#ly-banks").hide();
			$("#qw-banks").hide();
			$("#zf-banks").find("input[type='radio']").first().click();
		}else if(type==11){
			$("#ly-banks").show();
			$("#zf-banks").hide();
			$("#bf-banks").hide();
			$("#thk-banks").hide();
			$("#qw-banks").hide();
			$("#ly-banks").find("input[type='radio']").first().click();
		}else if(type==15){
			$("#qw-banks").show();
			$("#zf-banks").hide();
			$("#bf-banks").hide();
			$("#thk-banks").hide();
			$("#ly-banks").hide();
			$("#qw-banks").find("input[type='radio']").first().click();
		}
		Pay.currRechId = $(obj).val();
	},

	initAWRechCfg : function(obj) {
		if ($(obj).attr("init")) {
			return;
		}

		var zfbRechType = Pay.rechTypeMap[RECH_TYPE_KEY.ALIPAY];
		if (zfbRechType && zfbRechType.cfgList.length > 0) {
			for ( var i in zfbRechType.cfgList) {
				var cfg = zfbRechType.cfgList[i];
				$('#aw-subcol').append(
						'<div class="banklist marginbtm10">\
						<input type="radio" name="zfbPayId" value="' + cfg.id + '" payee="' + cfg.payee + '" payee-name="' + cfg.payeeName + '" code="ZFB" pay-img="' + cfg.qrCode
								+ '" class="bankradiobtn"> <i class="ico-zfb"></i>\
								<span style="padding-right: 8px;">支付宝</span>\
					</div>');
			}
			$('#aw-subcol input').eq("0").attr("checked","checked");
		}

		$(obj).attr("init", "true");
	},
	
	initWeChat : function(obj){
		if ($(obj).attr("init")) {
			return;
		}
		
		var weixinRechType = Pay.rechTypeMap[RECH_TYPE_KEY.WEIXIN];
		if (weixinRechType && weixinRechType.cfgList.length > 0) {
			for ( var i in weixinRechType.cfgList) {
				var cfg = weixinRechType.cfgList[i];
				$('#wx-subcol').append(
						'<div class="banklist marginbtm10">\
						<input type="radio" name="wxPayId" value="' + cfg.id + '" payee="' + cfg.payee + '" payee-name="' + cfg.payeeName + '" code="WEIXIN" pay-img="' + cfg.qrCode
								+ '" class="bankradiobtn"> <i class="ico-weixin"></i>\
								<span style="padding-right: 8px;">微信</span>\
					</div>');
			}
			$('#wx-subcol input').eq("0").attr("checked","checked");
		}
		
		$(obj).attr("init", "true");
	},
	
	initCft : function(obj){
		if ($(obj).attr("init")) {
			return;
		}
		
		var cftRechType = Pay.rechTypeMap[RECH_TYPE_KEY.CFT];
		if (cftRechType && cftRechType.cfgList.length > 0) {
			for ( var i in cftRechType.cfgList) {
				var cfg = cftRechType.cfgList[i];
				$('#cft-subcol').append(
						'<div class="banklist marginbtm10">\
						<input type="radio" name="cftPayId" value="' + cfg.id + '" payee="' + cfg.payee + '" payee-name="' + cfg.payeeName + '" code="CFT" pay-img="' + cfg.qrCode
						+ '" class="bankradiobtn"> <i class="ico-cft"></i>\
						<span style="padding-right: 8px;">财付通</span>\
						</div>');
			}
			$('#cft-subcol input').eq("0").attr("checked","checked");
		}
		
		$(obj).attr("init", "true");
	},

	initBankRechCfg : function(obj) {
		if ($(obj).attr("init")) {
			return;
		}

		var bankRechType = Pay.rechTypeMap[RECH_TYPE_KEY.BANK];
		if (bankRechType && bankRechType.cfgList.length > 0) {
			for ( var i in bankRechType.cfgList) {
				var cfg = bankRechType.cfgList[i];
				$('#bank-subcol').append(
						'<div class="banklist marginbtm10">\
						<input type="radio" name="bank" value="' + cfg.id + '" payee="' + cfg.payee + '" payee-name="' + cfg.payeeName + '" bank-address="' + cfg.address + '" code="' + cfg.qrCode
								+ '" class="bankradiobtn"> <i class="' + BANK_ICO[cfg.qrCode] + '"></i>\
								<span style="padding-right: 8px;">' + cfg.rechName + '</span>\
					</div>');
			}
			$('#bank-subcol input').eq("0").attr("checked","checked");
		}

		$(obj).attr("init", "true");
	},

	onlinePay : function(onlineType) {
		var amount = $("#amount").val();
		if(zxzf){
			// if(onlineType=="sf_wx"){//sfwx
				// amount=$("#sf_wx_amount").val();
				// if(amount>5000){
					// layer.alert('微信小额支付单笔最高5000!', {
						// icon : 2
					// });
					// return false;
				// }
			// }
			if(onlineType=="sf_zfb"){//sfzfb
				amount=$("#sf_zfb_amount").val();
				if(amount>5000){
					layer.alert('支付宝小额支付单笔最高5000!', {
						icon : 2
					});
					return false;
				}
			}else if(onlineType=="th_wx"){//thwx
				amount=$("#th_wx_amount").val();
				if(amount>5000){
					layer.alert('微信小额支付单笔最高5000!', {
						icon : 2
					});
					return false;
				}
			}else if(onlineType=="zf_wx"){//zfwx
				amount=$("#zf_wx_amount").val();
				if(amount>5000){
					layer.alert('微信小额支付单笔最高5000!', {
						icon : 2
					});
					return false;
				}
			}else if(onlineType=="zf_zfb"){//zfzfb
				amount=$("#zf_zfb_amount").val();
				if(amount>5000){
					layer.alert('微信小额支付单笔最高5000!', {
						icon : 2
					});
					return false;
				}
			}else if(onlineType=="ly_wx"){//lywx
				amount=$("#ly_wx_amount").val();
				if(amount>5000){
					layer.alert('微信小额支付单笔最高5000!', {
						icon : 2
					});
					return false;
				}
			}else if(onlineType=="jf_wx"){//jfwx
				amount=$("#jf_wx_amount").val();
				if(amount>5000){
					layer.alert('微信小额支付单笔最高5000!', {
						icon : 2
					});
					return false;
				}
			}else if(onlineType=="qw_zfb"){//zfzfb
				amount=$("#qw_zfb_amount").val();
				if(amount>5000){
					layer.alert('支付宝小额支付单笔最高5000!', {
						icon : 2
					});
					return false;
				}
			}else if(onlineType=="th_zfb"){//zfzfb
				amount=$("#th_zfb_amount").val();
				if(amount>1000){
					layer.alert('支付宝小额支付单笔最高1000!', {
						icon : 2
					});
					return false;
				}
			}
		}
		var errMsg = "";
		if (!amount) {
			layer.alert('请输入充值金额', {
				icon : 2
			});
			return false;
		}
		amount = parseInt(amount);
		if (amount < 0 || amount > 1000000) {
			layer.alert('充值金额范围10~1000000', {
				icon : 2
			});
			return false;
		}

		var radio = Pay.getSelectPayIdRadio();
		if (radio.length == 0) {
			layer.alert('请选择银行', {
				icon : 2
			});
			return false;
		}
		var bankName = radio.attr("bankname");
		$("#onlinePayBankName").val(bankName);
		
		var rechCfg = Pay.getRechCfg();
//		if(onlineType=="zxzf"){
			var domain=rechCfg.domain;
			var actionUrl="/userrech/onlinePay.do";
			if(domain){
				var token=$.cookie('token');
				$("#"+onlineType+"_token").val(token);
				$("#"+onlineType+"_form").attr("action", domain + actionUrl);
			}
//		}
		Pay.showOrderInfo(amount);
		return true;
	},

	showOrderInfo : function(rechMoney) {
		var rechTypes = parent.PARAM_CFG["rech_type"];
		var type=$("#payVal").val();
		var rebate=0;
		for(var i in rechTypes){
			var rechType=rechTypes[i];
			if(rechType.value==type){
				rebate=rechType.rebate;
				break;
			}
		}
		var rebateMoney=0;
		var winHeight="240px";
		if(rechMoney>0 && rebate>0){
			rebateMoney=rechMoney*rebate;
			winHeight="260px";
		}
		
		layer.open({
			type : 2,
			title : '订单信息',
			shadeClose : true,
			scrollbar : false,
			shade : [ 0.5 ],
			area : [ '340px', winHeight ],
			content : "/center/pay/transtips.html?rechMoney=" + rechMoney + "&rebateMoney="+rebateMoney+"&t=" + Date.parse(new Date())
		});
	},

	getSelectTabId : function() {
		return $('.tabs > .tabactive').attr("id");
	},

	getSelectPayIdRadio : function() {
		var tabId = Pay.getSelectTabId();
		return $('#subpage' + tabId).find('input[name="payId"]:checked');
	},
	getSelectRadio : function() {
		var tabId = Pay.getSelectTabId();
		return $('#subpage' + tabId).find('input[type="radio"]:checked');
	},
	getOnlineChannel : function() {
		return $('#online_channel_html').find('input[type="radio"]:checked');
	},
	getRechCfg : function() {
		return Pay.rechCfgMap[Pay.currRechId];
	},

	showPayWindow : function() {
		var radio = Pay.getSelectRadio();
		if (radio.length == 0) {
			layer.alert('请选择银行种类或支付帐号', {
				icon : 2
			});
			return false;
		}
		
		layer.open({
			type : 2,
			title : '订单信息',
			scrollbar : false,
			shade : [ 0.5 ],
			area : [ '570px', '460px' ],
			content : "/center/pay/pay_window.html"
		});
	},

	getRechList: function(pageOption) {
		var startDate = $("#startDate").val();
		var endDate = $("#endDate").val();
		var status = $('#status').val();

		if (status == -1) {
			status = null;
		}
		
		pageOption = pageOption || {};
		pageOption.startDate = startDate;
		pageOption.endDate = endDate;
		pageOption.status = status;
		pageOption.page = pageOption.page || 1;
		pageOption.rows = pageOption.rows || 8;
		pageOption.nextPageCallback = "";// 清空回调函数

		$.ajax({
			type : "GET",
			url : "/userrech/getRechList.do",
			data : pageOption,
			dataType : "json",
			success : function(result) {
				var bodyHtmlStr = "";
				if (result && result.totalCount > 0) {
					var bodyHtmlStrFormat = '\
			    		 <tr class="{trcolor}">\
							<td>{addTime}</td>\
							<td>{rechType}</td>\
							<td>{rechMoney}</td>\
							<td>{rebateMoney}</td>\
							<td>{remark}</td>\
							<td>{status}</td>\
						</tr>\
			    		 ';
					//<td><a onclick="Pay.showRechDetail(\'{orderNo}\');" href="javascript:;">详情</a></td>\
					$(result.data).each(function(i, n) {
						bodyHtmlStr += bodyHtmlStrFormat.format({
							"addTime" : n.addTime,
							"rechType": RECH_TYPE[n.rechType],
							"rechMoney" : n.rechMoney,
							"rebateMoney" : n.rebateMoney||0,
							"status" : RECH_STATUS[n.status],
							"remark" : "通过"+RECH_TYPE[n.rechType]+"存入"+n.rechMoney+"元",
							"orderNo": n.orderNo,
							"trcolor": i % 2 == 0 ? "trcolor" : ""
						});
					});
					
					pageOption.totalCount = result.totalCount;
					pageOption.nextPageCallback = Pay.getRechList;
					new cpPage(pageOption).pagination();
					
					$("#paylist-tbody").html(bodyHtmlStr);

				} else {
					$("#listPage").html('');
					$("#paylist-tbody").html('<tr class="trcolor"><td colspan="7">暂无数据</td></tr>');
				}
			}
		});
	},
	
	showRechDetail: function(orderNo) {
		$.ajax({
			type : "GET",
			url : "/userrech/getRechDetail.do",
			data : {orderNo: orderNo},
			dataType : "json",
			success : function(result) {
				var htmlStr = '<div class="pop-detail">\
					<p>交易编号：{orderNo}</p>\
					<p>发起时间：{addTime}</p>\
					<p>交易类型：充值 </p>\
					<p>交易金额：{rechMoney}</p>\
					<p>活动奖励金额：{rebateMoney}</p>\
					<p>手续费用：0</p>\
					<p>交易状态：{status} </p>\
					<p>充值方式：{rechType}</p>\
					<p>卡号：{payee}</p>\
					<p>持卡人：{payeeName}</p>\
					<p>存款人：{userName}</p>\
					<p>存款时间：{rechTime}</p>\
					<p>审核备注：{remark}</p>\
					</div>';
				var payeeName=result.payeeName;
				if(!payeeName){
					payeeName=ThirdChannels[result.thirdChannel];
					if(!payeeName){
						payeeName=ThkThirdChannels[result.thirdChannel];
					}
					if(!payeeName){
						payeeName=ZfThirdChannels[result.thirdChannel];
					}
				}
				htmlStr = htmlStr.format({
					"orderNo": result.orderNo,
					"addTime": result.addTime,
					"rechMoney": result.rechMoney,
					"rebateMoney": result.rebateMoney||0,
					"status": RECH_STATUS[result.status],
					"rechType": RECH_TYPE[result.rechType],
					"payee": result.payee||"",
					"payeeName": payeeName||"" ,
					"userName": result.userName,
					"rechTime": result.rechTime,
					"remark": result.remark || "无"
				});
				
				layer.open({
					type : 1,
					title : '充值详情',
					scrollbar : false,
					shade : [ 0.5 ],
					area : [ '500px', '400px' ],
					content : htmlStr
				});
			}
		});
	}
};

var WithDraw = {
	init : function() {
		// 判断用户余额是否达到提款最小限额，否则提示用户先充值
		if (Center.user.money < 100) {
			$('#withdrawal1').show();
		}
		// 未绑定银行卡，先让用户绑定银行卡
		else if (!Center.user.cardNo) {
			//console.log(Center.user.cardNo);
			$('#withdrawal2').show();
		} else if (!Center.user.isSetFundPwd && !Center.user.oldPaypasswd) {
			$('#withdrawal3').show();
		} else {
			WithDraw.showWithDrawalPage();
		}
		
//		$.get("/user/getRebindBank.do", function(data){
//		  if(data && data==1){
//			  $("#rebindBtn").show();
//		  }
//		});
	},

	showWithDrawalPage : function() {
		$('#bankName').html(Center.user.bankName);

		var cardNo = Center.user.cardNo;
		var lastCard = cardNo.substr(cardNo.length - 4, 4);
		$('#lastCard').html(lastCard);

		$('#withdrawal4').show();
	},

	showAddBank : function() {
		$('#card_h').hide();
		$('#card_s').show();

		$('#fullName').html(Center.user.fullName);
	},

	bindBank : function() {
		
		var fullName = $('#fullName').val();
		if (!fullName) {
			layer.alert('请输入真实姓名', {
				icon : 2
			});
			return false;
		}

		var bankId = $("#bankId").val();
		if (!bankId) {
			layer.alert('请选择银行', {
				icon : 2
			});
			return false;
		}

		var cardId = $('#cardId').val();
		if (!cardId) {
			layer.alert('请输入银行卡号', {
				icon : 2
			});
			return false;
		}

		var bankaddress = $('#bankaddress').val();
		if (!bankaddress) {
			layer.alert('请输入开户网点', {
				icon : 2
			});
			return false;
		}
		/*
		if(bankaddress.indexOf('省') == -1 || bankaddress.indexOf('市') == -1) {
			layer.alert('开户网点必须包含具体的省市', {
				icon : 2
			});
			return false;
		}
		*/

		$.ajax({
			type : "post",
			url : '/user/bindBank.do',
			data : {
				fullName : fullName,
				bankId : bankId,
				cardNo : cardId,
				subAddress : bankaddress
			},
			success : function(g) {
				layer.alert(g, {
					icon : 1
				}, function(index) {
					layer.close(index);
					if(g=='绑定成功'){
						$('#withdrawal2').hide();
						if (!Center.user.isSetFundPwd) {
							$('#withdrawal3').show();
						}
						else {
							$('#withdrawal4').show();
						}
					}
				});
			}
		});
	},
	
	//重新绑定
	rebindBank : function(){
		$('#withdrawal2').show();
		$('#withdrawal4').hide();
		WithDraw.showAddBank()
	},

	setFundPwd : function() {
		User.setFundPwd(function() {
			$('#withdrawal3').hide();
			$('#withdrawal4').show();
		});
	},

	submit : function() {
		var amount = $('#drawamount').val();

		if (!amount) {
			layer.alert('请输入提款金额', {
				icon : 2
			});
			return false;
		}
		amount = parseInt(amount);
		if (amount < 100) {
			layer.alert('提现金额不能小于100元', {
				icon : 2
			});
			return false;
		}

		var drawcode = $('#drawcode1').val();
		if (!drawcode) {
			layer.alert('请输入提款密码', {
				icon : 2
			});
			return false;
		}

		if (amount > Center.user.money) {
			layer.alert('余额不足', {
				icon : 2
			});
			return false;
		}
//		amount = parseFloat(amount).toFixed(2);
		$.ajax({
			type : "post",
			url : '/withdraw/submit.do',
			data : {
				coinpwd : drawcode,
				coinpwdmd5 : hex_md5(drawcode),
				amount : amount
			},
			success : function(g) {
				layer.alert(g, {
					icon : 1
				});
				
				Center.init(function() {
					parent.PullMsg.animateUserMoney(Center.user.money);
				});
			}
		});
	},
	
	getWithDrawList: function(pageOption) {
		var startDate = $("#startDate").val();
		var endDate = $("#endDate").val();
		var status = $('#status').val();

		if (status == -1) {
			status = null;
		}
		
		pageOption = pageOption || {};
		pageOption.startDate = startDate;
		pageOption.endDate = endDate;
		pageOption.status = status;
		pageOption.page = pageOption.page || 1;
		pageOption.rows = pageOption.rows || 8;
		pageOption.nextPageCallback = "";// 清空回调函数

		$.ajax({
			type : "GET",
			url : "/withdraw/getWithDrawList.do",
			data : pageOption,
			dataType : "json",
			success : function(result) {
				var bodyHtmlStr = "";
				if (result && result.totalCount > 0) {
					var bodyHtmlStrFormat = '\
			    		 <tr class="{trcolor}">\
							<td>{applyTime}</td>\
							<td>{uwType}</td>\
							<td>{applyMoney}</td>\
							<td>{reason}</td>\
							<td>{checkStatus}</td>\
						</tr>\
			    		 ';
					//<td><a onclick="WithDraw.showWithDrawDetail(\'{orderNo}\');" href="javascript:;">详情</a></td>\
					$(result.data).each(function(i, n) {
						var uwType=n.channel==2?"系统扣钱":"提现";
						bodyHtmlStr += bodyHtmlStrFormat.format({
							"applyTime" : n.applyTime,
							"applyMoney" : n.applyMoney,
							"uwType" : uwType,
							"checkStatus" : CHECK_STATUS[n.checkStatus],
							"reason" : n.reason || "无",
							"orderNo": n.orderNo,
							"trcolor": i % 2 == 0 ? "trcolor" : ""
						});
					});
					pageOption.totalCount = result.totalCount;
					pageOption.nextPageCallback = WithDraw.getWithDrawList;
					new cpPage(pageOption).pagination();
					$("#withdrawlist-tbody").html(bodyHtmlStr);

				} else {
					$("#listPage").html('');
					$("#withdrawlist-tbody").html('<tr class="trcolor"><td colspan="6">暂无数据</td></tr>');
				}
			}
		});
	},
	
	showWithDrawDetail: function(orderNo) {
		$.ajax({
			type : "GET",
			url : "/withdraw/getWithDrawDetail.do",
			data : {orderNo: orderNo},
			dataType : "json",
			success : function(result) {
				var htmlStr = '<div class="pop-detail">\
					<p>交易编号：{orderNo}</p>\
					<p>发起时间：{applyTime}</p>\
					<p>交易类型：充值 </p>\
					<p>交易金额：{applyMoney}</p>\
					<p>手续费用：0</p>\
					<p>交易状态：{checkStatus} </p>\
					<p>提款卡号：{bankCard}</p>\
					<p>持卡人：{bankAccount}</p>\
					<p>审核时间：{operatorTime}</p>\
					<p>审核备注：{reason}</p>\
					</div>';
				
				htmlStr = htmlStr.format({
					"orderNo": result.orderNo,
					"applyTime": result.applyTime,
					"applyMoney": result.applyMoney,
					"checkStatus": CHECK_STATUS[result.checkStatus],
					"bankCard": result.bankCard||"",
					"bankAccount": result.bankAccount||"",
					"userName": result.userName||"",
					"operatorTime": result.operatorTime || "未审核",
					"reason": result.reason || "无"
				});
				
				layer.open({
					type : 1,
					title : '提款详情',
					scrollbar : false,
					shade : [ 0.5 ],
					area : [ '500px', '400px' ],
					content : htmlStr
				});
			}
		});
	}
};
