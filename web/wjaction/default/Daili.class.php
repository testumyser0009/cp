<?php
class Daili extends WebLoginBase{
 	public final function listhtml(){
		$this->display('daili/list.php');
	}
 	public final function reportdo(){
		$this->display('daili/report.php');
	}
 	public final function userbetinfohtml(){
		$this->display('daili/userbetinfo.php');
	}

 	public final function dailigetBetdo(){
		$this->display('daili/dailigetBet.php');
	}
	
 	public final function dailigetUserBetsdo(){
		$this->display('daili/dailigetUserBets.php');
	}
}