<?php
//public final function pk10clcount($gameId){
$datetime=time()-1*24*3600;
$clcount=$this->getRows("select data from {$this->prename}data where type={$gameId} and time>={$datetime} order by number desc limit 200");
//var_dump($clcount);
$tdcount=array();
$tempmnum=array();
$i=0;
$temp=array();
foreach($clcount as $k => $var){
	$kj=explode(',',$var['data']);
	$totalnum=0;
	$qhhnuma=$qhhnumb=0;
	$dannum=$shuannum=0;
	foreach($kj as $key => $num){			
			$totalnum+=intval($num);
			if(intval($num)>=1 && intval($num) <=40){
				$qhhnuma+=1;
			}elseif(intval($num)>=41 && intval($num) <=80){
				$qhhnumb+=1;
			}
			//单双个数计算
			if(intval($num)%2 !=0){
				$dannum+=1;
			}else{
				$shuannum+=1;
			}
	}	
	
	if($qhhnuma > $qhhnumb){
		$qhhnum='前';
	}elseif($qhhnuma < $qhhnumb){
		$qhhnum='后';
	}elseif($qhhnuma == $qhhnumb && $qhhnuma){
		$qhhnum='和';
	}
	
	if($dannum > $shuannum){
		$dshnum='单';
	}elseif($dannum < $shuannum){
		$dshnum='双';
	}elseif($dshnum == $shuannum && $dshnum){
		$dshnum='和';
	}

	if($temp['dsh']<=25){
		if($k==0){
			$tdcount['dsh']='[["';
		}
		if($tempmnum['dsh']==$dshnum){
			if($temp['dsh']==25){
			$tdcount['dsh'].=$tempmnum['dsh'].'"]]';
			}else{
			$tdcount['dsh'].=$tempmnum['dsh'].'","';
			$temp['dsh']--;
			}
		}elseif($tempmnum['dsh']){
			if($temp['dsh']==25){
			$tdcount['dsh'].=$tempmnum['dsh'].'"]]';
			}else{
			$tdcount['dsh'].=$tempmnum['dsh'].'"],["';
			}
		}
		$temp['dsh']++;
	}
	$tempmnum['dsh']=$dshnum;

	if($temp['qhh']<=25){
		if($k==0){
			$tdcount['qhh']='[["';
		}
		if($tempmnum['qhh']==$qhhnum){
			if($temp['qhh']==25){
			$tdcount['qhh'].=$tempmnum['qhh'].'"]]';
			}else{
			$tdcount['qhh'].=$tempmnum['qhh'].'","';
			$temp['qhh']--;
			}
		}elseif($tempmnum['qhh']){
			if($temp['qhh']==25){
			$tdcount['qhh'].=$tempmnum['qhh'].'"]]';
			}else{
			$tdcount['qhh'].=$tempmnum['qhh'].'"],["';
			}
		}
		$temp['qhh']++;
	}
	$tempmnum['qhh']=$qhhnum;

	if($temp['total']<=25){
		if($k==0){
			$tdcount['total']='[["';
		}
		if($tempmnum['total']==$totalnum){
			if($temp['total']==25){
			$tdcount['total'].=$tempmnum['total'].'"]]';
			}else{
			$tdcount['total'].=$tempmnum['total'].'","';
			$temp['total']--;
			}
		}elseif($tempmnum['total']){
			if($temp['total']==25){
			$tdcount['total'].=$tempmnum['total'].'"]]';
			}else{
			$tdcount['total'].=$tempmnum['total'].'"],["';
			}
		}
		$temp['total']++;
	}
	$tempmnum['total']=$totalnum;
	
	if($temp['wx']<=25){
		if($k==0){
			$tdcount['wx']='[["';
		}
		if($tempmnum['wx']==allcl($gameId, $totalnum, 'wx')){
			if($temp['wx']==25){
			$tdcount['wx'].=$tempmnum['wx'].'"]]';
			}else{
			$tdcount['wx'].=$tempmnum['wx'].'","';
			$temp['wx']--;
			}
		}elseif($tempmnum['wx']){
			if($temp['wx']==25){
			$tdcount['wx'].=$tempmnum['wx'].'"]]';
			}else{
			$tdcount['wx'].=$tempmnum['wx'].'"],["';
			}
		}
		$temp['wx']++;
	}
	$tempmnum['wx']=allcl($gameId, $totalnum, 'wx');

	if($temp['total_size']<=25){
		if($k==0){
			$tdcount['total_size']='[["';
		}
		if($tempmnum['total_size']==allcl($gameId, $totalnum, 'total_size')){
			if($temp['total_size']==25){
			$tdcount['total_size'].=$tempmnum['total_size'].'"]]';
			}else{
			$tdcount['total_size'].=$tempmnum['total_size'].'","';
			$temp['total_size']--;
			}
		}elseif($tempmnum['total_size']){
			if($temp['total_size']==25){
			$tdcount['total_size'].=$tempmnum['total_size'].'"]]';
			}else{
			$tdcount['total_size'].=$tempmnum['total_size'].'"],["';
			}
		}
		$temp['total_size']++;
	}
	$tempmnum['total_size']=allcl($gameId, $totalnum, 'total_size');
	
	if($temp['total_firstsd']<=25){
		if($k==0){
			$tdcount['total_firstsd']='[["';
		}
		if($tempmnum['total_firstsd']==allcl($gameId, $totalnum, 'total_firstsd')){
			if($temp['total_firstsd']==25){
			$tdcount['total_firstsd'].=$tempmnum['total_firstsd'].'"]]';
			}else{
			$tdcount['total_firstsd'].=$tempmnum['total_firstsd'].'","';
			$temp['total_firstsd']--;
			}
		}elseif($tempmnum['total_firstsd']){
			if($temp['total_firstsd']==25){
			$tdcount['total_firstsd'].=$tempmnum['total_firstsd'].'"]]';
			}else{
			$tdcount['total_firstsd'].=$tempmnum['total_firstsd'].'"],["';
			}
		}
		$temp['total_firstsd']++;
	}
	$tempmnum['total_firstsd']=allcl($gameId, $totalnum, 'total_firstsd');
	
}

?>