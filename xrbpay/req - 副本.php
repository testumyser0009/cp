<?php
require_once("config.php");

$orderid = $_REQUEST["rechargeId"];
$bankid = $_REQUEST["bankid"];
$uid = $_REQUEST["uid"];
$value = floatval(sprintf("%.2f", $_REQUEST['amount']));
$ordertime = date("Y-m-d H:i:s",time());

if($bankid == 57){
	$btype = '83';
	$ptype = '0';
}elseif($bankid == 758){	
	$btype = '84';
	$ptype = '0';
}

$returnurl ="http://".$_SERVER['HTTP_HOST']."/notify.php";
$hrefreturnurl = '';
//$hrefreturnurl ="http://".$_SERVER['HTTP_HOST']."/return.php";

$signStr = '';
$signStr = $signStr."userid".$userid;
$signStr = $signStr."orderid".$orderid;
$signStr = $signStr."btype".$btype;
$signStr = $signStr."ptype".$ptype;
$signStr = $signStr."value".$value;
$signStr = $signStr."returnurl".$returnurl;
$signStr = $signStr."hrefreturnurl".$hrefreturnurl;
//$signStr = $signStr."key".$priKey;
//echo $signStr;
//exit;
$sign = md5($signStr.$priKey);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
正在跳转 ...
<form name="frm1" id="frm1" method="post" action="http://api.r1pay.com/api/bapi.aspx">
<input type="hidden" name="userid" value="<?php echo $userid?>">
<input type="hidden" name="orderid" value="<?php echo $orderid?>">
<input type="hidden" name="btype" value="<?php echo $btype?>">
<input type="hidden" name="ptype" value="<?php echo $ptype?>">
<input type="hidden" name="value" value="<?php echo $value?>">
<input type="hidden" name="returnurl" value="<?php echo $returnurl?>">
<input type="hidden" name="hrefreturnurl" value="<?php echo $hrefreturnurl?>">
<input type="hidden" name="sign" value="<?php echo $sign?>">
</form>
<script language="javascript" type="text/javascript">
document.getElementById("frm1").submit();
</script>
</body>
</html>