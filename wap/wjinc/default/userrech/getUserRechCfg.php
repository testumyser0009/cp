<?php
$list=$this->getRows("select account as payee, payeeName, address, qrCode, onlineType, domain, name as rechName, id, rechType from {$this->prename}sysadmin_bank where enable=1");
echo json_encode($list);
/*[{"payee":"","payeeName":"在线支付","address":"","qrCode":null,"onlineType":4,"domain":null,"rechName":"在线支付","id":56,"rechType":"onlinePayment"},{"payee":"123456@163.com","payeeName":"有限公司","address":"转账成功在提交入款订单","qrCode":"/images/148067647052.png","onlineType":null,"domain":null,"rechName":"支付宝支付","id":62,"rechType":"alipay"},{"payee":"","payeeName":"闪付1","address":"","qrCode":null,"onlineType":2,"domain":null,"rechName":"在线支付","id":40,"rechType":"onlinePayment"}]*/
?>
