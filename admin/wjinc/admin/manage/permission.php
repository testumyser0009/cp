<article class="module width_full">
<header><h3 class="tabs_involved">权限设置</h3></header>
<style type="text/css">
select {
    border: 1px solid #bbb;
    height: 25px;
	width: 149px;
	border-radius: 5px;
	box-shadow: inset 0 2px 2px #ccc,0 1px 0 #fff;
	}
	.btn {
	    display: inline-block;
	    padding: 6px 12px;
	    margin-bottom: 0;
	    font-size: 14px;
	    font-weight: 400;
	    line-height: 1.42857143;
	    text-align: center;
	    white-space: nowrap;
	    vertical-align: middle;
	    -ms-touch-action: manipulation;
	    touch-action: manipulation;
	    cursor: pointer;
	    -webkit-user-select: none;
	    -moz-user-select: none;
	    -ms-user-select: none;
	    user-select: none;
	    background-image: none;
	    border: 1px solid transparent;
	    border-radius: 4px;
	}
	.btn-danger {
	    color: #fff;
	    background-color: #d9534f;
	    border-color: #d43f3a;
	}
	.btn-primary {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
}
	a {
		color: #fff;
		text-decoration: none;
	}
	.table2 td {
		text-align: left;
	}
</style>
<script>
  $('input[type=checkbox]').change(function(){
    $('#selectPermission').val($('input[type=checkbox]:checked').map(function(){return this.value}).get().join(','))
  })
</script>
<?php 
$permission = array();
foreach ($this->permission as $key => $value) {
	$permission[] = $value['permission'];
}

?>
<table>
<tr><td width="360">
	<form action="/admin778899.php/manage/savePermission" method="post" >
		<input type="hidden" name="uid" value="<?=$this->uid?>">
		<input type="hidden" id="selectPermission" name="selectPermission" value="">
		<table class="tablesorter table2" cellspacing="0" width="100%">
			<tr>
				<td>
				<input type="checkbox" name="permission" value="ywls" <?php if (in_array('ywls', $permission)) echo 'checked="checked"';?>>业务流水
				</td>
				<td>
                <input type="checkbox" name="permission" value="kjsj" <?php if (in_array('kjsj', $permission)) echo 'checked="checked"';?>>开奖数据
				</td>
				<td>
                <input type="checkbox" name="permission" value="sjgl" <?php if (in_array('sjgl', $permission)) echo 'checked="checked"';?>>时间管理
				</td>
			</tr>
			<tr>
				<td>
				<input type="checkbox" name="permission" value="sjtj" <?php if (in_array('sjtj', $permission)) echo 'checked="checked"';?>>数据统计
				</td>
				<td>
                <input type="checkbox" name="permission" value="dlfcgl" <?php if (in_array('dlfcgl', $permission)) echo 'checked="checked"';?>>代理分成管理
				</td>
				<td>
                <input type="checkbox" name="permission" value="yhgl" <?php if (in_array('yhgl', $permission)) echo 'checked="checked"';?>>用户管理
				</td>
			</tr>
			<tr>
				<td colspan="3">
				<input type="checkbox" name="permission" value="xtsz" <?php if (in_array('xtsz', $permission)) echo 'checked="checked"';?>>系统设置
				</td>
			</tr>
			<tr>
				<td colspan="3">
				<button type="submit" class="btn btn-primary">保存设置</button>
				<a href="manage/index" class="btn btn-danger" style="color: #fff;text-decoration: none;">返回</a>
				</td>
			</tr>
		</table>
	</form>
	</td>
</tr>
</table>
</article>