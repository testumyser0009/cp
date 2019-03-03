<?php
class Center extends WebLoginBase{
	
	public final function paylist(){
        $this->display('center/pay/list.php');
	}
	
	public final function pay(){
        $list=$this->getRows("select account as payee, payeeName, address, qrCode, onlineType, domain, name, id, rechType 
            from {$this->prename}sysadmin_bank 
            where enable=1"
        );
        $bankList = array();
        foreach ($list as $key => $value) {
            $bankList[$value['rechType']] = $value;
        }

        $this->bankList = $bankList;

		$this->display('center/pay/index.php');
	}
	
	public final function paytranstips(){
		$this->display('center/pay/transtips.php');
	}

	public final function withdraw(){
		$this->display('center/withdraw/index.php');
	}
	public final function withdrawlist(){
		$this->display('center/withdraw/list.php');
	}
	
	public final function paypay_window(){
		$this->display('center/pay/pay_window.php');
	}
	
	public final function usernotice(){
		$this->display('center/user/notice.php');
	}
	
	public final function userloginpwd(){
		$this->display('center/user/loginpwd.php');
	}
	
	public final function userfundpwd(){
		$this->display('center/user/fundpwd.php');
	}
	
}

?>