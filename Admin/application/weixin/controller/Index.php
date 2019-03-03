<?php
namespace app\weixin\controller;

use think\Controller;
use weixin\Wechat;

// 指定允许其他域名访问
header('Access-Control-Allow-Origin:*');
// 响应类型
header('Access-Control-Allow-Methods:*');
// 响应头设置
header('Access-Control-Allow-Headers:x-requested-with,content-type');   

class Index extends Controller
{
    
    private $appid = "wxe11a872d4a055ddf";
    private $appsecret = "15b02b815da724436965b4d451481d59";
    private $url = "";
    //微信授权
    public function wxLogin(){
        $weihu = getConfig(1);
        if ($weihu == 0){
            echo "<h1>系统维护中。。。。</h1>";
            exit();die;
        }
        $this->url = getConfig(25);
        $yqm = input("yqm",0,"intval");
        if ($yqm == 0){
            $url = urlencode($this->url."/index.html");
        }else {
            $url = urlencode($this->url."/index.html?yqm={$yqm}");
        }
        header("Location:https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$this->appid."&redirect_uri=".$url."&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect");
        //确保重定向后，后续代码不会被执行
        exit;
        //微信授权
    }
    
    //获取用户信息
    public function getUser(){
        /**
        $weixin = new Wechat(array('appid'=>$this->appid,'appsecret'=>$this->appsecret,'token'=>'1123123'));
        $json = $weixin->getOauthAccessToken();//获取session_token,openid
        if($json['access_token']){
            session('user_code',$json);
        }
        $userinfo=session('user_code');//一次判断用户code
        //获取用户数据
        $user=$weixin->http_get("https://api.weixin.qq.com/sns/userinfo?access_token=".$userinfo['access_token']."&openid=".$userinfo['openid']."&lang=zh_CN ");
         * {"openid":"oiI2uuD7OF5F1IKz71BWYHelyN1s",
         * "nickname":"zxh",
         * "sex":1,
         * "language":"zh_CN",
         * "city":"濮阳",
         * "province":"河南",
         * "country":"中国",
         * "headimgurl":"http:\/\/thirdwx.qlogo.cn\/mmopen\/vi_32\/cGJetjxpjVeUG0BAn4lhOvRvTAzKALeknUCo8rjIfWKHjPl1ib7Ribp1Wx2OzfwjZmbprmSoFgy2r6KJG7ZVria6Q\/132",
         * "privilege":[],
         * "unionid":"objySwCIk5IWkzmd-srYV4YzWxDM"}

         */
        $user ['openid'] ="oiI2uuD7OF5F1IKz71BWYHelyN1s";
        $user ['nickname'] ="zxh";
        $user ['sex'] ="1";
        $user ['language'] ="zh";
        $user ['city'] ="濮阳";
        $user ['province'] ="濮阳";
        $user ['headimgurl'] ="oiI2uuD7OF5F1IKz71BWYHelyN1s";
        $user ['unionid'] ="oiI2uuD7OF5F1IKz71BWYHelyN1s";
   //     return $user;//
        if ($user){
        //    $user = json_decode($user,true);
            $info = db('users') -> where("openid='{$user['openid']}'") -> find();
            if (!$info){
                $insert = array(
                    'openid'    => $user['openid'],
                    'nickname'  => $user['nickname'],
                    'sex'       => $user['sex'],
                    'headurl'   => $user['headimgurl'],
                    'user_money'=> 10,
                );
                db("users")->insertGetId($insert);
            }
            
            send(1, $info, $info['id']);
            return json("登陆成功");
        }else {
            return json("登陆失败");
        }
    }
    
    public function erweima(){
        $adminurl = getConfig(26);
        $yqm = input('yqm');
        $url = $adminurl."/index.php/weixin/index/wxLogin/yqm/{$yqm}";
        $this->assign('url',$url);
        return $this->fetch();
    }
}
