<?php
require_once("aiyang/class.aiyangpay.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>印象彩票</title>
    <link rel="stylesheet" type="text/css" href="style/css.css"/>
    <script language="javascript" src="js/jquery.js"></script>
    <script language="javascript" src="js/pay.js"></script>
  </head>
  <body>
    <center>

      <?php
$html	 = '<form method="post" action="pay_go.php"  name="pay" id="pay">';
$html	.= '<div class="pay_base_info">';
$html	.= '<table class="form">';
$html	.= '<tbody>';
$html	.= '<tr class="title">';
$html	.= '<tr>';
$html	.= '	<td class="label">支付金额:</td>';
$html	.= '	<td class="content">';
$html	.= '		<input type="text" name="amount" id="amount"  value="20"/>';
$html	.= '	</td>';
$html	.= '</tr>';
$html	.= '<tr>';
$html	.= '	<td class="label">支付方式:</td>';
$html	.= '	<td class="content">';
$html	.= '		<input type="radio" name="payType" id="payType_bank" class="payType" value="bank" checked="checked"><label for="payType_bank">网银支付</label>';
$html	.= '	</td>';
$html	.= '</tr>';

//卡类型(单卡)
$html	.= '<tr class="payTypeCard">';
$html	.= '	<td colspan="2">';
foreach($aiyang_cardtype as $card){
	$cardTypeRadioId	= 'cardType_' . $card['code'];
	$html	.= '<span class="cardType">';
	$html	.= '<input type="radio"  class="cardType" name="cardType" id="'.$cardTypeRadioId.'" value="'.$card['code'].'">';
	$html	.= '<label for="'. $cardTypeRadioId .'">'.$card['name'].'</label>';
	$html	.= '</span>';
}
$html	.= '	</td>';
$html	.= '</tr>';
$html	.= '<tr class="payTypeCard">';
$html	.= '	<td class="label">卡号:</td>';
$html	.= '	<td class="content">';
$html	.= '		<input type="text" name="card_number" id="card_number"  value="xxxxx"/>';
$html	.= '	</td>';
$html	.= '</tr>';
$html	.= '<tr class="payTypeCard">';
$html	.= '	<td class="label">卡密:</td>';
$html	.= '	<td class="content">';
$html	.= '		<input type="text" name="card_password" id="card_password"  value="xxxxx"/>';
$html	.= '	</td>';
$html	.= '</tr>';

//网银类型
$html	.= '<tr class="payTypeBank">';
$html	.= '	<td colspan="2">';
$html	.= '	<div class="bankTypeDiv">';
foreach($aiyang_banktype as $bank){
	$bankTypeRadioId	= 'bankType_' . $bank['code'];
	$html	.= '<span class="bankType">';
	$html	.= '<input type="radio"  class="bankType" name="bankType" id="'.$bankTypeRadioId.'" value="'.$bank['code'].'">';
	$html	.= '<label for="'. $bankTypeRadioId .'">'.$bank['name'].'</label>';
	$html	.= '</span>';
}
$html	.= '	<div>';
$html	.= '	</td>';

$html	.= '</tr>';

//卡类型(多卡)
$html	.= '<tr class="payType_card_muti">';
$html	.= '	<td colspan="2">';
foreach($aiyang_cardtype as $card){
	$cardTypeRadioId	= 'cardType_' . $card['code'];
	$html	.= '<span class="cardType">';
	$html	.= '<input type="radio"  class="cardType_muti" name="cardType_muti" id="'.$cardTypeRadioId.'" value="'.$card['code'].'">';
	$html	.= '<label for="'. $cardTypeRadioId .'">'.$card['name'].'</label>';
	$html	.= '</span>';
}
$html	.= '	</td>';
$html	.= '</tr>';

$html	.= '<tr class="payType_card_muti">';
$html	.= '	<td colspan="2">';
$html	.= '我要输入<input type="text" id="card_count" name="card_count" size="5" value="1"/>张卡';
$html	.= '	</td>';
$html	.= '</tr>';
$html	.= '<tr id="card_info" class="payType_card_muti">';
$html	.= '	<td colspan="2">';
$html	.= '卡号:<input type="text" name="card_number[]" id="card_number"  value="xxxxx"/>';
$html	.= '密码:<input type="text" name="card_password[]" id="card_password"  value="xxxxx"/>';
$html	.= '本卡金额:<input type="text" name="card_value[]" id="card_value"  value=""/>';
$html	.= '限制范围:<select name="restrict[]" id="restrict">';
$option="";
foreach($aiyang_restrict as $code => $text )
{
	if($code==="0")
	{
		$option.='<option value="'.$code.'" selected="selected">'.$text.'</option>'."\n";
	}
	else{
		$option.='<option value="'.$code.'" >'.$text.'</option>'."\n";
	}
}
$html .= $option;
$html	.= '</select>';
$html	.= '	</td>';
$html	.= '</tr>';
$html	.= '<tr id="end_card_info" class="payType_card_muti">';
$html	.= '	<td colspan="2">';
$html	.= '备注信息：<textarea id="attach" name="attach"></textarea>';
$html	.= '	</td>';
$html	.= '</tr>';
/*
$html	.= '<tr class="payType_card_muti">';
$html	.= '	<td class="label">卡号:</td>';
$html	.= '	<td class="content">';
$html	.= '		<input type="text" name="card_number" id="card_number"  value="xxxxx"/>';
$html	.= '	</td>';
$html	.= '</tr>';
$html	.= '<tr class="payType_card_muti">';
$html	.= '	<td class="label">卡密:</td>';
$html	.= '	<td class="content">';
$html	.= '		<input type="text" name="card_password" id="card_password"  value="xxxxx"/>';
$html	.= '	</td>';
$html	.= '</tr>';
*/

$html	.= '<tr class="foot">';
$html	.= '	<td colspan="2"><input type="submit" value="确认支付 >>" id="submit" name="submit" /></td>';
$html	.= '</tr>';
$html	.= '</tbody>';
$html	.= '</table>';
$html	.= '</form>';
echo($html);
?>
    </center>
  </body>
</html>
