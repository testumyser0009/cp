<?php
class Manage extends AdminBase{
	public $pageSize=15;
	
	/**
	 * 管理员列表
	 */
	public final function index(){
		$this->display('manage/list.php');
	}
	public final function moban(){
		$this->display('manage/moban.php');
	}
	public final function fmoban(){
		$this->display('manage/fmoban.php');
	}
	public final function permission($uid){
		$this->uid=$uid;
		$this->permission =$this->getRows("select permission from {$this->prename}permission where uid=?", $uid);
		$this->display('manage/permission.php');
	}
	public final function savePermission()
	{
		if(!$_POST) throw new Exception('提交数据出错');
		$deleteSql = "delete from ssc_permission where uid=".$_POST['uid'];
		$this->delete($deleteSql);

		if (!empty($_POST['selectPermission'])) {
			$permission = explode(',', $_POST['selectPermission']);
			foreach ($permission as $key => $value) {
				$update = array(
					'uid' => $_POST['uid'],
					'permission' => $value
				);
				$this->insertRow($this->prename .'permission', $update);
			}
		}
		
		header("Location: /index.php"); 
		// header("Location: index"); 
	}
	public final function change($cc){
		echo $cc;
		//$origin_str = file_get_contents('/moban.json');
		//$update_str = str_replace('qwe=0', 'qwe=1', $orgin_str);
		//file_put_contents('/moban.json', $cc);
		$myfile = fopen("moban.json", "w") or die("Unable to open file!");
		//$txt = "Mickey Mouse\n\n\n\n";
		fwrite($myfile, $cc);
		fclose($myfile);
		//$myfile = fopen("/moban.json", "w");
		//fwrite($myfile, $cc);
		header("Location: /index.php"); 
		//$this->display('manage/list.php');
	}
	public final function change1($cc){
		echo $cc;
		$myfile = fopen("fmoban.json", "w") or die("Unable to open file!");
		fwrite($myfile, $cc);
		fclose($myfile);
		header("Location: /index.php"); 
	}
	public final function addManagerModal(){
		$this->display('manage/manager-add-modal.php');
	}
	
	public final function addManager(){
		$para=array_merge($_POST, array(
			'parentId'=>$this->user['uid'],
			'parents'=>$this->user['parents'],
			'enable'=>1,
			'admin'=>1,
			'regTime'=>$this->time,
			'regIP'=>$this->ip(true),
			'sb'=>9
		));
		
		// 检查用户名是否重复
		$para['username']=strtolower($para['username']);
		if($this->getValue("select uid from {$this->prename}sysmember where username=?", $para['username']))
		throw new Exception('用户名已经存在');
		
		$para['password']=md5($para['password']);
		if($this->insertRow($this->prename .'sysmember', $para)){
			$id=$this->lastInsertId();
			$sql="update {$this->prename}sysmember set parents=concat(parents, ',', $id) where `uid`=$id";
			$this->update($sql);
			$this->addLog(7,$this->adminLogType[7].'['.$para['username'].']',$this->lastInsertId(),$para['username']);
			return '添加管理员成功';
		}else{
			throw new Exception('未知错误');
		}
	}
	
	public final function deleteManager($uid){
		if(!$uid=intval($uid)) throw new Exception('参数出错');
		if($uid!=$this->user['uid'])throw new Exception('别多手多脚！这个帐号不是你本人！');
		$sql="update {$this->prename}sysmember set isDelete=1 where uid=$uid";
		if($this->delete($sql)){
			$manageName=$this->getValue("select username from {$this->prename}sysmember where uid=?", $uid);
			$this->addLog(9,$this->adminLogType[9].'['.$manageName.']',$uid,$manageName);
			return '管理员已经删除';
		}else{
			throw new Exception('未知错误');
		}
	}
	
	public final function pwdManagerModal($uid){
		$this->display('manage/manager-pwd-modal.php',0,$uid);
	}
	
	public final function clearManager($uid){
		if($uid!=$this->user['uid'])throw new Exception('别多手多脚！这个帐号不是你本人！');
		$userName=$this->getValue("select username from {$this->prename}sysmember where uid=?", $uid);
		$sql="call delUser($uid)";
		if($this->update($sql)){
			$this->addLog(19,$this->adminLogType[19].'['.$userName.']',$uid,$userName);
			return '删除成功';
		}else{
			throw new Exception('删除失败');
		}
	}
	
	public final function changeManagerPwd($uid){
		if(!$uid=intval($uid)) throw new Exception('参数出错');
		if($uid!=$this->user['uid'])throw new Exception('别多手多脚！这个帐号不是你本人！');
		$manageData=$this->getRow("select password, username from {$this->prename}sysmember where uid=$uid");
		$password=$manageData['password'];
		if(!$password) throw new Exception('用户不存在');
		
		$para=$_POST;
		$para['oldpwd']=md5($para['oldpwd']);
		if($para['oldpwd']!=$password) throw new Exception('原密码不正确');
		
		unset($para['oldpwd']);
		$para['password']=md5($para['password']);
		if($para['password']==$password) throw new Exception('密码没有变化');
		if($this->updateRows($this->prename .'sysmember', $para, 'uid='.$uid)){
			$this->addLog(8,$this->adminLogType[8].'['.$manageData['username'].']',$uid,$manageData['username']);
			return '密码已经修改';
		}else{
			throw new Exception('未知出错');
		}
	}
	
	public final function loginLog(){
		include 'ip.function.php';
		$this->display('manage/login-list.php');
	}
	
	//管理日志
	public final function controlLog(){
		$this->display('manage/control-log.php');
	}
	public final function controlLogList(){
		$this->display('manage/control-log-list.php');
	}
}