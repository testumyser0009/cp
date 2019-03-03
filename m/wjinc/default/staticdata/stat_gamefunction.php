<?php
function pk10sddx($val, $bet){
	if($bet=='size'){
		if($val>=6 && $val<11){
			return '大';
		}elseif($val>0 && $val<=5){
			return '小';
		}
	}elseif($bet=='firstsd'){
		if($val%2!=0){
			return '单';
		}elseif($val%2==0){
			return '双';
		}
	}elseif($bet=='gy_size'){
		if($val>11 && $val<20){
			return '大';
		}elseif($val>2 && $val<12){
			return '小';
		}
	}elseif($bet=='gy_firstsd'){
		if($val%2!=0){
			return '单';
		}elseif($val%2==0){
			return '双';
		}
	}

}

function cqsscsddx($val, $bet){
        if($bet=='size'){
            //号码为0到9
            if($val>=5 && $val<=9){
            return '大';
       		}elseif($val>=0 && $val<=4){
            return '小';
			}
        }elseif($bet=='firstsd'){
            if($val%2!=0){
            return '单';
			}elseif($val%2==0){
			return '双';
			}
		}elseif($bet=='total_size'){
			if($val>=0 && $val<23){
			return '小';
        	}elseif($val>22){
			return '大';
			}
        }elseif($bet=='total_firstsd'){
			if($val%2==0){
			return '双';
			}elseif($val%2!=0){
			return '单';
			}
        }
}

function cqssclhh($vala, $val5, $bet){
	if($bet=='lhh'){
		if($vala>$val5){
		return '龙';
		}elseif($val5>$vala){
		return '虎';
		}elseif($vala==$val5){
		return '和';
		}
	}
}

function gdklsflh($vala, $val5, $lh=null){
	if($vala>$val5){
	return '龙';
	}elseif($val5>$vala){
	return '虎';
	}
}

function gd11x5lh($vala, $val5, $lh=null){
	if($vala>$val5){
	return '龙';
	}elseif($val5>$vala){
	return '虎';
	}
}

function gdklsf_zhonghe($val, $bet){
        if($bet=='size'){
            if($val>10 && $val<21){
            return '大';
       		}elseif($val>0 && $val<11){
            return '小';
			}
        }elseif($bet=='firstsd'){
            if($val%2!=0){
            return '单';
			}elseif($val%2==0){
			return '双';
			}
		}elseif($bet=='total_size'){
			if($val>35 && $val<84){
			return '小';
        	}elseif($val>84 && $val<133){
			return '大';
			}
        }elseif($bet=='total_zwsdx'){
			if($val<5){
			return '小';
        	}elseif($val>4){
			return '大';
			}
        }elseif($bet=='total_firstsd'){
			if($val%2==0){
			return '双';
			}elseif($val%2!=0){
			return '单';
			}
        }elseif($bet=='wsdx'){
			if($val<5){
			return '小';
        	}elseif($val>4){
			return '大';
			}
        }elseif($bet=='hsds'){
            if($val%2!=0){
            return '单';
			}elseif($val%2==0){
			return '双';
			}
		}
}

function bjkl8sddx($kjhe, $bet){
	if($bet=='total_size'){
		if($kjhe>810){
			return '大';
		}elseif($kjhe<810){
			return '小';
		}elseif($kjhe==810){
			return '810';
		}
	}elseif($bet=='total_firstsd'){
		if($kjhe%2!=0){
			return '单';
		}elseif($kjhe%2==0){
			return '双';
		}
	}elseif($bet=='wx'){
		if($kjhe>=210 && $kjhe<=695){
			return '金';
		}elseif($kjhe>=696 && $kjhe<=763){
			return '木';
		}elseif($kjhe>=764 && $kjhe<=855){
			return '水';
		}elseif($kjhe>=856 && $kjhe<=923){
			return '火';
		}elseif($kjhe>=924 && $kjhe<=1410){
			return '土';
		}
	}
}

function GD11X5ZH($val, $bet){
	if($bet=='size'){
		if($val>=6 && $val<11){
		return '大';
		}elseif($val>0 && $val<=5){
		return '小';
		}else{
		return '和';
		}
	}elseif($bet=='firstsd'){
		if($val%2!=0 && $val != 11){
		return '单';
		}elseif($val%2==0 && $val != 11){
		return '双';
		}else{
		return '和';
		}
	}elseif($bet=='total_size'){
		if($val>30){
		return '大';
		}elseif($val<30){
		return '小';
		}elseif($val==30){
		return '和';
		}
	}elseif($bet=='total_firstsd'){
		if($val%2!=0){
		return '单';
		}elseif($val%2==0){
		return '双';
		}
	}elseif($bet=='zhwsdx'){
		if($val>4){
		return '大';
		}elseif($val<5){
		return '小';
		}
	}
}
?>