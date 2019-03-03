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
	foreach($kj as $key => $num){
			$tdcount['count_n_'.($key+1).'_'.intval($num)]+=1;
			if($temp['nums_'.($key+1)]<=25){
				if($k==0){
					$tdcount['nums_'.($key+1)]='<td>';
				}
				if($tempmnum['nums_'.($key+1)]==intval($num)){
					if($temp['nums_'.($key+1)]==25){
					$tdcount['nums_'.($key+1)].=$tempmnum['nums_'.($key+1)].'</td>';
					}else{
					$tdcount['nums_'.($key+1)].=$tempmnum['nums_'.($key+1)].'<br>';
					$temp['nums_'.($key+1)]--;
					}
				}elseif($tempmnum['nums_'.($key+1)]){
					if($temp['nums_'.($key+1)]==25){
					$tdcount['nums_'.($key+1)].=$tempmnum['nums_'.($key+1)].'</td>';
					}else{
					$tdcount['nums_'.($key+1)].=$tempmnum['nums_'.($key+1)].'</td><td>';
					}
				}
				$temp['nums_'.($key+1)]++;
			}
			
			if($temp['size_'.($key+1)]<=25){
				if($k==0){
					$tdcount['size_'.($key+1)]='<td>';
				}
				if($tempmnum['size_'.($key+1)]==allcl($gameId, intval($num), 'size')){
					if($temp['size_'.($key+1)]==25){
					$tdcount['size_'.($key+1)].=$tempmnum['size_'.($key+1)].'</td>';
					}else{
					$tdcount['size_'.($key+1)].=$tempmnum['size_'.($key+1)].'<br>';
					$temp['size_'.($key+1)]--;
					}
				}elseif($tempmnum['size_'.($key+1)]){
					if($temp['size_'.($key+1)]==25){
					$tdcount['size_'.($key+1)].=$tempmnum['size_'.($key+1)].'</td>';
					}else{
					$tdcount['size_'.($key+1)].=$tempmnum['size_'.($key+1)].'</td><td>';
					}
				}
				$temp['size_'.($key+1)]++;
			}
			
			if($temp['firstsd_'.($key+1)]<=25){
				if($k==0){
					$tdcount['firstsd_'.($key+1)]='<td>';
				}
				if($tempmnum['firstsd_'.($key+1)]==allcl($gameId, intval($num), 'firstsd')){
					if($temp['firstsd_'.($key+1)]==25){
					$tdcount['firstsd_'.($key+1)].=$tempmnum['firstsd_'.($key+1)].'</td>';
					}else{
					$tdcount['firstsd_'.($key+1)].=$tempmnum['firstsd_'.($key+1)].'<br>';
					$temp['firstsd_'.($key+1)]--;
					}
				}elseif($tempmnum['firstsd_'.($key+1)]){
					if($temp['firstsd_'.($key+1)]==25){
					$tdcount['firstsd_'.($key+1)].=$tempmnum['firstsd_'.($key+1)].'</td>';
					}else{
					$tdcount['firstsd_'.($key+1)].=$tempmnum['firstsd_'.($key+1)].'</td><td>';
					}
				}
				$temp['firstsd_'.($key+1)]++;
			}
			
			$tempmnum['nums_'.($key+1)]=intval($num);
			$tempmnum['size_'.($key+1)]=allcl($gameId, intval($num), 'size');
			$tempmnum['firstsd_'.($key+1)]=allcl($gameId, intval($num), 'firstsd');
	}
	$gynum=intval($kj[0])+intval($kj[1]);
	if($temp['gy_nums']<=25){
		if($k==0){
			$tdcount['gy_nums']='<td>';
		}
		if($tempmnum['gy_nums']==$gynum){
			if($temp['gy_nums']==25){
			$tdcount['gy_nums'].=$tempmnum['gy_nums'].'</td>';
			}else{
			$tdcount['gy_nums'].=$tempmnum['gy_nums'].'<br>';
			$temp['gy_nums']--;
			}
		}elseif($tempmnum['gy_nums']){
			if($temp['gy_nums']==25){
			$tdcount['gy_nums'].=$tempmnum['gy_nums'].'</td>';
			}else{
			$tdcount['gy_nums'].=$tempmnum['gy_nums'].'</td><td>';
			}
		}
		$temp['gy_nums']++;
	}
	$tempmnum['gy_nums']=$gynum;
	
	if($temp['gy_size']<=25){
		if($k==0){
			$tdcount['gy_size']='<td>';
		}
		if($tempmnum['gy_size']==allcl($gameId, $gynum, 'gy_size')){
			if($temp['gy_size']==25){
			$tdcount['gy_size'].=$tempmnum['gy_size'].'</td>';
			}else{
			$tdcount['gy_size'].=$tempmnum['gy_size'].'<br>';
			$temp['gy_size']--;
			}
		}elseif($tempmnum['gy_size']){
			if($temp['gy_size']==25){
			$tdcount['gy_size'].=$tempmnum['gy_size'].'</td>';
			}else{
			$tdcount['gy_size'].=$tempmnum['gy_size'].'</td><td>';
			}
		}
		$temp['gy_size']++;
	}
	$tempmnum['gy_size']=allcl($gameId, $gynum, 'gy_size');
	
	if($temp['gy_firstsd']<=25){
		if($k==0){
			$tdcount['gy_firstsd']='<td>';
		}
		if($tempmnum['gy_firstsd']==allcl($gameId, $gynum, 'gy_firstsd')){
			if($temp['gy_firstsd']==25){
			$tdcount['gy_firstsd'].=$tempmnum['gy_firstsd'].'</td>';
			}else{
			$tdcount['gy_firstsd'].=$tempmnum['gy_firstsd'].'<br>';
			$temp['gy_firstsd']--;
			}
		}elseif($tempmnum['gy_firstsd']){
			if($temp['gy_firstsd']==25){
			$tdcount['gy_firstsd'].=$tempmnum['gy_firstsd'].'</td>';
			}else{
			$tdcount['gy_firstsd'].=$tempmnum['gy_firstsd'].'</td><td>';
			}
		}
		$temp['gy_firstsd']++;
	}
	$tempmnum['gy_firstsd']=allcl($gameId, $gynum, 'gy_firstsd');
	
}
	//return $tdcount;
//}	

?>