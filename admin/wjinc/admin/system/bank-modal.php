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
<form name="system_addBank" action="/admin778899.php/system/updateBank" method="post" enctype="multipart/form-data">
<?php
	if($args[0]){
		$bankId=intval($args[0]);
		$bank=$this->getRow("select * from {$this->prename}sysadmin_bank where id=$bankId");
		echo '<input type="hidden" name="id" value="', $bank['id'], '"/>';
		$var=$bank;
	}
?>
<table class="tablesorter left" cellspacing="0" width="100%">
	<tbody>
		<tr> 
			<td>接口名</td> 
			<td><input type="text" name="payeeName" value="<?=$var['payeeName']?>"></td>
		</tr>
		<tr> 
			<td>收款账号</td> 
			<td><input type="text" name="account" value="<?=$var['account']?>"></td>
		</tr>
		<tr> 
			<td>备注信息</td> 
			<td><input type="text" name="address" value="<?=$var['address']?>"></td>
		</tr>
        <?php if ($var['id'] != 290){?>
		<tr> 
			<td>收款码图片</td> 
			<td>
                <input type="file" name="file" value="<?=$var['qrCode']?>">
                <input type="hidden" name="qrCode" value="<?=$var['qrCode']?>">
            </td>
		</tr>
        <?php } ?>
		<tr> 
			<td>编号</td> 
			<td><input type="text" name="onlineType" value="<?=$var['onlineType']?>"></td>
		</tr>
		<tr> 
			<td>收款提交网址</td> 
			<td><input type="text" name="domain" value="<?=$var['domain']?>"></td>
		</tr>
		<tr> 
			<td>前台名称</td> 
			<td><input type="text" name="name" value="<?=$var['name']?>"></td>
		</tr>
		<tr> 
			<td>状态</td> 
			<td>
				<label><input type="radio" value="1" name="enable" checked="checked">开启</label>
				<label><input type="radio" value="0" name="enable">关闭</label>
			</td> 
		<tr> 
	</tbody> 
</table>
</form>
</body>
</html>