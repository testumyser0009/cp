<?php
class Admin extends AdminBase{
	public final function index($params=''){
		$permissionData =$this->getRows("select permission from {$this->prename}permission where uid=?", $this->user['uid']);
		$permission = array();
		foreach ($permissionData as $key => $value) {
			$permission[] = $value['permission'];
		}
		$this->permission = $permission;
        $this->display('index843242.php');
	}
	
	public final function login($params=''){
		$this->display('login20150617.php');
	}
	
}