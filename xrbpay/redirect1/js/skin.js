function getSkinColor(){skinColor=LIBS.cookie("_skin_")}$(function(){var g=[["red","红色","#dc2f39"],["blue","蓝色","#5382bc"],["gray","灰色","#cdcdcd"]];var a=$("#skinPanel");var b;if(a.length){var f=$("<ul>").hide().appendTo(a);var h=a.find("a span");function c(){clearTimeout(b);b=setTimeout(function(){a.removeClass("skinHover");f.hide();h.text("▼")},100)}function d(){clearTimeout(b);a.addClass("skinHover");f.show();h.text("▲")}a.find("a").hover(d,c);f.hover(d,c);for(var e=0;e<g.length;e++){var k=g[e];var j=$("<li>").appendTo(f);j.append($("<i>").attr("style","background:"+k[2]));$("<a>").attr("href","javascript:changeSkin('"+k[0]+"')").click(c).text(k[1]).appendTo(j)}}var k=LIBS.cookie("_skin_");if(!k){k=getDefaultSkin();if(!k){k=g[1][0]}}setSkin(k,$("body"))});function getDefaultSkin(){var b=_getClass();if(b){for(var a=0;a<b.length;a++){if(b[a]){if(b[a].indexOf("skin_")===0){return b[a].substring(5)}}}}}function _getClass(b){if(!b){b=$("body")}var a=b.attr("class");if(a){return a.split(" ")}}function setSkin(c,e){var d=_getClass(e);var a="";if(d){for(var b=0;b<d.length;b++){if(d[b]){if(d[b].indexOf("skin_")===0){continue}a+=d[b]+" "}}}e.attr("class",a+"skin_"+c)}function changeSkin(a){setSkin(a,$("body"));if(LIBS.cookie("_skin_")!=a){LIBS.cookie("_skin_",a)}$("#frame").each(function(){setSkin(a,this.contentWindow.$("body"))})};