/**
 * 算法模型
 *　func(betData, kjData, betWeiShu)
 *  count = -1 为和局
 */
var LHC = {
	zodiacArr : [ "鼠", "牛", "虎", "兔", "龙", "蛇", "马", "羊", "猴", "鸡", "狗", "猪" ]
};
var LHCXX = {
	HONG_NUMS : [ 1, 2, 7, 8, 12, 13, 18, 19, 23, 24, 29, 30, 34, 35, 40, 45, 46 ],
	LANG_NUMS : [ 3, 4, 9, 10, 14, 15, 20, 25, 26, 31, 36, 37, 41, 42, 47, 48 ],
	LV_NUMS : [ 5, 6, 11, 16, 17, 21, 22, 27, 28, 32, 33, 38, 39, 43, 44, 49 ],
	
	SX_TIAN : [ '兔', '马', '猴', '猪', '牛', '龙' ],
	SX_DI : [ '蛇', '羊', '鸡', '狗', '鼠', '虎' ],
	
	SX_QIAN : [ '鼠', '牛', '虎', '兔', '龙', '蛇' ],
	SX_HOU : [ '马', '羊', '猴', '鸡', '狗', '猪' ],
	
	SX_JIA : [ '羊', '马', '牛', '猪', '狗', '鸡' ],
	SX_YE : [ '猴', '蛇', '龙', '兔', '虎', '鼠' ]
};
var SX_NUMS = {
	"1" : [ 1, 13, 25, 37, 49 ],
	"2" : [ 2, 14, 26, 38 ],
	"3" : [ 3, 15, 27, 39 ],
	"4" : [ 4, 16, 28, 40 ],
	"5" : [ 5, 17, 29, 41 ],
	"6" : [ 6, 18, 30, 42 ],
	"7" : [ 7, 19, 31, 43 ],
	"8" : [ 8, 20, 32, 44 ],
	"9" : [ 9, 21, 33, 45 ],
	"10" : [ 10, 22, 34, 46 ],
	"11" : [ 11, 23, 35, 47 ],
	"12" : [ 12, 24, 36, 48 ]
};
//数组去重console.log(outRepeat([2,5,"猴","猴",2,5,'猴']));
//console.log(ArrayContains(LHCXX.SX_DI, getZodica(12, "猴")));
//betInfo前面不带0
exports.LHCZH=function(bet, kj, Groupname, betInfo, animalsYear, alias, lhcWxJin, lhcWxMu, lhcWxShui, lhcWxHuo, lhcWxTu){
	var count=0;	 
	if(kj.split(',').length!=7){
		return count;
	}
	if(Groupname=='特码'){
		return lhctm(bet, kj, Groupname, betInfo, animalsYear);
	}else if(Groupname=='特肖'){
		return lhctx(bet, kj, Groupname, betInfo, animalsYear);
	}else if(Groupname=='五行'){
		return lhcwx(bet, kj, lhcWxJin, lhcWxMu, lhcWxShui, lhcWxHuo, lhcWxTu);
	}else if(Groupname=='合肖'){
		return lhchx(bet, kj, Groupname, betInfo, animalsYear);
	}else if(Groupname=='头尾数'){
		return lhctws(bet, kj, Groupname, betInfo, animalsYear);
	}else if(Groupname=='平特一肖尾数'){
		return lhcptyxws(bet, kj, Groupname, betInfo, animalsYear);
	}else if(Groupname=='正肖'){
		return lhczx(bet, kj, Groupname, betInfo, animalsYear);	
	}else if(Groupname=='7色波'){
		return lhc7sb(bet, kj, Groupname, betInfo, animalsYear);	
	}else if(Groupname=='总肖'){
		return lhczhongxiao(bet, kj, Groupname, betInfo, animalsYear);	
	}else if(Groupname=='自选不中'){
		return lhczxbz(bet, kj, Groupname, betInfo, animalsYear);	
	}else if(Groupname=='连肖连尾'){
		return lhclxlw(bet, kj, Groupname, betInfo, animalsYear);	
	}else if(Groupname=='连码'){
		return lhclianma(bet, kj, Groupname, betInfo, animalsYear);
	}else if(Groupname=='正码'){
		return lhczm(bet, kj, Groupname, betInfo, animalsYear);
	}else if(Groupname=='正码特'){
		return lhczmt(bet, kj, Groupname, betInfo, animalsYear, alias);
	}else if(Groupname=='色波'){
		return lhcsb(bet, kj, Groupname, betInfo, animalsYear);
	}else if(Groupname=='两面'){
		return lhclm(bet, kj, Groupname, betInfo, animalsYear);
	}		 
	return count;
}

function lhctm(bet, kj, Groupname, betInfo, animalsYear){
	var val = '';
	var val2='';
	var valhe='';
	var kjhe=0;
	var count=0;		
	kj=kj.split(',');	
	val=parseInt(kj[6],10);
	val2=kj[6];
	if(val == parseInt(bet,10) && parseInt(bet,10) >=1 && parseInt(bet,10) <=49){
		count=1;
		return count;
	}
	return count;	
}

function lhctx(bet, kj, Groupname, betInfo, animalsYear){
	var val = '';
	var val2='';
	var valhe='';
	var kjhe=0;
	var count=0;		
	kj=kj.split(',');
	val=parseInt(kj[6],10);
	val=getZodica(val, animalsYear);
	if(val==bet){
		count=1;
		return count;
	}
	return count;	
}

function lhcwx(bet, kj, lhcWxJin, lhcWxMu, lhcWxShui, lhcWxHuo, lhcWxTu){
	var val = '';
	var val2='';
	var valhe='';
	var kjhe=0;
	var count=0;		
	kj=kj.split(',');
	val=parseInt(kj[6],10);
	if(bet=='金'){
		if(ArrayContains(lhcWxJin, val)) count=1;
		return count;
	}else if(bet=='木'){
		if(ArrayContains(lhcWxMu, val)) count=1;
		return count;
	}else if(bet=='水'){
		if(ArrayContains(lhcWxShui, val)) count=1;
		return count;
	}else if(bet=='火'){
		if(ArrayContains(lhcWxHuo, val)) count=1;
		return count;
	}else if(bet=='土'){
		if(ArrayContains(lhcWxTu, val)) count=1;
		return count;
	}
	return count;	
}

function lhchx(bet, kj, Groupname, betInfo, animalsYear){
	var val = '';
	var val2='';
	var valhe='';
	var kjhe=0;
	var count=0;		
	kj=kj.split(',');
	val=parseInt(kj[6],10);
	if(betInfo && bet){
		betInfo=betInfo.split(',');
		if(val !=49 && ArrayContains(betInfo, getZodica(val, animalsYear))){
			count=1;
			return count;
		}
	}
	return count;	
}

function lhctws(bet, kj, Groupname, betInfo, animalsYear){
	var val = '';
	var val2='';
	var valhe='';
	var kjhe=0;
	var count=0;		
	kj=kj.split(',');
	val=kj[6];
	var valtou=parseInt(val[0],10);
	var valwei=parseInt(val[1],10);
	bet=bet.split('');
	if(valtou==parseInt(bet[0],10) && bet[1]=='头'){
		count=1;
		return count;
	}else if(valwei==parseInt(bet[0],10) && bet[1]=='尾'){
		count=1;
		return count;
	}
	return count;	
}

function lhcptyxws(bet, kj, Groupname, betInfo, animalsYear){
	var val = '';
	var val2='';
	var valhe='';
	var kjhe=0;
	var count=0;		
	kj=kj.split(',');
	var betarr=bet.split('');
	var valwei;
	if(betarr.length==2 && betarr[1]=='尾'){
		bet==parseInt(betarr[0],10);
		for(var i=0 in kj){
			valwei=parseInt(kj[i],10);
			if(valwei==bet){
				count=1;
				break;
			}
		}
		return count;
	}else if(betarr.length==1){
		for(var i=0 in kj){
			valwei=getZodica(parseInt(kj[i],10), animalsYear);
			if(valwei==bet){
				count=1;
				break;
			}
		}		
		return count;		
	}
	return count;	
}

function lhczx(bet, kj, Groupname, betInfo, animalsYear){
	var val = '';
	var val2='';
	var valhe='';
	var kjhe=0;
	var count=0;		
	kj=kj.split(',');
	for(var i=0 in kj){
		if(i<6 && getZodica(parseInt(kj[i],10), animalsYear)==bet){
			count+=1;
		}
	}
	if(count>4) count=4;						
	return count;	
}

function lhc7sb(bet, kj, Groupname, betInfo, animalsYear){
	var val = '';
	var val2='';
	var valhe='';
	var kjhe=0;
	var count=0;		
	kj=kj.split(',');
	var HONG_count=0;
	var LANG_count=0;
	var LV_count=0;
	for(var i=0 in kj){
		val=parseInt(kj[i],10);
		if(ArrayContains(LHCXX.HONG_NUMS, val)){
			HONG_count+=1;
		}else if(ArrayContains(LHCXX.LANG_NUMS, val)){
			LANG_count+=1;
		}else if(ArrayContains(LHCXX.LV_NUMS, val)){
			LV_count+=1;
		}
	}	
	if(bet=='红波'){
		if(HONG_count>LANG_count && HONG_count>LV_count) count=1;
		if((HONG_count==3 && HONG_count==LANG_count) || ( LANG_count==3 && LANG_count==LV_count) || (LV_count==3 && HONG_count==LV_count)) count = -1;
		return count;
	}else if(bet=='蓝波'){
		if(LANG_count>HONG_count && LANG_count>LV_count) count=1;
		if((HONG_count==3 && HONG_count==LANG_count) || ( LANG_count==3 && LANG_count==LV_count) || (LV_count==3 && HONG_count==LV_count)) count = -1;
		return count;
	}else if(bet=='绿波'){
		if(LV_count>HONG_count && LV_count>LANG_count) count=1;
		if((HONG_count==3 && HONG_count==LANG_count) || ( LANG_count==3 && LANG_count==LV_count) || (LV_count==3 && HONG_count==LV_count)) count = -1;
		return count;
	}else if(bet=='和局'){
		if((HONG_count==3 && HONG_count==LANG_count) || ( LANG_count==3 && LANG_count==LV_count) || (LV_count==3 && HONG_count==LV_count)) count = 1;
		return count;
	}
	return count;	
}

function lhczhongxiao(bet, kj, Groupname, betInfo, animalsYear){
	var val = '';
	var val2='';
	var valhe='';
	var kjhe=0;
	var count=0;		
	kj=kj.split(',');
	for(var i=0 in kj){
		kj[i]=getZodica(parseInt(kj[i],10), animalsYear);		
	}
	kj=outRepeat(kj);
	var betarr=bet.split('');
	if(betarr.length==2 && betarr[1]=='肖'){
		if(parseInt(betarr[0],10)==kj.length) count=1;
		return count;
	}else if(betarr.length==3 && bet=='总肖单'){
		if(kj.length%2!=0) count=1;
		return count;		
	}else if(betarr.length==3 && bet=='总肖双'){
		if(kj.length%2==0) count=1;
		return count;		
	}
	return count;	
}

function lhczxbz(bet, kj, Groupname, betInfo, animalsYear){
	var val = '';
	var val2='';
	var valhe='';
	var kjhe=0;
	var count=0;		
	kj=kj.split(',');
	betInfo=betInfo.split(',');
	if(parseInt(bet,10)==betInfo.length){
		for(var i=0 in kj){
			for(var j=0 in betInfo){
				if(parseInt(kj[i],10)==parseInt(betInfo[j],10)){
					return count;
				}
			}	
		}
		count=1;
	}
	return count;	
}

function lhclxlw(bet, kj, Groupname, betInfo, animalsYear){
	var val = '';
	var val2='';
	var valhe='';
	var kjhe=0;
	var count=0;		
	kj=kj.split(',');
	betInfo=betInfo.split(',');
	var betarr=bet.split('');
	var ii=0;
	if(betarr.length==3 && betarr[2]=='肖'){
		for(var i=0 in kj){
			val=getZodica(parseInt(kj[i],10), animalsYear);
			for(var j=0 in betInfo){
				if(val==betInfo[j]){
					ii+=1;					
					delete betInfo[j];
					//console.log(val);					
				}
			}		
		}
		if(ii==betInfo.length && ii) count=1;
		return count;
	}else if(betarr.length==3 && betarr[2]=='尾'){
		var valwei='';
		for(var i=0 in kj){
			valwei=kj[i];
			for(var j=0 in betInfo){
				if(parseInt(valwei[1],10)==parseInt(betInfo[j],10)){
					ii+=1;
					delete betInfo[j];
					//console.log(valwei[1]);
				}
			}		
		}
		if(ii==betInfo.length && ii) count=1;
		return count;
	}	
	return count;	
}

function lhclianma(bet, kj, Groupname, betInfo, animalsYear){
	var val = '';
	var val2='';
	var valhe='';
	var kjhe=0;
	var count=0;		
	kj=kj.split(',');
	betInfo=betInfo.split(',');
	//组合复式计算
	if(bet=='三中二中二'){
		betInfo=combine(betInfo, 3);
		//console.log(betInfo);
		for(var i=0 in betInfo){
			var betarr=betInfo[i];
			var xoi=0;
			for(var j=0 in betarr){				
				for(var ii=0 in kj){
					if(ii<6 && parseInt(betarr[j],10)==parseInt(kj[ii],10)){
						xoi++;
					}
				}				
			}
			if(xoi==3){
				//三个全中按5倍算
				count+=5;
			}else if(xoi==2){
				//中两个按1倍算
				count+=1;
			}
		}
		return count;
	}else if(bet=='三全中'){
		betInfo=combine(betInfo, 3);
		for(var i=0 in betInfo){
			var betarr=betInfo[i];
			var xoi=0;
			for(var j=0 in betarr){				
				for(var ii=0 in kj){
					if(ii<6 && parseInt(betarr[j],10)==parseInt(kj[ii],10)){
						xoi++;
					}
				}				
			}
			if(xoi==3){
				count+=1;
			}
		}
		return count;		
	}else if(bet=='二全中'){
		betInfo=combine(betInfo, 2);
		for(var i=0 in betInfo){
			var betarr=betInfo[i];
			var xoi=0;
			for(var j=0 in betarr){				
				for(var ii=0 in kj){
					if(ii<6 && parseInt(betarr[j],10)==parseInt(kj[ii],10)){
						xoi++;
					}
				}				
			}
			if(xoi==2){
				count+=1;
			}
		}
		return count;		
	}else if(bet=='四全中'){
		//四全中默认只有一注,
		betInfo=combine(betInfo, 4);
		for(var i=0 in betInfo){
			var betarr=betInfo[i];
			var xoi=0;
			for(var j=0 in betarr){				
				for(var ii=0 in kj){
					if(ii<6 && parseInt(betarr[j],10)==parseInt(kj[ii],10)){
						xoi++;
					}
				}				
			}
			if(xoi==4){
				count+=1;
			}
		}
		return count;		
	}else if(bet=='二中特中特'){
		betInfo=combine(betInfo, 2);
		val=parseInt(kj[6],10);
		for(var i=0 in betInfo){
			var betarr=betInfo[i];
			var xoi=0;
			for(var j=0 in betarr){				
				for(var ii=0 in kj){
					if(parseInt(betarr[j],10)==parseInt(kj[ii],10)){
						xoi++;
					}
				}				
			}
			if(xoi==2 && ArrayContains(betarr, val)){
				//二中特中特按1倍算
				count+=1;
			}else if(xoi==2 && !ArrayContains(betarr, val)){
				//两个号码为正码按2倍算
				count+=2;
			}
		}
		return count;		
	}else if(bet=='特串'){
		//特串即一个号码为正码另一号码为特码
		betInfo=combine(betInfo, 2);
		val=parseInt(kj[6],10);
		for(var i=0 in betInfo){
			var betarr=betInfo[i];
			var xoi=0;
			for(var j=0 in betarr){				
				for(var ii=0 in kj){
					if(parseInt(betarr[j],10)==parseInt(kj[ii],10)){
						xoi++;
					}
				}				
			}
			if(xoi==2 && ArrayContains(betarr, val)){
				count+=1;
			}
		}
		return count;		
	}
	return count;	
}

function lhczm(bet, kj, Groupname, betInfo, animalsYear){
	var val = '';
	var val2='';
	var valhe='';
	var kjhe=0;
	var count=0;		
	kj=kj.split(',');
	kj.pop();
	if(ArrayContains(kj, bet)){
		count=1;
		return count;
	}
	return count;
}

function lhczmt(bet, kj, Groupname, betInfo, animalsYear, alias){
	var val = '';
	var val2='';
	var valhe='';
	var kjhe=0;
	var count=0;
	kj=kj.split(',');		
	var valwx='';
	if(alias=='正一特'){
		val2=val=kj[0];
	}else if(alias=='正二特'){
		val2=val=kj[1];
	}else if(alias=='正三特'){
		val2=val=kj[2];
	}else if(alias=='正四特'){
		val2=val=kj[3];
	}else if(alias=='正五特'){
		val2=val=kj[4];
	}else if(alias=='正六特'){
		val2=val=kj[5];
	}
	val=parseInt(val,10);
	if(!isNaN(parseInt(bet,10)) && val==parseInt(bet,10)){
		count=1;	
		return count;
	}else if(bet=='大码'){
		if(val>=25 && val<=48) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='小码'){
		if(val>0 && val<=24) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='单码'){
		if(val%2!=0 && val != 49) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='双码'){
		if(val%2==0 && val != 49) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='合大'){
		valhe=parseInt(val2[0],10) + parseInt(val2[1],10);		
		if(valhe>=7 && val != 49) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='合小'){
		valhe=parseInt(val2[0],10) + parseInt(val2[1],10);
		if(valhe<=6 && val != 49) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='合单'){
		valhe=parseInt(val2[0],10) + parseInt(val2[1],10);
		if(valhe%2!=0 && val != 49) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='合双'){
		valhe=parseInt(val2[0],10) + parseInt(val2[1],10);
		if(valhe%2==0 && val != 49) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='尾大'){
		valwx = parseInt(val2[1],10);
		if(valwx>=5 && valwx<=9 && val != 49) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='尾小'){
		valwx = parseInt(val2[1],10);
		if(valwx>=0 && valwx<=4 && val != 49) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='红波'){
		if(ArrayContains(LHCXX.HONG_NUMS, val)) count=1;
		return count;
	}else if(bet=='蓝波'){
		if(ArrayContains(LHCXX.LANG_NUMS, val)) count=1;
		return count;
	}else if(bet=='绿波'){
		if(ArrayContains(LHCXX.LV_NUMS, val)) count=1;
		return count;
	}
	return count;
}

function lhclm(bet, kj, Groupname, betInfo, animalsYear){
	var val = '';
	var val2='';
	var valhe='';
	var kjhe=0;
	var count=0;
	kj=kj.split(',');	
	val=parseInt(kj[6],10);
	val2=kj[6];
	for(var i=0 in kj){
		 kjhe+=parseInt(kj[i],10);
	}
	if(bet=='特大'){
		if(val>=25 && val<=48) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='特小'){
		if(val>0 && val<=24) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='特单'){
		if(val%2!=0 && val != 49) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='特双'){
		if(val%2==0 && val != 49) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='特合大'){
		valhe=parseInt(val2[0],10) + parseInt(val2[1],10);		
		if(valhe>=7 && val != 49) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='特合小'){
		valhe=parseInt(val2[0],10) + parseInt(val2[1],10);
		if(valhe<=6 && val != 49) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='特合单'){
		valhe=parseInt(val2[0],10) + parseInt(val2[1],10);
		if(valhe%2!=0 && val != 49) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='特合双'){
		valhe=parseInt(val2[0],10) + parseInt(val2[1],10);
		if(valhe%2==0 && val != 49) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='特尾大'){
		valwx = parseInt(val2[1],10);
		if(valwx>=5 && valwx<=9 && val != 49) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='特尾小'){
		valwx = parseInt(val2[1],10);
		if(valwx>=0 && valwx<=4 && val != 49) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='特大双'){
		if(val>=25 && val<=48 && val%2==0) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='特小双'){
		if(val>0 && val<=24 && val%2==0) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='特大单'){
		if(val>=25 && val<=48 && val%2!=0) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='特小单'){
		if(val>0 && val<=24 && val%2!=0) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='总和大'){
		if(kjhe>=175) count=1;
		return count;
	}else if(bet=='总和小'){
		if(kjhe<=174 && kjhe>=15) count=1;
		return count;
	}else if(bet=='总和单'){
		if(kjhe%2!=0 && kjhe>=15) count=1;
		return count;
	}else if(bet=='总和双'){
		if(kjhe%2==0 && kjhe>=15) count=1;
		return count;
	}else if(bet=='特天肖'){
		if(ArrayContains(LHCXX.SX_TIAN, getZodica(val, animalsYear))) count=1;
		return count;
	}else if(bet=='特地肖'){
		if(ArrayContains(LHCXX.SX_DI, getZodica(val, animalsYear))) count=1;
		return count;
	}else if(bet=='特前肖'){
		if(ArrayContains(LHCXX.SX_QIAN, getZodica(val, animalsYear))) count=1;
		return count;
	}else if(bet=='特后肖'){
		if(ArrayContains(LHCXX.SX_HOU, getZodica(val, animalsYear))) count=1;
		return count;
	}else if(bet=='特家肖'){
		if(ArrayContains(LHCXX.SX_JIA, getZodica(val, animalsYear))) count=1;
		return count;
	}else if(bet=='特野肖'){
		if(ArrayContains(LHCXX.SX_YE, getZodica(val, animalsYear))) count=1;
		return count;
	}
	return count;	
}

function lhcsb(bet, kj, Groupname, betInfo, animalsYear){
	var val = '';
	var val2='';
	var valhe='';
	var kjhe=0;
	var count=0;
	kj=kj.split(',');
	val=parseInt(kj[6],10);	
	if(bet=='红波'){
		if(ArrayContains(LHCXX.HONG_NUMS, val)) count=1;
		return count;
	}else if(bet=='蓝波'){
		if(ArrayContains(LHCXX.LANG_NUMS, val)) count=1;
		return count;
	}else if(bet=='绿波'){
		if(ArrayContains(LHCXX.LV_NUMS, val)) count=1;
		return count;
	}else if(bet=='红大'){
		if(val>=25 && val<=48 && ArrayContains(LHCXX.HONG_NUMS, val)) count=1;
		if(val==49) count = -1;		
		return count;
	}else if(bet=='红小'){
		if(val>0 && val<=24 && ArrayContains(LHCXX.HONG_NUMS, val)) count=1;
		if(val==49) count = -1;		
		return count;
	}else if(bet=='红单'){
		if(val%2!=0 && val != 49 && ArrayContains(LHCXX.HONG_NUMS, val)) count=1;
		if(val==49) count = -1;		
		return count;
	}else if(bet=='红双'){
		if(val%2==0 && val != 49 && ArrayContains(LHCXX.HONG_NUMS, val)) count=1;
		if(val==49) count = -1;		
		return count;
	}else if(bet=='蓝大'){
		if(val>=25 && val<=48 && ArrayContains(LHCXX.LANG_NUMS, val)) count=1;
		if(val==49) count = -1;		
		return count;
	}else if(bet=='蓝小'){
		if(val>0 && val<=24 && ArrayContains(LHCXX.LANG_NUMS, val)) count=1;
		if(val==49) count = -1;		
		return count;
	}else if(bet=='蓝单'){
		if(val%2!=0 && val != 49 && ArrayContains(LHCXX.LANG_NUMS, val)) count=1;
		if(val==49) count = -1;		
		return count;
	}else if(bet=='蓝双'){
		if(val%2==0 && val != 49 && ArrayContains(LHCXX.LANG_NUMS, val)) count=1;
		if(val==49) count = -1;		
		return count;
	}else if(bet=='绿大'){
		if(val>=25 && val<=48 && ArrayContains(LHCXX.LV_NUMS, val)) count=1;
		if(val==49) count = -1;		
		return count;
	}else if(bet=='绿小'){
		if(val>0 && val<=24 && ArrayContains(LHCXX.LV_NUMS, val)) count=1;
		if(val==49) count = -1;		
		return count;
	}else if(bet=='绿单'){
		if(val%2!=0 && val != 49 && ArrayContains(LHCXX.LV_NUMS, val)) count=1;
		if(val==49) count = -1;		
		return count;
	}else if(bet=='绿双'){
		if(val%2==0 && val != 49 && ArrayContains(LHCXX.LV_NUMS, val)) count=1;
		if(val==49) count = -1;		
		return count;
	}else if(bet=='红大双'){
		if(val>=25 && val<=48 && val%2==0  && ArrayContains(LHCXX.HONG_NUMS, val)) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='红小双'){
		if(val>0 && val<=24 && val%2==0  && ArrayContains(LHCXX.HONG_NUMS, val)) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='红大单'){
		if(val>=25 && val<=48 && val%2!=0  && ArrayContains(LHCXX.HONG_NUMS, val)) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='红小单'){
		if(val>0 && val<=24 && val%2!=0  && ArrayContains(LHCXX.HONG_NUMS, val)) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='蓝大双'){
		if(val>=25 && val<=48 && val%2==0  && ArrayContains(LHCXX.LANG_NUMS, val)) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='蓝小双'){
		if(val>0 && val<=24 && val%2==0  && ArrayContains(LHCXX.LANG_NUMS, val)) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='蓝大单'){
		if(val>=25 && val<=48 && val%2!=0  && ArrayContains(LHCXX.LANG_NUMS, val)) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='蓝小单'){
		if(val>0 && val<=24 && val%2!=0  && ArrayContains(LHCXX.LANG_NUMS, val)) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='绿大双'){
		if(val>=25 && val<=48 && val%2==0  && ArrayContains(LHCXX.LV_NUMS, val)) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='绿小双'){
		if(val>0 && val<=24 && val%2==0  && ArrayContains(LHCXX.LV_NUMS, val)) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='绿大单'){
		if(val>=25 && val<=48 && val%2!=0  && ArrayContains(LHCXX.LV_NUMS, val)) count=1;
		if(val==49) count = -1;
		return count;
	}else if(bet=='绿小单'){
		if(val>0 && val<=24 && val%2!=0  && ArrayContains(LHCXX.LV_NUMS, val)) count=1;
		if(val==49) count = -1;
		return count;
	}
	return count;
}

exports.JSK3ZH=function(bet, kj, Groupname, betInfo){
	 var kjhe=0;
	 var count=0;
	 kj=kj.split(',');
	 for(var i=0 in kj){
		 kjhe+=kj[i];
	 }
	 
	if(bet=='大'){
		if(kjhe>=11 && kjhe<=17 && kj[0]!=kj[1] && kj[0]!=kj[2]){
			count=1;
			return count;
		}
	 }else if(bet=='小'){
		if(kjhe>=4 && kjhe<=10 && kj[0]!=kj[1] && kj[0]!=kj[2]){
			count=1;
			return count;
		}
	 }else if(Groupname=='三军'){
		 for(var i=0 in kj){
		 if(kj[i]==parseInt(bet,10)){
			 count=1;
			 break;
		 }		 
		}
		return count;
	 }else if(Groupname=='围骰'){
		bet=bet.split('_');
		var j=0;
		for(var i=0 in kj){
			if(kj[i]==parseInt(bet[0],10)){
				j++;
			}
		}
		if(j==3){count=1;}
		return count;
	 }else if(Groupname=='全骰'){
		if(kj[0]==kj[1] && kj[0]==kj[2]){count=1;}
		return count;
	 }else if(Groupname=='点数'){
		kjhe=kjhe+'点';
		if(kjhe==bet){count=1;}
		return count;
	 }else if(Groupname=='长牌'){
		var samenum=0;
		bet=bet.split('_');
		for(var i=0 in kj){
			for(var j=0 in bet){
				if(bet[j]==kj[i]){
					samenum++;
				}
			}
		}
		if(samenum>=2){count=1;}
		return count;
	 }else if(Groupname=='短牌'){
		var samenum=0;
		bet=bet.split('_');
		for(var i=0 in kj){
				if(bet[0]==kj[i]){
					samenum++;
				}
		}
		if(samenum>=2){count=1;}
		return count;
	 }else{
		 
	 }
	return 0; 
}
 //广东11选5组选和直选玩法
 // 任选及连选复式
exports.GD11X5RX=function(bet, kj, Groupname, betInfo){
	var count=0;	
	if(betInfo !='' && bet !=''){
		if(bet =='任选二中二'){
		return renxuan(betInfo, kj, 2);
		}else if(bet =='任选三中三'){
		return renxuan(betInfo, kj, 3);
		}else if(bet =='任选四中四'){
		return renxuan(betInfo, kj, 4);
		}else if(bet =='任选五中五' || bet =='任选六中五' || bet =='任选七中五' || bet =='任选八中五'){
		return renxuan(betInfo, kj, 5);
		}else if(bet =='前二组选'){
			kj2=kj.split(',');
			if(kj2.length>2){
				//选取前两个匹配中奖,顺序不限
				kj=kj2[0]+','+kj2[1];
				return renxuan(betInfo, kj, 2);
			}
		}else if(bet =='前三组选'){
			kj3=kj.split(',');
			if(kj3.length>3){
				//选取前三个匹配中奖,顺序不限
				kj=kj3[0]+','+kj3[1]+','+kj3[2];
				return renxuan(betInfo, kj, 3);
			}
		}else if(bet =='前二直选'){
			kj2=kj.split(',');
			//选取前两个匹配中奖,顺序相同
			kj=kj2[0]+','+kj2[1];
			if(kj==betInfo){
			  count=1;
			  return count;
			}
		}else if(bet =='前三直选'){
			kj2=kj.split(',');
			//选取前三个匹配中奖,顺序相同
			kj=kj2[0]+','+kj2[1]+','+kj2[2];
			if(kj==betInfo){
			  count=1;
			  return count;
			}
		}
	}
	return 0;
}

//广东11选5综合玩法
//号码为1到11,1-5为小,6到10为大,11为和
exports.GD11X5ZH=function(betData, kjData, Groupname){
var kjhe=0,val='';
var count=0;	
var bet=betData;	
var kj=kjData.split(',');
for(var i=0 in kj){
	kjhe+=parseInt(kj[i],10);
}	
var str=kjhe.toString();
var val2=parseInt(str.substr(-1),10);

if(Groupname=='第一球'){
	val=parseInt(kj[0],10);	
}else if(Groupname=='第二球'){
	val=parseInt(kj[1],10);	
}else if(Groupname=='第三球'){
	val=parseInt(kj[2],10);	
}else if(Groupname=='第四球'){
	val=parseInt(kj[3],10);	
}else if(Groupname=='第五球'){
	val=parseInt(kj[4],10);	
}else if(Groupname=='一中一'){
	for(var i=0 in kj){
		if(parseInt(bet,10)==parseInt(kj[i],10)){
			 count=1;
			 break;
		}
	}	
	return count;	
}
	if(val == parseInt(bet,10)){
		count=1;
		return count;
	}else if(bet=='大'){
		if(val>=6 && val<11) count=1;
		if(val == 11) count = -1;
		return count;
	}else if(bet=='小'){
		if(val>0 && val<=5) count=1;
		if(val == 11) count = -1;
		return count;
	}else if(bet=='单'){
		if(val%2!=0 && val != 11) count=1;
		if(val == 11) count = -1;
		return count;
	}else if(bet=='双'){
		if(val%2==0 && val != 11) count=1;
		if(val == 11) count = -1;
		return count;
	}else if(bet=='总和大'){
		if(kjhe>30) count=1;
		if(kjhe==30) count = -1;
		return count;
	}else if(bet=='总和小'){
		if(kjhe<30) count=1;
		if(kjhe==30) count = -1;
		return count;
	}else if(bet=='总和30'){
		if(kjhe==30) count=1;
		return count;
	}else if(bet=='总和单'){
		if(kjhe%2!=0) count=1;
		return count;
	}else if(bet=='总和双'){
		if(kjhe%2==0) count=1;
		return count;
	}else if(bet=='总和尾大'){
		if(val2>4) count=1;
		return count;
	}else if(bet=='总和尾小'){
		if(val2<5) count=1;
		return count;
	}else if(bet=='龙'){
		if(parseInt(kj[0],10) > parseInt(kj[4],10)) count=1;
		return count;
	}else if(bet=='虎'){
		if(parseInt(kj[0],10) < parseInt(kj[4],10)) count=1;
		return count;
	}else{
		
	}	
	return 0;
}
//广东11选5玩法结束

  //北京快乐8综合玩法
exports.BJKL8=function(betData, kjData, Groupname){
	var kjhe=0;
	var qpkjnum=0,hpkjnum=0,dannum=0,shuannum=0
	var count=0;	
	var bet=betData;	
	var kj=kjData.split(',');
	for(var i=0 in kj){
		kjhe+=parseInt(kj[i],10);
		if(parseInt(kj[i],10)<=40){
			qpkjnum+=1;
		}else{
			hpkjnum+=1;
		}
		if(parseInt(kj[i],10)%2!=0){
			dannum+=1;
		}else{
			shuannum+=1;
		}
	}	
	if(parseInt(betData,10)>0){
		for(var i=0 in kj){
			if(kj[i]==parseInt(betData,10)){
				count=1;
				break;
			}
		}
		return count;
	}else if(bet=='总和大'){
		if(kjhe>810) count=1;
		if(kjhe==810) count = -1;
		return count;
	}else if(bet=='总和小'){
		if(kjhe<810) count=1;
		if(kjhe==810) count = -1;
		return count;
	}else if(bet=='总和810'){
		if(kjhe==810) count=1;
		return count;
	}else if(bet=='总和单'){
		if(kjhe%2!=0) count=1;
		if(kjhe==810) count = -1;
		return count;
	}else if(bet=='总和双'){
		if(kjhe%2==0) count=1;
		if(kjhe==810) count = -1;
		return count;
	}else if(bet=='总大单'){
		if(kjhe>810 && kjhe%2!=0) count=1;
		if(kjhe==810) count = -1;
		return count;
	}else if(bet=='总大双'){
		if(kjhe>810 && kjhe%2==0) count=1;
		if(kjhe==810) count = -1;
		return count;
	}else if(bet=='总小单'){
		if(kjhe<810 && kjhe%2!=0) count=1;
		if(kjhe==810) count = -1;
		return count;
	}else if(bet=='总小双'){
		if(kjhe<810 && kjhe%2==0) count=1;
		if(kjhe==810) count = -1;
		return count;
	}else if(bet=='金'){
		if(kjhe>=210 && kjhe<=695) count=1;
		return count;
	}else if(bet=='木'){
		if(kjhe>=696 && kjhe<=763) count=1;
		return count;
	}else if(bet=='水'){
		if(kjhe>=764 && kjhe<=855) count=1;
		return count;
	}else if(bet=='火'){
		if(kjhe>=856 && kjhe<=923) count=1;
		return count;
	}else if(bet=='土'){
		if(kjhe>=924 && kjhe<=1410) count=1;
		return count;
	}else if(bet=='前(多)' || bet=='前多'){
		if(qpkjnum > hpkjnum && qpkjnum > 10) count=1;		
		return count;
	}else if(bet=='后(多)' || bet=='后多'){
		if(qpkjnum < hpkjnum && hpkjnum > 10) count=1;		
		return count;
	}else if(bet=='前后和'){
		if(qpkjnum == hpkjnum && qpkjnum == 10) count=1;		
		return count;
	}else if(bet=='单(多)' || bet=='单多'){
		if(dannum > shuannum && dannum > 10) count=1;		
		return count;
	}else if(bet=='双(多)' || bet=='双多'){
		if(dannum < shuannum && shuannum > 10) count=1;		
		return count;
	}else if(bet=='单双(和)' || bet=='单双和'){
		if(dannum == shuannum && dannum == 10) count=1;		
		return count;
	}								
}
 //PC蛋蛋综合玩法
exports.PCDDZH=function(betData, kjData, Groupname){
	var kjhe=0;
	var count=0;
	var bet=betData;	
	var kj=kjData.split(',');
	for(var i=0 in kj){
		kjhe+=parseInt(kj[i],10);
	}
	if(bet=='大'){
		if(kjhe>=14) count=1;
		return count;
	}else if(bet=='小'){
		if(kjhe<=13) count=1;
		return count;
	}else if(bet=='单'){
		if(kjhe%2!=0) count=1;
		return count;
	}else if(bet=='双'){
		if(kjhe%2==0) count=1;
		return count;
	}else if(bet=='极大'){
		if(kjhe>=23) count=1;
		return count;
	}else if(bet=='极小'){
		if(kjhe<=4) count=1;
		return count;
	}else if(bet=='豹子'){
		kja=parseInt(kj[0],10);
		kjb=parseInt(kj[1],10);
		kjc=parseInt(kj[2],10);
		if(kja==kjb && kja==kjc) count=1;
		return count;
	}else if(bet=='红波'){
		if(kjhe !=0 && kjhe !=13 && kjhe !=14 && kjhe !=27){		
			if(kjhe%3==0) count=1;
		}
		return count;
	}else if(bet=='绿波'){
		//0,13,14,27
		if(kjhe !=0 && kjhe !=13 && kjhe !=14 && kjhe !=27){
			if(kjhe%3==1 || kjhe==1) count=1;
		}
		return count;
	}else if(bet=='蓝波'){
		if(kjhe !=0 && kjhe !=13 && kjhe !=14 && kjhe !=27){	
			if(kjhe%3==2 || kjhe==2) count=1;
		}
		return count;
	}else if(bet>=0 && bet<=27){
		if(kjhe==bet) count=1;
		return count;
	}else{
		
	}	
}
 
//广东快乐十分总和
exports.gdklsf_zhonghe=function(bet, kj){
	var kj=kj.split(',');
	var val=parseInt(kj[0],10)+parseInt(kj[1],10)+parseInt(kj[2],10)+parseInt(kj[3],10)+parseInt(kj[4],10)+parseInt(kj[5],10)+parseInt(kj[6],10)+parseInt(kj[7],10)+parseInt(kj[8],10);
	//bet=bet.split('');
	var str=val.toString();
	var val2=parseInt(str.substr(-1),10);
	var count=0;
		if(bet==val){
			count=1;
		}else if(bet=='总和大'){
			if(val>84 && val<133) count=1;
			if(val==84) count = -1;
			return count;
		}else if(bet=='总和小'){
			if(val>35 && val<84) count=1;
			if(val==84) count = -1;
			return count;
		}else if(bet=='总和单'){
			if(val%2!=0) count=1;
			return count;
		}else if(bet=='总和双'){
			if(val%2==0) count=1;
			return count;
		}else if(bet=='总和尾大'){
			if(val2>4) count=1;
			return count;
		}else if(bet=='总和尾小'){
			if(val2<5) count=1;
			return count;
		}else{
			
		}

}
//广东快乐十分综合玩法
exports.GDKLSFZH=function(betData, kjData, Groupname){
	var kj=kjData.split(',');
	var bet=betData;
	var count=0;
	var val='';
	var str='',val2='',val3='';
if(Groupname=='第一球'){
	val=parseInt(kj[0],10);
	val3=parseInt(kj[7],10);
}else if(Groupname=='第二球'){
	val=parseInt(kj[1],10);
	val3=parseInt(kj[6],10);
}else if(Groupname=='第三球'){
	val=parseInt(kj[2],10);
	val3=parseInt(kj[5],10);
}else if(Groupname=='第四球'){	
	val=parseInt(kj[3],10);
	val3=parseInt(kj[4],10);
}else if(Groupname=='第五球'){	
	val=parseInt(kj[4],10);
}else if(Groupname=='第六球'){	
	val=parseInt(kj[5],10);
}else if(Groupname=='第七球'){	
	val=parseInt(kj[6],10);
}else if(Groupname=='第八球'){	
	val=parseInt(kj[7],10);
}
			if(bet==val){
				count=1;
				return count;
			}else if(bet=='大'){
				if(val>10 && val<21) count=1;
				return count;
			}else if(bet=='小'){
				if(val>0 && val<11) count=1;
				return count;
			}else if(bet=='单'){
				if(val%2!=0) count=1;
				return count;
			}else if(bet=='双'){
				if(val%2==0) count=1;
				return count;
			}else if(bet=='尾大'){
				str=val.toString();
				val2=parseInt(str.substr(-1),10);
				if(val2>4) count=1;
				return count;
			}else if(bet=='尾小'){
				str=val.toString();
				val2=parseInt(str.substr(-1),10);
				if(val2<5) count=1;
				return count;
			}else if(bet=='合数单'){
				if(val>0 && val<10){
				if(val%2!=0) count=1;
				
				}else if(val>9 && val<21){
				str=val.toString();
				val2=parseInt(str.substr(-1),10) + parseInt(str.substr(0,1),10);
				
				if(val%2!=0) count=1;
				}
				return count;
			}else if(bet=='合数双'){
				if(val>0 && val<10){
				if(val%2==0) count=1;
				
				}else if(val>9 && val<21){
				str=val.toString();
				val2=parseInt(str.substr(-1),10) + parseInt(str.substr(0,1),10);
				
				if(val%2==0) count=1;
				}
				return count;
			}else if(bet=='中'){
				if(val>0 && val<8) count=1;
				return count;
			}else if(bet=='发'){
				if(val>7 && val<15) count=1;
				return count;
			}else if(bet=='白'){
				if(val>14 && val<21) count=1;
				return count;
			}else if(bet=='东'){
				if(val%4==1 || val==1) count=1;
				return count;
			}else if(bet=='南'){
				if(val%4==2 || val==2) count=1;
				return count;
			}else if(bet=='西'){
				if(val%4==3 || val==3) count=1;
				return count;
			}else if(bet=='北'){
				if(val%4==0) count=1;
				return count;
			}else if(bet=='龙'){
				if(val>val3) count=1;
				return count;
			}else if(bet=='虎'){
				if(val3>val) count=1;
				return count;
			}else{
				
			}
}
//广东快乐十分综合玩法结束

//广东快乐十分正码
exports.GDKLSFZM=function(betData, kjData, Groupname){
	var kj=kjData.split(',');
	var bet=betData;
	var count=0;
	var val='';
	for(var i=0; i<kj.length; i++){
		if(bet==kj[i]) count=1;
	}
	return count;
}
//广东快乐十分正码结束

//广东快乐十分及其他彩种任选玩法
// 任选及连选复式
exports.GDKLSFRX=function(bet, kj, Groupname, betInfo){
	//console.log(betInfo);
	if(betInfo !='' && bet !=''){
		if(bet =='任选二'){
		return renxuan(betInfo, kj, 2);
		}else if(bet =='任选三'){
		return renxuan(betInfo, kj, 3);
		}else if(bet =='任选四'){
		return renxuan(betInfo, kj, 4);
		}else if(bet =='任选五'){
		return renxuan(betInfo, kj, 5);
		}else if(bet =='选二连组'){
		return renxuan2lz(betInfo, kj, 2);
		}else if(bet =='选三前组'){
			kj3=kj.split(',');
			if(kj3.length>3){
				//选取前三个匹配中奖,顺序不限
				kj=kj3[0]+','+kj3[1]+','+kj[2];
				return renxuan(betInfo, kj, 3);
			}
		}
	}
	return 0;
}
//广东快乐十分及其他彩种任选玩法结束


//重庆时时彩总和
//号码为0到9
exports.cqsscgy=function(bet, kj){
	var kj=kj.split(',');
	var val=parseInt(kj[0],10)+parseInt(kj[1],10)+parseInt(kj[2],10)+parseInt(kj[3],10)+parseInt(kj[4],10);
	var vala=parseInt(kj[0],10);
	var val5=parseInt(kj[4],10);
	//bet=bet.split('');
	var count=0;
			if(bet==val){
				count=1;
			}else if(bet=='总和大'){
				if(val>22) count=1;
				return count;
			}else if(bet=='总和小'){
				if(val>=0 && val<23) count=1;
				return count;
			}else if(bet=='总和单'){
				if(val%2!=0) count=1;
				return count;
			}else if(bet=='总和双'){
				if(val%2==0) count=1;
				return count;
			}else if(bet=='龙'){
				if(vala>val5) count=1;
				if(vala==val5) count = -1;
				return count;
			}else if(bet=='虎'){
				if(val5>vala) count=1;
				if(vala==val5) count = -1;
				return count;
			}else if(bet=='和'){
				if(vala==val5) count=1;
				return count;
			}else{
				
			}
	
}

 //重庆时时彩综合玩法
 //号码为0到9
exports.cqssczh=function(betData, kjData, Groupname){
	var kj=kjData.split(',');
	var bet=betData;
	var count=0;
	var val='';
	var vala='',valb='',valc='',valarr=new Array();
if(Groupname=='第一球'){
	val=parseInt(kj[0],10);
}else if(Groupname=='第二球'){
	val=parseInt(kj[1],10);
}else if(Groupname=='第三球'){
	val=parseInt(kj[2],10);
}else if(Groupname=='第四球'){	
	val=parseInt(kj[3],10);
}else if(Groupname=='第五球'){	
	val=parseInt(kj[4],10);
}else if(Groupname=='前三'){	
	vala=parseInt(kj[0],10);
	valb=parseInt(kj[1],10);
	valc=parseInt(kj[2],10);
	valarr=[vala,valb,valc];
}else if(Groupname=='中三'){	
	vala=parseInt(kj[1],10);
	valb=parseInt(kj[2],10);
	valc=parseInt(kj[3],10);
	valarr=[vala,valb,valc];
}else if(Groupname=='后三'){	
	vala=parseInt(kj[2],10);
	valb=parseInt(kj[3],10);
	valc=parseInt(kj[4],10);
	valarr=[vala,valb,valc];
}
			if(bet==val){
				count=1;
				return count;
			}else if(bet=='大'){
				//号码为0到9
				if(val>=5 && val<=9) count=1;
				return count;
			}else if(bet=='小'){
				//号码为0到9
				if(val>=0 && val<=4) count=1;
				return count;
			}else if(bet=='单'){
				if(val%2!=0) count=1;
				return count;
			}else if(bet=='双'){
				if(val%2==0) count=1;
				return count;
			}else if(bet=='豹子'){
				if(isSameNum(valarr)) count=1;
				return count;
			}else if(bet=='对子'){
				if(isPair(valarr) && !isSameNum(valarr)) count=1;
				return count;
			}else if(bet=='顺子'){
				if(isStraight(valarr) && !isSameNum(valarr) && !isPair(valarr)) count=1;
				return count;
			}else if(bet=='半顺'){
				if(isHalfStraight(valarr) && !isStraight(valarr) && !isSameNum(valarr) && !isPair(valarr)) count=1;
				return count;
			}else if(bet=='杂六'){
				if(valarr.length==3 && !isHalfStraight(valarr) && !isStraight(valarr) && !isSameNum(valarr) && !isPair(valarr)) count=1;
				return count;
			}else{
				
			}
	//console.log('投注号码:'+bet+'开奖号:'+val);
	return count;	
}
//时时彩综合玩法结束

//北京PK10和幸运飞艇冠亚组合
exports.pk10gy=function(bet, kj){
	var kj=kj.split(',');
	var val=parseInt(kj[0],10)+parseInt(kj[1],10);
	//bet=bet.split('');
	var count=0;
			if(bet==val){
				count=1;
				return count;
			}else if(bet=='冠亚大'){
				if(val>11 && val<20) count=1;
				return count;
			}else if(bet=='冠亚小'){
				if(val>2 && val<12) count=1;
				return count;
			}else if(bet=='冠亚单'){
				if(val%2!=0) count=1;
				return count;
			}else if(bet=='冠亚双'){
				if(val%2==0) count=1;
				return count;
			}else{
				
			}
	return count;
}
 //北京PK10和幸运飞艇玩法综合 
exports.pk10zh=function(betData, kjData, Groupname){
	var kj=kjData.split(',');
	var bet=betData;
	var count=0;
	var val='';
	var val2='';
if(Groupname=='冠军'){
	val=parseInt(kj[0],10);
	val2=parseInt(kj[9],10);
}else if(Groupname=='亚军'){
	val=parseInt(kj[1],10);
	val2=parseInt(kj[8],10); //8为第9个数	
}else if(Groupname=='第三名'){
	val=parseInt(kj[2],10);
	val2=parseInt(kj[7],10);
}else if(Groupname=='第四名'){	
	val=parseInt(kj[3],10);
	val2=parseInt(kj[6],10);
}else if(Groupname=='第五名'){	
	val=parseInt(kj[4],10);
	val2=parseInt(kj[5],10);
}else if(Groupname=='第六名'){	
	val=parseInt(kj[5],10);
}else if(Groupname=='第七名'){	
	val=parseInt(kj[6],10);
}else if(Groupname=='第八名'){	
	val=parseInt(kj[7],10);
}else if(Groupname=='第九名'){	
	val=parseInt(kj[8],10);
}else if(Groupname=='第十名'){	
	val=parseInt(kj[9],10);
}
			if(bet==val){
				count=1;
				return count;
			}else if(bet=='大'){
				if(val>=6 && val<11) count=1;
				return count;
			}else if(bet=='小'){
				if(val>0 && val<=5) count=1;
				return count;
			}else if(bet=='单'){
				if(val%2!=0) count=1;
				return count;
			}else if(bet=='双'){
				if(val%2==0) count=1;
				return count;
			}else if(bet=='龙'){
				if(val2>0){
				if(val>val2) count=1;
				}
				return count;
			}else if(bet=='虎'){
				if(val2>0){
				if(val2>val) count=1;
				}
				return count;
			}else{
				
			}
	return count;
}
//北京PK10和幸运飞艇综合玩法结束







//六合彩特码
exports.lhctm=function(bet, kj){
	bet=bet.split(' ');kj=kj.split(',');
	for(var i=0;i<bet.length;i++){
		if(parseInt(bet[i])==parseInt(kj[6])) return 1;
	}
}

//六合彩2中2
exports.lhc2z2=function(bet, kj){
	bet=bet.split(' ');kj=kj.split(',',6);
	if(kj.length>bet.length){
		return Combination(Sames(kj,bet),2);
	}else{
		return Combination(Sames(bet,kj),2);
	}
}

//六合彩3中3
exports.lhc3z3=function(bet, kj){
	bet=bet.split(' ');kj=kj.split(',',6);
	if(kj.length>bet.length){
		return Combination(Sames(kj,bet),3);
	}else{
		return Combination(Sames(bet,kj),3);
	}
}

//六合彩5不中
exports.lhc5bz=function(bet, kj){
	bet=bet.split(' ');kj=kj.split(',');
	if(Sames(bet,kj)==0) return 1;
}

//六合彩7不中
exports.lhc7bz=function(bet, kj){
	bet=bet.split(' ');kj=kj.split(',');
	if(Sames(bet,kj)==0) return 1;
}

//六合彩特码大小
exports.lhctmdx=function(bet, kj){
	bet=bet.split(' ');kj=kj.split(',');
	if(parseInt(kj[6])<=25){
		if(bet[0]=='小') return 1;
	}else if(parseInt(kj[6])>=26){
		if(bet[0]=='大') return 1;
	}
}

//六合彩总大小
exports.lhczdx=function(bet, kj){
	bet=bet.split(' ');kj=kj.split(',');var sum=0;
	for(var i=0;i<kj.length;i++){
		var sum=sum+parseInt(kj[i]);
	}
	if(sum<174){
		if(bet[0]=='小') return 1;
	}else if(sum>=174){
		if(bet[0]=='大') return 1;
	}
}

//六合彩总单双
exports.lhczds=function(bet, kj){
	bet=bet.split(' ');kj=kj.split(',');
	for(var i=0;i<kj.length;i++){
		var sum=sum+parseInt(kj[i]);
	}
	var len=sum.length;
	var s=sum.toString().split('');
	if(len==2){
		if(s[1]%2==1){
		     if(bet[0]=='单') return 1;
	    }else if(s[1]%2==0){
		     if(bet[0]=='双') return 1;
	    }
	}else if(len==3){
		if(s[2]%2==1){
		     if(bet[0]=='单') return 1;
	    }else if(s[2]%2==0){
		     if(bet[0]=='双') return 1;
	    }
	}
}

//快3
// 和值
exports.k3hz=function(bet, kj){
	kj=kj.split(',');
	bet=bet.split(' ');
	var val=parseInt(kj[0])+parseInt(kj[1])+parseInt(kj[2]);
	var count=0;
	for (var i=0;i<bet.length;i++){
			if(parseInt(bet[i])==val){
				count=1;
			}else{}
		}
	return count;
}

//{{{ 常用算法

/**
 * 常用前选算法
 *
 * @params bet		投注列表：01 02 03,04 05
 * @params data		开奖所需的那几个：04,05
 * @params weizhu   开奖前几位数
 *
 * @return 			返回中奖注数
 */
function qs(bet, data, weizhu){
	
	bet=bet.split(',');
	return data.substr(0,weizhu*3-1).split(',')
	.some(function(v,i){
		return bet[i].indexOf(v)==-1;
	})?0:1;
}

/**
 * 常用复式算法
 *
 * @params bet		投注列表：123,45,2,59
 * @params data		开奖所需的那几个：4,5,0,8
 *
 * @return 			返回中奖注数
 */
function fs(bet, data){
	
	// 笛卡尔乘取得所投的号码
	return DescartesAlgorithm.apply(null, bet.split(',').map(function(v){return v.split('')}))
	
	// 把号码由数组变成字符串，以便比较
	.map(function(v){ return v.join(','); })
	
	// 过滤掉不中奖的号码
	.filter(function(v){ return v==data})
	
	// 返回中奖号码的总数
	.length;
}

/**
 * 单式算法
 *
 * @params bet		投注列表：1,5,2,9|3,2,4,6
 * @params data		开奖所需的那几位号码：4,5,3,6
 *
 * @return			返回中奖注数
 */
function ds(bet, data){
	return bet.split('|')
	.filter(function(v){ return v==data})
	.length;
}

/**
 * 组三
 *
 * @params bet		投注列表：135687或112,334
 * @params data		开奖所需的那几位号码：4,5,3
 *
 * @return			返回中奖注数
 */
function z3(bet, data){
	
	// 豹子不算中奖
	if(data.match(/^(\d),\1,\1/)) return 0;
	var reg=/(\d)\d?\1/;
	
	if(bet.indexOf(',')!=-1||reg.test(bet)){
		// 单选处理
		bet=bet.split(',');
		data=data.split(',').join('');
		
		var m=data.match(reg);
		if(!m) return 0;		// 如果三位数没有相同，则不中奖
		m=m[1];		// 重复位数
		reg=new RegExp(m, 'g')
		var s=data.replace(reg,'');	// 不重复的位数
		
		return bet.filter(function(v){
			//console.log('v:%s, s:%s', v, s);
			//console.log(reg);
			return v.replace(reg,'')==s;
		}).length;
	}else{
		// 复选处理
		bet=combine(bet.split(''),2).map(function(v){return v.join(',')});
		data=data.split(',');
		return bet.filter(function(v){
			var i=0;
			for(i in data){
				if(v.indexOf(data[i])==-1) return false;
			}
			return true;
		})
		.length;
	}

}

/**
 * 组六
 *
 * @params bet		投注列表：135687
 * @params data		开奖所需的那几位号码：4,5,3
 *
 * @return			返回中奖注数
 */
function z6(bet, data){
	
	// 豹子不算中奖
	if(data.match(/^(\d),\1,\1/)) return 0;
	
	data=permutation(data.split(','),3).map(function(v){return v.join('');});
	if(bet.indexOf(',')!=-1){
		// 录入式投注
		bet=bet.split(',');
	}else{
		// 点击按钮投注
		bet=combine(bet.split(""),3).map(function(v){return v.join("");});
	}
	return bet.filter(function(v){return data.indexOf(v)!=-1}).length;
}

/**
 * 组二复式
 *
 * @params bet		投注列表：135687
 * @params data		开奖所需的那几位号码：4,5
 *
 * @return			返回中奖注数
 */
function z2f(bet, data){
	// 对子不算中奖
	if(data.match(/^(\d),\1/)) return 0;

	data=data.split(',');
	var data1=data.join('');
	data=data.reverse().join('');
	return combine(bet.split(''), 2)
	.map(function(v){return v.join('');})
	.filter(function(v){
		return v==data||v==data1;
	}).length;
}

/**
 * 组二单式
 *
 * @params bet		投注列表：1,3|5,6|8,7
 * @params data		开奖所需的那几位号码：4,5
 *
 * @return			返回中奖注数
 */
function z2d(bet, data){
	// 对子不算中奖
	if(data.match(/^(\d),\1/)) return 0;

	var data1=data.reverse();
	return bet.split('|').filter(function(v){
		return v==data||v==data1;
	}).length;
}


/**
 * 大小单双
 *
 * @params bet		投注列表：大单,小单
 * @params data		开奖所需的那几位号码：4,5
 *
 * @return			返回中奖注数
 */
function dxds(bet, data){
	
	data=data.split(',');
	return DescartesAlgorithm.apply(null, bet.split(',').map(function(v){return v.split('')}))
	.filter(function(v){
		//console.log(v);
		var o={
			'大':'56789',
			'小':'01234',
			'单':'13579',
			'双':'02468'
		};
		//throw(v[0]);
		return o[v[0]].indexOf(data[0])!=-1 && o[v[1]].indexOf(data[1])!=-1
	})
	.length;
}

function dxds2(bet, data){
	
	data=data.split(',');
	return DescartesAlgorithm.apply(null, bet.split(',').map(function(v){return v.split('')}))
	.filter(function(v){
		//console.log(v);
		var o={
			'大':'06,07,08,09,10',
			'小':'01,02,03,04,05',
			'单':'01,03,05,07,09',
			'双':'02,04,06,08,10'
		};
		//throw(v[0]);
		return o[v[0]].indexOf(data[0])!=-1
	})
	.length;
}

function rx(bet, kj, num){
	
	var m,reg=/^\(([\d ]+)\)([\d ]+)$/;
	if(m=bet.match(reg)){
		// 胆拖投注
		var d=m[1].split(' ');
		
		if(d.some(function(c){return kj.indexOf(c)==-1})) return 0;
		
		return combine(m[2].split(' '), num-d.length)
		.filter(function(v){
			if(num<5){
				return v.every(function(c){
					return kj.indexOf(c)!=-1;
				});
			}else{
				v=v.concat(d);
				return kj.split(',').every(function(c){
					return v.indexOf(c)!=-1;
				});
			}
		}).length;
	}else{
		// 普通投注
		
		return combine(bet.split(' '), num)
		.filter(function(v){
			if(num<5){
				return v.every(function(c){
					return kj.indexOf(c)!=-1;
				});
			}else{
				return kj.split(',').every(function(c){
					return v.indexOf(c)!=-1;
				});
			}
		}).length;
	}
}

function zx(bet, kj){
	var m,reg=/^\(([\d ]+)\)([\d ]+)$/;
	kj=kj.split(',');
	if(m=bet.match(reg)){
		// 胆拖投注
		var d=m[1].split(' ');
		if(d.some(function(c){return kj.indexOf(c)==-1})) return 0;
		return combine(m[2].split(' '), kj.length-d.length)
		.filter(function(v){
			return v.every(function(c){
				return kj.indexOf(c)!=-1;
			});
		}).length;
	}else{
		// 普通投注
		return combine(bet.split(' '), kj.length)
		.filter(function(v){
			return v.every(function(c){
				return kj.indexOf(c)!=-1;
			});
		}).length;
	}
}



/**
 * 笛卡尔乘积算法
 *
 * @params 一个可变参数，原则上每个都是数组，但如果数组只有一个值是直接用这个值
 *
 * useage:
 * console.log(DescartesAlgorithm(2, [4,5], [6,0],[7,8,9]));
 */
function DescartesAlgorithm(){
	var i,j,a=[],b=[],c=[];
	if(arguments.length==1){
		if(!Array.isArray(arguments[0])){
			return [arguments[0]];
		}else{
			return arguments[0];
		}
	}
	
	if(arguments.length>2){
		for(i=0;i<arguments.length-1;i++) a[i]=arguments[i];
		b=arguments[i];
		
		return arguments.callee(arguments.callee.apply(null, a), b);
	}

	if(Array.isArray(arguments[0])){
		a=arguments[0];
	}else{
		a=[arguments[0]];
	}
	if(Array.isArray(arguments[1])){
		b=arguments[1];
	}else{
		b=[arguments[1]];
	}

	for(i=0; i<a.length; i++){
		for(j=0; j<b.length; j++){
			if(Array.isArray(a[i])){
				c.push(a[i].concat(b[j]));
			}else{
				c.push([a[i],b[j]]);
			}
		}
	}
	
	return c;
}

//多彩种任选算法
function renxuan(bet, kj, w){
	kj=kj.split(',');
	kj.forEach(function(v, i){
		//转字符为数字
		kj[i]=v=parseInt(v,10);
		if(v==0 || w==0) delete kj[i];
	});
	kj=kj.filter(function(v){
		return v!=undefined;
	}).join(',');
	return renxuan2f(bet, kj, w);
}

function renxuan2f(bet, data, w){
	var fscount=0;
	data=data.split(',');
	//console.log(data);
	combine(bet.split(','), w).map(function(v){
		var xoi=0;
		for(var j=0 in v){
			for(var i=0 in data){
					if(v[j]==data[i]){
						xoi++;
					}
			}
			if(w==xoi){
				fscount+=1;	
				//console.log(v);	
			}
		}
	});
	//console.log(fscount);
	return fscount;
}


//任选二连组适合广东快乐十分等,将小于10的数字补0方便计算
function renxuan2lz(bet, kj, w){
	bet=bet.split(',');
	bet.forEach(function(v, i){
		//投注号码转字符为加0字符
		bet[i]=v=parseInt(v,10);
		if(v<10){bet[i]='0'+v.toString();}
		if(v==0 || w==0) delete bet[i];
	});
	bet=bet.filter(function(v){
		return v!=undefined;
	}).join(',');
	//console.log(bet);
	return renxuan2lz2f(bet, kj, w);
}

function renxuan2lz2f(bet, data, w){
	var fscount=0;
	combine(bet.split(','), w).map(function(v){
		if(w==2){ //任选二连组
			va=data.indexOf(v[0]);
			vb=data.indexOf(v[1]);
			//console.log(v+'--'+va+','+vb);
			if(Math.abs(va-vb)==3 && va!=-1 && vb !=-1){
				fscount+=1;				
			}
		}
	});
	//console.log(fscount);
	return fscount;
}

/**
 * 第一种组合注数算法
 *
 * @params Array arr		备选数组
 * @params Int num
 *
 * @return Array			组合
 *
 * useage:  combine([1,2,3,4,5,6,7,8,9], 3);
 */
function combine(arr, num) {
	var r = [];
	(function f(t, a, n) {
		if (n == 0) return r.push(t);
		for (var i = 0, l = a.length; i <= l - n; i++) {
			f(t.concat(a[i]), a.slice(i + 1), n - 1);
		}
	})([], arr, num);
	return r;
}

/*第二种注数算法
var a = getZhuXuanComNums(b, r, b.length);*/
function getZhuXuanComNums(e, b, a) {
    var c = [];
    var f = choose(a, b);
    $(f).each(function(g, j) {
        var k = {};
        $(j).each(function(l, o) {
            k[l] = e[o]
        });
        c[g] = k
    });
    return c
}

function choose(b, e) {
    var f = [];
    var a = [];
    for (var c = 0; c < b; c++) {
        a[c] = c
    } (function(j, o, g) {
        var l = j.length;
        if (o > l) {
            return
        }
        if (o == l) {
            f.push([].concat(g, j))
        } else {
            for (var n = 0; n < l; n++) {
                var k = [].concat(g);
                k.push(j[n]);
                if (o == 1) {
                    f.push(k)
                } else {
                    var p = [].concat(j);
                    p.splice(0, n + 1);
                    arguments.callee(p, o - 1, k)
                }
            }
        }
    })(a, e, []);
    return f
}

/**
 * 排列算法
 */
function permutation(arr, num){
	var r=[];
	(function f(t,a,n){
		if (n==0) return r.push(t);
		for (var i=0,l=a.length; i<l; i++){
			f(t.concat(a[i]), a.slice(0,i).concat(a.slice(i+1)), n-1);
		}
	})([],arr,num);
	return r;
}
//}}}

/**
 * 分割字符串
 *
 * @params str		字符串
 * @params len      长度
 */
function strCut(str, len){
	var strlen = str.length;
	if(strlen == 0) return false;
	var j = Math.ceil(strlen / len);
	var arr = Array();
	for(var i=0; i<j; i++)
		arr[i] = str.substr(i*len, len)
	return arr;
}

//两个数组，返回包含相同数字的个数
function Sames(a,b){
	var num=0;
	for (i=0;i<a.length;i++)
	{   var zt=0;
		for (j=0;j<b.length;j++)
		{
			if(a[i]-b[j]==0){
				zt=1;
			}
		}
		if(zt==1){
			num+=1; 
		}
	}
	return num;
}

function Combination(c, b) {
    b = parseInt(b);
    c = parseInt(c);
    if (b < 0 || c < 0) {
        return false
    }
    if (b == 0 || c == 0) {
        return 1
    }
    if (b > c) {
        return 0
    }
    if (b > c / 2) {
        b = c - b
    }
    var a = 0;
    for (i = c; i >= (c - b + 1) ; i--) {
        a += Math.log(i)
    }
    for (i = b; i >= 1; i--) {
        a -= Math.log(i)
    }
    a = Math.exp(a);
    return Math.round(a)
}


//过滤重复的数组
function filterArray(arrs){
    var k=0,n=arrs.length; 
	var arr = new Array(); 
    for(var i=0;i<n;i++)
    {
        for(var j=i+1;j<n;j++)
        {
            if(arrs[i]==arrs[j])
            {
                arrs[i]=null;
                break;
            }
        }
    }    
    for(var i=0;i<n;i++)
    {
        if(arrs[i])
        {
            arr[k++]=arrs[i]; // arr.push(this[i]);
        }
    } 
    return arr;
}

//是否有重复值
  function isRepeat(arr){  
      
         var hash = {};  
      
         for(var i in arr) {  
      
             if(hash[arr[i]])  
      
                  return true;  
      
             hash[arr[i]] = true;  
      
         }  
      
         return false;  
      
    }
	
	
	 /**
 * 是否为豹子
 * 
 * @param nums
 * @returns {Boolean}
 */
function isSameNum(nums) {
	var num1 = nums[0];
	for (var i = 1; i < nums.length; i++) {
		if (num1 != nums[i]) {
			return false;
		}
	}
	return true;
}

/**
 * 是否对子
 * 
 * @param nums
 * @returns {Boolean}
 */
function isPair(nums) {
	for (var i = 0; i < nums.length; i++) {
		var code = nums[i];
		for (var j = i + 1; j < nums.length; j++) {
			var codeTemp = nums[j];
			if (code == codeTemp) {
				return true;
			}
		}
	}
	return false;
}

/**
 * 判断是否顺子
 * 
 * @param nums
 * @return
 */
function isStraight(nums) {
	nums.sort();
	if (nums[0] == 0 && nums[1] == 1 && nums[2] == 9) {// 019也算顺子
		return true;
	}
	if (nums[0] == 0 && nums[1] == 8 && nums[2] == 9) {// 089也算顺子
		return true;
	}
	for (var i = 0; i < nums.length - 1; i++) {
		var num1 = nums[i];
		var num2 = nums[i + 1];
		if (num2 - num1 != 1) {
			return false;
		}

	}
	return true;
}

/**
 * 判断是否是半顺
 */
function isHalfStraight(nums) {
	nums.sort();
	var n = 0;
	if (nums[0] == 0) {
		n += 1;
	}
	if (nums[1] == 1) {
		n += 1;
	}
	if (nums[2] == 9) {
		n += 1;
	}
	if (n == 2) {
		return true;
	}

	for (var i = 0; i < nums.length - 1; i++) {
		var num1 = nums[i];
		var num2 = nums[i + 1];
		if (num2 - num1 == 1) {
			return true;
		}

	}
	return false;
}
/**
 * 香港彩函数
 */
//计算起始生肖对应的数组键名
function getYearZodicaIndex(year) {
	for (var i = 0; i < LHC.zodiacArr.length; i++) {
		if (year == LHC.zodiacArr[i]) {
			return i;
		}
	}
} 
//计算投注生肖对应的号码组
function getZodicaNum(sxName, year) {
	var index = getYearZodicaIndex(year);
	var j = 1;
	for (var i = index; i >= 0; i--) {
		if (LHC.zodiacArr[i] == sxName) {
			return j;
		}
		j += 1;
	}
	for (var i = LHC.zodiacArr.length - 1; i >= index; i--) {
		if (LHC.zodiacArr[i] == sxName) {
			return j;
		}
		j += 1;
	}
}
//计算号码对应的生肖
function getZodica(num,year){
	for(var i=0;i<LHC.zodiacArr.length;i++){
		var zodiac=LHC.zodiacArr[i];
		var sxs = SX_NUMS[getZodicaNum(zodiac,year)];
		var str = "";
		for ( var s in sxs) {
			var sxnum = parseInt(sxs[s]);
			if(parseInt(sxnum)==parseInt(num)){
				return zodiac;
			}
		}
	}
	return "";
}
function ArrayContains(array, num) {
	for ( var i in array) {
		if (array[i] == num) {
			return true;
		}
	}
	return false;
}
//数组去重,不改变值类型
function outRepeat(a){
  var hash=[],arr=[];
  for (var i = 0; i < a.length; i++) {
	hash[a[i]]!=null;
	if(!hash[a[i]]){
	  arr.push(a[i]);
	  hash[a[i]]=true;
	}
  }
  return arr;
}