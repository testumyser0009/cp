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
			//$tdcount['count_n_'.($key+1).'_'.intval($num)]+=1;
			if($temp['nums_'.($key+1)]<=25){
				if($k==0){
					$tdcount['nums_'.($key+1)]='[["';
				}
				if($tempmnum['nums_'.($key+1)]==intval($num)){
					if($temp['nums_'.($key+1)]==25){
					$tdcount['nums_'.($key+1)].=$tempmnum['nums_'.($key+1)].'"]]';
					}else{
					$tdcount['nums_'.($key+1)].=$tempmnum['nums_'.($key+1)].'","';
					$temp['nums_'.($key+1)]--;
					}
				}elseif($tempmnum['nums_'.($key+1)]){
					if($temp['nums_'.($key+1)]==25){
					$tdcount['nums_'.($key+1)].=$tempmnum['nums_'.($key+1)].'"]]';
					}else{
					$tdcount['nums_'.($key+1)].=$tempmnum['nums_'.($key+1)].'"],["';
					}
				}
				$temp['nums_'.($key+1)]++;
			}
			
			if($temp['size_'.($key+1)]<=25){
				if($k==0){
					$tdcount['size_'.($key+1)]='[["';
				}
				if($tempmnum['size_'.($key+1)]==allcl($gameId, intval($num), 'size')){
					if($temp['size_'.($key+1)]==25){
					$tdcount['size_'.($key+1)].=$tempmnum['size_'.($key+1)].'"]]';
					}else{
					$tdcount['size_'.($key+1)].=$tempmnum['size_'.($key+1)].'","';
					$temp['size_'.($key+1)]--;
					}
				}elseif($tempmnum['size_'.($key+1)]){
					if($temp['size_'.($key+1)]==25){
					$tdcount['size_'.($key+1)].=$tempmnum['size_'.($key+1)].'"]]';
					}else{
					$tdcount['size_'.($key+1)].=$tempmnum['size_'.($key+1)].'"],["';
					}
				}
				$temp['size_'.($key+1)]++;
			}
			
			if($temp['firstsd_'.($key+1)]<=25){
				if($k==0){
					$tdcount['firstsd_'.($key+1)]='[["';
				}
				if($tempmnum['firstsd_'.($key+1)]==allcl($gameId, intval($num), 'firstsd')){
					if($temp['firstsd_'.($key+1)]==25){
					$tdcount['firstsd_'.($key+1)].=$tempmnum['firstsd_'.($key+1)].'"]]';
					}else{
					$tdcount['firstsd_'.($key+1)].=$tempmnum['firstsd_'.($key+1)].'","';
					$temp['firstsd_'.($key+1)]--;
					}
				}elseif($tempmnum['firstsd_'.($key+1)]){
					if($temp['firstsd_'.($key+1)]==25){
					$tdcount['firstsd_'.($key+1)].=$tempmnum['firstsd_'.($key+1)].'"]]';
					}else{
					$tdcount['firstsd_'.($key+1)].=$tempmnum['firstsd_'.($key+1)].'"],["';
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
			$tdcount['gy_nums']='[["';
		}
		if($tempmnum['gy_nums']==$gynum){
			if($temp['gy_nums']==25){
			$tdcount['gy_nums'].=$tempmnum['gy_nums'].'"]]';
			}else{
			$tdcount['gy_nums'].=$tempmnum['gy_nums'].'","';
			$temp['gy_nums']--;
			}
		}elseif($tempmnum['gy_nums']){
			if($temp['gy_nums']==25){
			$tdcount['gy_nums'].=$tempmnum['gy_nums'].'"]]';
			}else{
			$tdcount['gy_nums'].=$tempmnum['gy_nums'].'"],["';
			}
		}
		$temp['gy_nums']++;
	}
	$tempmnum['gy_nums']=$gynum;
	
	if($temp['gy_size']<=25){
		if($k==0){
			$tdcount['gy_size']='[["';
		}
		if($tempmnum['gy_size']==allcl($gameId, $gynum, 'gy_size')){
			if($temp['gy_size']==25){
			$tdcount['gy_size'].=$tempmnum['gy_size'].'"]]';
			}else{
			$tdcount['gy_size'].=$tempmnum['gy_size'].'","';
			$temp['gy_size']--;
			}
		}elseif($tempmnum['gy_size']){
			if($temp['gy_size']==25){
			$tdcount['gy_size'].=$tempmnum['gy_size'].'"]]';
			}else{
			$tdcount['gy_size'].=$tempmnum['gy_size'].'"],["';
			}
		}
		$temp['gy_size']++;
	}
	$tempmnum['gy_size']=allcl($gameId, $gynum, 'gy_size');
	
	if($temp['gy_firstsd']<=25){
		if($k==0){
			$tdcount['gy_firstsd']='[["';
		}
		if($tempmnum['gy_firstsd']==allcl($gameId, $gynum, 'gy_firstsd')){
			if($temp['gy_firstsd']==25){
			$tdcount['gy_firstsd'].=$tempmnum['gy_firstsd'].'"]]';
			}else{
			$tdcount['gy_firstsd'].=$tempmnum['gy_firstsd'].'","';
			$temp['gy_firstsd']--;
			}
		}elseif($tempmnum['gy_firstsd']){
			if($temp['gy_firstsd']==25){
			$tdcount['gy_firstsd'].=$tempmnum['gy_firstsd'].'"]]';
			}else{
			$tdcount['gy_firstsd'].=$tempmnum['gy_firstsd'].'"],["';
			}
		}
		$temp['gy_firstsd']++;
	}
	$tempmnum['gy_firstsd']=allcl($gameId, $gynum, 'gy_firstsd');
	
}
	//return $tdcount;
//}	

?>