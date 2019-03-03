
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<title>Welcome</title>
<meta name="renderer" content="webkit" /> 
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/static/css/style.css" rel="stylesheet" type="text/css" />
<link href="/static/css/skin.css" rel="stylesheet" type="text/css" />
<link href="/static/css/balls.css" rel="stylesheet" type="text/css" /> 
</head>
<body class="iframe-body">
<script type="text/javascript" src="/static/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/static/lib/jquery.cookie.js"></script>
<script type="text/javascript" src="/static/js/skin.js"></script>
<script type="text/javascript" src="/static/lib/util/common.js"></script>
<script type="text/javascript"> 
	var staticFileUrl = parent.getStaticDomain();
// 	var lunarDate = parent.lunarDate;
	var animalsYear = parent.animalsYear;
	var sysServerDate = parent.sysServerDate;
	var defaultSkin = parent.defaultSkin;
	var sysTrialGamePro = parent.sysTrialGamePro;
	var gameMap = parent.gameMap;
	var games = parent.games;
	var layer = parent.layer;
	parent.UserBet.playType = "NORMAL";
</script>
<script type="text/javascript"> 
$.ajaxSetup ({
	cache: false //close AJAX cache
});
</script>
<!--  error.js要放在最后面  -->
<script type="text/javascript" src="/static/lib/util/error.js" async></script>

 <script type="text/javascript" src="/static/js/lottery/userBetInfo.js"></script>
 <div class="member-info">
   <ul class="tab" style="margin-top: 20px">
   		<li id="tm_tabs" class="tab_title02">
   		</li>
   	</ul>
   	
   	<script type="text/javascript">
   		function initTabs(){
   			var menuFormatStr='<a id="GAME_{gameId}_TAB" type="{gameId}" href="javascript:UserBetInfo.showTab({gameId});" class="{selClass}">{gameName}</a>';
   			var menuStr='';
   			var gi=0;
   			for(var g in games){
   				var selClass="";
   				var game=games[g];
   				if(game.open==0){
   					gi+=1;
   					var gameName=game.name;
   					if(game.id==50){
   						gameName="北京PK10";
						selClass = "on";
   					}
   					menuStr += menuFormatStr.format({
   						"gameId":game.id,
   						"selClass":selClass,
   						"gameName":gameName
   					});
   				}
   			}
   			$("#tm_tabs").html(menuStr);
   		}
   		initTabs();
   	</script>
   	
   	<div id="user_bet_info_configs">
	   <div id="GAME_50_PAGE" class="show">
		   <table class="u-table2"> 
		     <thead> 
		      <tr > 
		       <th colspan="2">玩法</th> 
		       <th>赔率</th> 
		       <th>退水</th> 
		       <th>单注最低</th>
		       <th>单注最高</th> 
		       <th>单期最高</th> 
		      </tr> 
		     </thead> 
		     <tbody> 
		     	<tr play_id="501001">
		     		<td rowspan="21" style="width: 100px">冠、亚军和</td>
		     		<td style="width: 100px">大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501002">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501003">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501004">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501005">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501006">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501007">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501008">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501009">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501010">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501011">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501012">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501013">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501014">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501015">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501016">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501017">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501018">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501019">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501020">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501021">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="501101">
		     		<td rowspan="16" >冠军</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501102">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501103">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501104">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501105">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501106">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501107">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501108">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501109">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501110">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501111">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501112">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501113">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501114">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501115">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501116">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="501201">
		     		<td rowspan="16" >亚军</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501202">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501203">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501204">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501205">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501206">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501207">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501208">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501209">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501210">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501211">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501212">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501213">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501214">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501215">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501216">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="501301">
		     		<td rowspan="16" >第三名</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501302">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501303">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501304">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501305">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501306">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501307">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501308">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501309">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501310">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501311">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501312">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501313">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501314">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501315">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501316">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="501401">
		     		<td rowspan="16" >第四名</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501402">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501403">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501404">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501405">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501406">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501407">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501408">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501409">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501410">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501411">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501412">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501413">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501414">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501415">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501416">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="501501">
		     		<td rowspan="16" >第五名</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501502">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501503">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501504">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501505">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501506">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501507">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501508">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501509">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501510">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501511">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501512">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501513">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501514">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501515">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501516">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="501601">
		     		<td rowspan="14" >第六名</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501602">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501603">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501604">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501607">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501608">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501609">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501610">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501611">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501612">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501613">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501614">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501615">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501616">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="501701">
		     		<td rowspan="14" >第七名</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501702">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501703">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501704">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501707">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501708">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501709">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501710">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501711">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501712">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501713">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501714">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501715">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501716">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="501801">
		     		<td rowspan="14" >第八名</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501802">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501803">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501804">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501807">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501808">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501809">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501810">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501811">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501812">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501813">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501814">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501815">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501816">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="501901">
		     		<td rowspan="14" >第九名</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501902">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501903">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501904">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501907">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501908">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501909">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501910">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501911">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501912">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501913">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501914">
		     		<td>8</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501915">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501916">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="502001">
		     		<td rowspan="14" >第十名</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="502002">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="502003">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="502004">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="502007">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="502008">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="502009">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="502010">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="502011">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="502012">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="502013">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="502014">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="502015">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="502016">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     </tbody> 
		    </table>
	    </div>
	    
	    <div id="GAME_66_PAGE" class="hide">
		   <table class="u-table2"> 
		     <thead> 
		      <tr > 
		       <th colspan="2">玩法</th> 
		       <th>赔率</th> 
		       <th>退水</th> 
		       <th>单注最低</th>
		       <th>单注最高</th> 
		       <th>单期最高</th> 
		      </tr> 
		     </thead> 
		     <tbody> 
		     	<tr play_id="6611201">
		     		<td rowspan="11" style="width: 100px">混合</td>
		     		<td style="width: 100px">大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611202">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611203">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611204">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611205">
		     		<td>大单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611206">
		     		<td>大双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611207">
		     		<td>小单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611208">
		     		<td>小双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611209">
		     		<td>极大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611210">
		     		<td>极小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611211">
		     		<td>豹子</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	
		     	<tr play_id="6611301">
		     		<td rowspan="3" style="width: 100px">波色</td>
		     		<td style="width: 100px">红波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611302">
		     		<td>绿波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611303">
		     		<td>蓝波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	
		     	<tr play_id="6611400">
		     		<td rowspan="28" style="width: 100px">特码</td>
		     		<td style="width: 100px">0</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611401">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611402">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611403">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611404">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611405">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611406">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611407">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611408">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611409">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611410">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611411">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611412">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611413">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611414">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611415">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611416">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611417">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611418">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611419">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611420">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611421">
		     		<td>21</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611422">
		     		<td>22</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611423">
		     		<td>23</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611424">
		     		<td>24</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611425">
		     		<td>25</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611426">
		     		<td>26</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="6611427">
		     		<td>27</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     </tbody>
		    </table>
		  </div>
	    
	    <div id="GAME_55_PAGE" class="hide">
		   <table class="u-table2"> 
		     <thead> 
		      <tr > 
		       <th colspan="2">玩法</th> 
		       <th>赔率</th> 
		       <th>退水</th> 
		       <th>单注最低</th>
		       <th>单注最高</th> 
		       <th>单期最高</th> 
		      </tr> 
		     </thead> 
		     <tbody> 
		     	<tr play_id="5510101">
		     		<td rowspan="21" style="width: 100px">冠、亚军和</td>
		     		<td style="width: 100px">大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510102">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510103">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510104">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510105">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510106">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510107">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510108">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510109">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510110">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510111">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510112">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510113">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510114">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510115">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510116">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510117">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510118">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510119">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510120">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510121">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	
		     	<tr play_id="5510211">
		     		<td rowspan="16" >冠军</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510212">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510213">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510214">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510215">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510216">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510201">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510202">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510203">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510204">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510205">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510206">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510207">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510208">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510209">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510210">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	
		     	<tr play_id="5510311">
		     		<td rowspan="16" >亚军</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510312">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510313">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510314">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510315">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510316">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510301">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510302">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510303">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510304">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510305">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510306">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510307">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510308">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510309">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510310">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	
		     	<tr play_id="5510411">
		     		<td rowspan="16" >第三名</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510412">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510413">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510414">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510415">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510416">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510401">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510402">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510403">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510404">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510405">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510406">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510407">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510408">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510409">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510410">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	
		     	<tr play_id="5510511">
		     		<td rowspan="16" >第四名</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510512">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510513">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510514">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510515">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510516">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510501">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510502">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510503">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510504">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510505">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510506">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510507">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510508">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510509">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510510">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	
		     	<tr play_id="5510611">
		     		<td rowspan="16" >第五名</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510612">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510613">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510614">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510615">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510616">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510601">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510602">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510603">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510604">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510605">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510606">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510607">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510608">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510609">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510610">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="5510711">
		     		<td rowspan="14" >第六名</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510712">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510713">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510714">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510701">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510702">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510703">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510704">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510705">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510706">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510707">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510708">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510709">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510710">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	
		     	<tr play_id="5510811">
		     		<td rowspan="14" >第七名</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510812">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510813">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510814">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510801">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510802">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510803">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510804">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510805">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510806">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510807">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510808">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510809">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510810">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	
		     	<tr play_id="5510911">
		     		<td rowspan="14" >第八名</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510912">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510913">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510914">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510901">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510902">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510903">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510904">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510905">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510906">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510907">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510908">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510909">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5510910">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	
		     	<tr play_id="5511011">
		     		<td rowspan="14" >第九名</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511012">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511013">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511014">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511001">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511002">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511003">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511004">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511005">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511006">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511007">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511008">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511009">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511010">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	
		     	<tr play_id="5511111">
		     		<td rowspan="14" >第十名</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511112">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511113">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511114">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511101">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511102">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511103">
		     		<td>3</td>
					<td type="odds"></td>
					<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511104">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511105">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511106">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511107">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511108">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511109">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     	<tr play_id="5511110">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney" ></td>
		     		<td type="maxMoney" ></td>
		     		<td type="maxTurnMoney" ></td>
		     	</tr>
		     </tbody> 
		    </table>
	    </div>
	    
	    <div id="GAME_1_PAGE" class="hide">
		   <table class="u-table2"> 
		     <thead> 
		      <tr > 
		       <th colspan="2">玩法</th> 
		       <th>赔率</th> 
		       <th>退水</th> 
		       <th>单注最低</th>
		       <th>单注最高</th> 
		       <th>单期最高</th> 
		      </tr> 
		     </thead> 
		     <tbody> 
		     	<tr play_id="1101">
		     		<td rowspan="7" style="width: 100px">总和-龙虎和</td>
		     		<td style="width: 100px">总和大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1102">
		     		<td>总和小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501003">
		     		<td>总和单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501004">
		     		<td>总和双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501005">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501006">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="501007">
		     		<td>和</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="1200">
		     		<td rowspan="14" >第一球</td>
		     		<td>0</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1201">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1202">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1203">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1204">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1205">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1206">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1207">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1208">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1209">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1210">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1211">
		     		<td>小</td>
		     		<td type="odds"></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1212">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1213">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="1300">
		     		<td rowspan="14" >第二球</td>
		     		<td>0</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1301">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1302">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1303">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1304">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1305">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1306">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1307">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1308">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1309">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1310">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1311">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1312">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1313">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="1400">
		     		<td rowspan="14" >第三球</td>
		     		<td>0</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1401">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1402">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1403">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1404">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1405">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1406">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1407">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1408">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1409">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1410">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1411">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1412">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1413">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="1500">
		     		<td rowspan="14" >第四球</td>
		     		<td>0</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1501">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1502">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1503">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1504">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1505">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1506">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1507">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1508">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1509">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1510">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1511">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1512">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1513">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="1600">
		     		<td rowspan="14" >第五球</td>
		     		<td>0</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1601">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1602">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1603">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1604">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1605">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1606">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1607">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1608">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1609">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1610">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1611">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1612">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1613">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="1701">
		     		<td rowspan="5" >前三</td>
		     		<td>豹子</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1702">
		     		<td>顺子</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1703">
		     		<td>对子</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1704">
		     		<td>半顺</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1705">
		     		<td>杂六</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1801">
		     		<td rowspan="5" >中三</td>
		     		<td>豹子</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1802">
		     		<td>顺子</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1803">
		     		<td>对子</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1804">
		     		<td>半顺</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1805">
		     		<td>杂六</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1901">
		     		<td rowspan="5" >后三</td>
		     		<td>豹子</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1902">
		     		<td>顺子</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1903">
		     		<td>对子</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1904">
		     		<td>半顺</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="1905">
		     		<td>杂六</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     </tbody> 
		    </table>
	    </div>
	    
	     <div id="GAME_60_PAGE" class="hide">
		   <table class="u-table2"> 
		     <thead> 
		      <tr > 
		       <th colspan="2">玩法</th> 
		       <th>赔率</th> 
		       <th>退水</th> 
		       <th>单注最低</th>
		       <th>单注最高</th> 
		       <th>单期最高</th> 
		      </tr> 
		     </thead> 
		     <tbody> 
		     	<tr play_id="607401">
		     		<td rowspan="6" style="width: 100px">总和</td>
		     		<td style="width: 100px">总和大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607402">
		     		<td>总和小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607403">
		     		<td>总和单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607404">
		     		<td>总和双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607405">
		     		<td>总和尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607406">
		     		<td>总和尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="607501">
		     		<td rowspan="37" >第一球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607502">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607503">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607504">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607505">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607506">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607507">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607508">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607509">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607510">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607511">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607512">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607513">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607514">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607515">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607516">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607517">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607518">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607519">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607520">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607521">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607522">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607523">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607524">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607525">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607526">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607527">
		     		<td>合数单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607528">
		     		<td>合数双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607529">
		     		<td>东</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607530">
		     		<td>南</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607531">
		     		<td>西</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607532">
		     		<td>北</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607533">
		     		<td>中</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607534">
		     		<td>发</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607535">
		     		<td>白</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607536">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607537">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="607601">
		     		<td rowspan="37" >第二球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607602">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607603">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607604">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607605">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607606">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607607">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607608">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607609">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607610">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607611">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607612">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607613">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607614">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607615">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607616">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607617">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607618">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607619">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607620">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607621">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607622">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607623">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607624">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607625">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607626">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607627">
		     		<td>合数单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607628">
		     		<td>合数双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607629">
		     		<td>东</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607630">
		     		<td>南</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607631">
		     		<td>西</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607632">
		     		<td>北</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607633">
		     		<td>中</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607634">
		     		<td>发</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607635">
		     		<td>白</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607636">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607637">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="607701">
		     		<td rowspan="37" >第三球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607702">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607703">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607704">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607705">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607706">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607707">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607708">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607709">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607710">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607711">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607712">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607713">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607714">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607715">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607716">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607717">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607718">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607719">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607720">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607721">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607722">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607723">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607724">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607725">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607726">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607727">
		     		<td>合数单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607728">
		     		<td>合数双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607729">
		     		<td>东</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607730">
		     		<td>南</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607731">
		     		<td>西</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607732">
		     		<td>北</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607733">
		     		<td>中</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607734">
		     		<td>发</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607735">
		     		<td>白</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607736">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607737">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<t play_id="607801">
		     		<td rowspan="37" >第四球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607802">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607803">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607804">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607805">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607806">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607807">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607808">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607809">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607810">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607811">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607812">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607813">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607814">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607815">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607816">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607817">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607818">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607819">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607820">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607821">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607822">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607823">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607824">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607825">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607826">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607827">
		     		<td>合数单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607828">
		     		<td>合数双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607829">
		     		<td>东</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607830">
		     		<td>南</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607831">
		     		<td>西</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607832">
		     		<td>北</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607833">
		     		<td>中</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607834">
		     		<td>发</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607835">
		     		<td>白</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607836">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607837">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="607901">
		     		<td rowspan="37" >第五球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607902">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607903">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607904">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607905">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607906">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607907">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607908">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607909">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607910">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607911">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607912">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607913">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607914">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607915">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607916">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607917">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607918">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607919">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>

		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607920">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607921">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607922">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607923">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607924">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607925">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607926">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607927">
		     		<td>合数单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607928">
		     		<td>合数双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607929">
		     		<td>东</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607930">
		     		<td>南</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607931">
		     		<td>西</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607932">
		     		<td>北</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607933">
		     		<td>中</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607934">
		     		<td>发</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607935">
		     		<td>白</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607936">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="607937">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="608001">
		     		<td rowspan="37" >第六球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608002">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608003">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608004">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608005">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608006">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608007">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608008">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608009">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608010">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608011">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608012">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608013">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608014">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608015">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608016">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608017">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608018">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608019">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608020">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608021">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608022">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608023">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608024">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608025">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608026">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608027">
		     		<td>合数单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608028">
		     		<td>合数双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608029">
		     		<td>东</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608030">
		     		<td>南</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608031">
		     		<td>西</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608032">
		     		<td>北</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608033">
		     		<td>中</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608034">
		     		<td>发</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608035">
		     		<td>白</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608036">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608037">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="608101">
		     		<td rowspan="37" >第七球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608102">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608103">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608103">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608104">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608105">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608106">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608108">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608109">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608110">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608111">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608112">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608113">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608114">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608115">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608116">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608117">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608118">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608119">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608120">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608121">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608122">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608123">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608124">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608125">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608126">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608127">
		     		<td>合数单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608128">
		     		<td>合数双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608129">
		     		<td>东</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608130">
		     		<td>南</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608131">
		     		<td>西</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608132">
		     		<td>北</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608133">
		     		<td>中</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608134">
		     		<td>发</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608135">
		     		<td>白</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608136">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608137">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="608201">
		     		<td rowspan="37" >第八球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608202">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608203">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608204">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608205">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608206">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608207">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608208">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608209">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608210">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608211">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608212">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608213">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608214">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608215">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608216">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608217">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608218">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608219">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608220">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608221">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608222">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608223">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608224">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608225">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608226">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608227">
		     		<td>合数单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608228">
		     		<td>合数双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608229">
		     		<td>东</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608230">
		     		<td>南</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608231">
		     		<td>西</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608232">
		     		<td>北</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608233">
		     		<td>中</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608234">
		     		<td>发</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608235">
		     		<td>白</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608236">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608237">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="608301">
		     		<td rowspan="20" >正码</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608302">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608303">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608304">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608305">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608306">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608307">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608308">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608309">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608310">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608311">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608312">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608313">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608314">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608315">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608316">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608317">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608318">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608319">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608320">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="608401">
		     		<td rowspan="6" >连码</td>
		     		<td>任选二</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608402">
		     		<td>选二连组</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608403">
		     		<td>任选三</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608404">
		     		<td>选三前组</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608405">
		     		<td>任选四</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="608406">
		     		<td>任选五</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     </tbody>
		    </table>
		   </div>
		   
		   
		  <div id="GAME_10_PAGE" class="hide">
		   <table class="u-table2"> 
		     <thead> 
		      <tr > 
		       <th colspan="2">玩法</th> 
		       <th>赔率</th> 
		       <th>退水</th> 
		       <th>单注最低</th>
		       <th>单注最高</th> 
		       <th>单期最高</th> 
		      </tr> 
		     </thead> 
		     <tbody> 
		     	<tr play_id="105601">
		     		<td rowspan="6" style="width: 100px">三军</td>
		     		<td style="width: 100px">1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105602">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105603">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105604">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105605">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105606">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105701">
		     		<td rowspan="6" >围骰</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105702">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105703">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105704">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105705">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105706">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105804">
		     		<td rowspan="15" >点数</td>
		     		<td>4点</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105805">
		     		<td>5点</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105806">
		     		<td>6点</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105807">
		     		<td>7点</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105808">
		     		<td>8点</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105809">
		     		<td>9点</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105810">
		     		<td>10点</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105810">
		     		<td>10点</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105811">
		     		<td>11点</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105812">
		     		<td>12点</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105813">
		     		<td>13点</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105814">
		     		<td>14点</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105815">
		     		<td>15点</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105816">
		     		<td>16点</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105817">
		     		<td>17点</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="105912">
		     		<td rowspan="15" >长牌</td>
		     		<td>1_2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105913">
		     		<td>1_3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105914">
		     		<td>1_4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105915">
		     		<td>1_5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105808">
		     		<td>1_6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105923">
		     		<td>2_3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105924">
		     		<td>2_4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105925">
		     		<td>2_5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105926">
		     		<td>2_6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105934">
		     		<td>3_4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105935">
		     		<td>3_5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105936">
		     		<td>3_6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105945">
		     		<td>4_5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105956">
		     		<td>4_6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="105956">
		     		<td>5_6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="106011">
		     		<td rowspan="6" >短牌</td>
		     		<td>1_1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="106022">
		     		<td>2_2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="106033">
		     		<td>3_3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="106044">
		     		<td>4_4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="106055">
		     		<td>5_5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="106066">
		     		<td>6_6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="106101">
		     		<td rowspan="2" >大小</td>
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="106102">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="106201">
		     		<td colspan="2">全骰</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     </tbody>
		    </table>
		   </div>
		   <div id="GAME_61_PAGE" class="hide">
		   <table class="u-table2"> 
		     <thead> 
		      <tr > 
		       <th colspan="2">玩法</th> 
		       <th>赔率</th> 
		       <th>退水</th> 
		       <th>单注最低</th>
		       <th>单注最高</th> 
		       <th>单期最高</th> 
		      </tr> 
		     </thead> 
		     <tbody> 
		     	<tr play_id="616301">
		     		<td rowspan="6" style="width: 100px">总和</td>
		     		<td style="width: 100px">总和大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616302">
		     		<td>总和小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616303">
		     		<td>总和单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616304">
		     		<td>总和双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616305">
		     		<td>总和尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616306">
		     		<td >总和尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616401">
		     		<td rowspan="37" >第一球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616402">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616403">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616404">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616405">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616406">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616407">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616408">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616409">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616410">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616411">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616412">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616413">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616414">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616415">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616416">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616417">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616418">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616419">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616420">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616421">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616422">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616423">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616424">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616425">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616426">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616427">
		     		<td>合数单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616428">
		     		<td>合数双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616429">
		     		<td>东</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616430">
		     		<td>南</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616431">
		     		<td>西</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616432">
		     		<td>北</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616433">
		     		<td>中</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616434">
		     		<td>发</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616435">
		     		<td>白</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616436">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616437">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="616501">
		     		<td rowspan="37" >第二球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616502">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616503">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616504">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616505">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616506">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616507">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616508">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616509">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616510">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616511">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616512">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616513">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616514">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616515">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616516">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616517">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616518">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616519">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616520">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616521">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616522">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616523">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616524">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616525">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616526">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616527">
		     		<td>合数单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616528">
		     		<td>合数双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616529">
		     		<td>东</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616530">
		     		<td>南</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616531">
		     		<td>西</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616532">
		     		<td>北</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616533">
		     		<td>中</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616534">
		     		<td>发</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616535">
		     		<td>白</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616536">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616537">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>     	
		     	
		     	
		     	<tr play_id="616601">
		     		<td rowspan="37" >第三球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616602">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616603">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616604">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616605">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616606">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>

		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616607">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616608">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616609">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616610">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616611">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616612">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616613">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616614">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616615">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616616">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616617">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616618">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616619">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616620">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616621">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616622">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616623">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616624">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616625">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616626">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616627">
		     		<td>合数单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616628">
		     		<td>合数双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616629">
		     		<td>东</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616630">
		     		<td>南</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616631">
		     		<td>西</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616632">
		     		<td>北</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616633">
		     		<td>中</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616634">
		     		<td>发</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616635">
		     		<td>白</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616636">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616637">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="616701">
		     		<td rowspan="37">第四球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     	</tr>
		     	<tr play_id="616702">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616703">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616704">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616705">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616706">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616707">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616708">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616709">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616710">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616711">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616712">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616713">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616714">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616715">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616716">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616717">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616718">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616719">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616720">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616721">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616722">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616723">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616724">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616725">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616726">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616727">
		     		<td>合数单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616728">
		     		<td>合数双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616729">
		     		<td>东</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616730">
		     		<td>南</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616731">
		     		<td>西</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616732">
		     		<td>北</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616733">
		     		<td>中</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616734">
		     		<td>发</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616735">
		     		<td>白</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616736">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616737">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="616801">
		     		<td rowspan="37" >第五球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616802">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616803">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616804">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616805">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616806">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616807">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616808">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616809">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616810">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616811">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616812">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616813">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616814">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616815">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616816">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616817">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616818">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616819">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616820">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616821">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616822">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616823">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616824">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616825">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616826">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616827">
		     		<td>合数单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616828">
		     		<td>合数双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616829">
		     		<td>东</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616830">
		     		<td>南</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616831">
		     		<td>西</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616832">
		     		<td>北</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616833">
		     		<td>中</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616834">
		     		<td>发</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616835">
		     		<td>白</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616836">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616837">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
				<tr play_id="616901">
		     		<td rowspan="37" >第六球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616902">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616903">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616904">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616905">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616906">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616907">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616908">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616909">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616910">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616911">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616912">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616913">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616914">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616915">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616916">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616917">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616918">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616919">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616920">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616921">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616922">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616923">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616924">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616925">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616926">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616927">
		     		<td>合数单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616928">
		     		<td>合数双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616929">
		     		<td>东</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616930">
		     		<td>南</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616931">
		     		<td>西</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616932">
		     		<td>北</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616933">
		     		<td>中</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616934">
		     		<td>发</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616935">
		     		<td>白</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616936">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616937">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="617001">
		     		<td rowspan="37" >第七球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617002">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617003">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617004">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617005">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617006">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617007">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617008">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617009">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617010">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617011">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617012">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617013">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617014">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617015">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617016">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617017">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617018">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617019">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617020">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617021">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617022">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617023">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617024">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617025">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617026">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617027">
		     		<td>合数单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617028">
		     		<td>合数双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617029">
		     		<td>东</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617030">
		     		<td>南</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617031">
		     		<td>西</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617032">
		     		<td>北</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617033">
		     		<td>中</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617034">
		     		<td>发</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617035">
		     		<td>白</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617036">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617037">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="617101">
		     		<td rowspan="37" >第八球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617102">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617103">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617104">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617105">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617106">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617107">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617108">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617109">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617110">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617111">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617112">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617113">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617114">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617115">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617116">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617117">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617118">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617119">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617120">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617121">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617122">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617123">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617124">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617125">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617126">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617127">
		     		<td>合数单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617128">
		     		<td>合数双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617129">
		     		<td>东</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617130">
		     		<td>南</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617131">
		     		<td>西</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617132">
		     		<td>北</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617133">
		     		<td>中</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617134">
		     		<td>发</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617135">
		     		<td>白</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617136">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>

		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617137">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="617201">
		     		<td rowspan="20" >正码</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617202">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617203">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617204">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617205">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617206">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617207">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617208">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617209">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617210">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617211">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617212">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617213">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617214">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617215">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617216">
		     		<td>16</td>

		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617217">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617218">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617219">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="617220">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="616301">
		     		<td rowspan="6" >连码</td>
		     		<td>任选二</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616302">
		     		<td>选二连组</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616303">
		     		<td>任选三</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616304">
		     		<td>选三前组</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616305">
		     		<td>任选四</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="616306">
		     		<td>任选五</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     </tbody>
		    </table>
		   </div> 
		   
		   <div id="GAME_65_PAGE" class="hide">
		   <table class="u-table2"> 
		     <thead> 
		      <tr > 
		       <th colspan="2">玩法</th> 
		       <th>赔率</th> 
		       <th>退水</th> 
		       <th>单注最低</th>
		       <th>单注最高</th> 
		       <th>单期最高</th> 
		      </tr> 
		     </thead> 
		     <tbody> 
		     	<tr play_id="652101">
		     		<td rowspan="9" style="width: 100px">总和、总和过关</td>
		     		<td style="width: 100px">总和大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652102">
		     		<td>总和小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652103">
		     		<td>总和单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652104">
		     		<td>总和双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652105">
		     		<td>总和810</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652106">
		     		<td>总大单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652107">
		     		<td>总大双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652108">
		     		<td>总小单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652109">
		     		<td>总小双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652301">
		     		<td rowspan="3" >前后和</td>
		     		<td>前(多)</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652302">
		     		<td>后(少)</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652303">
		     		<td>前后和</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652401">
		     		<td rowspan="3" >单双和</td>
		     		<td>单(多)</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652402">
		     		<td>双(多)</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652403">
		     		<td>单双(和)</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652501">
		     		<td rowspan="5" >五行</td>
		     		<td>金</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652502">
		     		<td>木</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652503">
		     		<td>水</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652504">
		     		<td>火</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652505">
		     		<td>土</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652601">
		     		<td rowspan="80" >正码</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652602">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652603">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652604">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652605">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652606">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652607">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652608">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652609">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652610">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652611">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652612">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652613">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652614">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652615">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652616">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652617">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652618">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652619">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652620">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652621">
		     		<td>21</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652622">
		     		<td>22</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652623">
		     		<td>23</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652624">
		     		<td>24</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652625">
		     		<td>25</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652626">
		     		<td>26</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652627">
		     		<td>27</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652628">
		     		<td>28</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652629">
		     		<td>29</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652630">
		     		<td>30</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652631">
		     		<td>31</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652632">
		     		<td>32</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652633">
		     		<td>33</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652634">
		     		<td>34</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652635">
		     		<td>35</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652636">
		     		<td>36</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652637">
		     		<td>37</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652638">
		     		<td>38</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652639">
		     		<td>39</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652640">
		     		<td>40</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652641">
		     		<td>41</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652642">
		     		<td>42</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652643">
		     		<td>43</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652644">
		     		<td>44</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652645">
		     		<td>45</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652646">
		     		<td>46</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652647">
		     		<td>47</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652648">
		     		<td>48</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652649">
		     		<td>49</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652650">
		     		<td>50</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652651">
		     		<td>51</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652652">
		     		<td>52</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652653">
		     		<td>53</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652654">
		     		<td>54</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652655">
		     		<td>55</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652656">
		     		<td>56</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652657">
		     		<td>57</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652658">
		     		<td>58</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652659">
		     		<td>59</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652660">
		     		<td>60</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652661">
		     		<td>61</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652662">
		     		<td>62</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652663">
		     		<td>63</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652664">
		     		<td>64</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652665">
		     		<td>65</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652666">
		     		<td>66</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652667">
		     		<td>67</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652668">
		     		<td>68</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652669">
		     		<td>69</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652670">
		     		<td>70</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652671">
		     		<td>71</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652672">
		     		<td>72</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652673">
		     		<td>73</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652674">
		     		<td>74</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652675">
		     		<td>75</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652676">
		     		<td>76</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652677">
		     		<td>77</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652678">
		     		<td>78</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652679">
		     		<td>79</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="652680">
		     		<td>80</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     </tbody>
		    </table>
		   </div> 
		   
		   
		   <div id="GAME_3_PAGE" class="hide">
		   <table class="u-table2"> 
		     <thead> 
		      <tr > 
		       <th colspan="2">玩法</th> 
		       <th>赔率</th> 
		       <th>退水</th> 
		       <th>单注最低</th>
		       <th>单注最高</th> 
		       <th>单期最高</th> 
		      </tr> 
		     </thead> 
		     <tbody> 
		     	<tr play_id="34701">
		     		<td rowspan="7" style="width: 100px">总和-龙虎和</td>
		     		<td style="width: 100px">总和大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34702">
		     		<td>总和小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34703">
		     		<td>总和单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34704">
		     		<td>总和双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34705">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34706">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34707">
		     		<td>和</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="34800">
		     		<td rowspan="14" >第一球</td>
		     		<td>0</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34801">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34802">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34803">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34804">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34805">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34806">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34807">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34808">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34809">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34810">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34811">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34812">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34813">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="34900">
		     		<td rowspan="14" >第二球</td>
		     		<td>0</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34901">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34902">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34903">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34904">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34905">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34906">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34907">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34908">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34909">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34910">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34911">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34912">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="34913">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="35000">
		     		<td rowspan="14" >第三球</td>
		     		<td>0</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35001">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35002">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35003">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35004">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35005">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35006">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35007">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35008">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35009">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35010">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35011">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35012">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35013">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="35100">
		     		<td rowspan="14" >第四球</td>
		     		<td>0</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35101">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35102">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35103">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35104">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35105">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35106">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35107">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35108">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35109">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35110">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35111">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35112">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35113">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="35200">
		     		<td rowspan="14" >第五球</td>
		     		<td>0</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35201">
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35202">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35203">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35204">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35205">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35206">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35207">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35208">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35209">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35210">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35211">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35212">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35213">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="35301">
		     		<td rowspan="5" >前三</td>
		     		<td>豹子</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35302">
		     		<td>顺子</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35303">
		     		<td>对子</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35304">
		     		<td>半顺</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35305">
		     		<td>杂六</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35401">
		     		<td rowspan="5" >中三</td>
		     		<td>豹子</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35402">
		     		<td>顺子</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35403">
		     		<td>对子</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35404">
		     		<td>半顺</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35405">
		     		<td>杂六</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35501">
		     		<td rowspan="5" >后三</td>
		     		<td>豹子</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35502">
		     		<td>顺子</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35503">
		     		<td>对子</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35504">
		     		<td>半顺</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="35505">
		     		<td>杂六</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     </tbody> 
		    </table>
	    </div>
	    
	    <div id="GAME_21_PAGE" class="hide">
		   <table class="u-table2"> 
		     <thead> 
		      <tr > 
		       <th colspan="2">玩法</th> 
		       <th>赔率</th> 
		       <th>退水</th> 
		       <th>单注最低</th>
		       <th>单注最高</th> 
		       <th>单期最高</th> 
		      </tr> 
		     </thead> 
		     <tbody> 
		     	<tr play_id="212701">
		     		<td rowspan="9" style="width: 100px">总和</td>
		     		<td style="width: 100px">总和大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="212705">
		     		<td>总和小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="212702">
		     		<td>总和单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="212706">
		     		<td>总和双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="212703">
		     		<td>总和尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="212707">
		     		<td>总和尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="212705">
		     		<td>总和小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="212704">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="212708">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="213001">
		     		<td rowspan="15" >第一球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213002">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213003">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213004">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213005">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213006">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213007">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213008">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213009">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" play_id=213009></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213010">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213011">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213012">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213013">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213014">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213015">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="213101">
		     		<td rowspan="15" >第二球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213102">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213103">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213104">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213105">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213106">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213107">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213108">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213009">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" play_id=213009></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213110">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213111">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213112">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213113">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213114">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213115">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="213201">
		     		<td rowspan="15" >第三球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213202">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213203">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213204">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213205">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213206">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213207">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213208">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213009">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" play_id=213009></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213210">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213211">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213212">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213213">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213214">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213215">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="213301">
		     		<td rowspan="15" >第四球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213302">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213303">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213304">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213305">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213306">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213307">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213308">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213009">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" play_id=213009></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213310">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213311">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213312">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213313">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213314">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213315">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="213401">
		     		<td rowspan="15" >第五球</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213402">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213403">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213404">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213405">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213406">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213407">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213408">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213009">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" play_id=213009></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213410">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213411">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213412">
		     		<td>大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213413">
		     		<td>小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213414">
		     		<td>单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213415">
		     		<td>双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="213501">
		     		<td rowspan="11" >一中一</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213402">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213403">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213404">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213405">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213406">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213407">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213408">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213009">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" play_id=213009></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213410">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213411">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="213501">
		     		<td rowspan="11" >一中一</td>
		     		<td>1</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213502">
		     		<td>2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213503">
		     		<td>3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213504">
		     		<td>4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213505">
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213506">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213507">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213508">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213009">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" play_id=213009></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213510">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213511">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="213601">
		     		<td rowspan="9" >连码</td>
		     		<td>任选二中二</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213602">
		     		<td>任选三中三</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213603">
		     		<td>任选四中四</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213604">
		     		<td>任选五中五</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213605">
		     		<td>任选六中五</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213606">
		     		<td>任选七中五</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213607">
		     		<td>任选八中五</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213608">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
				<tr play_id="213609">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="213701">
		     		<td rowspan="2" >直选</td>
		     		<td>前二直选</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="213702">
		     		<td>前三直选</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	</tbody> 
		    </table>
	    </div>
		
		
		
	    <div id="GAME_70_PAGE" class="hide">
		   <table class="u-table2"> 
		     <thead> 
		      <tr > 
		       <th colspan="2">玩法</th> 
		       <th>赔率</th> 
		       <th>退水</th> 
		       <th>单注最低</th>
		       <th>单注最高</th> 
		       <th>单期最高</th> 
		      </tr> 
		     </thead> 
		     <tbody> 
		     	<tr play_id="708501">
		     		<td rowspan="49" style="width: 100px">特码A</td>
		     		<td style="width: 100px">01</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708502">
		     		<td>02</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708503">
		     		<td>03</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708504">
		     		<td>04</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708505">
		     		<td>05</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708506">
		     		<td>06</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708507">
		     		<td>07</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708508">
		     		<td>08</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708509">
		     		<td>09</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708510">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708511">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708512">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708513">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708514">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708515">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708516">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708517">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708518">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708519">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708520">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708521">
		     		<td>21</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708522">
		     		<td>22</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708523">
		     		<td>23</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708524">
		     		<td>24</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708525">
		     		<td>25</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708526">
		     		<td>26</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708527">
		     		<td>27</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708528">
		     		<td>28</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708529">
		     		<td>29</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708530">
		     		<td>30</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708531">
		     		<td>31</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708532">
		     		<td>32</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708533">
		     		<td>33</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708534">
		     		<td>34</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708535">
		     		<td>35</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708536">
		     		<td>36</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708537">
		     		<td>37</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708538">
		     		<td>38</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708539">
		     		<td>39</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708540">
		     		<td>40</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708541">
		     		<td>41</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708542">
		     		<td>42</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708543">
		     		<td>43</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708544">
		     		<td>44</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708545">
		     		<td>45</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708546">
		     		<td>46</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708547">
		     		<td>47</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708548">
		     		<td>48</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708549">
		     		<td>49</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="708550">
		     		<td rowspan="49" >特码B</td>
		     		<td>01</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708551">
		     		<td>02</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708552">
		     		<td>03</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708553">
		     		<td>04</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708554">
		     		<td>05</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708555">
		     		<td>06</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708556">
		     		<td>07</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708557">
		     		<td>08</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708558">
		     		<td>09</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708559">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708560">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708561">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708562">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708563">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708564">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708565">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708566">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708567">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708568">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708569">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708570">
		     		<td>21</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708571">
		     		<td>22</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708572">
		     		<td>23</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708573">
		     		<td>24</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708574">
		     		<td>25</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708575">
		     		<td>26</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708576">
		     		<td>27</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708577">
		     		<td>28</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708578">
		     		<td>29</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708579">
		     		<td>30</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708580">
		     		<td>31</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708581">
		     		<td>32</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708582">
		     		<td>33</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708583">
		     		<td>34</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708584">
		     		<td>35</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708585">
		     		<td>36</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708586">
		     		<td>37</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708587">
		     		<td>38</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708588">
		     		<td>39</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708589">
		     		<td>40</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708590">
		     		<td>41</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708591">
		     		<td>42</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708592">
		     		<td>43</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708593">
		     		<td>44</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708594">
		     		<td>45</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708595">
		     		<td>46</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708596">
		     		<td>47</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708597">
		     		<td>48</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708598">
		     		<td>49</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="708601">
		     		<td rowspan="24" >两面</td>
		     		<td>特大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708602">
		     		<td>特小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708603">
		     		<td>特单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708604">
		     		<td>特双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708605">
		     		<td>特合大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708606">
		     		<td>特合小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708607">
		     		<td>特合单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708608">
		     		<td>特合双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708609">
		     		<td>特尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708610">
		     		<td>特尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708611">
		     		<td>特大单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708612">
		     		<td>特大双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708613">
		     		<td>特小单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708614">
		     		<td>特小双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708615">
		     		<td>特天肖</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708616">
		     		<td>特地肖</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708617">
		     		<td>特前肖</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708618">
		     		<td>特后肖</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708619">
		     		<td>特家肖</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708620">
		     		<td>特野肖</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708621">
		     		<td>总和单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708622">
		     		<td>总和双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708623">
		     		<td>总和大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708624">
		     		<td>总和小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="708701">
		     		<td rowspan="27" >色波</td>
		     		<td>红波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708702">
		     		<td>蓝波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708703">
		     		<td>绿波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708704">
		     		<td>红单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708705">
		     		<td>红双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708706">
		     		<td>红大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708707">
		     		<td>红小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708708">
		     		<td>蓝单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708709">
		     		<td>蓝双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708710">
		     		<td>蓝大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708711">
		     		<td>蓝小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708712">
		     		<td>绿单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708713">
		     		<td>绿双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708714">
		     		<td>绿大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708715">
		     		<td>绿小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708716">
		     		<td>红大单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708717">
		     		<td>红大双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708718">
		     		<td>红小单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708719">
		     		<td>红小双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708720">
		     		<td>蓝大单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708721">
		     		<td>蓝大双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708722">
		     		<td>蓝小单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708723">
		     		<td>蓝小双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708724">
		     		<td>绿大单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708725">
		     		<td>绿大双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708726">
		     		<td>绿小单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708727">
		     		<td>绿小双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="708801">
		     		<td rowspan="12" >特肖</td>
		     		<td>鼠</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708802">
		     		<td>牛</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708803">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708804">
		     		<td>兔</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708805">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708806">
		     		<td>蛇</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708807">
		     		<td>马</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708808">
		     		<td>羊</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708809">
		     		<td>猴</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708810">
		     		<td>鸡</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708811">
		     		<td>狗</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708812">
		     		<td>猪</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="708902">
		     		<td rowspan="10" >合肖</td>
		     		<td>合肖2</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708903">
		     		<td>合肖3</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708904">
		     		<td>合肖4</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708905">
		     		<td>合肖5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708906">
		     		<td>合肖6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708907">
		     		<td>合肖7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708908">
		     		<td>合肖8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708909">
		     		<td>合肖9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708910">
		     		<td>合肖10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="708911">
		     		<td>合肖11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="709001">
		     		<td rowspan="15" >头尾数</td>
		     		<td>0头</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709002">
		     		<td>1头</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709003">
		     		<td>2头</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709004">
		     		<td>3头</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709005">
		     		<td>4头</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709006">
		     		<td>1尾</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709007">
		     		<td>2尾</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709008">
		     		<td>3尾</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709009">
		     		<td>4尾</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709010">
		     		<td>5尾</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709011">
		     		<td>6尾</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709012">
		     		<td>7尾</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709013">
		     		<td>8尾</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709014">
		     		<td>9尾</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709015">
		     		<td>0尾</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="709101">
		     		<td rowspan="49" >正码</td>
		     		<td>01</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709102">
		     		<td>02</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709103">
		     		<td>03</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709104">
		     		<td>04</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709105">
		     		<td>05</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709106">
		     		<td>06</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709107">
		     		<td>07</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709108">
		     		<td>08</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709109">
		     		<td>09</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709110">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709111">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709112">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709113">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709114">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709115">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709116">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709117">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709118">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709119">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709120">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709121">
		     		<td>21</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709122">
		     		<td>22</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709123">
		     		<td>23</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709124">
		     		<td>24</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709125">
		     		<td>25</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709126">
		     		<td>26</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709127">
		     		<td>27</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709128">
		     		<td>28</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709129">
		     		<td>29</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709130">
		     		<td>30</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709131">
		     		<td>31</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709132">
		     		<td>32</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709133">
		     		<td>33</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709134">
		     		<td>34</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709135">
		     		<td>35</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709136">
		     		<td>36</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709137">
		     		<td>37</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709138">
		     		<td>38</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709139">
		     		<td>39</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709140">
		     		<td>40</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709141">
		     		<td>41</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709142">
		     		<td>42</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709143">
		     		<td>43</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709144">
		     		<td>44</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709145">
		     		<td>45</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709146">
		     		<td>46</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709147">
		     		<td>47</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709148">
		     		<td>48</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709149">
		     		<td>49</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="7092001">
		     		<td rowspan="62" >正一特</td>
		     		<td>01</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092002">
		     		<td>02</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092003">
		     		<td>03</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092004">
		     		<td>04</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092005">
		     		<td>05</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092006">
		     		<td>06</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092007">
		     		<td>07</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092008">
		     		<td>08</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092009">
		     		<td>09</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092010">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092011">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092012">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092013">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092014">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092015">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092016">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092017">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092018">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092019">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092020">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092021">
		     		<td>21</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092022">
		     		<td>22</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092023">
		     		<td>23</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092024">
		     		<td>24</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092025">
		     		<td>25</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092026">
		     		<td>26</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092027">
		     		<td>27</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092028">
		     		<td>28</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092029">
		     		<td>29</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092030">
		     		<td>30</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092031">
		     		<td>31</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092032">
		     		<td>32</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092032">
		     		<td>33</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092034">
		     		<td>34</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092035">
		     		<td>35</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092036">
		     		<td>36</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092037">
		     		<td>37</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092038">
		     		<td>38</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092039">
		     		<td>39</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092040">
		     		<td>40</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092041">
		     		<td>41</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092042">
		     		<td>42</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092043">
		     		<td>43</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092044">
		     		<td>44</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092045">
		     		<td>45</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092046">
		     		<td>46</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092047">
		     		<td>47</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092048">
		     		<td>48</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092049">
		     		<td>49</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092050">
		     		<td play_id="7092050">单码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092051">
		     		<td>双码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092052">
		     		<td>大码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092053">
		     		<td>小码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092054">
		     		<td>合单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092055">
		     		<td>合双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092056">
		     		<td>合大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092057">
		     		<td>合小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092058">
		     		<td>红波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092059">
		     		<td>蓝波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092060">
		     		<td>绿波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092061">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092062">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	
		     	<tr play_id="7092063">
		     		<td rowspan="62" >正二特</td>
		     		<td>01</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092064">
		     		<td>02</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092065">
		     		<td>03</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092066">
		     		<td>04</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092067">
		     		<td>05</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092068">
		     		<td>06</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092069">
		     		<td>07</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092070">
		     		<td>08</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092071">
		     		<td>09</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092072">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092073">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092074">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092075">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092076">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092077">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092078">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092079">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092080">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092081">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092082">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092083">
		     		<td>21</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092084">
		     		<td>22</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092085">
		     		<td>23</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092086">
		     		<td>24</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092087">
		     		<td>25</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092088">
		     		<td>26</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092089">
		     		<td>27</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092090">
		     		<td>28</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092091">
		     		<td>29</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092092">
		     		<td>30</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092093">
		     		<td>31</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092094">
		     		<td>32</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092095">
		     		<td>33</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092096">
		     		<td>34</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092097">
		     		<td>35</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092098">
		     		<td>36</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092099">
		     		<td>37</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092100">
		     		<td>38</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092101">
		     		<td>39</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092040">
		     		<td>40</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092103">
		     		<td>41</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092104">
		     		<td>42</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092105">
		     		<td>43</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092106">
		     		<td>44</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092107">
		     		<td>45</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092108">
		     		<td>46</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092109">
		     		<td>47</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092110">
		     		<td>48</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092111">
		     		<td>49</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092112">
		     		<td>单码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092113">
		     		<td>双码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092114">
		     		<td>大码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092115">
		     		<td>小码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092116">
		     		<td>合单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092117">
		     		<td>合双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092118">
		     		<td>合大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092119">
		     		<td>合小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092120">
		     		<td>红波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092121">
		     		<td>蓝波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092122">
		     		<td>绿波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092123">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092124">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	
		     	
		     	<tr play_id="7092125">
		     		<td rowspan="62" >正三特</td>
		     		<td>01</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092126">
		     		<td>02</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092127">
		     		<td>03</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092128">
		     		<td>04</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092129">
		     		<td>05</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092130">
		     		<td>06</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092131">
		     		<td>07</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092132">
		     		<td>08</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092133">
		     		<td>09</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092134">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092135">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092136">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092137">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092138">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092139">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092140">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092141">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092142">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092143">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092144">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092145">
		     		<td>21</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092146">
		     		<td>22</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092147">
		     		<td>23</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092148">
		     		<td>24</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092149">
		     		<td>25</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092150">
		     		<td>26</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092151">
		     		<td>27</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092152">
		     		<td>28</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092153">
		     		<td>29</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092154">
		     		<td>30</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092155">
		     		<td>31</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092156">
		     		<td>32</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092157">
		     		<td>33</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092158">
		     		<td>34</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092159">
		     		<td>35</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092160">
		     		<td>36</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092161">
		     		<td>37</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092162">
		     		<td>38</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092163">
		     		<td>39</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092164">
		     		<td>40</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092165">
		     		<td>41</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092166">
		     		<td>42</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092167">
		     		<td>43</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092168">
		     		<td>44</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092169">
		     		<td>45</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092170">
		     		<td>46</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092171">
		     		<td>47</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092172">
		     		<td>48</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092173">
		     		<td>49</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092174">
		     		<td>单码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092175">
		     		<td>双码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092176">
		     		<td>大码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092177">
		     		<td>小码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092178">
		     		<td>合单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092179">
		     		<td>合双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092180">
		     		<td>合大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092181">
		     		<td>合小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092182">
		     		<td>红波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092183">
		     		<td>蓝波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092184">
		     		<td>绿波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092185">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092186">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	
		     	
		     	<tr play_id="7092187">
		     		<td rowspan="62" >正四特</td>
		     		<td>01</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092188">
		     		<td>02</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092189">
		     		<td>03</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092190">
		     		<td>04</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092191">
		     		<td>05</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092192">
		     		<td>06</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092193">
		     		<td>07</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092194">
		     		<td>08</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092195">
		     		<td>09</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092196">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092197">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092198">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092199">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092200">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092201">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092202">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092203">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092204">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate" ></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092205">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092206">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092207">
		     		<td>21</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092208">
		     		<td>22</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092209">
		     		<td>23</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092210">
		     		<td>24</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092211">
		     		<td>25</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092212">
		     		<td>26</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092213">
		     		<td>27</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092214">
		     		<td>28</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092215">
		     		<td>29</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092216">
		     		<td>30</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092217">
		     		<td>31</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092218">
		     		<td>32</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092219">
		     		<td>33</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092220">
		     		<td>34</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092221">
		     		<td>35</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092222">
		     		<td>36</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092223">
		     		<td>37</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092224">
		     		<td>38</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092225">
		     		<td>39</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092226">
		     		<td>40</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092227">
		     		<td>41</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092228">
		     		<td>42</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092229">
		     		<td>43</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092230">
		     		<td>44</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092231">
		     		<td>45</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092232">
		     		<td>46</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092233">
		     		<td>47</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092234">
		     		<td>48</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092235">
		     		<td>49</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092236">
		     		<td>单码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092237">
		     		<td>双码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092238">
		     		<td>大码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092239">
		     		<td>小码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092240">
		     		<td>合单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092241">
		     		<td>合双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092242">
		     		<td>合大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092243">
		     		<td>合小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092244">
		     		<td>红波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092245">
		     		<td>蓝波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092246">
		     		<td>绿波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092247">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092248">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	
		     	
		     	<tr play_id="7092249">
		     		<td rowspan="62" >正五特</td>
		     		<td>01</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092250">
		     		<td>02</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092251">
		     		<td>03</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092252">
		     		<td>04</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092253">
		     		<td>05</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092254">
		     		<td>06</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092255">
		     		<td>07</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092256">
		     		<td>08</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092257">
		     		<td>09</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092258">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092259">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092260">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092261">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092262">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092263">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092264">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092265">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092266">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092267">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092268">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092269">
		     		<td>21</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092270">
		     		<td>22</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092271">
		     		<td>23</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092272">
		     		<td>24</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092273">
		     		<td>25</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092274">
		     		<td>26</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092275">
		     		<td>27</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092276">
		     		<td>28</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092277">
		     		<td>29</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092278">
		     		<td>30</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092279">
		     		<td>31</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092280">
		     		<td>32</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092281">
		     		<td>33</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092282">
		     		<td>34</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092283">
		     		<td>35</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092284">
		     		<td>36</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092285">
		     		<td>37</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092286">
		     		<td>38</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092287">
		     		<td>39</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092288">
		     		<td>40</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092289">
		     		<td>41</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092290">
		     		<td>42</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092291">
		     		<td>43</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092292">
		     		<td>44</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092293">
		     		<td>45</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092294">
		     		<td>46</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092295">
		     		<td>47</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092296">
		     		<td>48</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092297">
		     		<td>49</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092298">
		     		<td>单码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092299">
		     		<td>双码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092300">
		     		<td>大码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092301">
		     		<td>小码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092302">
		     		<td>合单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092303">
		     		<td>合双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092304">
		     		<td>合大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092305">
		     		<td>合小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092306">
		     		<td>红波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092307">
		     		<td>蓝波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092308">
		     		<td>绿波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092309">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092310">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	
		     	
		     	<tr play_id="7092311">
		     		<td rowspan="62" >正六特</td>
		     		<td>01</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092312">
		     		<td>02</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092313">
		     		<td>03</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092314">
		     		<td>04</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092315">
		     		<td>05</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092316">
		     		<td>06</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092317">
		     		<td>07</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092318">
		     		<td>08</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092319">
		     		<td>09</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092320">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092321">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092322">
		     		<td>12</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092323">
		     		<td>13</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092324">
		     		<td>14</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092325">
		     		<td>15</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092326">
		     		<td>16</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092327">
		     		<td>17</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092328">
		     		<td>18</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092329">
		     		<td>19</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092330">
		     		<td>20</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092331">
		     		<td>21</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092332">
		     		<td>22</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092333">
		     		<td>23</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092334">
		     		<td>24</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092335">
		     		<td>25</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092336">
		     		<td>26</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092337">
		     		<td>27</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092338">
		     		<td>28</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092339">
		     		<td>29</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092340">
		     		<td>30</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092341">
		     		<td>31</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092342">
		     		<td>32</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092343">
		     		<td>33</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092344">
		     		<td>34</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092345">
		     		<td>35</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092346">
		     		<td>36</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092347">
		     		<td>37</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092348">
		     		<td>38</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092349">
		     		<td>39</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092350">
		     		<td>40</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092351">
		     		<td>41</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092352">
		     		<td>42</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092353">
		     		<td>43</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092354">
		     		<td>44</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092355">
		     		<td>45</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092356">
		     		<td>46</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092357">
		     		<td>47</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092358">
		     		<td>48</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092359">
		     		<td>49</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092360">
		     		<td>单码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092361">
		     		<td>双码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092362">
		     		<td>大码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092363">
		     		<td>小码</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092364">
		     		<td>合单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092365">
		     		<td>合双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092366">
		     		<td>合大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092367">
		     		<td>合小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092368">
		     		<td>红波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092369">
		     		<td>蓝波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092370">
		     		<td>绿波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092371">
		     		<td>尾大</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7092372">
		     		<td>尾小</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="709301">
		     		<td rowspan="5" >五行</td>
		     		<td>金</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709302">
		     		<td>木</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709303">
		     		<td>水</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709304">
		     		<td>水</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709305">
		     		<td>土</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	
		     	
		     	
		     	<tr play_id="709401">
		     		<td rowspan="22" >平特一肖尾数</td>
		     		<td>鼠</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709402">
		     		<td>牛</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709403">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709404">
		     		<td>兔</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709405">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709406">
		     		<td>蛇</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709407">
		     		<td>马</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709408">
		     		<td>羊</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709409">
		     		<td>猴</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709410">
		     		<td>鸡</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709411">
		     		<td>猴</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709412">
		     		<td>猪</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709413">
		     		<td>0尾</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709414">
		     		<td>1尾</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709415">
		     		<td>2尾</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709416">
		     		<td>3尾</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709417">
		     		<td>4尾</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709418">
		     		<td>5尾</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709419">
		     		<td>6尾</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709420">
		     		<td>7尾</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709421">
		     		<td>8尾</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709422">
		     		<td>9尾</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="709501">
		     		<td rowspan="12" >正肖</td>
		     		<td>鼠</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709502">
		     		<td>牛</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709503">
		     		<td>虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709504">
		     		<td>兔</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709505">
		     		<td>龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709506">
		     		<td>蛇</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709507">
		     		<td>马</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709508">
		     		<td>羊</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709509">
		     		<td>猴</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709510">
		     		<td>鸡</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709511">
		     		<td>猴</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709512">
		     		<td>猪</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="709601">
		     		<td rowspan="4" >7色波</td>
		     		<td>红波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709602">
		     		<td>蓝波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709603">
		     		<td>绿波</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709604">
		     		<td>和局</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="709701">
		     		<td rowspan="8" >总肖</td>
		     		<td>2肖</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709702">
		     		<td>3肖</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709703">
		     		<td>4肖</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709704">
		     		<td>5肖</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709705">
		     		<td>6肖</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709706">
		     		<td>7肖</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709707">
		     		<td>总肖单</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709708">
		     		<td>总肖双</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="709805">
		     		<td rowspan="7" >自选不中</td>
		     		<td>5</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="709806">
		     		<td>6</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709807">
		     		<td>7</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709808">
		     		<td>8</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709809">
		     		<td>9</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709810">
		     		<td>10</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709811">
		     		<td>11</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	
		     	<tr play_id="709901">
		     		<td rowspan="88" >连肖连尾</td>
		     		<td>二连肖-鼠</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709902">
		     		<td>二连肖-牛</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709903">
		     		<td>二连肖-虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709904">
		     		<td>二连肖-兔</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709905">
		     		<td>二连肖-龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709906">
		     		<td>二连肖-蛇</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709907">
		     		<td>二连肖-马</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709908">
		     		<td>二连肖-羊</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709909">
		     		<td>二连肖-猴</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709910">
		     		<td>二连肖-鸡</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709911">
		     		<td>二连肖-狗</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709912">
		     		<td>二连肖-猪</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709913">
		     		<td>三连肖-鼠</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709914">
		     		<td>三连肖-牛</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709915">
		     		<td>三连肖-虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709916">
		     		<td>三连肖-兔</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709917">
		     		<td>三连肖-龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709918">
		     		<td>三连肖-蛇</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709919">
		     		<td>三连肖-马</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709920">
		     		<td>三连肖-羊</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709921">
		     		<td>三连肖-猴</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709922">
		     		<td>三连肖-鸡</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709923">
		     		<td>三连肖-狗</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709924">
		     		<td>三连肖-猪</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709925">
		     		<td>四连肖-鼠</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709926">
		     		<td>四连肖-牛</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709927">
		     		<td>四连肖-虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709928">
		     		<td>四连肖-兔</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709929">
		     		<td>四连肖-龙</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709930">
		     		<td>四连肖-蛇</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709931">
		     		<td>四连肖-马</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709932">
		     		<td>四连肖-羊</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709933">
		     		<td>四连肖-猴</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709934">
		     		<td>四连肖-鸡</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709935">
		     		<td>四连肖-狗</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709936">
		     		<td>四连肖-猪</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709937">
		     		<td>五连肖-鼠</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709938">
		     		<td>五连肖-牛</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709939">
		     		<td>五连肖-虎</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709940">
		     		<td>五连肖-兔</td>
		     		<td type="odds" ></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709941">
		     		<td>五连肖-龙</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709942">
		     		<td>五连肖-蛇</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709943">
		     		<td>五连肖-马</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709944">
		     		<td>五连肖-羊</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709945">
		     		<td>五连肖-猴</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709946">
		     		<td>五连肖-鸡</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709947">
		     		<td>五连肖-狗</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709948">
		     		<td>五连肖-猪</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709949">
		     		<td>二连尾-0</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709950">
		     		<td>二连尾-1</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr  play_id="709951">
		     		<td>二连尾-2</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709952">
		     		<td>二连尾-3</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709953">
		     		<td>二连尾-4</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709954">
		     		<td>二连尾-5</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709955">
		     		<td>二连尾-6</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709956">
		     		<td>二连尾-7</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709957">
		     		<td>二连尾-8</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709958">
		     		<td>二连尾-9</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709959">
		     		<td>三连尾-0</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709960">
		     		<td>三连尾-1</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709961">
		     		<td>三连尾-2</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709962">
		     		<td>三连尾-3</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709963">
		     		<td>三连尾-4</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709964">
		     		<td>三连尾-5</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709965">
		     		<td>三连尾-6</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709966">
		     		<td>三连尾-7</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709967">
		     		<td>三连尾-8</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709968">
		     		<td>三连尾-9</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709969">
		     		<td>四连尾-0</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709970">
		     		<td>四连尾-1</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709971">
		     		<td>四连尾-2</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709972">
		     		<td>四连尾-3</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709973">
		     		<td>四连尾-4</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709974">
		     		<td>四连尾-5</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709975">
		     		<td>四连尾-6</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709976">
		     		<td>四连尾-7</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709977">
		     		<td>四连尾-8</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709978">
		     		<td>四连尾-9</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709979">
		     		<td>五连尾-0</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709980">
		     		<td>五连尾-1</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709981">
		     		<td>五连尾-2</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709982">
		     		<td>五连尾-3</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709983">
		     		<td>五连尾-4</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709984">
		     		<td>五连尾-5</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709985">
		     		<td>五连尾-6</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709986">
		     		<td>五连尾-7</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709987">
		     		<td>五连尾-8</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="709988">
		     		<td>五连尾-9</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     	<tr play_id="7010001">
		     		<td rowspan="8" >连码</td>
		     		<td>三中二中二</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7010002">
		     		<td>三中二中三</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7010003">
		     		<td>三全中</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7010004">
		     		<td>二全中</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7010005">
		     		<td>二中特中特</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr play_id="7010006">
		     		<td>二中特中二</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr  play_id="7010007">
		     		<td>特串</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	<tr  play_id="7010008">
		     		<td>四全中</td>
		     		<td type="odds"></td>
		     		<td type="rebate"></td>
		     		<td type="minMoney"></td>
		     		<td type="maxMoney"></td>
		     		<td type="maxTurnMoney"></td>
		     	</tr>
		     	
		     </tbody>
		    </table>
		   </div>
		   </div>
 </div>
  <script type="text/javascript">
  	UserBetInfo.init();	
  </script>
 </body>
</html>