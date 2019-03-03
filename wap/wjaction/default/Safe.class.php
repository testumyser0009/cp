<?php
@session_start();
class Safe extends WebLoginBase{
	/**
	 * 设置密码
	 */
	public final function setPasswddo(){
		$opwd=$_POST['oldPwd'];
		if(!$opwd) { echo '原密码不能为空';exit;}
		if(strlen($opwd)<6) { echo '原密码至少6位';exit;}
		if(!$npwd=$_POST['newPwd']) { echo '密码不能为空';exit;}
		if(strlen($npwd)<6) { echo '密码至少6位';exit;}
		
		$sql="select password from {$this->prename}members where uid=?";
		$pwd=$this->getValue($sql, $this->user['uid']);
		
		$opwd=md5($opwd);
		if($opwd!=$pwd) { echo '原密码不正确';exit;}
		
		$sql="update {$this->prename}members set password=? where uid={$this->user['uid']}";
		if($this->update($sql, md5($npwd))) {echo 'ok';exit;}
		echo '修改密码失败';
	}
    
    public final function setCoinPwddo(){
        $opwd=$_POST['oldPwd'];
        if(!$opwd) { echo '原提款密码不能为空';exit;}
        if(strlen($opwd)<6) { echo '原提款密码至少6位';exit;}
        if(!$npwd=$_POST['newPwd']) { echo '提款密码不能为空';exit;}
        if(strlen($npwd)<6) { echo '提款密码至少6位';exit;}
        
        $sql="select password, coinPassword from {$this->prename}members where uid=?";
        $pwd=$this->getRow($sql, $this->user['uid']);
        if(!$pwd['coinPassword']){
            $npwd=md5($npwd);
            if($npwd==$pwd['password']) { echo '提款密码与登录密码不能一样';exit;}
            $tishi='提款密码设置成功';
        }else{
            if($opwd && md5($opwd)!=$pwd['coinPassword']) { echo '原提款密码不正确';exit;}
            $npwd=md5($npwd);
            if($npwd==$pwd['password']) { echo '提款密码与登录密码不能一样';exit;}
        }
        $sql="update {$this->prename}members set coinPassword=? where uid={$this->user['uid']}";
        if($this->update($sql, $npwd)) {echo 'ok';exit;}
        echo '修改提款密码失败';
    }
}