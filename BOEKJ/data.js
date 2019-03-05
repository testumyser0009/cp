var played={},playedalias={},setting={}, 
mysql=require('mysql'),
http=require('http'),
url=require('url'),
crypto=require('crypto'),
querystring=require('querystring'),
config=require('./config.js'),
calc=require('./kj-data/kj-calc-time.js'),
exec=require('child_process').exec,
execPath=process.argv.join(" "),
parse=require('./kj-data/parse-calc-count.js');
require('./String-ext.js');
// 抛出未知出错时处理






process.on('uncaughtException', function(e){
	console.log(e.stack);
});
// 自动重启
if(config.restartTime){
	setTimeout(function(exec, execPath){
		exec(execPath);
		process.exit(0);
	}, config.restartTime * 3600 * 1000, exec, execPath);
}
var timers={};		// 任务记时器列表
var encrypt_key='cc40bfe6d972ce96fe3a47d0f7342cb0';
var zjCount=0;
var alias='';
var animalsYear='';
http.request=(function(_request){
	return function(options,callback){
		var timeout=options['timeout'],
			timeoutEventId;
		var req=_request(options,function(res){
			res.on('end',function(){
				clearTimeout(timeoutEventId);
			});
			res.on('close',function(){
				clearTimeout(timeoutEventId);
			});
			res.on('abort',function(){
			});
			callback(res);
		});
		//超时
		req.on('timeout',function(){
			req.end();
		});
		//如果存在超时
		timeout && (timeoutEventId=setTimeout(function(){
			req.emit('timeout',{message:'have been timeout...'});
		},timeout));
		return req;
	};
})(http.request);
getPlayedFun(runTask);
getsetting();
function getPlayedFun(cb){
	try{
		var client=createMySQLClient();
	}catch(err){
		log(err);
		return;
	}
	client.query("select id, ruleFun, alias from ssc_played", function(err, data){
		if(err){
			log('读取玩法配置出错：'+err.message);
		}else{
			data.forEach(function(v){
				played[v.id]=v.ruleFun;
				playedalias[v.id]=v.alias;
			});
			if(cb) cb();
		}
	});
	client.end();
}

function getsetting(){
	var client=createMySQLClient();
	client.query("select name, value from ssc_params", function(err, data){
		if(err){
			log('读取本年生肖配置出错：'+err.message);
		}else{
			data.forEach(function(v){
				setting[v.name]=v.value;
			});
		}
	});
	client.end();
}

function runTask(){
	if(config.cp.length) config.cp.forEach(function(conf){
		timers[conf.name]={};
		timers[conf.name][conf.timer]={timer:null, option:conf};
		try{
			if(conf.enable) run(conf);
		}catch(err){
			restartTask(conf, config.errorSleepTime);
		}
	});	
}

function restartTask(conf, sleep, flag){
	if(sleep<=0) sleep=config.errorSleepTime;
	if(!timers[conf.name]) timers[conf.name]={};
	if(!timers[conf.name][conf.timer]) timers[conf.name][conf.timer]={timer:null,option:conf};
	
	if(flag){
		var opt;
		for(var t in timers[conf.name]){
			opt=timers[conf.name][t].option;
			clearTimeout(timers[opt.name][opt.timer].timer);
			timers[opt.name][opt.timer].timer=setTimeout(run, sleep*1000, opt);
			log('休眠'+sleep+'秒后从'+opt.source+'采集'+opt.title+'数据...');
		}
	}else{
		clearTimeout(timers[conf.name][conf.timer].timer);
		timers[conf.name][conf.timer].timer=setTimeout(run, sleep*1000, conf);
		log('休眠'+sleep+'秒后从'+conf.source+'采集'+conf.title+'数据...');
	}
}

function run(conf){
	if(timers[conf.name][conf.timer].timer) clearTimeout(timers[conf.name][conf.timer].timer);
	log('开始从'+conf.source+'采集'+conf.title+'数据');
	
	var option=JSON.parse(JSON.stringify(conf.option));
	log('采集地址为:'+option.host+option.path);
	//option.path+='?'+(new Date()).getTime();
	http.request(option, function(res){
		var data="";
		res.on("data", function(_data){
			data+=_data.toString();
		});
		res.on("end", function(){
			try{
				try{
					data=conf.parse(data);
				}catch(err){
					throw('解析'+conf.title+'数据出错：'+err);
				}
				try{
						if(data.type==65){
							var data3 = data.data.split(',');
							
							var kj1 = 0, kj2 = 0, kj3 = 0;
							for (var i = 0 in data3) {
								if (i < 6) {
									kj1 += parseInt(data3[i], 10);
								} else if (i >= 6 && i < 12) {
									kj2 += parseInt(data3[i], 10);
								} else if (i >= 12 && i <= 17) {
									kj3 += parseInt(data3[i], 10);
								}
							}
							
							if (kj1 >= 10) {
								kj1 = kj1.toString().substr(-1);
							}
							if (kj2 >= 10) {
								kj2 = kj2.toString().substr(-1);
							}
							if (kj3 >= 10) {
								kj3 = kj3.toString().substr(-1);
							}
							if (kj1 < 0 || kj3 < 0) throw new Error('PC蛋蛋开奖数据不正确');
							var codes = kj1 + ',' + kj2 + ',' + kj3;
							var data2={
								type: 66,
								time: data.time,
								number: data.number,
								data: codes,
							};
							submitData(data2, conf);
						}
						submitData(data, conf);
				}catch(err){
					throw('提交出错：'+err);
				}
			}catch(err){
				log('运行出错：%s，休眠%f秒'.format(err, config.errorSleepTime));
				restartTask(conf, config.errorSleepTime);
			}
		});
		
		res.on("error", function(err){
			log(err);
			restartTask(conf, config.errorSleepTime);
		});
		
	}).on('timeout', function(err){
		log('从'+conf.source+'采集'+conf.title+'数据超时');
		restartTask(conf, config.errorSleepTime);
	}).on("error", function(err){
		// 一般网络出问题会引起这个错
		log(err);
		restartTask(conf, config.errorSleepTime);
		
	}).end();
}

//}}}

function submitData(data, conf){
	log('提交从'+conf.source+'采集的'+conf.title+'第'+data.number+'数据：'+data.data);
	try{
		var client=mysql.createConnection(config.dbinfo);
	}catch(err){
		throw('连接数据库失败');
	}

	data.time=Math.floor((new Date().getTime()/1000));
	client.query("insert into ssc_data(type, time, number, data) values(?,?,?,?)", [data.type, data.time, data.number, data.data], function(err, result){
		if(err){
			sleep=calc[conf.name](data);
			// 普通出错
			if(err.errno==1062){
				// 数据已经存在
				// 正常休眠
				try{
					sleep=calc[conf.name](data);
					if(sleep<0) sleep=config.errorSleepTime*1000;
				}catch(err){
					restartTask(conf, config.errorSleepTime);
					return;
				}
				log(conf['title']+'第'+data.number+'期数据已经存在数据');
				restartTask(conf, sleep/1000, true);

			}else{
				log('运行出错：'+err.message);
				restartTask(conf, config.errorSleepTime);
			}
		}else if(result){
			// 正常
			try{
				sleep=calc[conf.name](data);
			}catch(err){
				log('解析下期数据出错：'+err);
				restartTask(conf, config.errorSleepTime);
				return;
			}
			log('写入'+conf['title']+'第'+data.number+'期数据成功');
			restartTask(conf, sleep/1000, true);
			if(data.type==70){
				log('彩种['+data.type+']由后台派奖');
			}else{
				setTimeout(calcJ, 500, data);
			}
		}else{
			global.log('未知运行出错');
			restartTask(conf, config.errorSleepTime);
		}
	});
	client.end();
}

function requestKj(type,number){
	var option={
		host:config.submit.host,
		path:'%s/%s/%s/%'.format(config.submit.path, type, number)
	}
	http.get(config.submit,function(res){
	});
}

function createMySQLClient(){
	try{
		return mysql.createConnection(config.dbinfo).on('error', function(err){
			throw('连接数据库失败');
		});
	}catch(err){
		log('连接数据库失败：'+err);
		return false;
	}
}

function calcJ(data, flag){
	var client=createMySQLClient();
	sql="select id,playedId,actionData,Groupname,betInfo from ssc_bets where isDelete=0 and type=? and actionNo=?";
	if(flag) sql+=" and lotteryNo=''";
	//if(data.type==70) sql+=" limit 1";
	//console.log(sql);
	client.query(sql, [data.type, data.number], function(err, bets){
		if(err){
			log("读取投注出错："+err);
		}else{
			var sql, sqls=[];
			sql='call kanJiang(?, ?, ?, ?)';
			bets.forEach(function(bet){
				var fun;
				try{
					fun=parse[played[bet.playedId]];
					if(typeof fun!='function') throw new Error('算法不是可用的函数');
				}catch(err){
					log('计算玩法[%f]中奖号码算法不可用：%s'.format(bet.playedId, err.message));
					return;
				}
				try{
					if(bet.actionData && data.type==70){
						getsetting();
						animalsYear=setting['animalsYear'];
						var lhcWxJin=setting['lhcWxJin'];
						var lhcWxMu=setting['lhcWxMu'];
						var lhcWxShui=setting['lhcWxShui'];
						var lhcWxHuo=setting['lhcWxHuo'];
						var lhcWxTu=setting['lhcWxTu']; 						
						alias=playedalias[bet.playedId];
						zjCount=fun(bet.actionData, data.data, bet.Groupname, bet.betInfo, animalsYear, alias, lhcWxJin, lhcWxMu, lhcWxShui, lhcWxHuo, lhcWxTu)||0;							
					}else if(bet.actionData){
						zjCount=fun(bet.actionData, data.data, bet.Groupname, bet.betInfo)||0;
					}else{
						zjCount=0;	
					}
				}catch(err){
					log('计算中奖号码时出错：'+err);
					return;
				}
				//console.log(sql+'/'+bet.id+'/'+zjCount+'/'+data.data);
				sqls.push(client.format(sql, [bet.id, zjCount, data.data, 'ssc-'+encrypt_key]));				
			});
			try{
				setPj(sqls, data);
			}catch(err){
				log(err);
			}
		}
	});
	client.end();
	guestcalcJ(data, flag);
}

function guestcalcJ(data, flag){
	var client=createMySQLClient();
	sql="select id,playedId,actionData,Groupname,betInfo from ssc_guestbets where isDelete=0 and type=? and actionNo=?";
	if(flag) sql+=" and lotteryNo=''";
	client.query(sql, [data.type, data.number], function(err, bets){
		if(err){
			log("读取投注出错："+err);
		}else{
			var sql, sqls=[];
			sql='call guestkanJiang(?, ?, ?, ?)';
			bets.forEach(function(bet){
				var fun;
				try{
					fun=parse[played[bet.playedId]];
					if(typeof fun!='function') throw new Error('算法不是可用的函数');
				}catch(err){
					log('计算玩法[%f]中奖号码算法不可用：%s'.format(bet.playedId, err.message));
					return;
				}
				try{
					if(bet.actionData && data.type==70){
						getsetting();
						animalsYear=setting['animalsYear'];
						var lhcWxJin=setting['lhcWxJin'];
						var lhcWxMu=setting['lhcWxMu'];
						var lhcWxShui=setting['lhcWxShui'];
						var lhcWxHuo=setting['lhcWxHuo'];
						var lhcWxTu=setting['lhcWxTu']; 						
						alias=playedalias[bet.playedId];
						zjCount=fun(bet.actionData, data.data, bet.Groupname, bet.betInfo, animalsYear, alias, lhcWxJin, lhcWxMu, lhcWxShui, lhcWxHuo, lhcWxTu)||0;							
					}else if(bet.actionData){
						zjCount=fun(bet.actionData, data.data, bet.Groupname, bet.betInfo)||0;
					}else{
						zjCount=0;	
					}
				}catch(err){
					log('计算中奖号码时出错：'+err);
					return;
				}				
				sqls.push(client.format(sql, [bet.id, zjCount, data.data, 'ssc-'+encrypt_key]));				
			});
			try{
				setPj(sqls, data);
			}catch(err){
				log(err);
			}
		}
	});
	client.end();
}

function getdatetime(){
	var todayDate = new Date();
	var tdyear = todayDate.getFullYear();       //年   
    var tdmonth = todayDate.getMonth() + 1;     //月   
    var tdday = todayDate.getDate() - 1;            //日
	if(tdmonth < 10) tdmonth="0"+tdmonth;
	if(tdday < 10) tdday="0"+tdday;
	var todaytime=tdyear.toString()+tdmonth.toString()+tdday.toString();
	return todaytime;
}

function setPj(sqls, data){
	if(sqls.length==0) throw('彩种[%f]第%s期没有投注'.format(data.type, data.number));
	log('彩种[%f]第%s期有真实投注'.format(data.type, data.number))
	var client=createMySQLClient();
	if(client==false){
		log('连接数据库出错，休眠%f秒继续...'.format(config.errorSleepTime));
		setTimeout(setPj, config.errorSleepTime*1000, sqls, data);
	}else{
		log(sqls.join(';'));
		client.query(sqls.join(';'), function(err,result){
			if(err){
				console.log(err);
			}else{
				log('成功');
			}
		});
		client.end();
	}	
}

// 前台添加数据接口
http.createServer(function(req, res){
	log('前台访问'+req.url);
	var data='';
	req.on('data', function(_data){
		data+=_data;
	}).on('end', function(){
		data=querystring.parse(data);
		var msg={},
			hash=crypto.createHash('md5');
		hash.update(data.key);
		if(encrypt_key==hash.digest('hex')){
			delete data.key;
			if(req.url=='/data/add'){
				submitDataInput(data);
			}else if(req.url=='/data/kj'){
				log('Maleo温馨提示：正在执行重新计算开奖...');
				calcJ(data, true)
			}
		}else{
			msg.errorCode=1;
			msg.errorMessage='校验不通过';
		}
		res.writeHead(200, {"Content-Type": "text/json"});
		res.write(JSON.stringify(msg));
		res.end();
	});
}).listen(8800);

function submitDataInput(data){
	log('提交从前台录入第'+data.number+'数据：'+data.data);
	try{
		var client=mysql.createConnection(config.dbinfo);
	}catch(err){
		throw('连接数据库失败');
	}
	data.time=Math.floor((new Date(data.time)).getTime()/1000);
	client.query("insert into ssc_data(type, time, number, data) values(?,?,?,?)", [data.type, data.time, data.number, data.data], function(err, result){
		if(err){
			// 普通出错
			if(err.number==1062){
				// 数据已经存在
				log('第'+data.number+'期数据已经存在数据');
			}else{
				log('运行出错：'+err.message);
			}
		}else if(result){
			// 正常
			log('写入第'+data.number+'期数据成功');
			// 计算奖品
			setTimeout(calcJ, 500, data);
		}else{
			global.log('未知运行出错');
		}
	});
	client.end();
}