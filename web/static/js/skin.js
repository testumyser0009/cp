$(function () {
    var a = [["red", "\u7ea2\u8272", "#dc2f39"], ["blue", "\u84dd\u8272", "#5382bc"]], b = $("#skinPanel"), d;
    if (b.length) {
        var c = function () {
            clearTimeout(d);
            b.addClass("skinHover");
            g.show();
            h.text("\u25b2")
        }, e = function () {
            clearTimeout(d);
            d = setTimeout(function () {
                b.removeClass("skinHover");
                g.hide();
                h.text("\u25bc")
            }, 100)
        }, g = $("<ul>").hide().appendTo(b), h = b.find("span");
        b.hover(c, e);
        g.hover(c, e);
        for (c = 0; c < a.length; c++) {
            var f = a[c], k = $("<li>").appendTo(g);
            k.append($("<i>").attr("style",
                "background:" + f[2]));
            $("<a>").attr("href", "javascript:changeSkin('" + f[0] + "')").click(e).text(f[1]).appendTo(k)
        }
    }
    f = $.cookie("_skin_");
    f || (f = getDefaultSkin()) || (f = a[1][0]);
    setSkin(f, $("body"))
});
function getDefaultSkin() {
    var a = _getClass();
    if (a)for (var b = 0; b < a.length; b++)if (a[b] && 0 === a[b].indexOf("skin_"))return a[b].substring(5)
}
function _getClass(a) {
    a || (a = $("body"));
    if (a = a.attr("class"))return a.split(" ")
}
function setSkin(a, b) {
    var d = _getClass(b), c = "";
    if (d)for (var e = 0; e < d.length; e++)d[e] && 0 !== d[e].indexOf("skin_") && (c += d[e] + " ");
    b.attr("class", c + "skin_" + a)
}
function changeSkin(a) {
	console.log(a);
    setSkin(a, $("body"));
    $.cookie("_skin_") != a && $.cookie("_skin_", a, {path: '/'});
    window.localStorage.setItem('skin',a);
    
    $("iframe").each(function () {
        setSkin(a, this.contentWindow.$("body"))
    })
};
