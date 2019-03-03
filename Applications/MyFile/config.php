<?php
//=================================================================
//自动加载的配置文件
//使用方法同TP5一样
//作者：NNbaba
//2018-03-05
//================================================================
class Config{
  
    
    private static $db;
    private static $config = array(
        //****------------------机密key
        "key"=>"5e08323af9116a8824139704e36d7c15",//加密信息
        
        //**------------------- 数据库参数
        "host"=>"127.0.0.1",//链接地址
        "port"=>"3306",//端口
        "user"=>"root",//用户名
        "password"=>"",//密码
        "db_name"=>"www.bjl.com",//数据库名称
    );
    
    public static function setDb($db){
        self::$db = $db;
    }
    
    public static function getDb(){
        return self::$db;
    }
    
    public static function get($str){
        return self::$config[$str];
    }
    
}
