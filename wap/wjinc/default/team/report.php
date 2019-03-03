<?
            $this->display('inc_top.php');
        ?>
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
         <select name="userType" >
            <option value="1">我自己</option>
            <option value="2" selected>直属下线</option>
            <option value="3">所有下线</option>
        </select>
        <input height="20" value="用户名" name="username"/>
        <input type="text" name="fromTime" class="datainput"  value="<?=$this->iff($_REQUEST['fromTime'],$_REQUEST['fromTime'],date('Y-m-d',$GLOBALS['fromTime']))?>"/>
        至
        <input type="text" name="toTime"  class="datainput" value="<?=$this->iff($_REQUEST['toTime'],$_REQUEST['toTime'],date('Y-m-d',$GLOBALS['toTime']))?>"/>
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