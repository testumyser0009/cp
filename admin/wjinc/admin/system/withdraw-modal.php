<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" type="text/css" href="/skin/admin/layout.css" media="all">
<style type="text/css">
html, body { min-width:450px; width: 450px;}
</style>
</head>
<body>
<form name="system_addBank" action="/admin778899.php/system/updatewithdraw" method="post">
<?php
	if($args[0]){
		$bankId=intval($args[0]);
		$bank=$this->getRow("select * from {$this->prename}bank_list where id=$bankId");
		echo '<input type="hidden" name="id" value="', $bank['id'], '"/>';
		$var=$bank;
	}
?>
<table class="tablesorter left" cellspacing="0" width="100%">
	<tbody>
		<tr> 
			<td>编号(ID)</td> 
			<td><?=$var['id']?></td>
		</tr>
		<tr> 
			<td>提款银行名称</td> 
			<td><input type="text" name="name" value="<?=$var['name']?>"></td>
		</tr>
		<tr> 
			<td>提款银行LOGO（选填）</td> 
			<td><input type="text" name="logo" value="<?=$var['logo']?>"></td>
		</tr>
		<tr> 
			<td>提款银行网址（选填）</td> 
			<td><input type="text" name="home" value="<?=$var['home']?>"></td>
		</tr>
		<tr> 
			<td>排序</td> 
			<td><input type="text" name="sort" value="<?=$var['sort']?>"></td>
		</tr>
		<tr> 
			<td>状态</td> 
			<td>
				<label><input type="radio" value="0" name="isDelete" checked="checked">开启</label>
				<label><input type="radio" value="1" name="isDelete">关闭</label>
			</td> 
		<tr> 
	</tbody> 
</table>
</form>
</body>
</html>