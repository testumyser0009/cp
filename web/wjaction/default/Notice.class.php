<?php

class Notice extends WebLoginBase{
	
	public final function queryPagedo(){
		$this->display('notice/queryPage.php');
	}

	public final function listhtml(){
		$this->display('notice/list.php');
	}
	
}