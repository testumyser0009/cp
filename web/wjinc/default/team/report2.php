<!DOCTYPE html>
<html>
<head lang="en">
<meta NAME="robots" CONTENT="noindex,nofollow">
<meta name="robots" content="noarchive">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href='/skin/main/bl_ococ.css?version=20160420' rel="stylesheet" type="text/css" />
<link href="/skin/new/css/lib.min.css?version=20160420"  type="text/css" rel="stylesheet" /> <!--new-->
<link type="text/css" rel="stylesheet" href="/skin/js/jqueryui/skin/smoothness/jquery-ui-1.8.23.custom.css" />
<script type="text/javascript" src="/skin/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/skin/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/skin/js/Array.ext.js"></script>
<script>var TIP=true;</script>
<script type="text/javascript" src="/skin/main/function.js?version=20160420"></script>
<script type="text/javascript" src="/skin/main/onload.js?version=20160420"></script>
<script type="text/javascript" src="/skin/js/jqueryui/jquery-ui-1.8.23.custom.min.js"></script>
<script type="text/javascript" src="/skin/js/jqueryui/i18n/jquery.ui.datepicker-zh-CN.js"></script>
<script type="text/javascript" src="/skin/js/jquery.messager.js"></script>
<script type="text/javascript" src="/skin/js/gamecommon.js"></script>
<link href="/skin/new/css/mem.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript">
$(document).ready(function () {
    $("#member").click(
     function(){
		  $("#membernav").slideToggle();
		 }
    );
	$("#daili").click(
     function(){
		  $("#dailinav").slideToggle();
		 }
    );
	$("#report").click(
     function(){
		  $("#reportnav").slideToggle();
		 }
    );
});
</script>
</head>
<body>
<script>
$(document).ready(function () {
    $("#lotteryListEntry").click(
     function(){
		  $("#lotteryList").slideToggle();
		 }
    );
});
</script>

  <div class="article" >
<script type="text/javascript">
$(function(){
	$('.search form input[name=username]')
	.focus(function(){
		if(this.value=='用户名') this.value='';
	})
	.blur(function(){
		if(this.value=='') this.value='用户名';
	})
	.keypress(function(e){
		if(e.keyCode==13) $(this).closest('form').submit();
	});

	$('.chazhao').click(function(){
		$(this).closest('form').submit();
	});

	$('.bottompage a[href]').live('click', function(){
		$('.biao-cont').load($(this).attr('href'));
		return false;
	});
});
function searchData(err, data){
	if(err){
		alert(err);
	}else{
		$('.biao-cont').html(data);
	}
}
</script>
<div class="pagemain">
	<div class="search">
  		<form action="/index.php/team/searchReport" target="ajax" call="searchData" dataType="html">
        <input height="20" value="用户名" name="username"/>
        <input type="text" name="fromTime" class="datainput"  value="<?=$this->iff($_REQUEST['fromTime'],$_REQUEST['fromTime'],date('Y-m-d',$GLOBALS['fromTime']))?>"/>至<input type="text" name="toTime"  class="datainput" value="<?=$this->iff($_REQUEST['toTime'],$_REQUEST['toTime'],date('Y-m-d',$GLOBALS['toTime']))?>"/>
         
      <input type="button" value="查 询" class="btn chazhao">
  </form> 
    </div>
    <div class="display biao-cont">
    	 <!--列表-->
        <?
            $this->display('team/report-list.php');
        ?>
        <!--列表 end -->
    </div>

</div>
<!--以下为模板代码-->
</div>  
<script type="text/javascript">
   $("#dailinav").show();
</script>
<div id="wanjinDialog"></div>
 </body>
 </html>