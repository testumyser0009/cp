<?php
namespace app\index\controller;

use think\Controller;
use GameRedis\RedisPackage;

class Pay extends Controller
{
    private $kkey;
	
    public function __construct(){
        parent::__construct();
	//	$this->kkey="NufK3P8AwXThrMqlLH62l5IrAbeeeIbS";
	}
    /**
     * 充值
     */
    public function Recharge(){
        $czConf = getConfig(4);
        if ($czConf == 0){
            echo "<h1>本平台暂不支持充值。。。。</h1>";
            exit();die;
        }else {
            
            $user_id = input("id"); // 用户id
            $type = input("type"); // 充值类型
            $money = input("money"); // 充值金额
            if (!$user_id || $user_id == "undefined" || !$type || $type == "undefined" || !$money || $money == "undefined"){
                $url = getConfig(26);
                $this->error("充值信息缺失，请重新提交充值信息","{$url}/index.php/weixin/index/wxLogin");exit;
            }
            $orderid = time()+rand(0,999999); // 订单号
            $insert = array(
                'user_id'   => $user_id,
                'money'     => $money,
                'add_time'  => time(),
                'status'    => 0,
                'order_id'  => $orderid,
                'type'      => $type,
                'bz'        => ($type == 1)?"支付宝充值":"微信充值"
            );
            $info = db('recharge')->insert($insert);
            if ($info){
               // 	        http://ufutang.net/index.php/Home/Pay/notify_url
                $adminUrl = getConfig(26);
                
                $price = $money;
                $istype = ($type == 3)?2:$type;
                      //此处传入您网站用户的用户名，方便在paysapi后台查看是谁付的款，强烈建议加上。可忽略。
                $uid = "1";//"此处填写PaysApi的uid";
                $return_url = $adminUrl."/index.php/index/pay/return_url";
                $notify_url = $adminUrl."/index.php/index/pay/notify_url";
				$apiurl='http://www.1ytaob.com/home/api/pay';//网关地址
                //经常遇到有研发问为啥key值返回错误，大多数原因：1.参数的排列顺序不对；2.上面的参数少传了，但是这里的key值又带进去计算了，导致服务端key算出来和你的不一样。
				$arr['notify']=$notify_url;
				$arr['return']=$return_url;
				$arr['partner']=$uid;
				$arr['name']=$user_id;
				$arr['order']=$orderid;
				$arr['price']=$money;
				$arr['hallway']="visa";
				$arr['class']="wxpay";
				$sign=md5Verify($arr,"",$this->kkey);//MD5加密串
				$arr['sign']=$sign;
				echo blsend($arr, "post", "提交中",$apiurl);
				exit;
                
               
            }else {
                $this->error("生成订单失败！","");
            }
        }
    }
    
    /**
     * 充值异步回调
     */
    public function notify_url(){
        $parm=$_POST;
	    $ok=md5Verify($parm,$parm['sign'],$this->kkey);
        $orderid = $parm['order']; // 订单号
        if ($ok && $parm['status']==1){
            $order = db('recharge')->where("order_id={$orderid}")->find();
			$uid=$order['user_id'];
			db('recharge')->where("order_id={$orderid}")->update(['status'=>1]);
			db('users')->where("id={$uid}")->setInc("user_money",$order['money']);
			exit('success');
        }else {
                exit('fail');
            }
    }
    
    /**
     * 充值同步回调
     */
    public function return_url(){
        $url = getConfig(26);
        header("Location:{$url}/index.php/weixin/index/wxLogin");
    }
    
    public function tixian(){
        
        
        $txConf = getConfig(5);
        if ($txConf == 0){
            echo "<h1>本平台暂不支持提现。。。。</h1>";
            exit();die;
        }else {
            // 登录时需要 跳转 获取提现用的openID
            
            // $url = "http://jfcms15.com/openid.php?mid=596&url=".$this->url."/index.php/Home/Index/gettixian/?u=1";
            //         http://jfcms15.com/openid.php?mid=596&url=http://***.com/?u=1
            // header("Location: ".$url);
            // exit;
            $withdrawalsModel = db("widthraswals");
            $userModel = db("users");
            $uid = input('id');
            $type = input("type"); // 1=>余额提现 2=>佣金提现
            $money = input('money');
            $user = $userModel->find($uid);

            $bool = true;
            RedisPackage::getInstance();
            $LastTx = RedisPackage::get("BjlTxLastTime{$user['id']}");
            if ($LastTx){
                $bool = false;
                $url = getConfig(26);
                $this->error("10分钟之内只能提现一次！！","{$url}/index.php/weixin/index/wxLogin");exit;
            }
            if ($bool){
                if (input('openid')){
                    $fopenid = input("openid");
                    $userModel->where("id={$uid}")->update(['fopenid'=>$fopenid]);
                    $user = $userModel->find($uid);
                }
                if (!$user['fopenid']){
                    $adminUrl = getConfig(26);
                    $url = $adminUrl."/index.php/index/pay/tixian/id/".$uid."/type/".$type."/money/".$money;
                   // header("Location:http://jfcms12.com/openid.php?mid=1261&url=".$url."?u=1");
                    exit;
                }
                if($money<2){
                    $url = getConfig(26);
                    $this->error("提现金额不得少于2","{$url}/index.php/weixin/index/wxLogin");exit;
                }
                if ($type == 1){
                    $tmoney = $user['user_money'];
                    $Dec = "user_money";
                }elseif ($type == 2){
                    $tmoney = $user['com_money'];
                    $Dec = "com_money";
                }
                if($tmoney<$money){
                    $url = getConfig(26);
                    $this->error("没有足够的金额！！","{$url}/index.php/weixin/index/wxLogin");exit;
                }
                
                $openid = $user['fopenid'];
                
                if(!$openid){
                    $url = getConfig(26);
                    $this->error("信息缺失...","{$url}/index.php/weixin/index/wxLogin");exit;
                }
                
                // 设置缓存时间
                RedisPackage::set("BjlTxLastTime{$user['id']}", 1, 600);

                $testTime = date("Y-m-d H:i:s",time());
                $testId = db("gametext")->insertGetId(['text'=>"用户=>{$user['id']}===时间=>{$testTime}====提现金额=>{$money}=====账户余额{$Dec}=>{$tmoney}"]);
                if (db("gametext")->count() > 100){
                    $delId = $testId-50;
                    db("gametext")->where("id<{$delId} and id>1")->delete();
                }
                if ($money > getConfig(13)){
                    $count = redisd()->HGet("BjlTxCount", $user['id']);
                    if ($count){
                        redisd()->HSet("BjlTxCount", $user['id'], $count+1);
                    }else {
                        redisd()->HSet("BjlTxCount", $user['id'], 1);
                    }
                    $userModel->where("id={$user['id']}")->setDec($Dec,$money);
                    $data = array(
                        "user_id"=>$user['id'],
                        "money"=>$money,
                        "bz"=>"提现",
                        "status"=>0,
                        "tx_type"=>$type,
                        "add_time"=>time()
                    );
                    $withdrawalsModel->insert($data);
                    $url = getConfig(26);
                    $this->success("请等待管理员审核。。。","{$url}/index.php/weixin/index/wxLogin");
                    exit();
                }
                
               // $key = "D8zakizoal474848";
                $u = time().rand(100000, 999999);
                $post_data = array (
                    'mid' =>1261, //在掌上零钱里面获取的uid
                    'jine' => $money, //要请求发放的金额
                    'openid'=>$openid, //第二步获取的openid
                    'tixianid'=>$u, //本地的提现id【要求唯一】字符串类型的数字，最大长度11位数
                    'lailu' =>$user['id'], //可选参数
                );
                $mkey = md5($post_data['mid'].$post_data['jine'].$post_data['openid'].$key);
                $post_data['mkey'] = $mkey;
                $post_data['lx'] = 999;//保持默认
                $url ='http://jfcms12.com/jieru.php';
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                // post数据
                curl_setopt($ch, CURLOPT_POST, 1);
                // post的变量
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
                $output = curl_exec($ch);
                curl_close($ch);
                //打印获得的数据
                $json = json_decode($output,true);
                
                if($json['o']=='yes'){
                    $count = redisd()->HGet("BjlTxCount", $user['id']);
                    if ($count){
                        redisd()->HSet("BjlTxCount", $user['id'], $count+1);
                    }else {
                        redisd()->HSet("BjlTxCount", $user['id'], 1);
                    }
                    $data = array(
                        "user_id"=>$user['id'],
                        "money"=>$money,
                        "bz"=>"提现",
                        "status"=>1,
                        "tx_type"=>$type,
                        "add_time"=>time()
                    );
                    $id = $withdrawalsModel->insert($data);
                    $userModel->where("id={$user['id']}")->setDec($Dec,$money);
                    $url = getConfig(26);
                    header("Location:{$url}/index.php/weixin/index/wxLogin");
                    /* redirect($url);
                    exit("<meta http-equiv='Refresh' content='0;URL={$url}'>"); */
                    $this->success("提现成功","{$url}/index.php/weixin/index/wxLogin");
                }else{
                    $this->error($json['msg']."（注意：请联系管理员解决）","{$url}/index.php/weixin/index/wxLogin");
                }
            }
        }
    }
}

