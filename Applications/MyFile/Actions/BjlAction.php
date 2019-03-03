<?php
namespace Applications\MyFile\Actions;

use Applications\MyFile\HomeArray\BjlHomeArray;
use MyFile\Redis\RedisPackage;
use think\db\Query;

class BjlAction
{
    /**
     * 更新个人信息
     * @param unknown $client_id
     * @param unknown $data
     * @return number[]|string[]|number[]|unknown[]
     */
    public function refresh($client_id,$data){
        $id = getSessionFromKey($client_id, "id");
        if(!$id){
            sendToOne(2, ["errorCode"=>2,"content"=>"用户信息id信息错误，链接为非登录id!"], $client_id);
            return ;
        }
        $db = \Config::getDb();
        $user_money = $db->select('user_money')->from('app_users')->where("id=".$id)->single();
        // 更改redis缓存信息
        sendToOne(709, ['money'=>$user_money], $client_id);
    }
    
    /**
     * 开点记录
     * @param unknown $client_id
     * @param unknown $data
     */
    public function historyRecord($client_id,$data){
        $id = getSessionFromKey($client_id, "id");
        $dianModel = db();
        $sql = "SELECT `num`,`money`,`win_money`,`is_winning` FROM `app_order` WHERE user_id={$id} ORDER BY `add_time` desc LIMIT 20";
        $select = $dianModel->query($sql);
        sendToOne(732, $select, $client_id);
    }
    
    /**
     * 发喇叭
     * @param unknown $client_id
     * @param unknown $data
     */
    public function notice($client_id,$data){
        $data = json_decode($data,true);
        $gameModel = BjlHomeArray::getBjlHome();
        $gameModel -> notice($client_id,$data);
    }
    
    /**
     * 获取游戏排行
     * @param unknown $client_id
     * @param unknown $data
     * @return number[]|unknown[]
     */
    public function getRankings($client_id,$data){
        $date = getRanking();
//         dump($date);
        sendToOne(712, $date , $client_id);
    }
    
    /**
     * 兑换奖励
     * @param unknown $client_id
     * @param unknown $data
     */
    public function getReward($client_id,$data){
        $data = json_decode($data,true);
        $type = $data['type'];
        $id = getSessionFromKey($client_id, 'id');
        if(!$id){
            sendToOne(2, ["errorCode"=>2,"content"=>"用户信息id信息错误，链接为非登录id!"], $client_id);
            return ;
        }
        $isGet = RedisPackage::hGet("BjlUserGetReward", $id);
        if ($isGet && $isGet == 1){
            sendToOne(2, ["errorCode"=>2,"content"=>"每人每日只限领一次！"], $client_id);
            return ;
        }else {
            switch ($type){
                case 1:
                    $minMoney = 100;
                    $redMoney = 18;
                    break;
                case 2:
                    $minMoney = 200;
                    $redMoney = 38;
                    break;
                case 3:
                    $minMoney = 500;
                    $redMoney = 88;
                    break;
                case 4:
                    $minMoney = 1000;
                    $redMoney = 188;
                    break;
                case 5:
                    $minMoney = 2000;
                    $redMoney = 388;
                    break;
                case 6:
                    $minMoney = 3000;
                    $redMoney = 888;
                    break;
            }
            $userConMoney = getRanking($id);
            if ($userConMoney['moneySum'] >= $minMoney){
                $sql = "UPDATE app_users SET user_money=user_money+{$redMoney} WHERE id={$id}";
                db()->query($sql);
                $newMoney = db()->select("`user_money`")->from('app_users')->where("id={$id}")->single();
                RedisPackage::hSet("BjlUserGetReward", $id, 1);
                sendToOne(780, ['user_money'=>$newMoney], $client_id);
            }else {
                sendToOne(2, ["errorCode"=>2,"content"=>"您还没有达到当前领取的条件！！！"], $client_id);
                return ;
            };
        }
    }
    
    /**
     * 加入房间
     * @param unknown $client_id
     * @param unknown $data
     * @return number[]|string[]
     */
    public function inHome($client_id,$data){
        $json = json_decode($data,true);
        $id = getSessionFromKey($client_id, "id");
        if(!$id){
            sendToOne(2, ["errorCode"=>2,"content"=>"用户信息id信息错误，链接为非登录id!"], $client_id);
            return ;
        }
        $gameModel = BjlHomeArray::getBjlHome();
        $gameModel->inHome($client_id,$json); 
    }
    
    /**
     * 抢庄 申请上庄
     * @param unknown $client_id
     * @param unknown $data
     */
    public function robZhuang($client_id,$data){
        $data = json_decode($data,true);
        $gameModel = BjlHomeArray::getBjlHome();
        $gameModel -> robZhuang($client_id,$data);
    }
    
    /**
     * 下注
     * @param unknown $client_id
     * @param unknown $data
     */
    public function bet($client_id,$data){
        $data = json_decode($data,true);
        $gameModel = BjlHomeArray::getBjlHome();
        $gameModel -> bet($client_id,$data);
    }
    
    /**
     * 撤销
     * @param unknown $client_id
     * @param unknown $data
     */
    public function CheXiao($client_id,$data){
        $data = json_decode($data,true);
        $gameModel = BjlHomeArray::getBjlHome();
        $gameModel -> CheXiao($client_id,$data);
    }
    
    /**
     * 退出房间
     * @param unknown $client_id
     * @param unknown $data
     */
    public function outhome($client_id,$data){
        $data = json_decode($data,true);
        $gameModel = BjlHomeArray::getBjlHome();
        $gameModel -> outhome($client_id,$data);
    }
    
    /**
     * 佣金提现
     * @param unknown $client_id
     * @param unknown $data
     */
    public function YongToMoney($client_id,$data){
        $data = json_decode($data,true);
        $id = getSessionFromKey($client_id, 'id');
        // 获取redis中用户佣金提钱的次数
        $pullSum = RedisPackage::hGet("BjlUserPullYong", $id);
        if ($pullSum && $pullSum >= 5){
            sendToOne(2, ["errorCode"=>2,"content"=>"佣金不足！！！"], $client_id);
            return ;
        }else {
            $userYong = db()->select("`com_money`,`user_money`")->from("app_users")->where("id={$id}")->row();
            $pullYong = $data['money'];
            if ($userYong['com_money'] >= $pullYong){
                db()->update('app_users')->cols(array('com_money'=>$userYong['com_money']-$pullYong))->where("id={$id}")->query();
                db()->update('app_users')->cols(array('user_money'=>$userYong['user_money']+$pullYong))->where("id={$id}")->query();
                if ($pullSum){
                    RedisPackage::hSet("BjlUserPullYong", $id, $pullSum+1);
                }else {
                    RedisPackage::hSet("BjlUserPullYong", $id, 1);
                }
                sendToOne(726, "", $client_id);
                sendToOne(731, ['money'=>$userYong['user_money']+$pullYong], $client_id);
            }else {
                sendToOne(2, ["errorCode"=>2,"content"=>"佣金不足！！！"], $client_id);
                return ;
            }
        }
    }
    
    /**
     * 佣金记录
     * @param unknown $client_id
     * @param unknown $data
     */
    public function YongJiLu($client_id,$data){
        $id = getSessionFromKey($client_id, 'id');
        $sql = "SELECT * FROM `app_rebate` WHERE user_id={$id} ORDER BY `add_time` desc LIMIT 10";
        $data = db()->query($sql);
        sendToOne(729, $data, $client_id);
    }
    
    /**
     * 提现记录
     * @param unknown $client_id
     * @param unknown $data
     */
    public function TiXian($client_id,$data){
        $id = getSessionFromKey($client_id, 'id');
        $sql = "SELECT * FROM `app_widthraswals` WHERE user_id={$id} ORDER BY `add_time` desc LIMIT 10";
        $data = db()->query($sql);
        sendToOne(728, $data, $client_id);
    }
    
    /**
     * 佣金记录
     * @param unknown $client_id
     * @param unknown $data
     */
    public function TxCount($client_id,$data){
        $id = getSessionFromKey($client_id, 'id');
        $count = RedisPackage::hGet("BjlTxCount", $id);
        $num = $count?(10-$count):10;
        sendToOne(727, ['num'=>$num], $client_id);
    }
    
}

