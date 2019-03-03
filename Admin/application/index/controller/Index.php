<?php
namespace app\index\controller;
use app\index\controller\Commonse;

class Index extends Commonse{
    public function __construct(){
      echo  parent::__construct();
      
    }   
    
    function index(){
        echo 1;die();
     $time=date('Y-m-d');
        return "<div style='color:#fff;text-align:center;margin:200px auto;font-size:30px'>欢迎登陆 {$time}</div>";
    }
    function set(){
      return  $this->fetch();
    }
}