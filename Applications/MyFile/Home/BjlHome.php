<?php
namespace Applications\MyFile\Home;

use Workerman\Lib\Timer;
use MyFile\Redis\RedisPackage;

class BjlHome
{

    // 房间属性
    private $homeid = 0;
    private $homeType = 1; // 1下注 2计算结果 3结算
    private $homeRole = array(); // 庄家信息
    private $homeRoleList = array(); // 抢庄队列
    
    //定时器
    private $timeJ = 0.5;//定时器间隔时间
    private $timeID;//定时器id
    private $time = 0;//计时器当前时间
    
    // 玩家属性
    public $PeopleIds = array(); // 玩家ID集合
    public $PeopleCount = 0; // 人数
    public $PeopleObj = array(); // 玩家对象
    public $PeopleLines = array(); // 玩家连接
    private $PeoplePlayMoney = array(array(),array(),array(),array(),array()); // 玩家下注的金额   下标 0=>闲 1=>闲对 2=>和 3=>庄对 4=>庄
    private $che=array(0,0,0,0,0);//撤销总数
    // 机器人属性
    private $ObArray = array(); // 机器人集合
    private $AiPlayMoney = array(array(),array(),array(),array(),array()); // 机器人下注的金额
    private $AiCount = 5; // 机器人个数
    
    // 游戏的属性
    private $Glx = 470; // 开闲的概率
    private $Glh = 60; // 开和的概率
    private $Glz = 470; // 开庄的概率
    private $Glxd = 10; // 开闲对的概率
    private $Glzd = 10; // 开庄对的概率
    private $Glz6 = 50;
    
    private $gameBigMax = 0; // 大池子的上限
    private $gameSmallMax = 0; // 小池子的上限
    private $qiangzhuangtime = 30; // 抢庄时间
    private $xiazhutime = 20; // 下注时间
    private $jisuanjieguotime = 3; // 计算结果时间
    private $jiesuantime = 15; // 结算时间
    private $OperationTime = 30; // 操作时间
    private $AllDian; // 所有点的集合  0,104=小点   105,209=大点
    private $OpenDX; // 游戏开点大小 下标 0=>闲2=>和 4=>庄
    private $OpenDui; // 1=>闲对  3=>庄对 
    private $OpenDian = array(); // 开点最终结果
    private $Pei = array(1,11,8,11,1); // 赔率
    private $CardCount = 416; // 牌的数量
    private $GameNum = 1; // 游戏的期数
    private $AllCards = array(1.1,2.1,3.1,4.1,5.1,6.1,7.1,8.1,9.1,10.1,11.1,12.1,13.1,
                              1.2,2.2,3.2,4.2,5.2,6.2,7.2,8.2,9.2,10.2,11.2,12.2,13.2,
                              1.3,2.3,3.3,4.3,5.3,6.3,7.3,8.3,9.3,10.3,11.3,12.3,13.3,
                              1.4,2.4,3.4,4.4,5.4,6.4,7.4,8.4,9.4,10.4,11.4,12.4,13.4); // 所有的牌
    
    
    public function __construct(){
        $gl = getBjlGl();
        foreach ($gl as $k => $v){
            if ($v['conkey'] == 'glx'){
                $this->Glx = $v['values'];
            }elseif ($v['conkey'] == 'glh'){
                $this->Glh = $v['values'];
            }elseif ($v['conkey'] == 'glz'){
                $this->Glz = $v['values'];
            }elseif ($v['conkey'] == 'glxd'){
                $this->Glxd = $v['values'];
            }elseif ($v['conkey'] == 'glzd'){
                $this->Glzd = $v['values'];
            }
        }
        $this->AiCount = getAiCount();
        $this->GameNum = getGameSum();
        $this->OperationTime = $this->xiazhutime;
        $this->startGame();
    }
    
    /**
     * 加入房间
     * @param unknown $client_id
     * @param unknown $data
     */
    public function inHome($client_id,$data){
        $this->PeopleCount ++;
        array_push($this->PeopleLines, $client_id);
        $uid = getSessionFromKey($client_id, "id");
        if (!$uid){
            sendToOne(2, ["errorCode"=>2,"content"=>"非法连接，请重新登录游戏！"], $client_id);
            return false;
        }
        $userInfo = db()->select("*")->from("app_users")->where("id={$uid}")->row();
        array_push($this->PeopleIds, $userInfo['id']);
        $userObj = new PeopleState($userInfo['id'], $userInfo['nickname'], $userInfo['user_money'],$userInfo['user_type']);
        $this->PeopleObj[$client_id] = $userObj; // 玩家对象
        // 所有下注的筹码
        $list = array();
        $list[0] = explode(",", trim(implode(",", $this->AiPlayMoney[0]).",".implode(",", $this->PeoplePlayMoney[0]),","));
        $list[1] = explode(",", trim(implode(",", $this->AiPlayMoney[1]).",".implode(",", $this->PeoplePlayMoney[1]),","));
        $list[2] = explode(",", trim(implode(",", $this->AiPlayMoney[2]).",".implode(",", $this->PeoplePlayMoney[2]),","));
        $list[3] = explode(",", trim(implode(",", $this->AiPlayMoney[3]).",".implode(",", $this->PeoplePlayMoney[3]),","));
        $list[4] = explode(",", trim(implode(",", $this->AiPlayMoney[4]).",".implode(",", $this->PeoplePlayMoney[4]),","));
        foreach ($list as $k => $v){
            $listSum[$k] = array_sum($v);
        }
        $ren = $this->PeopleCount + rand(50,100);
        $return23 = array(
            'miao'      =>ceil($this->OperationTime),
            't'         =>$this->homeType,
            'card'      =>isset($this->OpenDian['card'])?$this->OpenDian['card']:array(),
            "cardSum"   =>$this->CardCount,
            'result'    =>$this->OpenDX,
            "is_double" =>$this->OpenDui,
            "listSum"   =>$listSum,
            "list"      =>$list // 池子总筹码 [100,500]
        );
        $return84 = array(
            "ren"=>$ren
        );
        // 加入房间 发送房间信息给自己
        sendToOne(723, $return23, $client_id);
        sendToOne(775, getOrder($this->GameNum), $client_id);
        sendToAll(784, $return84, $this->PeopleLines);
    }
    
    
    public function startGame(){
        $this->timeID = Timer::add($this->timeJ, function(){
            echo $this->time."\n";
            echo $this->OperationTime."\n";
            echo $this->homeType."\n";
            if ($this->homeType == 1){// 抢庄时间
                echo "下注\n";
                // 机器人开始下注
                $aiPlay = getBjlAiState();
                if ($aiPlay && $this->time%3 == 0 && $this->OperationTime > 1){
                    if ($this->time%5 == 0){
                        $num = rand(1,$this->AiCount);
                        for ($i=0;$i<$num;$i++){
                            $this->AiCheXiao();
                        }
                    }
                    echo "机器人下注\n";
                    $num = rand(1,$this->AiCount);
                    for ($i=0;$i<$num;$i++){
                        $this->AiBet();
                    }
                }
                // 下注时间到
                if ($this->time == $this->xiazhutime){
                    echo "开始生成点数进入\n";
                    // 生成点数
                    $this->CreateDian();
                    $this->OperationTime = $this->jisuanjieguotime;
                    $this->homeType = 2;
                    $this->time = 0;
                }
            }elseif ($this->homeType == 2){
                echo "计算结果\n";
                if ($this->time == $this->jisuanjieguotime){
                    // 添加订单
                    $this->setOrderSendResult();
                    $this->OperationTime = $this->jiesuantime;
                    $this->homeType = 3;
                    $this->time = 0;
                }
            }elseif ($this->homeType == 3){
                echo "结算\n";
                if ($this->time == $this->jiesuantime){
                    // 还原游戏属性
                    $this->AiPlayMoney = array(array(),array(),array(),array(),array());
                    $this->che=array(0,0,0,0,0);
                    $this->OpenDian = array();
                    $this->OpenDX = 8;
                    $this->PeoplePlayMoney = array(array(),array(),array(),array(),array());
//                     $this->ObArray = getBjlAiList();
                    foreach ($this->PeopleLines as $k => $v){
                        if (!isOnLine($v)){
                            array_diff($this->PeopleLines, [$v]);
                        }
                    }
                    
                    // 获取游戏开牌概率
                    $gl = getBjlGl();
                    foreach ($gl as $k => $v){
                        if ($v['conkey'] == 'glx'){
                            $this->Glx = $v['values'];
                        }elseif ($v['conkey'] == 'glh'){
                            $this->Glh = $v['values'];
                        }elseif ($v['conkey'] == 'glz'){
                            $this->Glz = $v['values'];
                        }elseif ($v['conkey'] == 'glxd'){
                            $this->Glxd = $v['values'];
                        }elseif ($v['conkey'] == 'glzd'){
                            $this->Glzd = $v['values'];
                        }
                    }
                    $this->AiCount = getAiCount();
                    $this->OperationTime = $this->xiazhutime;
                    $this->homeType = 1;
                    $this->time = 0;
                }
            }
            if ($this->time == 0){
                sendToAll(760, ['miao'=>$this->OperationTime,'t'=>$this->homeType], $this->PeopleLines);
            }
            $this->time += $this->timeJ;
            $this->OperationTime -= $this->timeJ;
        });
    }
    
    /**
     * 生成点
     */
    private function CreateDian(){
        echo "生成比赛结果\n";
        $num = $this->GameNum; // 期数
        $insert = array(
            "home_id"=>1,
            "num"=>$num,
            "add_time"=>time()
        );
        $dian = rand(1,1000); // 计算概率
        if ($dian <= $this->Glx){// 开闲家
            $win = 0;
        }elseif ($dian > $this->Glx && $dian <= $this->Glx+$this->Glz){ // 开和
            $win = 4;
        }elseif ($dian > $this->Glx+$this->Glz && $dian <= $this->Glx+$this->Glh+$this->Glz){ // 开庄
            $win = 2;
        }
        if ($dian <= $this->Glxd){
            $dgl = 1;
        }elseif ($dian > $this->Glxd && $dian <= $this->Glxd+$this->Glzd){
            $dgl = 3;
        }else{
            $dgl = 0;
        }
        $kill = getBjlGameKill();
        if ($kill && $win!=2){
			//$hMoney=array_sum($this->PeoplePlayMoney[2])-$this->che[2];
            $zMoney = array_sum($this->PeoplePlayMoney[4])-$this->che[4];
            $xMoney = array_sum($this->PeoplePlayMoney[0])-$this->che[0];
			$arr=array(0=>$xMoney,4=>$zMoney);
          logt("------------1--------------");
          logt($this->PeoplePlayMoney[0]);
          logt($this->PeoplePlayMoney[1]);
          logt($this->PeoplePlayMoney[2]);
          logt($this->PeoplePlayMoney[3]);
           logt($this->PeoplePlayMoney[4]);
          logt("--------------2------------");
          logt($arr);
         
            if ($zMoney >20 || $xMoney>20){
				$rt=min($arr);
				$tt=array_keys($arr,$rt);
                $win=$tt[0];
            }
        }
        $this->OpenDui = $dgl;
        $winDian = rand(1,9);
        echo "生成到赢家=============={$win}\n";
        echo "出对的概率1111=============={$this->OpenDui}\n";
        $result = $this->getCards($winDian,$win,$dgl);
        echo "出对的概率2222=============={$result['dgl']}\n";
        $this->OpenDui = $result['dgl'];
        echo "最终结果牌=========\n";
        dump($result);
        // 扣除牌池里面的牌
        if ($this->CardCount > array_sum($result['count'])){
            $this->CardCount -= array_sum($result['count']);
        }elseif ($this->CardCount < array_sum($result['count'])){
            $this->CardCount = 416-(array_sum($result['count'])-$this->CardCount);
            $this->GameNum ++;
            $sql = "UPDATE `app_config` SET `values`=`values`+1 WHERE id=2";
            db()->query($sql);
        }elseif ($this->CardCount < array_sum($result['count'])){
            $this->CardCount = 416;
            $this->GameNum ++;
            $sql = "UPDATE `app_config` SET `values`=`values`+1 WHERE id=2";
            db()->query($sql);
        }
        
        $this->OpenDian = $result;
        // 是否手动开点
//         $setdian = RedisPackage::hGet("BjlSetDian",$num);
//         if ($setdian){
//             $insert['dian']=$setdian;
//         }else {
            $insert['dian']=$win;
//         }
        $insert['is_double'] = $this->OpenDui;
        $this->OpenDX = $insert['dian'];
        echo "插入数据=====\n";
        db()->insert("app_dian")->cols($insert)->query();
    }
    
    
    private function getCards($winDian,$winKey,$dgl){
        $loopCount = 0;
        while (true){
            echo "循环次数===".$loopCount."\n";
            // 获取所有牌型 打乱顺序 随机取出两组牌
            $cards = $this->AllCards;
            shuffle($cards);
            $return = array();
            for ($i=0; $i<2; $i++){
                $card = array_slice($cards, $i*5,2);
                $sum = 0;
                foreach ($card as $k => $v){
                    $sum += (intval($v)>10)?0:intval($v);
                }
                $return[$i]['card'] = $card; // 牌
                $return[$i]['sum'] = $sum%10; // 总和
            }
            $XianJiaPai = $return[0]['card']; // 闲家牌
            $XianJiaDian = $return[0]['sum']; // 闲家点数
            $ZhuangJiaPai = $return[1]['card']; // 庄家牌
            $ZhuangJiaDian = $return[1]['sum']; // 庄家点
            if ($loopCount > 10){
                $res = RedisPackage::hGet("BjlCards", $winKey);
                if ($res){
                    $results = $res[array_rand($res)];
                    if (count($res) > 100){
                        array_shift($res);
                        RedisPackage::hSet("BjlCards", $winKey, $res);
                    }
                    break;
                }
            }else {
                // 补牌逻辑
                if ($winKey == 2){
                    $results = GetHeCard($XianJiaPai, $XianJiaDian, $ZhuangJiaPai, $ZhuangJiaDian);
                }else {
                    $results = newCard($XianJiaPai, $XianJiaDian, $ZhuangJiaPai, $ZhuangJiaDian);
                }
                $row = RedisPackage::hGet("BjlCards", $results['win']);
                if ($row){
                    array_push($row, $results);
                    if (count($row) > 100){
                        array_shift($row);
                    }
                }else {
                    $row = [$results];
                }
                RedisPackage::hSet("BjlCards", $results['win'], $row);
                if ($results['win'] == $winKey){
                    break;
                }
            }
            $loopCount ++;
        };
        echo "===========进入出对判断===========\n";
        dump($results);
        $XianJiaPai = $results['card'][0]; // 闲家牌
        $XianJiaDian = $results['sum'][0]; // 闲家点数
        $ZhuangJiaPai = $results['card'][1]; // 庄家牌
        $ZhuangJiaDian = $results['sum'][1]; // 庄家点
        $result = getDuiCard($XianJiaPai, $XianJiaDian, $ZhuangJiaPai, $ZhuangJiaDian, $dgl);
        return $result;
    }
    
    /**
     * 插入订单表数据 发送最终结果
     */
    private function setOrderSendResult(){
        $num = $this->GameNum;
        if ($this->PeopleCount > 0){
//             $yong = db()->select("`values`")->from('app_config')->where("id=3")->single();
            foreach ($this->PeopleObj as $k => $People){
                $isWin = 1; // 1未下注 2赢 3输 4不输不赢
                $WinMoney = 0;  // 赢的钱
                $LoseMoney = 0; // 输的钱
                if (get_sum($People->PlayMoney) > 0){
                    // 分佣
                    RakeBack($People->id, get_sum($People->PlayMoney));
                    foreach ($People->PlayMoney as $key => $value){
                        $pei = $this->Pei[$key];
                        if ($this->OpenDX == $key){
                            if ($key == 4 && $this->OpenDian['sum'][1] == 6) $pei = 0.5;
                            $WinMoney += array_sum($value)+(array_sum($value)*$pei);
                        }elseif ($this->OpenDui != 0 && $this->OpenDui == $key){
                            $WinMoney += array_sum($value)+(array_sum($value)*$pei);
                        }else {
                            $LoseMoney += array_sum($value);
                        }
                    }
                    $People->money += $WinMoney;
                    if ($WinMoney > $LoseMoney){
                        $type = 1;
                        $isWin = 2;
                    }elseif ($WinMoney < $LoseMoney){
                        $type = 0;
                        $isWin = 3;
                    }elseif ($WinMoney == $LoseMoney){
                        $type = 2;
                        $isWin = 4;
                    }
                    $insert = array(
                        "home_id" => 1,
                        "user_id" => $People->id,
                        "add_time"=> time(),
                        "num"     => $num,
                        "money"   => get_sum($People->PlayMoney),
                        "win_money"=> $WinMoney-$LoseMoney,
                        "dian"    => $this->OpenDX,
                        "is_double"=>$this->OpenDui,
                        "is_winning"=> $type,
                        "order_type"=> 0
                    );
                    db()->insert("app_order")->cols($insert)->query();
                    // 修改数据库金额
                    db()->update('app_users')->cols(array('user_money'=>$People->money))->where("id={$People->id}")->query();
                }
                $send = array(
                    "iswin"=>$isWin, // 1未下注 2赢 3输 4不输不赢
                    "dian"=>$this->OpenDian['card'], // 本局开的点 1,2,3
                    "result"=>$this->OpenDX,
                    "is_double"=>$this->OpenDui,
                    "money"=>$WinMoney, // 输赢的钱
                    "yue"=>$People->money // 余额
                );
                sendToOne(782, $send, $k);
                $People->PlayMoney = array(array(),array(),array(),array(),array());
                $People->PlayState = array();
            }
        }
    }
    
    
    /**
     * 申请上庄
     * @param unknown $client_id
     * @param unknown $data
     */
    public function robZhuang($client_id,$data){
        if ($this->homeType > 1){
            // 过了抢庄时间
            sendToOne(2, ["errorCode"=>2,"content"=>"超出抢庄时间!"], $client_id);
        }else {
            $userInfo = $this->PeopleObj[$client_id];
            if($data['money'] < 200000 || $data['money'] > 2000000){
                sendToOne(2, ["errorCode"=>2,"content"=>"抢庄金额必须在（20w~200w）之间！"], $client_id);
                return ;
            }else {
                if ($userInfo->money < $data['money']){
                    // 钱不够
                    sendToOne(2, ["errorCode"=>2,"content"=>"金额不足！"], $client_id);
                }else {
                    if (isset($this->homeRoleList[$client_id])){
                        sendToOne(2, ["errorCode"=>2,"content"=>"您已经申请过庄家了！"], $client_id);
                    }else {
                        $rolelist['id'] = $userInfo->id;
                        $rolelist['nickname'] = $userInfo->name;
                        $rolelist['user_type'] = $userInfo->type;
                        $rolelist['user_money'] = $data['money'];
                        $this->homeRoleList[$client_id] = $rolelist;
                        // 申请上庄成功
                        sendToOne(730, ["content"=>"上庄申请成功！"], $client_id);
                    }
                }
            }
        }
    }
    
    /**
     * 玩家下注
     * @param unknown $client_id
     * @param unknown $data
     */
    public function bet($client_id,$data){
        if ($this->homeType != 1){
            send(2, ["errorCode"=>2,"content"=>"不到下注时间！"], $client_id);
            return ;
        }else {
            $dian = $data['dian'];
            $money = $data['money'];
            $userInfo = $this->PeopleObj[$client_id];
            if ($userInfo->money < $money){
                sendToOne(2, ["errorCode"=>2,"content"=>"金额不足！"], $client_id);
                return ;
            }else {
                $userInfo->money -= $money;
                // 个人下注记录
                array_unshift($userInfo->PlayState, array('dian' => $dian,'money' => $money));
                // 个人下注统计
                array_push($userInfo->PlayMoney[$dian], $money);
                // 房间池子
                array_push($this->PeoplePlayMoney[$dian],$money);
                // 发送下注信息
                $return81 = array(
                    'dian'  => $dian,
                    'money' => $money
                );
                sendToAll(781, $return81, $this->PeopleLines);
                // 发送个人信息
                $send = array(
                    "money" => $userInfo->money,
                );
                sendToOne(731, $send, $client_id);
            }
        }
    }
    
    /**
     * 用户撤销筹码
     * @param unknown $client_id
     * @param unknown $data
     */
    public function CheXiao($client_id,$data){
        if ($this->homeType != 1){
            send(2, ["errorCode"=>2,"content"=>"超出下注阶段，无法撤销。。。"], $client_id);
            return ;
        }else {
            $userObj = $this->PeopleObj[$client_id];
            $shift = $userObj->PlayMoney;
            $money = get_sum($shift);
            if ($money > 0){
               logt("----------3------------");
                   logt($userObj->PlayMoney[0]);
              logt($userObj->PlayMoney[1]);
              logt($userObj->PlayMoney[2]);
              logt($userObj->PlayMoney[3]);
              logt($userObj->PlayMoney[4]);
                   logt("----------4------------");
                $this->che[0]=$this->che[0]+array_sum($userObj->PlayMoney[0]);
				 $this->che[1]=$this->che[1]+array_sum($userObj->PlayMoney[1]);
				 $this->che[2]=$this->che[2]+array_sum($userObj->PlayMoney[2]);
				 $this->che[3]=$this->che[3]+array_sum($userObj->PlayMoney[3]);
				 $this->che[4]=$this->che[3]+array_sum($userObj->PlayMoney[4]);
                   logt($this->che);
                echo "下注总额".$money."\n";
                $userObj->money += $money;
                $userObj->PlayMoney = array(array(),array(),array(),array(),array());
                $userObj->PlayState = array();
                sendToOne(730, $shift, $client_id);
                // 发送个人信息
                $send = array(
                    "money" => $userObj->money,
                );
                sendToOne(731, $send, $client_id);
            }else {
                send(2, ["errorCode"=>2,"content"=>"您还没有下注。。。"], $client_id);
                return ;
            }
        }
    }
    
    /**
     * 机器人下注
     */
    public function AiBet(){
        $array = array(5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,20,20,20,20,20,20,20,20,20,20,50,50,50,50,50,50,50,100,100,100,100,100,500,500,500,500,1000,1000,1000,1000);
        $dianArray = array(0,0,0,0,0,0,0,0,0,0,1,2,3,4,4,4,4,4,4,4,4,4,4);
        $dian = $dianArray[array_rand($dianArray)];
        $money = $array[array_rand($array)];
        array_push($this->AiPlayMoney[$dian], $money);
        // 发送下注信息
        $return81 = array(
            'dian'  => $dian,
            'money' => $money
        );
        sendToAll(781, $return81, $this->PeopleLines);
    }
    
    /**
     * 随机撤销
     */
    public function AiCheXiao(){
        $array = array(10,20,50,100,500,1000);
        $dianArray = array(0,0,0,0,0,0,0,0,0,0,1,2,3,4,4,4,4,4,4,4,4,4,4);
        $dian = $dianArray[array_rand($dianArray)];
        $money = $array[array_rand($array)];
        $return74 = array(
            'dian'  => $dian,
            'money' => $money
        );
        sendToAll(774, $return74, $this->PeopleLines);
    }
    
    
    /**
     * 发喇叭
     * @param unknown $client_id
     * @param unknown $data
     */
    public function notice($client_id,$data){
        $la = $this->PeopleObj[$client_id];
        if ($la->money < 50){
            sendToOne(2, array("errorCode"=>2,"content"=>"余额不足！请充值后喊话！"), $client_id);
            return ;
        }
        if (!trim($data['text']) || $data['text'] == "undefined"){
            sendToOne(2, array("errorCode"=>2,"content"=>"您输入的内容为空或格式错误！"), $client_id);
            return ;
        }
        $return83 = array(
            "text"=>$la->name.":".$data['text']
        );
        //发送给全体
        sendToAll(783, $return83, $this->PeopleLines);
        $la->money -= 50;
        sendToOne(734, array("money"=>$la->money), $client_id);
        return ;
    }
    
    /**
     * 退出房间
     * @param unknown $client_id
     * @param unknown $data
     */
    public function outhome($client_id,$data){
        $userObj = $this->PeopleObj[$client_id];
        if ($this->homeRole && $this->homeRole['id'] == $userObj->id || array_sum($userObj->PlayMoney) != 0 || $userObj->PlayState != 0){
            sendToOne(2, array("errorCode"=>2,"content"=>"请耐心等待游戏结束后再离开！"), $client_id);
            return ;
        }else {
            $uid = $userObj->id;
            unset($userObj);
            unset($this->PeopleObj[$client_id]);
            $this->PeopleLines = array_diff($this->PeopleLines, [$client_id]);
            $this->PeopleIds = array_diff($this->PeopleIds, [$uid]);
            $this->PeopleCount --;
            dump($this->PeopleIds);
            dump($this->PeopleLines);
            $ren = $this->PeopleCount + rand(100,180);
            sendToAll(784, ["ren"=>$ren], $this->PeopleLines);
            sendToOne(737, ["list"=>"退出房间成功"], $client_id);
        }
    }
}

