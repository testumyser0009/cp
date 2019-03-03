<?php
class System extends AdminBase{
	public $pageSize=15;
	
	public final function create_time(){
		
		//$starttime= "00:01:00"; 59qi
		$starttime= "00:01:00";
		$pertime = 1.5;
		$times_start = 0;
		$times = 960;
		$type = 72;
		
		$pertime = $pertime*60;
		$starttime = strtotime($starttime);
		for($i=0;$i<$times;$i++){
			$actionNo = $times_start+$i+1;
			if($i!=0){
				$starttime=$starttime +$pertime;
			}
			$actionTime= $stopTime = date("H:i:s",$starttime);
			$sql = "insert into ssc_data_time (type,actionNo,actionTime,stopTime,lhcTime) value ('{$type}','{$actionNo}','{$actionTime}','{$stopTime}','0000-00-00 00:00:00');";
			echo $sql.'<br>';
			//$this->getRow($sql);
		}
		//$this->getRow();
	}
	// 系统设置相关方法
	public final function settings(){
		$this->display('system/settings.php');
	}
	
	public final function clear(){
		$this->display('system/clear.php');
	}
	
	public final function updateSettings(){
		$sql="insert into {$this->prename}params(name, `value`) values";
		$i=0;
		if(!$para=$_POST) throw new Exception('参数出错');
		if(!ctype_digit($para['cashMinAmount']) || $para['cashMinAmount']>100 || $para['cashMinAmount']<0) throw new Exception('请正确输入消费百分比!');
		if(!ctype_digit($para['rechargeMin'])) throw new Exception('请正确设置最低充值金额!');
		if(!ctype_digit($para['rechargeMax'])) throw new Exception('请正确设置最高充值金额!');
		if(!ctype_digit($para['cashMin'])) throw new Exception('请正确设置最低提现金额!');
		if(!ctype_digit($para['cashMax'])) throw new Exception('请正确设置最高提现金额!');
		foreach($para as $key=>$var){
			if($var==$this->settings[$key]) continue;
			$i++;
			$sql.="('$key', '$var'),";
		}
		if(!$i) throw new Exception('数据没有改变');
		$sql=rtrim($sql,',');
		$sql.=' on duplicate key update `value`=values(`value`)';
		
		if($this->insert($sql)){
			$this->addLog(11,$this->adminLogType[11]);
			return $this->getSystemSettings(0);
			echo '修改成功';
		}else{
			throw new Exception('未知错误');
		}
	}
	public final function clearSettings(){	
		$sql="insert into {$this->prename}params(name, `value`) values";
		$i=0;
		if(!$para=$_POST) throw new Exception('参数出错');
		if(!ctype_digit($para['clearMemberCoin'])) throw new Exception('请正确设置清理账号规则金额!');
		if(!ctype_digit($para['clearMemberDate'])) throw new Exception('请正确设置清理账号规则时间!');	
		foreach($para as $key=>$var){
			if($var==$this->settings[$key]) continue;
			$i++;
			$sql.="('$key', '$var'),";
		}
		if(!$i) throw new Exception('数据没有改变');
		$sql=rtrim($sql,',');
		$sql.=' on duplicate key update `value`=values(`value`)';
		if($this->insert($sql)){
			$this->addLog(11,$this->adminLogType[11]);
			return $this->getSystemSettings(0);
			echo '修改成功';
		}else{
			throw new Exception('未知错误');
		}
	}

	// 系统公告相关方法
	public final function notice(){
		$this->display('system/notice.php');
	}
	
	public final function addNotice(){
		$this->display('system/notice-add.php');
	}
	public final function doAddNotice(){
		$para=array_merge($_POST, array(
			'addTime'=>$this->time,
			'nodeId'=>1
		));
		if(!$para['title']) throw new Exception('公告标题不能为空');
		if(!$para['content']) throw new Exception('公告内容不能为空');
		
		if($this->insertRow($this->prename .'content', $para)){
			return '添加公告成功';
		}else{
			throw new Exception('未知出错');
		}
	}
	public final function updateNotice($id){
		$this->display('system/notice-update.php',0,$id);
	}
	public final function doUpdateNotice($id){
		$_POST['addTime']=strtotime($_POST['addTime']);

		if(!$_POST['title']) throw new Exception('公告标题不能为空');
		if(!$_POST['content']) throw new Exception('公告内容不能为空');
		if($this->updateRows($this->prename .'content', $_POST, 'id='.$id)){
			return '修改公告成功';
		}else{
			throw new Exception('未知出错');
		}		
	}
	
	public final function deleteNotice($id){
		if(!$id=intval($id)) throw new Exception('参数出错');
		$sql="delete from {$this->prename}content where id=?";
		if($this->delete($sql, $id)){
			echo '公告已经删除';
		}else{
			throw new Exception('未知出错');
		}
	}
	// 银行信息相关方法
	
	public final function bank(){
		$this->display('system/bank-list.php');
	}
	
	public final function withdraw(){
		$this->display('system/withdraw.php');
	}
	
	public final function withdrawModal($id){
		$this->display('system/withdraw-modal.php',0,$id);
	}
	
	public final function sysbankModal($id){
		$this->display('system/sysbank-modal.php',0,$id);
	}
	
	public final function bankModal($id){
		$this->display('system/bank-modal.php',0,$id);
	}

	public final function bankModal2($id){
		$this->display('member/bank-modal.php',0,$id);
	}
	
	public final function updateBank(){
		$para=$_POST;

		$para['admin']=1;
		if(!$para['name'] || !$para['payeeName']){
		$fun='error';
		$msg='接口名和前台名称不能为空';
		echo '<script type="text/javascript">top.onUpdateCompile("', $fun, '", ', json_encode($msg), ')</script>';
		exit;
		}
        header("Content-type:text/html;charset=utf8");
        if (!empty($_FILES["file"]["name"])) {
            $_FILES["file"]['tmp_name'] = str_replace('\\\\', '\\', $_FILES["file"]['tmp_name']);
            if ((($_FILES["file"]["type"] == "image/gif")
                || ($_FILES["file"]["type"] == "image/png")
                || ($_FILES["file"]["type"] == "image/jpg")
                || ($_FILES["file"]["type"] == "image/jpeg")
                || ($_FILES["file"]["type"] == "image/pjpeg"))
            )
            {
                if ($_FILES["file"]["error"] > 0)
                {
                    $fun='error';
                    $msg="Return Code: " . $_FILES["file"]["error"] . "<br />";
                    echo '<script type="text/javascript">top.onUpdateCompile("', $fun, '", ', json_encode($msg), ')</script>';
                    exit;
                }
                else
                {
                    $path = dirname($_SERVER['DOCUMENT_ROOT']) . "/web/upload/file/";
                    if (! file_exists ( $path )) {
                        mkdir ( $path, 0777, true );
                        chmod ( $path, 0777 );
                    }
                    if(!is_writable( $path)) {
                        $fun='error';
                        $msg="文件無法寫入";
                        echo '<script type="text/javascript">top.onUpdateCompile("', $fun, '", ', json_encode($msg), ')</script>';
                        exit;
                    }

                    if (!move_uploaded_file($_FILES["file"]["tmp_name"],$path . $_FILES["file"]["name"])) {
                        $fun='error';
                        $msg="文件上传失败，错误信息：";
                        echo '<script type="text/javascript">top.onUpdateCompile("', $fun, '", ', json_encode($msg), ')</script>';
                        exit;
                    }
                    $mPath = dirname($_SERVER['DOCUMENT_ROOT']) . "/m/upload/file/";
                    if (! file_exists ( $mPath )) {
                        mkdir ( $mPath, 0777, true );
                        chmod ( $mPath, 0777 );
                    }
                    copy($path . $_FILES["file"]["name"], $mPath . $_FILES["file"]["name"]);
                }
            }
            else
            {
                $fun='error';
                $msg='文件不支持上传';
                echo '<script type="text/javascript">top.onUpdateCompile("', $fun, '", ', json_encode($msg), ')</script>';
                exit;
            }
            $para['qrCode'] = '/upload/file/'.$_FILES["file"]["name"];
        }

		$sql="insert into {$this->prename}sysadmin_bank set";
		foreach($para as $field=>$var){
			$sql.=" `$field`='$var',";
		}
		$sql=rtrim($sql,',');
		$sql.=' on duplicate key update bankId=values(bankId), `username`=values(`username`), `account`=values(`account`), `payeeName`=values(`payeeName`), `address`=values(`address`), `qrCode`=values(`qrCode`), onlineType=values(onlineType), `domain`=values(`domain`), `name`=values(`name`)';
		if($this->insert($sql, $para)){
			$addbankId=$this->lastInsertId();
			if(!$addbankId){$addbankId=$para['id'];}			
			$this->addLog(24,$this->adminLogType[24].'['.$this->iff($para['id'],'修改','添加').'ID:'.$addbankId.']',$addbankId,$para['name']);
			$fun='success';
			$msg='操作成功';
		}else{
			$fun='error';
			$msg='未知错误';
		}
		echo '<script type="text/javascript">top.onUpdateCompile("', $fun, '", ', json_encode($msg), ')</script>';
	}

    public final function updateBank2(){
		$para=$_POST;
		$para['admin']=1;
		$sql="insert into {$this->prename}member_bank set";
		foreach($para as $field=>$var){
			$sql.=" `$field`='$var',";
		}
		$sql=rtrim($sql,',');
		$sql.=' on duplicate key update bankId=values(bankId), `username`=values(`username`), `account`=values(`account`), countname=values(countname)';

		if($this->insert($sql, $para)){
			$addbankId=$this->lastInsertId();
			if(!$addbankId){$addbankId=$para['id'];}
			//修改会员表姓名
			$useruid=$this->getValue("select uid from {$this->prename}member_bank where id=?", $addbankId);
			$this->update("update {$this->prename}members set `name`='{$para['username']}' where uid=?", $useruid);
			$this->addLog(11,$this->adminLogType[11].'['.$this->iff($para['id'],'修改','添加').'ID:'.$addbankId.']',$addbankId,$para['username']);
			$fun='success';
			$msg='操作成功';
			//echo $msg;
		}else{
			$fun='error';
			$msg='未知错误';
			//echo $msg;
		}
		
		echo '<script type="text/javascript">top.onUpdateCompile2("', $fun, '", ', json_encode($msg), ')</script>';
	}
	
	public final function updatewithdraw(){
		$para=$_POST;
		if(!$para['name']){
		$fun='error';
		$msg='提款银行名称不能为空';
		echo '<script type="text/javascript">top.onUpdateCompile("', $fun, '", ', json_encode($msg), ')</script>';
		exit;
		}
		$sql="insert into {$this->prename}bank_list set";
		foreach($para as $field=>$var){
			$sql.=" `$field`='$var',";
		}
		$sql=rtrim($sql,',');
		$sql.=' on duplicate key update `name`=values(`name`), `logo`=values(`logo`), `home`=values(`home`), `sort`=values(`sort`), `isDelete`=values(`isDelete`)';
		if($this->insert($sql, $para)){
			$addbankId=$this->lastInsertId();
			if(!$addbankId){$addbankId=$para['id'];}
			$this->addLog(23,$this->adminLogType[23].'['.$this->iff($para['id'],'修改','添加').'ID:'.$addbankId.']',$addbankId,$para['name']);
			$fun='success';
			$msg='操作成功';
		}else{
			$fun='error';
			$msg='未知错误';
		}
		echo '<script type="text/javascript">top.onUpdatewithdraw("', $fun, '", ', json_encode($msg), ')</script>';
	}

	public final function switchBankStatus($id){
		if(!$id=intval($id)) throw new Exception('参数出错');
		$sql="update {$this->prename}member_bank set enable=not enable where id=$id";
		if($this->update($sql)){
			$chikaren=$this->getValue("select username from {$this->prename}member_bank where id=?", $id);
			$this->addLog(11,$this->adminLogType[11].'[开关操作ID:'.$id.']',$id,$chikaren);
			echo '操作成功';
		}else{
			throw new Exception('未知错误');
		}
	}

	public final function switchBankStatus2($id){
		if(!$id=intval($id)) throw new Exception('参数出错');
		$sql="update {$this->prename}sysadmin_bank set enable=not enable where id=$id";
		if($this->update($sql)){
			$chikaren=$this->getValue("select name from {$this->prename}sysadmin_bank where id=?", $id);
			$this->addLog(24,$this->adminLogType[24].'[开关操作ID:'.$id.']',$id,$chikaren);
			echo '操作成功';
		}else{
			throw new Exception('未知错误');
		}
	}
	
	public final function switchwithdrawStatus($id){
		if(!$id=intval($id)) throw new Exception('参数出错');
		$sql="update {$this->prename}bank_list set isDelete=not isDelete where id=$id";
		if($this->update($sql)){
			$chikaren=$this->getValue("select name from {$this->prename}bank_list where id=?", $id);
			$this->addLog(23,$this->adminLogType[23].'[开关操作ID:'.$id.']',$id,$chikaren);
			echo '操作成功';
		}else{
			throw new Exception('未知错误');
		}
	}
	
	public final function deleteBank($id){
		if(!$id=intval($id)) throw new Exception('参数出错');
		$sql="delete from {$this->prename}member_bank where id=$id";
		if($this->delete($sql)){
			$this->addLog(11,$this->adminLogType[11].'[删除ID:'.$id.']');
			echo '银行已经删除';
		}else{
			throw new Exception('未知错误');
		}
	}

	public final function deleteBank2($id){
		if(!$id=intval($id)) throw new Exception('参数出错');
		$sql="delete from {$this->prename}sysadmin_bank where id=$id";
		if($this->delete($sql)){
			$this->addLog(11,$this->adminLogType[11].'[删除ID:'.$id.']');
			echo '银行已经删除';
		}else{
			throw new Exception('未知错误');
		}
	}
	
	
	// 彩种相关方法
	
	public final function type(){
		$this->display('system/type-list.php');
	}
	
	public final function updateType($id){
		if(!$_POST['enable']) $_POST['enable']=0;
		if(!$_POST['android']) $_POST['android']=0;
		if($this->updateRows($this->prename .'type', $_POST, 'id='.$id)){
			$shortName=$this->getValue("select shortName from {$this->prename}type where id=?", $id);
			$this->addLog(12,$this->adminLogType[12].'['.$shortName.']',$id,$shortName);
			echo '修改彩种成功';
			exit;
		}else{
			throw new Exception('未知出错');
		}
	}
	
	// 玩法设置
	public final function played($cai=1){
		$this->display('system/played-list.php',0,$cai);
	}
	
	public final function played2($cai=1){
		$this->display('system/played-list2.php',0,$cai);
	}
	/*修改玩法信息*/
	public final function betPlayedInfoUpdate($id){
		$this->display('system/update-play-info.php', 0, $id);
	}
	
	public final function betPlayedInfoUpdate2($id){
		$this->display('system/update-play-info2.php', 0, $id);
	}
	public final function playedInfoUpdateed(){
		$para=$_POST;
		$playedid=$para['playedid'];
		unset($para['playedid']);
		
		$played=$this->getRow("select * from {$this->prename}played where id={$playedid}");
	    if(!$played) throw new Exception('玩法不存在');

		if($this->updateRows($this->prename .'played', $para, 'id='.$playedid)){
			echo '修改成功';
		}else{
			throw new Exception('未知出错');
		}
		
		
	}
	
	public final function playedInfoUpdateed2(){
		$para=$_POST;
		$playedid=$para['playedid'];
		unset($para['playedid']);
		
		$played=$this->getRow("select * from {$this->prename}played2 where id={$playedid}");
	    if(!$played) throw new Exception('玩法不存在');

		if($this->updateRows($this->prename .'played2', $para, 'id='.$playedid)){
			echo '修改成功';
		}else{
			throw new Exception('未知出错');
		}	
	}
	public final function switchPlayedGroupStatus($id){
		$sql="update {$this->prename}played_group set enable=not enable where id=?";
		if($this->update($sql, $id)){
			$groupName=$this->getValue("select groupName from {$this->prename}played_group where id=?", $id);
			$this->addLog(13,$this->adminLogType[13].'[玩法组开关:'.$groupName.']',$id,$groupName);
			echo '操作成功';
		}else{
			throw new Exception('未知出错');
		}
	}
	
	public final function switchPlayedGroupStatus2($id){
		$sql="update {$this->prename}played_group set enable=not enable where id=?";
		if($this->update($sql, $id)){
			$groupName=$this->getValue("select groupName from {$this->prename}played_group where id=?", $id);
			$this->addLog(13,$this->adminLogType[13].'[玩法组开关:'.$groupName.']',$id,$groupName);
			echo '操作成功';
		}else{
			throw new Exception('未知出错');
		}
	}
	
	public final function switchPlayedGroupMStatus($id){
		$sql="update {$this->prename}played_group set android=not android where id=?";
		if($this->update($sql, $id)){
			$groupName=$this->getValue("select groupName from {$this->prename}played_group where id=?", $id);
			$this->addLog(13,$this->adminLogType[13].'[玩法组手机开关:'.$groupName.']',$id,$groupName);
			echo '操作成功';
		}else{
			throw new Exception('未知出错');
		}
	}
	
	public final function switchPlayedStatus($id){
		$sql="update {$this->prename}played set enable=not enable where id=?";
		if($this->update($sql, $id)){
			$groupName=$this->getValue("select groupName from {$this->prename}played_group where id=?", $id);
			$this->addLog(13,$this->adminLogType[13].'[玩法开关:'.$groupName.']',$id,$groupName);
			echo '操作成功';
		}else{
			throw new Exception('未知出错');
		}
	}
	
	public final function switchPlayedStatus2($id){
		$sql="update {$this->prename}played2 set enable=not enable where id=?";
		if($this->update($sql, $id)){
			$groupName=$this->getValue("select groupName from {$this->prename}played_group where id=?", $id);
			$this->addLog(13,$this->adminLogType[13].'[玩法开关:'.$groupName.']',$id,$groupName);
			echo '操作成功';
		}else{
			throw new Exception('未知出错');
		}
	}
	
	public final function switchPlayedMStatus($id){
		$sql="update {$this->prename}played set android=not android where id=?";
		if($this->update($sql, $id)){
			$playName=$this->getValue("select name from {$this->prename}played where id=?", $id);
			$this->addLog(13,$this->adminLogType[13].'[玩法手机开关:'.$playName.']',$id,$playName);
			echo '操作成功';
		}else{
			throw new Exception('未知出错');
		}
	}
	
	public final function updatePlayed($id){
		$data=array();
		$data['odds']=$_POST['odds'];
		$data['rebate']=$_POST['rebate'];
		$data['rebateDouble']=$_POST['rebate'];
		$data['oddsDouble']=$_POST['odds'];
		$data['minMoney']=$_POST['minMoney'];
		$data['maxMoney']=$_POST['maxMoney'];
		$data['maxTurnMoney']=$_POST['maxTurnMoney'];
		if($this->updateRows($this->prename .'played', $data, 'id='.$id)){
			$groupName=$this->getValue("select groupName from {$this->prename}played_group where id=?", $id);
			$this->addLog(13,$this->adminLogType[13].'[修改:'.$groupName.']',$id,$groupName);
			echo '修改成功';
		}else{
			throw new Exception('未知出错');
		}
	}
	
	public final function updatePlayed2($id){
		if($this->updateRows($this->prename .'played2', $_POST, 'id='.$id)){
			$groupName=$this->getValue("select groupName from {$this->prename}played_group where id=?", $id);
			$this->addLog(13,$this->adminLogType[13].'[修改:'.$groupName.']',$id,$groupName);
			echo '修改成功';
		}else{
			throw new Exception('未知出错');
		}
	}
	
	public final function service(){
		$this->display('system/system-service.php');
	}
	
	public final function serviceadd(){
		$this->display('system/service-add.php');
	}
	
	/*清除数据库*/
	public final function clearData(){
		$date=strtotime($_POST['date']." 00:00:00")+24*3600;
		$sql="call clearData('$date')";
		$this->update($sql); 
	}

	/*清除数据库 2*/
	public final function clearData2(){
		$date=strtotime($_POST['date']." 00:00:00")+24*3600;
		$sql="call clearData2('$date')";
		$this->update($sql); 
	}
	
	public final function clearData3(){
		$date=strtotime($_POST['date']." 00:00:00")+24*3600;
		$sql="call clearData3('$date')";
		$this->update($sql); 
	}
	
	public final function clearData4(){
		$date=strtotime($_POST['date']." 00:00:00")+24*3600;
		$sql="call clearData4('$date')";
		$this->update($sql); 
	}
	
	public final function clearData5(){
		$date=strtotime($_POST['date']." 00:00:00")+24*3600;
		$sql="call clearData5('$date')";
		$this->update($sql); 
	}
	
	public final function clearData6(){
		$date=strtotime($_POST['date']." 00:00:00")+24*3600;
		$sql="call clearData6('$date')";
		$this->update($sql); 
	}
	
	public final function clearData7(){
		$date=strtotime($_POST['date']." 00:00:00")+24*3600;
		$sql="call clearData7('$date')";
		$this->update($sql); 
	}
	
	/*清除空闲用户*/
	public final function clearUser(){
		$clearMemberCoin=$_POST['coin_del'];
		$clearMemberDate=$this->time-$_POST['date_del']*24*3600;
		$sql="call delUsers($clearMemberCoin,$clearMemberDate)";
		$this->update($sql);
	}

}