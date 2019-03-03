<?php
class Api extends WebBase{
	
	public function freshSession(){
		if(!$this->user) return false;
		$sessionId=$this->user['sessionId'];
		if($this->user['testFlag']==1){
		$sql="select * from {$this->prename}guestmembers where uid=?";
		}else{
		$sql="select * from {$this->prename}members where uid=?";
		}
		$user=$this->getRow($sql, $this->user['uid']);
		$user['sessionId']=$sessionId;
		$user['_gameFanDian']=$this->getGameFanDian();
		$_SESSION[$this->memberSessionName]=serialize($user);
		$this->user=$user;
		return true;
	}
	
	public function getGameFanDian(){
		if($this->gameFanDian) return $this->gameFanDian;
		$this->getSystemSettings();
		return $this->gameFanDian=$this->settings['fanDianMax'];
	}
	
	public final function initdo(){
		$this->display('Api/init.php');
	}
	public final function getServerDatado(){
		$this->display('Api/getServerData.php');
	}

	public final function logoutdo(){
		header('location: /user/logout');
	}
	/**
	 * 用户登录检查 DAVID 
	 */
	public final function guestlogindo(){
		if($this->user['uid']){
			echo '您已登陆';
			exit;
		}
	    $username=wjStrFilter($_POST['username']);
        $password=wjStrFilter($_POST['password']);
		if($username==$password && $username=='!guest!'){
			$password=md5($password);
		}else{
			echo '登陆错误';
			exit;
		}
		$username='guest_'.$this->time;
		$para=array(
		'username'=>$username,
		'nickname'=>$username,
		'name'=>$username,
		'password'=>$password,
		'regTime'=>$this->time,
		'updateTime'=>date('Y-m-d H:i:s',$this->time),
		'regIP'=>self::ip(true),
		'coin'=>2000,
		'testFlag'=>1,
		);
		if($this->insertRow($this->prename .'guestmembers', $para)){
			$id=$this->lastInsertId();
			//return '登陆成功';
		}else{
			echo '登陆失败';
			exit;
		}	
		$sql="select * from {$this->prename}guestmembers where isDelete=0 and admin=0 and username=? limit 0,1";
		if(!$user=$this->getRow($sql, $username)){
			echo '登陆失败';
			exit;
		}
		$session=array(
			'uid'=>$user['uid'],
			'username'=>$user['username'],
			'session_key'=>session_id(),
			'loginTime'=>$this->time,
			'accessTime'=>$this->time,
			'loginIP'=>self::ip(true)
		);
		
		$session=array_merge($session, $this->getBrowser());
		
		if($this->insertRow($this->prename.'member_session', $session)){
			$user['sessionId']=$this->lastInsertId();
		}
		$_SESSION[$this->memberSessionName]=serialize($user);
		$updatetime=date('Y-m-d H:i:s', $this->time);
		echo 'ok';
	}
	
	private function getBrowser(){
		$flag=$_SERVER['HTTP_USER_AGENT'];
		$para=array();
		
		// 检查操作系统
		if(preg_match('/Windows[\d\. \w]*/',$flag, $match)) $para['os']=$match[0];
		
		if(preg_match('/Chrome\/[\d\.\w]*/',$flag, $match)){
			// 检查Chrome
			$para['browser']=$match[0];
		}elseif(preg_match('/Safari\/[\d\.\w]*/',$flag, $match)){
			// 检查Safari
			$para['browser']=$match[0];
		}elseif(preg_match('/MSIE [\d\.\w]*/',$flag, $match)){
			// IE
			$para['browser']=$match[0];
		}elseif(preg_match('/Opera\/[\d\.\w]*/',$flag, $match)){
			// opera
			$para['browser']=$match[0];
		}elseif(preg_match('/Firefox\/[\d\.\w]*/',$flag, $match)){
			// Firefox
			$para['browser']=$match[0];
		}elseif(preg_match('/OmniWeb\/(v*)([^\s|;]+)/i',$flag, $match)){
			//OmniWeb
			$para['browser']=$match[2];
		}elseif(preg_match('/Netscape([\d]*)\/([^\s]+)/i',$flag, $match)){
			//Netscape
			$para['browser']=$match[2];
		}elseif(preg_match('/Lynx\/([^\s]+)/i',$flag, $match)){
			//Lynx
			$para['browser']=$match[1];
		}elseif(preg_match('/360SE/i',$flag, $match)){
			//360SE
			$para['browser']='360安全浏览器';
		}elseif(preg_match('/SE 2.x/i',$flag, $match)) {
			//搜狗
			$para['browser']='搜狗浏览器';
		}else{
			$para['browser']='unkown';
		}
		//print_r($para);exit;
		return $para;
	}
}

?>