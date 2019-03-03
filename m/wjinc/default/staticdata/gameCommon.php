<?php echo '//在线客服
function onlineService(){
	var url="";
	if(parent && parent.CONFIG_MAP&& parent.CONFIG_MAP.zxkfUrl){
		url=parent.CONFIG_MAP.zxkfUrl
	}else{
		url=CONFIG_MAP.zxkfUrl;
	}
	window.open(url);
}

//打开QQ
function openQQWin(){
	var url=CONFIG_MAP.mainQQUrl;
	if(!url){
		alert("未设置QQ联系方式请联系客服");
		return;
	}
	window.open(url);
}

//打开微信
function openWxWin(){
	var url=CONFIG_MAP.mainWxUrl;
	if(!url){
		alert("未设置微信联系方式请联系客服");
		return;
	}
	window.open(url);
}

function showOtherTips(objId) {
	$(objId).next("ul").show();
}

function hideOtherTips(objId) {
	$(objId).next("ul").hide();
}
function getGameDomain(pageUrl){
	var trialGamePro = user.testFlag;
	var webDomain ="";
	if(trialGamePro=="1") {//试玩
		webDomain=getTrialWebDomain();
	}else{
		webDomain=getWebDomain();
	}
	if(!webDomain) {
		alert("无法进入游戏，请联系客服");
		return;
	}
	if(pageUrl){
		webDomain+=webDomain;
	}
	return webDomain;
}

function formatConfigHtml(dcm,cfgId){
	var value = CONFIG_MAP[cfgId];
	if(value){
		$(dcm).html(value);
	}
}

/**
 * 进入游戏页面
 */
function gotoGamePage(){
	var webDomain=getGameDomain();
	window.location.href=webDomain+"/agreement.html"
}
/**
 * 进入推广页面
 */
function gotoMainPage() {
	var mainDomain = getMainDomain();
	if(mainDomain) {
		window.location.href = mainDomain + "/";
	}
	
	return true;
}

/**
 * 初始化下拉框
 */
function initGameSelect(obj){
	var optionFormatStr=\'<option value="{gameId}">{gameName}</option>\';
	var optionStr="";
	for(var g in games){
		var game=games[g];
		if(game.open==0){
			optionStr+=optionFormatStr.format({
				"gameId":game.id,
				"gameName":game.name
			});
		}
	}
	$(obj).html(optionStr);
}'
?>
