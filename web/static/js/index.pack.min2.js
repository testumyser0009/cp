$(document).ajaxError(function(e, c, a, b) {
	if(!$.cookie("token")){
		alert("您已经退出登录，请重新登录");
		window.location.href = "/user/login";
	}else if (403 == c.status) {
        var f = jQuery.parseJSON(c.responseText);
        alert(f.msg || "登录超时");
        window.location.href = "/user/login"
    } else {
        if (c.status != 200 && c.status != 504) {
            var f = jQuery.parseJSON(c.responseText);
            if (f.code == 1004) {
                layer.alert(f.msg, {
                    icon: 2
                })
            } else {
                if (f.code == 1010 || f.errorCode == 1010 || f.errorCode == 403) {
                    alert(f.msg);
                    parent.location.href = "/user/login"
                } else {
                    layer.alert(f.msg || "操作异常", {
                        icon: 2
                    })
                }
            }
        }
    }
});
function myBrowser() {
    var l = navigator.userAgent;
    var b = l.indexOf("Opera") > -1;
    var e = l.indexOf("compatible") > -1 && l.indexOf("MSIE") > -1 && !b;
    var c = l.indexOf("Firefox") > -1;
    var j = l.indexOf("Safari") > -1;
    var a = l.indexOf("Chrome") > -1;
    if (e) {
        var g = IE55 = IE6 = IE7 = IE8 = false;
        var k = new RegExp("MSIE (\\d+\\.\\d+);");
        k.test(l);
        var f = parseFloat(RegExp["$1"]);
        IE55 = f == 5.5;
        IE6 = f == 6;
        IE7 = f == 7;
        IE8 = f == 8;
        if (IE55) {
            return "IE55"
        }
        if (IE6) {
            return "IE6"
        }
        if (IE7) {
            return "IE7"
        }
        if (IE8) {
            return "IE8"
        }
    }
    if (c) {
        return "FF"
    }
    if (b) {
        return "Opera"
    }
    if (a) {
        return "Chrome"
    }
}
var browser = myBrowser();
if (browser == "IE55" || browser == "IE6" || browser == "IE7" || browser == "IE8") {
    window.location.href = "/browser.html";
    /*! LAB.js (LABjs :: Loading And Blocking JavaScript)
    v2.0.3 (c) Kyle Simpson
    MIT License
*/
} (function(aa) {
    var g = aa.$LAB,
    l = "UseLocalXHR",
    j = "AlwaysPreserveOrder",
    Q = "AllowDuplicates",
    Z = "CacheBust",
    X = "BasePath",
    V = /^[^?#]*\//.exec(location.href)[0],
    U = /^\w+\:\/\/\/?[^\/]+/.exec(V)[0],
    ab = document.head || document.getElementsByTagName("head"),
    f = (aa.opera && Object.prototype.toString.call(aa.opera) == "[object Opera]") || ("MozAppearance" in document.documentElement.style),
    Y = document.createElement("script"),
    S = typeof Y.preload == "boolean",
    W = S || (Y.readyState && Y.readyState == "uninitialized"),
    x = !W && Y.async === true,
    e = !W && !x && !f;
    function v(o) {
        return Object.prototype.toString.call(o) == "[object Function]"
    }
    function p(o) {
        return Object.prototype.toString.call(o) == "[object Array]"
    }
    function c(q, r) {
        var o = /^\w+\:\/\//;
        if (/^\/\/\/?/.test(q)) {
            q = location.protocol + q
        } else {
            if (!o.test(q) && q.charAt(0) != "/") {
                q = (r || "") + q
            }
        }
        return o.test(q) ? q: ((q.charAt(0) == "/" ? U: V) + q)
    }
    function T(q, r) {
        for (var o in q) {
            if (q.hasOwnProperty(o)) {
                r[o] = q[o]
            }
        }
        return r
    }
    function b(q) {
        var r = false;
        for (var o = 0; o < q.scripts.length; o++) {
            if (q.scripts[o].ready && q.scripts[o].exec_trigger) {
                r = true;
                q.scripts[o].exec_trigger();
                q.scripts[o].exec_trigger = null
            }
        }
        return r
    }
    function R(q, t, o, r) {
        q.onload = q.onreadystatechange = function() {
            if ((q.readyState && q.readyState != "complete" && q.readyState != "loaded") || t[o]) {
                return
            }
            q.onload = q.onreadystatechange = null;
            r()
        }
    }
    function n(o) {
        o.ready = o.finished = true;
        for (var q = 0; q < o.finished_listeners.length; q++) {
            o.finished_listeners[q]()
        }
        o.ready_listeners = [];
        o.finished_listeners = []
    }
    function a(u, r, t, q, o) {
        setTimeout(function() {
            var A, B = r.real_src,
            z;
            if ("item" in ab) {
                if (!ab[0]) {
                    setTimeout(arguments.callee, 25);
                    return
                }
                ab = ab[0]
            }
            A = document.createElement("script");
            if (r.type) {
                A.type = r.type
            }
            if (r.charset) {
                A.charset = r.charset
            }
            if (o) {
                if (W) {
                    t.elem = A;
                    if (S) {
                        A.preload = true;
                        A.onpreload = q
                    } else {
                        A.onreadystatechange = function() {
                            if (A.readyState == "loaded") {
                                q()
                            }
                        }
                    }
                    A.src = B
                } else {
                    if (o && B.indexOf(U) == 0 && u[l]) {
                        z = new XMLHttpRequest();
                        z.onreadystatechange = function() {
                            if (z.readyState == 4) {
                                z.onreadystatechange = function() {};
                                t.text = z.responseText + "\n//@ sourceURL=" + B;
                                q()
                            }
                        };
                        z.open("GET", B);
                        z.send()
                    } else {
                        A.type = "text/cache-script";
                        R(A, t, "ready",
                        function() {
                            ab.removeChild(A);
                            q()
                        });
                        A.src = B;
                        ab.insertBefore(A, ab.firstChild)
                    }
                }
            } else {
                if (x) {
                    A.async = false;
                    R(A, t, "finished", q);
                    A.src = B;
                    ab.insertBefore(A, ab.firstChild)
                } else {
                    R(A, t, "finished", q);
                    A.src = B;
                    ab.insertBefore(A, ab.firstChild)
                }
            }
        },
        0)
    }
    function k() {
        var q = {},
        z = W || e,
        B = [],
        A = {},
        o;
        q[l] = true;
        q[j] = false;
        q[Q] = false;
        q[Z] = false;
        q[X] = "";
        function u(D, G, C) {
            var F;
            function E() {
                if (F != null) {
                    F = null;
                    n(C)
                }
            }
            if (A[G.src].finished) {
                return
            }
            if (!D[Q]) {
                A[G.src].finished = true
            }
            F = C.elem || document.createElement("script");
            if (G.type) {
                F.type = G.type
            }
            if (G.charset) {
                F.charset = G.charset
            }
            R(F, C, "finished", E);
            if (C.elem) {
                C.elem = null
            } else {
                if (C.text) {
                    F.onload = F.onreadystatechange = null;
                    F.text = C.text
                } else {
                    F.src = G.real_src
                }
            }
            ab.insertBefore(F, ab.firstChild);
            if (C.text) {
                E()
            }
        }
        function t(J, C, I, G) {
            var H, F, E = function() {
                C.ready_cb(C,
                function() {
                    u(J, C, H)
                })
            },
            D = function() {
                C.finished_cb(C, I)
            };
            C.src = c(C.src, J[X]);
            C.real_src = C.src + (J[Z] ? ((/\?.*$/.test(C.src) ? "&_": "?_") + ~~ (Math.random() * 1000000000) + "=") : "");
            if (!A[C.src]) {
                A[C.src] = {
                    items: [],
                    finished: false
                }
            }
            F = A[C.src].items;
            if (J[Q] || F.length == 0) {
                H = F[F.length] = {
                    ready: false,
                    finished: false,
                    ready_listeners: [E],
                    finished_listeners: [D]
                };
                a(J, C, H, ((G) ?
                function() {
                    H.ready = true;
                    for (var K = 0; K < H.ready_listeners.length; K++) {
                        H.ready_listeners[K]()
                    }
                    H.ready_listeners = []
                }: function() {
                    n(H)
                }), G)
            } else {
                H = F[0];
                if (H.finished) {
                    D()
                } else {
                    H.finished_listeners.push(D)
                }
            }
        }
        function r() {
            var J, I = T(q, {}),
            H = [],
            G = 0,
            L = false,
            F;
            function E(M, N) {
                M.ready = true;
                M.exec_trigger = N;
                K()
            }
            function D(N, O) {
                N.ready = N.finished = true;
                N.exec_trigger = null;
                for (var M = 0; M < O.scripts.length; M++) {
                    if (!O.scripts[M].finished) {
                        return
                    }
                }
                O.finished = true;
                K()
            }
            function K() {
                while (G < H.length) {
                    if (v(H[G])) {
                        try {
                            H[G++]()
                        } catch(M) {}
                        continue
                    } else {
                        if (!H[G].finished) {
                            if (b(H[G])) {
                                continue
                            }
                            break
                        }
                    }
                    G++
                }
                if (G == H.length) {
                    L = false;
                    F = false
                }
            }
            function C() {
                if (!F || !F.scripts) {
                    H.push(F = {
                        scripts: [],
                        finished: true
                    })
                }
            }
            J = {
                script: function() {
                    for (var M = 0; M < arguments.length; M++) { (function(O, ac) {
                            var N;
                            if (!p(O)) {
                                ac = [O]
                            }
                            for (var P = 0; P < ac.length; P++) {
                                C();
                                O = ac[P];
                                if (v(O)) {
                                    O = O()
                                }
                                if (!O) {
                                    continue
                                }
                                if (p(O)) {
                                    N = [].slice.call(O);
                                    N.unshift(P, 1); [].splice.apply(ac, N);
                                    P--;
                                    continue
                                }
                                if (typeof O == "string") {
                                    O = {
                                        src: O
                                    }
                                }
                                O = T(O, {
                                    ready: false,
                                    ready_cb: E,
                                    finished: false,
                                    finished_cb: D
                                });
                                F.finished = false;
                                F.scripts.push(O);
                                t(I, O, F, (z && L));
                                L = true;
                                if (I[j]) {
                                    J.wait()
                                }
                            }
                        })(arguments[M], arguments[M])
                    }
                    return J
                },
                wait: function() {
                    if (arguments.length > 0) {
                        for (var M = 0; M < arguments.length; M++) {
                            H.push(arguments[M])
                        }
                        F = H[H.length - 1]
                    } else {
                        F = false
                    }
                    K();
                    return J
                }
            };
            return {
                script: J.script,
                wait: J.wait,
                setOptions: function(M) {
                    T(M, I);
                    return J
                }
            }
        }
        o = {
            setGlobalDefaults: function(C) {
                T(C, q);
                return o
            },
            setOptions: function() {
                return r().setOptions.apply(null, arguments)
            },
            script: function() {
                return r().script.apply(null, arguments)
            },
            wait: function() {
                return r().wait.apply(null, arguments)
            },
            queueScript: function() {
                B[B.length] = {
                    type: "script",
                    args: [].slice.call(arguments)
                };
                return o
            },
            queueWait: function() {
                B[B.length] = {
                    type: "wait",
                    args: [].slice.call(arguments)
                };
                return o
            },
            runQueue: function() {
                var D = o,
                F = B.length,
                C = F,
                E;
                for (; --C >= 0;) {
                    E = B.shift();
                    D = D[E.type].apply(null, E.args)
                }
                return D
            },
            noConflict: function() {
                aa.$LAB = g;
                return o
            },
            sandbox: function() {
                return k()
            }
        };
        return o
    }
    aa.$LAB = k(); (function(q, r, o) {
        if (document.readyState == null && document[q]) {
            document.readyState = "loading";
            document[q](r, o = function() {
                document.removeEventListener(r, o, false);
                document.readyState = "complete"
            },
            false)
        }
    })("addEventListener", "DOMContentLoaded")
})(this);
/*!
 * jQuery Cookie Plugin v1.4.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2013 Klaus Hartl
 * Released under the MIT license
 */
(function(a) {
    if (typeof define === "function" && define.amd) {
        define(["jquery"], a)
    } else {
        if (typeof exports === "object") {
            a(require("jquery"))
        } else {
            a(jQuery)
        }
    }
} (function(g) {
    var a = /\+/g;
    function e(l) {
        return b.raw ? l: encodeURIComponent(l)
    }
    function j(l) {
        return b.raw ? l: decodeURIComponent(l)
    }
    function k(l) {
        return e(b.json ? JSON.stringify(l) : String(l))
    }
    function c(l) {
        if (l.indexOf('"') === 0) {
            l = l.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, "\\")
        }
        try {
            l = decodeURIComponent(l.replace(a, " "));
            return b.json ? JSON.parse(l) : l
        } catch(n) {}
    }
    function f(n, l) {
        var o = b.raw ? n: c(n);
        return g.isFunction(l) ? l(o) : o
    }
    var b = g.cookie = function(v, u, B) {
        if (u !== undefined && !g.isFunction(u)) {
            B = g.extend({},
            b.defaults, B);
            if (typeof B.expires === "number") {
                var x = B.expires,
                A = B.expires = new Date();
                A.setTime( + A + x * 86400000)
            }
            return (document.cookie = [e(v), "=", k(u), B.expires ? "; expires=" + B.expires.toUTCString() : "", B.path ? "; path=" + B.path: "", B.domain ? "; domain=" + B.domain: "", B.secure ? "; secure": ""].join(""))
        }
        var C = v ? undefined: {};
        var z = document.cookie ? document.cookie.split("; ") : [];
        for (var r = 0,
        p = z.length; r < p; r++) {
            var q = z[r].split("=");
            var n = j(q.shift());
            var o = q.join("=");
            if (v && v === n) {
                C = f(o, u);
                break
            }
            if (!v && (o = f(o)) !== undefined) {
                C[n] = o
            }
        }
        return C
    };
    b.defaults = {};
    g.removeCookie = function(n, l) {
        if (g.cookie(n) === undefined) {
            return false
        }
        g.cookie(n, "", g.extend({},
        l, {
            expires: -1
        }));
        return ! g.cookie(n)
    }
}));
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
        /* webUrl: "http://www." + getRootDomain(), */
		webUrl: "http://" + getRootDomain(),
        mobileUrl: "http://m." + getRootDomain(),
        agentUrl: "http://dl." + getRootDomain()
    }
};
//console.log(getRootDomain());
function getDomainConfig(a) {
    a = a;
    if (a) {
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
function isDevelop() {
    var a = document.domain;
    if (a == "127.0.0.1") {
        return true
    }
    return false
}
function getStaticDomain() {
    if (isDevelop()) {
        return "http://127.0.0.1/static/"
    } else {
        return "/static/"
    }
}
function getTrialWebDomain() {
    if (isDevelop()) {
        return "http://127.0.0.1"
    } else {
        return "http://" + getRootDomain() + ""
    }
}
function getWebDomain() {
    if (isDevelop()) {
        return "http://127.0.0.1"
    } else {
        return "http://" + getRootDomain() + ""
    }
}
function getMainDomain() {
    if (isDevelop()) {
        return "http://127.0.0.1"
    } else {
        return "http://" + getRootDomain() + ""
    }
}
function getDlAdminDomain() {
    var a = "http://dl." + getRootDomain() + "";
    return a
}
function getMobileDomain() {
    var a = "http://m." + getRootDomain() + "";
    return a
}
function agentLoginUrl() {
    window.open(getDlAdminDomain())
}
function SetHome(c, a) {
    try {
        c.style.behavior = "url(#default#homepage)";
        c.setHomePage(a)
    } catch(b) {
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【" + a + "】设置为首页。")
    }
}
function goMobile() {
    var b = location.search;
    var a = new Object();
    if (b.indexOf("?") != -1) {
        var j = b.substr(1);
        strs = j.split("&");
        for (var c = 0; c < strs.length; c++) {
            var f = strs[c].split("=");
            a[f[0]] = unescape(f[1])
        }
    }
    if (a.from != null && a.from == "m") {
        return
    }
    if (window.location.toString().indexOf("pref=padindex") != -1) {} else {
        if (/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))) {
            if (window.location.href.indexOf("?mobile") < 0) {
                try {
                    if (/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
                        window.location.href = getMobileDomain()
                    } else {
                        if (/iPad/i.test(navigator.userAgent)) {
                            window.location.href = getMobileDomain()
                        } else {
                            window.location.href = getMobileDomain()
                        }
                    }
                } catch(g) {}
            }
        }
    }
}
function renderMoney(a) {
    return (a == null ? 0 : (parseInt(a)==a ?a:a.toFixed(1)))
}
function renderRebate(a) {
    return (a == null ? 0 : (a * 100)) + "%"
}
function isSameNum(c) {
    var b = c[0];
    for (var a = 1; a < c.length; a++) {
        if (b != c[a]) {
            return false
        }
    }
    return true
}
function isPair(f) {
    for (var c = 0; c < f.length; c++) {
        var e = f[c];
        for (var b = c + 1; b < f.length; b++) {
            var a = f[b];
            if (e == a) {
                return true
            }
        }
    }
    return false
}
function isStraight(e) {
    e.sort();
    if (e[0] == 0 && e[1] == 1 && e[2] == 9) {
        return true
    }
    if (e[0] == 0 && e[1] == 8 && e[2] == 9) {
        return true
    }
    for (var a = 0; a < e.length - 1; a++) {
        var c = e[a];
        var b = e[a + 1];
        if (b - c != 1) {
            return false
        }
    }
    return true
}
function isHalfStraight(e) {
    e.sort();
    var f = 0;
    if (e[0] == 0) {
        f += 1
    }
    if (e[1] == 1) {
        f += 1
    }
    if (e[2] == 9) {
        f += 1
    }
    if (f == 2) {
        return true
    }
    for (var a = 0; a < e.length - 1; a++) {
        var c = e[a];
        var b = e[a + 1];
        if (b - c == 1) {
            return true
        }
    }
    return false
}
function ArrayContains(c, a) {
    for (var b in c) {
        if (c[b] == a) {
            return true
        }
    }
    return false
}
function ShowNewPageInit() {
    $("#right_page").hide();
    $("#game_count").hide();
    $("#lotteryPage").css("padding-right", "20px");
    clearInterval(refreshTimeUi);
    clearInterval(requestCurOpenNumTime)
}
function getGameById(b) {
    var e;
    for (var c in games) {
        var a = games[c];
        if (a.id == b) {
            e = a;
            break
        }
    }
    return e
}
function getPlayCateById(f, g) {
    var b = playCates[f];
    var a;
    for (var c in b) {
        var e = b[c];
        if (e.id == g) {
            a = e;
            break
        }
    }
    return a
}
function getPlayCate(b) {
    var a = playCates[b];
    return a
}
function getPlay(e) {
    if (!e) {
        return ""
    }
    var c = plays[e];
    var a = playConfigs[user.userId + "_" + e];
    if (a) {
        if (a.odds) {
            c.odds = a.odds
        }
        if (a.rebate != null) {
            c.rebate = a.rebate
        }
    }
    var b = playQuotaConfigs[user.userId + "_" + e];
    if (b) {
        c.minMoney = b.minMoney;
        c.maxMoney = b.maxMoney;
        c.maxTurnMoney = b.maxTurnMoney
    }
    return c
}
function changePageSkin() {
    // var a = $.cookie("_skin_");
    var a = window.localStorage.getItem('skin');
    console.log(a);

    if (!a) {
        a = webAppConfig.defaultSkin || "blue";
        $.cookie("_skin_", a, {
            path: "/"
        })
        window.localStorage.setItem('skin',a);
    }
    $("body").removeClass("skin_red skin_blue skin_nblue");
    $("body").addClass("skin_" + a);
    $("#domain_logo_url").attr("src", webAppConfig.logoUrl)
} (function(e) {
    var c = function(f) {
        return f.split("").reverse().join("")
    },
    a = {
        numberStep: function(f, g) {
            var j = Math.floor(f);
            e(g.elem).text(j)
        }
    },
    b = function(f) {
        var g = f.elem;
        g.nodeType && g.parentNode && (g = g._animateNumberSetter, g || (g = a.numberStep), g(f.now, f))
    };
    e.Tween && e.Tween.propHooks ? e.Tween.propHooks.number = {
        set: b
    }: e.fx.step.number = b;
    e.animateNumber = {
        numberStepFactories: {
            append: function(f) {
                return function(j, l) {
                    var k = Math.floor(j);
                    e(l.elem).prop("number", j).text(k + f)
                }
            },
            separator: function(f, g, j) {
                f = f || " ";
                g = g || 3;
                j = j || "";
                return function(B, z) {
                    var D = Math.floor(B).toString(),
                    E = e(z.elem);
                    if (D.length > g) {
                        for (var C = D,
                        x = g,
                        v = C.split("").reverse(), D = [], u, o, q, F = 0, A = Math.ceil(C.length / x); F < A; F++) {
                            u = "";
                            for (q = 0; q < x; q++) {
                                o = F * x + q;
                                if (o === C.length) {
                                    break
                                }
                                u += v[o]
                            }
                            D.push(u)
                        }
                        C = D.length - 1;
                        x = c(D[C]);
                        D[C] = c(parseInt(x, 10).toString());
                        D = D.join(f);
                        D = c(D)
                    }
                    E.prop("number", B).text(D + j)
                }
            }
        }
    };
    e.fn.animateNumber = function() {
        for (var j = arguments[0], l = e.extend({},
        a, j), r = e(this), p = [l], n = 1, t = arguments.length; n < t; n++) {
            p.push(arguments[n])
        }
        if (j.numberStep) {
            var o = this.each(function() {
                this._animateNumberSetter = j.numberStep
            }),
            q = l.complete;
            l.complete = function() {
                o.each(function() {
                    delete this._animateNumberSetter
                });
                q && q.apply(this, arguments)
            }
        }
        return r.animate.apply(r, p)
    }
})(jQuery); (function(a) {
    a.fn.scrollbox = function(b) {
        var c = {
            linear: false,
            startDelay: 2,
            delay: 3,
            step: 5,
            speed: 32,
            switchItems: 1,
            direction: "vertical",
            distance: "auto",
            autoPlay: true,
            onMouseOverPause: true,
            paused: false,
            queue: null
        };
        b = a.extend(c, b);
        b.scrollOffset = b.direction === "vertical" ? "scrollTop": "scrollLeft";
        if (b.queue) {
            b.queue = a("#" + b.queue)
        }
        return this.each(function() {
            var e = a(this),
            j,
            k = null,
            f = null,
            p = false,
            q,
            l,
            g,
            o,
            n;
            if (b.onMouseOverPause) {
                e.bind("mouseover",
                function() {
                    p = true
                });
                e.bind("mouseout",
                function() {
                    p = false
                })
            }
            j = e.children("ul:first-child");
            o = function() {
                if (p) {
                    return
                }
                var v, t, u, r, x;
                v = j.children("li:first-child");
                r = b.distance !== "auto" ? b.distance: b.direction === "vertical" ? v.height() : v.width();
                if (!b.linear) {
                    x = Math.max(3, parseInt((r - e[0][b.scrollOffset]) * 0.3, 10));
                    u = Math.min(e[0][b.scrollOffset] + x, r)
                } else {
                    u = Math.min(e[0][b.scrollOffset] + b.step, r)
                }
                e[0][b.scrollOffset] = u;
                if (u >= r) {
                    for (t = 0; t < b.switchItems; t++) {
                        if (b.queue && b.queue.hasChildNodes() && b.queue.getElementsByTagName("li").length > 0) {
                            j.append(b.queue.getElementsByTagName("li")[0]);
                            j.remove(j.children("li:first-child"))
                        } else {
                            j.append(j.children("li:first-child"))
                        }
                    }
                    e[0][b.scrollOffset] = 0;
                    clearInterval(k);
                    if (b.autoPlay) {
                        f = setTimeout(l, b.delay * 1000)
                    }
                }
            };
            n = function() {
                if (p) {
                    return
                }
                var v, t, z, u, r, x;
                if (e[0][b.scrollOffset] === 0) {
                    z = j.children("li").length;
                    for (t = 0; t < b.switchItems; t++) {
                        j.children("li:last-child").insertBefore(j.children("li:first-child"))
                    }
                    v = e.children("li:first-child");
                    r = b.distance !== "auto" ? b.distance: b.direction === "vertical" ? v.height() : v.width();
                    e[0][b.scrollOffset] = r
                }
                if (!b.linear) {
                    x = Math.max(3, parseInt(e[0][b.scrollOffset] * 0.3, 10));
                    u = Math.max(e[0][b.scrollOffset] - x, 0)
                } else {
                    u = Math.max(e[0][b.scrollOffset] - b.step, 0)
                }
                e[0][b.scrollOffset] = u;
                if (u === 0) {
                    clearInterval(k);
                    if (b.autoPlay) {
                        f = setTimeout(l, b.delay * 1000)
                    }
                }
            };
            l = function() {
                clearInterval(k);
                k = setInterval(o, b.speed)
            };
            q = function() {
                clearInterval(k);
                k = setInterval(n, b.speed)
            };
            g = function(r) {
                b.delay = r || b.delay;
                clearTimeout(f);
                if (b.autoPlay) {
                    f = setTimeout(l, b.delay * 1000)
                }
            };
            if (b.autoPlay) {
                f = setTimeout(l, b.startDelay * 1000)
            }
            e.bind("resetClock",
            function(r) {
                g(r)
            });
            e.bind("forward",
            function() {
                clearTimeout(f);
                l()
            });
            e.bind("backward",
            function() {
                clearTimeout(f);
                q()
            });
            e.bind("speedUp",
            function(r) {
                if (typeof r === "undefined") {
                    r = Math.max(1, parseInt(b.speed / 2, 10))
                }
                b.speed = r
            });
            e.bind("speedDown",
            function(r) {
                if (typeof r === "undefined") {
                    r = b.speed * 2
                }
                b.speed = r
            })
        })
    }
} (jQuery));
var hexcase = 0;
var b64pad = "";
var chrsz = 8;
function hex_md5(a) {
    return binl2hex(core_md5(str2binl(a), a.length * chrsz))
}
function b64_md5(a) {
    return binl2b64(core_md5(str2binl(a), a.length * chrsz))
}
function str_md5(a) {
    return binl2str(core_md5(str2binl(a), a.length * chrsz))
}
function hex_hmac_md5(a, b) {
    return binl2hex(core_hmac_md5(a, b))
}
function b64_hmac_md5(a, b) {
    return binl2b64(core_hmac_md5(a, b))
}
function str_hmac_md5(a, b) {
    return binl2str(core_hmac_md5(a, b))
}
function md5_vm_test() {
    return hex_md5("abc") == "900150983cd24fb0d6963f7d28e17f72"
}
function core_md5(r, l) {
    r[l >> 5] |= 128 << ((l) % 32);
    r[(((l + 64) >>> 9) << 4) + 14] = l;
    var q = 1732584193;
    var p = -271733879;
    var o = -1732584194;
    var n = 271733878;
    for (var g = 0; g < r.length; g += 16) {
        var k = q;
        var j = p;
        var f = o;
        var e = n;
        q = md5_ff(q, p, o, n, r[g + 0], 7, -680876936);
        n = md5_ff(n, q, p, o, r[g + 1], 12, -389564586);
        o = md5_ff(o, n, q, p, r[g + 2], 17, 606105819);
        p = md5_ff(p, o, n, q, r[g + 3], 22, -1044525330);
        q = md5_ff(q, p, o, n, r[g + 4], 7, -176418897);
        n = md5_ff(n, q, p, o, r[g + 5], 12, 1200080426);
        o = md5_ff(o, n, q, p, r[g + 6], 17, -1473231341);
        p = md5_ff(p, o, n, q, r[g + 7], 22, -45705983);
        q = md5_ff(q, p, o, n, r[g + 8], 7, 1770035416);
        n = md5_ff(n, q, p, o, r[g + 9], 12, -1958414417);
        o = md5_ff(o, n, q, p, r[g + 10], 17, -42063);
        p = md5_ff(p, o, n, q, r[g + 11], 22, -1990404162);
        q = md5_ff(q, p, o, n, r[g + 12], 7, 1804603682);
        n = md5_ff(n, q, p, o, r[g + 13], 12, -40341101);
        o = md5_ff(o, n, q, p, r[g + 14], 17, -1502002290);
        p = md5_ff(p, o, n, q, r[g + 15], 22, 1236535329);
        q = md5_gg(q, p, o, n, r[g + 1], 5, -165796510);
        n = md5_gg(n, q, p, o, r[g + 6], 9, -1069501632);
        o = md5_gg(o, n, q, p, r[g + 11], 14, 643717713);
        p = md5_gg(p, o, n, q, r[g + 0], 20, -373897302);
        q = md5_gg(q, p, o, n, r[g + 5], 5, -701558691);
        n = md5_gg(n, q, p, o, r[g + 10], 9, 38016083);
        o = md5_gg(o, n, q, p, r[g + 15], 14, -660478335);
        p = md5_gg(p, o, n, q, r[g + 4], 20, -405537848);
        q = md5_gg(q, p, o, n, r[g + 9], 5, 568446438);
        n = md5_gg(n, q, p, o, r[g + 14], 9, -1019803690);
        o = md5_gg(o, n, q, p, r[g + 3], 14, -187363961);
        p = md5_gg(p, o, n, q, r[g + 8], 20, 1163531501);
        q = md5_gg(q, p, o, n, r[g + 13], 5, -1444681467);
        n = md5_gg(n, q, p, o, r[g + 2], 9, -51403784);
        o = md5_gg(o, n, q, p, r[g + 7], 14, 1735328473);
        p = md5_gg(p, o, n, q, r[g + 12], 20, -1926607734);
        q = md5_hh(q, p, o, n, r[g + 5], 4, -378558);
        n = md5_hh(n, q, p, o, r[g + 8], 11, -2022574463);
        o = md5_hh(o, n, q, p, r[g + 11], 16, 1839030562);
        p = md5_hh(p, o, n, q, r[g + 14], 23, -35309556);
        q = md5_hh(q, p, o, n, r[g + 1], 4, -1530992060);
        n = md5_hh(n, q, p, o, r[g + 4], 11, 1272893353);
        o = md5_hh(o, n, q, p, r[g + 7], 16, -155497632);
        p = md5_hh(p, o, n, q, r[g + 10], 23, -1094730640);
        q = md5_hh(q, p, o, n, r[g + 13], 4, 681279174);
        n = md5_hh(n, q, p, o, r[g + 0], 11, -358537222);
        o = md5_hh(o, n, q, p, r[g + 3], 16, -722521979);
        p = md5_hh(p, o, n, q, r[g + 6], 23, 76029189);
        q = md5_hh(q, p, o, n, r[g + 9], 4, -640364487);
        n = md5_hh(n, q, p, o, r[g + 12], 11, -421815835);
        o = md5_hh(o, n, q, p, r[g + 15], 16, 530742520);
        p = md5_hh(p, o, n, q, r[g + 2], 23, -995338651);
        q = md5_ii(q, p, o, n, r[g + 0], 6, -198630844);
        n = md5_ii(n, q, p, o, r[g + 7], 10, 1126891415);
        o = md5_ii(o, n, q, p, r[g + 14], 15, -1416354905);
        p = md5_ii(p, o, n, q, r[g + 5], 21, -57434055);
        q = md5_ii(q, p, o, n, r[g + 12], 6, 1700485571);
        n = md5_ii(n, q, p, o, r[g + 3], 10, -1894986606);
        o = md5_ii(o, n, q, p, r[g + 10], 15, -1051523);
        p = md5_ii(p, o, n, q, r[g + 1], 21, -2054922799);
        q = md5_ii(q, p, o, n, r[g + 8], 6, 1873313359);
        n = md5_ii(n, q, p, o, r[g + 15], 10, -30611744);
        o = md5_ii(o, n, q, p, r[g + 6], 15, -1560198380);
        p = md5_ii(p, o, n, q, r[g + 13], 21, 1309151649);
        q = md5_ii(q, p, o, n, r[g + 4], 6, -145523070);
        n = md5_ii(n, q, p, o, r[g + 11], 10, -1120210379);
        o = md5_ii(o, n, q, p, r[g + 2], 15, 718787259);
        p = md5_ii(p, o, n, q, r[g + 9], 21, -343485551);
        q = safe_add(q, k);
        p = safe_add(p, j);
        o = safe_add(o, f);
        n = safe_add(n, e)
    }
    return Array(q, p, o, n)
}
function md5_cmn(k, f, e, c, j, g) {
    return safe_add(bit_rol(safe_add(safe_add(f, k), safe_add(c, g)), j), e)
}
function md5_ff(g, f, n, l, e, k, j) {
    return md5_cmn((f & n) | ((~f) & l), g, f, e, k, j)
}
function md5_gg(g, f, n, l, e, k, j) {
    return md5_cmn((f & l) | (n & (~l)), g, f, e, k, j)
}
function md5_hh(g, f, n, l, e, k, j) {
    return md5_cmn(f ^ n ^ l, g, f, e, k, j)
}
function md5_ii(g, f, n, l, e, k, j) {
    return md5_cmn(n ^ (f | (~l)), g, f, e, k, j)
}
function core_hmac_md5(c, g) {
    var f = str2binl(c);
    if (f.length > 16) {
        f = core_md5(f, c.length * chrsz)
    }
    var a = Array(16),
    e = Array(16);
    for (var b = 0; b < 16; b++) {
        a[b] = f[b] ^ 909522486;
        e[b] = f[b] ^ 1549556828
    }
    var j = core_md5(a.concat(str2binl(g)), 512 + g.length * chrsz);
    return core_md5(e.concat(j), 512 + 128)
}
function safe_add(a, e) {
    var c = (a & 65535) + (e & 65535);
    var b = (a >> 16) + (e >> 16) + (c >> 16);
    return (b << 16) | (c & 65535)
}
function bit_rol(a, b) {
    return (a << b) | (a >>> (32 - b))
}
function str2binl(e) {
    var c = Array();
    var a = (1 << chrsz) - 1;
    for (var b = 0; b < e.length * chrsz; b += chrsz) {
        c[b >> 5] |= (e.charCodeAt(b / chrsz) & a) << (b % 32)
    }
    return c
}
function binl2str(c) {
    var e = "";
    var a = (1 << chrsz) - 1;
    for (var b = 0; b < c.length * 32; b += chrsz) {
        e += String.fromCharCode((c[b >> 5] >>> (b % 32)) & a)
    }
    return e
}
function binl2hex(c) {
    var b = hexcase ? "0123456789ABCDEF": "0123456789abcdef";
    var e = "";
    for (var a = 0; a < c.length * 4; a++) {
        e += b.charAt((c[a >> 2] >> ((a % 4) * 8 + 4)) & 15) + b.charAt((c[a >> 2] >> ((a % 4) * 8)) & 15)
    }
    return e
}
function binl2b64(e) {
    var c = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
    var g = "";
    for (var b = 0; b < e.length * 4; b += 3) {
        var f = (((e[b >> 2] >> 8 * (b % 4)) & 255) << 16) | (((e[b + 1 >> 2] >> 8 * ((b + 1) % 4)) & 255) << 8) | ((e[b + 2 >> 2] >> 8 * ((b + 2) % 4)) & 255);
        for (var a = 0; a < 4; a++) {
            if (b * 8 + a * 6 > e.length * 32) {
                g += b64pad
            } else {
                g += c.charAt((f >> 6 * (3 - a)) & 63)
            }
        }
    }
    return g
}
$(function() {
    var u = [["yellow", "\u9ec4\u8272", "#faeb5b"],["nblue", "蓝色", "#00ccff"],["nred", "蓝色", "#f00"]],
    t = $("#skinPanel"),
    q;
    if (t.length) {
        var r = function() {
            clearTimeout(q);
            //t.addClass("skinHover");
           // n.show();
            l.text("\u25b2")
        },
        p = function() {
            clearTimeout(q);
            q = setTimeout(function() {
               // t.removeClass("skinHover");
               // n.hide();
                l.text("\u25bc")
            },
            100)
        },
        n = $("<ul>").attr("style","width: 150px").appendTo(t),
        l = t.find("span");
        t.hover(r, p);
        n.hover(r, p);
        for (r = 0; r < u.length; r++) {
            var o = u[r],
            j = $("<li>").attr("style","float:left;clear:none;padding:0;").appendTo(n);
            //j.append($("<i>").attr("style", "background:" + o[2]));
            $("<a>").attr("style", "margin:28px 5px 0px;width:15px;height:15px;background:" + o[2]).attr("href", "javascript:changeSkin('" + o[0] + "')").click(p)./*text(o[1]).*/appendTo(j)
        }
    }
    o = $.cookie("_skin_");
    o || (o = getDefaultSkin()) || (o = u[1][0]);
    setSkin(o, $("body"))
});
function getDefaultSkin() {
    var e = _getClass();
    if (e) {
        for (var c = 0; c < e.length; c++) {
            if (e[c] && 0 === e[c].indexOf("skin_")) {
                return e[c].substring(5)
            }
        }
    }
}
function _getClass(b) {
    b || (b = $("body"));
    if (b = b.attr("class")) {
        return b.split(" ")
    }
}
function setSkin(g, f) {
    var k = _getClass(f),
    l = "";
    if (k) {
        for (var j = 0; j < k.length; j++) {
            k[j] && 0 !== k[j].indexOf("skin_") && (l += k[j] + " ")
        }
    }
    f.attr("class", l + "skin_" + g)
}
function changeSkin(b) {
	if(b=="nblue"){
		$('#skinPanel ul li:nth-child(2) a').css("background","url(/images/admin/chkboxsprite.png) -0px -16px");
		$('#skinPanel ul li:nth-child(1) a').css("background","#faeb5b");
		$('#skinPanel ul li:nth-child(3) a').css("background","#f00");
	}else if(b=="nred"){
		$('#skinPanel ul li:nth-child(3) a').css("background","url(/images/admin/chkboxsprite.png) -32px -16px");
		$('#skinPanel ul li:nth-child(1) a').css("background","#faeb5b");
		$('#skinPanel ul li:nth-child(2) a').css("background","#00ccff");
	}else{
		$('#skinPanel ul li:nth-child(1) a').css("background","url(/images/admin/chkboxsprite.png) -16px -16px");
		$('#skinPanel ul li:nth-child(2) a').css("background","#00ccff");
		$('#skinPanel ul li:nth-child(3) a').css("background","#f00");
	}
	
    setSkin(b, $("body"));
    $.cookie("_skin_") != b && $.cookie("_skin_", b, {
        path: "/"
    });
    console.log(b);
    window.localStorage.setItem('skin',b);
    console.log(window.localStorage.getItem('skin'));
    $("iframe").each(function() {
        setSkin(b, this.contentWindow.$("body"))
    })
}
var HttpUtil = {
    GetRequest: function() {
        var b = location.href;
        var f = new Array();
        f = b.split("#");
        b = "#" + f[1];
        var a = new Object();
        if (b.indexOf("#") != -1) {
            var e = b.substr(1);
            strs = e.split("&");
            for (var c = 0; c < strs.length; c++) {
                a[strs[c].split("=")[0]] = unescape(strs[c].split("=")[1])
            }
        }
        return a
    },
    GetUrlPara: function() {
        var b = location.search;
        var a = new Object();
        if (b.indexOf("?") != -1) {
            var f = b.substr(1);
            strs = f.split("&");
            for (var c = 0; c < strs.length; c++) {
                var e = strs[c].split("=");
                a[e[0]] = unescape(e[1])
            }
        }
        return a
    },
    ajax: function(a) {
        if (!a) {
            return
        }
        if (!a.url) {
            return
        }
        $.ajax({
            type: a.type || "GET",
            url: a.url,
            data: a.para,
            success: function(b) {
                if (a.success) {
                    a.success(b)
                }
            },
            error: function(e, b) {
                var c = $.parseJSON(e.responseText);
                if (403 == e.status) {
                    alert(c.msg);
                    location.href = HttpUtil.baseUrl + "/user/login"
                } else {
                    if (a.error) {
                        a.error(c)
                    } else {
                        if (c.code) {
                            alert(c.msg)
                        } else {
                            alert(c.msg)
                        }
                    }
                }
            }
        })
    },
    ajaxJsonp: function(b, a, c) {
        $.ajax({
            type: "get",
            async: true,
            url: b,
            data: a,
            dataType: "jsonp",
            jsonp: "jsonp",
            success: function(e) {
                c(e)
            }
        })
    },
    loadJs: function(a) {
        document.write("<script type='text/javascript' src='" + a + "'><\/script>");
        document.close()
    },
    loadCss: function(a) {
        var b = document.createElement("link");
        b.type = "text/css";
        b.rel = "stylesheet";
        b.href = a;
        document.getElementsByTagName("head")[0].appendChild(b)
    },
    baseUrl: "http://" + window.location.host
};
function openwin(c) {
    var b = document.createElement("a");
    b.setAttribute("href", c);
    b.setAttribute("target", "_blank");
    b.setAttribute("id", "openwin");
    document.body.appendChild(b);
    b.click()
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
var isempty = /^\s*$/;
var provisionAccount = /^[a-zA-Z_0-9]+$/;
var pro = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,4})+$/;
var provisionPwd = /^.*\D.*$/;
var re = /^[0-9]+.?[0-9]*$/;
var zzs = /^[0-9]*$/;
var m = /^[0-9]*[1-9][0-9]*$/;
var bankCheck = /^\d{16}|\d{19}$/;
var phoneReg = /^0?1[3|4|5|7|8][0-9]\d{8}$/;
var USER_LOGIN_PAGE = "/user/login";
var USER_WELCOME_PAGE = "/index.html";
function cancelRightMenu(a) {
    if (a.button == 2) {
        if (window.event) {
            a.returnValue = false
        } else {
            a.preventDefault()
        }
    }
}
Date.prototype.format = function(b) {
    var c = {
        "M+": this.getMonth() + 1,
        "d+": this.getDate(),
        "h+": this.getHours(),
        "m+": this.getMinutes(),
        "s+": this.getSeconds(),
        "q+": Math.floor((this.getMonth() + 3) / 3),
        S: this.getMilliseconds()
    };
    if (/(y+)/.test(b)) {
        b = b.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length))
    }
    for (var a in c) {
        if (new RegExp("(" + a + ")").test(b)) {
            b = b.replace(RegExp.$1, RegExp.$1.length == 1 ? c[a] : ("00" + c[a]).substr(("" + c[a]).length))
        }
    }
    return b
};
if (!String.prototype.trim) {
    String.prototype.trim = function() {
        return this.replace(/^s+|s+$/g, "")
    }
}
String.prototype.lTrim = function() {
    return this.replace(/(^\s*)/g, "")
};
String.prototype.rTrim = function() {
    return this.replace(/(\s*$)/g, "")
};
String.prototype.format = function(b) {
    var a = this;
    if (arguments.length > 0) {
        if (arguments.length == 1 && typeof(b) == "object") {
            for (var e in b) {
                if (b[e] != undefined) {
                    var f = new RegExp("({" + e + "})", "g");
                    a = a.replace(f, b[e])
                }
            }
        } else {
            for (var c = 0; c < arguments.length; c++) {
                if (arguments[c] != undefined) {
                    var f = new RegExp("({[" + c + "]})", "g");
                    a = a.replace(f, arguments[c])
                }
            }
        }
    }
    return a
};
function changeImgCode(a) {
    var b = "http://" + window.location.host + "/";
    if ($("#" + a)) {
        $("#" + a).attr("src", b + "api/getValidateCode.do?_=" + Math.random())
    }
}
function copyToClipboard(c, a) {
    var b = new ZeroClipboard($("#" + c), {
        moviePath: "/js/util/ZeroClipboard.swf"
    });
    b.on("complete",
    function(e, f) {
        alert("内容已被复制!")
    });
    b.on("mousedown",
    function(e) {
        b.setText(a)
    })
}
function decimal(b, a) {
    var c = Math.pow(10, a);
    return Math.round(b * c) / c
}
var Win = {
    id: "winPanel",
    open: function(a, b) {
        Win.close();
        $("body").append('<div id="' + Win.id + '"></div>');
        if (!a) {
            a = {}
        }
        a.onLoad = b;
        a.onClose = function() {
            $("#" + Win.id).window("destroy")
        };
        if (!a.collapsible) {
            a.collapsible = false
        }
        if (!a.minimizable) {
            a.minimizable = false
        }
        if (!a.maximizable) {
            a.maximizable = false
        }
        $("#" + Win.id).window(a)
    },
    close: function() {
        $("#" + Win.id).window("close")
    }
};
var Dialog = {
    id: "dialogPanel",
    open: function(a, b) {
        Dialog.close();
        $("body").append('<div id="' + this.id + '"></div>');
        if (!a) {
            a = {}
        }
        a.onLoad = b;
        a.onClose = function() {
            $("#" + this.id).dialog("destroy")
        };
        $("#" + this.id).dialog(a);
        $("#" + this.id).window("open")
    },
    close: function() {
        $("#" + this.id).dialog("close")
    }
};
function loadAsyncScript(c, e) {
    var b = document.getElementsByTagName("head")[0];
    var a = document.createElement("script");
    a.setAttribute("type", "text/javascript");
    a.setAttribute("src", c);
    a.setAttribute("async", true);
    a.setAttribute("defer", true);
    b.appendChild(a);
    if (document.all) {
        a.onreadystatechange = function() {
            var f = this.readyState;
            if (f === "loaded" || f === "complete") {
                e()
            }
        }
    } else {
        a.onload = function() {
            e()
        }
    }
}
function winAlert(a) {
    alert(a)
}
var zIndex = 998;
function showPop(f) {
    var b = $('<div class="mask"></div>');
    b.css("zIndex", zIndex);
    var e = $(f),
    a = e.outerWidth(),
    c = e.outerHeight();
    e.css({
        "margin-left": -a / 2,
        zIndex: zIndex++
    });
    e.show();
    e.before(b);
    b.show()
}
function hidePop(b) {
    var a = $(b);
    a.hide();
    a.prev(".mask").remove();
    $("#" + winId).empty()
}
function hidePop1(b) {
    var a = $(b);
    a.hide();
    a.remove();
    a.prev(".mask").remove()
}
var winId = "windowPanel_";
function loadWindow(b, a, e) {
    var c = $("#" + winId);
    if ($("#" + winId).length > 0) {
        c.empty()
    } else {
        $("body").append('<div id="' + winId + '"></div>')
    }
    c = $("#" + winId);
    c.load(b, a,
    function(g, f, j) {
        if (e) {
            e(g, f, j, a)
        }
    })
}
var Win = {
    winId: "windowPanel_",
    obj: null,
    init: function() {
        Win.obj = $("#" + Win.winId);
        if (Win.obj.length > 0) {
            Win.obj.empty()
        } else {
            $("#mask").after('<div class="mask" id="' + Win.winId + '"></div>');
            Win.obj = $("#" + Win.winId)
        }
    },
    load: function(b, a, c) {
        Win.init();
        Win.obj.load(b, a,
        function(f, e, j) {
            var g = Win.obj.children().eq(0);
            w = g.outerWidth(),
            h = g.outerHeight();
            g.css({
                "margin-left": -w / 2
            });
            g.show();
            Win.obj.show();
            if (c) {
                c(f, e, j, a)
            }
        })
    },
    close: function() {
        Win.obj.hide()
    }
};
function errorMsg(b) {
    var a = '<div class="pop pop-msg" id="errorMsg">	<h3 class="pop-hd">提示信息</h3>	<p class="pop-tips" id="errorTips">' + b + '</p>	<div class="btn-tips">		<a href="javascript:;" class="u-btn u-btn7 j-close" onclick="$(\'#errorMsg\').remove();$(\'.mask:last\').hide()">确定</a>	</div></div>';
    $("body").append(a);
    showPop("#errorMsg")
}
function renderRebate(a) {
    return (a == null ? 0 : (a / 10)) + "%"
}
function getuserWithdrawStatus(a) {
    if (a == 1) {
        return "未受理"
    } else {
        if (a == 2) {
            return "处理中"
        } else {
            if (a == 3) {
                return "通过"
            } else {
                if (a == 4) {
                    return "不通过"
                } else {
                    if (a == 5) {
                        return "撤销"
                    }
                }
            }
        }
    }
}
function luhmCheck(g) {
    if (g.length < 16 || g.length > 19) {
        console.log("银行卡号长度必须在16到19之间");
        return false
    }
    var e = /^\d*$/;
    if (!e.exec(g)) {
        console.log("银行卡号必须全为数字");
        return false
    }
    var r = "10,18,30,35,37,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,58,60,62,65,68,69,84,87,88,94,95,98,99";
    if (r.indexOf(g.substring(0, 2)) == -1) {
        console.log("银行卡号开头6位不符合规范");
        return false
    }
    var D = g.substr(g.length - 1, 1);
    var b = g.substr(0, g.length - 1);
    var G = new Array();
    for (var C = b.length - 1; C > -1; C--) {
        G.push(b.substr(C, 1))
    }
    var x = new Array();
    var a = new Array();
    var o = new Array();
    for (var B = 0; B < G.length; B++) {
        if ((B + 1) % 2 == 1) {
            if (parseInt(G[B]) * 2 < 9) {
                x.push(parseInt(G[B]) * 2)
            } else {
                a.push(parseInt(G[B]) * 2)
            }
        } else {
            o.push(G[B])
        }
    }
    var f = new Array();
    var c = new Array();
    for (var E = 0; E < a.length; E++) {
        f.push(parseInt(a[E]) % 10);
        c.push(parseInt(a[E]) / 10)
    }
    var F = 0;
    var A = 0;
    var q = 0;
    var l = 0;
    var I = 0;
    for (var v = 0; v < x.length; v++) {
        F = F + parseInt(x[v])
    }
    for (var u = 0; u < o.length; u++) {
        A = A + parseInt(o[u])
    }
    for (var t = 0; t < f.length; t++) {
        q = q + parseInt(f[t]);
        l = l + parseInt(c[t])
    }
    I = parseInt(F) + parseInt(A) + parseInt(q) + parseInt(l);
    var z = parseInt(I) % 10 == 0 ? 10 : parseInt(I) % 10;
    var H = 10 - z;
    if (D == H) {
        return true
    } else {
        return false
    }
}
function numToCny(f) {
    if (!/^(0|[1-9]\d*)(\.\d+)?$/.test(f)) {
        return ""
    }
    var b = "千百拾亿千百拾万千百拾元角分",
    e = "";
    f += "00";
    var c = f.indexOf(".");
    if (c >= 0) {
        f = f.substring(0, c) + f.substr(c + 1, 2)
    }
    b = b.substr(b.length - f.length);
    for (var a = 0; a < f.length; a++) {
        e += "零壹贰叁肆伍陆柒捌玖".charAt(f.charAt(a)) + b.charAt(a)
    }
    return e.replace(/零(千|百|拾|角)/g, "零").replace(/(零)+/g, "零").replace(/零(万|亿|元)/g, "$1").replace(/(亿)万|壹(拾)/g, "$1$2").replace(/^元零?|零分/g, "").replace(/元$/g, "元整")
}
function isNumber(b) {
    b = b ? b: window.event;
    b = b.which ? b.which: b.keyCode;
    return 31 < b && (46 > b || 57 < b) ? !1 : !0
}
function getNowFormatDate() {
    var c = new Date();
    var b = "-";
    var a = ":";
    var g = c.getMonth() + 1;
    var f = c.getDate();
    if (g >= 1 && g <= 9) {
        g = "0" + g
    }
    if (f >= 0 && f <= 9) {
        f = "0" + f
    }
    var e = c.getFullYear() + b + g + b + f;
    return e
}
function isDateStr(a) {
    parts = a.split(" ");
    switch (parts.length) {
    case 2:
        if (isDatePart(parts[0]) == true && isTimePart(parts[1])) {
            return true
        } else {
            return false
        }
    case 1:
        aPart = parts[0];
        if (aPart.indexOf(":") > 0) {
            return isTimePart(aPart)
        } else {
            return isDatePart(aPart)
        }
    default:
        return false
    }
}
function isDatePart(a) {
    var b;
    if (a.indexOf("-") > -1) {
        b = a.split("-")
    } else {
        if (a.indexOf("/") > -1) {
            b = a.split("/")
        } else {
            return false
        }
    }
    if (b.length < 3) {
        return false
    }
    for (i = 0; i < 3; i++) {
        if (isNaN(b[i])) {
            return false
        }
    }
    y = parseInt(b[0]);
    m = parseInt(b[1]);
    d = parseInt(b[2]);
    if (y > 3000) {
        return false
    }
    if (m < 1 || m > 12) {
        return false
    }
    switch (d) {
    case 29:
        if (m == 2) {
            if ((y / 100) * 100 == y && (y / 400) * 400 != y) {} else {
                return false
            }
        }
        break;
    case 30:
        if (m == 2) {
            return false
        }
        break;
    case 31:
        if (m == 2 || m == 4 || m == 6 || m == 9 || m == 11) {
            return false
        }
        break;
    default:
    }
    return true
}
function isTimePart(b) {
    var a;
    a = b.split(":");
    if (a.length < 2) {
        return false
    }
    for (i = 0; i < a.length; i++) {
        if (isNaN(a[i])) {
            return false
        }
    }
    h = a[0];
    m = a[1];
    if (h < 0 || h > 23) {
        return false
    }
    if (m < 0 || h > 59) {
        return false
    }
    if (a.length > 2) {
        s = a[2];
        if (s < 0 || s > 59) {
            return false
        }
    }
    return true
}
var popTips = function(a) {
    this.init(a)
};
$.extend(popTips.prototype, {
    init: function(a) {
        this.body = $("body");
        this.obj = null;
        this._opt = $.extend({
            show: false,
            str: "",
            id: ""
        },
        a);
        this.bind()
    },
    bind: function() {
        this._add();
        this._close()
    },
    _add: function() {
        var a = '<div class="pop-tips">                            <h3 class="pop-tips-hd">提示</h3>                            <div class="pop-tips-bd" id="content_' + this._opt.id + '">        						<ul id="user_msg_content" class="mb10">';
        a += this._opt.str;
        a += '		</ul>            				</div>                        <a href="javascript:;" class="btn-pop-close">&times;</a>                    </div>';
        this.obj = $(a);
        this.obj.attr("id", this._opt.id);
        this.body.append(this.obj);
        this._opt.show && this.show()
    },
    _close: function() {
        var a = this;
        this.obj.on("click", ".btn-pop-close",
        function() {
            a.hide()
        })
    },
    show: function() {
        this.obj.slideDown();
        var a = this;
        window.setInterval(function() {
            a.hide()
        },
        5000)
    },
    hide: function() {
        var a = this;
        this.obj.slideUp(function() {
            a.obj.remove()
        })
    }
});
var calendar = {
    lunarInfo: [19416, 19168, 42352, 21717, 53856, 55632, 91476, 22176, 39632, 21970, 19168, 42422, 42192, 53840, 119381, 46400, 54944, 44450, 38320, 84343, 18800, 42160, 46261, 27216, 27968, 109396, 11104, 38256, 21234, 18800, 25958, 54432, 59984, 28309, 23248, 11104, 100067, 37600, 116951, 51536, 54432, 120998, 46416, 22176, 107956, 9680, 37584, 53938, 43344, 46423, 27808, 46416, 86869, 19872, 42416, 83315, 21168, 43432, 59728, 27296, 44710, 43856, 19296, 43748, 42352, 21088, 62051, 55632, 23383, 22176, 38608, 19925, 19152, 42192, 54484, 53840, 54616, 46400, 46752, 103846, 38320, 18864, 43380, 42160, 45690, 27216, 27968, 44870, 43872, 38256, 19189, 18800, 25776, 29859, 59984, 27480, 21952, 43872, 38613, 37600, 51552, 55636, 54432, 55888, 30034, 22176, 43959, 9680, 37584, 51893, 43344, 46240, 47780, 44368, 21977, 19360, 42416, 86390, 21168, 43312, 31060, 27296, 44368, 23378, 19296, 42726, 42208, 53856, 60005, 54576, 23200, 30371, 38608, 19415, 19152, 42192, 118966, 53840, 54560, 56645, 46496, 22224, 21938, 18864, 42359, 42160, 43600, 111189, 27936, 44448, 84835, 37744, 18936, 18800, 25776, 92326, 59984, 27424, 108228, 43744, 41696, 53987, 51552, 54615, 54432, 55888, 23893, 22176, 42704, 21972, 21200, 43448, 43344, 46240, 46758, 44368, 21920, 43940, 42416, 21168, 45683, 26928, 29495, 27296, 44368, 84821, 19296, 42352, 21732, 53600, 59752, 54560, 55968, 92838, 22224, 19168, 43476, 41680, 53584, 62034, 54560],
    solarMonth: [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],
    Gan: ["\u7532", "\u4e59", "\u4e19", "\u4e01", "\u620a", "\u5df1", "\u5e9a", "\u8f9b", "\u58ec", "\u7678"],
    Zhi: ["\u5b50", "\u4e11", "\u5bc5", "\u536f", "\u8fb0", "\u5df3", "\u5348", "\u672a", "\u7533", "\u9149", "\u620c", "\u4ea5"],
    Animals: ["\u9f20", "\u725b", "\u864e", "\u5154", "\u9f99", "\u86c7", "\u9a6c", "\u7f8a", "\u7334", "\u9e21", "\u72d7", "\u732a"],
    solarTerm: ["\u5c0f\u5bd2", "\u5927\u5bd2", "\u7acb\u6625", "\u96e8\u6c34", "\u60ca\u86f0", "\u6625\u5206", "\u6e05\u660e", "\u8c37\u96e8", "\u7acb\u590f", "\u5c0f\u6ee1", "\u8292\u79cd", "\u590f\u81f3", "\u5c0f\u6691", "\u5927\u6691", "\u7acb\u79cb", "\u5904\u6691", "\u767d\u9732", "\u79cb\u5206", "\u5bd2\u9732", "\u971c\u964d", "\u7acb\u51ac", "\u5c0f\u96ea", "\u5927\u96ea", "\u51ac\u81f3"],
    sTermInfo: ["9778397bd097c36b0b6fc9274c91aa", "97b6b97bd19801ec9210c965cc920e", "97bcf97c3598082c95f8c965cc920f", "97bd0b06bdb0722c965ce1cfcc920f", "b027097bd097c36b0b6fc9274c91aa", "97b6b97bd19801ec9210c965cc920e", "97bcf97c359801ec95f8c965cc920f", "97bd0b06bdb0722c965ce1cfcc920f", "b027097bd097c36b0b6fc9274c91aa", "97b6b97bd19801ec9210c965cc920e", "97bcf97c359801ec95f8c965cc920f", "97bd0b06bdb0722c965ce1cfcc920f", "b027097bd097c36b0b6fc9274c91aa", "9778397bd19801ec9210c965cc920e", "97b6b97bd19801ec95f8c965cc920f", "97bd09801d98082c95f8e1cfcc920f", "97bd097bd097c36b0b6fc9210c8dc2", "9778397bd197c36c9210c9274c91aa", "97b6b97bd19801ec95f8c965cc920e", "97bd09801d98082c95f8e1cfcc920f", "97bd097bd097c36b0b6fc9210c8dc2", "9778397bd097c36c9210c9274c91aa", "97b6b97bd19801ec95f8c965cc920e", "97bcf97c3598082c95f8e1cfcc920f", "97bd097bd097c36b0b6fc9210c8dc2", "9778397bd097c36c9210c9274c91aa", "97b6b97bd19801ec9210c965cc920e", "97bcf97c3598082c95f8c965cc920f", "97bd097bd097c35b0b6fc920fb0722", "9778397bd097c36b0b6fc9274c91aa", "97b6b97bd19801ec9210c965cc920e", "97bcf97c3598082c95f8c965cc920f", "97bd097bd097c35b0b6fc920fb0722", "9778397bd097c36b0b6fc9274c91aa", "97b6b97bd19801ec9210c965cc920e", "97bcf97c359801ec95f8c965cc920f", "97bd097bd097c35b0b6fc920fb0722", "9778397bd097c36b0b6fc9274c91aa", "97b6b97bd19801ec9210c965cc920e", "97bcf97c359801ec95f8c965cc920f", "97bd097bd097c35b0b6fc920fb0722", "9778397bd097c36b0b6fc9274c91aa", "97b6b97bd19801ec9210c965cc920e", "97bcf97c359801ec95f8c965cc920f", "97bd097bd07f595b0b6fc920fb0722", "9778397bd097c36b0b6fc9210c8dc2", "9778397bd19801ec9210c9274c920e", "97b6b97bd19801ec95f8c965cc920f", "97bd07f5307f595b0b0bc920fb0722", "7f0e397bd097c36b0b6fc9210c8dc2", "9778397bd097c36c9210c9274c920e", "97b6b97bd19801ec95f8c965cc920f", "97bd07f5307f595b0b0bc920fb0722", "7f0e397bd097c36b0b6fc9210c8dc2", "9778397bd097c36c9210c9274c91aa", "97b6b97bd19801ec9210c965cc920e", "97bd07f1487f595b0b0bc920fb0722", "7f0e397bd097c36b0b6fc9210c8dc2", "9778397bd097c36b0b6fc9274c91aa", "97b6b97bd19801ec9210c965cc920e", "97bcf7f1487f595b0b0bb0b6fb0722", "7f0e397bd097c35b0b6fc920fb0722", "9778397bd097c36b0b6fc9274c91aa", "97b6b97bd19801ec9210c965cc920e", "97bcf7f1487f595b0b0bb0b6fb0722", "7f0e397bd097c35b0b6fc920fb0722", "9778397bd097c36b0b6fc9274c91aa", "97b6b97bd19801ec9210c965cc920e", "97bcf7f1487f531b0b0bb0b6fb0722", "7f0e397bd097c35b0b6fc920fb0722", "9778397bd097c36b0b6fc9274c91aa", "97b6b97bd19801ec9210c965cc920e", "97bcf7f1487f531b0b0bb0b6fb0722", "7f0e397bd07f595b0b6fc920fb0722", "9778397bd097c36b0b6fc9274c91aa", "97b6b97bd19801ec9210c9274c920e", "97bcf7f0e47f531b0b0bb0b6fb0722", "7f0e397bd07f595b0b0bc920fb0722", "9778397bd097c36b0b6fc9210c91aa", "97b6b97bd197c36c9210c9274c920e", "97bcf7f0e47f531b0b0bb0b6fb0722", "7f0e397bd07f595b0b0bc920fb0722", "9778397bd097c36b0b6fc9210c8dc2", "9778397bd097c36c9210c9274c920e", "97b6b7f0e47f531b0723b0b6fb0722", "7f0e37f5307f595b0b0bc920fb0722", "7f0e397bd097c36b0b6fc9210c8dc2", "9778397bd097c36b0b70c9274c91aa", "97b6b7f0e47f531b0723b0b6fb0721", "7f0e37f1487f595b0b0bb0b6fb0722", "7f0e397bd097c35b0b6fc9210c8dc2", "9778397bd097c36b0b6fc9274c91aa", "97b6b7f0e47f531b0723b0b6fb0721", "7f0e27f1487f595b0b0bb0b6fb0722", "7f0e397bd097c35b0b6fc920fb0722", "9778397bd097c36b0b6fc9274c91aa", "97b6b7f0e47f531b0723b0b6fb0721", "7f0e27f1487f531b0b0bb0b6fb0722", "7f0e397bd097c35b0b6fc920fb0722", "9778397bd097c36b0b6fc9274c91aa", "97b6b7f0e47f531b0723b0b6fb0721", "7f0e27f1487f531b0b0bb0b6fb0722", "7f0e397bd097c35b0b6fc920fb0722", "9778397bd097c36b0b6fc9274c91aa", "97b6b7f0e47f531b0723b0b6fb0721", "7f0e27f1487f531b0b0bb0b6fb0722", "7f0e397bd07f595b0b0bc920fb0722", "9778397bd097c36b0b6fc9274c91aa", "97b6b7f0e47f531b0723b0787b0721", "7f0e27f0e47f531b0b0bb0b6fb0722", "7f0e397bd07f595b0b0bc920fb0722", "9778397bd097c36b0b6fc9210c91aa", "97b6b7f0e47f149b0723b0787b0721", "7f0e27f0e47f531b0723b0b6fb0722", "7f0e397bd07f595b0b0bc920fb0722", "9778397bd097c36b0b6fc9210c8dc2", "977837f0e37f149b0723b0787b0721", "7f07e7f0e47f531b0723b0b6fb0722", "7f0e37f5307f595b0b0bc920fb0722", "7f0e397bd097c35b0b6fc9210c8dc2", "977837f0e37f14998082b0787b0721", "7f07e7f0e47f531b0723b0b6fb0721", "7f0e37f1487f595b0b0bb0b6fb0722", "7f0e397bd097c35b0b6fc9210c8dc2", "977837f0e37f14998082b0787b06bd", "7f07e7f0e47f531b0723b0b6fb0721", "7f0e27f1487f531b0b0bb0b6fb0722", "7f0e397bd097c35b0b6fc920fb0722", "977837f0e37f14998082b0787b06bd", "7f07e7f0e47f531b0723b0b6fb0721", "7f0e27f1487f531b0b0bb0b6fb0722", "7f0e397bd097c35b0b6fc920fb0722", "977837f0e37f14998082b0787b06bd", "7f07e7f0e47f531b0723b0b6fb0721", "7f0e27f1487f531b0b0bb0b6fb0722", "7f0e397bd07f595b0b0bc920fb0722", "977837f0e37f14998082b0787b06bd", "7f07e7f0e47f531b0723b0b6fb0721", "7f0e27f1487f531b0b0bb0b6fb0722", "7f0e397bd07f595b0b0bc920fb0722", "977837f0e37f14998082b0787b06bd", "7f07e7f0e47f149b0723b0787b0721", "7f0e27f0e47f531b0b0bb0b6fb0722", "7f0e397bd07f595b0b0bc920fb0722", "977837f0e37f14998082b0723b06bd", "7f07e7f0e37f149b0723b0787b0721", "7f0e27f0e47f531b0723b0b6fb0722", "7f0e397bd07f595b0b0bc920fb0722", "977837f0e37f14898082b0723b02d5", "7ec967f0e37f14998082b0787b0721", "7f07e7f0e47f531b0723b0b6fb0722", "7f0e37f1487f595b0b0bb0b6fb0722", "7f0e37f0e37f14898082b0723b02d5", "7ec967f0e37f14998082b0787b0721", "7f07e7f0e47f531b0723b0b6fb0722", "7f0e37f1487f531b0b0bb0b6fb0722", "7f0e37f0e37f14898082b0723b02d5", "7ec967f0e37f14998082b0787b06bd", "7f07e7f0e47f531b0723b0b6fb0721", "7f0e37f1487f531b0b0bb0b6fb0722", "7f0e37f0e37f14898082b072297c35", "7ec967f0e37f14998082b0787b06bd", "7f07e7f0e47f531b0723b0b6fb0721", "7f0e27f1487f531b0b0bb0b6fb0722", "7f0e37f0e37f14898082b072297c35", "7ec967f0e37f14998082b0787b06bd", "7f07e7f0e47f531b0723b0b6fb0721", "7f0e27f1487f531b0b0bb0b6fb0722", "7f0e37f0e366aa89801eb072297c35", "7ec967f0e37f14998082b0787b06bd", "7f07e7f0e47f149b0723b0787b0721", "7f0e27f1487f531b0b0bb0b6fb0722", "7f0e37f0e366aa89801eb072297c35", "7ec967f0e37f14998082b0723b06bd", "7f07e7f0e47f149b0723b0787b0721", "7f0e27f0e47f531b0723b0b6fb0722", "7f0e37f0e366aa89801eb072297c35", "7ec967f0e37f14998082b0723b06bd", "7f07e7f0e37f14998083b0787b0721", "7f0e27f0e47f531b0723b0b6fb0722", "7f0e37f0e366aa89801eb072297c35", "7ec967f0e37f14898082b0723b02d5", "7f07e7f0e37f14998082b0787b0721", "7f07e7f0e47f531b0723b0b6fb0722", "7f0e36665b66aa89801e9808297c35", "665f67f0e37f14898082b0723b02d5", "7ec967f0e37f14998082b0787b0721", "7f07e7f0e47f531b0723b0b6fb0722", "7f0e36665b66a449801e9808297c35", "665f67f0e37f14898082b0723b02d5", "7ec967f0e37f14998082b0787b06bd", "7f07e7f0e47f531b0723b0b6fb0721", "7f0e36665b66a449801e9808297c35", "665f67f0e37f14898082b072297c35", "7ec967f0e37f14998082b0787b06bd", "7f07e7f0e47f531b0723b0b6fb0721", "7f0e26665b66a449801e9808297c35", "665f67f0e37f1489801eb072297c35", "7ec967f0e37f14998082b0787b06bd", "7f07e7f0e47f531b0723b0b6fb0721", "7f0e27f1487f531b0b0bb0b6fb0722"],
    nStr1: ["\u65e5", "\u4e00", "\u4e8c", "\u4e09", "\u56db", "\u4e94", "\u516d", "\u4e03", "\u516b", "\u4e5d", "\u5341"],
    nStr2: ["\u521d", "\u5341", "\u5eff", "\u5345"],
    nStr3: ["\u6b63", "\u4e8c", "\u4e09", "\u56db", "\u4e94", "\u516d", "\u4e03", "\u516b", "\u4e5d", "\u5341", "\u51ac", "\u814a"],
    lYearDays: function(c) {
        var a, b = 348;
        for (a = 32768; a > 8; a >>= 1) {
            b += (calendar.lunarInfo[c - 1900] & a) ? 1 : 0
        }
        return (b + calendar.leapDays(c))
    },
    leapMonth: function(a) {
        return (calendar.lunarInfo[a - 1900] & 15)
    },
    leapDays: function(a) {
        if (calendar.leapMonth(a)) {
            return ((calendar.lunarInfo[a - 1900] & 65536) ? 30 : 29)
        }
        return (0)
    },
    monthDays: function(b, a) {
        if (a > 12 || a < 1) {
            return - 1
        }
        return ((calendar.lunarInfo[b - 1900] & (65536 >> a)) ? 30 : 29)
    },
    solarDays: function(c, a) {
        if (a > 12 || a < 1) {
            return - 1
        }
        var b = a - 1;
        if (b == 1) {
            return (((c % 4 == 0) && (c % 100 != 0) || (c % 400 == 0)) ? 29 : 28)
        } else {
            return (calendar.solarMonth[b])
        }
    },
    toGanZhi: function(a) {
        return (calendar.Gan[a % 10] + calendar.Zhi[a % 12])
    },
    getTerm: function(f, e) {
        if (f < 1900 || f > 2100) {
            return - 1
        }
        if (e < 1 || e > 24) {
            return - 1
        }
        var a = calendar.sTermInfo[f - 1900];
        var c = [parseInt("0x" + a.substr(0, 5)).toString(), parseInt("0x" + a.substr(5, 5)).toString(), parseInt("0x" + a.substr(10, 5)).toString(), parseInt("0x" + a.substr(15, 5)).toString(), parseInt("0x" + a.substr(20, 5)).toString(), parseInt("0x" + a.substr(25, 5)).toString()];
        var b = [c[0].substr(0, 1), c[0].substr(1, 2), c[0].substr(3, 1), c[0].substr(4, 2), c[1].substr(0, 1), c[1].substr(1, 2), c[1].substr(3, 1), c[1].substr(4, 2), c[2].substr(0, 1), c[2].substr(1, 2), c[2].substr(3, 1), c[2].substr(4, 2), c[3].substr(0, 1), c[3].substr(1, 2), c[3].substr(3, 1), c[3].substr(4, 2), c[4].substr(0, 1), c[4].substr(1, 2), c[4].substr(3, 1), c[4].substr(4, 2), c[5].substr(0, 1), c[5].substr(1, 2), c[5].substr(3, 1), c[5].substr(4, 2), ];
        return parseInt(b[e - 1])
    },
    toChinaMonth: function(a) {
        if (a > 12 || a < 1) {
            return - 1
        }
        var b = calendar.nStr3[a - 1];
        b += "\u6708";
        return b
    },
    toChinaDay: function(b) {
        var a;
        switch (b) {
        case 10:
            a = "\u521d\u5341";
            break;
        case 20:
            a = "\u4e8c\u5341";
            break;
            break;
        case 30:
            a = "\u4e09\u5341";
            break;
            break;
        default:
            a = calendar.nStr2[Math.floor(b / 10)];
            a += calendar.nStr1[b % 10]
        }
        return (a)
    },
    getAnimal: function(a) {
        return calendar.Animals[(a - 4) % 12]
    },
    solar2lunar: function(f, r, E) {
        if (f < 1900 || f > 2100) {
            return - 1
        }
        if (f == 1900 && r == 1 && E < 31) {
            return - 1
        }
        if (!f) {
            var e = new Date()
        } else {
            var e = new Date(f, parseInt(r) - 1, E)
        }
        var x, l = 0,
        D = 0;
        var f = e.getFullYear(),
        r = e.getMonth() + 1,
        E = e.getDate();
        var c = (Date.UTC(e.getFullYear(), e.getMonth(), e.getDate()) - Date.UTC(1900, 0, 31)) / 86400000;
        for (x = 1900; x < 2101 && c > 0; x++) {
            D = calendar.lYearDays(x);
            c -= D
        }
        if (c < 0) {
            c += D;
            x--
        }
        var g = new Date(),
        G = false;
        if (g.getFullYear() == f && g.getMonth() + 1 == r && g.getDate() == E) {
            G = true
        }
        var z = e.getDay(),
        a = calendar.nStr1[z];
        if (z == 0) {
            z = 7
        }
        var k = x;
        var l = calendar.leapMonth(x);
        var o = false;
        for (x = 1; x < 13 && c > 0; x++) {
            if (l > 0 && x == (l + 1) && o == false) {--x;
                o = true;
                D = calendar.leapDays(k)
            } else {
                D = calendar.monthDays(k, x)
            }
            if (o == true && x == (l + 1)) {
                o = false
            }
            c -= D
        }
        if (c == 0 && l > 0 && x == l + 1) {
            if (o) {
                o = false
            } else {
                o = true; --x
            }
        }
        if (c < 0) {
            c += D; --x
        }
        var F = x;
        var v = c + 1;
        var A = r - 1;
        var t = calendar.getTerm(k, 3);
        var n = calendar.toGanZhi(k - 4);
        if (A < 2 && E < t) {
            n = calendar.toGanZhi(k - 5)
        } else {
            n = calendar.toGanZhi(k - 4)
        }
        var u = calendar.getTerm(f, (r * 2 - 1));
        var j = calendar.getTerm(f, (r * 2));
        var C = calendar.toGanZhi((f - 1900) * 12 + r + 11);
        if (E >= u) {
            C = calendar.toGanZhi((f - 1900) * 12 + r + 12)
        }
        var q = false;
        var B = null;
        if (u == E) {
            q = true;
            B = calendar.solarTerm[r * 2 - 2]
        }
        if (j == E) {
            q = true;
            B = calendar.solarTerm[r * 2 - 1]
        }
        var p = Date.UTC(f, A, 1, 0, 0, 0, 0) / 86400000 + 25567 + 10;
        var b = calendar.toGanZhi(p + E - 1);
        return {
            lYear: k,
            lMonth: F,
            lDay: v,
            Animal: calendar.getAnimal(k),
            IMonthCn: (o ? "\u95f0": "") + calendar.toChinaMonth(F),
            IDayCn: calendar.toChinaDay(v),
            cYear: f,
            cMonth: r,
            cDay: E,
            gzYear: n,
            gzMonth: C,
            gzDay: b,
            isToday: G,
            isLeap: o,
            nWeek: z,
            ncWeek: "\u661f\u671f" + a,
            isTerm: q,
            Term: B
        }
    },
    lunar2solar: function(o, f, l, v) {
        var a = 0;
        var u = calendar.leapMonth(o);
        var r = calendar.leapDays(o);
        if (v && (u != f)) {
            return - 1
        }
        if (o == 2100 && f == 12 && l > 1 || o == 1900 && f == 1 && l < 31) {
            return - 1
        }
        var p = calendar.monthDays(o, f);
        if (o < 1900 || o > 2100 || l > p) {
            return - 1
        }
        var g = 0;
        for (var j = 1900; j < o; j++) {
            g += calendar.lYearDays(j)
        }
        var b = 0,
        t = false;
        for (var j = 1; j < f; j++) {
            b = calendar.leapMonth(o);
            if (!t) {
                if (b <= j && b > 0) {
                    g += calendar.leapDays(o);
                    t = true
                }
            }
            g += calendar.monthDays(o, j)
        }
        if (v) {
            g += p
        }
        var q = Date.UTC(1900, 1, 30, 0, 0, 0);
        var e = new Date((g + l - 31) * 86400000 + q);
        var n = e.getUTCFullYear();
        var c = e.getUTCMonth() + 1;
        var k = e.getUTCDate();
        return calendar.solar2lunar(n, c, k)
    }
};
var LHC = {
    showTab: function(e) {
        parent.UserBet.resetData();
        var e = $(e);
        var c = ["A", "B", "C", "D", "E", "F", "G", "H", "I"];
        for (var a in c) {
            tagId = c[a];
            if ($("#TM_" + tagId + "_TAB")) {
                $("#TM_" + tagId + "_TAB").removeClass("on");
                $("#TM_" + tagId + "_PAGE").hide()
            }
        }
        var b = e.attr("type");
        $("#TM_" + b + "_TAB").addClass("on");
        $("#TM_" + b + "_PAGE").show()
    },
    showKjtz: function() {
        var a = $("#kjtz_btn").html();
        if (a == "长龙统计") {
            $("#kjtz_btn").html("快捷投注");
            $("#stat_play_ctn").show();
            $("#kjtz-ctn").hide()
        } else {
            $("#kjtz_btn").html("长龙统计");
            $("#stat_play_ctn").hide();
            $("#kjtz-ctn").show()
        }
    },
    getTmTab: function() {
        return $("#tm_tabs .on").attr("type")
    },
    SX_1: ["01", 13, 25, 37, 49],
    SX_2: ["02", 14, 26, 38],
    SX_3: ["03", 15, 27, 39],
    SX_4: ["04", 16, 28, 40],
    SX_5: ["05", 17, 29, 41],
    SX_6: ["06", 18, 30, 42],
    SX_7: ["07", 19, 31, 43],
    SX_8: ["08", 20, 32, 44],
    SX_9: ["09", 21, 33, 45],
    SX_10: [10, 22, 34, 46],
    SX_11: [11, 23, 35, 47],
    SX_12: [12, 24, 36, 48],
    HONG_NUMS: [1, 2, 7, 8, 12, 13, 18, 19, 23, 24, 29, 30, 34, 35, 40, 45, 46],
    LANG_NUMS: [3, 4, 9, 10, 14, 15, 20, 25, 26, 31, 36, 37, 41, 42, 47, 48],
    LV_NUMS: [5, 6, 11, 16, 17, 21, 22, 27, 28, 32, 33, 38, 39, 43, 44, 49],
    getSxList: function(b, j, a) {
        var g = LHC["SX_" + LHC_KJTZ.getZodicaNum(b)];
        var f = '<i class="lhc_icon lhc_b{num} mr2">{num}</i>';
        var k = "";
        for (var e in g) {
            var c = g[e];
            if (a && c == 49) {
                continue
            }
            k += f.format({
                num: c
            })
        }
        $(j).html(k)
    },
    getSxNums: function(b, g, a) {
        var f = LHC["SX_" + LHC_KJTZ.getZodicaNum(b)];
        var j = "";
        for (var e in f) {
            var c = parseInt(f[e]);
            if (a && c == 49) {
                continue
            }
            j += c + ","
        }
        $(g).attr("value", j.substring(0, j.length - 1))
    },
    getLhcWxStr: function(c, f) {
        var e = CONFIG_MAP[c];
        var a = e.split(",");
        var j = "";
        for (var b in a) {
            var g = a[b];
            j += '<i class="lhc_icon lhc_b' + g + ' mr2">' + g + "</i>"
        }
        $(f).html(j)
    }
};
var LHC_KJTZ = {
    DANMA_PLAYIDS_A: [708501, 708503, 708505, 708507, 708509, 708511, 708513, 708515, 708517, 708519, 708521, 708523, 708525, 708527, 708529, 708531, 708533, 708535, 708537, 708539, 708541, 708543, 708545, 708547, 708549],
    DANMA_PLAYIDS_B: [708550, 708552, 708554, 708556, 708558, 708560, 708562, 708564, 708566, 708568, 708570, 708572, 708574, 708576, 708578, 708580, 708582, 708584, 708586, 708588, 708590, 708592, 708594, 708596, 708598],
    DANMA_PLAYIDS_C: [709101, 709103, 709105, 709107, 709109, 709111, 709113, 709115, 709117, 709119, 709121, 709123, 709125, 709127, 709129, 709131, 709133, 709135, 709137, 709139, 709141, 709143, 709145, 709147, 709149],
    DANMA_PLAYIDS_D: [7092001, 7092003, 7092005, 7092007, 7092009, 7092011, 7092013, 7092015, 7092017, 7092019, 7092021, 7092023, 7092025, 7092027, 7092029, 7092031, 7092033, 7092035, 7092037, 7092039, 7092041, 7092043, 7092045, 7092047, 7092049],
    DANMA_PLAYIDS_E: [7092063, 7092065, 7092067, 7092069, 7092071, 7092073, 7092075, 7092077, 7092079, 7092081, 7092083, 7092085, 7092087, 7092089, 7092091, 7092093, 7092095, 7092097, 7092099, 7092101, 7092103, 7092105, 7092107, 7092109, 7092111],
    DANMA_PLAYIDS_F: [7092125, 7092127, 7092129, 7092131, 7092133, 7092135, 7092137, 7092139, 7092141, 7092143, 7092145, 7092147, 7092149, 7092151, 7092153, 7092155, 7092157, 7092159, 7092161, 7092163, 7092165, 7092167, 7092169, 7092171, 7092173],
    DANMA_PLAYIDS_G: [7092187, 7092189, 7092191, 7092193, 7092195, 7092197, 7092199, 7092201, 7092203, 7092205, 7092207, 7092209, 7092211, 7092213, 7092215, 7092217, 7092219, 7092221, 7092223, 7092225, 7092227, 7092229, 7092231, 7092233, 7092235],
    DANMA_PLAYIDS_H: [7092249, 7092251, 7092253, 7092255, 7092257, 7092259, 7092261, 7092263, 7092265, 7092267, 7092269, 7092271, 7092273, 7092275, 7092277, 7092279, 7092281, 7092283, 7092285, 7092287, 7092289, 7092291, 7092293, 7092295, 7092297],
    DANMA_PLAYIDS_I: [7092311, 7092313, 7092315, 7092317, 7092319, 7092321, 7092323, 7092325, 7092327, 7092329, 7092331, 7092333, 7092335, 7092337, 7092339, 7092341, 7092343, 7092345, 7092347, 7092349, 7092351, 7092353, 7092355, 7092357, 7092359],
    SHUANMA_PLAYIDS_A: [708502, 708504, 708506, 708508, 708510, 708512, 708514, 708516, 708518, 708520, 708522, 708524, 708526, 708528, 708530, 708532, 708534, 708536, 708538, 708540, 708542, 708544, 708546, 708548],
    SHUANMA_PLAYIDS_B: [708551, 708553, 708555, 708557, 708559, 708561, 708563, 708565, 708567, 708569, 708571, 708573, 708575, 708577, 708579, 708581, 708583, 708585, 708587, 708589, 708591, 708593, 708595, 708597],
    SHUANMA_PLAYIDS_C: [709102, 709104, 709106, 709108, 709110, 709112, 709114, 709116, 709118, 709120, 709122, 709124, 709126, 709128, 709130, 709132, 709134, 709136, 709138, 709140, 709142, 709144, 709146, 709148],
    SHUANMA_PLAYIDS_D: [7092002, 7092004, 7092006, 7092008, 7092010, 7092012, 7092014, 7092016, 7092018, 7092020, 7092022, 7092024, 7092026, 7092028, 7092030, 7092032, 7092034, 7092036, 7092038, 7092040, 7092042, 7092044, 7092046, 7092048],
    SHUANMA_PLAYIDS_E: [7092064, 7092066, 7092068, 7092070, 7092072, 7092074, 7092076, 7092078, 7092080, 7092082, 7092084, 7092086, 7092088, 7092090, 7092092, 7092094, 7092096, 7092098, 7092100, 7092102, 7092104, 7092106, 7092108, 7092110],
    SHUANMA_PLAYIDS_F: [7092126, 7092128, 7092130, 7092132, 7092134, 7092136, 7092138, 7092140, 7092142, 7092144, 7092146, 7092148, 7092150, 7092152, 7092154, 7092156, 7092158, 7092160, 7092162, 7092164, 7092166, 7092168, 7092170, 7092172, ],
    SHUANMA_PLAYIDS_G: [7092188, 7092190, 7092192, 7092194, 7092196, 7092198, 7092200, 7092202, 7092204, 7092206, 7092208, 7092210, 7092212, 7092214, 7092216, 7092218, 7092220, 7092222, 7092224, 7092226, 7092228, 7092230, 7092232, 7092234, ],
    SHUANMA_PLAYIDS_H: [7092250, 7092252, 7092254, 7092256, 7092258, 7092260, 7092262, 7092264, 7092266, 7092268, 7092270, 7092272, 7092274, 7092276, 7092278, 7092280, 7092282, 7092284, 7092286, 7092288, 7092290, 7092292, 7092294, 7092296, ],
    SHUANMA_PLAYIDS_I: [7092312, 7092314, 7092316, 7092318, 7092320, 7092322, 7092324, 7092326, 7092328, 7092330, 7092332, 7092334, 7092336, 7092338, 7092340, 7092342, 7092344, 7092346, 7092348, 7092350, 7092352, 7092354, 7092356, 7092358, ],
    XIAODAN_PLAYIDS_A: [708501, 708503, 708505, 708507, 708509, 708511, 708513, 708515, 708517, 708519, 708521, 708523],
    XIAODAN_PLAYIDS_B: [708550, 708552, 708554, 708556, 708558, 708560, 708562, 708564, 708566, 708568, 708570, 708572],
    XIAODAN_PLAYIDS_C: [709101, 709103, 709105, 709107, 709109, 709111, 709113, 709115, 709117, 709119, 709121, 709123],
    XIAODAN_PLAYIDS_D: [7092001, 7092003, 7092005, 7092007, 7092009, 7092011, 7092013, 7092015, 7092017, 7092019, 7092021, 7092023],
    XIAODAN_PLAYIDS_E: [7092063, 7092065, 7092067, 7092069, 7092071, 7092073, 7092075, 7092077, 7092079, 7092081, 7092083, 7092085, ],
    XIAODAN_PLAYIDS_F: [7092125, 7092127, 7092129, 7092131, 7092133, 7092135, 7092137, 7092139, 7092141, 7092143, 7092145, 7092147, ],
    XIAODAN_PLAYIDS_G: [7092187, 7092189, 7092191, 7092193, 7092195, 7092197, 7092199, 7092201, 7092203, 7092205, 7092207, 7092209, ],
    XIAODAN_PLAYIDS_H: [7092249, 7092251, 7092253, 7092255, 7092257, 7092259, 7092261, 7092263, 7092265, 7092267, 7092269, 7092271, ],
    XIAODAN_PLAYIDS_I: [7092311, 7092313, 7092315, 7092317, 7092319, 7092321, 7092323, 7092325, 7092327, 7092329, 7092331, 7092333, ],
    XIAOSHUAN_PLAYIDS_A: [708502, 708504, 708506, 708508, 708510, 708512, 708514, 708516, 708518, 708520, 708522, 708524],
    XIAOSHUAN_PLAYIDS_B: [708551, 708553, 708555, 708557, 708559, 708561, 708563, 708565, 708567, 708569, 708571],
    XIAOSHUAN_PLAYIDS_C: [709102, 709104, 709106, 709108, 709110, 709112, 709114, 709116, 709118, 709120, 709122, 709124],
    XIAOSHUAN_PLAYIDS_D: [7092002, 7092004, 7092006, 7092008, 7092010, 7092012, 7092014, 7092016, 7092018, 7092020, 7092022, 7092024],
    XIAOSHUAN_PLAYIDS_E: [7092064, 7092066, 7092068, 7092070, 7092072, 7092074, 7092076, 7092078, 7092080, 7092082, 7092084, 7092086, ],
    XIAOSHUAN_PLAYIDS_F: [7092126, 7092128, 7092130, 7092132, 7092134, 7092136, 7092138, 7092140, 7092142, 7092144, 7092146, 7092148, ],
    XIAOSHUAN_PLAYIDS_G: [7092188, 7092190, 7092192, 7092194, 7092196, 7092198, 7092200, 7092202, 7092204, 7092206, 7092208, 7092210, ],
    XIAOSHUAN_PLAYIDS_H: [7092250, 7092252, 7092254, 7092256, 7092258, 7092260, 7092262, 7092264, 7092266, 7092268, 7092270, 7092272, ],
    XIAOSHUAN_PLAYIDS_I: [7092312, 7092314, 7092316, 7092318, 7092320, 7092322, 7092324, 7092326, 7092328, 7092330, 7092332, 7092334, ],
    HEDAN_PLAYIDS_A: [708501, 708503, 708505, 708507, 708509, 708510, 708512, 708514, 708516, 708518, 708521, 708523, 708525, 708527, 708529, 708530, 708532, 708534, 708536, 708538, 708541, 708543, 708545, 708547, 708549],
    HEDAN_PLAYIDS_B: [708550, 708552, 708554, 708556, 708558, 708559, 708561, 708563, 708565, 708567, 708570, 708572, 708574, 708576, 708578, 708579, 708581, 708583, 708585, 708587, 708590, 708592, 708594, 708596, 708598],
    HEDAN_PLAYIDS_C: [709101, 709103, 709105, 709107, 709109, 709110, 709112, 709114, 709116, 709118, 709121, 709123, 709125, 709127, 709129, 709130, 709132, 709134, 709136, 709138, 709141, 709143, 709145, 709147, 709149],
    HEDAN_PLAYIDS_D: [7092001, 7092003, 7092005, 7092007, 7092009, 7092010, 7092012, 7092014, 7092016, 7092018, 7092021, 7092023, 7092025, 7092027, 7092029, 7092030, 7092032, 7092034, 7092036, 7092038, 7092041, 7092043, 7092045, 7092047, 7092049],
    HEDAN_PLAYIDS_E: [7092063, 7092065, 7092067, 7092069, 7092071, 7092072, 7092074, 7092076, 7092078, 7092080, 7092083, 7092085, 7092087, 7092089, 7092091, 7092092, 7092094, 7092096, 7092098, 7092100, 7092103, 7092105, 7092107, 7092109, 7092111, ],
    HEDAN_PLAYIDS_F: [7092125, 7092127, 7092129, 7092131, 7092133, 7092134, 7092136, 7092138, 7092140, 7092142, 7092145, 7092147, 7092149, 7092151, 7092153, 7092154, 7092156, 7092158, 7092160, 7092162, 7092165, 7092167, 7092169, 7092171, 7092173, ],
    HEDAN_PLAYIDS_G: [7092187, 7092189, 7092191, 7092193, 7092195, 7092196, 7092198, 7092200, 7092202, 7092204, 7092207, 7092209, 7092211, 7092213, 7092215, 7092216, 7092218, 7092220, 7092222, 7092224, 7092227, 7092229, 7092231, 7092233, 7092235, ],
    HEDAN_PLAYIDS_H: [7092249, 7092251, 7092253, 7092255, 7092257, 7092258, 7092260, 7092262, 7092264, 7092266, 7092269, 7092271, 7092273, 7092275, 7092277, 7092278, 7092280, 7092282, 7092284, 7092286, 7092289, 7092291, 7092293, 7092295, 7092297, ],
    HEDAN_PLAYIDS_I: [7092311, 7092313, 7092315, 7092317, 7092319, 7092320, 7092322, 7092324, 7092326, 7092328, 7092331, 7092333, 7092335, 7092337, 7092339, 7092340, 7092342, 7092344, 7092346, 7092348, 7092351, 7092353, 7092355, 7092357, 7092359, ],
    HESHUAN_PLAYIDS_A: [708502, 708504, 708506, 708508, 708511, 708513, 708515, 708517, 708519, 708520, 708522, 708524, 708526, 708528, 708530, 708531, 708533, 708535, 708537, 708539, 708540, 708542, 708544, 708546, 708548],
    HESHUAN_PLAYIDS_B: [708551, 708553, 708555, 708557, 708560, 708562, 708564, 708566, 708568, 708569, 708571, 708573, 708575, 708577, 708580, 708582, 708584, 708586, 708588, 708589, 708591, 708593, 708595, 708597],
    HESHUAN_PLAYIDS_C: [709102, 709104, 709106, 709108, 709111, 709113, 709115, 709117, 709119, 709120, 709122, 709124, 709126, 709128, 709130, 709131, 709133, 709135, 709137, 709139, 709140, 709142, 709144, 709146, 709148],
    HESHUAN_PLAYIDS_D: [7092002, 7092004, 7092006, 7092008, 7092011, 7092013, 7092015, 7092017, 7092019, 7092020, 7092022, 7092024, 7092026, 7092028, 7092030, 7092031, 7092033, 7092035, 7092037, 7092039, 7092040, 7092042, 7092044, 7092046, 7092048],
    HESHUAN_PLAYIDS_E: [7092064, 7092066, 7092068, 7092070, 7092073, 7092075, 7092077, 7092079, 7092081, 7092082, 7092084, 7092086, 7092088, 7092090, 7092092, 7092093, 7092095, 7092097, 7092099, 7092101, 7092102, 7092104, 7092106, 7092108, 7092110, ],
    HESHUAN_PLAYIDS_F: [7092126, 7092128, 7092130, 7092132, 7092135, 7092137, 7092139, 7092141, 7092143, 7092144, 7092146, 7092148, 7092150, 7092152, 7092154, 7092155, 7092157, 7092159, 7092161, 7092163, 7092164, 7092166, 7092168, 7092170, 7092172, ],
    HESHUAN_PLAYIDS_G: [7092188, 7092190, 7092192, 7092194, 7092197, 7092199, 7092201, 7092203, 7092205, 7092206, 7092208, 7092210, 7092212, 7092214, 7092216, 7092217, 7092219, 7092221, 7092223, 7092225, 7092226, 7092228, 7092230, 7092232, 7092234, ],
    HESHUAN_PLAYIDS_H: [7092250, 7092252, 7092254, 7092256, 7092259, 7092261, 7092263, 7092265, 7092267, 7092268, 7092270, 7092272, 7092274, 7092276, 7092278, 7092279, 7092281, 7092283, 7092285, 7092287, 7092288, 7092290, 7092292, 7092294, 7092296, ],
    HESHUAN_PLAYIDS_I: [7092312, 7092314, 7092316, 7092318, 7092321, 7092323, 7092325, 7092327, 7092329, 7092330, 7092332, 7092334, 7092336, 7092338, 7092340, 7092341, 7092343, 7092345, 7092347, 7092349, 7092350, 7092352, 7092354, 7092356, 7092358, ],
    DAMA_PLAYIDS_A: [708525, 708526, 708527, 708528, 708529, 708530, 708531, 708532, 708533, 708534, 708535, 708536, 708537, 708538, 708539, 708540, 708541, 708542, 708543, 708544, 708545, 708546, 708547, 708548, 708549],
    DAMA_PLAYIDS_B: [708574, 708575, 708576, 708577, 708578, 708579, 708580, 708581, 708582, 708583, 708584, 708585, 708586, 708587, 708588, 708589, 708590, 708591, 708592, 708593, 708594, 708595, 708596, 708597, 708598],
    DAMA_PLAYIDS_C: [709125, 709126, 709127, 709128, 709129, 709130, 709131, 709132, 709133, 709134, 709135, 709136, 709137, 709138, 709139, 709140, 709141, 709142, 709143, 709144, 709145, 709146, 709147, 709148, 709149],
    DAMA_PLAYIDS_D: [7092025, 7092026, 7092027, 7092028, 7092029, 7092030, 7092031, 7092032, 7092033, 7092034, 7092035, 7092036, 7092037, 7092038, 7092039, 7092040, 7092041, 7092042, 7092043, 7092044, 7092045, 7092046, 7092047, 7092048, 7092049],
    DAMA_PLAYIDS_E: [7092087, 7092088, 7092089, 7092090, 7092091, 7092092, 7092093, 7092094, 7092095, 7092096, 7092097, 7092098, 7092099, 7092100, 7092101, 7092102, 7092103, 7092104, 7092105, 7092106, 7092107, 7092108, 7092109, 7092110, 7092111, ],
    DAMA_PLAYIDS_F: [7092149, 7092150, 7092151, 7092152, 7092153, 7092154, 7092155, 7092156, 7092157, 7092158, 7092159, 7092160, 7092161, 7092162, 7092163, 7092164, 7092165, 7092166, 7092167, 7092168, 7092169, 7092170, 7092171, 7092172, 7092173, ],
    DAMA_PLAYIDS_G: [7092211, 7092212, 7092213, 7092214, 7092215, 7092216, 7092217, 7092218, 7092219, 7092220, 7092221, 7092222, 7092223, 7092224, 7092225, 7092226, 7092227, 7092228, 7092229, 7092230, 7092231, 7092232, 7092233, 7092234, 7092235, ],
    DAMA_PLAYIDS_H: [7092273, 7092274, 7092275, 7092276, 7092277, 7092278, 7092279, 7092280, 7092281, 7092282, 7092283, 7092284, 7092285, 7092286, 7092287, 7092288, 7092289, 7092290, 7092291, 7092292, 7092293, 7092294, 7092295, 7092296, 7092297, ],
    DAMA_PLAYIDS_I: [7092335, 7092336, 7092337, 7092338, 7092339, 7092340, 7092341, 7092342, 7092343, 7092344, 7092345, 7092346, 7092347, 7092348, 7092349, 7092350, 7092351, 7092352, 7092353, 7092354, 7092355, 7092356, 7092357, 7092358, 7092359, ],
    XIAOMA_PLAYIDS_A: [708501, 708502, 708503, 708504, 708505, 708506, 708507, 708508, 708509, 708510, 708511, 708512, 708513, 708514, 708515, 708516, 708517, 708518, 708519, 708520, 708521, 708522, 708523, 708524],
    XIAOMA_PLAYIDS_B: [708550, 708551, 708552, 708553, 708554, 708555, 708556, 708557, 708558, 708559, 708560, 708561, 708562, 708563, 708564, 708565, 708566, 708567, 708568, 708569, 708570, 708571, 708572, 708573],
    XIAOMA_PLAYIDS_C: [709101, 709102, 709103, 709104, 709105, 709106, 709107, 709108, 709109, 709110, 709111, 709112, 709113, 709114, 709115, 709116, 709117, 709118, 709119, 709120, 709121, 709122, 709123, 709124],
    XIAOMA_PLAYIDS_D: [7092001, 7092002, 7092003, 7092004, 7092005, 7092006, 7092007, 7092008, 7092009, 7092010, 7092011, 7092012, 7092013, 7092014, 7092015, 7092016, 7092017, 7092018, 7092019, 7092020, 7092021, 7092022, 7092023, 7092024],
    XIAOMA_PLAYIDS_E: [7092063, 7092064, 7092065, 7092066, 7092067, 7092068, 7092069, 7092070, 7092071, 7092072, 7092073, 7092074, 7092075, 7092076, 7092077, 7092078, 7092079, 7092080, 7092081, 7092082, 7092083, 7092084, 7092085, 7092086, ],
    XIAOMA_PLAYIDS_F: [7092125, 7092126, 7092127, 7092128, 7092129, 7092130, 7092131, 7092132, 7092133, 7092134, 7092135, 7092136, 7092137, 7092138, 7092139, 7092140, 7092141, 7092142, 7092143, 7092144, 7092145, 7092146, 7092147, 7092148, ],
    XIAOMA_PLAYIDS_G: [7092187, 7092188, 7092189, 7092190, 7092191, 7092192, 7092193, 7092194, 7092195, 7092196, 7092197, 7092198, 7092199, 7092200, 7092201, 7092202, 7092203, 7092204, 7092205, 7092206, 7092207, 7092208, 7092209, 7092210, ],
    XIAOMA_PLAYIDS_H: [7092249, 7092250, 7092251, 7092252, 7092253, 7092254, 7092255, 7092256, 7092257, 7092258, 7092259, 7092260, 7092261, 7092262, 7092263, 7092264, 7092265, 7092266, 7092267, 7092268, 7092269, 7092270, 7092271, 7092272, ],
    XIAOMA_PLAYIDS_I: [7092311, 7092312, 7092313, 7092314, 7092315, 7092316, 7092317, 7092318, 7092319, 7092320, 7092321, 7092322, 7092323, 7092324, 7092325, 7092326, 7092327, 7092328, 7092329, 7092330, 7092331, 7092332, 7092333, 7092334, ],
    DADAN_PLAYIDS_A: [708525, 708527, 708529, 708531, 708533, 708535, 708537, 708539, 708541, 708543, 708545, 708547, 708549],
    DADAN_PLAYIDS_B: [708574, 708576, 708578, 708580, 708582, 708584, 708586, 708588, 708590, 708592, 708594, 708596, 708598],
    DADAN_PLAYIDS_C: [709125, 709127, 709129, 709131, 709133, 709135, 709137, 709139, 709141, 709143, 709145, 709147, 709149],
    DADAN_PLAYIDS_D: [7092025, 7092027, 7092029, 7092031, 7092033, 7092035, 7092037, 7092039, 7092041, 7092043, 7092045, 7092047, 7092049],
    DADAN_PLAYIDS_E: [7092087, 7092089, 7092091, 7092093, 7092095, 7092097, 7092099, 7092101, 7092103, 7092105, 7092107, 7092109, 7092111, ],
    DADAN_PLAYIDS_F: [7092149, 7092151, 7092153, 7092155, 7092157, 7092159, 7092161, 7092163, 7092165, 7092167, 7092169, 7092171, 7092173, ],
    DADAN_PLAYIDS_G: [7092211, 7092213, 7092215, 7092217, 7092219, 7092221, 7092223, 7092225, 7092227, 7092229, 7092231, 7092233, 7092235, ],
    DADAN_PLAYIDS_H: [7092273, 7092275, 7092277, 7092279, 7092281, 7092283, 7092285, 7092287, 7092289, 7092291, 7092293, 7092295, 7092297, ],
    DADAN_PLAYIDS_I: [7092335, 7092337, 7092339, 7092341, 7092343, 7092345, 7092347, 7092349, 7092351, 7092353, 7092355, 7092357, 7092359, ],
    DASHUAN_PLAYIDS_A: [708526, 708528, 708530, 708532, 708534, 708536, 708538, 708540, 708542, 708544, 708546, 708548],
    DASHUAN_PLAYIDS_B: [708575, 708577, 708579, 708581, 708583, 708585, 708587, 708589, 708591, 708593, 708595, 708597],
    DASHUAN_PLAYIDS_C: [709126, 709128, 709130, 709132, 709134, 709136, 709138, 709140, 709142, 709144, 709146, 709148],
    DASHUAN_PLAYIDS_D: [7092026, 7092028, 7092030, 7092032, 7092034, 7092036, 7092038, 7092040, 7092042, 7092044, 7092046, 7092048],
    DASHUAN_PLAYIDS_E: [7092088, 7092090, 7092092, 7092094, 7092096, 7092098, 7092100, 7092102, 7092104, 7092106, 7092108, 7092110, ],
    DASHUAN_PLAYIDS_F: [7092150, 7092152, 7092154, 7092156, 7092158, 7092160, 7092162, 7092164, 7092166, 7092168, 7092170, 7092172, ],
    DASHUAN_PLAYIDS_G: [7092212, 7092214, 7092216, 7092218, 7092220, 7092222, 7092224, 7092226, 7092228, 7092230, 7092232, 7092234, ],
    DASHUAN_PLAYIDS_H: [7092274, 7092276, 7092278, 7092280, 7092282, 7092284, 7092286, 7092288, 7092290, 7092292, 7092294, 7092296, ],
    DASHUAN_PLAYIDS_I: [7092336, 7092338, 7092340, 7092342, 7092344, 7092346, 7092348, 7092350, 7092352, 7092354, 7092356, 7092358, ],
    HEDA_PLAYIDS_A: [708507, 708508, 708509, 708516, 708517, 708518, 708519, 708525, 708526, 708527, 708528, 708529, 708533, 708534, 708535, 708536, 708537, 708538, 708539, 708543, 708544, 708545, 708546, 708547, 708548, 708549],
    HEDA_PLAYIDS_B: [708556, 708557, 708558, 708565, 708566, 708567, 708568, 708574, 708575, 708576, 708577, 708578, 708582, 708583, 708584, 708585, 708586, 708587, 708588, 708592, 708593, 708594, 708595, 708596, 708597, 708598],
    HEDA_PLAYIDS_C: [709107, 709108, 709109, 709116, 709117, 709118, 709119, 709125, 709126, 709127, 709128, 709129, 709133, 709134, 709135, 709136, 709137, 709138, 709139, 709143, 709144, 709145, 709146, 709147, 709148, 709149],
    HEDA_PLAYIDS_D: [7092007, 7092008, 7092009, 7092016, 7092017, 7092018, 7092019, 7092025, 7092026, 7092027, 7092028, 7092029, 7092033, 7092034, 7092035, 7092036, 7092037, 7092038, 7092039, 7092043, 7092044, 7092045, 7092046, 7092047, 7092048, 7092049],
    HEDA_PLAYIDS_E: [7092069, 7092070, 7092071, 7092078, 7092079, 7092080, 7092081, 7092087, 7092088, 7092089, 7092090, 7092091, 7092095, 7092096, 7092097, 7092098, 7092099, 7092100, 7092101, 7092105, 7092106, 7092107, 7092108, 7092109, 7092110, 7092111, ],
    HEDA_PLAYIDS_F: [7092131, 7092132, 7092133, 7092140, 7092141, 7092142, 7092143, 7092149, 7092150, 7092151, 7092152, 7092153, 7092157, 7092158, 7092159, 7092160, 7092161, 7092162, 7092163, 7092167, 7092168, 7092169, 7092170, 7092171, 7092172, 7092173, ],
    HEDA_PLAYIDS_G: [7092193, 7092194, 7092195, 7092202, 7092203, 7092204, 7092205, 7092211, 7092212, 7092213, 7092214, 7092215, 7092219, 7092220, 7092221, 7092222, 7092223, 7092224, 7092225, 7092229, 7092230, 7092231, 7092232, 7092233, 7092234, 7092235, ],
    HEDA_PLAYIDS_H: [7092255, 7092256, 7092257, 7092264, 7092265, 7092266, 7092267, 7092273, 7092274, 7092275, 7092276, 7092277, 7092281, 7092282, 7092283, 7092284, 7092285, 7092286, 7092287, 7092291, 7092292, 7092293, 7092294, 7092295, 7092296, 7092297, ],
    HEDA_PLAYIDS_I: [7092317, 7092318, 7092319, 7092326, 7092327, 7092328, 7092329, 7092335, 7092336, 7092337, 7092338, 7092339, 7092343, 7092344, 7092345, 7092346, 7092347, 7092348, 7092349, 7092353, 7092354, 7092355, 7092356, 7092357, 7092358, 7092359, ],
    HEXIAO_PLAYIDS_A: [708501, 708502, 708503, 708504, 708505, 708506, 708510, 708511, 708512, 708513, 708514, 708515, 708520, 708521, 708522, 708523, 708524, 708530, 708531, 708532, 708540, 708541, 708542],
    HEXIAO_PLAYIDS_B: [708550, 708551, 708552, 708553, 708554, 708555, 708559, 708560, 708561, 708562, 708563, 708564, 708569, 708570, 708571, 708572, 708573, 708579, 708580, 708581, 708589, 708590, 708591],
    HEXIAO_PLAYIDS_C: [709101, 709102, 709103, 709104, 709105, 709106, 709110, 709111, 709112, 709113, 709114, 709115, 709120, 709121, 709122, 709123, 709124, 709130, 709131, 709132, 709140, 709141, 709142],
    HEXIAO_PLAYIDS_D: [7092001, 7092002, 7092003, 7092004, 7092005, 7092006, 7092010, 7092011, 7092012, 7092013, 7092014, 7092015, 7092020, 7092021, 7092022, 7092023, 7092024, 7092030, 7092031, 7092032, 7092040, 7092041, 7092042],
    HEXIAO_PLAYIDS_E: [7092063, 7092064, 7092065, 7092066, 7092067, 7092068, 7092072, 7092073, 7092074, 7092075, 7092076, 7092077, 7092082, 7092083, 7092084, 7092085, 7092086, 7092092, 7092093, 7092094, 7092102, 7092103, 7092104, ],
    HEXIAO_PLAYIDS_F: [7092125, 7092126, 7092127, 7092128, 7092129, 7092130, 7092134, 7092135, 7092136, 7092137, 7092138, 7092139, 7092144, 7092145, 7092146, 7092147, 7092148, 7092154, 7092155, 7092156, 7092164, 7092165, 7092166, ],
    HEXIAO_PLAYIDS_G: [7092187, 7092188, 7092189, 7092190, 7092191, 7092192, 7092196, 7092197, 7092198, 7092199, 7092200, 7092201, 7092206, 7092207, 7092208, 7092209, 7092210, 7092216, 7092217, 7092218, 7092226, 7092227, 7092228, ],
    HEXIAO_PLAYIDS_H: [7092249, 7092250, 7092251, 7092252, 7092253, 7092254, 7092258, 7092259, 7092260, 7092261, 7092262, 7092263, 7092268, 7092269, 7092270, 7092271, 7092272, 7092278, 7092279, 7092280, 7092288, 7092289, 7092290, ],
    HEXIAO_PLAYIDS_I: [7092311, 7092312, 7092313, 7092314, 7092315, 7092316, 7092320, 7092321, 7092322, 7092323, 7092324, 7092325, 7092330, 7092331, 7092332, 7092333, 7092334, 7092340, 7092341, 7092342, 7092350, 7092351, 7092352, ],
    LINTOU_PLAYIDS_A: [708501, 708502, 708503, 708504, 708505, 708506, 708507, 708508, 708509],
    LINTOU_PLAYIDS_B: [708550, 708551, 708552, 708553, 708554, 708555, 708556, 708557, 708558],
    LINTOU_PLAYIDS_C: [709101, 709102, 709103, 709104, 709105, 709106, 709107, 709108, 709109],
    LINTOU_PLAYIDS_D: [7092001, 7092002, 7092003, 7092004, 7092005, 7092006, 7092007, 7092008, 7092009],
    LINTOU_PLAYIDS_E: [7092063, 7092064, 7092065, 7092066, 7092067, 7092068, 7092069, 7092070, 7092071, ],
    LINTOU_PLAYIDS_F: [7092125, 7092126, 7092127, 7092128, 7092129, 7092130, 7092131, 7092132, 7092133, ],
    LINTOU_PLAYIDS_G: [7092187, 7092188, 7092189, 7092190, 7092191, 7092192, 7092193, 7092194, 7092195, ],
    LINTOU_PLAYIDS_H: [7092249, 7092250, 7092251, 7092252, 7092253, 7092254, 7092255, 7092256, 7092257, ],
    LINTOU_PLAYIDS_I: [7092311, 7092312, 7092313, 7092314, 7092315, 7092316, 7092317, 7092318, 7092319, ],
    LINWEI_PLAYIDS_A: [708510, 708520, 708530, 708540],
    LINWEI_PLAYIDS_B: [708559, 708569, 708579, 708589],
    LINWEI_PLAYIDS_C: [709110, 709120, 709130, 709140],
    LINWEI_PLAYIDS_D: [7092010, 7092020, 7092030, 7092040],
    LINWEI_PLAYIDS_E: [7092072, 7092082, 7092092, 7092102, ],
    LINWEI_PLAYIDS_F: [7092134, 7092144, 7092154, 7092164, ],
    LINWEI_PLAYIDS_G: [7092196, 7092206, 7092216, 7092226, ],
    LINWEI_PLAYIDS_H: [7092258, 7092268, 7092278, 7092288, ],
    LINWEI_PLAYIDS_I: [7092320, 7092330, 7092340, 7092350, ],
    WUWEI_PLAYIDS_A: [708505, 708515, 708525, 708535, 708545],
    WUWEI_PLAYIDS_B: [708554, 708564, 708574, 708584, 708594],
    WUWEI_PLAYIDS_C: [709105, 709115, 709125, 709135, 709145],
    WUWEI_PLAYIDS_D: [7092005, 7092015, 7092025, 7092035, 7092045],
    WUWEI_PLAYIDS_E: [7092067, 7092077, 7092087, 7092097, 7092107, ],
    WUWEI_PLAYIDS_F: [7092129, 7092139, 7092149, 7092159, 7092169, ],
    WUWEI_PLAYIDS_G: [7092191, 7092201, 7092211, 7092221, 7092231, ],
    WUWEI_PLAYIDS_H: [7092253, 7092263, 7092273, 7092283, 7092293, ],
    WUWEI_PLAYIDS_I: [7092315, 7092325, 7092335, 7092345, 7092355, ],
    YITOU_PLAYIDS_A: [708510, 708511, 708512, 708513, 708514, 708515, 708516, 708517, 708518, 708519],
    YITOU_PLAYIDS_B: [708559, 708560, 708561, 708562, 708563, 708564, 708565, 708566, 708567, 708568],
    YITOU_PLAYIDS_C: [709110, 709111, 709112, 709113, 709114, 709115, 709116, 709117, 709118, 709119],
    YITOU_PLAYIDS_D: [7092010, 7092011, 7092012, 7092013, 7092014, 7092015, 7092016, 7092017, 7092018, 7092019],
    YITOU_PLAYIDS_E: [7092072, 7092073, 7092074, 7092075, 7092076, 7092077, 7092078, 7092079, 7092080, 7092081, ],
    YITOU_PLAYIDS_F: [7092134, 7092135, 7092136, 7092137, 7092138, 7092139, 7092140, 7092141, 7092142, 7092143, ],
    YITOU_PLAYIDS_G: [7092196, 7092197, 7092198, 7092199, 7092200, 7092201, 7092202, 7092203, 7092204, 7092205, ],
    YITOU_PLAYIDS_H: [7092258, 7092259, 7092260, 7092261, 7092262, 7092263, 7092264, 7092265, 7092266, 7092267, ],
    YITOU_PLAYIDS_I: [7092320, 7092321, 7092322, 7092323, 7092324, 7092325, 7092326, 7092327, 7092328, 7092329, ],
    YIWEI_PLAYIDS_A: [708501, 708511, 708521, 708531, 708541],
    YIWEI_PLAYIDS_B: [708550, 708560, 708570, 708580, 708590],
    YIWEI_PLAYIDS_C: [709101, 709111, 709121, 709131, 709141],
    YIWEI_PLAYIDS_D: [7092001, 7092011, 7092021, 7092031, 7092041],
    YIWEI_PLAYIDS_E: [7092063, 7092073, 7092083, 7092093, 7092103, ],
    YIWEI_PLAYIDS_F: [7092125, 7092135, 7092145, 7092155, 7092165, ],
    YIWEI_PLAYIDS_G: [7092187, 7092197, 7092207, 7092217, 7092227, ],
    YIWEI_PLAYIDS_H: [7092249, 7092259, 7092269, 7092279, 7092289, ],
    YIWEI_PLAYIDS_I: [7092311, 7092321, 7092331, 7092341, 7092351, ],
    ERTOU_PLAYIDS_A: [708520, 708521, 708522, 708523, 708524, 708525, 708526, 708527, 708528, 708529],
    ERTOU_PLAYIDS_B: [708569, 708570, 708571, 708572, 708573, 708574, 708575, 708576, 708577, 708578],
    ERTOU_PLAYIDS_C: [709120, 709121, 709122, 709123, 709124, 709125, 709126, 709127, 709128, 709129],
    ERTOU_PLAYIDS_D: [7092020, 7092021, 7092022, 7092023, 7092024, 7092025, 7092026, 7092027, 7092028, 7092029, ],
    ERTOU_PLAYIDS_E: [7092082, 7092083, 7092084, 7092085, 7092086, 7092087, 7092088, 7092089, 7092090, 7092091, ],
    ERTOU_PLAYIDS_F: [7092144, 7092145, 7092146, 7092147, 7092148, 7092149, 7092150, 7092151, 7092152, 7092153, ],
    ERTOU_PLAYIDS_G: [7092206, 7092207, 7092208, 7092209, 7092210, 7092211, 7092212, 7092213, 7092214, 7092215, ],
    ERTOU_PLAYIDS_H: [7092268, 7092269, 7092270, 7092271, 7092272, 7092273, 7092274, 7092275, 7092276, 7092277, ],
    ERTOU_PLAYIDS_I: [7092330, 7092331, 7092332, 7092333, 7092334, 7092335, 7092336, 7092337, 7092338, 7092339, ],
    ERWEI_PLAYIDS_A: [708502, 708512, 708522, , 708532, 708542],
    ERWEI_PLAYIDS_B: [708551, 708561, 708571, 708581, 708591],
    ERWEI_PLAYIDS_C: [709102, 709112, 709122, , 709132, 709142],
    ERWEI_PLAYIDS_D: [7092002, 7092012, 7092022, 7092032, 7092042],
    ERWEI_PLAYIDS_E: [7092064, 7092074, 7092084, 7092094, 7092104, ],
    ERWEI_PLAYIDS_F: [7092126, 7092136, 7092146, 7092156, 7092166, ],
    ERWEI_PLAYIDS_G: [7092188, 7092198, 7092208, 7092218, 7092228, ],
    ERWEI_PLAYIDS_H: [7092250, 7092260, 7092270, 7092280, 7092290, ],
    ERWEI_PLAYIDS_I: [7092312, 7092322, 7092332, 7092342, 7092352, ],
    SANTOU_PLAYIDS_A: [708530, 708531, 708532, 708533, 708534, 708535, 708536, 708537, 708538, 708539],
    SANTOU_PLAYIDS_B: [708579, 708580, 708581, 708582, 708583, 708584, 708585, 708586, 708587, 708588],
    SANTOU_PLAYIDS_C: [709130, 709131, 709132, 709133, 709134, 709135, 709136, 709137, 709138, 709139],
    SANTOU_PLAYIDS_D: [7092030, 7092031, 7092032, 7092033, 7092034, 7092035, 7092036, 7092037, 7092038, 7092039],
    SANTOU_PLAYIDS_E: [7092092, 7092093, 7092094, 7092095, 7092096, 7092097, 7092098, 7092099, 7092100, 7092101, ],
    SANTOU_PLAYIDS_F: [7092154, 7092155, 7092156, 7092157, 7092158, 7092159, 7092160, 7092161, 7092162, 7092163, ],
    SANTOU_PLAYIDS_G: [7092216, 7092217, 7092218, 7092219, 7092220, 7092221, 7092222, 7092223, 7092224, 7092225, ],
    SANTOU_PLAYIDS_H: [7092278, 7092279, 7092280, 7092281, 7092282, 7092283, 7092284, 7092285, 7092286, 7092287, ],
    SANTOU_PLAYIDS_I: [7092340, 7092341, 7092342, 7092343, 7092344, 7092345, 7092346, 7092347, 7092348, 7092349, ],
    SANWEI_PLAYIDS_A: [708503, 708513, 708523, 708533, 708543],
    SANWEI_PLAYIDS_B: [708552, 708562, 708572, 708582, 708592],
    SANWEI_PLAYIDS_C: [709103, 709113, 709123, 709133, 709143],
    SANWEI_PLAYIDS_D: [7092003, 7092013, 7092023, 7092033, 7092043],
    SANWEI_PLAYIDS_E: [7092065, 7092075, 7092085, 7092095, 7092105, ],
    SANWEI_PLAYIDS_F: [7092127, 7092137, 7092147, 7092157, 7092167, ],
    SANWEI_PLAYIDS_G: [7092189, 7092199, 7092209, 7092219, 7092229, ],
    SANWEI_PLAYIDS_H: [7092251, 7092261, 7092271, 7092281, 7092291, ],
    SANWEI_PLAYIDS_I: [7092313, 7092323, 7092333, 7092343, 7092353, ],
    SITOU_PLAYIDS_A: [708540, 708541, 708542, 708543, 708544, 708545, 708546, 708547, 708548, 708549],
    SITOU_PLAYIDS_B: [708589, 708590, 708591, 708592, 708593, 708594, 708595, 708596, 708597, 708598, ],
    SITOU_PLAYIDS_C: [709140, 709141, 709142, 709143, 709144, 709145, 709146, 709147, 709148, 709149],
    SITOU_PLAYIDS_D: [7092040, 7092041, 7092042, 7092043, 7092044, 7092045, 7092046, 7092047, 7092048, 7092049],
    SITOU_PLAYIDS_E: [7092102, 7092103, 7092104, 7092105, 7092106, 7092107, 7092108, 7092109, 7092110, 7092111, ],
    SITOU_PLAYIDS_F: [7092164, 7092165, 7092166, 7092167, 7092168, 7092169, 7092170, 7092171, 7092172, 7092173, ],
    SITOU_PLAYIDS_G: [7092226, 7092227, 7092228, 7092229, 7092230, 7092231, 7092232, 7092233, 7092234, 7092235, ],
    SITOU_PLAYIDS_H: [7092288, 7092289, 7092290, 7092291, 7092292, 7092293, 7092294, 7092295, 7092296, 7092297, ],
    SITOU_PLAYIDS_I: [7092350, 7092351, 7092352, 7092353, 7092354, 7092355, 7092356, 7092357, 7092358, 7092359, ],
    SIWEI_PLAYIDS_A: [708504, 708514, 708524, , 708534, 708544],
    SIWEI_PLAYIDS_B: [708553, 708563, 708573, 708583, 708593],
    SIWEI_PLAYIDS_C: [709104, 709114, 709124, , 709134, 709144],
    SIWEI_PLAYIDS_D: [7092004, 7092014, 7092024, , 7092034, 7092044],
    SIWEI_PLAYIDS_E: [7092066, 7092076, 7092086, 7092096, 7092106, ],
    SIWEI_PLAYIDS_F: [7092128, 7092138, 7092148, 7092158, 7092168, ],
    SIWEI_PLAYIDS_G: [7092190, 7092200, 7092210, 7092220, 7092230, ],
    SIWEI_PLAYIDS_H: [7092252, 7092262, 7092272, 7092282, 7092292, ],
    SIWEI_PLAYIDS_I: [7092314, 7092324, 7092334, 7092344, 7092354, ],
    LIUWEI_PLAYIDS_A: [708506, 708516, 708526, 708536, 708546],
    LIUWEI_PLAYIDS_B: [708555, 708565, 708575, 708585, 708595],
    LIUWEI_PLAYIDS_C: [709106, 709116, 709126, 709136, 709146],
    LIUWEI_PLAYIDS_D: [7092006, 7092016, 7092026, 7092036, 7092046],
    LIUWEI_PLAYIDS_E: [7092068, 7092078, 7092088, 7092098, 7092108, ],
    LIUWEI_PLAYIDS_F: [7092130, 7092140, 7092150, 7092160, 7092170, ],
    LIUWEI_PLAYIDS_G: [7092192, 7092202, 7092212, 7092222, 7092232, ],
    LIUWEI_PLAYIDS_H: [7092254, 7092264, 7092274, 7092284, 7092294, ],
    LIUWEI_PLAYIDS_I: [7092316, 7092326, 7092336, 7092346, 7092356, ],
    QIWEI_PLAYIDS_A: [708507, 708517, 708527, 708537, 708547],
    QIWEI_PLAYIDS_B: [708556, 708566, 708576, 708586, 708596],
    QIWEI_PLAYIDS_C: [709107, 709117, 709127, 709137, 709147],
    QIWEI_PLAYIDS_D: [7092007, 7092017, 7092027, 7092037, 7092047],
    QIWEI_PLAYIDS_E: [7092069, 7092079, 7092089, 7092099, 7092109],
    QIWEI_PLAYIDS_F: [7092131, 7092141, 7092151, 7092161, 7092171, ],
    QIWEI_PLAYIDS_G: [7092193, 7092203, 7092213, 7092223, 7092233, ],
    QIWEI_PLAYIDS_H: [7092255, 7092265, 7092275, 7092285, 7092295, ],
    QIWEI_PLAYIDS_I: [7092317, 7092327, 7092337, 7092347, 7092357, ],
    BAWEI_PLAYIDS_A: [708508, 708518, 708528, 708538, 708548],
    BAWEI_PLAYIDS_B: [708557, 708567, 708577, 708587, 708597],
    BAWEI_PLAYIDS_C: [709108, 709118, 709128, 709138, 709148],
    BAWEI_PLAYIDS_D: [7092008, 7092018, 7092028, 7092038, 7092048],
    BAWEI_PLAYIDS_E: [7092070, 7092080, 7092090, 7092100, 7092110, ],
    BAWEI_PLAYIDS_F: [7092132, 7092142, 7092152, 7092162, 7092172, ],
    BAWEI_PLAYIDS_G: [7092194, 7092204, 7092214, 7092224, 7092234, ],
    BAWEI_PLAYIDS_H: [7092256, 7092266, 7092276, 7092286, 7092296, ],
    BAWEI_PLAYIDS_I: [7092318, 7092328, 7092338, 7092348, 7092358, ],
    JIU_PLAYIDS_A: [708509, 708519, 708529, 708539, 708549],
    JIU_PLAYIDS_B: [708558, 708568, 708578, 708588, 708598],
    JIU_PLAYIDS_C: [709109, 709119, 709129, 709139, 709149],
    JIU_PLAYIDS_D: [7092009, 7092019, 7092029, 7092039, 7092049],
    JIU_PLAYIDS_E: [7092071, 7092081, 7092091, 7092101, 7092111, ],
    JIU_PLAYIDS_F: [7092133, 7092143, 7092153, 7092163, 7092173, ],
    JIU_PLAYIDS_G: [7092195, 7092205, 7092215, 7092225, 7092235, ],
    JIU_PLAYIDS_H: [7092257, 7092267, 7092277, 7092287, 7092297, ],
    JIU_PLAYIDS_I: [7092319, 7092329, 7092339, 7092349, 7092359, ],
    SHENXIAO_1_A: [708501, 708513, 708525, 708537, 708549],
    SHENXIAO_1_B: [708550, 708562, 708574, 708586, 708598],
    SHENXIAO_1_C: [709101, 709113, 709125, 709137, 709149],
    SHENXIAO_1_D: [7092001, 7092013, 7092025, 7092037, 7092049],
    SHENXIAO_1_E: [7092063, 7092075, 7092087, 7092099, 7092111, ],
    SHENXIAO_1_F: [7092125, 7092137, 7092149, 7092161, 7092173, ],
    SHENXIAO_1_G: [7092187, 7092199, 7092211, 7092223, 7092235, ],
    SHENXIAO_1_H: [7092249, 7092261, 7092273, 7092285, 7092297, ],
    SHENXIAO_1_I: [7092311, 7092323, 7092335, 7092347, 7092359, ],
    SHENXIAO_2_A: [708502, 708514, 708526, 708538],
    SHENXIAO_2_B: [708551, 708563, 708575, 708587],
    SHENXIAO_2_C: [709102, 709114, 709126, 709138],
    SHENXIAO_2_D: [7092002, 7092014, 7092026, 7092038],
    SHENXIAO_2_E: [7092064, 7092076, 7092088, 7092100, ],
    SHENXIAO_2_F: [7092126, 7092138, 7092150, 7092162, ],
    SHENXIAO_2_G: [7092188, 7092200, 7092212, 7092224, ],
    SHENXIAO_2_H: [7092250, 7092262, 7092274, 7092286, ],
    SHENXIAO_2_I: [7092312, 7092324, 7092336, 7092348, ],
    SHENXIAO_3_A: [708503, 708515, 708527, 708539],
    SHENXIAO_3_B: [708552, 708564, 708576, 708588],
    SHENXIAO_3_C: [709103, 709115, 709127, 709139],
    SHENXIAO_3_D: [7092003, 7092015, 7092027, 7092039],
    SHENXIAO_3_E: [7092065, 7092077, 7092089, 7092101, ],
    SHENXIAO_3_F: [7092127, 7092139, 7092151, 7092163, ],
    SHENXIAO_3_G: [7092189, 7092201, 7092213, 7092225, ],
    SHENXIAO_3_H: [7092251, 7092263, 7092275, 7092287, ],
    SHENXIAO_3_I: [7092313, 7092325, 7092337, 7092349, ],
    SHENXIAO_4_A: [708504, 708516, 708528, 708540],
    SHENXIAO_4_B: [708553, 708565, 708577, 708589],
    SHENXIAO_4_C: [709104, 709116, 709128, 709140],
    SHENXIAO_4_D: [7092004, 7092016, 7092028, 7092040],
    SHENXIAO_4_E: [7092066, 7092078, 7092090, 7092102, ],
    SHENXIAO_4_F: [7092128, 7092140, 7092152, 7092164, ],
    SHENXIAO_4_G: [7092190, 7092202, 7092214, 7092226, ],
    SHENXIAO_4_H: [7092252, 7092264, 7092276, 7092288, ],
    SHENXIAO_4_I: [7092314, 7092326, 7092338, 7092350, ],
    SHENXIAO_5_A: [708505, 708517, 708529, 708541],
    SHENXIAO_5_B: [708554, 708566, 708578, 708590],
    SHENXIAO_5_C: [709105, 709117, 709129, 709141],
    SHENXIAO_5_D: [7092005, 7092017, 7092029, 7092041],
    SHENXIAO_5_E: [7092067, 7092079, 7092091, 7092103, ],
    SHENXIAO_5_F: [7092129, 7092141, 7092153, 7092165, ],
    SHENXIAO_5_G: [7092191, 7092203, 7092215, 7092227, ],
    SHENXIAO_5_H: [7092253, 7092265, 7092277, 7092289, ],
    SHENXIAO_5_I: [7092315, 7092327, 7092339, 7092351, ],
    SHENXIAO_6_A: [708506, 708518, 708530, 708542],
    SHENXIAO_6_B: [708555, 708567, 708579, 708591],
    SHENXIAO_6_C: [709106, 709118, 709130, 709142],
    SHENXIAO_6_D: [7092006, 7092018, 7092030, 7092042],
    SHENXIAO_6_E: [7092068, 7092080, 7092092, 7092104, ],
    SHENXIAO_6_F: [7092130, 7092142, 7092154, 7092166, ],
    SHENXIAO_6_G: [7092192, 7092204, 7092216, 7092228, ],
    SHENXIAO_6_H: [7092254, 7092266, 7092278, 7092290, ],
    SHENXIAO_6_I: [7092316, 7092328, 7092340, 7092352, ],
    SHENXIAO_7_A: [708507, 708519, 708531, 708543],
    SHENXIAO_7_B: [708556, 708568, 708580, 708592],
    SHENXIAO_7_C: [709107, 709119, 709131, 709143],
    SHENXIAO_7_D: [7092007, 7092019, 7092031, 7092043],
    SHENXIAO_7_E: [7092069, 7092081, 7092093, 7092105, ],
    SHENXIAO_7_F: [7092131, 7092143, 7092155, 7092167, ],
    SHENXIAO_7_G: [7092193, 7092205, 7092217, 7092229, ],
    SHENXIAO_7_H: [7092255, 7092267, 7092279, 7092291, ],
    SHENXIAO_7_I: [7092317, 7092329, 7092341, 7092353, ],
    SHENXIAO_8_A: [708508, 708520, 708532, 708544],
    SHENXIAO_8_B: [708557, 708569, 708581, 708593],
    SHENXIAO_8_C: [709108, 709120, 709132, 709144],
    SHENXIAO_8_D: [7092008, 7092020, 7092032, 7092044],
    SHENXIAO_8_E: [7092070, 7092082, 7092094, 7092106, ],
    SHENXIAO_8_F: [7092132, 7092144, 7092156, 7092168, ],
    SHENXIAO_8_G: [7092194, 7092206, 7092218, 7092230, ],
    SHENXIAO_8_H: [7092256, 7092268, 7092280, 7092292, ],
    SHENXIAO_8_I: [7092318, 7092330, 7092342, 7092354, ],
    SHENXIAO_9_A: [708509, 708521, 708533, 708545],
    SHENXIAO_9_B: [708558, 708570, 708582, 708594],
    SHENXIAO_9_C: [709109, 709121, 709133, 709145],
    SHENXIAO_9_D: [7092009, 7092021, 7092033, 7092045],
    SHENXIAO_9_E: [7092071, 7092083, 7092095, 7092107, ],
    SHENXIAO_9_F: [7092133, 7092145, 7092157, 7092169, ],
    SHENXIAO_9_G: [7092195, 7092207, 7092219, 7092231, ],
    SHENXIAO_9_H: [7092257, 7092269, 7092281, 7092293, ],
    SHENXIAO_9_I: [7092319, 7092331, 7092343, 7092355, ],
    SHENXIAO_10_A: [708510, 708522, 708534, 708546],
    SHENXIAO_10_B: [708559, 708571, 708583, 708595],
    SHENXIAO_10_C: [709110, 709122, 709134, 709146],
    SHENXIAO_10_D: [7092010, 7092022, 7092034, 7092046],
    SHENXIAO_10_E: [7092072, 7092084, 7092096, 7092108, ],
    SHENXIAO_10_F: [7092134, 7092146, 7092158, 7092170, ],
    SHENXIAO_10_G: [7092196, 7092208, 7092220, 7092232, ],
    SHENXIAO_10_H: [7092258, 7092270, 7092282, 7092294, ],
    SHENXIAO_10_I: [7092320, 7092332, 7092344, 7092356, ],
    SHENXIAO_11_A: [708511, 708523, 708535, 708547],
    SHENXIAO_11_B: [708560, 708572, 708584, 708596],
    SHENXIAO_11_C: [709111, 709123, 709135, 709147],
    SHENXIAO_11_D: [7092011, 7092023, 7092035, 7092047],
    SHENXIAO_11_E: [7092073, 7092085, 7092097, 7092109, ],
    SHENXIAO_11_F: [7092135, 7092147, 7092159, 7092171, ],
    SHENXIAO_11_G: [7092197, 7092209, 7092221, 7092233, ],
    SHENXIAO_11_H: [7092259, 7092271, 7092283, 7092295, ],
    SHENXIAO_11_I: [7092321, 7092333, 7092345, 7092357, ],
    SHENXIAO_12_A: [708512, 708524, 708536, 708548],
    SHENXIAO_12_B: [708561, 708573, 708585, 708597],
    SHENXIAO_12_C: [709112, 709124, 709136, 709148],
    SHENXIAO_12_D: [7092012, 7092024, 7092036, 7092048],
    SHENXIAO_12_E: [7092074, 7092086, 7092098, 7092110, ],
    SHENXIAO_12_F: [7092136, 7092148, 7092160, 7092172, ],
    SHENXIAO_12_G: [7092198, 7092210, 7092222, 7092234, ],
    SHENXIAO_12_H: [7092260, 7092272, 7092284, 7092296, ],
    SHENXIAO_12_I: [7092322, 7092334, 7092346, 7092358, ],
    HONG_A: [708501, 708502, 708507, 708508, 708512, 708513, 708518, 708519, 708523, 708524, 708529, 708530, 708534, 708535, 708540, 708545, 708546],
    HONG_B: [708550, 708551, 708556, 708557, 708561, 708562, 708567, 708568, 708572, 708573, 708578, 708579, 708583, 708584, 708589, 708594, 708595],
    HONG_C: [709101, 709102, 709107, 709108, 709112, 709113, 709118, 709119, 709123, 709124, 709129, 709130, 709134, 709135, 709140, 709145, 709146],
    HONG_D: [7092001, 7092002, 7092007, 7092008, 7092012, 7092013, 7092018, 7092019, 7092023, 7092024, 7092029, 7092030, 7092034, 7092035, 7092040, 7092045, 7092046],
    HONG_E: [7092063, 7092064, 7092069, 7092070, 7092074, 7092075, 7092080, 7092081, 7092085, 7092086, 7092091, 7092092, 7092096, 7092097, 7092102, 7092107, 7092108, ],
    HONG_F: [7092125, 7092126, 7092131, 7092132, 7092136, 7092137, 7092142, 7092143, 7092147, 7092148, 7092153, 7092154, 7092158, 7092159, 7092164, 7092169, 7092170, ],
    HONG_G: [7092187, 7092188, 7092193, 7092194, 7092198, 7092199, 7092204, 7092205, 7092209, 7092210, 7092215, 7092216, 7092220, 7092221, 7092226, 7092231, 7092232, ],
    HONG_H: [7092249, 7092250, 7092255, 7092256, 7092260, 7092261, 7092266, 7092267, 7092271, 7092272, 7092277, 7092278, 7092282, 7092283, 7092288, 7092293, 7092294, ],
    HONG_I: [7092311, 7092312, 7092317, 7092318, 7092322, 7092323, 7092328, 7092329, 7092333, 7092334, 7092339, 7092340, 7092344, 7092345, 7092350, 7092355, 7092356, ],
    HONE_DAN_A: [708501, 708507, 708513, 708519, 708523, 708529, 708535, 708545],
    HONE_DAN_B: [708550, 708556, 708562, 708568, 708572, 708578, 708584, 708594],
    HONE_DAN_C: [709101, 709107, 709113, 709119, 709123, 709129, 709135, 709145],
    HONE_DAN_D: [7092001, 7092007, 7092013, 7092019, 7092023, 7092029, 7092035, 7092045],
    HONE_DAN_E: [7092063, 7092069, 7092075, 7092081, 7092085, 7092091, 7092097, 7092107, ],
    HONE_DAN_F: [7092125, 7092131, 7092137, 7092143, 7092147, 7092153, 7092159, 7092169, ],
    HONE_DAN_G: [7092187, 7092193, 7092199, 7092205, 7092209, 7092215, 7092221, 7092231, ],
    HONE_DAN_H: [7092249, 7092255, 7092261, 7092267, 7092271, 7092277, 7092283, 7092293, ],
    HONE_DAN_I: [7092311, 7092317, 7092323, 7092329, 7092333, 7092339, 7092345, 7092355, ],
    HONE_SHUAN_A: [708502, 708508, 708512, 708518, 708524, 708530, 708534, 708540, 708546],
    HONE_SHUAN_B: [708551, 708557, 708561, 708567, 708573, 708579, 708583, 708589, 708595],
    HONE_SHUAN_C: [709102, 709108, 709112, 709118, 709124, 709130, 709134, 709140, 709146],
    HONE_SHUAN_D: [7092002, 7092008, 7092012, 7092018, 7092024, 7092030, 7092034, 7092040, 7092046],
    HONE_SHUAN_E: [7092064, 7092070, 7092074, 7092080, 7092086, 7092092, 7092096, 7092102, 7092108, ],
    HONE_SHUAN_F: [7092126, 7092132, 7092136, 7092142, 7092148, 7092154, 7092158, 7092164, 7092170, ],
    HONE_SHUAN_G: [7092188, 7092194, 7092198, 7092204, 7092210, 7092216, 7092220, 7092226, 7092232, ],
    HONE_SHUAN_H: [7092250, 7092256, 7092260, 7092266, 7092272, 7092278, 7092282, 7092288, 7092294, ],
    HONE_SHUAN_I: [7092312, 7092318, 7092322, 7092328, 7092334, 7092340, 7092344, 7092350, 7092356, ],
    HONE_XIAO_A: [708501, 708502, 708507, 708508, 708512, 708513, 708518, 708519, 708523, 708524],
    HONE_XIAO_B: [708550, 708551, 708556, 708557, 708561, 708562, 708567, 708568, 708572, 708573],
    HONE_XIAO_C: [709101, 709102, 709107, 709108, 709112, 709113, 709118, 709119, 709123, 709124],
    HONE_XIAO_D: [7092001, 7092002, 7092007, 7092008, 7092012, 7092013, 7092018, 7092019, 7092023, 7092024],
    HONE_XIAO_E: [7092063, 7092064, 7092069, 7092070, 7092074, 7092075, 7092080, 7092081, 7092085, 7092086, ],
    HONE_XIAO_F: [7092125, 7092126, 7092131, 7092132, 7092136, 7092137, 7092142, 7092143, 7092147, 7092148, ],
    HONE_XIAO_G: [7092187, 7092188, 7092193, 7092194, 7092198, 7092199, 7092204, 7092205, 7092209, 7092210, ],
    HONE_XIAO_H: [7092249, 7092250, 7092255, 7092256, 7092260, 7092261, 7092266, 7092267, 7092271, 7092272, ],
    HONE_XIAO_I: [7092311, 7092312, 7092317, 7092318, 7092322, 7092323, 7092328, 7092329, 7092333, 7092334, ],
    HONE_DA_A: [708529, 708530, 708534, 708535, 708540, 708545, 708546],
    HONE_DA_B: [708578, 708579, 708583, 708584, 708589, 708594, 708595],
    HONE_DA_C: [709129, 709130, 709134, 709135, 709140, 709145, 709146],
    HONE_DA_D: [7092029, 7092030, 7092034, 7092035, 7092040, 7092045, 7092046],
    HONE_DA_E: [7092091, 7092092, 7092096, 7092097, 7092102, 7092107, 7092108, ],
    HONE_DA_F: [7092153, 7092154, 7092158, 7092159, 7092164, 7092169, 7092170, ],
    HONE_DA_G: [7092215, 7092216, 7092220, 7092221, 7092226, 7092231, 7092232, ],
    HONE_DA_H: [7092277, 7092278, 7092282, 7092283, 7092288, 7092293, 7092294, ],
    HONE_DA_I: [7092339, 7092340, 7092344, 7092345, 7092350, 7092355, 7092356, ],
    LAN_A: [708503, 708504, 708509, 708510, 708514, 708515, 708520, 708525, 708526, 708531, 708536, 708537, 708541, 708542, 708547, 708548],
    LAN_B: [708552, 708553, 708558, 708559, 708563, 708564, 708569, 708574, 708575, 708580, 708585, 708586, 708590, 708591, 708596, 708597],
    LAN_C: [709103, 709104, 709109, 709110, 709114, 709115, 709120, 709125, 709126, 709131, 709136, 709137, 709141, 709142, 709147, 709148],
    LAN_D: [7092003, 7092004, 7092009, 7092010, 7092014, 7092015, 7092020, 7092025, 7092026, 7092031, 7092036, 7092037, 7092041, 7092042, 7092047, 7092048],
    LAN_E: [7092065, 7092066, 7092071, 7092072, 7092076, 7092077, 7092082, 7092087, 7092088, 7092093, 7092098, 7092099, 7092103, 7092104, 7092109, 7092110, ],
    LAN_F: [7092127, 7092128, 7092133, 7092134, 7092138, 7092139, 7092144, 7092149, 7092150, 7092155, 7092160, 7092161, 7092165, 7092166, 7092171, 7092172, ],
    LAN_G: [7092189, 7092190, 7092195, 7092196, 7092200, 7092201, 7092206, 7092211, 7092212, 7092217, 7092222, 7092223, 7092227, 7092228, 7092233, 7092234, ],
    LAN_H: [7092251, 7092252, 7092257, 7092258, 7092262, 7092263, 7092268, 7092273, 7092274, 7092279, 7092284, 7092285, 7092289, 7092290, 7092295, 7092296, ],
    LAN_I: [7092313, 7092314, 7092319, 7092320, 7092324, 7092325, 7092330, 7092335, 7092336, 7092341, 7092346, 7092347, 7092351, 7092352, 7092357, 7092358, ],
    LAN_DAN_A: [708503, 708509, 708515, 708525, 708531, 708537, 708541, 708547],
    LAN_DAN_B: [708552, 708558, 708564, 708574, 708580, 708586, 708590, 708596],
    LAN_DAN_C: [709103, 709109, 709115, 709125, 709131, 709137, 709141, 709147],
    LAN_DAN_D: [7092003, 7092009, 7092015, 7092025, 7092031, 7092037, 7092041, 7092047],
    LAN_DAN_E: [7092065, 7092071, 7092077, 7092087, 7092093, 7092099, 7092103, 7092109, ],
    LAN_DAN_F: [7092127, 7092133, 7092139, 7092149, 7092155, 7092161, 7092165, 7092171, ],
    LAN_DAN_G: [7092189, 7092195, 7092201, 7092211, 7092217, 7092223, 7092227, 7092233, ],
    LAN_DAN_H: [7092251, 7092257, 7092263, 7092273, 7092279, 7092285, 7092289, 7092295, ],
    LAN_DAN_I: [7092313, 7092319, 7092325, 7092335, 7092341, 7092347, 7092351, 7092357, ],
    LAN_SHUAN_A: [708504, 708510, 708514, 708520, 708526, 708536, 708542, 708548],
    LAN_SHUAN_B: [708553, 708559, 708563, 708569, 708575, 708585, 708591, 708597],
    LAN_SHUAN_C: [709104, 709110, 709114, 709120, 709126, 709136, 709142, 709148],
    LAN_SHUAN_D: [7092004, 7092010, 7092014, 7092020, 7092026, 7092036, 7092042, 7092048],
    LAN_SHUAN_E: [7092066, 7092072, 7092076, 7092082, 7092088, 7092098, 7092104, 7092110, ],
    LAN_SHUAN_F: [7092128, 7092134, 7092138, 7092144, 7092150, 7092160, 7092166, 7092172, ],
    LAN_SHUAN_G: [7092190, 7092196, 7092200, 7092206, 7092212, 7092222, 7092228, 7092234, ],
    LAN_SHUAN_H: [7092252, 7092258, 7092262, 7092268, 7092274, 7092284, 7092290, 7092296, ],
    LAN_SHUAN_I: [7092314, 7092320, 7092324, 7092330, 7092336, 7092346, 7092352, 7092358, ],
    LAN_XIAO_A: [708503, 708504, 708509, 708510, 708514, 708515, 708520],
    LAN_XIAO_B: [708552, 708553, 708558, 708559, 708563, 708564, 708569],
    LAN_XIAO_C: [709103, 709104, 709109, 709110, 709114, 709115, 709120],
    LAN_XIAO_D: [7092003, 7092004, 7092009, 7092010, 7092014, 7092015, 7092020],
    LAN_XIAO_E: [7092065, 7092066, 7092071, 7092072, 7092076, 7092077, 7092082, ],
    LAN_XIAO_F: [7092127, 7092128, 7092133, 7092134, 7092138, 7092139, 7092144, ],
    LAN_XIAO_G: [7092189, 7092190, 7092195, 7092196, 7092200, 7092201, 7092206, ],
    LAN_XIAO_H: [7092251, 7092252, 7092257, 7092258, 7092262, 7092263, 7092268, ],
    LAN_XIAO_I: [7092313, 7092314, 7092319, 7092320, 7092324, 7092325, 7092330, ],
    LAN_DA_A: [708525, 708526, 708531, 708536, 708537, 708541, 708542, 708547, 708548],
    LAN_DA_B: [708574, 708575, 708580, 708585, 708586, 708590, 708591, 708596, 708597],
    LAN_DA_C: [709125, 709126, 709131, 709136, 709137, 709141, 709142, 709147, 709148],
    LAN_DA_D: [7092025, 7092026, 7092031, 7092036, 7092037, 7092041, 7092042, 7092047, 7092048],
    LAN_DA_E: [7092087, 7092088, 7092093, 7092098, 7092099, 7092103, 7092104, 7092109, 7092110, ],
    LAN_DA_F: [7092149, 7092150, 7092155, 7092160, 7092161, 7092165, 7092166, 7092171, 7092172, ],
    LAN_DA_G: [7092211, 7092212, 7092217, 7092222, 7092223, 7092227, 7092228, 7092233, 7092234, ],
    LAN_DA_H: [7092273, 7092274, 7092279, 7092284, 7092285, 7092289, 7092290, 7092295, 7092296, ],
    LAN_DA_I: [7092335, 7092336, 7092341, 7092346, 7092347, 7092351, 7092352, 7092357, 7092358, ],
    LV_A: [708505, 708506, 708511, 708516, 708517, 708521, 708522, 708527, 708528, 708532, 708533, 708538, 708539, 708543, 708544, 708549],
    LV_B: [708554, 708555, 708560, 708565, 708566, 708570, 708571, 708576, 708577, 708581, 708582, 708587, 708588, 708592, 708593, 708598],
    LV_C: [709105, 709106, 709111, 709116, 709117, 709121, 709122, 709127, 709128, 709132, 709133, 709138, 709139, 709143, 709144, 709149],
    LV_D: [7092005, 7092006, 7092011, 7092016, 7092017, 7092021, 7092022, 7092027, 7092028, 7092032, 7092033, 7092038, 7092039, 7092043, 7092044, 7092049],
    LV_E: [7092067, 7092068, 7092073, 7092078, 7092079, 7092083, 7092084, 7092089, 7092090, 7092094, 7092095, 7092100, 7092101, 7092105, 7092106, 7092111, ],
    LV_F: [7092129, 7092130, 7092135, 7092140, 7092141, 7092145, 7092146, 7092151, 7092152, 7092156, 7092157, 7092162, 7092163, 7092167, 7092168, 7092173, ],
    LV_G: [7092191, 7092192, 7092197, 7092202, 7092203, 7092207, 7092208, 7092213, 7092214, 7092218, 7092219, 7092224, 7092225, 7092229, 7092230, 7092235, ],
    LV_H: [7092253, 7092254, 7092259, 7092264, 7092265, 7092269, 7092270, 7092275, 7092276, 7092280, 7092281, 7092286, 7092287, 7092291, 7092292, 7092297, ],
    LV_I: [7092315, 7092316, 7092321, 7092326, 7092327, 7092331, 7092332, 7092337, 7092338, 7092342, 7092343, 7092348, 7092349, 7092353, 7092354, 7092359, ],
    LV_DAN_A: [708505, 708511, 708517, 708521, 708527, 708533, 708539, 708543, 708549],
    LV_DAN_B: [708554, 708560, 708566, 708570, 708576, 708582, 708588, 708592, 708598],
    LV_DAN_C: [709105, 709111, 709117, 709121, 709127, 709133, 709139, 709143, 709149],
    LV_DAN_D: [7092005, 7092011, 7092017, 7092021, 7092027, 7092033, 7092039, 7092043, 7092049],
    LV_DAN_E: [7092067, 7092073, 7092079, 7092083, 7092089, 7092095, 7092101, 7092105, 7092111, ],
    LV_DAN_F: [7092129, 7092135, 7092141, 7092145, 7092151, 7092157, 7092163, 7092167, 7092173, ],
    LV_DAN_G: [7092191, 7092197, 7092203, 7092207, 7092213, 7092219, 7092225, 7092229, 7092235, ],
    LV_DAN_H: [7092253, 7092259, 7092265, 7092269, 7092275, 7092281, 7092287, 7092291, 7092297, ],
    LV_DAN_I: [7092315, 7092321, 7092327, 7092331, 7092337, 7092343, 7092349, 7092353, 7092359, ],
    LV_SHUAN_A: [708506, 708516, 708522, 708528, 708532, 708538, 708544],
    LV_SHUAN_B: [708555, 708565, 708571, 708577, 708581, 708587, 708593],
    LV_SHUAN_C: [709106, 709116, 709122, 709128, 709132, 709138, 709144],
    LV_SHUAN_D: [7092006, 7092016, 7092022, 7092028, 7092032, 7092038, 7092044],
    LV_SHUAN_E: [7092068, 7092078, 7092084, 7092090, 7092094, 7092100, 7092106, ],
    LV_SHUAN_F: [7092130, 7092140, 7092146, 7092152, 7092156, 7092162, 7092168, ],
    LV_SHUAN_G: [7092192, 7092202, 7092208, 7092214, 7092218, 7092224, 7092230, ],
    LV_SHUAN_H: [7092254, 7092264, 7092270, 7092276, 7092280, 7092286, 7092292, ],
    LV_SHUAN_I: [7092316, 7092326, 7092332, 7092338, 7092342, 7092348, 7092354, ],
    LV_XIAO_A: [708505, 708506, 708511, 708516, 708517, 708521, 708522],
    LV_XIAO_B: [708554, 708555, 708560, 708565, 708566, 708570, 708571],
    LV_XIAO_C: [709105, 709106, 709111, 709116, 709117, 709121, 709122],
    LV_XIAO_D: [7092005, 7092006, 7092011, 7092016, 7092017, 7092021, 7092022],
    LV_XIAO_E: [7092067, 7092068, 7092073, 7092078, 7092079, 7092083, 7092084, ],
    LV_XIAO_F: [7092129, 7092130, 7092135, 7092140, 7092141, 7092145, 7092146, ],
    LV_XIAO_G: [7092191, 7092192, 7092197, 7092202, 7092203, 7092207, 7092208, ],
    LV_XIAO_H: [7092253, 7092254, 7092259, 7092264, 7092265, 7092269, 7092270, ],
    LV_XIAO_I: [7092315, 7092316, 7092321, 7092326, 7092327, 7092331, 7092332, ],
    LV_DA_A: [708527, 708528, 708532, 708533, 708538, 708539, 708543, 708544, 708549],
    LV_DA_B: [708576, 708577, 708581, 708582, 708587, 708588, 708592, 708593, 708598],
    LV_DA_C: [709127, 709128, 709132, 709133, 709138, 709139, 709143, 709144, 709149],
    LV_DA_D: [7092027, 7092028, 7092032, 7092033, 7092038, 7092039, 7092043, 7092044, 7092049],
    LV_DA_E: [7092089, 7092090, 7092094, 7092095, 7092100, 7092101, 7092105, 7092106, 7092111, ],
    LV_DA_F: [7092151, 7092152, 7092156, 7092157, 7092162, 7092163, 7092167, 7092168, 7092173, ],
    LV_DA_G: [7092213, 7092214, 7092218, 7092219, 7092224, 7092225, 7092229, 7092230, 7092235, ],
    LV_DA_H: [7092275, 7092276, 7092280, 7092281, 7092286, 7092287, 7092291, 7092292, 7092297, ],
    LV_DA_I: [7092337, 7092338, 7092342, 7092343, 7092348, 7092349, 7092353, 7092354, 7092359, ],
    QUANGXUAN_A: [708501, 708502, 708503, 708504, 708505, 708506, 708507, 708508, 708509, 708510, 708511, 708512, 708513, 708514, 708515, 708516, 708517, 708518, 708519, 708520, 708521, 708522, 708523, 708524, 708525, 708526, 708527, 708528, 708529, 708530, 708531, 708532, 708533, 708534, 708535, 708536, 708537, 708538, 708539, 708540, 708541, 708542, 708543, 708544, 708545, 708546, 708547, 708548, 708549],
    QUANGXUAN_B: [708550, 708551, 708552, 708553, 708554, 708555, 708556, 708557, 708558, 708559, 708560, 708561, 708562, 708563, 708564, 708565, 708566, 708567, 708568, 708569, 708570, 708571, 708572, 708573, 708574, 708575, 708576, 708577, 708578, 708579, 708580, 708581, 708582, 708583, 708584, 708585, 708586, 708587, 708588, 708589, 708590, 708591, 708592, 708593, 708594, 708595, 708596, 708597, 708598],
    QUANGXUAN_C: [709101, 709102, 709103, 709104, 709105, 709106, 709107, 709108, 709109, 709110, 709111, 709112, 709113, 709114, 709115, 709116, 709117, 709118, 709119, 709120, 709121, 709122, 709123, 709124, 709125, 709126, 709127, 709128, 709129, 709130, 709131, 709132, 709133, 709134, 709135, 709136, 709137, 709138, 709139, 709140, 709141, 709142, 709143, 709144, 709145, 709146, 709147, 709148, 709149],
    QUANGXUAN_D: [7092001, 7092002, 7092003, 7092004, 7092005, 7092006, 7092007, 7092008, 7092009, 7092010, 7092011, 7092012, 7092013, 7092014, 7092015, 7092016, 7092017, 7092018, 7092019, 7092020, 7092021, 7092022, 7092023, 7092024, 7092025, 7092026, 7092027, 7092028, 7092029, 7092030, 7092031, 7092032, 7092033, 7092034, 7092035, 7092036, 7092037, 7092038, 7092039, 7092040, 7092041, 7092042, 7092043, 7092044, 7092045, 7092046, 7092047, 7092048, 7092049],
    QUANGXUAN_E: [7092063, 7092064, 7092065, 7092066, 7092067, 7092068, 7092069, 7092070, 7092071, 7092072, 7092073, 7092074, 7092075, 7092076, 7092077, 7092078, 7092079, 7092080, 7092081, 7092082, 7092083, 7092084, 7092085, 7092086, 7092087, 7092088, 7092089, 7092090, 7092091, 7092092, 7092093, 7092094, 7092095, 7092096, 7092097, 7092098, 7092099, 7092100, 7092101, 7092102, 7092103, 7092104, 7092105, 7092106, 7092107, 7092108, 7092109, 7092110, 7092111, ],
    QUANGXUAN_F: [7092125, 7092126, 7092127, 7092128, 7092129, 7092130, 7092131, 7092132, 7092133, 7092134, 7092135, 7092136, 7092137, 7092138, 7092139, 7092140, 7092141, 7092142, 7092143, 7092144, 7092145, 7092146, 7092147, 7092148, 7092149, 7092150, 7092151, 7092152, 7092153, 7092154, 7092155, 7092156, 7092157, 7092158, 7092159, 7092160, 7092161, 7092162, 7092163, 7092164, 7092165, 7092166, 7092167, 7092168, 7092169, 7092170, 7092171, 7092172, 7092173],
    QUANGXUAN_G: [7092187, 7092188, 7092189, 7092190, 7092191, 7092192, 7092193, 7092194, 7092195, 7092196, 7092197, 7092198, 7092199, 7092200, 7092201, 7092202, 7092203, 7092204, 7092205, 7092206, 7092207, 7092208, 7092209, 7092210, 7092211, 7092212, 7092213, 7092214, 7092215, 7092216, 7092217, 7092218, 7092219, 7092220, 7092221, 7092222, 7092223, 7092224, 7092225, 7092226, 7092227, 7092228, 7092229, 7092230, 7092231, 7092232, 7092233, 7092234, 7092235],
    QUANGXUAN_H: [7092249, 7092250, 7092251, 7092252, 7092253, 7092254, 7092255, 7092256, 7092257, 7092258, 7092259, 7092260, 7092261, 7092262, 7092263, 7092264, 7092265, 7092266, 7092267, 7092268, 7092269, 7092270, 7092271, 7092272, 7092273, 7092274, 7092275, 7092276, 7092277, 7092278, 7092279, 7092280, 7092281, 7092282, 7092283, 7092284, 7092285, 7092286, 7092287, 7092288, 7092289, 7092290, 7092291, 7092292, 7092293, 7092294, 7092295, 7092296, 7092297],
    QUANGXUAN_I: [7092311, 7092312, 7092313, 7092314, 7092315, 7092316, 7092317, 7092318, 7092319, 7092320, 7092321, 7092322, 7092323, 7092324, 7092325, 7092326, 7092327, 7092328, 7092329, 7092330, 7092331, 7092332, 7092333, 7092334, 7092335, 7092336, 7092337, 7092338, 7092339, 7092340, 7092341, 7092342, 7092343, 7092344, 7092345, 7092346, 7092347, 7092348, 7092349, 7092350, 7092351, 7092352, 7092353, 7092354, 7092355, 7092356, 7092357, 7092358, 7092359],
    resetData: function() {
        $("#kjtz-ctn td").removeClass("bg_yellow")
    },
    clickInit: function(a) {
        $(a).addClass("bg_yellow")
    },
    kjtz: function(b, e) {
        LHC_KJTZ.resetData();
        parent.UserBet.resetData();
        LHC_KJTZ.clickInit(b);
        var c = LHC_KJTZ[e + "_" + LHC.getTmTab()];
        for (var a = 0; a < c.length; a++) {
            $("#play_text_" + c[a]).click()
        }
    },
    sxtz: function(c, a) {
        $("#kjtz-ctn td").not(".sx_btns").removeClass("bg_yellow");
        if (!$(".sx_btns.bg_yellow")[0]) {
            parent.UserBet.resetData()
        }
        if ($(c).hasClass("bg_yellow")) {
            $(c).removeClass("bg_yellow")
        } else {
            $(c).addClass("bg_yellow")
        }
        var e = LHC_KJTZ["SHENXIAO_" + LHC_KJTZ.getZodicaNum(a) + "_" + LHC.getTmTab()];
        for (var b = 0; b < e.length; b++) {
            $("#play_text_" + e[b]).click()
        }
    },
    zodiacArr: ["鼠", "牛", "虎", "兔", "龙", "蛇", "马", "羊", "猴", "鸡", "狗", "猪"],
    getYearZodicaIndex: function() {
        for (var a = 0; a < LHC_KJTZ.zodiacArr.length; a++) {
            if (animalsYear == LHC_KJTZ.zodiacArr[a]) {
                return a
            }
        }
    },
    getZodicaNum: function(a) {
        var c = LHC_KJTZ.getYearZodicaIndex();
        var b = 1;
        for (var e = c; e >= 0; e--) {
            if (LHC_KJTZ.zodiacArr[e] == a) {
                return b
            }
            b += 1
        }
        for (var e = LHC_KJTZ.zodiacArr.length - 1; e >= c; e--) {
            if (LHC_KJTZ.zodiacArr[e] == a) {
                return b
            }
            b += 1
        }
    },
    getZodica: function(b) {
        for (var c = 0; c < LHC_KJTZ.zodiacArr.length; c++) {
            var g = LHC_KJTZ.zodiacArr[c];
            var f = LHC["SX_" + LHC_KJTZ.getZodicaNum(g)];
            var j = "";
            for (var e in f) {
                var a = parseInt(f[e]);
                if (parseInt(a) == parseInt(b)) {
                    return g
                }
            }
        }
        return ""
    },
    cancelAll: function(a) {
        LHC_KJTZ.resetData();
        parent.UserBet.resetData();
        LHC_KJTZ.clickInit(a)
    },
    reverseSel: function(b, e) {
        LHC_KJTZ.resetData();
        LHC_KJTZ.clickInit(b);
        var c = LHC_KJTZ[e + "_" + LHC.getTmTab()];
        for (var a = 0; a < c.length; a++) {
            $("#play_text_" + c[a]).click()
        }
    },
};
var lot_lang = {
    dec_s21: "天"
};
var UserBet = {
    playType: "NORMAL",
    step: 0,
    gameId: null,
    turnNum: "",
    isSub: true,
    isStop: false,
    init: function(a) {
        if (a) {
            UserBet.currGame = a;
            UserBet.gameId = a.id
        }
        $("#header_game_name").html(a.name)
    },
    getDataInit: function() {
        if (UserBet.isStop) {
            UserBet.stopBet();
            return
        }
        UserBet.initPlayData()
    },
    initEvent: function() {
        UserBet.initNormalEvent();
        UserBet.initBetMoneyEvent();
        if (UserBet.playType != "NORMAL") {
            UserBet.initSpecEvent()
        }
    },
    initPlayData: function() {
        UserBet.resetData();
        framePage.$("#bet_tab input[type='text']").removeAttr("disabled");
        framePage.$("#bet_tab .odds").each(function(b, e) {
            e = $(e);
            var a = e.attr("id");
            if (a) {
                a = a.substring(10, a.length)
            } else {
                a = e.attr("pid")
            }
            var c = getPlay(a);			
			if(!c.enable){
				//e.find("span").html("--");
				//console.log(c.enable);
			}else{
				e.find("span").html(c.odds);				
			}
        })
    },
    checkIsAdminStop: function() {
        if (UserBet.currGame.enable == 0) {
            return true
        }
        var b = $("#cate_menus_" + UserBet.gameId + " .selected").attr("cate_id");
        var a = getPlayCate(b);
        if (!a || a.enable == 0) {
            return true
        }
        return false
    },
    stopBet: function() {
        UserBet.isStop = true;
        framePage.$("#bet_tab .odds > span").html("--");
        framePage.$("#bet_tab .amount > input:text").val("封盘").attr("disabled", "true");
        framePage.$("#bet_tab").find(".bg_yellow").removeClass("bg_yellow");
        UserBet.disableAllCheckbox()
    },
    initNormalEvent: function() {
        var a = framePage.$("#bet_tab");
        a.find(".name:not('.not-event'),.odds:not('.not-event'),.amount,.qiu").on("click",
        function(e) {
            if (UserBet.isStop) {
                e.preventDefault();
                e.stopPropagation();
                return
            }
            var g = $(this).attr("id");
            if (!g) {
                return
            }
            var b = g.split("_")[2];
            var f = $(this).parent().find('td[id$="' + b + '"]');
            var c = f.filter(".amount");
            f.toggleClass("bg_yellow");
            if (c.hasClass("bg_yellow")) {
                c.find("input").val(framePage.$("#bet_money1").val())
            } else {
                c.find("input").val("")
            }
        }).on("mouseover",
        function() {
            if (UserBet.isStop) {
                return
            }
            var c = $(this).attr("id");
            if (!c) {
                return
            }
            var b = c.split("_")[2];
            $(this).parent().find('td[id$="' + b + '"]').addClass("hover")
        }).on("mouseout",
        function() {
            if (UserBet.isStop) {
                return
            }
            var c = $(this).attr("id");
            if (!c) {
                return
            }
            var b = c.split("_")[2];
            $(this).parent().find('td[id$="' + b + '"]').removeClass("hover")
        });
        a.find(".amount > input").on("click",
        function(b) {
            if (UserBet.isStop) {
                b.preventDefault();
                b.stopPropagation();
                return
            }
            if ($(this).parent().hasClass("bg_yellow")) {
                b.stopPropagation()
            }
        })
    },
    initBetMoneyEvent: function() {
        UserBet.betMoney = $.cookie("user_bet_money");
        var b = framePage.$("#bet_tab");
        var a = framePage.$(".bet-money");
        a.val(UserBet.betMoney);
        a.keyup(function() {
            UserBet.betMoney = $(this).val();
            a.val($(this).val());
            b.find(".bg_yellow > input:text").val($(this).val())
        });
        a.blur(function() {
            $.cookie("user_bet_money", $(this).val())
        })
    },
    initSpecEvent: function() {
        var a = framePage.$("#bet_tab");
        a.find(".checkbox_td").on("click",
        function(b) {
            $(this).find("input").click()
        });
        a.find(".radio_td").on("click",
        function(b) {
            $(this).find("input").click()
        });
        a.find(".checkbox_td > input[type='checkbox']").on("click",
        function(b) {
            if (UserBet.isStop) {
                b.preventDefault();
                b.stopPropagation();
                return
            }
            $(this).parent().toggleClass("bg_yellow");
            UserBet.executeRule(this, b);
            b.stopPropagation()
        });
        a.find("#lm_radios :radio").on("click",
        function() {
            UserBet.disableMoneyInput();
            UserBet.resetAllCheckbox()
        });
        UserBet.disableMoneyInput()
    },
    disableMoneyInput: function() {
        framePage.$(".bet-money").attr("disabled", true)
    },
    normalMoneyInput: function() {
        framePage.$(".bet-money").removeAttr("disabled")
    },
    moneyIsDisabled: function() {
        return framePage.$("#bet_money1").attr("disabled") || false
    },
    resetData: function() {
        var a = UserBet.isStop ? "封盘": "";
        framePage.$("#bet_tab").find(".amount > input").val(a);
        framePage.$("#bet_tab").find(".bg_yellow").removeClass("bg_yellow");
        UserBet.resetAllCheckbox()
    },
    openBetWindow: function() {
        if (UserBet.isStop) {
            layer.alert("已经封盘，请开盘后再投注", {
                icon: 2
            });
            return
        }
        if (UserBet.moneyIsDisabled()) {
            UserBet.showBetErrorLayer();
            return
        }
        var u = [];
        switch (UserBet.playType) {
        case "LM":
            u = LM.getBetData();
            break;
        case "ZX":
            u = ZX.getBetData();
            break;
        case "HX":
            u = LHC_HX.getBetData();
            break;
        case "LXLW":
            u = LHC_LXLW.getBetData();
            break;
        default:
            u = UserBet.getBetData()
        }
        if (!u || u.length == 0) {
            UserBet.showBetErrorLayer();
            return
        }
        var j = '			<tr style="height: 30px;">				<td style="text-align: left;padding-left:5px;" class="multiple">{playCateName} {alias} {playName} {betNums} {otherStr} </td>				<td><span class="c-txt3">{playOdds}</span></td>				<td><input type="text" style="width: 85%" value="{betMoney}" id="win_bet_text_{checkboxId}" nums="{nums}" checkbox_id="{checkboxId}" play_id="{playId}" bet_info="{betNums}" playids="{playIds}"/></td>				<td ><input type="checkbox" checked="checked" id="win_bet_checkbox_{checkboxId}" checkbox_id="{checkboxId}"></td>			</tr>';
        var b = 0;
        var p = "";
        var c = 0;
        for (var q = 0; q < u.length; q++) {
            var x = u[q];
            var n = x.playId;
            var f = x.checkboxId || n;
            var l = x.money;
            var t = getPlay(n);
            var o = t.alias || "";
            if (t.code == "LXLW") {
                o = ""
            }
            var v = getPlayCate(t.playCateId);
            var g = v.isShow == 1 ? "": v.name;
            var r = x.playIds || "";
            p += j.format({
                playId: n,
                checkboxId: f,
                playCateName: g,
                alias: o,
                betNums: x.betStr || "",
                otherStr: x.otherStr || "",
                playName: t.name,
                playOdds: t.odds,
                betMoney: l,
                nums: x.betNum || 1,
                playIds: r,
            });
            b += parseInt(x.sumMoney);
            c += x.betNum
        }
        if (c == 0 || b == 0) {
            UserBet.showBetErrorLayer();
            return
        }
        var e = $("#win_bet");
        e.find("table").find("tbody").html(p);
        e.find(".bcountVal").html(c);
        e.find(".btotalVal").html(b);
        var a = "";
        if (u.length > 10) {
            a = "420px"
        }
        UserBet.turnNum = framePage.$("#next_turn_num").html();
        var k = layer.open({
            title: "下注明细（请确认注单）",
            type: 1,
            shift: 2,
            area: ["460px", a],
            shadeClose: false,
            btn: ["确定", "取消"],
            content: e,
            yes: function(z) {
                return UserBet.submitBet()
            },
            zIndex: 5,
            cancel: function(z) {
                layer.confirm("你确定取消下注吗?", {
                    icon: 3,
                    title: "用户提示",
                    zIndex: 6
                },
                function(A) {
                    UserBet.step = 0;
                    layer.closeAll();
                    framePage.$(".amount").eq(0).find("input").focus().blur()
                });
                return false
            },
            end: function() {
                e.find("tbody").html("")
            },
            success: function(z, A) {
                e.find(":text").eq(0).focus().blur();
                UserBet.step = 1;
                e.find(":text").keypress(function(B) {
                    var C = B.which;
                    if ((C >= 48 && C <= 57) || C == 8) {
                        return true
                    } else {
                        return false
                    }
                });
                e.find(":text").blur(function() {
                    UserBet.countWinBet(e)
                });
                e.find(":checked").change(function() {
                    UserBet.countWinBet(e)
                })
            }
        })
    },
    countWinBet: function(b) {
        var c = 0;
        var a = 0;
        $(b).find(":text").each(function(e, j) {
            var g = $(this).attr("checkbox_id");
            if ($("#win_bet_checkbox_" + g)[0].checked) {
                var f = parseInt($(j).attr("nums"));
                c += f;
                a += parseInt($(this).val()) * f
            }
        });
        $(b).find(".bcountVal").html(c);
        $(b).find(".btotalVal").html(a)
    },
    submitBet: function() {
        if (UserBet.isStop) {
            layer.alert("此期已封盘，下注失败", {
                icon: 2
            });
            return
        }
        var f = $("#win_bet").find(".bcountVal").html();
        if (f == 0) {
            UserBet.step = 0;
            UserBet.showBetErrorLayer();
            return
        }
        var f = $("#win_bet").find(".bcountVal").html();
        var a = $("#win_bet").find(".btotalVal").html();
        var e = {};
        e.gameId = UserBet.gameId;
        e.turnNum = UserBet.turnNum;
        e.totalNums = f;
        e.totalMoney = a;
        e.betSrc = 0;
		e.ftime = postcodeendtime;
        var c = false;
        var b = 0;
        $("#win_bet").find(":text").each(function(k, o) {
            if (c) {
                return
            }
            var p = $(this).attr("play_id");
            var t = $(this).attr("bet_info");
            var v = $(this).attr("checkbox_id");
            var x = $(this).attr("playids");
            var q = getPlay(p);
            var g = q.minMoney;
            var u = q.maxMoney;
            if ($("#win_bet_checkbox_" + v)[0].checked) {
                var j = parseInt($(this).val());
                var l = j;
                var r = framePage.$("#lm_radios");
                if (l < g) {
                    layer.alert("最小投注金额为: " + g, {
                        icon: 2
                    });
                    c = true;
                    return
                }
                if (l > u) {
                    layer.alert("最大投注金额为: " + u, {
                        icon: 2
                    });
                    c = true;
                    return
                }
                e["betBean[" + b + "][playId]"] = p;
                e["betBean[" + b + "][money]"] = j;
                e["betBean[" + b + "][betInfo]"] = t;
                e["betBean[" + b + "][playIds]"] = x;
                b += 1
            }
        });
        if (c) {
            UserBet.step = 1;
            return
        }
        if (UserBet.isSub) {
            UserBet.isSub = false;
            $(".layui-layer-btn0").html("提交中...");
            $.ajax({
                type: "POST",
                url: "/Data/postCode?t=" + Date.parse(new Date()),
                data: e,
                dataType: "json",
                success: function(g) {					
					setTimeout(function() {
					$(".layui-layer-shade").replaceWith("");
					UserBet.step = 0;
					UserBet.isSub = true;					
                    UserBet.resetData();
                    framePage.$(".amount").eq(0).find("input").focus();
                    $(".layui-layer-btn0").html("确定");
					},
                    100);
					if(!g.success){
					layer.alert(g.msg, {
						icon: 2
                        //layer.closeAll()
                    });
					return
					} 
					layer.closeAll();									
                    setTimeout(function() {
                        PullMsg.getLotteryData()
                    },
                    800);
					
                },
                error: function(g, k, j) {
                    UserBet.step = 0;
                    UserBet.isSub = true;
                    UserBet.resetData();
                    framePage.$(".amount").eq(0).find("input").focus();
                    $(".layui-layer-btn0").html("确定")
                }
            })
        }
    },
    initMenu: function() {
        var b = $(window).width();
        var a = "";
        var e = "";
        for (var g = 0; g < games.length; g++) {
            var c = games[g];
            if (b <= 1300 && g > 6) {
                e += '<a href="' + c.pageUrl + '" id="game_' + c.id + '" game_id=' + c.id + ">" + c.name + "</a>";
                continue
            }
            var f = "";
            if (window.location.pathname == c.pageUrl) {
                f = 'class="cur"';
                $("#subnav-item-" + c.id).show()
            }
            a += "<li " + f + ' ><a href="' + c.pageUrl + '" id="game_' + c.id + '" game_id=' + c.id + ">" + c.name + "</a></li>"
        }
        if (e) {
            a += ' <li class="other" id="other">				<p class="more">更多游戏<span class="arrow"></span></p>				<div class="more-extend">' + e + "</div>				</li>"
        }
        $("#nav").html(a);
        $("#other").hover(function() {
            $(".more-extend").show()
        },
        function() {
            $(".more-extend").hide()
        })
    },
    getStats: function() {
        if (UserBet.gameId == 10) {
            UserBet.statPlayTitle = "近期开奖结果";
            $.get("/game/getHistory.do", {
                gameId: UserBet.gameId,
                count: 20
            },
            function(c) {
                if (c) {
                    var e = "";
                    var b = '<tr class="u-tb5-tr{className}"><th align="center">{turnNum}期</th> <td class="K3Term"><b class="b{n1}">{n1}</b></td> <td class="K3Term"><b class="b{n2}">{n2}</b></td> <td class="K3Term"><b class="b{n3}">{n3}</b></td> <td style="text-align: center;">{totalDesc}</td> </tr>';
                    $(c).each(function(j, p) {
                        var l = p.turnNum.substring(7, 9);
                        var k = parseInt(p.n1);
                        var g = parseInt(p.n2);
                        var f = parseInt(p.n3);
                        var o = k + g + f;
                        var n = "";
                        if (k == g && g == f) {
                            n = "通吃"
                        } else {
                            if (o >= 4 && o <= 10) {
                                n = "小"
                            } else {
                                if (o >= 11 && o <= 17) {
                                    n = "大"
                                }
                            }
                        }
                        e += b.format({
                            className: j % 2 == 0 ? "1": "2",
                            turnNum: l,
                            n1: k,
                            n2: g,
                            n3: f,
                            totalDesc: n
                        })
                    });
                    if (e == "") {
                        e = '<tr><td colspan="2" style="text-align: center">暂无排行榜数据</td></tr>'
                    }
                    UserBet.statPlayHtml = e;
                    RequestIssue.showStatPlay()
                }
            },
            "json")
        } else {
            UserBet.statPlayTitle = "长龙排行榜";
            var a = RequestIssue.getCurTurnNum() || new Date().getTime();
            $.ajax({
                type: "get",
                url: staticFileUrl + "/data/stat.js?tnum=" + a,
				data:"gameId=" + UserBet.gameId,
                dataType: "jsonp",
                cache: true,
                jsonpCallback: "jsonpStatCallback",
                success: function(c) {
                    if (c) {
                        var e = "";
                        var b = '<tr class="u-tb5-tr{className}"><th>{playCateName} {aliasName} {playName}</th><td class="statFont">{count}期</td></tr>';
                        $(c).each(function(g, n) {
                            var k = n.playCateName + " - ";
                            var j = playCates[n.playCateId];
                            if (!j || j.isShow == 1) {
                                k = ""
                            }
                            var l = getPlay(n.playId);
                            var f = "";
                            if (l.alias) {
                                f = l.alias
                            }
                            e += b.format({
                                className: g % 2 == 0 ? "1": "2",
                                playCateName: k,
                                playName: n.playName,
                                aliasName: f,
                                count: n.count
                            })
                        });
                        if (e == "") {
                            e = '<tr><td colspan="2" style="text-align: center">暂无排行榜数据</td></tr>'
                        }
                        UserBet.statPlayHtml = e;
                        RequestIssue.showStatPlay()
                    }
                }
            })
        }
    },
    executeRule: function(b, a) {
        switch (UserBet.playType) {
        case "LM":
            LM.lmRule(b, a);
            break;
        case "ZX":
            ZX.zxRule(b, a);
            break;
        case "HX":
            LHC_HX.hxRule(b, a);
            break;
        case "LXLW":
            LHC_LXLW.lxlwRule(b, a);
            break
        }
    },
    disableAllCheckbox: function() {
        framePage.$("#bet_tab").find(".checkbox_td").removeClass("bg_yellow").find("input[type='checkbox']").attr("disabled", true)
    },
    disableOtherCheckbox: function() {
        framePage.$("#bet_tab").find(".checkbox_td:not('.bg_yellow')").find("input[type='checkbox']").attr("disabled", true)
    },
    resetOtherCheckbox: function() {
        framePage.$("#bet_tab").find(".checkbox_td:not('.bg_yellow')").find("input[type='checkbox']").removeAttr("disabled")
    },
    resetAllCheckbox: function() {
        var b = framePage.$("#bet_tab").find(".checkbox_td");
        b.removeClass("bg_yellow");
        var a = b.find("input[type='checkbox']");
        a.attr("checked", false);
        if (!UserBet.isStop) {
            a.removeAttr("disabled")
        }
    },
    showBetErrorLayer: function() {
        layer.alert("下注内容不正确，请重新下注", {
            icon: 2
        })
    },
    showMoneyErrorLayer: function() {
        layer.alert("下注金额不正确，请重新下注", {
            icon: 2,
            area: "450px"
        })
    },
    getBetData: function() {
        var b = framePage.$("#bet_tab .bg_yellow").find(":text");
        var a = [];
        b.each(function(e, j) {
            var f = $(j).val();
            if (f) {
                var c = $(j).parent().attr("id");
                var g = c.substring(c.lastIndexOf("_") + 1, c.length);
                a.push({
                    playId: g,
                    money: f,
                    sumMoney: f,
                    betNum: 1
                })
            }
        });
        return a
    }
};
var LM = {
    lmRule: function(f, e) {
        var c = LM.getLmRadio();
        var b = c.attr("min_sel_num");
        var g = c.attr("max_sel_num");
        var a = LM.getLmCheckboxs().length;
        if (a == g) {
            UserBet.disableOtherCheckbox()
        } else {
            UserBet.resetOtherCheckbox()
        }
        if (a >= b && a <= g) {
            UserBet.normalMoneyInput()
        } else {
            UserBet.disableMoneyInput()
        }
    },
    getLmRadio: function() {
        return framePage.$("#lm_radios input[name='lm_type']:checked")
    },
    getLmCheckboxs: function() {
        return framePage.$("#bet_tab").find(".checkbox_td > input:checked")
    },
    getBetData: function() {
        var o = framePage.$("#bet_money1").val();
        if (!o) {
            return null
        }
        var j = LM.getLmRadio();
        var f = LM.getLmCheckboxs();
        var e = j.val();
        var r = j.attr("zx_type");
        var g = getPlay(e);
        var q = "";
        $(f).each(function(t, u) {
            q += $(u).attr("value") + ","
        });
        q = q.substring(0, q.length - 1);
        var c = "";
        var n = 0;
        var p = 0;
        if (g.code.indexOf("MULTIPLE") != -1) {
            var b = q.split(",");
            var a = getZhuXuanComNums(b, r, b.length);
            n = a.length;
            p = parseInt(o) * n;
            var k = getComNumsStr(a);
            c = " [" + n + "组] <a href='javascript:void(0);' onmouseover='showOtherTips(\"#betWindowOther\")' onmouseout='hideOtherTips(\"#betWindowOther\")' id='betWindowOther'>查看明细</a>" + k
        } else {
            p = parseInt(o);
            n = 1
        }
        var l = [{
            playId: e,
            money: o,
            sumMoney: p,
            betNum: n,
            betStr: q,
            otherStr: c
        }];
        return l
    }
};
var ZX = {
    zxRule: function(e, a) {
        var g = ZX.getZxRadio().attr("num");
        var l = 0;
        for (var f = 1; f <= g; f++) {
            var j = ZX.getZxCheckbox(f);
            if (j.length > 0) {
                l++
            }
        }
        if (l != g) {
            UserBet.disableMoneyInput()
        } else {
            UserBet.normalMoneyInput()
        }
        var c = framePage.$("#bet_tab");
        var k = e.value;
        var b = c.find(".checkbox_td > input[value='" + k + "']").not($(e));
        if (e.checked) {
            b.attr("disabled", true)
        } else {
            b.removeAttr("disabled")
        }
    },
    getZxRadio: function() {
        return framePage.$("#lm_radios .radio_td > input:checked")
    },
    getZxCheckbox: function(a) {
        return framePage.$("#zx_table_" + a + " .checkbox_td > input:checked")
    },
    getZxCheckboxNums: function(a) {
        var c = ZX.getZxCheckbox(a);
        var b = new Array();
        $.each(c,
        function(e, f) {
            b.push($(f).attr("value"))
        });
        return b
    },
    getBetData: function() {
        var b = framePage.$("#bet_money1").val();
        if (!b) {
            return null
        }
        var c = ZX.getZxRadio();
        var f = c.attr("value");
        var g = c.attr("num");
        var e = [];
        if (g == 2) {
            e = getZhiXuanComNums2(ZX.getZxCheckboxNums(1), ZX.getZxCheckboxNums(2))
        } else {
            e = getZhiXuanComNums3(ZX.getZxCheckboxNums(1), ZX.getZxCheckboxNums(2), ZX.getZxCheckboxNums(3))
        }
        var a = [];
        $.each(e,
        function(j, k) {
            a.push({
                playId: f,
                checkboxId: j,
                money: b,
                sumMoney: b,
                betNum: 1,
                betStr: k
            })
        });
        return a
    }
};
var LHC_HX = {
    hxRule: function(j, a) {
        var g = framePage.$("#lhc_odds");
        var k = parseInt(g.attr("start-play-id"));
        var b = g.attr("min-num");
        var e = g.attr("max-num");
        var l = LHC_HX.getCheckbox().length;
        if (l < b) {
            UserBet.disableMoneyInput();
            g.html("--");
            g.attr("play_id", "")
        } else {
            UserBet.normalMoneyInput();
            if (l == e) {
                framePage.$("#lhc_checkboxs .checkbox_td input:not(:checked)").attr("disabled", true)
            } else {
                UserBet.resetOtherCheckbox()
            }
            var c = k + l;
            var f = getPlay(c);
            g.html(f.odds);
            g.attr("play_id", c)
        }
    },
    getCheckbox: function() {
        return framePage.$("#lhc_checkboxs .checkbox_td input:checked")
    },
    getCheckboxNums: function() {
        var b = LHC_HX.getCheckbox();
        var a = "";
        $.each(b,
        function(c, e) {
            a += $(e).attr("value") + ","
        });
        return a.substring(0, a.length - 1)
    },
    getBetData: function() {
        var c = framePage.$("#bet_money1").val();
        if (!c) {
            return null
        }
        var e = framePage.$("#lhc_odds").attr("play_id");
        var b = LHC_HX.getCheckboxNums();
        var a = [{
            playId: e,
            money: c,
            sumMoney: c,
            betNum: 1,
            betStr: b
        }];
        return a
    }
};
var LHC_LXLW = {
    lxlwRule: function(c, b) {
        var a = LHC_LXLW.getCheckbox().length;
        var e = LHC_LXLW.getSelTab().attr("min_sel");
        if (a < e) {
            UserBet.disableMoneyInput()
        } else {
            UserBet.normalMoneyInput()
        }
    },
    getSelTab: function() {
        return framePage.$("#tm_tabs .on")
    },
    getCheckbox: function() {
        return framePage.$("#lxlw_checkboxs .checkbox_td input:checked")
    },
    getCheckboxNums: function() {
        var b = LHC_LXLW.getCheckbox();
        var a = new Array();
        $.each(b,
        function(c, e) {
            a.push($(e).attr("value"))
        });
        return a
    },
    getCheckboxPids: function() {
        var a = LHC_LXLW.getCheckbox();
        var b = new Array();
        $.each(a,
        function(c, e) {
            b.push($(e).attr("pid"))
        });
        return b
    },
    getBetData: function() {
        var b = framePage.$("#bet_money1").val();
        if (!b) {
            return null
        }
        var a = [];
        var c = LHC_LXLW.getSelTab().attr("play_id");
        var e = LHC_LXLW.getSelTab().attr("min_sel");
        var g = LHC_LXLW.getCheckboxPids();
        var f = getZhuXuanComNums(g, e, g.length);
        $.each(f,
        function(l, p) {
            var o = LHC_LXLW.getMinPlayOdds(p);
            if (c == 709979) {
                o = LHC_LXLW.getMaxPlayOdds(p)
            }
            var k = LHC_LXLW.getPidStr(p);
            var j = getArrayToStr(p);
            a.push({
                playId: o,
                playIds: j,
                checkboxId: l,
                money: b,
                sumMoney: b,
                betNum: 1,
                betStr: k
            })
        });
        return a
    },
    getMinPlayOdds: function(k) {
        k = getArrayToStr(k).split(",");
        var b = k.length;
        var l = new Array();
        var e = new Array();
        for (var g = 0; g < b; g++) {
            var j = k[g];
            var c = getPlay(j);
            l.push(c.odds);
            e.push(c)
        }
        var f = e[0];
        var a = f.id;
        if (isSameNum(l)) {
            return a
        }
        for (var g = 1; g < b; g++) {
            var c = e[g];
            var j = c.id;
            if (c.odds < f.odds) {
                a = c.id
            }
        }
        return a
    },
    getMaxPlayOdds: function(k) {
        k = getArrayToStr(k).split(",");
        var b = k.length;
        var l = new Array();
        var f = new Array();
        for (var g = 0; g < b; g++) {
            var j = k[g];
            var e = getPlay(j);
            l.push(e.odds);
            f.push(e)
        }
        var a = f[0];
        var c = a.id;
        if (isSameNum(l)) {
            return c
        }
        for (var g = 1; g < b; g++) {
            var e = f[g];
            var j = e.id;
            if (e.odds > a.odds) {
                c = e.id
            }
        }
        return c
    },
    getPidStr: function(g) {
        g = getArrayToStr(g).split(",");
        var c = g.length;
        var f = "";
        for (var b = 0; b < c; b++) {
            var a = g[b];
            var e = getPlay(a);
            f += e.alias;
            if (b != c - 1) {
                f += ","
            }
        }
        return f
    }
};
function getZhuXuanComNums(e, b, a) {
    var c = [];
    var f = choose(a, b);
    $(f).each(function(g, j) {
        var k = {};
        $(j).each(function(l, o) {
            k[l] = e[o]
        });
        c[g] = k
    });
    return c
}
function choose(b, e) {
    var f = [];
    var a = [];
    for (var c = 0; c < b; c++) {
        a[c] = c
    } (function(j, o, g) {
        var l = j.length;
        if (o > l) {
            return
        }
        if (o == l) {
            f.push([].concat(g, j))
        } else {
            for (var n = 0; n < l; n++) {
                var k = [].concat(g);
                k.push(j[n]);
                if (o == 1) {
                    f.push(k)
                } else {
                    var p = [].concat(j);
                    p.splice(0, n + 1);
                    arguments.callee(p, o - 1, k)
                }
            }
        }
    })(a, e, []);
    return f
}
function getComNumsStr(a) {
    var b = '<ul class="hide">';
    $.each(a,
    function(e, f) {
        e = parseInt(e);
        var c = "";
        $.each(f,
        function(g, j) {
            c += j + ","
        });
        c = c.substring(0, c.length - 1);
        b += '<li><span class="xu">' + (e + 1) + '.</span><span class="nums">' + c + "</span></li>"
    });
    b += "</ul>";
    return b
}
function getZhiXuanComNums2(f, e) {
    var b = new Array();
    for (var c = 0; c < f.length; c++) {
        for (var a = 0; a < e.length; a++) {
            b.push(f[c] + "," + e[a])
        }
    }
    return b
}
function getZhiXuanComNums3(j, g, f) {
    var c = new Array();
    for (var e = 0; e < j.length; e++) {
        for (var b = 0; b < g.length; b++) {
            for (var a = 0; a < f.length; a++) {
                c.push(j[e] + "," + g[b] + "," + f[a])
            }
        }
    }
    return c
}
function getArrayToStr(a) {
    var b = "";
    $.each(a,
    function(c, e) {
        b += e + ","
    });
    return b.substring(0, b.length - 1)
}
window.onerror = function(c, b, a) {
    if (c.indexOf("framePage.$") > -1) {
        return true
    }
    return false
};
var frameAutoHeight = function() {
    var a = $(window).height() - 165;
    $("#framePage").height(a)
};
var HomeMenu = {
    defaultGameId: 50,
    getHomeGameId: function() {
        return $.cookie("home_game_id") || HomeMenu.defaultGameId
    },
    setHomeGameId: function(a) {
        $.cookie("home_game_id", a)
    },
    init: function() {
        var k = '<a href="javascript:HomeMenu.selMenuClass({gameId});" gameid="{gameId}" class="{selClass}"><span>{gameName}</span>{icon}</a>';
        var j = "";
        var a = 0;
        for (var f in games) {
            var e = "";
            var b = games[f];
            var c = "";
            if (b.open == 0) {
                a += 1;
                if (a == 1) {
                    e = "selected"
                }
                if (b.iconUrl) {
                    c = '<i class="' + b.iconUrl + '"></i>'
                }
                j += k.format({
                    gameId: b.id,
                    selClass: e,
                    icon: c,
                    gameName: b.name
                })
            }
        }
        $("#homeMenus").html(j);
        var l = HomeMenu.getHomeGameId();
        HomeMenu.selMenuClass(l);
        $("#framePage").load(function() {
            RequestIssue.pageLoaded = true;
            RequestIssue.betDate = null;
            RequestIssue.openDate = null;
            HomeMenu.loadSuccess()
        })
    },
    selMenuClass: function(b) {
        var a = HomeMenu.getGame(b);
        if (!a) {
            layer.alert("游戏不存在", {
                icon: 2
            });
            return
        }
        $("#homeMenus a").removeClass("selected");
        $("#homeMenus a[gameid=" + b + "]").addClass("selected").click();
        $("#homeCateMenus .cate_menu").hide();
        $("#cate_menus_" + b).show();
        $("#cate_menus_" + b + " a").removeClass("selected").eq(0).addClass("selected");
        HomeMenu.setHomeGameId(b);
        $("#framePage").attr("src", a.pageUrl);
        UserBet.init(a);
        UserBet.getStats();
        UserBet.step = 0
    },
    selCateMenuClass: function(a) {
        $(a).parents(".cate_menu").find("a").removeClass("selected");
        $(a).addClass("selected")
    },
    getGame: function(c) {
        for (var b = 0; b < games.length; b++) {
            var a = games[b];
            if (a.id == c) {
                return a
            }
        }
    },
    loadSuccess: function() {
        RequestIssue.getNextIssue(function() {
            UserBet.getDataInit();
            UserBet.initEvent()
        });
        RequestIssue.showTeam();
        RequestIssue.showPageName();
        RequestIssue.showStatPlay();
        RequestIssue.showWinMoney();
        RequestIssue.showStatGame();
        PullMsg.getLotteryData();
        framePage.$(".iframe-body").show()
    },
    showInfo: function() {
        if (user.testFlag == 1) {
            $("#userinfo_name").html("游客")
        } else {
            $("#userinfo_name").html(user.userName)
        }
    },
};
function trialGameProPageInit() {
    if (user.testFlag == 1) {
        $(".trial-cls").hide()
    } else {
        $(".trial-cls").show()
    }

    $("#zhudan").show()
}
function showSysBtn() {
    var a = CONFIG_MAP.showKjzb;
    if (a != "") {
        $("#kjzb_div").show();
        $("#kjzb_link").attr("href", a)
    }
}
function logout() {
    layer.confirm("确定退出系统吗？",
    function() {
        $.get("/api/logout.do",
        function(a) {
            gotoMainPage("/user/logout")
        })
    })
}
function hideOrderInfo() {
    $("#framePage").attr("src", "/center/pay/list.html");
    layer.closeAll()
}
var History = {
    loadPage: function (b, a) {
        if (!b) {
            b = $.cookie("home_game_id")
        }
        var c = "/game/pk10/history.html";
        if (b == 50) {
            c = "/game/pk10/history.html"
        } else {
            if (b == 55) {
                c = "/game/xyft/history.html"
            } else {
                if (b == 1) {
                    c = "/game/cqssc/history.html"
                } else {
                    if (b == 60) {
                        c = "/game/gdkl10/history.html"
                    } else {
                        if (b == 10) {
                            c = "/game/jsk3/history.html"
                        } else {
                            if (b == 61) {
                                c = "/game/xync/history.html"
                            } else {
                                if (b == 65) {
                                    c = "/game/bjkl8/history.html"
                                } else {
                                    if (b == 3) {
                                        c = "/game/jxssc/history.html"
                                    } else {
                                        if (b == 21) {
                                            c = "/game/gd11x5/history.html"
                                        } else {
                                            if (b == 70) {
                                                c = "/game/lhc/history.html"
                                            } else {
                                                if (b == 66) {
                                                    c = "/game/pcdd/history.html"
                                                } else {
                                                    if (b == 72) {
                                                        c = "/game/jspk10/history.html"
                                                    } else {
                                                        if (b == 73) {
                                                            c = "/game/jsssc/history.html"
                                                        } else {
                                                            if (b == 74) {
                                                                c = "/game/jslhc/history.html"
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        if (a) {
            c += "?date=" + a
        }
        $("#framePage").attr("src", c)
    }
};
var SyncSysDate = {
    diffTime: null,
    sync: function() {
        SyncSysDate.diffTime = new Date(sysServerDate.replace(/[\-\u4e00-\u9fa5]/g, "/")).getTime() - new Date().getTime()
    },
    getDateDiffTime: function() {
        return (new Date().getTime() + SyncSysDate.diffTime)
    }
};
var userMsgListElementId = 1;
var PullMsg = {
    getUserMsg: function(a) {
        $.ajax({
            type: "GET",
            url: "/game/getUserMsg.do?t=" + Date.parse(new Date()),
            data: {
                gameId: $.cookie("home_game_id")
            },
            dataType: "json",
            global: false,
            success: function(b) {
				if (b) {
                    PullMsg.formatWinMsg(b.userBetWinList);
                    PullMsg.formatPushMessage(b.pushMessage);
                    if (b.userNoticeMsg == 1) {
                        $("#left_user_new_notice").show()
                    } else {
                        $("#left_user_new_notice").hide()
                    }
                }
            },
            error: function(b, f, e) {
				if (403 == b.status) {
                    var c = jQuery.parseJSON(b.responseText);
                    alert(c.msg || "登录超时");
                    window.location.href = "/user/login"
                }
            }
        })
		if(!$.cookie("token")){
			alert("您已经退出登录，请重新登录");
			window.location.href = "/user/login";
		}   
	},
    doNewMsg: function() {},
    getTotalUnBetMoney: function() {
        $.ajax({
            type: "GET",
            url: "/game/getTotalUnBetMoney.do?t=" + Date.parse(new Date()),
            dataType: "json",
            success: function(a) {
                if (a) {
                    var b = {};
                    b.unbalancedMoney = a;
                    PullMsg.formatUserMoney(b, 200)
                }
            }
        })
    },
    getUnUserBetList: function() {
        $.ajax({
            type: "GET",
            url: "/game/getUnUserBetList.do?t=" + Date.parse(new Date()),
            dataType: "json",
            success: function(a) {
                if (a) {
                    PullMsg.formatUserBetNew(a)
                }
            }
        })
    },
    getLotteryData: function(a) {
		//HttpUtil.GetUrlPara()["date"].split(" ")[0];
        $.get("/game/getLotteryData.do?t="+Date.parse(new Date()), {
            gameId: $.cookie("home_game_id")
        },
        function(b) {
            if (b) {
                PullMsg.formatUserTotalMoney(b);
                PullMsg.formatUserMoney(b, a);
                PullMsg.formatUserBetNew(b.userBetNew)
            }
        },
        "json")
    },
    formatUserBetNew: function(e) {
        if (e && e.length > 0) {
            var c = "";
            var o = '	        		<li>		        		<p>期号：<span class="bid">{turnNum}</span></p>				        <p>内容：<span class="text">{playCateName} {alias} {playName} {multiple} {betInfo}</span>@ <span class="odds">{odds}</span></p>				        <p>金额：￥{money}</p>				    </li>	        		';
            for (var f = 0; f < e.length; f++) {
                var l = e[f];
                if (l) {
                    var a = l.playId;
                    var b = getPlay(a);
                    var j = getPlayCate(b.playCateId);
                    var n = j.name;
                    var g = "";
                    if (b.alias) {
                        g = b.alias
                    }
                    if (j.isShow == 1) {
                        n = ""
                    }
                    var p = "";
                    if (l.multiple != 1) {
                        p = "&nbsp;<span style='color:#000;'>" + l.multiple + "组</span>"
                    }
                    var k = l.betInfo;
                    if (k) {
                        k = "<br><span style='color:#000;'>" + k + "</span>"
                    }
                    c += o.format({
                        playCateName: n,
                        playName: b.name,
                        odds: l.odds,
                        alias: g,
                        money: l.money,
                        multiple: p,
                        betInfo: k,
                        turnNum: l.turnNum,
                        receiveMoney: l.unbalancedMoney
                    })
                }
            }
            $("#user-bet-list").html(c);
            $("#lastBets").show()
        } else {
            $("#user-bet-list").html("");
            $("#lastBets").hide()
        }
    },
    formatUserMoney: function(c, a) {
        if (c) {
            PullMsg.animateUserMoney(c.balance, a);
            var b = renderMoney(c.unbalancedMoney);
            if (a > 0) {
                $("#userinfo_unbalancedMoney").animateNumber({
                    number: b
                },
                a)
            } else {
                $("#userinfo_unbalancedMoney").html(b)
            }
        }
    },
    animateUserMoney: function(b, a) {
        $("#userinfo_money").html(renderMoney(b))
    },
    formatUserTotalMoney: function(a) {
        var b = renderMoney(a.totalTotalMoney);
        PullMsg.totalWinMoney = b;
        RequestIssue.showWinMoney()
    },
    formatWinMsg: function(b) {
        if (b && b.length > 0) {
            $("#user_msg_content").html("");
            var c = "";
            var a = '<li>{gameName} 第 {turnNum} 期 {playCateName} {alias} {playName} 已中奖 {winCount} {winBill},中奖金额 <span style="color:#e04f4c">{rewardRebate}</span></li>';
            $(b).each(function(g, n) {
                if (n && n.rewardRebate > 0) {
                    var e = n.playId;
                    var q = getGameById(n.gameId);
                    var f = getPlay(e);
                    var j = getPlayCate(f.playCateId);
                    var p = j.name;
                    if (j.isShow == 1) {
                        p = ""
                    }
                    var k = "";
                    if (f.alias) {
                        k = f.alias
                    }
                    var o = "";
                    var l = "";
                    if (n.winCount > 1) {
                        o = n.winCount + "注,";
                        l = "中奖号码" + n.remark
                    }
                    c += a.format({
                        gameName: q.name,
                        turnNum: n.turnNum,
                        playCateName: p,
                        playName: f.name,
                        alias: k,
                        rewardRebate: renderMoney(n.rewardRebate),
                        winCount: o,
                        winBill: l
                    })
                }
            });
            PullMsg.showWin(c, b.length)
        }
    },
    formatPushMessage: function(a) {
        if (a) {
            var b = "<li>" + a.message + "</li>";
            if (a.channel != 8) {
                PullMsg.showWin(b, 0)
            } else {
                layer.alert(a.message)
            }
            if (a.channel != 1 && a.channel != 2 && a.channel != 3 && a.channel != 4 && a.channel != 8) {
                PullMsg.getLotteryData()
            }
        }
    },
    showWin: function(c, a) {
        if (c) {
            var b = (userMsgListElementId += 1);
            PullMsg.showUserMsgWiondow(c, {
                id: "user_msg_list" + b
            });
            var e = $("#content_user_msg_list" + b);
            if (a && a > 4) {
                e.css("height", 300);
                e.css("overflow-y", "auto")
            } else {
                e.css("height", "auto");
                e.css("overflow-y", "hidden")
            }
        }
    },
    showUserMsgWiondow: function(b, a) {
        new popTips({
            str: b,
            show: true,
            id: a.id
        })
    }
};
var mainTimer = null;
var requestCurOpenNumTime = null;
var refreshTimeUi = null;
var postcodeendtime = null;
var openTimeCountdownSeconds = null;
var RequestIssue = {
    pageLoaded: false,
    getCurIssue: function() {
        $.ajax({
            type: "GET",
            url: staticFileUrl + "/data/CurIssue.js",
			data:"gameId=" + UserBet.gameId,
            dataType: "jsonp",
            jsonpCallback: "jsonpCallback",
            success: function(b) {
                if (b) {				
                    if (b.gameId != HomeMenu.getHomeGameId()) {
                        return
                    }
                    var a = RequestIssue.getCurTurnNum();
                    if (a != b.issue) {
                        RequestIssue.processCode(b.issue, b.nums);
                        RequestIssue.getTimeoutStatData();
                        RequestIssue.doPaylWin();
                        RequestIssue.getTimeoutLotteryData();
                        RequestIssue.showStatGame();
                        clearInterval(requestCurOpenNumTime);
                        requestCurOpenNumTime = null
                    }
                }
            }
        })
    },
    getCurTurnNum: function() {
        var a = $("#cur_turn_num").html();
        return parseInt(a || 0)
    },
    getTimeoutLotteryData: function() {
        setTimeout(function() {
            PullMsg.getLotteryData();
            PullMsg.getUserMsg(200)
        },
        700)
    },
    getTimeoutStatData: function() {
        setTimeout(function() {
            UserBet.getStats()
        },
        1000)
    },
    processCode: function(b, j) {
        if (!b || !j) {
            return
        }
        var g = new Array();
        if (j.indexOf(",") != -1) {
            g = j.split(",")
        } else {
            if (j.indexOf(" ") == -1) {
                g = j.split("")
            } else {
                g = j.split(" ")
            }
        }
        var a = "";
        var k = "";
		var bb= "";

        if (UserBet.gameId == 50 || UserBet.gameId == 55 || UserBet.gameId == 72) {
            for (var e in g) {
                var c = parseInt(g[e], 10);
                a += '<span><b class="b' + c + ' T_PK10 L_BJPK10">' + c + "</b></span>"
            }
			var temp=parseInt(g[0])+parseInt(g[1]);
			//alert(temp%2==0?"双":"单");
			bb+="<span>"+temp+"</span><span>"+(temp<12?"小":"大")+"</span><span>"+(temp%2==0?"双":"单")+"</span><span>"+(parseInt(g[0])>parseInt(g[9])?"龙":"虎")+"</span><span>"+
			(parseInt(g[1])>parseInt(g[8])?"龙":"虎")+"</span><span>"+(parseInt(g[2])>parseInt(g[7])?"龙":"虎")+"</span><span>"+(parseInt(g[3])>parseInt(g[6])?"龙":"虎")+"</span><span>"+(parseInt(g[4])>parseInt(g[5])?"龙":"虎")+"</span>";
            k = "T_PK10 L_BJPK10"
        } else {
            if (UserBet.gameId == 65) {
                for (var e = 0; e < g.length; e++) {
                    a += '<span><b class="b' + g[e] + '">' + g[e] + "</b></span>"
                }
                k = "T_KL8 L_BJKL8"
            } else {
                if (UserBet.gameId == 1 || UserBet.gameId == 3 || UserBet.gameId == 73) {
					var sum=0;
                    for (var e = 0; e < g.length; e++) {
                        a += '<span><b class="b' + g[e] + '"></b></span>';
						sum+=parseInt(g[e]);
						g[e]=parseInt(g[e]);
                    }
					bb+="<span>"+sum+"</span><span>"+(sum>=23?"大":"小")+"</span><span>"+(sum%2==0?"双":"单")+"</span><span>"+(g[0]>g[4]?"龙":"虎")+"</span>";
                    k = "T_SSC L_CQSSC"
                } else {
                    if (UserBet.gameId == 21) {
						var sum=0;
						//g.remove(g.length);
                        console.log(JSON.stringify(g));
						for (var e = 0; e <= g.length-1; e++) {
                            a += '<span><b class="b' + g[e] + '"></b></span>';
							sum+=parseInt(g[e]);
							g[e]=parseInt(g[e]);
                        }
						//alert(sum%2==0);
						//alert(sum%2==0?"双":"单");
						bb+="<span>"+sum+"</span><span>"+(sum%2==0?"双":"单")+"</span><span>"+(sum>=85?"大":(sum<=83?"小":"和"))+"</span><span>"+(sum%10>=5?"尾大":"尾小")+"</span><span>"+(g[0]>g[7]?"龙":"虎")+"</span>";
                        k = "T_KLSF L_GDKLSF"
                    } else if (UserBet.gameId == 60) {
                        var sum=0;
                        //g.remove(g.length);
                        console.log(JSON.stringify(g));
                        for (var e = 0; e < g.length; e++) {
                            a += '<span><b class="b' + g[e] + '"></b></span>';
                            sum+=parseInt(g[e]);
                            g[e]=parseInt(g[e]);
                        }
                        //alert(sum%2==0);
                        //alert(sum%2==0?"双":"单");
                        bb+="<span>"+sum+"</span><span>"+(sum%2==0?"双":"单")+"</span><span>"+(sum>=85?"大":(sum<=83?"小":"和"))+"</span><span>"+(sum%10>=5?"尾大":"尾小")+"</span><span>"+(g[0]>g[7]?"龙":"虎")+"</span>";
                        k = "T_KLSF L_GDKLSF"
                    } else {
                        if (UserBet.gameId == 10) {
                            for (var e = 0; e < g.length; e++) {
                                a += ' <span><b class="b' + g[e] + ' ml20">' + g[e] + "</b></span>";
								bb+="<span>"+g[e]+"</span>";
                            }
                            k = "T_K3 L_GXK3"
                        } else {
                            if (UserBet.gameId == 61) {
								var sum=0;
                                for (var e = 0; e < g.length; e++) {
                                    a += ' <span><b class="b' + g[e] + ' ml10">' + g[e] + "</b></span>";
									sum+=parseInt(g[e]);
									g[e]=parseInt(g[e]);
                                }
								bb+="<span>"+sum+"</span><span>"+(sum>=23?"大":"小")+"</span><span>"+(sum%2==0?"双":"单")+"</span><span>"+(g[0]>g[4]?"龙":"虎")+"</span>";
                                k = "T_KLSF L_XYNC"
                            } else {
                                if (UserBet.gameId == 70 || UserBet.gameId == 74) {
                                    for (var e = 0; e < g.length; e++) {
                                        if (e == 6) {
                                            a += '<span class="plus">+</span>'
                                        }
                                        a += '<span><b class="b' + g[e] + '">' + g[e] + "</b><i>" + LHC_KJTZ.getZodica(g[e]) + "</i></span>"
                                    }
                                    k = "T_HK6 L_HK6"
                                } else {
                                    if (UserBet.gameId == 66) {
                                        var f = 0;
                                        for (var e = 0; e < g.length; e++) {
                                            a += '<span class="ball mr15 c-b1">' + g[e] + "</span>";
                                            f += parseInt(g[e]);
											g[e]=parseInt(g[e]);
                                        }
                                        a += '<span style="margin:5px;5px;0px;0px; color:#fff">总和：</span>';
                                        a += '<span class="ball mr15 c-b1">' + f + "</span>"
                                    } else {
                                        for (var e = 0; e < g.length; e++) {
                                            a += '<span class="ball mr15 c-b1">' + g[e] + "</span>"
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $("#result_balls").removeClass().addClass(k).html(a+"<div style='position:absolute;width:400px;top:39px;left:0px'>"+bb+"</div>");
        $("#cur_turn_num").html(b)
    },
    clearInterval: function() {
        clearInterval(refreshTimeUi);
        refreshTimeUi = null;
        clearInterval(requestCurOpenNumTime);
        requestCurOpenNumTime = null
    },
    curIssue: 0,
    betDate: null,
    openDate: null,
    showPageName: function(a) {
        if (!RequestIssue.pageLoaded) {
            return
        }
        framePage.$("#page_game_name").html(UserBet.currGame.name);
        framePage.$("#page_name").html($("#cate_menus_" + UserBet.gameId + " .selected").html())
    },
    showTeam: function() {
        if (!RequestIssue.pageLoaded) {
            return
        }
        var b = "00:00";
        var a = "00:00";
        if (UserBet.checkIsAdminStop()) {
            b = "已封盘";
            a = "已封盘"
        } else {
            b = RequestIssue.getBetTimeStr(RequestIssue.betDate);
            a = RequestIssue.getOpenTimeStr(RequestIssue.openDate)
        }
        framePage.$("#next_turn_num").html(RequestIssue.curIssue);
        framePage.$("#bet-date").html(b);
        framePage.$("#open-date").html(a)
    },
    showStatPlay: function() {
        if (!RequestIssue.pageLoaded) {
            return
        }
        framePage.$("#stat_play_list_desc").html(UserBet.statPlayTitle);
        framePage.$("#stat_play_list").html(UserBet.statPlayHtml)
    },
    showStatGame: function() {
        if (framePage.StatGame) {
            framePage.StatGame.stat(UserBet.gameId)
        }
    },
    showWinMoney: function() {
        if (!RequestIssue.pageLoaded) {
            return
        }
        framePage.$("#total_sum_money").html(PullMsg.totalWinMoney)
    },
    getNextIssue: function(a) {
        if (!UserBet.gameId) {
            return
        }
        $.ajax({
            type: "get",
            url: staticFileUrl + "/data/NextIssue.js",
			data: "gameId=" + UserBet.gameId,
            dataType: "jsonp",
            jsonpCallback: "jsonpNextIssueCallback",
            error: function() {
                UserBet.isStop = false;
                RequestIssue.clearInterval();
                RequestIssue.getNextIssue(a)
            },
            success: function(b) {
                UserBet.isStop = false;
                RequestIssue.clearInterval();
                if (b && b.gameId != HomeMenu.getHomeGameId()) {
                    return
                }
                if (b && b.issue) {
                    if (b.preNum) {
                        RequestIssue.processCode(b.preIssue, b.preNum)
                    } else {
                        RequestIssue.getCurIssue()
                    }
                    if (UserBet.checkIsAdminStop()) {
                        UserBet.isStop = true;
                        return
                    }
                    var c = lt_timer(SyncSysDate.getDateDiffTime(), b.endtime);
					postcodeendtime = lt_timer2(b.endtime);
                    openTimeCountdownSeconds = lt_timer(SyncSysDate.getDateDiffTime(), b.lotteryTime);
                    RequestIssue.curIssue = b.issue;
                    RequestIssue.betDate = diff(c--);
                    RequestIssue.openDate = diff(openTimeCountdownSeconds);
                    if (isThere(c)) {
                        UserBet.isStop = true
                    }
                    if (openTimeCountdownSeconds < -3600) {
                        UserBet.isStop = true;
                        UserBet.stopBet();
                        return
                    }
                    if (UserBet.gameId == 70 && b.issue == b.preIssue) {
                        UserBet.isStop = true;
                        UserBet.stopBet();
                        return
                    }
                    if (a) {
                        a()
                    }
                    framePage.$("#next_turn_num").html(RequestIssue.curIssue);
                    framePage.$("#bet-date").html(RequestIssue.getBetTimeStr(diff(c)));
                    framePage.$("#open-date").html(RequestIssue.getOpenTimeStr(diff(openTimeCountdownSeconds)));
                    refreshTimeUi = window.setInterval(function() {
                        openTimeCountdownSeconds--;
                        RequestIssue.betDate = diff(c--);
                        RequestIssue.openDate = diff(openTimeCountdownSeconds);
                        RequestIssue.showTeam();
                        if (UserBet.isStop === false) {
                            if (isThere(c)) {
                                UserBet.stopBet()
                            }
                        }
                        if (openTimeCountdownSeconds <= 0) {
                            UserBet.isStop = false;
                            UserBet.getDataInit();
                            RequestIssue.getNextIssue()
                        }
                        var e = RequestIssue.getCurTurnNum();
                        var g = parseInt(b.issue);
                        if ((g - e) > 1 && !requestCurOpenNumTime) {
                            var f = 0;
                            requestCurOpenNumTime = window.setInterval(function() {
                                f += 1;
                                if (f % 2 == 0) {
                                    if (f <= 60) {
                                        RequestIssue.getCurIssue()
                                    }
                                }
                                if (f > 60) {
                                    if (f % 5 == 0) {
                                        RequestIssue.getCurIssue()
                                    }
                                }
                            },
                            1000)
                        }
                    },
                    1000)
                } else {
                    UserBet.stopBet()
                }
            }
        })
    },
    doPlay: function() {
        if (SoundManage.isPlaySound()) {
            var b = $("#duSound");
            b[0].load ? (b[0].load(), b[0].play()) : (b.length && b.remove(), b = document.createElement("bgsound"), b.id = "duSound", b.src = b.attr('src'), b.loop = 1, $(b).appendTo(document.body))
        }
    },
    doPaylWin: function() {
        if (SoundManage.isPlaySound()) {
            var b = $("#winSound");
			//b[0].play();
			
            b[0].load ? (b[0].load(), b[0].play()) : (b.length && b.remove(), b = document.createElement("bgsound"), b.id = "winSound", b.src = "/static/sound/win.mp3", b.loop = 1, $(b).appendTo(document.body))
        }
    },
    getBetTimeStr: function(a) {
        if (!a) {
            return "已封盘"
        }
        var b = "" + (a.day > 0 ? a.day + lot_lang.dec_s21 + " ": "") + (a.hour > 0 ? fftime(a.hour) + ":": "") + fftime(a.minute) + ":" + fftime(a.second);
        if (b == "00:00") {
	
            return "已封盘"
        }
        return b
    },
    getOpenTimeStr: function(b) {
        if (!b) {
			var b = $("#winSound");
			//b[0].play();
            return "已封盘"
        }
        var a = "" + (b.day > 0 ? b.day + (lot_lang.dec_s21) + " ": "") + (b.hour > 0 ? fftime(b.hour) + ":": "") + fftime(b.minute) + ":" + fftime(b.second);
        if (a == "00:00") {
			var b = $("#duSound");
			b[0].play();
            return "已结束"
        }
        return a
    }
};
function isThere(a) {
    if (a <= 0) {
        return true
    } else {
        if (UserBet.gameId == 70) {
            return false
        } else {
            if (UserBet.gameId != 70 && a > 10 * 60) {
                return true
            } else {
                return false
            }
        }
    }
}
function lt_timer(c, a) {
    var b = -1;
    if (c && a) {
        b = (format(a).getTime() - c) / 1000
    }
    return b
}
function lt_timer2(a) {
    var b = -1;
    if (a) {
        b = (format(a).getTime()) / 1000
    }
    return b
}
function fftime(a) {
    return Number(a) < 10 ? "" + 0 + Number(a) : Number(a)
}
function format(a) {
    return new Date(a.replace(/[\-\u4e00-\u9fa5]/g, "/"))
}
function diff(a) {
    return a > 0 ? {
        day: Math.floor(a / 86400),
        hour: Math.floor(a % 86400 / 3600),
        minute: Math.floor(a % 3600 / 60),
        second: Math.floor(a % 60)
    }: {
        day: 0,
        hour: 0,
        minute: 0,
        second: 0
    }
}
function nowstime() {}
var SoundManage = {
     voiceSwitch: function() {
        var a = $("#countdown_sound");
        var c = a.attr("title");
        a.removeClass("open_sound close_sound");
		a.removeClass("open_sound");
        var b = new Date();
		 $('#duSound')[0].play();
         console.log($('#duSound')[0]);
		 //alert($('#duSound').attr('src'));
        b.setTime(b.getTime() + (300 * 24 * 60 * 60 * 1000));
		$.cookie("countdown_sound", "open_sound", {
                expires: b
            });
        /*if (c == "点击关闭提醒声音") {
            a.addClass("close_sound");
            a.attr("title", "点击开启提醒声音");
            $.cookie("countdown_sound", "close_sound", {
                expires: b
            })
        } else {
            a.addClass("open_sound");
            a.attr("title", "点击关闭提醒声音");
            $.cookie("countdown_sound", "open_sound", {
                expires: b
            })
        }*/
    },
   /* initVoiceSwitch: function() {
        var a = $.cookie("countdown_sound") || "open_sound";
        if (a == "close_sound") {
            var b = $("#countdown_sound");
            //b.removeClass("open_sound close_sound");
           // b.addClass("close_sound");
            b.attr("title", "音效一")
        }
    },
	//$.cookie("countdown_sound") || 
    isPlaySound: function() {
        var a = "open_sound";
        return a == "open_sound"
    }*/
	initVoiceSwitch: function() {
        var a = $.cookie("countdown_sound") || "open_sound";
        if (a == "close_sound") {
            var b = $("#countdown_sound");
           // b.removeClass("open_sound close_sound");
            //b.addClass("close_sound");
            //b.attr("title", "点击开启提醒声音")
        }
    },
    isPlaySound: function() {
        var a = $.cookie("countdown_sound") || "open_sound";
        return a == "open_sound"
    }
};
var UserInfos = {
    showUpdatePwWin: function() {
        var a = '				<div style="margin: 10px 0px 0px 30px;line-height:30px;">您的账号长时间未更改登录密码，请修改您的登录密码：					<div class="wd-col1">当前密码：&nbsp;&nbsp;<input type="password" id="loginpwd"></div>					<div class="wd-col1">新&nbsp;&nbsp;密&nbsp;码：&nbsp;&nbsp;<input type="password" id="newpwd"></div>					<div class="wd-col1">确认密码：&nbsp;&nbsp;<input type="password" id="rednewpwd"></div>				</div>';
        layer.open({
            title: "修改密码",
            type: 1,
            area: ["350px", "220px"],
            closeBtn: 0,
            shift: 2,
            shadeClose: false,
            btn: ["确定"],
            yes: function(b) {
                return UserInfos.updatePw()
            },
            content: a
        })
    },
    updatePw: function() {
        var b = $("#loginpwd").val();
        var a = $("#newpwd").val();
        var c = $("#rednewpwd").val();
        if (b == "") {
            layer.alert("当前密码不得为空", {
                icon: 2
            });
            return
        }
        if (a == "") {
            layer.alert("新密码不得为空", {
                icon: 2
            });
            return
        }
        if (a.length < 6 || a.length > 20) {
            layer.alert("新密码长度请设置 6~20 位", {
                icon: 2
            });
            return
        }
        if (b == a) {
            layer.alert("当前密码与新密码不能一至！", {
                icon: 2
            });
            return
        }
        if (a != c) {
            layer.alert("确认密码不一至，请重新输入", {
                icon: 2
            });
            return
        }
        $.ajax({
            type: "POST",
            data: {
                oldPwd: b,
                newPwd: a
            },
            url: "/safe/setPasswd.do?t=" + Date.parse(new Date()),
            success: function(g) {
                if (g) {
                    layer.alert(g,
                    function() {
                        layer.closeAll()
                    })
                }
            }
        })
    }
};