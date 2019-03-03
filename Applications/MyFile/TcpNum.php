<?php
namespace Applications\MyFile;

class TcpNum
{
    
    public static $instance = null;
    private function __construct(){echo "创建对象tcp";}
    private function __clone(){}//不能复制
    private  $config = array(
        "0"=>"User/HeartBeat",
        "1"=>"User/WeChatLogin", // 获取用户信息 登录
        "10"=>"Data/editWorker",//切换进程
        "709"=>"BjlAction/refresh",// 刷新金币
        "712"=>"BjlAction/getRankings",// 排行
        //需要加密业务逻辑
        "724"=>"BjlAction/inHome",//加入房间
        "726"=>"BjlAction/YongToMoney",// 佣金转余额
        "727"=>"BjlAction/TxCount", // 提现次数
        "728"=>"BjlAction/TiXian",// 提现记录
        "729"=>"BjlAction/YongJiLu",//佣金记录
        "730"=>"BjlAction/CheXiao",//撤销
        "731"=>"BjlAction/bet",//下注
        "732"=>"BjlAction/historyRecord",//历史记录
        "734"=>"BjlAction/notice",//公告
//         "2035"=>"BjlAction/xiazhuang",//下庄
        "737"=>"BjlAction/outhome",//退出房间
        // 780 + 加需求
        "780"=>"BjlAction/getReward", // 领取日佣金奖励
    );
    /**=======================*********---服务器发送的数据-----**********======================================
     * 2    == 错误号(
     *          'errorCode'=>,'errorMessage'=>""
     *       )
     * 
     * 
     */
    static public function getInstance(){
        //判断$instance是否是Uni的对象
        //没有则创建
        if (!self::$instance instanceof self) {
              self::$instance = new self();
        }
        return self::$instance;
            
    }
    public function getAction($str){
        $returnStr = $this->config[$str];
        if(isset($returnStr) && $str>=0){
            $arr = explode("/", $returnStr);
            return $arr;
        }else{
            return false;
        }
    }
    
}

