var UserBetInfo={
		oldIds:[],
		openInfoWin:function(){
			layer.open({
	            type: 2,
	            title: "个人资讯",
	            shadeClose: true,
	            scrollbar :false,
	            shade: [0.5],
//	            maxmin: true, //开启最大化最小化按钮
	            area: ['950px', '590px'],
	            content: '/game/include/user_bet_info.html?t='+ Date.parse(new Date())
	        });
		},
		init:function(){
			$("#user_bet_info_user_name").html(window.parent.document.getElementById("userinfo_name").innerHTML); 
//			$("#user_bet_info_money").html(window.parent.document.getElementById("userinfo_money").innerHTML); 
			UserBetInfo.initData(50);
		},
		initData:function(id){
			if(UserBetInfo.contains(UserBetInfo.oldIds,id)){
				return;
			}
			UserBetInfo.oldIds.push(id);
			var user_bet_info_configs_tds=$("#GAME_"+id+"_PAGE td");
			for(var i=0; i<user_bet_info_configs_tds.length; i++) {
				var obj = $(user_bet_info_configs_tds[i]);
				var type=obj.attr("type");
				var playId=obj.parent().attr("play_id");
				var playCateId=obj.attr("play_cate_id");
				if(type){
					var play=parent.getPlay(playId);
//					var playCate=parent.getPlayCate(playCateId);
					if(type=="odds"){
						obj.html(parseInt(play.odds)==play.odds?parseInt(play.odds):play.odds.toFixed(1));
					}else if(type=="rebate"){
						obj.html(parseInt(play.rebate * 100)==parseFloat(play.rebate * 100)?parseInt(play.rebate * 100):parseFloat(play.rebate * 100).toFixed(1)+"%");
					}else if(type=="minMoney"){
						obj.html(play.minMoney);
					}else if(type=="maxMoney"){
						obj.html(parseInt(play.maxMoney)==play.maxMoney?parseInt(play.maxMoney):play.maxMoney.toFixed(1));
					}else if(type=="maxTurnMoney"){
						obj.html(parseInt(play.maxTurnMoney)==play.maxTurnMoney?parseInt(play.maxTurnMoney):play.maxTurnMoney.toFixed(1));
					}
				}
			}
		},
//		writeData:function(obj){
//			console.log($(obj).parent().html())
//			$(obj).parent().html("33")
//		},
		showTab:function(id){
			var gameIds=[1,3,10,21,50,60,61,65,70,55,72,73,74];
			for(var k in gameIds){
				$("#GAME_"+gameIds[k]+"_TAB").removeClass("on");
				$("#GAME_"+gameIds[k]+"_PAGE").hide();
			}
			$("#GAME_"+id+"_TAB").addClass("on");
			$("#GAME_"+id+"_PAGE").show();
			UserBetInfo.initData(id);
		},
		contains:function (array, obj) {
	        for (var i = 0; i < array.length; i++) {
	            if (array[i] === obj) {
	                return true;
	            }
	        }
	        return false;
	    }
}

var GameRule={
		openGameRuleWin:function(){
			layer.open({
	            type: 2,
	            title: "游戏规则",
	            shadeClose: true,
	            scrollbar :false,
	            shade: [0.5],
	            area: ['950px', '590px'],
	            content: '/game/include/game_rule.html?t='+ Date.parse(new Date())
	        });
		},
		showTab:function(id){
			var gameIds=[1,3,10,21,50,60,61,65,70,72,73,74];
			for(var k in gameIds){
				$("#GAME_"+gameIds[k]+"_TAB").removeClass("on");
				$("#GAME_"+gameIds[k]+"_PAGE").hide();
			}
			$("#GAME_"+id+"_TAB").addClass("on");
			$("#GAME_"+id+"_PAGE").show();
		}
}