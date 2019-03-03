<?php
class Member extends WebBase{
	//平台首页
	public final function index(){		
		$this->display('member/index.php');
	}
	
	public final function tanc(){		
		$this->display('member/tanc.php');
	}
	public final function tran(){		
		$this->display('/tran.html');
	}
	
}