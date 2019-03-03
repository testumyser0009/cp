<?php
namespace GameRedis;
class RedisPackage
{
    protected static $handler = null;
    private static $_instance = null;
    protected $options = [
        'host' => '127.0.0.1',
        'port' => 6379,
        'password' => '',
        'select' => 0,
        'timeout' => 0,//关闭时间 0:代表不关闭
        'expire' => 0,
        'persistent' => false,
        'prefix' => '',
    ];

    
    public function __construct($options = [])
    {
        if (!extension_loaded('redis')) {   //判断是否有扩展(如果你的apache没reids扩展就会抛出这个异常)
            throw new \BadFunctionCallException('not support: redis');
        }
        if (!empty($options)) {
            $this->options = array_merge($this->options, $options);
        }
        $func = $this->options['persistent'] ? 'pconnect' : 'connect';     //判断是否长连接
        self::$handler = new \Redis;
        self::$handler->$func($this->options['host'], $this->options['port'], $this->options['timeout']);

        if ('' != $this->options['password']) {
            self::$handler->auth($this->options['password']);
        }

        if (0 != $this->options['select']) {
            self::$handler->select($this->options['select']);
        }
        
    }
    
    
    /**
    * @return RedisPackage|null 对象
    */
    public static function getInstance()
    {
        if (!(self::$_instance instanceof self)) {
            
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    
    /**
     * 判断key是否存在
     * @param unknown $key
     */
    public static function exists($key){
        return self::$handler->exists($key);
    }
    
    
    
    /**
     * 写入缓存
     * @param string $key 键名
     * @param string $value 键值
     * @param int $exprie 过期时间 0:永不过期
     * @return bool
     */
    public static function set($key, $value, $exprie = 0)
    {  
        if(is_array($value)||is_object($value)){
            $value = json_encode($value);
        }
        if ($exprie == 0) {
            $set = self::$handler->set($key, $value);
        } else {
            $set = self::$handler->setex($key, $exprie, $value);
        }
        return $set;
    }

    /**
     * 读取缓存
     * @param string $key 键值
     * @return mixed
     */
    public static function get($key)
    {
        $fun = is_array($key) ? 'Mget' : 'get';
        return self::$handler->{$fun}($key);
    }

    /**
     * 获取值长度
     * @param string $key
     * @return int
     */
    public static function lLen($key)
    {
        return self::$handler->lLen($key);
    }
    
    /**
     * 设置存储信息
     * @param 表名(大小) $biao
     * @param 键                     $key
     * @param 值                     $value
     */
    public static function HSet($biao,$key,$value){
        return self::$handler->hSet($biao,$key,$value);
    }
    
    /**
     * 获取key值
     * @param 表名(大小) $biao
     */
    public static function HKeys($biao){
        $data = self::$handler -> hKeys($biao);
        if (!$data) return false;
        return $data;
    }
    
    /**
     * 获取所有值
     * @param 表名(大小) $biao
     */
    public static function HVals($biao){
        $data = self::$handler -> hVals($biao);
        if (!$data) return false;
        foreach ($data as $k => $v){
            $data[$k] = json_decode($v,true);
        }
        return $data;
    }
    
    /**
     * 获取信息
     * @param 表名(大小) $biao
     * @param 键值  $key
     */
    public static function HGet($biao,$key){
        $data = self::$handler -> hGet($biao,$key);
        if (!$data) return false;
        return json_decode($data,true);
    }
    
    /**
     * 获取表中所有信息
     * @param 表名(大小) $biao
     */
    public static function HgetAll($biao){
        $data = self::$handler -> hGetAll($biao);
        if (!$data) return false;
        foreach ($data as $k => $v){
            $data[$k] = json_decode($v,true);
        }
        return $data;
    }
    
    /**
     * 删除单个键值
     * @param string $key
     * @return int
     */
    public static function HDel($biao,$key)
    {
        return self::$handler->hDel($biao,$key);
    }
    
    /**
     * 删除键值
     * @param string $key
     * @return int
     */
    public static function del($key)
    {
        return self::$handler->del($key);
    }

    /**
     * 将一个或多个值插入到列表头部
     * @param $key
     * @param $value
     * @return int
     */
    public static function LPush($key, $value, $value2 = null, $valueN = null)
    {
        return self::$handler->lPush($key, $value);
    }
    
    /**
     * 将一个或多个值插入到列表尾部
     * @param key $key
     * @param v1  $value
     * @param v2 $value2
     * @param v3 $valueN
     */
    public static function RPush($key, $value, $value2 = null, $valueN = null)
    {
        return self::$handler->rPush($key, $value);
    }
    
    /**
     * 获取下标对应的值
     * @param unknown $key
     */
    public static function Lindex($key,$index){
        return self::$handler->lindex($key,$index);
    }
    
    
    
    /**
     * 移出并获取列表的第一个元素
     * @param string $key
     * @return string
     */
    public static function lPop($key)
    {
        return self::$handler->lPop($key);
    }
}