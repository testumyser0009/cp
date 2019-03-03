
// 弹出框

function publicAlert(say){
		miao = 2000;
	
		
	if($('#publicAlert').length<=0){
		$('body').append($('<div id="publicAlert"></div>'))
		$('#publicAlert').css({
//			'position':'fixed',
			'position':'absolute',
//			'position':'-webkit-fixed',
			'top':'45%',
			'width':'60%',
			'left':'20%',
			'text-align':'center',
			'background':'black',
			'padding':'2rem 0',
			'border-radius':'.2rem',
			'opacity':'.6',
			'padding:':'.2rem',
			'color':'white',
			'display':'block',
			'word-break':'break-all'
		});
		$('#publicAlert').html(say);
		setTimeout(function () {
			$('#publicAlert').css('display','none');
		}, miao);
	} else {
		$('#publicAlert').html(say);
		$('#publicAlert').css('display','block');
	    setTimeout(function () {
			$('#publicAlert').css('display','none');
		}, miao);
	}
	
}
// 下拉加载
var page = 2;
var bool = true;
function drop_down(url,divid,xiaid,mainid) {
	
	$("."+mainid).unbind("scroll").bind("scroll", function(e){ 
       var sum = this.scrollHeight;  
    if (sum-1 <= $(this).scrollTop() + $(this).height()&&bool) {

        	$.ajax({
        		url:url,
        		data:{page:page},
        		type:"post",
        		dataType:"json",
        		success:function (data){
        			
        			if(data==''||data==null){
        				bool = false;
        				$("#"+xiaid).html("没有更多了");
        			}else{
        				$("#"+divid).append(data);
        			}
        		}
        		
        	});
            page++;
        }
      
    });  
	

}


// function drop_down(url,divid) {
//     var sl_main = $('<div class="sl_main"></div>');
// 	$("body").append(sl_main);
// 	var sl_child = $('<div class="sl_child"></div>');
// 	sl_main.append(sl_child);

// 	var pull_loading = $('<div id="pull_loading">下拉加载更多</div>')
// 	$("body").append(pull_loading);
// 	sl_child.append($("#"+divid));
    
// 	$(".sl_main").unbind("scroll").bind("scroll", function(e){ 
//        var sum = this.scrollHeight;  
//     if (sum-1 <= $(this).scrollTop() + $(this).height()&&bool) {
//         	$.ajax({
//         		url:url,
//         		data:{page:page},
//         		type:"post",
//         		dataType:"json",
//         		success:function (data){
        			
//         			if(data==''||data==null){
//         				bool = false;
//         				$("#"+pull_loading).html("没有更多了");
//         			}else{
//         				$("#"+divid).append(data);
//         			}
//         		}
//         	});
//             page++;
//         }
//     });  
// }