<?php
namespace app\index\controller;
use app\index\controller\Commonse;
use think\Db;
use think\Request;
use Think\Session;
class User extends Commonse {
    private $user;
    public function __construct(){
        parent::__construct();
        
    }

    public function user(){
        if(Request::instance()->isPost()){
            $chongz=input('post.chongz',"",'intval');
            $uid=input('post.uid',0,'intval');
            if(empty($chongz) || $chongz < 0){
                $this->error('输入内容不合法');
            }
            if(db('Users')->where('id='.$uid)->setInc('user_money',$chongz)){
                $czinfo = array(
                    "user_id" => $uid,
                    "money"   => $chongz,
                    "add_time"=> time(),
                    "status"  => 1,
                    "order_id"=> Session::get("adminid"),
                    "bz"      => "后台管理充值"
                );
                db('recharge') -> insert($czinfo);
                $this->success('充值成功');
            }else{
                $this->error('充值失败');
            }
        }
        $keyword = input('get.keyword','');
        $name = input("name","");
          $where = "";
        if($keyword){
            $where = "id={$keyword}";
        }
        if ($name){
            $where = "nickname like '%".$name."%'";
        }
        $list = Db::name('users')->where($where)->where('user_type=0')->order('id desc')->paginate(50);
        $this->assign("list", $list);
        $page = $list->render();
       return $this->fetch();
    }
    public function jianqian(){//减钱
        $chongz=input('post.chongz',"","intval");
        $uid=input('post.uid',0,'intval');
        if(empty($chongz) || $chongz < 0){
            $this->error('输入内容不合法');
        }
        if(db('Users')->where('id='.$uid)->setDec('user_money',$chongz)){
            $czinfo = array(
                "user_id" => $uid,
                "money"   => "-".$chongz,
                "add_time"=> time(),
                "status"  => 1,
                "order_id"=> Session::get("adminid"),
                "bz"      => "后台管理退分"
            );
            db('recharge') -> insert($czinfo);
            $this->success('操作成功');
        }else{
            $this->error('操作失败');
        }
    }
    public function one(){//一级分销
        $id=input('id',0,'intval');//获取用户id
        $se=input('se',0);
        switch ($se){
            case 1:{//一级分销
                $user_id="first_parent=";
            };break;
            case 2:{//二级分销
                $user_id = "second_parent=";
            };break;
            case 3:{//三级分销
                $user_id = "three_parent=";
            };break;
        }
        $where = "$user_id".$id;
        $Mode=db('users');
        $list=$Mode->where($where)->order('id asc')->paginate(50);

         $this->assign("list", $list);
        $page = $list->render();
        $this->assign('info',$se);
      return  $this->fetch();
    }

    
    public function state(){
        if(Request::instance()->isGet()){
           $id=input('id');
           $info=Db::name('users')->where('id='.$id)->find();
           $this->assign("info",$info);
           return $this->fetch();
        }else{
            $id=input('post.id',0,'intval');
            $zc=input('post.zc',0,'intval');
            $data=array(
                'state'=>$zc
            );
            if(Db::name('users')->where('id='.$id)->update($data)){
                $this->success('修改成功',Url('User/user')); 
            }else{
                $this->error('修改失败');
            }
        }
        
    }

    public function quanx(){
        if(Request::instance()->isGet()){
            $id=input('id');
            $info=Db::name('users')->where('id='.$id)->find();
            $this->assign("info",$info);
            return $this->fetch();
        }else{
            $id=input('post.id',0,'intval');
            $zc=input('post.zc',0,'intval');
            $data=array(
                'daili'=>$zc
            );
            if(Db::name('users')->where('id='.$id)->update($data)){
                $this->success('修改成功',Url('User/user'));
            }else{
                $this->error('修改失败');
            }
        }
    
    }
    
    public function laba(){//喇叭权限
        if(Request::instance()->isGet()){
            $id=input('id');
            $info=Db::name('users')->where('id='.$id)->find();
            $this->assign("info",$info);
            return $this->fetch();
        }else{
            $id=input('post.id',0,'intval');
            $zc=input('post.zc',0,'intval');
            $data=array(
                'is_laba'=>$zc
            );
            if(Db::name('users')->where('id='.$id)->update($data)){
                $this->success('修改成功',Url('User/user'));
            }else{
                $this->error('修改失败');
            }
        }
    
    }
    public function robot(){//机器人列表
        $list = Db::name('users')->where('user_type!=0')->order('user_type desc')->paginate(50);
        $this->assign("list", $list);
        $page = $list->render();
        return $this->fetch();
    }
    public  function add(){
        return $this->fetch();
    }
    public  function update(){
        $id=input('id');
        $user_type = db('users')->field('user_type')->find($id);
        $count = db('users')->where("user_type={$user_type['user_type']}")->count();
        if ($count > 10){
            if(Db::name('users')->where('id='.$id)->delete()){
                redisd()->del("BjlAiList");
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }else {
            $this->error('删除失败,每个类型的机器人至少存在10个');
        }
    }
    public function addSave(){
        if(Request::instance()->isPost()){
            $jiq =input('jiq');
            $usertypp = input('usertype');
            if(empty($jiq)){
               $this->error('名字不能为空'); 
            }
            $data=array(
                'user_type'=>$usertypp,
                'nickname'=>$jiq,
                "reg_time"=>time(),
                "user_money"=>rand(200000,900000)
                 
            );
            if(Db::name('users')->insert($data)){
                redisd()->del("BjlAiList");
                $this->success('添加成功',url('user/robot'));
            }else{
                $this->error('添加失败');
            }
        }
    }
  

   public function xiang(){//用户下注详情
       $times = input('times', ''); // 开始时间
       $timed = input('timed', ''); // 结束时间
       $se=input('se','');
       if ($times > $timed) {
           $this->error('参数错误');
       }
       $where = '';
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
       $id=input('id');
       $Model =db('order');
       $list=$Model->where('user_id='.$id) ->where($where) ->order('add_time desc')->paginate(50);
       $this->assign("uid",$id);
       $this->assign("list", $list);
       $page = $list->render();
       return $this->fetch();
    }  
}
