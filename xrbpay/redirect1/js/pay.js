// JavaScript Document
var card_info_html="";
$(function(){	
	$("#payType_bank, #payType_card,#payType_card_muti").click(function(){
		$(".payTypeCard, .payTypeBank, .payType_card_muti").hide();
		if($(this).attr("id") == "payType_bank"){
			$(".payTypeBank").show();
		}
		else if($(this).attr("id") == "payType_card"){
			$(".payTypeCard").show();
		}
		else{
			$(".payType_card_muti").show();
		}
	}); 
		   
	$("form#pay").submit(function(){
		if($("input.payType:checked").val() == 'card'){		
			if($("input.cardType:checked").size() <= 0){
				alert("请选择卡种类");
				return false
			}		
		}
		else if($("input.payType:checked").val() == 'bank'){
			if($("input.bankType:checked").size() <= 0){
				alert("请选银行种类");
				return false
			}
		}
		else if($("input.payType:checked").val() == 'card_muti'){
			if($("input.cardType_muti:checked").size() <= 0){
				alert("请选择卡种类");
				return false
			}
		}
	});	
	
	card_info_html=$("#card_info").html();
	
	$("#card_count").change( function() {
 		var card_count=parseInt($("#card_count").val());
		if(card_count<1)
		{
			alert(">0");return;
		}
		var trtags=new Array();
		var isDesTr=false;
		
		$("tr").each(function(){
			
			var isStart=false;
			var isEnd=false;
			if($(this).attr("id")=="card_info")
			{
				isStart=true;
			}
			
			if($(this).attr("id")=="end_card_info")
			{
				isEnd=true;
			}
			
			if(isStart)
			{
				isDesTr=true;
			}
			
			if(isDesTr && $(this).attr("id")!="card_info" && $(this).attr("id")!="end_card_info")
			{
				$(this).remove();
				//trtags.push($(this));
			}
			
			if(isEnd)
			{
				isDesTr=false;
			}
			
			
			});
		
		/*
		for(var i=0;i<$("tr").length;i++)
		{
			if($("tr")[i]==$("#card_info"))
			{
				isDesTr=true;
			}
			
			//trtags.push($("tr")[i]);
			if(isDesTr)
			{
				alert("a");
				$("tr")[i].remove();
			}
			
			if($("tr")[i]==$("#end_card_info"))
			{
				isDesTr=false;
			}
		}
		*/
		var tr="<tr class='payType_card_muti'>" + card_info_html + "</tr>";
		var t="";
		for(var i=0;i<card_count-1;i++)
		{
			t += tr;
		}
		$("#card_info").after(t);
	});
	
	
	//
	$("#payType_bank").click();
	
	
});
