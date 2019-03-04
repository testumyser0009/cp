<?php
class Staticdata extends WebBase{

	public final function dataversionjs(){
		$this->display('staticdata/dataversion.php');
	}
	
	public final function messagesjs(){
		$this->display('staticdata/messages.php');
	}	
	
	public final function paramcfgjs(){
		$this->display('staticdata/paramcfg.php');
	}	
	
	public final function configjsjs(){
	
		$this->display('staticdata/configjs.php');
	}	
	
	public final function gameCommonjs(){
		$this->display('staticdata/gameCommon.php');
	}	

	public final function gamedatasjs(){
		
		$this->getSystemCache('staticdata/gamedatas.php', $this->user['panid']);
		//getSystemCache($this->display('staticdata/gamedatas.php'),$this->cacheDir,$this->expire);
	}	
	
	public final function curissuejs(){
		$this->display('staticdata/CurIssue.php');
	}
	public final function nextissuejs(){
		$this->display('staticdata/NextIssue.php');
	}

	public final function allnextissuejs(){
		$this->display('staticdata/allNextIssue.php');
	}

	public final function stat_gamejs(){
		$this->display('staticdata/stat_game.php');
	}

	public final function statjs(){
		$this->display('staticdata/stat.php');
	}

	public final function HistoryLotteryjs(){
		$this->display('staticdata/HistoryLottery.php');
	}

public final function cqssccl($gameId, $bet, $Groupname=null){
	$count=0;
	$clong=$this->getRows("select data from {$this->prename}data where type={$gameId} order by number desc limit 20");
	//var_dump($clong);
	foreach($clong as $key => $var){
	$kj=explode(',',$var['data']);
	if($Groupname=='第一球'){
		$val=intval($kj[0]);
	}elseif($Groupname=='第二球'){
		$val=intval($kj[1]);
	}elseif($Groupname=='第三球'){
		$val=intval($kj[2]);
	}elseif($Groupname=='第四球'){	
		$val=intval($kj[3]);
	}elseif($Groupname=='第五球'){	
		$val=intval($kj[4]);
	}else{	
	$val=intval($kj[0])+intval($kj[1])+intval($kj[2])+intval($kj[3])+intval($kj[4]);
	$vala=intval($kj[0]);
	$val5=intval($kj[4]);
	}
	
        if($bet=='大'){
            //号码为0到9
            if($val>=5 && $val<=9){
            $tempcount+=1;	
            if($tempcount > 2) $count=$tempcount;	
            }else{return $count;}
        }elseif($bet=='小'){
            //号码为0到9
            if($val>=0 && $val<=4){
            $tempcount+=1;	
            if($tempcount > 2) $count=$tempcount;	
            }else{return $count;}
        }elseif($bet=='单'){
            if($val%2!=0){
            $tempcount+=1;	
            if($tempcount > 2) $count=$tempcount;	
            }else{return $count;}
        }elseif($bet=='双'){
			if($val%2==0){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='总和大'){
			if($val>22){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
			
		}elseif($bet=='总和小'){
			if($val>=0 && $val<23){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
			
		}elseif($bet=='总和单'){
			if($val%2!=0){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
			
		}elseif($bet=='总和双'){
			if($val%2==0){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
			
		}elseif($bet=='龙'){
			if($vala>$val5){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
			
		}elseif($bet=='虎'){
			if($val5>$vala){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
			
		}elseif($bet=='和'){
			if($vala==$val5){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
			
		}
	}
	return $count;
}
	
public final function pk10cl($gameId, $bet, $Groupname=null){
	$count=0;
	$clong=$this->getRows("select data from {$this->prename}data where type={$gameId} order by number desc limit 20");
	//var_dump($clong);
	foreach($clong as $key => $var){
	$kj=explode(',',$var['data']);
	if($Groupname=='冠军'){
		$val=intval($kj[0]);
		$val2=intval($kj[9]);
	}elseif($Groupname=='亚军'){
		$val=intval($kj[1]);
		$val2=intval($kj[8]); //8为第9个数	
	}elseif($Groupname=='第三名'){
		$val=intval($kj[2]);
		$val2=intval($kj[7]);
	}elseif($Groupname=='第四名'){	
		$val=intval($kj[3]);
		$val2=intval($kj[6]);
	}elseif($Groupname=='第五名'){	
		$val=intval($kj[4]);
		$val2=intval($kj[5]);
	}elseif($Groupname=='第六名'){	
		$val=intval($kj[5]);
	}elseif($Groupname=='第七名'){	
		$val=intval($kj[6]);
	}elseif($Groupname=='第八名'){	
		$val=intval($kj[7]);
	}elseif($Groupname=='第九名'){	
		$val=intval($kj[8]);
	}elseif($Groupname=='第十名'){	
		$val=intval($kj[9]);
	}else{
		$val=intval($kj[0])+intval($kj[1]);		
	}
		if($bet=='大'){
			if($val>=6 && $val<11){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
			//return $count;
		}elseif($bet=='小'){
			if($val>0 && $val<=5){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
			//return $count;
		}elseif($bet=='单'){
			if($val%2!=0){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
			//return $count;
		}elseif($bet=='双'){
			if($val%2==0){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
			//return $count;
		}elseif($bet=='龙'){
			if($val>$val2 && $val2){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
			//return $count;
		}elseif($bet=='虎'){
			if($val2>$val && $val2){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
			//return $count;
		}elseif($bet=='冠亚大'){
			if($val>11 && $val<20){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
			//return $count;
		}elseif($bet=='冠亚小'){
			if($val>2 && $val<12){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
			//return $count;
		}elseif($bet=='冠亚单'){
			if($val%2!=0){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
			//return $count;
		}elseif($bet=='冠亚双'){
			if($val%2==0){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
			//return $count;
		}
	}
	return $count;
}
	
public final function klsfcl($gameId, $bet, $Groupname=null){
	$count=0;
	$clong=$this->getRows("select data from {$this->prename}data where type={$gameId} order by number desc limit 20");
	//var_dump($clong);
	foreach($clong as $key => $var){
		$kj=explode(',',$var['data']);
		if($Groupname=='第一球'){
			$val=intval($kj[0]);
			$val3=intval($kj[7]);
		}elseif($Groupname=='第二球'){
			$val=intval($kj[1]);
			$val3=intval($kj[6]);
		}elseif($Groupname=='第三球'){
			$val=intval($kj[2]);
			$val3=intval($kj[5]);
		}elseif($Groupname=='第四球'){	
			$val=intval($kj[3]);
			$val3=intval($kj[4]);
		}elseif($Groupname=='第五球'){	
			$val=intval($kj[4]);
		}elseif($Groupname=='第六球'){	
			$val=intval($kj[5]);
		}elseif($Groupname=='第七球'){	
			$val=intval($kj[6]);
		}elseif($Groupname=='第八球'){	
			$val=intval($kj[7]);
		}else{
			$val=intval($kj[0])+intval($kj[1])+intval($kj[2])+intval($kj[3])+intval($kj[4])+intval($kj[5])+intval($kj[6])+intval($kj[7])+intval($kj[8]);
			$str=strval($val);
			$val2=intval(substr($str,-1));
		}
		
		if($bet=='总和大'){
			if($val>84 && $val<133){
            $tempcount+=1;	
            if($tempcount > 2) $count=$tempcount;	
            }else{return $count;}
		}elseif($bet=='总和小'){
			if($val>35 && $val<84){
            $tempcount+=1;	
            if($tempcount > 2) $count=$tempcount;	
            }else{return $count;}
		}elseif($bet=='总和单'){
			if($val%2!=0){
            $tempcount+=1;	
            if($tempcount > 2) $count=$tempcount;	
            }else{return $count;}
		}elseif($bet=='总和双'){
			if($val%2==0){
            $tempcount+=1;	
            if($tempcount > 2) $count=$tempcount;	
            }else{return $count;}
		}elseif($bet=='总和尾大'){
			if($val2>4){
            $tempcount+=1;	
            if($tempcount > 2) $count=$tempcount;	
            }else{return $count;}
		}elseif($bet=='总和尾小'){
			if($val2<5){
            $tempcount+=1;	
            if($tempcount > 2) $count=$tempcount;	
            }else{return $count;}
		}elseif($bet=='大'){
			if($val>10 && $val<21){
            $tempcount+=1;	
            if($tempcount > 2) $count=$tempcount;	
            }else{return $count;}
		}elseif($bet=='小'){
			if($val>0 && $val<11){
            $tempcount+=1;	
		if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='单'){
			if($val%2!=0){
	            $tempcount+=1;	
			if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='双'){
			if($val%2==0){
            $tempcount+=1;	
			if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='尾大'){
			$str=strval($val);
			$val2=intval(substr($str,-1));
			if($val2>4){
            $tempcount+=1;	
			if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='尾小'){
			$str=strval($val);
			$val2=intval(substr($str,-1));
			if($val2<5){
            $tempcount+=1;	
			if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='合数单'){
			if($val>0 && $val<10){
				if($val%2!=0)  $tempcount+=1;
			}elseif($val>9 && $val<21){
			$str=strval($val);
			$val2=intval(substr($str,-1)) + intval(substr($str,0,1));
			if($val%2!=0)  $tempcount+=1;	
			}
			if($tempcount > 2){
				$count=$tempcount;
			}else{return $count;}
		}elseif($bet=='合数双'){
			if($val>0 && $val<10){
			if($val%2==0) $tempcount+=1;
			
			}elseif($val>9 && $val<21){
			$str=strval($val);
			$val2=intval(substr($str,-1)) + intval(substr($str,0,1));		
			if($val%2==0) $tempcount+=1;
			}
			if($tempcount > 2){
				$count=$tempcount;
			}else{return $count;}
		}elseif($bet=='龙'){
			if($val>$val3 && $val3){
            $tempcount+=1;	
			if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='虎'){
			if($val3>$val && $val3){
            $tempcount+=1;	
			if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}	
	}
	return $count;
}
	
public final function pcddcl($gameId, $bet, $Groupname=null){
	$count=0;
	$clong=$this->getRows("select data from {$this->prename}data where type={$gameId} order by number desc limit 20");
	//var_dump($clong);
	foreach($clong as $key => $var){
		$kj=explode(',',$var['data']);
		$kjhe=intval($kj[0]) + intval($kj[1]) + intval($kj[2]);
		//var_dump($kjhe);
		if($bet=='大'){
			if($kjhe>=14){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='小'){
			if($kjhe<=13){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='单'){
			if($kjhe%2!=0){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='双'){
			if($kjhe%2==0){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='极大'){
			if($kjhe>=23){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='极小'){
			if($kjhe<=4){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='豹子'){
			$kja=intval($kj[0]);
			$kjb=intval($kj[1]);
			$kjc=intval($kj[2]);
			if($kja==$kjb && $kja==$kjc){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='红波'){
			if($kjhe !=0 && $kjhe !=13 && $kjhe !=14 && $kjhe !=27){		
				if($kjhe%3==0){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
				}else{return $count;}
			}else{return $count;}
		}elseif($bet=='绿波'){
			//0,13,14,27
			if($kjhe !=0 && $kjhe !=13 && $kjhe !=14 && $kjhe !=27){
				if($kjhe%3==1 || $kjhe==1){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
				}else{return $count;}
			}else{return $count;}
		}elseif($bet=='蓝波'){
			if($kjhe !=0 && $kjhe !=13 && $kjhe !=14 && $kjhe !=27){	
				if($kjhe%3==2 || $kjhe==2){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
				}else{return $count;}
			}else{return $count;}
		}
	
	}
	return $count;
}	
	
public final function bjkl8cl($gameId, $bet, $Groupname=null){
	$count=0;
	$clong=$this->getRows("select data from {$this->prename}data where type={$gameId} order by number desc limit 20");
	//var_dump($clong);
	foreach($clong as $key => $var){
		$kj=explode(',',$var['data']);
		$kjhe=0;
		foreach($kj as $k=>$kjdata){
			$kjhe+=$kjdata;
		}
		//var_dump($kjhe);
		if($bet=='总和大'){
			if($kjhe>810){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='总和小'){
			if($kjhe<810){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='总和单'){
			if($kjhe%2!=0){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='总和双'){
			if($kjhe%2==0 && $kjhe){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='总大单'){
			if($kjhe>810 && $kjhe%2!=0){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='总大双'){
			if($kjhe>810 && $kjhe%2==0){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='总小单'){
			if($kjhe<810 && $kjhe%2!=0){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}elseif($bet=='总小双'){
			if($kjhe<810 && $kjhe%2==0){
				$tempcount+=1;	
				if($tempcount > 2) $count=$tempcount;	
			}else{return $count;}
		}			
	}
	return $count;
}

public final function gd11x5cl($gameId, $bet, $Groupname=null){
	$count=0;
	$clong=$this->getRows("select data from {$this->prename}data where type={$gameId} order by number desc limit 20");
	//var_dump($clong);
	foreach($clong as $key => $var){
		$kj=explode(',',$var['data']);
		$kjhe=0;
		foreach($kj as $k=>$kjdata){
			$kjhe+=$kjdata;
		}
		if($Groupname=='第一球'){
			$val=intval($kj[0]);	
		}elseif($Groupname=='第二球'){
			$val=intval($kj[1]);	
		}elseif($Groupname=='第三球'){
			$val=intval($kj[2]);	
		}elseif($Groupname=='第四球'){
			$val=intval($kj[3]);	
		}elseif($Groupname=='第五球'){
			$val=intval($kj[4]);	
		}
			if($bet=='大'){
				if($val>=6 && $val<11){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{return $count;}
			}elseif($bet=='小'){
				if($val>0 && $val<=5){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{return $count;}
			}elseif($bet=='单'){
				if($val%2!=0 && $val != 11){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{return $count;}
			}elseif($bet=='双'){
				if($val%2==0 && $val != 11){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{return $count;}
			}elseif($bet=='总和大'){
				if($kjhe>30){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{return $count;}
			}elseif($bet=='总和小'){
				if($kjhe<30){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{return $count;}
			}elseif($bet=='总和单'){
				if($kjhe%2!=0){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{return $count;}
			}elseif($bet=='总和双'){
				if($kjhe%2==0){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{return $count;}
			}elseif($bet=='总和尾大'){
				$str=strval($kjhe);
				$val2=intval(substr($str, -1));
				if($val2>4){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{return $count;}
			}elseif($bet=='总和尾小'){
				$str=strval($kjhe);
				$val2=intval(substr($str, -1));
				if($val2<5){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{return $count;}
			}elseif($bet=='龙'){
				if(intval($kj[0]) > intval($kj[4])){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{return $count;}
			}elseif($bet=='虎'){
				if(intval($kj[0]) < intval($kj[4])){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{return $count;}
			}
	}
	return $count;

}


}

?>