var __isLocal = false;
var localConfig = {
    apiPath: "",
    staticPath: "http://127.0.0.1/static/",
    webUrl: "/",
    mobileUrl: "/",
    agentUrl: "/"
};
var onlineConfig = function() {
    return {
        apiPath: "",
        staticPath: "/static/",
        webUrl: "http://www." + getRootDomain(),
        gameUrl: "http://game." + getRootDomain(),
        mobileUrl: "http://m." + getRootDomain(),
        agentLoginUrl: "http://dl." + getRootDomain()
    }
};
function getDomainConfig(a) {
    if (typeof(a) == "boolean") {
        __isLocal = a
    }
    if (__isLocal) {
        return localConfig
    } else {
        return onlineConfig()
    }
}
function getRootDomain() {
    var b = "";
    var a = location.hostname.split(".");
    if (a.length > 2) {
        b = a.slice(a.length - 2).join(".")
    } else {
        b = a.join(".")
    }
    return b
}
console.log(getRootDomain());
var domainConfig = getDomainConfig(__isLocal);
function guestLogin() {
    /*if (!domainConfig.gameUrl) {
        alert("无法登录游客系统，请联系管理员");
        return
    }*/
    $.ajax({
        type: "POST",
        url: domainConfig.gameUrl + "/api/guestLogin.do",
        data: {
            username: "!guest!",
            password: "!guest!"
        },
        dataType: "text",
        success: function(a) {
            if (a=='ok') {
                window.location.href = domainConfig.gameUrl + "/"
            } else {
                alert(a || "登录失败");
				return false;
            }
        },
        error: function(a) {
            alert("登录失败");
			return false;
        }
    })
}
