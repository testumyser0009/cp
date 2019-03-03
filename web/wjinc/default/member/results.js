var lottery,Results=function(){
    var m={
        dx:{
            D:"\u5927",X:"\u5c0f",T:"\u548c",N:"\u901a\u5403",LOSE:"\u8f93"
        }
        ,xwdx:{
            D:"\u5927",X:"\u5c0f",T:"\u548c",N:"\u901a\u5403"
        }
        ,ds:{
            D:"\u5355",S:"\u53cc",T:"\u548c",LOSE:"\u8f93"
        }
        ,hds:{
            D:"\u5355",S:"\u53cc",T:"\u548c"
        }
        ,lh:{
            L:"\u9f99",H:"\u864e",T:"\u548c"
        }
        ,sb:{
            R:"\u7ea2",G:"\u7eff",B:"\u84dd"
        }
        ,fw:{
            0:"\u4e1c",1:"\u5357",2:"\u897f",3:"\u5317"
        }
        ,zfb:{
            0:"\u4e2d",1:"\u53d1",2:"\u767d"
        }
        ,wx:{
            0:"\u91d1",1:"\u6728",2:"\u6c34",3:"\u706b",4:"\u571f"
        }
        ,flsx:{
            F:"\u798f",L:"\u7984",
            S:"\u5bff",X:"\u559c",T:"\u548c"
        }
        ,qh:{
            Q:"\u524d",H:"\u5f8c",T:"\u548c"
        }
        
    };
    return{
        inited:!1,tabKeys:null,maxCols:25,index:null,init:function(b,h,f,c,a,e){
            var d=$("#resultPanel");
            d.length||(d=$('<div id="resultPanel">').appendTo($("#main")));
            null!=h&&null!=f&&(this.minBall=h,this.maxBall=f,this.index=a||1,this.ballTotal=!!e,this.initBallPanel(d,c));
            this.tabs=b;
            this.initTabs(d);
            this.inited=!0
        }
        ,initBallPanel:function(b,h){
            for(var f=$("<tr>").appendTo($("<table>").addClass("tabTitle").appendTo(b)),c=this,
            a=0;
            a<h.length;
            a++){
                var e=h[a],e=$("<a>").data("idx",a+1).text(e).attr("href","javascript:void(0)");
                e.appendTo($("<th>").appendTo(f));
                e.click(function(){
                    var a=$(this);
                    a.parent().parent().find("th.selected").removeClass("selected");
                    a.parent().addClass("selected");
                    c.changeBall(a.text(),a.data("idx"))
                })
            }
            f.find("a").eq(this.index-1).click();
            f=$("<table>").addClass("ballTable").appendTo(b);
            if("XYNC"==lottery){
                e=$("<tr>").addClass("head").appendTo(f);
                e.append($("<th>").text("\u7c7b\u578b").addClass("title"));
                for(var d="\u897f\u74dc \u6930\u5b50 \u69b4\u83b2 \u67da\u5b50 \u83e0\u841d \u8461\u8404 \u8354\u679d \u6a31\u6843 \u8349\u8393 \u756a\u8304 \u68a8\u5b50 \u82f9\u679c \u6843\u5b50 \u67d1\u6a58 \u51ac\u74dc \u841d\u535c \u5357\u74dc \u8304\u5b50 \u5bb6\u72ac \u5976\u725b".split(" "),a=0;
                a<d.length;
                a++)e.append($("<th>").text(d[a]))
            }
            var e=$("<tr>").addClass("head").appendTo(f),d=$("<tr>").appendTo(f),g=!1;
            this.ballTotal&&(g=$("<tr>").appendTo(f),e.append($("<th>").text("\u53f7\u7801").addClass("title")),
            d.append($("<th>").text("\u51fa \u7403 \u7387")),g.append($("<th>").text("\u65e0\u51fa\u671f\u6570")));
            for(a=this.minBall;
            a<=this.maxBall;
            a++){
                var k=a;
                10<this.maxBall&&10>a&&(k="0"+a);
                e.append($("<th>").addClass("b"+a).text(k));
                d.append($("<td>").addClass("b"+a).text("0"));
                g&&g.append($("<td>").addClass("b"+a).text("0"))
            }
            this.ballTable=f;
            this.ballLine=d;
            this.ballTotalLine=g
        }
        ,initTabs:function(b){
            var h=this,f=this.tabs,c=$("<tr>").appendTo($("<table>").addClass("tabTitle").appendTo(b));
            this.tabTitles=
            c;
            var a=[],e={},d;
            for(d in f){
                var g=$("<th>").appendTo(c),k=f[d],l=$("<a>").data("option",k).text(d).attr("href","javascript:void(0)");
                2<k.length?(e[k[0]+"_"+k[2][0]]=$("<span>").appendTo(g),l.appendTo(g),e[k[0]+"_"+k[2][1]]=$("<span>").appendTo(g),a.push(k[0])):l.appendTo(g);
                ""==d&&(l.addClass("ball"),this.ballText&&l.text(this.ballText));
                l.click(function(){
                    var a=$(this);
                    a.parent().parent().find("th.selected").removeClass("selected");
                    a.parent().addClass("selected");
                    h.changeTab(a.data("option"))
                })
            }
            this.totalKeys=
            a;
            this.totalItems=e;
            this.tabPanel=$("<tr>").appendTo($("<table>").addClass("tabContents").appendTo(b));
            this.changeIndex(0)
        }
        ,changeBall:function(b,h){
            this.ballText=b;
            this.inited&&(this.tabTitles.find("a.ball").text(b),this.index=h,this.showResults())
        }
        ,changeIndex:function(b){
            this.tabTitles.find("a:eq("+b+")").click()
        }
        ,changeTab:function(b){
            this.tabKeys=b;
            this.showResults()
        }
        ,getKey:function(b){
            return null!=this.index?b.format(this.index):b
        }
        ,showBalls:function(b){
            if(this.ballLine){
                for(var h=this.getKey("B{0}"),
                f={},c=0;
                c<b.length;
                c++){ 
                    var a=Number(b[c].detail[h]),e=f[a];
                    e||(e=0);
                    e+=1;
                    f[a]=e
                }
                for(a in f)this.ballLine.children(".b"+a).text(f[a]);
                if(this.ballTotal){
                    for(var h={},e=this.maxBall-this.minBall+1,d,c=0;
                    c<b.length;
                    c++)for(var f=b[c].result.split(","),g=0;
                    g<f.length;
                    g++)if(a=Number(f[g]),void 0===h[a]&&(h[a]=c,--e,0>=e)){
                        d=c;
                        break
                    }
                    0<e&&(d=b.length);
                    this.ballTotalLine.children(".max").removeClass("max");
                    for(c=this.minBall;
                    c<=this.maxBall;
                    c++)b=h[c],void 0===b&&(b=d),a=this.ballTotalLine.children(".b"+
                    c).text(b),b==d&&a.addClass("max")
                }
                
            }
            
        }
        ,showTotal:function(b){
            var h=this.totalKeys,f=this.totalItems;
            if(0!=h.length){
                for(var c={},a=0;
                a<b.length;
                a++)for(var e=b[a],d=0;
                d<h.length;
                d++){
                    var g=h[d],k=e.detail[this.getKey(g)];
                    "*"!=k[0]&&(g=g+"_"+k,c[g]=(c[g]||0)+1)
                }
                for(var l in f)f[l].text(c[l]||0)
            }
            
        }
        ,showTabs:function(b){
            var h=this.tabPanel;
            h.empty();
            for(var f=[],c=null,a=0,e=this.getKey(this.tabKeys[0]),d=0;
            d<b.length;
            d++){
                var g=b[d].detail[e];
                if(!g)return;
                "*"==g[0]&&(g="T");
                if(g==c)a++;
                else{
                    if(c&&a&&
                    (f.push([c,a]),f.length>=this.maxCols)){
                        c=null;
                        break
                    }
                    c=g;
                    a=1
                }
                
            }
            c&&f.push([c,a]);
            f.reverse();
            g=this.maxCols-f.length;
            for(d=0;
            d<g;
            d++)h.append($("<td>").html("&nbsp;"));
            b=m[this.tabKeys[1]];
            for(d=0;
            d<f.length;
            d++){
                g=f[d];
                a=c=b?b[g[0]]:g[0];
                e=0;
                for(g=g[1]-1;
                e<g;
                e++)a+="<br/>"+c;
                h.append($("<td>").html(a))
            }
            h.children(":even").addClass("even")
        }
        ,load:function(){
            if(this.inited){
                var b=this;
                LIBS.ajax({
                    url:"/member/dayResult",data:{
                        lottery:lottery
                    }
                    ,cache:!1,success:function(h){
                        b.showResults(h)
                    }
                    
                })
            }
            
        }
        ,showResults:function(b){
            if(this.inited){
                if(b)for(var h=
                0;
                h<b.length;
                h++){
                    var f=b[h],c=f.detail;
                    if(c&&!$.isPlainObject(c)){
                        for(var a=c.split(";"),c={},e=0;
                        e<a.length;
                        e++){
                            var d=a[e];
                            d&&(d=d.split("="),c[d[0]]=d[1].split(",")[0])
                        }
                        f.detail=c
                    }
                    
                }
                else b=this.results;
                b&&(this.showBalls(b),this.showTotal(b),"undefined"==typeof window.IS_MOBILE&&this.showTabs(b),this.results=b)
            }
            
        }
        
    }
    
}
();
