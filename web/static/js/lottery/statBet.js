var StatBet = {
	getStatDate : function(pageOption) {
		pageOption.nextPageCallback = "";// 清空回调函数
		$.ajax({
					type : "GET",
					url : "/Userrech/getStatBets.do?t=" + Date.parse(new Date()),
					dataType : "json",
					data:pageOption,
					success : function(result) {
						if (result) {
							var htmlStrFormat = '<tr><td>{statDate}</td><td>{betCount}</td><td>{betMoney}</td><td>{reward}</td><td>{rewardRebate}</td><td><a target="framePage" href="/game/stat/statTotalBet.html?date={statDate}&settled=true">注单详情</a></td></tr>';
							var htmlStr = "";
							var datas = result.data;
							for (var i = 0; i < datas.length; i++) {
								var statBet = datas[i];
								htmlStr += htmlStrFormat
										.format({
											"statDate" : statBet.statDate,
											"betCount" : statBet.betCount || 0,
											"betMoney" : statBet.betMoneyDouble || 0,
											"reward" : statBet.rebateMoneyDouble || 0,
											"rewardRebate" : statBet.rewardRebateDouble || 0
										});
							}
							$("#preWeekTable").find("tbody").html(htmlStr);

							pageOption.totalCount = result.totalCount;
							pageOption.nextPageCallback = StatBet.getStatDate;
							new cpPage(pageOption).pagination();
						} else {
							$("#preWeekTable").find("tbody").html(
									'<tr><td colspan="6">暂无数据</td></tr>');
						}
					}
				});
		// });
	},
	query : function() {
		var params = {
			page : 1,// 当前页
			rows : 10,
			elemet : "#listPage"
		};
		
		var startDate = $("#startDate").val();
		if (startDate) {
			params.startDate = startDate;
		}
		var endDate = $("#endDate").val();
		if (endDate) {
			params.endDate = endDate;
		}
		
		if(!startDate||!endDate){
			alert("请输入起止时间");
			return;
		}
		
		StatBet.getStatDate(params);
	}
}

var StatTotalBet={
		query : function() {
			var date=HttpUtil.GetUrlPara()["date"]
		    	date=date.split(" ")[0];
			//判断是否今日报表，如果是直接调整至今天已结
			
			var params = { };
				params.date = date;
			$.ajax({
				type : "GET",
				url : "/Userrech/getTotalStatBets.do?t=" + Date.parse(new Date()),
				dataType : "json",
				data:params,
				success : function(result) {
					if (result) {
						var htmlStrFormat = '<tr><td>{gameName}</td><td>{betCount}</td><td>{betMoney}</td><td>{reward}</td><td>{rewardRebate}</td><td>{statLink}</td></tr>';
						var htmlStr = "";
						var datas = result.data;
						for(var g=0;g<games.length;g++){
							var statLink='无';
							var game=games[g];
							var statBet=result[game.id] || {};
							if( statBet.betCount && statBet.betCount>0 ){
								statLink='<a target="framePage" href="/game/stat/betList.html?date='+date+'&gameId='+game.id+'&settled=true">注单详情</a>';
								if(date==new Date().format("yyyy-MM-dd")){//今天报表
									statLink='<a target="framePage" href="/game/stat/betList.html?settled=true">今日已结</a>';
								}
							}
							htmlStr += htmlStrFormat.format({
								"gameName" : game.name,
								"betCount" : statBet.betCount || 0,
								"betMoney" : statBet.betMoneyDouble || 0,
								"reward" : statBet.rebateMoneyDouble || 0,
								"rewardRebate" : statBet.rewardRebateDouble || 0,
								"statLink": statLink
							});
						}
						$("#preWeekTable").find("tbody").html(htmlStr);

					} else {
						$("#preWeekTable").find("tbody").html(
								'<tr><td colspan="6">暂无数据</td></tr>');
					}
				}
			});
			
			
		}
}
