<?php
namespace app\index\controller;
use app\index\controller\Commonse;
use think\Db;
use think\Request;
class Data extends Commonse
{   
    
    private $user;

    public function __construct()
    { // 自动加载
        parent::__construct();
    }
    
    
    /**
     * 发喇叭
     * @param unknown $client_id
     * @param unknown $data
     */
    /* public function notice(){
        if (Request::instance()->isPost()) {
            $text = input("text","","htmlspecialchars,trim");
            if (!$text){
                $this->error("输入内容有误！！！");
            }else {
                $return83 = array(
                    "text"=>$text
                );
                //发送给全体
                sendToAll(2083, $return83);
                $this->success("发送成功！！！");
            }
        }
        return $this->fetch();
    } */
    
    
    
    
    ///////////////////
    public function cz1history(){//充值记录
        $times = input('times', ''); // 开始时间
        $timed = input('timed', ''); // 结束时间
        $uid = input("uid","","intval");
        $se=input('se','');
        $status = input("status","","intval");
        if ($times > $timed) {
            $this->error('参数错误');
        }
        $whereuid = "";
        if ($uid){
            $whereuid = " r.user_id={$uid}";
        }
        $where = "";
        if ($status){
            $status = ($status==2)?0:$status;
            $where = " r.status={$status}";
        }
        if (!empty($times) && !empty($timed)) { // 查询
            // 转换为时间戳
            $times = strtotime($times); // 开始时间
            $timed = strtotime($timed) + 24 * 60 * 60;
            $where = " add_time>=" . $times . " and add_time<=" . $timed; // 结束时间为当天23点
        }elseif (!empty($times) && empty($timed)) {
            $times = strtotime($times); // 开始时间
            $where = " add_time>=" . $times; // 结束时间为当天23点
        }elseif (empty($times) && !empty($timed)) {
            $timed = strtotime($timed) + 24 * 60 * 60;
            $where = " add_time<=" . $timed; // 结束时间为当天23点
        }
        switch ($se) {
            case 6:
                { // 今天
                    $times = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                    $timed = mktime(0, 0, 0, date('m'), date('d') + 1, date('Y')) - 1;
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 1:
                { // 昨天
                    $times = mktime(0, 0, 0, date('m'), date('d') - 1, date('Y'));
        
                    $timed = mktime(0, 0, 0, date('m'), date('d'), date('Y')) - 1;
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 2:
                { // 本周
                    $times =mktime(0, 0 , 0,date("m"),date("d")-date("w")+1,date("Y"));
                    $timed=mktime(23,59,59,date("m"),date("d")-date("w")+7,date("Y"));
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 3:
                { // 上周
                    $times = mktime(0, 0, 0, date('m'), date('d') - date('w') + 1 - 7, date('Y'));
        
                    $timed = mktime(23, 59, 59, date('m'), date('d') - date('w') + 7 - 7, date('Y'));
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 4:
                { // 本月
                     
                    $times = mktime(0, 0, 0, date('m'), 1, date('Y'));
                    $timed = mktime(23, 59, 59, date('m'), date('t'), date('Y'));
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 5:
                { // 上月
                    $times =  mktime(0, 0 , 0,date("m")-1,1,date("Y"));
                    $timed = mktime(23,59,59,date("m") ,0,date("Y"));
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
        }
        $czMode=Db::name('Recharge');
        $list=$czMode->alias('r')->field("r.*,u.nickname as uname")->join("users u","u.id=r.user_id")->where($whereuid)->where($where)->order("id desc")->paginate(50);
        //充值总金额
        $czMoney=$czMode->alias('r')->join("users u","u.id=r.user_id")->where($whereuid)->where($where)->where("money>0")->sum('money');
        $ztMoney=$czMode->alias('r')->join("users u","u.id=r.user_id")->where($whereuid)->where($where)->where("money<0")->sum('money');
        if (!$czMoney) $czMoney = 0;
        if (!$ztMoney) $ztMoney = 0;
        if ($uid) $this->assign("uid",$uid);
        $this->assign("list", $list);
        $this->assign("czMoney", $czMoney);
        $this->assign("ztMoney", $ztMoney);
        $page = $list->render();
        return $this->fetch();
    }
    
    /* public function jian(){//充值记录
        $times = input('times', ''); // 开始时间
        $timed = input('timed', ''); // 结束时间
        $se=input('se','');
        
        $where = "";
        if ($times > $timed && !empty($timed)) {
            $this->error('参数错误');
        }
        if (!empty($times) && !empty($timed)) { // 查询
            // 转换为时间戳
            $times = strtotime($times); // 开始时间
            $timed = strtotime($timed) + 24 * 60 * 60;
            $where = " add_time>=" . $times . " and add_time<=" . $timed; // 结束时间为当天23点
        }elseif (!empty($times) && empty($timed)) {
            $times = strtotime($times); // 开始时间
            $where = " add_time>=" . $times; // 结束时间为当天23点
        }elseif (empty($times) && !empty($timed)) {
            $timed = strtotime($timed) + 24 * 60 * 60;
            $where = " add_time<=" . $timed; // 结束时间为当天23点
        }
        
        switch ($se) {
            case 6:
                { // 今天
                    $times = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                    $timed = mktime(0, 0, 0, date('m'), date('d') + 1, date('Y')) - 1;
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 1:
                { // 昨天
                    $times = mktime(0, 0, 0, date('m'), date('d') - 1, date('Y'));
                    
                    $timed = mktime(0, 0, 0, date('m'), date('d'), date('Y')) - 1;
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 2:
                { // 本周
                    $times =mktime(0, 0 , 0,date("m"),date("d")-date("w")+1,date("Y"));
                    $timed=mktime(23,59,59,date("m"),date("d")-date("w")+7,date("Y"));
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 3:
                { // 上周
                    $times = mktime(0, 0, 0, date('m'), date('d') - date('w') + 1 - 7, date('Y'));
                    
                    $timed = mktime(23, 59, 59, date('m'), date('d') - date('w') + 7 - 7, date('Y'));
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 4:
                { // 本月
                    
                    $times = mktime(0, 0, 0, date('m'), 1, date('Y'));
                    $timed = mktime(23, 59, 59, date('m'), date('t'), date('Y'));
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 5:
                { // 上月
                    $times =  mktime(0, 0 , 0,date("m")-1,1,date("Y"));
                    $timed = mktime(23,59,59,date("m") ,0,date("Y"));
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
        }
        $czMode=Db::name('czh');
        $list=$czMode->alias('c')->field("c.*,u.nickname as uname")->join("users u","u.id=c.yid")->where($where)->order("id desc")->paginate(50);
        $this->assign("list", $list);
        
        //充值总金额
        $czMoney=$czMode->where($where)->where("state=0")->sum('money');
        $tzMoney=$czMode->where($where)->where("state=1")->sum('money');
        if (!$czMoney) $czMoney = 0;
        if (!$tzMoney) $tzMoney = 0;
        $this->assign("czMoney", $czMoney);
        $this->assign("tzMoney", $tzMoney);
        return $this->fetch();
    } */
    public function dui(){
        $id=input('id');
        $user_id=input('user_id',0,"intval");
        $money=input('money');
        $userMode=Db::name('users');
        $reMode=Db::name('recharge');
        if($reMode->where('user_id='.$user_id." and id=".$id)->update(array('status'=>1))){
            if($userMode->where('id='.$user_id)->setInc('user_money',$money)){
                $this->success('已充值');
            }else{
                $this->error('充值失败');
            }
        }else{
            $this->error('状态修改有误');
        }
        
        
    }
    public function eror(){
        $id=input('id',0,'intval');
        $reMode=Db::name('recharge');
        if($reMode->where("id=".$id)->update(array('status'=>2))){
            $this->success('已拒绝');
        }else{
            $this->error('状态修改失败');
        }
    }
    
    public function tixian(){//提现记录
        $keyword = input('get.keyword', '', 'htmlspecialchars,trim');
        $status = input("status","");
        $tx_type = input("tx_type","");
        $where = array();
        if (!empty($keyword)) {//查询
            $where['user_id'] = array('like', "%$keyword%");
        }
        if ($tx_type){
            $where['tx_type'] = $tx_type;
        }
        if ($status){
            $status = ($status==3)?0:$status;
            $where['status'] = $status;
        }
        $mode=Db::name('Widthraswals');
        $list=$mode->where($where)->order('id desc')->paginate(50);
        $txMoney=$mode->where($where)->sum('money');
        $this->assign("txMoney",$txMoney);
        $this->assign("list", $list);
        $page=$list->render();
        return  $this->fetch();
    }
    
    /**
     * 修改提现状态
     */
    public function saveTx(){
        $id = input('id');
        $status = input('status');
        $mode=db('Widthraswals');
        $info = $mode ->where("id={$id}") -> update(["status"=>$status]);
        if ($info){
            $tx = $mode->find($id);
            $type = $tx['tx_type'];
            if ($type == 1){
                $Dec = "user_money";
            }elseif ($type == 2){
                $Dec = "com_money";
            }
            if ($status == 2){
                db("users")->where("id={$tx['user_id']}")->setInc($Dec,$tx['money']);
                $this->success("操作成功！");
            }elseif ($status == 1) {
                $userInfo = db("users")->where("id={$tx['user_id']}")->find();
                if(!$userInfo['fopenid']){
                    $this->error("提现信息缺失，提现失败");exit;
                }else {
                    $json = $this->DoTx($tx['user_id'], $userInfo['fopenid'], $tx['money']);
                    if($json['o']=='yes'){
                        $this->success("操作成功");
                    }else{
                        $mode ->where("id={$id}") -> update(["status"=>0]);
                        $this->error("错误：".$json['msg']);
                    }
                }
            }
        }else {
            $this->error("操作失败！");
        }
    }
    
    /**
     * 处理提现
     * @param unknown $id
     * @param unknown $openid
     * @param unknown $money
     * @return mixed
     */
    private function DoTx($id,$openid,$money){
        
        $uid = 596;
        $key = "wuheyidakuan";
        $u = time().rand(100000, 999999);
        $post_data = array (
            'mid' => $uid, //在掌上零钱里面获取的uid
            'jine' => $money, //要请求发放的金额
            'openid'=>$openid, //第二步获取的openid
            'tixianid'=>$u, //本地的提现id【要求唯一】字符串类型的数字，最大长度11位数
            'lailu' =>'sd', //可选参数
        );
        $mkey = md5($post_data['mid'].$post_data['jine'].$post_data['openid'].$key);
        $post_data['mkey'] = $mkey;
        $post_data['lx'] = 999;//保持默认
        $url ='http://jfcms12.com/jieru.php';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // post数据
        curl_setopt($ch, CURLOPT_POST, 1);
        // post的变量
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        $output = curl_exec($ch);
        curl_close($ch);
        //打印获得的数据
        $json = json_decode($output,true);
        return $json;
        
    }
    
    
    public function zzhistory(){//用户之间的转账记录
        $keyword = input('get.keyword','');
        if($keyword){
            $where = "formid={$keyword}";
        }else{
            $where = "";
        }
        $list=db('Zhuang')->where($where)->order('id desc')->paginate(50);
        $this->assign("list", $list);
        return $this->fetch();
    }
    
    public function dui1(){
        $id=input('id');
        $user_id=input('user_id',0,"intval");
        $money=input('money');
        $tx_type=input('type');
        $userMode=Db::name('users');
        $reMode=Db::name('widthraswals');
        $usersss=$userMode->where('id='.$user_id)->select(); 
        if($tx_type==1){//余额提现
            if($reMode->where('user_id='.$user_id." and id=".$id)->update(array('status'=>1))){
                if($userMode->where('id='.$user_id)->setDec('user_money',$money)){//余额
                    $this->success('已充值');
                }else{
                    $this->error('充值失败');
                }
            }else{
                $this->error('状态修改有误');
            }
            
        }else{//佣金提现
            if($reMode->where('user_id='.$user_id." and id=".$id)->update(array('status'=>1))){
                if($userMode->where('id='.$user_id)->setDec('com_money',$money)){//余额
                    $this->success('已充值');
                }else{
                    $this->error('充值失败');
                }
            }else{
                $this->error('状态修改有误');
            }
            
            
        }
        
    
    
    }
    public function eror1(){
        $id=input('id',0,'intval');
        $reMode=Db::name('widthraswals');
        if($reMode->where("id=".$id)->update(array('status'=>2))){
            $this->success('已拒绝');
        }else{
            $this->error('状态修改失败');
        }
    }
    
 
    public function order()
    {
        $times = input('get.times', ''); // 开始时间
        $timed = input('get.timed', ''); // 结束时间
        $se = input('get.se', ''); //
        $uid = input("uid","","intval");
        if ($times > $timed) {
            $this->error('参数错误');
        }
        $where = "";
        $whereuid = "";
        if ($uid){
            $whereuid = " user_id={$uid}";
        }
        if (!empty($times) && !empty($timed)) { // 查询
            // 转换为时间戳
            $times = strtotime($times); // 开始时间
            $timed = strtotime($timed) + 24 * 60 * 60;
            $where = " add_time>=" . $times . " and add_time<=" . $timed; // 结束时间为当天23点
        }elseif (!empty($times) && empty($timed)) {
            $times = strtotime($times); // 开始时间
            $where = " add_time>=" . $times; // 结束时间为当天23点
        }elseif (empty($times) && !empty($timed)) {
            $timed = strtotime($timed) + 24 * 60 * 60;
            $where = " add_time<=" . $timed; // 结束时间为当天23点
        }
        
        switch ($se) {
            case 6:
                { // 今天
                    $times = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                    $timed = mktime(0, 0, 0, date('m'), date('d') + 1, date('Y')) - 1;
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 1:
                { // 昨天
                    $times = mktime(0, 0, 0, date('m'), date('d') - 1, date('Y'));
                    
                    $timed = mktime(0, 0, 0, date('m'), date('d'), date('Y')) - 1;
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 2:
                { // 本周
                    $times =mktime(0, 0 , 0,date("m"),date("d")-date("w")+1,date("Y"));
                   $timed=mktime(23,59,59,date("m"),date("d")-date("w")+7,date("Y"));
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 3:
                { // 上周
                    $times = mktime(0, 0, 0, date('m'), date('d') - date('w') + 1 - 7, date('Y'));
                    
                    $timed = mktime(23, 59, 59, date('m'), date('d') - date('w') + 7 - 7, date('Y'));
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 4:
                { // 本月
                   
                    $times = mktime(0, 0, 0, date('m'), 1, date('Y'));
                    $timed = mktime(23, 59, 59, date('m'), date('t'), date('Y'));
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 5:
                { // 上月
                    $times =  mktime(0, 0 , 0,date("m")-1,1,date("Y"));
                    $timed = mktime(23,59,59,date("m") ,0,date("Y"));
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
        }
        $mode = db('order o');
        $zmoney = $mode->join("users u","u.id=o.user_id","left")->where($whereuid)->where($where)->sum("money");
        $list = $mode->field("o.*,u.nickname")->join("users u","u.id=o.user_id","left")->where($whereuid)->where($where)->where("order_type=0")->order("add_time desc")->paginate(50);
        $this->assign("zmoney",$zmoney);
        $this->assign("list", $list);
        if ($uid) $this->assign("uid",$uid);
        $page = $list->render();
        return $this->fetch();
    } 
 
    public  function daili(){
        $times = input('get.times', ''); // 开始时间
        $timed = input('get.timed', ''); // 结束时间
        $se = input('get.se', ''); //
        if ($times > $timed) {
            $this->error('参数错误');
        }
        $where = array();
        if (! empty($times) || ! empty($timed)) { // 查询
            // 转换为时间戳
            $times = strtotime($times); // 开始时间
            $timed = strtotime($timed) + 24 * 60 * 60;
            $where = " add_time>=" . $times . " and add_time<=" . $timed; // 结束时间为当天23点
        }
        
        switch ($se) {
            case 6:
                { // 今天
                    $times = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                    $timed = mktime(0, 0, 0, date('m'), date('d') + 1, date('Y')) - 1;
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 1:
                { // 昨天
                    $times = mktime(0, 0, 0, date('m'), date('d') - 1, date('Y'));
                    
                    $timed = mktime(0, 0, 0, date('m'), date('d'), date('Y')) - 1;
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 2:
                { // 本周
                    $times =mktime(0, 0 , 0,date("m"),date("d")-date("w")+1,date("Y"));
                    $timed=mktime(23,59,59,date("m"),date("d")-date("w")+7,date("Y"));
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 3:
                { // 上周
                    $times = mktime(0, 0, 0, date('m'), date('d') - date('w') + 1 - 7, date('Y'));
                    
                    $timed = mktime(23, 59, 59, date('m'), date('d') - date('w') + 7 - 7, date('Y'));
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 4:
                { // 本月
                    
                    $times = mktime(0, 0, 0, date('m'), 1, date('Y'));
                    $timed = mktime(23, 59, 59, date('m'), date('t'), date('Y'));
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 5:
                { // 上月
                    $times =  mktime(0, 0 , 0,date("m")-1,1,date("Y"));
                    $timed = mktime(23,59,59,date("m") ,0,date("Y"));
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
        }
        $rebate = db('rebate');
        $mode = $rebate -> where($where) ->order('add_time desc') -> select();
        $dlList = [];
        $dlMoney = 0;
        $ptMoney = 0;
        foreach ($mode as $res){
            if ($res['status'] == 0){
                $dlList[] = $res;
                $dlMoney += $res['money'];
            }elseif ($res['status'] == 1){
                $ptMoney += $res['money'];
            }
        }
        $this -> assign('dailis',$dlList);
        $this -> assign("dlMoney",$dlMoney);
        $this -> assign("ptMoney",$ptMoney);
        return $this->fetch();
    }
    


    public function xiang(){//用户下注详情
        $times = input('times', ''); // 开始时间
        $timed = input('timed', ''); // 结束时间
        $se=input('se','');
        if ($times > $timed) {
            $this->error('参数错误');
        }
        $where = '';
        if (! empty($times) || ! empty($timed)) { // 查询
            // 转换为时间戳
            $times = strtotime($times); // 开始时间
            $timed = strtotime($timed) + 24 * 60 * 60;
            $where = " add_time>=" . $times . " and add_time<=" . $timed; // 结束时间为当天23点
        }
        switch ($se) {
            case 6:
                { // 今天
                    $times = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                    $timed = mktime(0, 0, 0, date('m'), date('d') + 1, date('Y')) - 1;
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 1:
                { // 昨天
                    $times = mktime(0, 0, 0, date('m'), date('d') - 1, date('Y'));
                    
                    $timed = mktime(0, 0, 0, date('m'), date('d'), date('Y')) - 1;
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 2:
                { // 本周
                    $times =mktime(0, 0 , 0,date("m"),date("d")-date("w")+1,date("Y"));
                    $timed=mktime(23,59,59,date("m"),date("d")-date("w")+7,date("Y"));
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 3:
                { // 上周
                    $times = mktime(0, 0, 0, date('m'), date('d') - date('w') + 1 - 7, date('Y'));
                    
                    $timed = mktime(23, 59, 59, date('m'), date('d') - date('w') + 7 - 7, date('Y'));
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 4:
                { // 本月
                    
                    $times = mktime(0, 0, 0, date('m'), 1, date('Y'));
                    $timed = mktime(23, 59, 59, date('m'), date('t'), date('Y'));
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
            case 5:
                { // 上月
                    $times =  mktime(0, 0 , 0,date("m")-1,1,date("Y"));
                    $timed = mktime(23,59,59,date("m") ,0,date("Y"));
                    $where = " add_time>=" . $times . " and add_time<=" . $timed;
                }
                ;
                break;
        }
        $id=input('id');
        if ($id){        
            $Model =db('order');
            $list=$Model->where('user_id='.$id) ->where($where) ->order('add_time desc')->select();
            $zmoney = $Model->field("sum(money)") -> where('user_id='.$id) -> where($where) -> find();
            $this->assign("uid",$id);
            $this->assign("zmoney",$zmoney['sum(money)']);
            $this->assign("list", $list);
        }
        return $this->fetch();
    } 
}