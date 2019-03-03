/**
 * 金额转换:分转成元,保留两位小数点
 * 
 * @param val
 * @returns {Number}
 */
function renderMoney(val) {
	return (val == null ? 0 : (val.toFixed(2)));
}
/**
 * 显示返点%
 * 
 * @param val
 * @returns
 */
function renderRebate(val) {
	return (val == null ? 0 : (val * 100 )) + '%';
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
 * 判断数组是否存在
 * 
 * @param array
 * @param num
 * @returns {Boolean}
 */
function ArrayContains(array, num) {
	for ( var i in array) {
		if (array[i] == num) {
			return true;
		}
	}
	return false;
}

function ShowNewPageInit(){
	$("#right_page").hide();
	$("#game_count").hide();
	$("#lotteryPage").css("padding-right", "20px")
	clearInterval(refreshTimeUi);
	clearInterval(requestCurOpenNumTime);
}



/**
 * 根据游戏ID返回game
 * 
 * @param gameId
 * @returns
 */
function getGameById(gameId) {
	var resultGame;
	for ( var gameKey in games) {
		var game = games[gameKey];
		if (game.id == gameId) {
			resultGame = game;
			break;
		}
	}
	return resultGame;
}

/**
 * 
 * 根据id获取总分类
 * 
 * @param id
 * @returns
 */
function getPlayCateById(gaemId, cateId) {
	var playCateList = playCates[gaemId];
	var result;
	for ( var playCateIndex in playCateList) {
		var playCate = playCateList[playCateIndex];
		if (playCate.id == cateId) {
			result = playCate;
			break;
		}
	}
	return result;
}


function getPlayCate(id) {
	var playCate = playCates[id];
	return playCate;
}

function getPlay(id) {
	if(!id){
		return "";
	}
	var play = plays[id];
	var playConfig = playConfigs[user.userId + "_" + id];
	if (playConfig) {
		if(playConfig.odds)
			play.odds = playConfig.odds;
		if(playConfig.rebate!=null)
			play.rebate = playConfig.rebate;
	}
	var playQuotaConfig = playQuotaConfigs[user.userId + "_" + id];
	if (playQuotaConfig) {
		play.minMoney = playQuotaConfig.minMoney;
		play.maxMoney = playQuotaConfig.maxMoney;
		play.maxTurnMoney = playQuotaConfig.maxTurnMoney;
	}
	return play;
}


/**
 * 切换皮肤
 */
function changePageSkin(){
	var skin = $.cookie('_skin_');
	if(!skin) {
		skin = webAppConfig.defaultSkin || 'blue';
		$.cookie('_skin_', skin, {path: '/'});
	}
	$('body').removeClass("skin_red skin_blue");
	$('body').addClass('skin_' + skin);
	$("#domain_logo_url").attr("src",webAppConfig.logoUrl);
}