$(document).ajaxError(function(event, XMLHttpRequest, ajaxOptions, thrownError) {
	if (403 == XMLHttpRequest.status) {
		var obj = jQuery.parseJSON(XMLHttpRequest.responseText);
		alert(obj.msg||"登录超时");
		window.location.href = '/login.html';
	} else {
		if (XMLHttpRequest.status != 200&&XMLHttpRequest.status != 504) {
			var obj = jQuery.parseJSON(XMLHttpRequest.responseText);
			if (obj.code == 1004) {
				layer.alert(obj.msg, {
					icon : 2
				});
			} else if (obj.code == 1010||obj.errorCode==1010||obj.errorCode==403) {// 超时
				alert(obj.msg);
				parent.location.href = '/login.html';
			} else {
				layer.alert(obj.msg || "操作异常", {
					icon : 2
				});
			}
		}
	}
});