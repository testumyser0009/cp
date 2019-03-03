<?php
class Commission extends AdminBase{
	public $pageSize=15;

	/*public final function conCommissionList(){
		$this->display('commission/con-list.php');
	}

	public final function lossCommissionList(){
		$this->display('commission/loss-list.php');
	}*/

	public final function updateCommStatus(){

		if(!isset($_GET['commStatusName'])) throw new Exception('参数出错');
		$commStatusName = $_GET['commStatusName'];
		$sql = "update {$this->prename}members set $commStatusName=0";
		$this->update($sql);
		echo '已成功更新所有会员发放状态为未领取！';
	}
}
?>
