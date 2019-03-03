<?php
//=================================================================
//公共方法所有地方可以使用
//相当于TP里面的common.php,在启动的时候自动加载
//作者：NNbaba
//2018-03-03
//================================================================
use \GatewayWorker\Lib\Gateway;
use MyFile\Redis\RedisPackage;
use Applications\MyFile\Actions\Data;
use Applications\MyFile\Home\BjlHome;
use Applications\MyFile\HomeArray\BjlHomeArray;
use Workerman\Lib\Timer;

/**
 * 格式化输出
 * @param unknown $str
 */
function dump($str){
    echo "<pre>";
    var_dump($str);
}
/**
 * db类 数据库操作
 * @return unknown
 */
function db(){
    return \Config::getDb();
}

/**
 * 计算er维数组总和
 * @param unknown $array
 * @return number
 */
function get_sum($array) {
    $num = 0;
    foreach($array as $k => $v) {
        if(is_array($v)) {
            $num += array_sum($v);
        }
    }
    return $num;
}

/**
 * 获取当前期号
 * @return unknown
 */
function getGameSum(){
    $sum = $BjlAiState = db()->select("`values`")->from('app_config')->where("id=2")->single();
    return $sum;
}

/**
 * 获取当前期号
 * @return unknown
 */
function getAiCount(){
    if (RedisPackage::get("BjlAiCount")){
        return RedisPackage::get("BjlAiCount");
    }else {
        $sum = $BjlAiState = db()->select("`values`")->from('app_config')->where("id=27")->single();
        RedisPackage::set("BjlAiCount", $sum);
        return $sum;
    }
}

/**
 * 获取机器人状态
 * @return boolean
 */
function getBjlAiState(){
    $BjlAiState = RedisPackage::get("BjlAiState");
    if (!$BjlAiState){
        $BjlAiState = db()->select("`values`")->from('app_config')->where("id=9")->single();
    }
    if ($BjlAiState == 1){
        return true;
    }else {
        return false;
    }
}
function logt($word='') {
	$fp = fopen("log.txt","a");
	flock($fp, LOCK_EX) ;
	if(is_array($word)){
		foreach($word as $k=>$v){
			fwrite($fp,$k.">>>".$v."\n");
		}
	}else{
	fwrite($fp,"执行日期：".strftime("%Y%m%d%H%M%S",time())."\n".$word."\n");
	}
	flock($fp, LOCK_UN);
	fclose($fp);
}

/**
 * 获取是否开启杀大赔小模式
 * @return boolean
 */
function getBjlGameKill(){
    $BjlGameKill = RedisPackage::get("BjlGameKill");
    if (!$BjlGameKill){
        $BjlGameKill = db()->select("`values`")->from('app_config')->where("id=11")->single();
    }
    if ($BjlGameKill == 1){
        return true;
    }else {
        return false;
    }
}

/**
 * 获取排行榜
 * @return unknown
 */
function getRanking($uid=0){
    $times = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    $timed = mktime(0, 0, 0, date('m'), date('d') + 1, date('Y')) - 1;
    if ($uid == 0){
        $YongSql = "SELECT user_id as id,sum(money) as moneySum FROM `app_rebate` WHERE `status`=1 and add_time>=" . $times . " and add_time<=" . $timed." group by user_id ORDER BY moneySum desc LIMIT 10";
    }else {
        $YongSql = "SELECT sum(money) as moneySum FROM `app_rebate` WHERE `status`=1 and add_time>=" . $times . " and add_time<=" . $timed." and user_id = ".$uid;
    }
    $date = db()->query($YongSql);
    return $date;
}


/**
 * 用户返佣
 * @param unknown $id
 * @param unknown $money
 */
function RakeBack($id,$money){
    // ,`six_parent_id` as six,`seven_parent_id` as seven,`eight_parent_id` as eight,`nine_parent_id` as nine,`ten_parent_id` as ten
    $user = db()
    ->select("`first_parent_id` as first,`second_parent_id` as second,`three_parent_id` as three,`four_parent_id` as four,`five_parent_id` as five,`six_parent_id` as six,`seven_parent_id` as seven,`eight_parent_id` as eight,`nine_parent_id` as nine,`ten_parent_id` as ten")
    ->from("app_users")
    ->where("id={$id}")
    ->row();
    $rebate = getRake();
    foreach ($user as $k => $v){
        if ($v != 0){
            $yMoney = $money*$rebate[$k]/100;
            $sql = "UPDATE `app_users` SET `com_money`=`com_money`+{$yMoney} WHERE id={$v}";
            db()->query($sql);
            $insert = array(
                "user_id"=>$v,
                "money"=>$yMoney,
                "buy_id"=>$id,
                "add_time" => time(),
                'status'   => 1
            );
            db()->insert("app_rebate")->cols($insert)->query();
        }
    }
}

/**
 * 获取返佣比例
 * @return unknown[]
 */
function getRake(){
    $rebate = db()->select("`conkey`,`values`")->from("app_config")->where("`con_type`='rebate'")->query();
    $return = array();
    foreach ($rebate as $k => $v){
        $return[$v['conkey']] = $v['values'];
    }
    return $return;
}

/**
 * 获取开奖记录
 * @param unknown $num
 * @return unknown
 */
function getOrder($num){
    $sql = "SELECT `dian`,`is_double` FROM `app_dian` WHERE num={$num} ORDER BY add_time desc LIMIT 85";
    $order = db()->query($sql);
    return $order;
}

/**
 * 获取上家id
 * @param unknown $parnet_id
 * @return unknown
 */
function getParentId($parnet_id){
    $uus = db()
    ->select("`first_parent_id`,`second_parent_id`,`three_parent_id`,`four_parent_id`,`five_parent_id`,`six_parent_id`,`seven_parent_id`,`eight_parent_id`,`nine_parent_id`")
    ->from("app_users")
    ->where("id={$parnet_id}")
    ->row();
    //,`five_parent_id`,`six_parent_id`,`seven_parent_id`,`eight_parent_id`,`nine_parent_id`
    return $uus;
}

/**
 * 获取百家乐的开点概率
 * @return mixed|number
 */
function getBjlGl(){
    if (RedisPackage::get("BjlGameGl")){
        return json_decode(RedisPackage::get("BjlGameGl"),true);
    }else {
        $sql = "SELECT `conkey`,`values` FROM `app_config` WHERE id IN (20,21,22,23,24)";
        $BjlGameGl = db()->query($sql);
        foreach ($BjlGameGl as $k => $v){
            $BjlGameGl[$k]['values'] *= 10;
        }
        RedisPackage::set("BjlGameGl", $BjlGameGl);
        return $BjlGameGl;
    }
}



function getBjlRedis($key){
    if ($key == "BjlGameType"){
        if (RedisPackage::get("BjlGameType")){
            return RedisPackage::get("BjlGameType");
        }else {
            $BjlGameType = db()->select("`values`")->from("app_config")->where("id=11")->single();
            RedisPackage::set("BjlGameType", $BjlGameType);
            return $BjlGameType;
        }
    }elseif ($key == "BjlMaxPei"){
        if (RedisPackage::get("BjlMaxPei")){
            return RedisPackage::get("BjlMaxPei");
        }else {
            $BjlMaxPei = db()->select("`values`")->from("app_config")->where("id=4")->single();
            RedisPackage::set("BjlMaxPei", $BjlMaxPei);
            return $BjlMaxPei;
        }
    }elseif ($key == "BjlNowPei"){
        if (RedisPackage::get("BjlNowPei")){
            return RedisPackage::get("BjlNowPei");
        }else {
            $BjlNowPei = db()->select("`values`")->from("app_config")->where("id=5")->single();
            RedisPackage::set("BjlNowPei", $BjlNowPei);
            return $BjlNowPei;
        }
    }
}

/**
 * 做牌
 */
function MakeCard($card,$d,$winDian,$type,$condition){
    $xiaoshu = array(0.1,0.2,0.3,0.4);
    if ($type == 'h'){
        while (true){
            $hCard = rand(1,13);
            $hSum = ($hCard >= 10) ? 0 : $hCard;
            if ($card[0] >= 10){
                $card0 = 0;
            }else {
                $card0 = intval($card[0]);
            }
            if ($condition == '='){
                if (($card0+$hSum)%10 == $winDian){
                    if (intval($card[0]) != $hCard){
                        $card[1] = $hCard+$xiaoshu[array_rand($xiaoshu)];
                        $d = ($card0+$hSum)%10;
                        break;
                    }else {
                        $card[0] = rand(1,13)+$xiaoshu[array_rand($xiaoshu)];
                    }
                }
            }elseif ($condition == '<'){
                if (($card0+$hSum)%10 < $winDian){
                    if (intval($card[0]) != $hCard){
                        $card[1] = $hCard+$xiaoshu[array_rand($xiaoshu)];
                        $d = ($card0+$hSum)%10;
                        break;
                    }else {
                        $card[0] = rand(1,13)+$xiaoshu[array_rand($xiaoshu)];
                    }
                }
            }
        }
    }elseif ($type == 'b') {
        while (true){
            $hCard = rand(1,13);
            $hSum = ($hCard >= 10) ? 0 : $hCard;
            if ($condition == '='){
                if (($d+$hSum)%10 == $winDian){
                    $card[2] = $hCard+$xiaoshu[array_rand($xiaoshu)];
                    $d = ($d+$hSum)%10;
                    break;
                }
            }elseif ($condition == '<'){
                if (($d+$hSum)%10 < $winDian){
                    $card[2] = $hCard+$xiaoshu[array_rand($xiaoshu)];
                    $d = ($d+$hSum)%10;
                    break;
                }
            }
        }
    }
    $return = ['card'=>$card,'d'=>$d];
    return $return;
}

/**
 * 做牌(庄家闲家牌)
 * @param unknown $x
 * @param unknown $xd
 * @param unknown $z
 * @param unknown $zd
 * @return unknown
 */
function newCard($x,$xd,$z,$zd){
    $xs = array(0.1,0.2,0.3,0.4);
    $return = array();
    if ($xd < 8 && $zd < 8){
        if ($xd < 6){
            $bCard = rand(1,13);
            $bSum = ($bCard >= 10) ? 0 : $bCard;
            $x[2] = $bCard+$xs[array_rand($xs)];
            $xd = ($bSum + $xd)%10;
        }
        if (isset($x[2])){
            if ($zd < 3){
                $bCard = rand(1,13);
                $bSum = ($bCard >= 10) ? 0 : $bCard;
                $z[2] = $bCard+$xs[array_rand($xs)];
                $zd = ($bSum + $zd)%10;
            }elseif ($zd == 3 && intval($x[2]) != 8) {
                $bCard = rand(1,13);
                $bSum = ($bCard >= 10) ? 0 : $bCard;
                $z[2] = $bCard+$xs[array_rand($xs)];
                $zd = ($bSum + $zd)%10;
            }elseif ($zd == 4 && in_array(intval($x[2]), [2,3,4,5,6,7])) {
                $bCard = rand(1,13);
                $bSum = ($bCard >= 10) ? 0 : $bCard;
                $z[2] = $bCard+$xs[array_rand($xs)];
                $zd = ($bSum + $zd)%10;
            }elseif ($zd == 5 && in_array(intval($x[2]), [4,5,6,7])) {
                $bCard = rand(1,13);
                $bSum = ($bCard >= 10) ? 0 : $bCard;
                $z[2] = $bCard+$xs[array_rand($xs)];
                $zd = ($bSum + $zd)%10;
            }elseif ($zd == 6 && in_array(intval($x[2]), [6,7])) {
                $bCard = rand(1,13);
                $bSum = ($bCard >= 10) ? 0 : $bCard;
                $z[2] = $bCard+$xs[array_rand($xs)];
                $zd = ($bSum + $zd)%10;
            }
        }else {
            if ($zd < 6){
                $bCard = rand(1,13);
                $bSum = ($bCard >= 10) ? 0 : $bCard;
                $z[2] = $bCard+$xs[array_rand($xs)];
                $zd = ($bSum + $zd)%10;
            }
        }
    }
    if ($zd > $xd){
        $return['win'] = 4;
    }elseif($zd < $xd) {
        $return['win'] = 0;
    }elseif ($zd == $xd){
        $return['win'] = 2;
    }
    $return['card'][0] = $x;
    $return['card'][1] = $z;
    $return['sum'][0] = $xd;
    $return['sum'][1] = $zd;
    return $return;
}

/**
 * 获取和牌
 * @param unknown $x
 * @param unknown $xd
 * @param unknown $z
 * @param unknown $zd
 * @return unknown|number
 */
function GetHeCard($x,$xd,$z,$zd){
    $xs = array(0.1,0.2,0.3,0.4);
    if ($xd < 8){
        if ($xd < 6){
            $bCard = rand(1,13);
            $bSum = ($bCard >= 10) ? 0 : $bCard;
            $x[2] = $bCard+$xs[array_rand($xs)];
            $xd = ($bSum + $xd)%10;
        }
    }
    $bp = MakeCard($z, $zd, $xd, "h", "=");
    $z = $bp['card'];
    $zd = $bp['d'];
    if (isset($x[2])){
        if ($zd < 3){
            $bp = MakeCard($z, $zd, $xd, "b", "=");
            $z = $bp['card'];
            $zd = $bp['d'];
        }elseif ($zd == 3 && intval($x[2]) != 8) {
            $bp = MakeCard($z, $zd, $xd, "b", "=");
            $z = $bp['card'];
            $zd = $bp['d'];
        }elseif ($zd == 4 && in_array(intval($x[2]), [2,3,4,5,6,7])) {
            $bp = MakeCard($z, $zd, $xd, "b", "=");
            $z = $bp['card'];
            $zd = $bp['d'];
        }elseif ($zd == 5 && in_array(intval($x[2]), [4,5,6,7])) {
            $bp = MakeCard($z, $zd, $xd, "b", "=");
            $z = $bp['card'];
            $zd = $bp['d'];
        }elseif ($zd == 6 && in_array(intval($x[2]), [6,7])) {
            $bp = MakeCard($z, $zd, $xd, "b", "=");
            $z = $bp['card'];
            $zd = $bp['d'];
        }
    }else {
        if ($zd < 6){
            $bp = MakeCard($z, $zd, $xd, "b", "=");
            $z = $bp['card'];
            $zd = $bp['d'];
        }
    }
    if ($zd > $xd){
        $return['win'] = 4;
    }elseif($zd < $xd) {
        $return['win'] = 0;
    }elseif ($zd == $xd){
        $return['win'] = 2;
    }
    $return['card'][0] = $x;
    $return['card'][1] = $z;
    $return['sum'][0] = $xd;
    $return['sum'][1] = $zd;
    return $return;
}

/**
 * 获取对牌
 * @param unknown $x
 * @param unknown $xd
 * @param unknown $z
 * @param unknown $zd
 * @param unknown $dgl
 * @return unknown
 */
function getDuiCard($x,$xd,$z,$zd,$dgl){
    $x2 = (isset($x[2]))?$x[2]:0;
    $z2 = (isset($z[2]))?$z[2]:0;
    $xs = array(0.1,0.2,0.3,0.4);
    $x0 = intval($x[0]);
    $x0d = ($x0>=10)?0:$x0;
    $x1 = intval($x[1]);
    $x1d = ($x1>=10)?0:$x1;
    $z0 = intval($z[0]);
    $z0d = ($z0>=10)?0:$z0;
    $z1 = intval($z[1]);
    $z1d = ($z1>=10)?0:$z1;
    if ($dgl == 0){
        if ($x0 == $x1){
            $row = MakeCard($x, $xd, ($x0d+$x1d)%10, "h", "=");
            $x = $row['card'];
        }
        if ($z0 == $z1){
            $row = MakeCard($z, $zd, ($z0d+$z1d)%10, "h", "=");
            $z = $row['card'];
        }
    }elseif ($dgl == 1){
        if ($x0 != $x1 && (($x0d+$x1d)%10)%2 == 0 && ($x0d+$x1d)%10 != 1){ // 换成对牌
            while (true){
                $hd = rand(1,13);
                $hds = ($hd>=10)?0:$hd;
                if (($hds*2)%10 == ($x0d+$x1d)%10){
                    $x[0] = $hd+$xs[array_rand($xs)];
                    $x[1] = $hd+$xs[array_rand($xs)];
                    break;
                }
            }
        }else {
            if ($x0 == $x1){
                $row = MakeCard($x, $xd, ($x0d+$x1d)%10, "h", "=");
                $x = $row['card'];
            }
            $dgl = 0;
        }
        if ($z0 == $z1){
            $row = MakeCard($z, $zd, ($z0d+$z1d)%10, "h", "=");
            $z = $row['card'];
        }
    }elseif ($dgl == 3){
        if ($z0 != $z1 && (($z0d+$z1d)%10)%2 == 0 && ($z0d+$z1d)%10 != 1){ // 换成对牌
            while (true){
                $hd = rand(1,13);
                $hds = ($hd>=10)?0:$hd;
                if (($hds*2)%10 == ($z0d+$z1d)%10){
                    $z[0] = $hd+$xs[array_rand($xs)];
                    $z[1] = $hd+$xs[array_rand($xs)];
                    break;
                }
            }
        }else {
            if ($z0 == $z1){
                $row = MakeCard($z, $zd, ($z0d+$z1d)%10, "h", "=");
                $z = $row['card'];
            }
            $dgl = 0;
        }
        if ($x0 == $x1){
            $row = MakeCard($x, $xd, ($x0d+$x1d)%10, "h", "=");
            $x = $row['card'];
        }
    }
    if ($x2 != 0) $x[2] = $x2;
    if ($z2 != 0) $z[2] = $z2;
    $return['count'][0] = count($x);
    $return['count'][1] = count($z);
    $return['card'][0] = $x;
    $return['card'][1] = $z;
    $return['sum'][0] = $xd;
    $return['sum'][1] = $zd;
    $return['dgl'] = $dgl;
    return $return;
}

/**
 * 生成点
 * @return array
 */
function getdian(){
    $array = array();
    for($i = 1;$i<=6;$i++){
        for($j = 1;$j<=6;$j++){
            for($k = 1;$k<=6;$k++){
                $a = $i+$j+$k;
                if($i==$j&&$j==$k){
                    continue;
                }
                $b = $i."-".$j."-".$k;
                if($a>10){
                    array_push($array, $b);
                }else{
                    array_unshift($array, $b);
                }
            }
        }
    }
    return $array;
}

/**
 * 获取筛子机器人集合 二维数组 id+nickname
 * @return mixed
 */
function getBjlAiList($num="all"){
    $aiList = RedisPackage::get("BjlAiList");
    if (!$aiList){
        $aiList = db()->select("`id`,`nickname`,`user_type`")->from('app_users')->where("`user_type`!=0")->query();
        RedisPackage::set("BjlAiList", $aiList);
    }else {
        $aiList = json_decode($aiList,true);
    }
    shuffle($aiList);
    if ($num == "all") {
        $return = array(7=>array(),8=>array());
        foreach ($aiList as $k => $v){
            if ($v['user_type'] == 1){
                array_push($return[8], $v);
            }elseif ($v['user_type'] == 2) {
                array_push($return[7], $v);
            }
        }
    }elseif ($num == "zhuang"){
        $return = $aiList;
    }else{
        $return = array();
        for ($i=0; $i<$num; $i++){
            $return[] = array_shift($aiList);
        }
    }
    return $return;
}

/**
 * 二维数组排序
 * @param unknown $arrays
 * @param unknown $sort_key
 * @param string $sort_order
 * @param string $sort_type
 * @return boolean|unknown
 */
function my_sort($arrays,$sort_key,$sort_order=SORT_ASC,$sort_type=SORT_NUMERIC ){
    if(is_array($arrays)){
        foreach ($arrays as $array){
            if(is_array($array)){
                $key_arrays[] = $array[$sort_key];
            }else{
                return false;
            }
        }
    }else{
        return false;
    }
    array_multisort($key_arrays,$sort_order,$sort_type,$arrays);
    return $arrays;
} 

/**
 * 获取随机汉字
 * @param unknown $num
 * @return string
 */
function getChar($num) 
{
    $b = '';
    for ($i=0; $i<$num; $i++) {
        $a = chr(mt_rand(0xB0,0xD0)).chr(mt_rand(0xA1, 0xF0));
        $b .= iconv('GB2312', 'UTF-8', $a);
    }
    return $b;
}

/**
 * 发送数据
 * @param 协议号 $num
 * @param 数据 $data数组
 * @param 发送给谁 $client_id
 */
function send($num,$data,$client_id){
    $datas = json_encode($data);
    $key = \Config::get("key");
    $sign = md5($num.$datas.$key);
    $array = array('action'=>$num,'data'=>$datas,'sign'=>$sign);
    $str = json_encode($array);
    sendToByte($client_id, $str);
    if($num!=0){
        echo "server:".$str."\n";
    }
    $ss = sendToByte($client_id, $str);
    Gateway::sendToClient($client_id, $ss); 
}

/**
 * 编辑数据成包头包体
 * @param unknown $client_id
 * @param unknown $str
 * @return boolean
 */
function sendToByte($client_id,$str){
    $a = strlen($str);
    if($a>0&&$a<10){
        $c = "000".$a;
    }elseif($a<100){
        $c = "00".$a;
    }elseif($a<1000){
        $c = "0".$a;
    }elseif($a<10000){
        $c = $a;
    }else{
        return false;
    }
    $str = $c.$str;
    return $str;
}


/**
 * 获取session的一个值
 * @param unknown $client_id
 * @param unknown $key
 */
function getSessionFromKey($client_id,$key){
    $session = \GatewayWorker\Lib\Gateway::getSession($client_id);
    if (isset($session[$key])){
        return $session[$key];
    }else {
        return false;
    }
}


/**
 * session中添加一个值
 * @param unknown $client_id
 * @param unknown $key
 * @param unknown $value
 */
function setSessionFromKey($client_id,$key,$value){
    $session = \GatewayWorker\Lib\Gateway::getSession($client_id);
    $session[$key] = $value;
    \GatewayWorker\Lib\Gateway::setSession($client_id, $session);
}



/**
 * 发送给其他人不带自己
 * @param 协议号 $num
 * @param 数据 $data
 * @param 不带的 $client_id
 * @param 所有的 $clinets
 */
function sendToOther($num,$data,$client_id,$clinets){
    foreach ($clinets as $c){
        if ($c != 0){
            $isOnLine = \GatewayWorker\Lib\Gateway::isOnline($c);
            if(isset($client_id) && $c != $client_id && $isOnLine){
                send($num, $data, $c);
            }
        }
    }
}

/**
 * 发送给所有在房间的人
 * @param unknown $num
 * @param unknown $data
 * @param unknown $client_id
 * @param unknown $clinets
 */
function sendToAll($num,$data,$clinets){
    foreach ($clinets as $c){
        if ($c != 0){
            $isOnLine = \GatewayWorker\Lib\Gateway::isOnline($c);
            if($isOnLine){
                send($num, $data, $c);
            }
        }
    }
}

/**
 * 分发不同的数据给不同的人
 * @param unknown $num
 * @param unknown $data
 * @param unknown $clinets
 */
function sendOnlyDataToAll($num,$data,$clinets){
    foreach ($clinets as $k => $c){
        if ($c != 0){
            $isOnLine = \GatewayWorker\Lib\Gateway::isOnline($c);
            if($isOnLine){
                send($num, $data[$k], $c);
            }
        }
    }
}

/**
 * 发送给单个人数据
 * @param unknown $num
 * @param unknown $data
 * @param unknown $client_id
 */
function sendToOne($num,$data,$client_id){
    $isOnLine = \GatewayWorker\Lib\Gateway::isOnline($client_id);
    if($isOnLine){
        send($num, $data, $client_id);
    }
}



/**
 * 判断用户id是否在线
 * @param $id
 * @return int
 */
function isUidOnline($id){
    return Gateway::isUidOnline($id);
}

/**
 * 判断连接是否在线
 * @param unknown $client_id
 * @return number
 */
function isOnLine($client_id){
    return \GatewayWorker\Lib\Gateway::isOnline($client_id);
}

/**
 * 根据Uid获取Clientid
 * @return mixed
 */
function getClientidByUid($uid){
    $arr = Gateway::getClientIdByUid($uid);
    return $arr[0];
}



function outGame($client_id){
    Data::closeClient($client_id);
}


/**
 * 游戏队列
 * @param unknown $businessWorker
 */
function OnStartTeam($businessWorker){
    RedisPackage::getInstance();
    if($businessWorker->id == 0){
        RedisPackage::del("BjlUserOnLine");
        Timer::add(1, function(){
            $s = mktime(0, 0, 0, date('m'), date('d') + 1, date('Y')) - 2;
            if($s == time()){
                // 提现次数
                RedisPackage::del("BjlTxCount");
                RedisPackage::del("BjlUserPullYong");
                RedisPackage::del("BjlUserGetReward");
                // 排行榜
                /* $data = getRanking();
                if ($data && is_array($data)){
                    foreach ($data as $k => $v){
                        if ($k == 0){
                            $sql = "UPDATE app_users SET user_money=user_money+100 WHERE id={$v['id']}";
                        }elseif ($k == 1){
                            $sql = "UPDATE app_users SET user_money=user_money+60 WHERE id={$v['id']}";
                        }elseif ($k == 2){
                            $sql = "UPDATE app_users SET user_money=user_money+30 WHERE id={$v['id']}";
                        }else{
                            $sql = "UPDATE app_users SET user_money=user_money+10 WHERE id={$v['id']}";
                        }
                        db()->query($sql);
                    }
                } */
            }
        });
        $BjlHome = new BjlHome();
        BjlHomeArray::setBjlHome($BjlHome);
    }
}

