$(function() {
    function e(e, t, n, s) {
        function i() {
            o < t && (o += n, e.text(o / s), setTimeout(i, 10))
        }
        var o = 100 * e.text(),
        s = s ? 100 : 10;
        i()
    }
    function t() {
        "object" != typeof $LAB ? setTimeout(t, 2e3) : initNoticeData(function(e) {
            if (e.length) {
                for (var t = '<marquee scrollamount="4" scrolldelay="30" onmouseover="this.stop();" onmouseout="this.start();" >',
                n = 0; n < e.length; n++) t += e[n].title + "：&nbsp;&nbsp;&nbsp;&nbsp;" + e[n].message + "&nbsp;&nbsp;&nbsp;&nbsp;";
                t += "</marquee>",
                $("#noticeDom").html(t)
            } else $("#noticeDom").html('<marquee scrollamount="4" scrolldelay="30" onmouseover="this.stop();" onmouseout="this.start();" >欢迎来到大唐</marquee>')
        })
    }
    if ($("#lb_Index").length) {
        $("#lb_Index").unslider({
            speed: 500,
            delay: 3500,
            keys: !0,
            dots: !0,
            fluid: !1
        })
    }
    var n = location.pathname,
    s = $("#nav li");
    n.indexOf("agent") > -1 ? s.eq(5).addClass("active") : n.indexOf("reg") > -1 ? s.eq(1).addClass("active") : n.indexOf("rules") > -1 ? s.eq(4).addClass("active") : n.indexOf("appdownload") > -1 ? s.eq(2).addClass("active") : n.indexOf("activity") > -1 ? s.eq(6).addClass("active") : n.indexOf("index") > -1 || "/" == n ? s.eq(0).addClass("active") : n.indexOf("question") > -1 && s.eq(3).addClass("active");
    var i = $("#nav .active"),
    o = $("#nav");
    s.hover(function() {
        $(this).addClass("active").siblings().removeClass("active")
    },
    function() {
        $(this).removeClass("active")
    }),
    o.on("mouseleave",
    function() {
        i.addClass("active")
    });
    var a = $("#lg_box"),
    l = a.find(".cover").next("input");
    l.on("focus",
    function() {
        $(this).siblings(".cover").hide()
    }),
    l.on("blur",
    function() {
        $(this).prop("value") || $(this).siblings(".cover").show()
    });
    var c = $("#gamelist"),
    d = c.find("a");
    d.on("mouseenter",
    function() {
        $(this).stop().animate({
            top: -5
        },
        150)
    }),
    d.on("mouseleave",
    function() {
        $(this).stop().animate({
            top: 0
        },
        150)
    }),
    $("#float_close a").click(function() {
        $("#float").hide()
    });
    var u = {
        sec: 88,
        secLeft: -60,
        min: 138,
        minLeft: -30,
        type: 1
    },
    f = $("#sec"),
    r = $("#secLine"),
    m = $("#min"),
    v = $("#minLine");
    $(window, document).scroll(function() {
        if (nowH = $(window).scrollTop(), u.type && (nowH > 500 && (r.animate({
            left: u.secLeft
        },1200), e(f, u.sec, 1)), nowH > 530)) {
            v.animate({
                left: u.minLeft
            },
            1200);
            m.text();
            e(m, u.min, 1, 1),
            u.type = 0
        }
    });
    var p = $("#rules a"),
    h = $("#rules .drop");
    p.on("click",
    function() {
        var e = $(this),
        t = e.next(".drop");
        e.hasClass("on") ? (e.removeClass("on"), t.slideUp("fast")) : (h.slideUp("fast"), e.addClass("on").siblings().removeClass("on"), t.slideDown("fast"))
    }),
    setTimeout(t, 2e3)
});