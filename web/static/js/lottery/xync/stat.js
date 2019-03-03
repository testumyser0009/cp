var StatGame={
	stat:function(gameId){
		var tn=parent.RequestIssue.getCurTurnNum() || new Date().getTime();
		$.ajax({
			type:"get",
			url:staticFileUrl+"/data/stat_game.js?tnum="+tn,
			data:"gameId="+gameId,	
			dataType:"jsonp",
			jsonpCallback:"jsonpGameStatCallback",
			success:function(game_stats){
				if(game_stats){
					for(var i=1;i<=8;i++){
						for(var j=1;j<=20;j++){
							$("#q"+i+"_"+j+"_time").html(game_stats["count_n_"+i+"_"+j+""]);
						}
						$("#qiu"+i+"_nums").html(game_stats["nums_"+i]);
						$("#qiu"+i+"_size").html(game_stats["size_"+i]);
						$("#qiu"+i+"_firsts").html(game_stats["firstsd_"+i]);
						$("#qiu"+i+"_hsds").html(game_stats["hsds_"+i]);
						$("#qiu"+i+"_wsdx").html(game_stats["wsdx_"+i]);
					}
					$("#qiu1_lh").html(game_stats["lh1"]);
					$("#qiu2_lh").html(game_stats["lh2"]);
					$("#qiu3_lh").html(game_stats["lh3"]);
					$("#qiu4_lh").html(game_stats["lh4"]);
					$("#qiu1_zhdx").html(game_stats["total_size"]);
					$("#qiu1_zhds").html(game_stats["total_firstsd"]);
					$("#qiu1_zhws").html(game_stats["total_zwsdx"]);
				}
			}
		});
	},
	showStat:function(qiuNum){
		$("#stat_nums_btn").html($("#qiu"+qiuNum+"_th").html())
		var statType=$("#stat_type .select").attr("type");
		for(var i=1;i<=8;i++){
			$("#qiu"+i+"_body").hide();
			$("#qiu"+i+"_th").removeClass("select");
			if(statType=="zhdx"||statType=="zhds"||statType=="zhws"){
				$("#qiu1_"+statType).hide();
			}else{
				$("#qiu"+i+"_"+statType).hide();
			}
		}
		$("#qiu"+qiuNum+"_th").addClass("select");
		$("#qiu"+qiuNum+"_body").show();
		if(statType=="zhdx"||statType=="zhds"||statType=="zhws"){
			$("#qiu1_"+statType).show();
			$("#qiu"+qiuNum+"_time").show();
		}else{
			$("#qiu"+qiuNum+"_"+statType).show();
		}
	},
	showStatType:function(dom){
		for(var i=1;i<=8;i++){
			$("#stat_type th").each(function(){
				var statType=$(this).attr("type");
				if(statType=="zhdx"||statType=="zhds"||statType=="zhws"){
					$("#qiu1_"+statType).hide();
				}else{
					$("#qiu"+i+"_"+statType).hide();
				}
			});
		}
		
		$("#stat_type th").removeClass("select");
		$(dom).addClass("select");
		var curType=$(dom).attr("type")
		var curQiu=$("#stat_qiu .select").attr("qiu");
		if(curType=="zhdx"||curType=="zhds"||curType=="zhws"){
			$("#qiu1_"+curType).show();
		}else{
			$("#qiu"+curQiu+"_"+curType).show();
		}
	}
}