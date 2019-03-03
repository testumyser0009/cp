<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>卡已提交，以卡正在处理，请稍候……</title>
<link rel="stylesheet" type="text/css" href="style/ekapay.css">
<script language="javascript" src="js/jquery.js"></script>
<script language="javascript" src="js/pay_card_finish.js"></script>
</head>
<?php error_reporting(0);?>
<body>
<input id="order_id" type="hidden" value="<?php echo($_GET['order_id']);?>" />
<center>
<div class="pay_base_info">
<table class="form">
<tbody>
<tr class="title">
	<td colspan="2"><img src="images/jk_logo.gif" /><br/>
	phpeka demo 1.0 <br/>
	爱扬接口版本:v2.6<br/>网银支付版本:v1.2</td>
</tr>
<tr>
	<td style="padding-right:150px;"><div id="ekamsg">你的订单号是<?php echo($_GET['order_id']);?> 卡已经被提交，爱扬正在进行处理，请稍后<img src="images/proccessing.gif" alt="处理中" /></div></td>
</tr>
<tr class="foot">
	<td colspan="2">
		<input type="submit" value="继 续 &raquo;" id="submit" name="submit" />
	</td>
</tr>
</tbody>
</table>
</div>
</center>
</body>
</html>
