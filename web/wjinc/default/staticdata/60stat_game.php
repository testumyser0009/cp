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
			$totalnum+=intval($num);
			
			$wsdx_num=substr($num,-1);
			if($temp['wsdx_'.($key+1)]<=25){
				if($k==0){
					$tdcount['wsdx_'.($key+1)]='<td>';
				}
				if($tempmnum['wsdx_'.($key+1)]==allcl($gameId, intval($wsdx_num), 'wsdx')){
					if($temp['wsdx_'.($key+1)]==25){
					$tdcount['wsdx_'.($key+1)].=$tempmnum['wsdx_'.($key+1)].'</td>';
					}else{
					$tdcount['wsdx_'.($key+1)].=$tempmnum['wsdx_'.($key+1)].'<br>';
					$temp['wsdx_'.($key+1)]--;
					}
				}elseif($tempmnum['wsdx_'.($key+1)]){
					if($temp['wsdx_'.($key+1)]==25){
					$tdcount['wsdx_'.($key+1)].=$tempmnum['wsdx_'.($key+1)].'</td>';
					}else{
					$tdcount['wsdx_'.($key+1)].=$tempmnum['wsdx_'.($key+1)].'</td><td>';
					}
				}
				$temp['wsdx_'.($key+1)]++;
			}
			$tempmnum['wsdx_'.($key+1)]=allcl($gameId, intval($wsdx_num), 'wsdx');
			
			$hsds_num=intval($num[0]) + intval($num[1]);
			if($temp['hsds_'.($key+1)]<=25){
				if($k==0){
					$tdcount['hsds_'.($key+1)]='<td>';
				}
				if($tempmnum['hsds_'.($key+1)]==allcl($gameId, intval($hsds_num), 'hsds')){
					if($temp['hsds_'.($key+1)]==25){
					$tdcount['hsds_'.($key+1)].=$tempmnum['hsds_'.($key+1)].'</td>';
					}else{
					$tdcount['hsds_'.($key+1)].=$tempmnum['hsds_'.($key+1)].'<br>';
					$temp['hsds_'.($key+1)]--;
					}
				}elseif($tempmnum['hsds_'.($key+1)]){
					if($temp['hsds_'.($key+1)]==25){
					$tdcount['hsds_'.($key+1)].=$tempmnum['hsds_'.($key+1)].'</td>';
					}else{
					$tdcount['hsds_'.($key+1)].=$tempmnum['hsds_'.($key+1)].'</td><td>';
					}
				}
				$temp['hsds_'.($key+1)]++;
			}
			$tempmnum['hsds_'.($key+1)]=allcl($gameId, intval($hsds_num), 'hsds');
			
	}
	//$totalnum=intval($kj[0])+intval($kj[1]);
	$vala=intval($kj[0]);
	$val8=intval($kj[7]);
	if($temp['lh1']<=25){
		if($k==0){
			$tdcount['lh1']='<td>';
		}
		if($tempmnum['lh1']==gdklsflh($vala, $val8, 'lh1')){
			if($temp['lh1']==25){
			$tdcount['lh1'].=$tempmnum['lh1'].'</td>';
			}else{
			$tdcount['lh1'].=$tempmnum['lh1'].'<br>';
			$temp['lh1']--;
			}
		}elseif($tempmnum['lh1']){
			if($temp['lh1']==25){
			$tdcount['lh1'].=$tempmnum['lh1'].'</td>';
			}else{
			$tdcount['lh1'].=$tempmnum['lh1'].'</td><td>';
			}
		}
		$temp['lh1']++;
	}
	$tempmnum['lh1']=gdklsflh($vala, $val8, 'lh1');

	$val2=intval($kj[1]);
	$val7=intval($kj[6]);
	if($temp['lh2']<=25){
		if($k==0){
			$tdcount['lh2']='<td>';
		}
		if($tempmnum['lh2']==gdklsflh($val2, $val7, 'lh2')){
			if($temp['lh2']==25){
			$tdcount['lh2'].=$tempmnum['lh2'].'</td>';
			}else{
			$tdcount['lh2'].=$tempmnum['lh2'].'<br>';
			$temp['lh2']--;
			}
		}elseif($tempmnum['lh2']){
			if($temp['lh2']==25){
			$tdcount['lh2'].=$tempmnum['lh2'].'</td>';
			}else{
			$tdcount['lh2'].=$tempmnum['lh2'].'</td><td>';
			}
		}
		$temp['lh2']++;
	}
	$tempmnum['lh2']=gdklsflh($val2, $val7, 'lh2');

	$val3=intval($kj[2]);
	$val6=intval($kj[5]);
	if($temp['lh3']<=25){
		if($k==0){
			$tdcount['lh3']='<td>';
		}
		if($tempmnum['lh3']==gdklsflh($val3, $val6, 'lh3')){
			if($temp['lh3']==25){
			$tdcount['lh3'].=$tempmnum['lh3'].'</td>';
			}else{
			$tdcount['lh3'].=$tempmnum['lh3'].'<br>';
			$temp['lh3']--;
			}
		}elseif($tempmnum['lh3']){
			if($temp['lh3']==25){
			$tdcount['lh3'].=$tempmnum['lh3'].'</td>';
			}else{
			$tdcount['lh3'].=$tempmnum['lh3'].'</td><td>';
			}
		}
		$temp['lh3']++;
	}
	$tempmnum['lh3']=gdklsflh($val3, $val6, 'lh3');

	$val4=intval($kj[3]);
	$val5=intval($kj[4]);
	if($temp['lh4']<=25){
		if($k==0){
			$tdcount['lh3']='<td>';
		}
		if($tempmnum['lh4']==gdklsflh($val4, $val5, 'lh4')){
			if($temp['lh4']==25){
			$tdcount['lh4'].=$tempmnum['lh4'].'</td>';
			}else{
			$tdcount['lh4'].=$tempmnum['lh4'].'<br>';
			$temp['lh4']--;
			}
		}elseif($tempmnum['lh4']){
			if($temp['lh4']==25){
			$tdcount['lh4'].=$tempmnum['lh4'].'</td>';
			}else{
			$tdcount['lh4'].=$tempmnum['lh4'].'</td><td>';
			}
		}
		$temp['lh4']++;
	}
	$tempmnum['lh4']=gdklsflh($val4, $val5, 'lh4');
	
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
	
	$totalnum=substr($totalnum, -1);
	if($temp['total_zwsdx']<=25){
		if($k==0){
			$tdcount['total_zwsdx']='<td>';
		}
		if($tempmnum['total_zwsdx']==allcl($gameId, $totalnum, 'total_zwsdx')){
			if($temp['total_zwsdx']==25){
			$tdcount['total_zwsdx'].=$tempmnum['total_zwsdx'].'</td>';
			}else{
			$tdcount['total_zwsdx'].=$tempmnum['total_zwsdx'].'<br>';
			$temp['total_zwsdx']--;
			}
		}elseif($tempmnum['total_zwsdx']){
			if($temp['total_zwsdx']==25){
			$tdcount['total_zwsdx'].=$tempmnum['total_zwsdx'].'</td>';
			}else{
			$tdcount['total_zwsdx'].=$tempmnum['total_zwsdx'].'</td><td>';
			}
		}
		$temp['total_zwsdx']++;
	}
	$tempmnum['total_zwsdx']=allcl($gameId, $totalnum, 'total_zwsdx');
	
}

?>