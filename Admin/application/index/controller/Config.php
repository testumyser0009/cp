<?php
namespace app\index\controller;
use app\index\controller\Commonse;
use think\Db;
use think\Request;
use GameRedis\RedisPackage;
class Config extends Commonse{
    /*  private $da = array(
        'num' => 0,
        'msg' => '参数错误'
    );// 错误信息 */
    public function __construct()
    {
        parent::__construct();
    }

   public function set()
    { // 密码修改
        if (Request::instance()->isPost()) {
            $username =input('post.username', '');
            $password = input('post.password', '');
            $password1 = input('post.password1', '');
            if (empty($username) || empty($password)) {
                $this->error('不能为空');
            }
            if ($password1 != $password) {
                $this->error('两次输入的密码不一致');
            }
            $data = array(
                'username' => $username,
                'password' => md5($password)
            );
            if (Db::name('AdminUser')->where('id=1')->update($data)) {
               session('adminusername',null);
               session('adminid',null);
                $this->success('修改成功',Url('Index/index'));
            } else {
              $this->error('修改失败');
            }
        }
       return $this->fetch();
    }
    
    public function run()
    { // 系统配置修改
        if (Request::instance()->isPost()) {
            $id = input('post.id', 0, 'intval');
            $values = input('post.zc', 0, 'intval');
            $data = array(
                'values' => $values
            );
            if (Db::name('Config')->where('id='.$id)->update($data)) {
                redisd()->del("BjlGameType");
                $this->success('修改成功', Url('Config/config'));
            } else {
                $this->error('修改失败');
            }
        }
        $id = input('id', 0, 'intval');
        $info = Db::name('Config')->where('id=' . $id)->find();
        $this->assign('info', $info);
       return $this->fetch();
    }
    
    public function run1()
    { // 系统配置修改
    if (Request::instance()->isPost()) {
        $id = input('post.id', 0, 'intval');
        $values = input('post.zc', 0, 'intval');
        $data = array(
            'values' => $values
        );
        if (Db::name('Config')->where('id='.$id)->update($data)) {
            if ($id == 11 && redisd()->exists("BjlGameKill")){
                redisd()->del("BjlGameKill");
            }elseif ($id == 9 && redisd()->exists("BjlAiState")){
                redisd()->del("BjlAiState");
            }
            $this->success('修改成功', Url('Config/config'));
        } else {
            $this->error('修改失败');
        }
    }
    $id = input('id', 0, 'intval');
    $info = Db::name('Config')->where('id=' . $id)->find();
    $this->assign('info', $info);
    return $this->fetch();
    }
   public function config()
    { // 系统配置列表
        $config =Db::name('Config');
        $system=$config->where("con_type='system'")->select();
        $ststem=$config->where("con_type='ststem'")->select();
        $rebate=$config->where("con_type='rebate'")->select();
        $order=$config->where("con_type='order'")->select();
        $url=$config->where("con_type='url'")->select();
        $this->assign('ststem',$ststem);
        $this->assign('system',$system);
        $this->assign('rebate',$rebate);
        $this->assign('order',$order);
        $this->assign('url',$url);
       return $this->fetch();
    }  
    public function adduser(){//添加管理员
        if (Request::instance()->isPost()) {
            $username =input('post.username', '');
            $password = input('post.password', '');
            $password1 = input('post.password1', '');
            if (empty($username) || empty($password)) {
                $this->error('不能为空');
            }
            if ($password1 != $password) {
                $this->error('两次输入的密码不一致');
            }
            $data = array(
                'username' => $username,
                'password' => md5($password)
            );
            if (Db::name('AdminUser')->insert($data)) {
                $this->success('添加成功',Url('Index/index'));
            } else {
                $this->error('添加失败');
            }
        }
        return $this->fetch();
    }
    public function guanliy(){
        $config =Db::name('AdminUser');
        $list = $config->select();
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function add (){
        $config =Db::name('Config');
        if(Request::instance()->isPost()){
            $id=input('id');
            $values=input('values');
            if (empty($values)) $this->error("参数不能为空！");
            if ($id == 27 && $values < 2) $this->error("机器人数量不能小于两个！");
            $data=array(
                'values'=>$values
            );
            if($config->where('id='.$id)->update($data)){
                if ($id == 27) redisd()->del("BjlAiCount");
                if (in_array($id, [20,21,22,23,24])) redisd()->del("BjlGameGl");
                $this->success("修改成功",url('Config/config'));
            }else{
                $this->error('修改失败');
            }
        }
        $id=input('id');
        $list = $config->where('id='.$id)->select();
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function delete(){//删除管理员
        $id=input('id');
        $config =Db::name('AdminUser');
        $fbd=$config->where('id='.$id)->find();
        if($fbd){
            if($config->where('id='.$id)->delete()){
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }else{
            $this->error('参数错误');
        }
        $list = $config->select();
    }
    public function  gamesm(){//游戏说明
        
        if(Request::instance()->isPost()){
             $text=input('post.text');
             
            if(Db::name('Gametext')->where("id=1")->update(array('text'=>$text))){
              
                $this->success('修改成功');
            }else{
                $this->error('修改失败');
            }
        }
        //显示内容
        $info=Db::name('Gametext')->where('id=1')->find();
        $this->assign('info',$info);
      return  $this->fetch();
    }
    public function  kefu(){//充值说明
        if(Request::instance()->isPost()){
             $text=input('post.text');
            if(Db::name('Gametext')->where("id=2")->update(array('text'=>$text))){
                $this->success('修改成功');
            }else{
                $this->error('修改失败');
            }
        }
        //显示内容
        $info=Db::name('Gametext')->where('id=2')->find();
        $this->assign('info',$info);
      return  $this->fetch();
    }
    
    public function  kefuer(){//提现说明
        if(Request::instance()->isPost()){
            $text=input('post.text');
            if(Db::name('Gametext')->where("id=3")->update(array('text'=>$text))){
                $this->success('修改成功');
            }else{
                $this->error('修改失败');
            }
        }
        //显示内容
        $info=Db::name('Gametext')->where('id=3')->find();
        $this->assign('info',$info);
        return  $this->fetch();
    }
    
    // 开点设置
    public function kaidian(){
        if (Request::instance()->isPost()){
            $dian = input('d1')."-".input('d2')."-".input('d3');
            $num = redisd()->get("BjlOrderNum");
            $info = redisd()->hset("BjlSetDian",$num,$dian);
            if ($info){
                $this->success('设置成功');
            }else {
                $this->error('设置失败');
            }
        }
        return  $this->fetch();
    }
}