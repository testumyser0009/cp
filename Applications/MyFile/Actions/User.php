<?php
namespace Applications\MyFile\Actions;
use GatewayWorker\Lib\Gateway;
use Applications\MyFile\HomeArray\BjlHomeArray;
use think\db\Query;

class User{
    /**
     * 心跳
     * @param unknown $client_id
     * @param unknown $data
     */
    public function HeartBeat($client_id,$data){
        send(0, "", $client_id);
    }
    
    public function WeChatLogin($client_id,$message){
        
        $weihu = db()->select("`values`")->from('app_config')->where("id=1")->single();
        if ($weihu == 0){
            sendToOne(2, ["errorCode"=>2,'content'=>"系统维护中。。。。。"], $client_id);
            return false;
        }
        
        $request = json_decode($message,true);
        if (!isset($request['openId'])){
            sendToOne(2, ["errorCode"=>2,'content'=>"获取用户信息失败，请重新登录游戏！"], $client_id);
            return false;
        }
        $openid = $request['openId']; // openID
        $headicon = $request['avatarUrl']; // 头像
        $nickName = $request['nickName']; // 昵称
        
        
        $nickName = preg_replace('#[^\x{4e00}-\x{9fa5}A-Za-z0-9]#u','',$nickName);
        if($nickName == null ||$nickName == ''){
            $nickName = "???";
        }
        $sex = $request['gender']; // 性别
        // oTYbG1ZuElIdDxfw7yK2_P_9g97c
        if(strlen($openid) < 28){
            return false;
        }
        
        $db = \Config::getDb();
        $user = $db->select('*')->from('app_users')->where("openid='{$openid}'")->row();
        if($user){
            if($user['state'] == 0){
                // 封号提醒
                sendToOne(2, ["errorCode"=>2,'content'=>"您的账户已被封，请联系管理员。。。。。"], $client_id);
                return false;
            }
            $id = $user['id'];
        }else{
            $array = array(
                "openid"=>$openid,
                "nickname"=>$nickName,
                "url"=>$headicon,
                "sex"=>$sex,
                "user_money"=>0,
                "reg_time" => time(),
                'state'=>1,
            );
            if (isset($request['yqm'])){
                $parent_id = $request['yqm'];
                if($parent_id){//添加三级分销
                    $array['first_parent_id'] = $parent_id;
                    $secondid = getParentId($parent_id);
                    if($secondid['first_parent_id']){
                        $array['second_parent_id'] = $secondid['first_parent_id'];
                    }
                    if($secondid['second_parent_id']){
                        $array['three_parent_id'] = $secondid['second_parent_id'];
                    }
                    if($secondid['three_parent_id']){
                        $array['four_parent_id'] = $secondid['three_parent_id'];
                    }
                    if($secondid['four_parent_id']){
                        $array['five_parent_id'] = $secondid['four_parent_id'];
                    }
                    if ($secondid['five_parent_id']){
                        $array['six_parent_id'] = $secondid['five_parent_id'];
                    }
                    if ($secondid['six_parent_id']){
                        $array['seven_parent_id'] = $secondid['six_parent_id'];
                    }
                    if ($secondid['seven_parent_id']){
                        $array['eight_parent_id'] = $secondid['seven_parent_id'];
                    }
                    if ($secondid['eight_parent_id']){
                        $array['nine_parent_id'] = $secondid['eight_parent_id'];
                    }
                    if ($secondid['nine_parent_id']){
                        $array['ten_parent_id'] = $secondid['nine_parent_id'];
                    }
                }
            }
            $id= $db->insert("app_users")->cols($array)->query();
            $user = $db->select('*')->from('app_users')->where("id={$id}")->row();
        }
        if($user['is_daili'] == 1){
            $id = $user['id'];
            if(strlen($id)<4){
                $id = "0000".$id;
                $id = substr($id, -4);
            }
            $user['yqm'] = $id;
        }
        $sql['first'] = "SELECT COUNT(*) FROM `app_users` WHERE `first_parent_id`={$user['id']}";
        $sql['second'] = "SELECT COUNT(*) FROM `app_users` WHERE `second_parent_id`={$user['id']}";
        $sql['three']= "SELECT COUNT(*) FROM `app_users` WHERE `three_parent_id`={$user['id']}";
        $sql['four'] = "SELECT COUNT(*) FROM `app_users` WHERE `four_parent_id`={$user['id']}";
        $sql['five'] = "SELECT COUNT(*) FROM `app_users` WHERE `five_parent_id`={$user['id']}";
        $sql['six'] = "SELECT COUNT(*) FROM `app_users` WHERE `six_parent_id`={$user['id']}";
        $sql['seven'] = "SELECT COUNT(*) FROM `app_users` WHERE `seven_parent_id`={$user['id']}";
        $sql['eight'] = "SELECT COUNT(*) FROM `app_users` WHERE `eight_parent_id`={$user['id']}";
        $sql['nine'] = "SELECT COUNT(*) FROM `app_users` WHERE `nine_parent_id`={$user['id']}";
        $sql['ten'] = "SELECT COUNT(*) FROM `app_users` WHERE `ten_parent_id`={$user['id']}";
        foreach ($sql as $k => $v){
            $row = db()->query($v);
            $user[$k] = $row[0]['COUNT(*)'];
        }
//         if (Gateway::isUidOnline($user['id'])){
//             sendToOne(2, ["errorCode"=>2,'content'=>"您的账户正在游戏中。。。"], $client_id);
//             return false;
//         }else {
            Gateway::bindUid($client_id, $user['id']);
            $session['id'] = $user['id'];
            $session['userInfo'] = $user;
            Gateway::setSession($client_id, $session);
            $gg = db()->select("`text`")->from('app_gametext')->where("id=1")->single();
            sendToOne(1, $user, $client_id);
            sendToOne(11, ["text"=>$gg], $client_id);
            $bjlHome = BjlHomeArray::getBjlHome();
            $bjlHome -> inHome($client_id,"");
//         }
    }
    
    /**
     * http请求
     * @param unknown $url
     * @param string $data
     * @return mixed
     */
    public function httpRequset($url,$data=false){
        $ch=curl_init();
        //设置超时
        curl_setopt($ch,CURLOPT_TIMEOUT,60);
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,FALSE);
        if($data){
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        }
        curl_setopt($ch,CURLOPT_HEADER,FALSE);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
        $res=curl_exec($ch);
        curl_close($ch);
        return $res;
    }
}