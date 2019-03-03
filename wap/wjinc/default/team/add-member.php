<?php $this->display('inc_top.php') ?>
<script type="text/javascript">
function khao(fanDian){
	$('input[name=fanDian]').val(fanDian);
	return false;
}
</script>
<div class="pagemain">
	
    <div class="display biao-cont">
		<form action="/index.php/team/insertMember" method="post" target="ajax" onajax="teamBeforeAddMember" call="teamAddMember">

<table width="100%" border="0" cellspacing="1" cellpadding="4" class='table_b'>
    <tr class='table_b_th'>
      <td align="left" style="font-weight:bold;padding-left:10px;" colspan=2>新增成员</td> 
    </tr>
    
    <tr height=25 class='table_b_tr_b'>
      <td align="right" style="font-weight:bold;">账号类型：</td>
      <td align="left" ><?php if($this->user['type']==3){ ?>
      <label><input type="radio" name="type" value="2" title="总代理" style="width:auto;" />总代理</label>
      <?php }
	  if($this->user['type']==3 || $this->user['type']==2){ ?>     
      <label><input type="radio" name="type" value="1" title="代理" style="width:auto;" />代理</label>
      <?php } ?>
      <label><input name="type" type="radio" value="0" title="会员" style="margin-left:10px;width:auto;"  />会员</label></td> 
    </tr>  
    <tr height=25 class='table_b_tr_b'>
      <td align="right" style="font-weight:bold;">用户名：</td>
      <td align="left" ><input name="username"  value="" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')"/><span style="color:#000; margin-left:10px;">用户名由4-16位的字母或数字组成</span></td> 
    </tr> 
     <tr height=25 class='table_b_tr_b'>
      <td align="right" style="font-weight:bold;">密码：</td>
      <td align="left" ><input name="password" type="password"  value="" /></td> 
    </tr>  
     <tr height=25 class='table_b_tr_b'>
      <td align="right" style="font-weight:bold;">确认密码：</td>
      <td align="left" ><input id="cpasswd" type="password" value="" /></td> 
    </tr> 
     <tr height=25 class='table_b_tr_b'>
      <td align="right" style="font-weight:bold;">联系 Q Q：</td>
      <td align="left" ><input name="qq" value="" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"/></td> 
    </tr> 
    <tr height=25 class='table_b_tr_b'>
      <td align="right" style="font-weight:bold;">返点%：</td>
      <td align="left" ><input name="fanDian" max="<?=$this->user['fanDian']?>" value=""  fanDianDiff=<?=$this->settings['fanDianDiff']?> onkeyup="if(isNaN(value))execCommand('undo')" onafterpaste="if(isNaN(value))execCommand('undo')"/><span style="color:#000; margin-left:10px;">0-<?=$this->iff($this->user['fanDian']-$this->settings['fanDianDiff']<=0,0,$this->user['fanDian']-$this->settings['fanDianDiff'])?>%</span></td> 
    </tr>
	<tr height=25 class='table_b_tr_b'>
      <td align="right" style="font-weight:bold;">验证码：</td>
      <td align="left" ><input name="vcode" type="text" style="ime-mode: disabled; width: 75px;" /><b class="yzmNum"><img width="58" height="24" border="0" style="cursor:pointer;margin-bottom:0px;" id="vcode" alt="看不清？点击更换" align="absmiddle" src="/index.php/user/vcode/<?=$this->time?>" title="看不清楚，换一张图片" onclick="this.src='/index.php/user/vcode/'+(new Date()).getTime()"/></b></td>
    </tr>
     <tr height=25 class='table_b_tr_b'>
      <td align="right" style="font-weight:bold;"></td>
      <td align="left"><input type="submit" id='put_button_pass' class="btn addbtn" value="增加成员" >
        <input type="reset" value="重置" class="btn"/> </td> 
    </tr> 
</table> 
</form>
    </div><div class="table_b" style="margin-top:-30px;">
						<?php
						$sql="select s.*, (select count(*) from {$this->prename}members m where m.parentId={$this->user['uid']} and m.fanDian=s.fanDian) registerUserCount from {$this->prename}params_fandianset s where s.fanDian<={$this->user['fanDian']}  order by s.fanDian desc";
						//echo $sql;
						if($data=$this->getRows($sql)){ ?>
                    	<table width="100%">
                        	<tr class="table_b_th">
								<td>返点</td>
								<td>注册人数</td>
								<td>剩余人数</td>
								<td>操作</td>
                            </tr>
							<?php foreach($data as $var){ if($var['userCount']-$var['registerUserCount']){?>
							<tr class="table_b_tr">
								<td><?=$var['fanDian']?></td>
								<td><?=$var['registerUserCount']?></td>
								<td><?=$var['userCount']-$var['registerUserCount']?></td>
								<td>
									<?php if($var['userCount']-$var['registerUserCount']>0 or true){ ?>
										<a href="javascript:;" onclick="khao(<?=$var['fanDian']?>, <?=$var['bFanDian']?>)">开号</a>
									<?php }else{ ?>
										--
									<?php } ?>
								</td>
							</tr>
							<?php } }?>
                        </table>
						
						<?php } ?>

                    </div>
					
</div>
<!--以下为模板代码-->
</div></div></div>
<div id="wanjinDialog"></div>
</body></html>
  
 