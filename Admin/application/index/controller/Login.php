<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
class Login extends Controller {

    ///登录页面
    public function index() {
      echo   $this->fetch();
    }
    //登录处理
    public function dologin() {
        //获取数据
        $username =input('username');
        $password =input('password');
        $arr=array(
            'num'=>0,
            'msg'=>'参数错误' // 0 有错误, 1登录成功
            
        );
        if (empty($username)||empty($password)) {
            return json($arr);
        } 
      
        $where = array(
            'username'=>$username,
            'password'=>md5($password)
        );
        $model = db('AdminUser');
        $user=$model->where($where)->find();
       
        if (!empty($user)) {
           Session::set('adminusername',$username);  
           Session::set('adminid',$user['id']);
            $arr['num']=1;$arr['msg']='登录成功';
           return json($arr);
        } else {
            $arr['msg']='用户名或密码错误!';
            return json($arr);
        }
    }
    public function abcd(){
        $bbd['mun']='jjei';
        $bbd['sud']=1;
        return json($bbd);
    }
    //后台退出登录
    public function logout() {
        session("adminusername",null);
        session("adminid",null);
        $this->redirect('Login/index');
    }
}