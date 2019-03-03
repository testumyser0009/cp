// JavaScript Document
$(function(){
	//pay_card_search();		   
});
var i = 10000;		//延迟的时间
setTimeout("pay_card_search()", i);
function pay_card_search(){
	var order_id = $("#order_id").val();
	$.ajax({
		url:"ajax/pay_card_search.php",	 
		data: "order_id="+order_id,
		dataType: "json",
		type: "post",
		success: function(data){
			//若卡还没有被处理，则隔一定时间后，继续进行, 若已经处理，则显示处理结果
			if(data.success == '1'){
				$("#ekamsg").html(data.message);
			}//else{
				//setTimeout("pay_card_search()", i);
			//}	
		}
	});
}
