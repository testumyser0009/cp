var StatGame={
	stat:function(gameId){
		var tn=parent.RequestIssue.getCurTurnNum() || new Date().getTime();
		$.ajax({
			type:"get",
			cache : true,
			url:staticFileUrl+"/data/stat_game.js?tnum="+tn,
			data:"gameId="+gameId,
			dataType:"jsonp",
			jsonpCallback:"jsonpGameStatCallback",
			success:function(game_stats){
				if(game_stats){
					$("#qiu1_zhs").html(game_stats["total"]);
					$("#qiu1_zhdx").html(game_stats["total_size"]);
					$("#qiu1_zhds").html(game_stats["total_firstsd"]);
					$("#qiu1_wx").html(game_stats["wx"]);
					$("#qiu1_qhh").html(game_stats["qhh"]);
					$("#qiu1_dsh").html(game_stats["dsh"]);
				}
			}
		});
	},
	showStatType:function(dom){
		$("#stat_type th").each(function(){
			var statType=$(this).attr("type");
			$("#qiu1_"+statType).hide();
		});
		
		$("#stat_type th").removeClass("select");
		$(dom).addClass("select");
		var curType=$(dom).attr("type")
		var curQiu=$("#stat_qiu .select").attr("qiu");
		$("#qiu1_"+curType).show();
	}
}