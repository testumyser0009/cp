<?php
namespace Applications\MyFile\Actions;


use Applications\MyFile\HomeArray\BjlHomeArray;
use MyFile\Redis\RedisPackage;

/**
 * 游戏主界面的其他信息
 * @author zxh
 *
 */
class Data
{
    /**
     * 进程切换
     * @param unknown $client_id
     * @param unknown $data
     */
    public function editWorker($client_id,$data){}
    
    /***
     * 有玩家断开连接
     * @param unknown $client_id
     */
    public static function closeClient($client_id){
        $id = $_SESSION["id"];
        RedisPackage::hDel("BjlUserOnLine", $id);
        $home = BjlHomeArray::getBjlHome();
        if($id && in_array($id, $home->PeopleIds)){
            foreach ($home->PeopleObj as $k => $v){
                if ($v->id == $id){
                    $home->PeopleLines = array_diff($home->PeopleLines, [$k]);
                    unset($home->PeopleObj[$k]);
                    $home->PeopleCount --;
                }
            }
            $home->PeopleIds = array_diff($home->PeopleIds, [$id]);
        }
    }
    
    
    public static function OutInHomeClient($client_id,$id){}
    
}

