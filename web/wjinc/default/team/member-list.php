<?php $this->display('inc_top.php') ?>
<script type="text/javascript">
$(function(){
	/*$('.search select').change(function(){
		//this.form.submit();
		$(this).closest('form').submit();
	});*/

	$('.search input[name=username]')
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
	
	$('.bottompage a[href], .caozuo').live('click', function(){
		$('.biao-cont').load($(this).attr('href'));
		return false;
	});
	
});
function teamBeforeSearchMember(){}
function teamSearchMember(err, data){
	if(err){
		alert(err);
	}else{
		$('.biao-cont').html(data);
	}
}
</script>
<div class="pagemain">
	<div class="search">
  		<form action="/index.php/team/searchMember" dataType="html" target="ajax" method="get" onajax="teamBeforeSearchMember" call="teamSearchMember">
  		
  		<select name="type">
            <option value="0">所有人</option>
            <option value="1">我自己</option>
            <option value="2">直属下线</option>
            <option value="3" selected>所有下线</option>
        </select>
       <input height="20" value="用户名" name="username"/>         
      <input type="button" value="查 询" class="btn chazhao">
      <input type="button" value="添加会员" class="btn" style="width:100px" onclick="window.location='/index.php/team/addMember'">      
  </form> 
    </div>
    <div class="display biao-cont">
    	<!--内容列表-->
         <?php $this->display('team/member-search-list.php'); ?>
        <!--内容列表 end -->
    </div>

</div>
<!--以下为模板代码-->
</div></div></div>
<div id="wanjinDialog"></div>
</body></html>
  
  
   
 