<?php
namespace MyFile\Redis;
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

    
    private function __construct($options = [])
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
     * 获取队列长度
     * @param string $key
     * @return int
     */
    public static function lLen($key)
    {
        return self::$handler->lLen($key);
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
     * 获取链表下所有的值
     * @param unknown $key
     * @param number $start
     * @param unknown $end
     * @return unknown
     */
    public static function LRange($key,$start=0,$end=-1){
        return self::$handler->lrange($key,$start,$end);
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
    
    /**
     * 删除链表中的值
     * @param unknown $key
     * @param unknown $value
     * @param number $count
     * @return unknown
     */
    public static function lRem($key, $value, $count=0)
    {
        return self::$handler->lrem($key, $value, $count);
    }
    
    /**
     * 哈希表添加
     * @param unknown $table
     * @param unknown $key
     * @param unknown $value
     * @return unknown
     */
    public static function hSet($table,$key,$value){
        $result = json_encode($value);
        return self::$handler->hSet($table,$key,$result);
    }
    
    /**
     * 哈希表获取值
     * @param unknown $table
     * @param unknown $key
     * @return unknown
     */
    public static function hGet($table,$key){
        $result = self::$handler->hGet($table,$key);
        if ($result){
            $return = json_decode($result,true);
            return $return;
        }else {
            return false;
        }
    }
    
    /**
     * 删除哈希表的那个值
     * @param unknown $table
     * @param unknown $key
     * @return unknown
     */
    public static function hDel($table,$key){
        return self::$handler->hDel($table,$key);
    }
    
    /**
     * 判断键是否在一个哈希表中
     * @param unknown $table
     * @param unknown $key
     * @return unknown
     */
    public static function hExists($table,$key){
        return self::$handler->hExists($table,$key);
    }
    
    /**
     * 获取所有的哈希表的键值对
     * @param unknown $table
     * @return unknown
     */
    public static function hGetAll($table){
        return self::$handler->hGetAll($table);
    }
    
    
    /**
     * 原来的基础加一
     * @param unknown $key
     * @return unknown
     */
    public static function incr($key){
        return self::$handler->incr($key);
    }
    
    
    /**
     * 原来的基础减去一
     * @param unknown $key
     * @return unknown
     */
    public static function decr($key){
        return self::$handler->decr($key);
    }
    
    
    /**
     * 原来的基础加一个值
     * @param unknown $key
     * @return unknown
     */
    public static function incrBy($key,$value){
        return self::$handler->incrBy($key,$value);
    }
    
    /**
     * 原来基础减去一个值
     * @param unknown $key
     * @param unknown $value
     * @return unknown
     */
    public static function decrBy($key,$value){
        return self::$handler->decrBy($key,$value);
    }
    
    
    /**
     * 修剪list
     * @param unknown $key
     * @param unknown $start
     */
    public static function lTrim($key,$start,$len){
        return self::$handler->ltrim($key,$start,$len);
    }
    
    /**
     * 获取当前key剩余的过期时间
     * @param unknown $key
     * @return unknown
     */
    public static function ttl($key){
        return self::$handler->ttl($key);
    }
    
    
}