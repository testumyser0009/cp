<?php
class Time extends AdminBase{
	public $pageSize=20;
	
	public final function index($type){
		$this->type=$type;
		if($type!=70){
		$this->display('time/index.php');
		}else{
		$this->display('time/index2.php');
		}
	}
	
	public final function add($type){
		$this->type=$type;
		$this->display('time/add.php');
	}
	// 彩种时间相关方法
	public final function addTime($type,$id){
			$data=array();
			$data['type']=70;
			$data['actionNo']=$_POST['actionNo'];
			$data['lhcTime']=$_POST['lhcTime'];
		if($this->insertRow($this->prename .'data_time', $data)){
			$shortName=$this->getValue("select shortName from {$this->prename}type where id=?", $type);
			$this->addLog(21,$this->adminLogType[21].'['.$shortName.']',$id);
			echo '修改时间成功';
		}else{
			throw new Exception('未知出错');
		}
	}

	public final function updateTime($type,$id){
		if($this->updateRows($this->prename .'data_time', $_POST, 'id='.$id)){
			$shortName=$this->getValue("select shortName from {$this->prename}type where id=?", $type);
			$this->addLog(21,$this->adminLogType[21].'['.$shortName.']',$id);
			echo '修改时间成功';
		}else{
			throw new Exception('未知出错');
		}
	}
	
	public final function deleteTime($type,$id){
		if($type!=70){
			echo '删除时间失败,只能删除香港彩的时间';
			die;
		}
		$sql="delete from {$this->prename}data_time where id=$id";
		if($this->delete($sql, $_POST)){			
			$shortName=$this->getValue("select shortName from {$this->prename}type where id=?", $type);
			$actionNo=$this->getValue("select actionNo from {$this->prename}type where id=?", $id);
			$this->addLog(19,$this->adminLogType[19].'['.$shortName.'第'.$actionNo.'期]',$id,$shortName.'第'.$actionNo.'期');
			echo '删除时间成功';
		}else{
			throw new Exception('未知出错');
		}
	}
	
}