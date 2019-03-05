<?php
@session_start();
class User extends WebBase{
	public $title='BOECP';
	private $vcodeSessionName='ssc_vcode_session_name';
	
	/**
	 * 用户登录页面
	 */
	public final function login(){
		$this->display('user/login.php');
	}
	
	/**
	 * 用户注册页面
	 */
	public final function register(){
		$this->display('user/register.php');
	}
	
	public final function setFullNamedo(){
		$para=$_POST;
		$fullName=$para['fullName'];
		if($this->user['uid'] && $fullName){
			if(!$this->getValue("select `name` from {$this->prename}members where uid=?", $this->user['uid'])){
				if($this->update("update {$this->prename}members set name='{$fullName}' where uid=?", $this->user['uid'])){
						echo 'ok';
						exit;
				}else{
						echo '操作失败';
						exit;
				}
			}else{
						echo '您已添加过真实姓名,如需修改请联系客服';
						exit;
			}
		}
	}
	
	public final function bindBankdo(){
		$para=$_POST;
		//$username=$para['fullName'];
		$bankId=$para['bankId'];
		$cardNo=$para['cardNo'];
		$subAddress=$para['subAddress'];
		if($this->user['uid']){
			
		if($this->getValue("select uid from {$this->prename}member_bank where uid=?", $this->user['uid'])){
				echo '您已绑定银行卡,如需修改请联系客服';
				exit;
		}
		
		if(!$username){
				$username=$this->getValue("select `name` from {$this->prename}members where uid=?", $this->user['uid']);
		}
		$userbank=array(
			'uid'=>$this->user['uid'],
			'username'=>$username,
			'bankId'=>$bankId,
			'account'=>$cardNo,
			'countname'=>$subAddress
		);
					
			if(!$username || !$bankId || !$cardNo || !$subAddress){
					echo '填写错误';
					exit;
			}
			try{
				if($this->insertRow($this->prename.'member_bank', $userbank)){
					$this->update("update {$this->prename}members set `name`='{$username}' where uid=?", $this->user['uid']);
					echo 'ok';
					exit;
				}else{
					echo '绑定失败';
					exit;
				}
		
			}catch(Exception $e){
				$this->rollBack();
				throw $e;
			}

		}
	}

	public final function setFundPwddo(){
		if($this->user['uid']){
			$loginpwd=$_POST['loginpwd'];
			$coinpwd=$_POST['coinpwd'];
			if($loginpwd != $this->user['password']){
				echo '登陆密码输入错误';
				exit;
			}
			if(strlen($coinpwd) != 32){
				echo '提款密码输入错误';
				exit;
			}
			if($loginpwd == $coinpwd){
				echo '登陆密码和提款密码不能相同';
				exit;
			}
			if($this->update("update {$this->prename}members set coinPassword='{$coinpwd}' where uid=?", $this->user['uid'])){
				echo 'ok';
				exit;
			}
		}
	}
	/**
	 * 用户登出操作
	 */
	public final function logout(){
		$_SESSION=array();
		if($this->user['uid']){
			$this->update("update {$this->prename}member_session set isOnLine=0 where uid={$this->user['uid']} and session_key=?", session_id());
		}
			header('location: /user/login');
			exit;
	}
	
	public final function bulletin(){
		$this->display('user/bulletin.php');
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
	
	/**
	 * 用户登录检查 DAVID 
	 */
	public final function loginedto(){
	    $username=wjStrFilter($_POST['username']);
        $password=wjStrFilter($_POST['password']);
        $vcode=wjStrFilter($_POST['vcode']);
        if(!isset($vcode)){
            $arr = array();
            $arr['msg'] = '请输入验证码';
            $arr['status'] = 0;
            echo json_encode($arr);die();
		}

		if($vcode!=$_SESSION[$this->vcodeSessionName]){
            $arr = array();
            $arr['msg'] = '验证码不正确';
            $arr['status'] = 0;
            echo json_encode($arr);die();
		}
		if(!ctype_alnum($username)){
            $arr = array();
            $arr['msg'] = '用户名包含非法字符,请重新登陆';
            $arr['status'] = 0;
            echo json_encode($arr);die();
        }
		
		if(!$username){
            $arr = array();
            $arr['msg'] = '请输入用户名';
            $arr['status'] = 0;
            echo json_encode($arr);die();
		//	throw new Exception('');
		}
		if(!$password){
            $arr = array();
            $arr['msg'] = '不允许空密码登录';
            $arr['status'] = 0;
            echo json_encode($arr);die();
		//	throw new Exception('不允许空密码登录');
		}
		$sql="select * from {$this->prename}members where isDelete=0 and admin=0 and username=? limit 0,1";
		if(!$user=$this->getRow($sql, $username)){
            $arr = array();
            $arr['msg'] = '用户名或密码不正确';
            $arr['status'] = 0;
            echo json_encode($arr);die();
		//	throw new Exception('');
		}
		if(md5($password)!=$user['password']){
            $arr = array();
            $arr['msg'] = '密码不正确';
            $arr['status'] = 0;
            echo json_encode($arr);die();
		//	throw new Exception('');
		}
		if(!$user['enable']){
            $arr = array();
            $arr['msg'] = '您的帐号系统检测涉嫌违规操作已被暂时冻结，如有疑问请联系在线客服！';
            $arr['status'] = 0;
            echo json_encode($arr);die();
		//	throw new Exception('您的帐号系统检测涉嫌违规操作已被暂时冻结，如有疑问请联系在线客服！');
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
		$this->update("update {$this->prename}members set updateTime='{$updatetime}' where uid=?", $user['uid']);		
		// 把别人踢下线
		$this->update("update ssc_member_session set isOnLine=0 where uid=? and id < {$user['sessionId']}", $user['uid']);
		echo json_encode($user);die();
	}

	/**
	 * 验证码产生器
	 */
	public final function vcode($rmt=null){
		$lib_path=$_SERVER['DOCUMENT_ROOT'].'/lib/';
		include_once $lib_path .'classes/CImage.class';
		$width=130;
		$height=40;
		$img=new CImage($width, $height);
		$img->sessionName=$this->vcodeSessionName;
		$img->printimg('png');
	}
	
	/**
	 * 推广注册
	 */
	public final function r($userxxx){
		if(!$userxxx){
			//throw new Exception('链接错误！');
			$this->display('team/register.php');
		}else{
			include_once $_SERVER['DOCUMENT_ROOT'].'/lib/classes/Xxtea.class';
			$userxxx=str_replace(array('-','*',''), array('+','/','='), $userxxx);
			$userxxx=base64_decode($userxxx);
			$LArry=Xxtea::decrypt($userxxx, $this->urlPasswordKey);
			$LArry=explode(",",$LArry);
			$lid=$LArry[0];
			$uid=$LArry[1];

			if(!$this->getRow("select uid from {$this->prename}members where uid=?", $uid)){
				//throw new Exception('链接失效！');
				$this->display('team/register.php');
			}else{
				$this->display('team/register.php',0,$uid,$lid);
			}
		}
	}
	public final function registered(){
		if(!$_POST)  throw new Exception('提交数据出错，请重新操作');

		//表单过滤
		$lid=intval($_POST['lid']);
		$parentId=intval($_POST['parentId']);
		$user=wjStrFilter($_POST['username']);
		$qq=wjStrFilter($_POST['qq']);
		$vcode=wjStrFilter($_POST['vcode']);
		$password=md5($_POST['password']);

		if($vcode!=$_SESSION[$this->vcodeSessionName]) throw new Exception('验证码不正确。');

		//清空验证码session
	    $_SESSION[$this->vcodeSessionName]="";

		if(!ctype_alnum($user)) throw new Exception('用户名包含非法字符');
		if(strlen($_POST['password'])<6) throw new Exception('密码不能小于6位');
		if(strlen($_POST['password'])>20) throw new Exception('密码不能大于20位');
		if(!ctype_digit($qq)) throw new Exception('QQ包含非法字符');
		
		if($lid && $parentId){
		$sql="select * from {$this->prename}links where lid=?";
		$linkData=$this->getRow($sql, $lid);
		if(!$_POST['lid']) $para['lid']=$lid;
		if(!$linkData) throw new Exception('不存在此注册链接。');
		if(!$parentId) throw new Exception('链接错误');
		$parentinfo=$this->getRow("select * from {$this->prename}members where uid=?", $parentId);
		if($linkData['type'] >= $parentinfo['type']) throw new Exception('链接错误');
		}else{
		$linkData['type']=0;
		$linkData['fanDian']=0;
		}
		$para=array(
			'username'=>$user,
			'type'=>$linkData['type'],
			'password'=>$password,
			'fanDian'=>$linkData['fanDian'],
			'coin'=>0,
			'qq'=>$qq,
			'regIP'=>$this->ip(true),
			'regTime'=>$this->time
			);
			
		if($linkData['type']==0 && $parentinfo['type']==1){
			//添加会员
			$para['parentId']=$parentId;
			$para['zparentId']=$parentinfo['zparentId'];
			$para['gudongId']=$parentinfo['gudongId'];
		}elseif($parentinfo['type']==2){
			$para['zparentId']=$parentId;
			$para['gudongId']=$parentinfo['gudongId'];
		}elseif($parentinfo['type']==3){
			$para['gudongId']=$parentId;
		}
		$lasttime=$this->time-24*3600;
        $regcount=$this->getValue("select count(*) from {$this->prename}members where regIP=? and regTime>{$lasttime}",ip2long($this->ip(true)));
		if($regcount>=3) throw new Exception('同一IP 24小时内只能注册三次');

		if(!$para['nickname']) $para['nickname']='未设昵称';
		if(!$para['name']) $para['name']='';
		$this->beginTransaction();
		try{
			$sql="select username from {$this->prename}members where username=?";
			if($this->getValue($sql, $para['username'])) throw new Exception('用户"'.$para['username'].'"已经存在');
			if($this->insertRow($this->prename .'members', $para)){
				$id=$this->lastInsertId();
				$this->commit();
				return '注册成功';
			}else{
				throw new Exception('注册失败');
			}	
		}catch(Exception $e){
			$this->rollBack();
			throw $e;
		}
	}
}
