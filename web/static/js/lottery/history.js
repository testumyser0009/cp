var PCDD_DATA={
    HONG_NUMS :[ 3, 6, 9, 12, 15, 18, 21, 24 ],
    LV_NUMS :  [ 1, 4, 7, 10, 16, 19, 22, 25 ],
    LAN_NUMS : [ 2, 5, 8, 11, 17, 20, 23, 26 ]
}
var History = {
    getHistoryData : function(gameId,date) {
        if (!gameId) {
            gameId = $("#historyQueryParamGameId").val();
        }
        if (!date) {
            date = $("#historyQueryParamOpenTime").val() || "";
        }



//		$("#lotteryPage").load(
//				pageUrl,
//				{
//					t : Date.parse(new Date())
//				},
//				function() {
//					ShowNewPageInit();
        var count=gameMap[gameId].amount;
        if(count==1){
            count=40;
        }
        var dateStr="";
        if(date){
            dateStr=date.replace(/-/g,"");
        }else{
            if(gameId!=70||gameId!=74){
                date=moment();
                if(gameId==55 || gameId==50 || gameId==65 || gameId==21 || gameId==10 || gameId==60 || gameId==66){//次日5点前不开奖的彩种
                    if(date.hour()<=5){
                        date=date.add(-1, 'days');
                    }
                }
                dateStr=date.format("YYYYMMDD");
                date=date.format("YYYY-MM-DD");
                $("#historyQueryParamOpenTime").val(date);
            }
        }
        if(gameId==70||gameId==74){
            dateStr="";
        }
        $.ajax({
            type:"get",
            url:staticFileUrl+"/data/HistoryLottery.js",
            data:"dateStr="+dateStr+"&gameId="+gameId,
            dataType:"jsonp",
            jsonpCallback:"jsonpCallback",
            success:function(d){
                if(d){
                    History.formatData(gameId, d);
                }
                if (date) {
                    $("#historyQueryParamOpenTime").val(date);
                }
                if (gameId) {
                    $("#historyQueryParamGameId").val(gameId);
                }
            }
        });

    },
    formatData : function(gameId, data) {
        var htmlStr = "";
        if (gameId == 50||gameId == 55||gameId == 72) {
            var formatStr = "<tr><td>{turnNum}</td><td>{openTime}</td><td><span class='ball c-n{n1}'></span></td><td><span class='ball c-n{n2}'></span></td><td><span class='ball c-n{n3}'></span></td><td><span class='ball c-n{n4}'></span></td><td><span class='ball c-n{n5}'></span></td><td><span class='ball c-n{n6}'></span></td><td><span class='ball c-n{n7}'></span></td><td><span class='ball c-n{n8}'></span></td><td><span class='ball c-n{n9}'></span></td><td><span class='ball c-n{n10}'></span></td><td>{gyh}</td><td>{gydx}</td><td>{gyds}</td><td>{lh1}</td><td>{lh2}</td><td>{lh3}</td><td>{lh4}</td><td>{lh5}</td></tr>";
            for ( var i in data) {
                var d = data[i];
                var gyh = d.n1 + d.n2;
                var gydx = gyh > 11 ? "<span class='font_red'>大</span>" : "小";
                var gyds = gyh % 2 == 0 ? "<span class='font_red'>双</span>"
                    : "单";
                var lh1 = d.n1 > d.n10 ? "<span class='font_red'>龙</span>"
                    : "虎";
                var lh2 = d.n2 > d.n9 ? "<span class='font_red'>龙</span>" : "虎";
                var lh3 = d.n3 > d.n8 ? "<span class='font_red'>龙</span>" : "虎";
                var lh4 = d.n4 > d.n7 ? "<span class='font_red'>龙</span>" : "虎";
                var lh5 = d.n5 > d.n6 ? "<span class='font_red'>龙</span>" : "虎";
                htmlStr += formatStr.format({
                    "turnNum" : d.turnNum,
                    "openTime" : d.openTime,
                    "n1" : d.n1,
                    "n2" : d.n2,
                    "n3" : d.n3,
                    "n4" : d.n4,
                    "n5" : d.n5,
                    "n6" : d.n6,
                    "n7" : d.n7,
                    "n8" : d.n8,
                    "n9" : d.n9,
                    "n10" : d.n10,
                    "gyh" : gyh,
                    "gydx" : gydx,
                    "gyds" : gyds,
                    "lh1" : lh1,
                    "lh2" : lh2,
                    "lh3" : lh3,
                    "lh4" : lh4,
                    "lh5" : lh5,
                });
            }
        } else if (gameId == 1 || gameId == 3||gameId == 73) {
            var formatStr = "<tr><td>{turnNum}</td><td>{openTime}</td><td class='menu1' style='width:45px;'>{n1}</td><td class='menu1' style='width:45px;'>{n2}</td><td class='menu1' style='width:45px;'>{n3}</td><td class='menu1' style='width:45px;'>{n4}</td><td class='menu1' style='width:45px;'>{n5}</td><td>{total}</td><td>{totalDx}</td><td>{totalDs}</td><td>{lh}</td><td>{q3}</td><td>{z3}</td><td>{h3}</td></tr>";
            for ( var i in data) {
                var d = data[i];
                var total = d.n1 + d.n2 + d.n3 + d.n4 + d.n5;

                var totalDx = total >= 23 ? "<span class='font_red'>大</span>"
                    : "小";
                var totalDs = total % 2 == 0 ? "<span class='font_red'>双</span>"
                    : "单";
                var lh = "";
                if (d.n1 > d.n5) {
                    lh = "<span class='font_red'>龙</span>";
                } else if (d.n1 == d.n5) {
                    lh = "<span class='font_blue'>和</span>";
                } else {
                    lh = "<span>虎</span>";
                }

                htmlStr += formatStr.format({
                    "turnNum" : d.turnNum,
                    "openTime" : d.openTime,
                    "n1" : History.getOpenNumHtml(gameId, d.n1),
                    "n2" : History.getOpenNumHtml(gameId, d.n2),
                    "n3" : History.getOpenNumHtml(gameId, d.n3),
                    "n4" : History.getOpenNumHtml(gameId, d.n4),
                    "n5" : History.getOpenNumHtml(gameId, d.n5),
                    "total" : total,
                    "totalDx" : totalDx,
                    "totalDs" : totalDs,
                    "lh" : lh,
                    "q3" : History.getZFBHtml([ d.n1, d.n2, d.n3 ]),
                    "z3" : History.getZFBHtml([ d.n2, d.n3, d.n4 ]),
                    "h3" : History.getZFBHtml([ d.n3, d.n4, d.n5 ])
                });
            }
        } else if (gameId == 60) {
            var formatStr = "<tr><td>{turnNum}</td><td>{openTime}</td><td>{n1}</td><td>{n2}</td><td>{n3}</td><td>{n4}</td><td>{n5}</td><td>{n6}</td><td>{n7}</td><td>{n8}</td><td>{total}</td><td>{totalDx}</td><td>{totalDs}</td><td>{wsDesc}</td><td>{lh1}</td><td>{lh2}</td><td>{lh3}</td><td>{lh4}</td></tr>";
            for ( var i in data) {
                var d = data[i];
                var total = d.n1 + d.n2 + d.n3 + d.n4 + d.n5 + d.n6 + d.n7
                    + d.n8;

                var totalDx = "";
                if (total > 84) {
                    totalDx = "<span class='font_red'>大</span>";
                } else if (total == 84) {
                    totalDx = "<span class='font_red'>和</span>";
                } else if (total < 84) {
                    totalDx = "小";
                }
                var totalDs = total % 2 == 0 ? "<span class='font_red'>双</span>"
                    : "单";

                var wsDesc = "";
                if (total % 10 < 5) {
                    wsDesc = "尾小";
                } else {
                    wsDesc = "<span class='font_red'>尾大</span>";
                }

                var lh1 = "";
                if (d.n1 > d.n8) {
                    lh1 = "<span class='font_red'>龙</span>";
                } else {
                    lh1 = "<span>虎</span>";
                }

                var lh2 = "";
                if (d.n2 > d.n7) {
                    lh2 = "<span class='font_red'>龙</span>";
                } else {
                    lh2 = "<span>虎</span>";
                }

                var lh3 = "";
                if (d.n3 > d.n6) {
                    lh3 = "<span class='font_red'>龙</span>";
                } else {
                    lh3 = "<span>虎</span>";
                }

                var lh4 = "";
                if (d.n4 > d.n5) {
                    lh4 = "<span class='font_red'>龙</span>";
                } else {
                    lh4 = "<span>虎</span>";
                }

                htmlStr += formatStr.format({
                    "turnNum" : d.turnNum,
                    "openTime" : d.openTime,
                    "n1" : History.getOpenNumHtml(gameId, d.n1),
                    "n2" : History.getOpenNumHtml(gameId, d.n2),
                    "n3" : History.getOpenNumHtml(gameId, d.n3),
                    "n4" : History.getOpenNumHtml(gameId, d.n4),
                    "n5" : History.getOpenNumHtml(gameId, d.n5),
                    "n6" : History.getOpenNumHtml(gameId, d.n6),
                    "n7" : History.getOpenNumHtml(gameId, d.n7),
                    "n8" : History.getOpenNumHtml(gameId, d.n8),
                    "total" : total,
                    "totalDx" : totalDx,
                    "totalDs" : totalDs,
                    "wsDesc" : wsDesc,
                    "lh1" : lh1,
                    "lh2" : lh2,
                    "lh3" : lh3,
                    "lh4" : lh4
                });
            }
        } else if (gameId == 10) {
            var formatStr = "<tr><td>{turnNum}</td><td>{openTime}</td><td>{n1}</td><td>{n2}</td><td>{n3}</td><td>{total}</td><td>{totalDx}</td></tr>";
            for ( var i in data) {
                var d = data[i];
                var total = d.n1 + d.n2 + d.n3;

                var totalDx = "";
                if (parent.isSameNum([d.n1,d.n2,d.n3])) {
                    totalDx = "豹子";
                }else{
                    if (total >= 11) {
                        totalDx = "<span class='font_red'>大</span>";
                    } else {
                        totalDx = "小";
                    }
                }

                htmlStr += formatStr.format({
                    "turnNum" : d.turnNum,
                    "openTime" : d.openTime,
                    "n1" : History.getOpenNumHtml(gameId, d.n1),
                    "n2" : History.getOpenNumHtml(gameId, d.n2),
                    "n3" : History.getOpenNumHtml(gameId, d.n3),
                    "total" : total,
                    "totalDx" : totalDx
                });
            }
        } else if (gameId == 61) {
            var formatStr = "<tr><td>{turnNum}</td><td>{openTime}</td><td>{n1}</td><td>{n2}</td><td>{n3}</td><td>{n4}</td><td>{n5}</td><td>{n6}</td><td>{n7}</td><td>{n8}</td><td>{total}</td><td>{totalDx}</td><td>{totalDs}</td><td>{totalWsDesc}</td><td>{lh1}</td><td>{lh2}</td><td>{lh3}</td><td>{lh4}</td></tr>";
            for ( var i in data) {
                var d = data[i];
                var total = d.n1 + d.n2 + d.n3 + d.n4 + d.n5 + d.n6 + d.n7
                    + d.n8;
                var totalDx = "";
                if (total > 84) {
                    totalDx = "<span class='font_red'>大</span>";
                } else if (total == 84) {
                    totalDx = "<span class='font_blue'>和</span>";
                } else {
                    totalDx = "<span>小</span>";
                }
                var totalDs = total % 2 == 0 ? "<span class='font_red'>双</span>"
                    : "单";

                var totalWsDesc = "";
                if (total % 10 < 5) {
                    totalWsDesc = "尾小";
                } else {
                    totalWsDesc = "<span class='font_red'>尾大</span>";
                }

                var lh1 = "";
                if (d.n1 > d.n8) {
                    lh1 = "<span class='font_red'>龙</span>";
                } else {
                    lh1 = "<span>虎</span>";
                }

                var lh2 = "";
                if (d.n2 > d.n7) {
                    lh2 = "<span class='font_red'>龙</span>";
                } else {
                    lh2 = "<span>虎</span>";
                }

                var lh3 = "";
                if (d.n3 > d.n6) {
                    lh3 = "<span class='font_red'>龙</span>";
                } else {
                    lh3 = "<span>虎</span>";
                }

                var lh4 = "";
                if (d.n4 > d.n5) {
                    lh4 = "<span class='font_red'>龙</span>";
                } else {
                    lh4 = "<span>虎</span>";
                }

                htmlStr += formatStr.format({
                    "turnNum" : d.turnNum,
                    "openTime" : d.openTime,
                    "n1" : History.getOpenNumHtml(gameId, d.n1),
                    "n2" : History.getOpenNumHtml(gameId, d.n2),
                    "n3" : History.getOpenNumHtml(gameId, d.n3),
                    "n4" : History.getOpenNumHtml(gameId, d.n4),
                    "n5" : History.getOpenNumHtml(gameId, d.n5),
                    "n6" : History.getOpenNumHtml(gameId, d.n6),
                    "n7" : History.getOpenNumHtml(gameId, d.n7),
                    "n8" : History.getOpenNumHtml(gameId, d.n8),
                    "total" : total,
                    "totalDx" : totalDx,
                    "totalWsDesc" : totalWsDesc,
                    "totalDs" : totalDs,
                    "lh1" : lh1,
                    "lh2" : lh2,
                    "lh3" : lh3,
                    "lh4" : lh4
                });
            }
        } else if (gameId == 65) {
            var formatStr = "<tr><td>{turnNum}</td><td>{openTime}</td><td>{n1}</td><td>{n2}</td><td>{n3}</td><td>{n4}</td><td>{n5}</td><td>{n6}</td><td>{n7}</td><td>{n8}</td><td>{n9}</td><td>{n10}</td><td>{n11}</td><td>{n12}</td><td>{n13}</td><td>{n14}</td><td>{n15}</td><td>{n16}</td><td>{n17}</td><td>{n18}</td><td>{n19}</td><td>{n20}</td><td>{total}</td><td>{totalDx}</td><td>{totalDs}</td><td>{totalWx}</td><td>{qhNum}</td><td>{dsNum}</td></tr>";
            for ( var i in data) {
                var d = data[i];
                var total = d.n1 + d.n2 + d.n3 + d.n4 + d.n5 + d.n6 + d.n7
                    + d.n8 + d.n9 + d.n10 + d.n11 + d.n12 + d.n13 + d.n14
                    + d.n15 + d.n16 + d.n17 + d.n18 + d.n19 + d.n20;
                var totalDx = "";
                var totalDx = "<span class='font_red'>大</span>";
                if (total < 810) {
                    totalDx = "小";
                }else if(total == 810){
                    totalDx = "和";
                }

                var totalDs = total % 2 == 0 ? "<span class='font_red'>双</span>"
                    : "单";
                if(total==810){
                    totalDs="和";
                }

                var totalWx = "";
                if (total >= 210 && total <= 695) {
                    totalWx = "金";
                } else if (total >= 696 && total <= 763) {
                    totalWx = "木";
                } else if (total >= 764 && total <= 855) {
                    totalWx = "水";
                } else if (total >= 856 && total <= 923) {
                    totalWx = "火";
                } else if (total >= 924 && total <= 1410) {
                    totalWx = "土";
                }

                var qhh = 0;// 前
                for (var q = 1; q <= 20; q++) {
                    if (parseInt(d["n" + q]) <= 40) {
                        qhh += 1;
                    }
                }
                var qhNum = "";
                if (qhh > 10) {
                    qhNum = "<span class='font_red'>前(多)</span>"
                } else if (qhh == 10) {
                    qhNum = "<span class='font_blue'>前后(和)</span>"
                } else {
                    qhNum = "后"
                }

                var dsh = 0;// 双
                for (var q = 1; q <= 20; q++) {
                    if (parseInt(d["n" + q]) % 2 == 0) {
                        dsh += 1;
                    }
                }
                var dsNum = "";
                if (dsh > 10) {
                    dsNum = "<span class='font_red'>双(多)</span>"
                } else if (dsh == 10) {
                    dsNum = "<span class='font_blue'>单双(和)</span>"
                } else {
                    dsNum = "单"
                }

                htmlStr += formatStr.format({
                    "turnNum" : d.turnNum,
                    "openTime" : d.openTime,
                    "n1" : History.getOpenNumHtml(gameId, d.n1),
                    "n2" : History.getOpenNumHtml(gameId, d.n2),
                    "n3" : History.getOpenNumHtml(gameId, d.n3),
                    "n4" : History.getOpenNumHtml(gameId, d.n4),
                    "n5" : History.getOpenNumHtml(gameId, d.n5),
                    "n6" : History.getOpenNumHtml(gameId, d.n6),
                    "n7" : History.getOpenNumHtml(gameId, d.n7),
                    "n8" : History.getOpenNumHtml(gameId, d.n8),
                    "n9" : History.getOpenNumHtml(gameId, d.n9),
                    "n10" : History.getOpenNumHtml(gameId, d.n10),
                    "n11" : History.getOpenNumHtml(gameId, d.n11),
                    "n12" : History.getOpenNumHtml(gameId, d.n12),
                    "n13" : History.getOpenNumHtml(gameId, d.n13),
                    "n14" : History.getOpenNumHtml(gameId, d.n14),
                    "n15" : History.getOpenNumHtml(gameId, d.n15),
                    "n16" : History.getOpenNumHtml(gameId, d.n16),
                    "n17" : History.getOpenNumHtml(gameId, d.n17),
                    "n18" : History.getOpenNumHtml(gameId, d.n18),
                    "n19" : History.getOpenNumHtml(gameId, d.n19),
                    "n20" : History.getOpenNumHtml(gameId, d.n20),
                    "total" : total,
                    "totalDx" : totalDx,
                    "totalDs" : totalDs,
                    "totalWx" : totalWx,
                    "qhNum" : qhNum,
                    "dsNum" : dsNum
                });
            }
        } else if (gameId == 21) {
            var formatStr = "<tr><td>{turnNum}</td><td>{openTime}</td><td>{n1}</td><td>{n2}</td><td>{n3}</td><td>{n4}</td><td>{n5}</td><td>{total}</td><td>{totalDx}</td><td>{totalDs}</td><td>{totalWs}</td><td>{lh}</td><td>{dx1}</td><td>{dx2}</td><td>{dx3}</td><td>{dx4}</td><td>{dx5}</td></tr>";
            for ( var i in data) {
                var d = data[i];
                var total = d.n1 + d.n2 + d.n3 + d.n4 + d.n5;
                var totalDx = "小";
                if(total==30){
                    totalDx = "<span class='font_blue'>和</span>";
                }else  if (total > 30) {
                    totalDx = "<span class='font_red'>大</span>";
                }

                var totalDs = total % 2 == 0 ? "<span class='font_red'>双</span>"
                    : "单";

                var totalWs = total % 10 >= 5 ? "<span class='font_red'>尾大</span>"
                    : "尾小";

                var lh = "";
                if (d.n1 > d.n5) {
                    lh = "<span class='font_red'>龙</span>";
                } else {
                    lh = "虎";
                }

                var dx1 = "小";
                if (d.n1 == 11) {
                    dx1 = "<span class='font_blue'>和</span>";
                } else if (d.n1 > 5) {
                    dx1 = "<span class='font_red'>大</span>";
                }

                var dx2 = "小";
                if (d.n2 == 11) {
                    dx2 = "<span class='font_blue'>和</span>";
                } else if (d.n2 > 5) {
                    dx2 = "<span class='font_red'>大</span>";
                }

                var dx3 = "小";
                if (d.n3 == 11) {
                    dx3 = "<span class='font_blue'>和</span>";
                } else if (d.n3 > 5) {
                    dx3 = "<span class='font_red'>大</span>";
                }

                var dx4 = "小";
                if (d.n4 == 11) {
                    dx4 = "<span class='font_blue'>和</span>";
                } else if (d.n4 > 5) {
                    dx4 = "<span class='font_red'>大</span>";
                }

                var dx5 = "小";
                if (d.n5 == 11) {
                    dx5 = "<span class='font_blue'>和</span>";
                } else if (d.n5 > 5) {
                    dx5 = "<span class='font_red'>大</span>";
                }

                htmlStr += formatStr.format({
                    "turnNum" : d.turnNum,
                    "openTime" : d.openTime,
                    "n1" : History.getOpenNumHtml(gameId, d.n1),
                    "n2" : History.getOpenNumHtml(gameId, d.n2),
                    "n3" : History.getOpenNumHtml(gameId, d.n3),
                    "n4" : History.getOpenNumHtml(gameId, d.n4),
                    "n5" : History.getOpenNumHtml(gameId, d.n5),
                    "total" : total,
                    "totalDx" : totalDx,
                    "totalDs" : totalDs,
                    "totalWs" : totalWs,
                    "lh" : lh,
                    "dx1" : dx1,
                    "dx2" : dx2,
                    "dx3" : dx3,
                    "dx4" : dx4,
                    "dx5" : dx5
                });
            }
        } else if (gameId == 66 ) {
            var formatStr = "<tr><td>{turnNum}</td><td>{openTime}</td><td>{n1}</td><td>{n2}</td><td>{n3}</td><td>{total}</td><td>{totalDx}</td><td>{totalDs}</td><td>{totalJz}</td><td>{totalSb}</td></tr>";
            for ( var i in data) {
                var d = data[i];
                var total = d.n1 + d.n2 + d.n3;
                var totalDx = "小";
                if(total>=14){
                    totalDx = "<span class='font_red'>大</span>";
                }

                var totalDs = total % 2 == 0 ? "<span class='font_red'>双</span>" : "单";
                var totalJz = "--";

                if(total>=23){
                    totalJz="<span class='font_red'>极大</span>";
                }else if(total<=4){
                    totalJz="<span class='font_blue'>极小</span>";
                }

                var totalSb =  "--";
                if (ArrayContains(PCDD_DATA.HONG_NUMS, total)) {
                    totalSb="<span class='font_red'>红波</span>";
                }else if(ArrayContains(PCDD_DATA.LV_NUMS, total)){
                    totalSb="<span class='font_green'>绿波</span>";
                }else if(ArrayContains(PCDD_DATA.LAN_NUMS, total)){
                    totalSb="<span class='font_blue'>蓝波</span>";
                }

                htmlStr += formatStr.format({
                    "turnNum" : d.turnNum,
                    "openTime" : d.openTime,
                    "n1" : History.getOpenNumHtml(gameId, d.n1),
                    "n2" : History.getOpenNumHtml(gameId, d.n2),
                    "n3" : History.getOpenNumHtml(gameId, d.n3),
                    "total" : total,
                    "totalDx" : totalDx,
                    "totalDs" : totalDs,
                    "totalJz" : totalJz,
                    "totalSb" : totalSb
                });
            }
        }
        else if (gameId == 70||gameId == 74) {
            var formatStr = "<tr><td>{turnNum}</td><td>{openTime}</td><td>{n1}</td><td>{n2}</td><td>{n3}</td><td>{n4}</td><td>{n5}</td><td>{n6}</td><td>{n7}</td><td>{total}</td><td>{totalDs}</td><td>{totalDx}</td><td>{totalQsb}</td><td>{tmDs}</td><td>{tmDx}</td><td>{tmHds}</td><td>{tmHdx}</td><td>{tmDxw}</td></tr>";
            for ( var i in data) {
                var d = data[i];
                var total = d.n1 + d.n2 + d.n3 + d.n4 + d.n5 + d.n6 + d.n7;
                var totalDx = "总和小";
                if (total >= 175) {
                    totalDx = "<span class='font_red'>总和大</span>";
                }

                var totalDs = total % 2 == 0 ? "<span class='font_red'>总和双</span>"
                    : "总和单";

                var totalQsb = "";
                var nums = [ d.n1, d.n2, d.n3, d.n4, d.n5, d.n6 ];
                var hongNum = 0;
                var langNum = 0;
                var lvNum = 0;
                for ( var i in nums) {
                    var num = nums[i];

                    if (ArrayContains(LHC.HONG_NUMS, num)) {
                        hongNum += 1;
                    }
                    if (ArrayContains(LHC.LANG_NUMS, num)) {
                        langNum += 1;
                    }
                    if (ArrayContains(LHC.LV_NUMS, num)) {
                        lvNum += 1;
                    }
                }

                if ((langNum == 3 && lvNum == 3 && ArrayContains(LHC.HONG_NUMS, d.n7)) || (langNum == 3 && hongNum == 3 && ArrayContains(LHC.LV_NUMS, d.n7)) || (lvNum == 3 && hongNum == 3 && ArrayContains(LHC.langNum, d.n7))){// 和局
                    totalQsb = "和局"
                }else{
                    var n = d.n7;
                    if (ArrayContains(LHC.HONG_NUMS, n)) {
                        hongNum += 1.5;
                    }
                    if (ArrayContains(LHC.LANG_NUMS, n)) {
                        langNum += 1.5;
                    }
                    if (ArrayContains(LHC.LV_NUMS, n)) {
                        lvNum += 1.5;
                    }


                    if (hongNum > langNum && hongNum > lvNum) {
                        totalQsb = "<span class='font_red'>红</span>"
                    } else if (langNum > hongNum && langNum > lvNum) {
                        totalQsb = "<span class='font_blue'>蓝</span>"
                    } else if (lvNum > langNum && lvNum > hongNum) {
                        totalQsb = "<span class='font_green'>绿</span>"
                    }
                }

                var tmDs ;
                if(d.n7==49){
                    tmDs="和";
                }else if( d.n7 % 2==0){
                    tmDs="<span class='font_red'>双</span>";
                }else{
                    tmDs="单";
                }

                var tmDx ;
                if(d.n7==49){
                    tmDx="和";
                }else if(d.n7 >=25){
                    tmDx="<span class='font_red'>大</span>";
                }else{
                    tmDx="小";
                }

                var tmTotal;
                if(d.n7<10){
                    tmTotal=d.n7;
                }else{
                    tmTotal = parseInt(d.n7 / 10) + d.n7 % 10;
                }
                var tmHds;
                if(d.n7==49){
                    tmHds="和";
                }else if(tmTotal%2==0){
                    tmHds="<span class='font_red'>双</span>";
                }else{
                    tmHds="单";
                }

                var tmHdx;
                if(d.n7==49){
                    tmHdx="和";
                }else if(tmTotal>=7){
                    tmHdx="<span class='font_red'>大</span>";
                }else{
                    tmHdx="小";
                }

                var tmDxw;
                if(d.n7==49){
                    tmDxw="和";
                }else if(d.n7%10>=5){
                    tmDxw="<span class='font_red'>尾大</span>";
                }else{
                    tmDxw="尾小";
                }

                htmlStr += formatStr.format({
                    "turnNum" : d.turnNum,
                    "openTime" : d.openTime,
                    "n1" : History.getOpenNumHtml(gameId, d.n1, d.openTime),
                    "n2" : History.getOpenNumHtml(gameId, d.n2, d.openTime),
                    "n3" : History.getOpenNumHtml(gameId, d.n3, d.openTime),
                    "n4" : History.getOpenNumHtml(gameId, d.n4, d.openTime),
                    "n5" : History.getOpenNumHtml(gameId, d.n5, d.openTime),
                    "n6" : History.getOpenNumHtml(gameId, d.n6, d.openTime),
                    "n7" : History.getOpenNumHtml(gameId, d.n7, d.openTime),
                    "total" : total,
                    "totalDx" : totalDx,
                    "totalDs" : totalDs,
                    "totalQsb" : totalQsb,
                    "tmDs" : tmDs,
                    "tmDx" : tmDx,
                    "tmHds" : tmHds,
                    "tmHdx" : tmHdx,
                    "tmDxw" : tmDxw
                });
            }
        }
        $("#history_table").find("tbody").html(htmlStr);
    },
    getOpenNumHtml : function(gameId, num, openTime) {
        var sClass = "";
        var sCode = "";
        if (gameId == 1 || gameId == 3||gameId == 73) {
            sCode = '<a class="T_SSC L_CQSSC"><span><b class="b'+num+'">num</b></span></a>';
        } else if (gameId == 60 || gameId == 21 || gameId==66) {
            sCode = '<span class="ball c-b1">' + num + '</span>';
        } else if (gameId == 10) {
            sCode = ' <div class="K3Term"><span><b class="b' + num + ' ml20">'
                + num + '</b></span></div>'
        } else if (gameId == 61) {
            if (num < 10) {
                num = "0" + num;
            }
            sCode = ' <div class="XYNCTerm"><b class="b' + num + '">'
                + num + '</b></div>';
        } else if (gameId == 65) {
            if (num < 10) {
                num = "0" + num;
            }
            sCode = ' <div class="T_KL8"><span><b class="b' + num + '">' + num
                + '</b></span></div>';
        } else if (gameId == 70||gameId == 74) {
            if (num < 10) {
                num = "0" + num;
            }
            sCode = ' <i class="lhc_icon lhc_b' + num + '">' + num
                + '</i><br/><span>'
                + History.getZodiac(num,openTime) + '</span>';
        }

        return sCode;
    },
    getZodiac:function(num,openTime){
        var SX_NUMS = {
            "1" : [ 1, 13, 25, 37, 49 ],
            "2" : [ 2, 14, 26, 38 ],
            "3" : [ 3, 15, 27, 39 ],
            "4" : [ 4, 16, 28, 40 ],
            "5" : [ 5, 17, 29, 41 ],
            "6" : [ 6, 18, 30, 42 ],
            "7" : [ 7, 19, 31, 43 ],
            "8" : [ 8, 20, 32, 44 ],
            "9" : [ 9, 21, 33, 45 ],
            "10" : [ 10, 22, 34, 46 ],
            "11" : [ 11, 23, 35, 47 ],
            "12" : [ 12, 24, 36, 48 ]
        };
        var zodiacArr = [ "鼠", "牛", "虎", "兔", "龙", "蛇", "马", "羊", "猴", "鸡", "狗", "猪", ];
        var getYearZodicaIndex=function (year) {
            for (var i = 0; i < zodiacArr.length; i++) {
                if (year == zodiacArr[i]) {
                    return i;
                }
            }
        };
        var getZodicaNum=function (sxName,year) {
            var index = getYearZodicaIndex(year);
            var j = 1;
            for (var i = index; i >= 0; i--) {
                if (zodiacArr[i] == sxName) {
                    return j;
                }
                j += 1;
            }
            for (var i = zodiacArr.length - 1; i >= index; i--) {
                if (zodiacArr[i] == sxName) {
                    return j;
                }
                j += 1;
            }
        };
        var getZodica=function(num,year){
            for(var i=0;i<zodiacArr.length;i++){
                var zodiac=zodiacArr[i];
                var sxs = SX_NUMS[getZodicaNum(zodiac,year)];
                var str = "";
                for ( var s in sxs) {
                    var sxnum = parseInt(sxs[s]);
                    if(parseInt(sxnum)==parseInt(num)){
                        return zodiac;
                    }
                }
            }
            return "";
        };
        var getDateFormat = function(openTime){
            var dates=openTime.split(" ");
            dates=dates[0].split("-");
            return dates;
        };
        var dates=getDateFormat(openTime);
        var lunar = calendar.solar2lunar(dates[0],dates[1],dates[2]);
        return getZodica(num,lunar.Animal);
    },
    getZFBHtml : function(nums) {
        var rtStr = "";
        if (parent.isSameNum(nums)) {
            rtStr = "豹子";
        } else if (parent.isPair(nums)) {
            rtStr = "对子";
        } else if (parent.isStraight(nums)) {
            rtStr = "顺子";
        } else if (parent.isHalfStraight(nums)) {
            rtStr = "半顺";
        } else {
            rtStr = "杂六";
        }
        return rtStr;
    }
}

function ArrayContains(array, num) {
    for ( var i in array) {
        if (array[i] == num) {
            return true;
        }
    }
    return false;
}

