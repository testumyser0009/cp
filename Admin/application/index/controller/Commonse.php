<?php
 namespace app\index\controller;
use think\Controller;
use think\Session;
class Commonse extends Controller{
    function index(){
        $this->authLogin();
    }
	//构造函数
    public function _initialize(){
     //  echo "这是公共控制器类文件";
    	echo  $this->authLogin();
	}
	
	//验证是否登陆
	public function authLogin(){
	   $id= Session::get('adminid');
		 //如果没有登陆
	    if(!Session::has('adminusername') || !Session::has('adminid')){
			//跳转到登陆控制器
			
			$this->redirect('Login/index');
		}
		$root=db('AdminUser')->where('id='.$id)->find();
		$this->assign('root',$root);
		return $this->fetch('commonse/toop');
	}
	
	
} 
   

