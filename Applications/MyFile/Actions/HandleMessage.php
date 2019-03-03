<?php
namespace MyFile\Actions;
use Applications\MyFile\TcpNum;

/**
 * 服务使用类不允许修改
 * @author NNbaba
 *2018-03-08
 */
class HandleMessage
{
    
    /**
     * 获取相应的类
     * @param unknown $client_id
     * @param unknown $message
     */
    public static function HeadleMessage($client_id,$message){
//         dump($message);
        $spacename = 'Applications\MyFile\Actions';
        if(self::verificationData($message)){//验证签名和格式
            $array = json_decode($message,true);
            $TcpObj = TcpNum::getInstance();
            if($array['action'] != 0){
                echo "client:".$message."\n";
            }
            $actions = $TcpObj->getAction($array['action']);
            if($actions && self::verificationAction($client_id,$array['action'])){
                $classname = $spacename."\\".$actions[0];
                $actionObj = new $classname();
                try{
                    $act = $actions[1];
                    $actionObj->$act($client_id,$array['data']);
                }catch (\ErrorException $e){
                    dump($e);
                }
            }
        }else{
            echo "ACTIONS OR SIGN ERROR\n";
        } 
    }
    
    public static function verificationAction($client_id,$num){
        /**
         * 测试用 删除
         * @var Ambiguous $id
         */
        $id = getSessionFromKey($client_id, "id");
        if($num>100 && $num<200 && $id && $id>0){
            return true;
        }else if($num<=100){
            return true;
        }else if($num>=400 && $id && $id>0){
            return true;
        }else if($num > 2000){
            return true;
        }else {
            return false;
        }
    }
    
    
    
    
    /**
     * 判断是否是json格式
     * @param 要判断的字符串 $string
     * @return boolean
     */
    public static function is_json($string)
    {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }
    
    /**
     * 验证收到信息
     * @param unknown $data
     * @return boolean
     */
    public static function verificationData($data){
        
       
        if(self::is_json($data) && self::requestData($data)){
            return true;
        }else{
            return false;
        }
    }
    
    
    /**
     * 判断客户发来的信息加密是否正确
     * @param unknown $data
     * @param unknown $con
     * @return boolean
     */
    public static  function requestData($data){
        $key = \Config::get("key");
        
        $jsondata = json_decode($data,true);
        
        $strmd5 = md5($jsondata['action'].$jsondata['data'].$key);
        
        if($strmd5 == $jsondata['sign']){
            return true;
        }else{
            echo "加密错误\n";
            return false;
        }
    }
    
}

