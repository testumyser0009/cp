
var UserBetBill ={
	getGameId:function(){
		var gameId=parent.$("#nav .cur").find("a").attr("game_id");
		return gameId;
	},
	changeGame:function(){
		 var date=HttpUtil.GetUrlPara();
		 var gameId=$("#betGameId").val();
		UserBetBill.getBetBills({
	  		page : 1,// 当前页
			rows : 15,
			elemet : "#listPage",
			date : date,
			gameId: gameId
	  	});
	},
	openBillWindow:function(title,settled){
		layer.open({
            type: 2,
            title: title,
            shadeClose: true,
            scrollbar :false,
            shade: [0.5],
//            maxmin: true, //开启最大化最小化按钮
            area: ['950px', '590px'],
            content: '/daili/userbetinfo.html?t='+ Date.parse(new Date())+"&settled="+settled
        });
	},
	getBetBills:function(pageOption){
		var settled=HttpUtil.GetUrlPara()["settled"];
		$("#column_desc").html(settled == "true" ? "结果" : "可赢金额");
		var requestUrl="/daili/dailigetBet.do";//今日注单
		if(pageOption.date){
			requestUrl="/daili/dailigetBet.do";//历史注单
		}
		pageOption.nextPageCallback = "";// 清空回调函数
		pageOption["settled"]=settled;
		
		$.ajax({
			  type: "GET",
			  url: requestUrl+"?t="+Date.parse(new Date()),
			  data:pageOption,
			  dataType: "json",
			  success: function(result){
				  var bodyHtmlStr="";
			     if(result && result.totalCount>0){
			    	 var bodyHtmlStrFormat='\
			    		 	<tr> \
					         <td class="f1" style="word-wrap: break-word;word-break:break-all;">{orderNo}</td> \
					         <td class="f1" >{userName}</td> \
					         <td class="f1" >{addTime}</td> \
					         <td class="f1" >{gameName}<br> 第&nbsp;<span style="color:#299a26">{turnNum}</span>&nbsp;期</td> \
				    		 <td class="f1 multiple" ><span style="color:#2836f4">{gameCateName} {alias} {planName} <span style="color:#000">@</span> <span style="color:red">{odds}</span> {winBill} {multiple} {betInfo} </span></td> \
					         <td class="f1" >{money}</td> \
					         <td class="f1" >{rebate}</td> \
					         <td class="f1"><span title="开奖号码：{lotteryNo}">{resultMoney}</span></td> \
					        </tr>\
			    		 ';
			    	 
			    	 $(result.data).each(function(i,n){
			    		 var play=parent.getPlay(n.playId);
			    		 var playCate=parent.getPlayCate(play.playCateId);
			    		 var playCateName=playCate.name;
			    		 var alias="";
			    		 if(playCate.isShow==1){
			    			 playCateName="";
			    		 }
			    		 if(play.alias&&playCate.id!=99){
			    			 alias=play.alias;
			    		 }
			    		 var game=parent.getGameById(n.gameId);
			    		 var multiple="";
			    		 if(n.multiple!=1){
			    			 multiple="<br><span style='color:#000;'>"+n.multiple+"组</span>";
			    		 }
			    		  var betInfo=n.betInfo;
			    		 if(betInfo){
			    			 betInfo="<span style='color:#000;'>#"+betInfo+"</span>";
			    		 } 
			    		 /* var resultMoney=n.resultMoney;
			    		 if(resultMoney>0){
			    			 resultMoney="<span style='color:red'>"+resultMoney+"</span>"
			    		 } */
			    		 var resultMoney=renderMoney(n.resultMoney);
			    		 var rebate=n.rebate*100 + "%";
			    		/*  if(n.status==1){
			    			 resultMoney=renderMoney(n.rewardRebate);
			    			 rebate=n.rebateMoney+"  ("+rebate+")";
			    		 }
			    		 if(n.result==2){
			    			 resultMoney="0 (和局)";
			    		 } */
			    		 if(resultMoney>=0){
			    			 resultMoney="<span style='color:red'>"+resultMoney+"</span>"
			    		 }
			    		 
			    		 
			    		 var winBill="";
						 //console.log(n.remark)
			    		 if(n.remark&&n.remark!="null"){
							 //console.log('ok');
			    			 winBill="<a href='javascript:void(0);' onmouseover='showOtherTips(\"#winBill"+i+"\")' onmouseout='hideOtherTips(\"#winBill"+i+"\")' id='winBill"+i+"'>开奖号码</a>";
			    			 winBill+='<ul class="hide">';
			    			 	/* var remarks=n.remark.split(",");
			    				$.each(remarks,function(i,n){ */
			    					winBill+='<li><span class="xu"></span><span class="nums">' + n.remark + '</span></li>';
			    				//});
			    				winBill+="</ul>"
			    		 }
						 bodyHtmlStr += bodyHtmlStrFormat.format({
								"orderNo" : n.orderNo,
								'userName' : n.userName,
								"addTime" : n.addTime,
								"gameName" : game.name,
								"turnNum" : n.turnNum,
								"gameCateName":playCateName,
								"alias":alias,
								"planName" :play.name,
								"odds":n.odds,
								"multiple":multiple,
								"betInfo":betInfo,
								"money" : n.betmoney,
								"winBill" : winBill,
								"rebate" : rebate,
								"lotteryNo" :n.lotteryNo,
								"resultMoney" : resultMoney
							});
			    	 });
					 
			    	 var totalResultMoney=renderMoney(result.otherData.totalResultMoney);
			    	 if(totalResultMoney>0){
			    		 totalResultMoney="<span style='color:red'>"+totalResultMoney+"</span>"
			    	 }
			    	 var totalRebateMoney=result.otherData.totalRebateMoney;
			    	 if(!totalRebateMoney){
			    		 totalRebateMoney="";
			    	 }
			    	 bodyHtmlStr+='\
			    		 <tr> \
				         <td class="f1"  colspan="4"></td> \
				         <td class="f1" >总计</td> \
			    		 <td class="f1" >'+result.otherData.totalBetMoney+'</td> \
				         <td class="f1" >'+totalRebateMoney+'</td> \
			    		 <td class="f1" >'+totalResultMoney+'</td>\
			    		 </tr>\
			    		 ';
			    	 $("#bet_list_body").html(bodyHtmlStr);
			    	 
			    	 pageOption.totalCount = result.totalCount;
					 pageOption.nextPageCallback = UserBetBill.getBetBills;
					 new cpPage(pageOption).pagination();
					 SetCookie('page',pageOption.page,10);
			     }
			     else {
			    	 $("#bet_list_body").html('<tr><td colspan="8">暂无数据</td></tr>');
			     }
				 
			   }
			   		   
			});	
	
		}
		
	}

