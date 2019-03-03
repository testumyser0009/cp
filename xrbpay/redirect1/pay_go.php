<?php

include_once("config/pay_config.php");

/*
 * 获取表单数据
 * */
$order_id = (string) date("YmdHis"); //您的订单Id号，你必须自己保证订单号的唯一性，爱扬不会限制该值的唯一性
$payType = $_POST['payType'];  //充值方式：bank为网银，card为卡类支付
$account = $_POST['account'];  //充值的账号
$amount = $_POST['amount'];   //充值的金额
//网银支付
if ('bank' == $payType) {
    $bankType = $_POST['bankType'];   //银行类型


    /*
     * 提交数据
     * */
    include_once("aiyang/class.bankpay.php");
    $bankpay = new bankpay();
    $bankpay->parter = $aiyang_merchant_id;  //商家Id
    $bankpay->key = $aiyang_merchant_key; //商家密钥
    $bankpay->type = $bankType;   //商家密钥
    $bankpay->value = $amount;    //提交金额
    $bankpay->orderid = $order_id;   //订单Id号
    $bankpay->callbackurl = $aiyang_bank_callback_url; //下行url地址
    $bankpay->hrefbackurl = $aiyang_bank_hrefbackurl; //下行url地址
    //发送
    $bankpay->send();
}
//卡类支付
else if ('card' == $payType) {
    $cardType = $_POST['cardType'];   //卡类型
    $card_number = $_POST['card_number'];  //卡号
    $card_password = $_POST['card_password'];  //卡密
    /*
     * 提交数据
     * */
    include_once("aiyang/class.aiyangpay.php");
    $aiyangpay = new ekapay();
    $aiyangpay->type = $cardType;   //卡类型	
    $aiyangpay->cardno = $card_number;   //卡号
    $aiyangpay->cardpwd = $card_password;  //卡密
    $aiyangpay->value = $amount;    //提交金额
    $aiyangpay->restrict = $aiyang_restrict;  //地区限制, 0表示全国范围
    $aiyangpay->orderid = $order_id;   //订单号
    $aiyangpay->callbackurl = $aiyang_callback_url; //下行url地址
    $aiyangpay->parter = $aiyang_merchant_id;  //商家Id
    $aiyangpay->key = $aiyang_merchant_key; //商家密钥
    //发送
    $result = $aiyangpay->send();

    /*
     * 处理结果
     * */
    switch ($result) {
        case '0':
            header("location: pay_card_finish.php?order_id=$order_id");
            break;
        case '-1':
            header("location: pay_card_finish.php?order_id=$order_id");
            break;
        case '-2':
            print('签名错误');
            break;
        case '-3':
            print('<script language="javascript">alert("对不起，您填写的卡号卡密有误！"); history.go(-1);</script>');
            break;
        case '-999':
            print('<script language="javascript">alert("对不起，爱扬接口维护中，请选择其他的充值方式！"); history.go(-1);</script>');
            break;
        default:
            print('未知的返回值, 请联系爱扬官方！');
            break;
    }
} else if ('card_muti' == $payType) {
    include_once("aiyang/class.ekapay.muti.php");

    $cardType_muti = $_POST['cardType_muti'];

    $card_number = $_POST['card_number'];
    $card_password = $_POST['card_password'];
    $card_value = $_POST['card_value'];
    $restrict = $_POST['restrict'];
    $attach = $_POST['attach'];

    $aiyangpay = new ekapay();

    $aiyangpay->type = $cardType_muti;
    $aiyangpay->parter = $aiyang_merchant_id;
    $aiyangpay->cardno = implode(",", $card_number);
    $aiyangpay->cardpwd = implode(",", $card_password);
    $aiyangpay->value = implode(",", $card_value);
    $aiyangpay->restrict = implode(",", $restrict);
    $aiyangpay->orderid = $order_id;
    $aiyangpay->attach = $attach;
    $aiyangpay->callbackurl = $aiyang_callback_url_muti;
    $aiyangpay->key = $aiyang_merchant_key;

    $result = $aiyangpay->send();

    switch ($result) {
        case '0':
            header("location: pay_card_finish.php?order_id=$order_id");
            break;
        case '-1':
            print("请求参数无效");
            break;
        case '-2':
            print('签名错误');
            break;
        case '-3':
            print('<script language="javascript">alert("卡密为重复提交，爱扬系统不进行消耗且不进入下行流程。"); history.go(-1);</script>');
            break;
        case '-4':
            print("卡密不符合爱扬定义的卡号密码面值规则，爱扬系统不进行消耗且不进入下行流程。");
            break;
        case '-999':
            print('<script language="javascript">alert("对不起，爱扬接口维护中，请选择其他的充值方式！"); history.go(-1);</script>');
            break;
        default:
            print('未知的返回值, 请联系爱扬官方！');
            break;
    }
}
?>