var SP_NAMES,MULTIPLE,TEXT_PREFIX,TEXT_POSTFIX,lottery,bettingStatus,Results,ResultPanel,gameName,games,PAGE,oldOdds=null;
$(function(){
    "HK6"==template&&$("#changlong").width("170px");
    SP_NAMES&&$("#bet_panel th.tsname,.bet_content .tsname").each(function(){
        var k=$(this),a=k.text();
        k.empty();
        for(var k=$("<div>").appendTo(k),d=0,b=a.length;
        d<b;
        d++){
            var e=a.charAt(d);
            k.append($("<span>").addClass("b"+e).text(e))
        }
        
    });
    if(MULTIPLE){
        $("#header .control").hide();
        $("#btnReset").attr("disabled",!0).addClass("button_disabled");
        $("#btnBet").attr("disabled",!0).addClass("button_disabled");
        var b,e,a=MULTIPLE[0];
        0==a?$("input[name=game]").click(function(){
            b=$(this).val().split(",");
            resetBets()
        }).attr("checked",!1):1==a?(b=MULTIPLE[3],e=function(k,a){
            $(".bet_panel .odds:visible").hide();
			if( k>=b[0]&&k<=b[1] ){$("#idname").html(MULTIPLE[5]+"("+k+MULTIPLE[4]+")");
			}else{$("#idname").html(MULTIPLE[6]);}
            k>=b[0]&&k<=b[1]?$("#o_"+MULTIPLE[1]+"_"+k).show():$("#empOdds").show()
        }):2==a?b=MULTIPLE[3]:3==a&&(e=function(k,a,d){
            var b=!0;
            $(".status_panel table").each(function(){
                if(0==$(this).find("input:checked").length)return b=!1
            });
            $(".bcontrol input:text").prop("disabled",!b);
            MULTIPLE[3]&&$(".status_panel input[value="+d.val()+"]").not(d).prop("disabled",a)
        });
        $(".status_panel .check").click(function(k){
            if(!bettingStatus)return!1;
            var a=$(this).find("input");
            if(a.prop("disabled"))return!1;
            var d=a.prop("checked"),c=$(".status_panel input:checked").length;
            k.target==this&&(d=!d)&&(c+=1);
            d||c;
            a.prop("checked",d);
            e&&e(c,d,a);
            $(this).toggleClass("selected",d);
            b&&($(".bcontrol input:text").prop("disabled",c<b[0]||c>b[1]),c>=b[1]?$(".status_panel input:not(:checked)").prop("disabled",!0):$(".status_panel input:disabled").prop("disabled",!1))
        })
    }
    else{
        $("#bet_panel tr:not(.head)").each(function(){
            $(this).find("input.ba").each(function(){
                var a=
                $(this).attr("name"),b=$("#bet_panel .G"+a);
                b.hover(function(){
                    b.addClass("hover")
                }
                ,function(){
                    b.removeClass("hover")
                });
                $(this).hasClass("empty")||b.click(function(a){
                    if(bettingStatus)if(a=$(a.target),a.filter("input").length)a.val($("label.quickAmount input").val());
                    else{
                        b.toggleClass("selected");
                        a=$("#bet_panel th.selected").length;
                        var k=$("#betcount").text(a);
                        0==a?k.parent().hide():k.parent().show();
                        $(this).hasClass("selected")?b.find("input").val($("label.quickAmount input").val()):b.find("input").val("")
                    }
                    
                })
            })
        });
        $("#bet_panel .panel_yxx a").click(function(){
            var a=$(this).attr("id").substr(2);
            var b=PeriodPanel.period;
            b&&1==b.status&&(a=getBet(a))&&parent.showBets({
                lottery:lottery,drawNumber:b.drawNumber,bets:[a]
            })
        });
        var c=$("label.quickAmount input");
        c.keyup(function(){
            c.not(this).val($(this).val());
            parent&&(parent.QuickAmount=$(this).val());
            $("#bet_panel tr:not(.head)").each(function(){
                $(this).children("th").each(function(){
                    var a=$(this).attr("id").substr(2),a=$("#bet_panel .G"+a);
                    $(this).hasClass("selected")&&
                    a.find("input").val(c.val())
                })
            })
        });
        var g=$("label.checkdefault input");
        g.click(function(){
            var a=$(this).prop("checked");
            g.not(this).prop("checked",a);
            parent&&(parent.QuickAmountEnalbed=a,parent.QuickAmount=c.val())
        });
        parent&&parent.QuickAmountEnalbed&&(g.prop("checked",!0),c.val(parent.QuickAmount))
    }
    var f={
        titleConverter:function(a){
            return a=0==a.indexOf("\u51a0\u4e9a")&&-1==a.indexOf("-")?a.replace("\u51a0\u4e9a","\u51a0\u4e9a - "):a.replace("-"," - ")
        }
        ,interval:10,changlong:$("#changlong tbody"),
        onChangLongClick:function(a){
            var b=PeriodPanel.period;
            null!=b&&1==b.status&&$(".G"+a).addClass("selected").find("input").focus()
        }
        ,onPeriodChange:function(a,b){
            var c=null!=a&&1==a.status;
            toggleBet(c);
            c&&!b&&location.hash&&"undefined"==typeof window.IS_MOBILE&&$(".G"+location.hash.substr(1)).addClass("selected").find("input").focus()
        }
        ,onResultChange:function(){
            Results&&Results.load();
            ResultPanel&&ResultPanel.load()
        }
        ,onAccountUpdated:function(a){
            parent&&parent.showAccount&&parent.showAccount(a)
        }
        ,loadOptions:{
            url:"odds",
            data:{
                lottery:lottery,games:games
            }
            ,success:function(a){
                showOdds(a)
            }
            
        }
        
    };
    $.each(["cdOpen","cdClose","cdDraw"],function(a,b){
        f[b]=$("#"+b)
    });
    PeriodPanel.init(f,gameName);
    if(window.parent&&window.parent!=window){
        var h=PAGE||LIBS.getUrlParam("page"),m=LIBS.getUrlParam("index");
        window.parent.$(".sub div:visible a").removeClass("selected").each(function(){
            var a=$(this),b=a.attr("href"),c=LIBS.getUrlParam("page",b),b=LIBS.getUrlParam("index",b);
            if(!(c!=h||m&&b&&b!=m))return gameName||$("#gameName").text(a.text()),
            a.addClass("selected"),!1
        })
    }
    $("#quickControl").click(function(){
        $("#quickPanel").toggle($(this).prop("checked"))
    });
    $("input:text").keypress(function(a){
        if(13==a.keyCode)return bet(),!1
    }).onlyNumber();
    toggleBet(!1)
});
function showOdds(b){
    var e=PeriodPanel.period;
    if(b&&null!=e&&1==e.status){
        toggleBet(!0);
        for(var a in b)if(e=b[a]){
            var c=$("#o_"+a).text(e);
            oldOdds&&e!=oldOdds[a]&&c.delayClass("uptodate",3E3)
        }
        else $("#o_"+a).text("--");
        oldOdds=b
    }
    else oldOdds=null,toggleBet(!1)
}
function showBetting(b){
    b?($("#bettingStatus").show(),$("#betControl").hide()):($("#bettingStatus").hide(),$("#betControl").show())
}
function sortBets(b){
    b.sort(function(b,a){
        if(b.title!=a.title)return 0;
        var c=Number(b.contents)==b.contents,g=Number(a.contents)==a.contents;
        return c&&!g?-1:g&&!c?1:c&&g?b.contents-a.contents:0
    });
    return b
}
function toggleBet(b){
    if(null==bettingStatus||bettingStatus!==b)(bettingStatus=b)?($("#bet_panel").removeClass("bet_closed"),MULTIPLE?$(".status_panel input").prop("disabled",!1):$("#bet_panel .amount input").prop("disabled",!1)):($("#bet_panel").addClass("bet_closed"),$("#bet_panel .odds:not(.empty)").text("--"),MULTIPLE?$(".status_panel input").prop("disabled",!0):$("#bet_panel .amount input").prop("disabled",!0),resetBets())
}
function resetBets(){
    "undefined"!==typeof window.IS_MOBILE&&resetMobileAll();
    MULTIPLE?($(".status_panel .check").removeClass("selected"),$(".status_panel input:checked").prop("checked",!1),$(".bcontrol input:text").prop("disabled",!0),bettingStatus&&$(".status_panel input:disabled").prop("disabled",!1),1==MULTIPLE[0]?($(".bet_panel .odds:visible").hide(),$("#empOdds").show()):3==MULTIPLE[0]&&$("#fs_odds").text("--")):($("#betcount").parent().hide(),$("#bet_panel .selected").removeClass("selected"),
    $("#bet_panel input.ba").val(""));
    $("label.checkdefault input").is(":checked")||$("label.quickAmount input").val("")
}
function getBet(b,e){
    e||(e=$("#t_"+b));
    var a=$("#o_"+b),c=Number(a.text());
    if(!(isNaN(c)||0>=c)){
        var g=e.attr("title"),g=g.split(" ",2),f=g[1],g=1<g.length?g[0]:"",h=b.split("_"),c={
            title:g,text:f,game:h[0],contents:h[1],odds:c
        }
        ,a=Number(a.attr("lang"));
        if(0<a){
            g=[];
            for(f=1;
            f<a;
            f++)g[f-1]=$("#o_"+b+"_"+f).text();
            c.oddsDetail=g
        }
        return c
    }
    
}
function getMultipleBets(){
    function b(a,b,c,d,f){
        k.push({
            multiple:c,title:g,text:a,game:n[0],contents:b,odds:f||m,state:n[1]||0,mcount:d,amount:e
        })
    }
    var e=Math.floor(Number($(".bcontrol .quickAmount input").val()));
    if(0>=e||isNaN(e))return!1;
    var a=MULTIPLE[0],c=MULTIPLE[1],g=MULTIPLE[2],f=MULTIPLE[3],h;
    if(0==a){
        f=$("input[name=game]:checked");
        if(0==f.length)return!1;
        g=f.attr("title");
        c=f.attr("id").substr(2);
        f=f.val().split(",")
    }
    else 1==a&&(h=$(".status_panel input:checked"),c+="_"+h.length);
    var m=
    Number($("#o_"+c).text()),k=[],n=c.split("_");
    if(3==a){
        var d=[];
        $(".status_panel table").each(function(){
            var a=[];
            $(this).find("input:checked").each(function(){
                a.push($(this).val())
            });
            a.sort();
            d.push(a)
        });
        d=LIBS.comboList(d);
        for(a=0;
        a<d.length;
        a++)h=d[a],b(h,h.join(","),1)
    }
    else if(2==a){
        h=$(".status_panel input:checked");
        var d=[],l={},p={};
        h.each(function(){
            var a=$(this).val();
            d.push(a);
            l[a]=$(this).attr("title");
            p[a]=Number($("#o_"+c+"_"+a).text())
        });
        d=d.sort();
        d=LIBS.comboArray(d,f[0]);
        for(a=0;
        a<
        d.length;
        a++)h=d[a],b(LIBS.replaceArray(h,l),h.join(","),1,f[0],LIBS.replaceArray(h,p).sort(function(a,b){
            return MULTIPLE[4]?a-b:b-a
        }).shift())
    }
    else h||(h=$(".status_panel input:checked")),d=[],l={},h.each(function(){
        var a=$(this).val();
        d.push(a);
        l[a]=$(this).attr("title")
    }),d=d.sort(),g=MULTIPLE[4]?(g+" "+d.length+MULTIPLE[4]):g,f=f[0],1==a&&(f=h.length),b(LIBS.replaceArray(d,l),d.join(","),LIBS.combination(h.length,f),f);
    return k
}
function getBets(){
    var b=[];
    $("#bet_panel input.ba").each(function(){
        var e=Number($(this).val());
        if(!(0>=e||isNaN(e))){
            var a=$(this).attr("name");
            if(a=getBet(a))a.amount=e,b.push(a)
        }
        
    });
    return b
}
function bet(){
    var b=PeriodPanel.period;
    if(b&&1==b.status){
        var e;
        e=MULTIPLE?getMultipleBets():getBets();
        if(!1!==e)if(0==e.length)parent.showMsg("\u60a8\u9009\u62e9\u7684\u9879\u76ee\u5df2\u5c01\u76d8\u6216\u8f93\u5165\u7684\u91d1\u989d\u4e0d\u6b63\u786e\uff0c\u8bf7\u91cd\u65b0\u9009\u62e9\u3002");
        else{
            resetBets();
            for(var a=0;
            a<e.length;
            a++){
                var c=e[a],g=parent.getUserParam(lottery,$("#k_"+c.game+"_"+c.contents).val());
                //var c=e[a],g=parent.getUserParam(lottery,$("input[name='k_"+c.game+"_"+c.contents+"']").val());
				//alert( "val="+$("input[name='k_"+c.game+"_"+c.contents+"']").val()+";name=k_"+c.game+"_"+c.contents);
                if(g){
                    var f=!1,c=c.amount;
                    c<g.minAmount?f="\u4f60\u8f93\u5165\u7684\u91d1\u989d\u4f4e\u4e8e\u5355\u6ce8\u6700\u4f4e("+g.minAmount+")\u7684\u9650\u5236\uff01":c>g.maxAmount&&(f="\u4f60\u8f93\u5165\u7684\u91d1\u989d\u8d85\u51fa\u5355\u6ce8\u6700\u9ad8("+g.maxAmount+")\u7684\u9650\u5236\uff01");
                    if(f){
                        parent.showMsg(f);
                        return
                    }
                    
                }
                
            }
            parent.showBets({
                lottery:lottery,drawNumber:b.drawNumber,bets:e
            })
        }
        
    }
    else parent.showMsg("\u540e\u53f0\u672a\u5f00\u76d8\uff0c\u8bf7\u7b49\u5f85\u5f00\u76d8\u518d\u8bd5\u3002")
};
