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
			$tdcount['dsh']='<td>';
		}
		if($tempmnum['dsh']==$dshnum){
			if($temp['dsh']==25){
			$tdcount['dsh'].=$tempmnum['dsh'].'</td>';
			}else{
			$tdcount['dsh'].=$tempmnum['dsh'].'<br>';
			$temp['dsh']--;
			}
		}elseif($tempmnum['dsh']){
			if($temp['dsh']==25){
			$tdcount['dsh'].=$tempmnum['dsh'].'</td>';
			}else{
			$tdcount['dsh'].=$tempmnum['dsh'].'</td><td>';
			}
		}
		$temp['dsh']++;
	}
	$tempmnum['dsh']=$dshnum;

	if($temp['qhh']<=25){
		if($k==0){
			$tdcount['qhh']='<td>';
		}
		if($tempmnum['qhh']==$qhhnum){
			if($temp['qhh']==25){
			$tdcount['qhh'].=$tempmnum['qhh'].'</td>';
			}else{
			$tdcount['qhh'].=$tempmnum['qhh'].'<br>';
			$temp['qhh']--;
			}
		}elseif($tempmnum['qhh']){
			if($temp['qhh']==25){
			$tdcount['qhh'].=$tempmnum['qhh'].'</td>';
			}else{
			$tdcount['qhh'].=$tempmnum['qhh'].'</td><td>';
			}
		}
		$temp['qhh']++;
	}
	$tempmnum['qhh']=$qhhnum;

	if($temp['total']<=25){
		if($k==0){
			$tdcount['total']='<td>';
		}
		if($tempmnum['total']==$totalnum){
			if($temp['total']==25){
			$tdcount['total'].=$tempmnum['total'].'</td>';
			}else{
			$tdcount['total'].=$tempmnum['total'].'<br>';
			$temp['total']--;
			}
		}elseif($tempmnum['total']){
			if($temp['total']==25){
			$tdcount['total'].=$tempmnum['total'].'</td>';
			}else{
			$tdcount['total'].=$tempmnum['total'].'</td><td>';
			}
		}
		$temp['total']++;
	}
	$tempmnum['total']=$totalnum;
	
	if($temp['wx']<=25){
		if($k==0){
			$tdcount['wx']='<td>';
		}
		if($tempmnum['wx']==allcl($gameId, $totalnum, 'wx')){
			if($temp['wx']==25){
			$tdcount['wx'].=$tempmnum['wx'].'</td>';
			}else{
			$tdcount['wx'].=$tempmnum['wx'].'<br>';
			$temp['wx']--;
			}
		}elseif($tempmnum['wx']){
			if($temp['wx']==25){
			$tdcount['wx'].=$tempmnum['wx'].'</td>';
			}else{
			$tdcount['wx'].=$tempmnum['wx'].'</td><td>';
			}
		}
		$temp['wx']++;
	}
	$tempmnum['wx']=allcl($gameId, $totalnum, 'wx');

	if($temp['total_size']<=25){
		if($k==0){
			$tdcount['total_size']='<td>';
		}
		if($tempmnum['total_size']==allcl($gameId, $totalnum, 'total_size')){
			if($temp['total_size']==25){
			$tdcount['total_size'].=$tempmnum['total_size'].'</td>';
			}else{
			$tdcount['total_size'].=$tempmnum['total_size'].'<br>';
			$temp['total_size']--;
			}
		}elseif($tempmnum['total_size']){
			if($temp['total_size']==25){
			$tdcount['total_size'].=$tempmnum['total_size'].'</td>';
			}else{
			$tdcount['total_size'].=$tempmnum['total_size'].'</td><td>';
			}
		}
		$temp['total_size']++;
	}
	$tempmnum['total_size']=allcl($gameId, $totalnum, 'total_size');
	
	if($temp['total_firstsd']<=25){
		if($k==0){
			$tdcount['total_firstsd']='<td>';
		}
		if($tempmnum['total_firstsd']==allcl($gameId, $totalnum, 'total_firstsd')){
			if($temp['total_firstsd']==25){
			$tdcount['total_firstsd'].=$tempmnum['total_firstsd'].'</td>';
			}else{
			$tdcount['total_firstsd'].=$tempmnum['total_firstsd'].'<br>';
			$temp['total_firstsd']--;
			}
		}elseif($tempmnum['total_firstsd']){
			if($temp['total_firstsd']==25){
			$tdcount['total_firstsd'].=$tempmnum['total_firstsd'].'</td>';
			}else{
			$tdcount['total_firstsd'].=$tempmnum['total_firstsd'].'</td><td>';
			}
		}
		$temp['total_firstsd']++;
	}
	$tempmnum['total_firstsd']=allcl($gameId, $totalnum, 'total_firstsd');
	
}

?>