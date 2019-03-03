<?php
class Userrech extends WebLoginBase{
	
	public final function getUserRechCfgdo(){
		$this->display('Userrech/getUserRechCfg.php');
	}
	
	public final function getRechListdo(){
		$this->display('Userrech/getRechList.php');
	}
	
	public final function getRechDetaildo(){
		$this->display('Userrech/getRechDetail.php');
	}

	public final function detaildo(){
		$this->display('Userrech/detail.php');
	}
	
	public final function getStatBetsdo(){
		$this->display('Userrech/getStatBets.php');
	}

	public final function getTotalStatBetsdo(){
		$this->display('Userrech/getTotalStatBets.php');
	}

	public final function getNoticesdo(){
		
		$this->display('Userrech/getNotices.php');
	}
	public final function onlinePaydo(){
		$this->display('Userrech/onlinePay.php');
	}
	
	public final function savedo(){
		$this->display('Userrech/save.php');
	}

	public final function getRechId(){
		$rechargeId=date('YmdHis').mt_rand(1000,9999);
		if($this->getRow("select id from {$this->prename}member_recharge where rechargeId=$rechargeId")){
			getRechId();
		}else{
			return $rechargeId;
		}
	}
}

?>