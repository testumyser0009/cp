<?php 
/**
 * This file is part of workerman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link http://www.workerman.net/
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
use \Workerman\Worker;
use \Workerman\WebServer;
use \GatewayWorker\Gateway;
use \GatewayWorker\BusinessWorker;
use \Workerman\Autoloader;
use MyFile\Actions\HandleMessage;

// gateway 进程，这里使用Text协议，可以用telnet测试 8123
$gateway = new Gateway("websocket://0.0.0.0:8080");
// gateway名称，status方便查看
$gateway->name = 'YourAppGateway';
// gateway进程数
$gateway->count = 1;
// 本机ip，分布式部署时使用内网ip
$gateway->lanIp = '127.0.0.1';
// 内部通讯起始端口，假如$gateway->count=4，起始端口为4000
// 则一般会使用4000 4001 4002 4003 4个端口作为内部通讯端口 
$gateway->startPort = 4399;
// 服务注册地址
$gateway->registerAddress = '127.0.0.1:1230';

$gateway->router = function($worker_connections, $client_connection, $cmd, $buffer)
{
    
   $buffer = substr($buffer, 0,-1);
   try {
       $datas = json_decode($buffer,true);
       $data = $datas['data'];
       if($datas['action'] == 10){
            $d = json_decode($data,true);
       }
   }catch (ErrorException $e){
       
   }
    if(isset($d['progressType']) && $cmd == 3){
        dump($d['progressType']);
        if($d['progressType'] >= 0 && $d['progressType'] < 4){
            $str = "127.0.0.1:business".$d['progressType'].":".$d['progressType'];
            $client_connection->businessworker_address = $str;
            echo "手动分配".$client_connection->businessworker_address."\n";
        }
    }else{
        // 临时给客户端连接设置一个businessworker_address属性，用来存储该连接被绑定的worker进程下标
        if (!isset($client_connection->businessworker_address) || !isset($worker_connections[$client_connection->businessworker_address])) {
            $client_connection->businessworker_address = array_rand($worker_connections);
            echo "自动分配".$client_connection->businessworker_address."\n";
        }
    }

    return $worker_connections[$client_connection->businessworker_address];
};

// // 心跳间隔
// $gateway->pingInterval = 60;
// // 间隔次数
// $gateway->pingNotResponseLimit = 5;
// // 心跳数据
// $gateway->pingData = '';

/* 
// 当客户端连接上来时，设置连接的onWebSocketConnect，即在websocket握手时的回调
$gateway->onConnect = function($connection)
{
    $connection->onWebSocketConnect = function($connection , $http_header)
    {
        // 可以在这里判断连接来源是否合法，不合法就关掉连接
        // $_SERVER['HTTP_ORIGIN']标识来自哪个站点的页面发起的websocket链接
        if($_SERVER['HTTP_ORIGIN'] != 'http://kedou.workerman.net')
        {
            $connection->close();
        }
        // onWebSocketConnect 里面$_GET $_SERVER是可用的
        // var_dump($_GET, $_SERVER);
    };
}; 
*/

// 如果不是在根目录启动，则运行runAll方法
if(!defined('GLOBAL_START')) {
    Worker::runAll();
}

