var HttpUtil = {
	/**
	 * 获取url #后面参数
	 * @returns {Object}
	 */
	GetRequest : function() {
		var url = location.href; //获取url中"#"符后的字串 
		var array = new Array();
		array = url.split("#"); //字符分割
		url = "#" + array[1];
		var theRequest = new Object();
		if (url.indexOf("#") != -1) {
			var str = url.substr(1);
			strs = str.split("&");
			for (var i = 0; i < strs.length; i++) {
				theRequest[strs[i].split("=")[0]] = unescape(strs[i].split("=")[1]);
			}
		}
		return theRequest;
	},
	GetUrlPara : function() {
		var url = location.search; //获取url中"?"符后的字串   
		var theRequest = new Object();
		if (url.indexOf("?") != -1) {
			var str = url.substr(1);
			strs = str.split("&");
			for (var i = 0; i < strs.length; i++) {
				var kv = strs[i].split("=");
				theRequest[kv[0]] = unescape(kv[1]);
			}
		}
		return theRequest;
	},
	ajax : function(option){
		//url, type, para, successCallBack, errorCallBack
		if(!option){
			return ;
		}
		if(!option.url){
			return;
		}
		$.ajax({
			type : option.type || 'GET',
			url : option.url,
			data : option.para,
			//dataType : 'json',
			success : function(data) {
				if (option.success) {
					option.success(data);
				}
			},
			error : function(xhr, type) {
				var obj = $.parseJSON(xhr.responseText);
				if(403==xhr.status){
			    	alert(obj.msg);
					location.href = HttpUtil.baseUrl+'/login.html';
				} else{
					if (option.error) {
						option.error(obj);
					}else if(obj.code){
						alert(obj.msg);
					}else{
						alert(obj.msg);
					}
				}
			}
		});
	},
	ajaxJsonp : function(url, para, callback) {
		$.ajax({
			type : "get",
			async : true,
			url : url,
			data : para,
			dataType : "jsonp",//数据类型为jsonp  
			jsonp : "jsonp",//服务端用于接收callback调用的function名的参数  
			success : function(result) {
				callback(result);
			}
		});
	},
	/**
	 * 加载js文件
	 * @param url
	 */
	loadJs : function(url) {
		document.write("<script type='text/javascript' src='" + url
				+ "'><\/script>");
		document.close();
	},
	loadCss : function(url){
		var link = document.createElement('link');
	    link.type = 'text/css';
	    link.rel = 'stylesheet';
	    link.href = url;
	    document.getElementsByTagName("head")[0].appendChild(link);
	},
	baseUrl : "http://" + window.location.host
};
//动态打开连接
function openwin(url) {
	var a = document.createElement("a");
	a.setAttribute("href", url);
	a.setAttribute("target", "_blank");
	a.setAttribute("id", "openwin");
	document.body.appendChild(a);
	a.click();
}
/**
 * 获取根域名
 * @returns
 */
function getRootDomain() {
	var domain = '';
	var tmp = location.hostname.split('.');
	if (tmp.length > 2)
		domain = tmp.slice(tmp.length - 2).join('.');
	else
		domain = tmp.join('.');
	return domain;
}


