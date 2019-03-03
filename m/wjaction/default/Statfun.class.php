<?php
public final function pk10cl($gameId, $bet, $Groupname=null){
$count=0;
$clong=$this->getRows("select data from {$this->prename}data where type={$gameId} order by number desc limit 20");
var_dump($clong);
$cl=array();
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
				}else{$tempcount=-100;}
				//return $count;
			}elseif($bet=='小'){
				if($val>0 && $val<=5){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{$tempcount=-100;}
				//return $count;
			}elseif($bet=='单'){
				if($val%2!=0){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{$tempcount=-100;}
				//return $count;
			}elseif($bet=='双'){
				if($val%2==0){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{$tempcount=-100;}
				//return $count;
			}elseif($bet=='龙'){
				if($val>$val2 && $val2){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{$tempcount=-100;}
				//return $count;
			}elseif($bet=='虎'){
				if($val2>$val && $val2){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{$tempcount=-100;}
				//return $count;
			}elseif($bet=='冠亚大'){
				if($val>11 && $val<20){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{$tempcount=-100;}
				//return $count;
			}elseif($bet=='冠亚小'){
				if($val>2 && $val<12){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{$tempcount=-100;}
				//return $count;
			}elseif($bet=='冠亚单'){
				if($val%2!=0){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{$tempcount=-100;}
				//return $count;
			}elseif($bet=='冠亚双'){
				if($val%2==0){
					$tempcount+=1;	
					if($tempcount > 2) $count=$tempcount;	
				}else{$tempcount=-100;}
				//return $count;
			}
	}
	return $count;
}
?>