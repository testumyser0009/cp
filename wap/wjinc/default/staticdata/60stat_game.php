<?php
//public final function pk10clcount($gameId){
$datetime=time()-2*24*3600;
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
			$totalnum+=intval($num);
			
			$wsdx_num=substr($num,-1);
			if($temp['wsdx_'.($key+1)]<=25){
				if($k==0){
					$tdcount['wsdx_'.($key+1)]='[["';
				}
				if($tempmnum['wsdx_'.($key+1)]==allcl($gameId, intval($wsdx_num), 'wsdx')){
					if($temp['wsdx_'.($key+1)]==25){
					$tdcount['wsdx_'.($key+1)].=$tempmnum['wsdx_'.($key+1)].'"]]';
					}else{
					$tdcount['wsdx_'.($key+1)].=$tempmnum['wsdx_'.($key+1)].'","';
					$temp['wsdx_'.($key+1)]--;
					}
				}elseif($tempmnum['wsdx_'.($key+1)]){
					if($temp['wsdx_'.($key+1)]==25){
					$tdcount['wsdx_'.($key+1)].=$tempmnum['wsdx_'.($key+1)].'"]]';
					}else{
					$tdcount['wsdx_'.($key+1)].=$tempmnum['wsdx_'.($key+1)].'"],["';
					}
				}
				$temp['wsdx_'.($key+1)]++;
			}
			$tempmnum['wsdx_'.($key+1)]=allcl($gameId, intval($wsdx_num), 'wsdx');
			
			$hsds_num=intval($num[0]) + intval($num[1]);
			if($temp['hsds_'.($key+1)]<=25){
				if($k==0){
					$tdcount['hsds_'.($key+1)]='[["';
				}
				if($tempmnum['hsds_'.($key+1)]==allcl($gameId, intval($hsds_num), 'hsds')){
					if($temp['hsds_'.($key+1)]==25){
					$tdcount['hsds_'.($key+1)].=$tempmnum['hsds_'.($key+1)].'"]]';
					}else{
					$tdcount['hsds_'.($key+1)].=$tempmnum['hsds_'.($key+1)].'","';
					$temp['hsds_'.($key+1)]--;
					}
				}elseif($tempmnum['hsds_'.($key+1)]){
					if($temp['hsds_'.($key+1)]==25){
					$tdcount['hsds_'.($key+1)].=$tempmnum['hsds_'.($key+1)].'"]]';
					}else{
					$tdcount['hsds_'.($key+1)].=$tempmnum['hsds_'.($key+1)].'"],["';
					}
				}
				$temp['hsds_'.($key+1)]++;
			}
			$tempmnum['hsds_'.($key+1)]=allcl($gameId, intval($hsds_num), 'hsds');
			
	}
	
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
	
	$totalnum=substr($totalnum, -1);
	if($temp['total_zwsdx']<=25){
		if($k==0){
			$tdcount['total_zwsdx']='[["';
		}
		if($tempmnum['total_zwsdx']==allcl($gameId, $totalnum, 'total_zwsdx')){
			if($temp['total_zwsdx']==25){
			$tdcount['total_zwsdx'].=$tempmnum['total_zwsdx'].'"]]';
			}else{
			$tdcount['total_zwsdx'].=$tempmnum['total_zwsdx'].'","';
			$temp['total_zwsdx']--;
			}
		}elseif(!is_null($tempmnum['total_zwsdx'])){
			if($temp['total_zwsdx']==25){
			$tdcount['total_zwsdx'].=$tempmnum['total_zwsdx'].'"]]';
			}else{
			$tdcount['total_zwsdx'].=$tempmnum['total_zwsdx'].'"],["';
			}
		}
		$temp['total_zwsdx']++;
	}
	$tempmnum['total_zwsdx']=allcl($gameId, $totalnum, 'total_zwsdx');
	
}

?>