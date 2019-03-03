<article class="module width_full">
<input type="hidden" value="<?=$this->user['username']?>" />
<header><h3 class="tabs_involved">新增会员(注:股东,总代,代理为选填,全部留空即为直属会员.)</h3></header>
<style type="text/css">
select {
    border: 1px solid #bbb;
    height: 25px;
	width: 149px;
	border-radius: 5px;
	box-shadow: inset 0 2px 2px #ccc,0 1px 0 #fff;
}
</style>
<table>
<tr><td width="360">
	<form action="/admin778899.php/member/added" method="post" target="ajax" onajax="beforeAddMember" call="addMember">
		<table class="tablesorter table2" cellspacing="0" width="100%">
			<tr>
				<td><span class="aq-txt">账号类型：</span></td>
				<td>
                会员<input type="text" name="type" value="0" disabled="disabled" style="display:none" />
				</td>
			</tr>
			<tr>
				<td><span class="aq-txt">用户名：</span></td>
				<td><input type="text" name="username" class="t-c" value="" /></td>
			</tr>
			<tr>
				<td><span class="aq-txt">密码：</span></td>
				<td><input name="password" type="password" class="t-c" value="123456" /></td>
			</tr>
			<tr>
				<td><span class="aq-txt">确认密码：</span></td>
				<td><input id="cpasswd" type="password" class="t-c" value="123456" /></td>
			</tr>
			<tr>
				<td><span class="aq-txt">默认：</span></td>
				<td>123456</td>
			</tr>
			<tr>
				<td><span class="aq-txt">联系 Q Q：</span></td>
				<td><input type="text" name="qq" class="t-c" value="00000" /></td>
			</tr>
			<tr>
				<td><span class="aq-txt">所属盘口(默认A盘)：</span></td>
				<td><select name="panid"><option value="1">A盘</option><option value="2">B盘</option></select></td>
			</tr>
<?php 
$userarr = $this->getRows("select * from {$this->prename}members where type=1 or type=2 or type=3 order by uid asc");
$alltype='<option value=""> </option>';
if($userarr){
	foreach($userarr as $var){
		if($var['type']==3){
			$gudong=$alltype.'<option value="'.$var['uid'].'">'.$var['username'].'</option>';
		}
		if($var['type']==2){
			$zparent=$alltype.'<option value="'.$var['uid'].'">'.$var['username'].'</option>';
		}
		if($var['type']==1){
			$parent=$alltype.'<option value="'.$var['uid'].'">'.$var['username'].'</option>';
		}
	}
}
?>            
			<tr>
				<td><span class="aq-txt">所属股东：</span></td>
				<td>
                <select name="gudongId"><?=$gudong?></select>
				</td>
			</tr>
			<tr>
				<td><span class="aq-txt">所属总代理：</span></td>
				<td>
                <select name="zparentId"><?=$zparent?>
                </select>
				</td>
			</tr>
			<tr>
				<td><span class="aq-txt">所属代理：</span></td>
				<td>
                <select name="parentId"><?=$parent?></select>
				</td>
			</tr>
			<tr style="display:none;">
				<td><span class="aq-txt">返点(分成比例)%：</span></td>
				<td><input type="text" name="fanDian" class="t-c" value="0" max="<?=$this->settings['fanDianMax']?>" fanDianDiff=<?=$this->settings['fanDianDiff']?>/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="alt_btn" value="增加成员"/></td>
			</tr>
		</table>
	</form>
	</td>
	<td>
		<table class="tablesorter table2" cellspacing="0"  width="100%" style="border:#ccc solid 1px;">
			<thead>
			<tr>
				<td colspan="3"><strong>新增会员成功</strong></td>
			</tr>
			</thead>
			<tr>
				<td><span class="aq-txt">用户名：</span></td>
				<td><input type="text" id="username" class="t-c" value="" /></td>
				<td><input type="button" class="copy" src="#username" value="复制"/></td>
			</tr>
			<tr>
				<td><span class="aq-txt">密码：</span></td>
				<td><input type="text" id="password" class="t-c" value="" /></td>
				<td><input type="button" class="copy" src="#password" value="复制"/></td>
			</tr>
		</table>
	</td>
</tr>
</table>
</article>