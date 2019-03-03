<article class="module width_full">
<input type="hidden" value="<?=$this->user['username']?>" />
	<header><h3 class="tabs_involved">数据清理</h3></header>
	<form name="system_install" action="/admin778899.php/system/clearSettings" method="post" target="ajax" call="clearSettings" onajax="clearSettingsBefor">
	<table class="tablesorter left" cellspacing="0" width="100%">
			<tr>
				<td>清理账号规则</td>
				<td>账户金额低于&nbsp;<input type="text" class="textWid1" value="<?=$this->settings['clearMemberCoin']?>" name="clearMemberCoin" id="clearMemberCoin"/>元，&nbsp;且&nbsp;<input type="text" class="textWid1" value="<?=$this->settings['clearMemberDate']?>" name="clearMemberDate" id="clearMemberDate"/> &nbsp;天未登录&nbsp;&nbsp;<a method="post" target="ajax" onajax="clearUsersBefor" call="clearDataSuccess" title="数据清除不可修复，是否继续！" dataType="json" id="alt_btn3" href="/admin778899.php/System/clearUser">清理</a></td>
			</tr>
			<tr>
				<td>清理数据</td>
				<td>清除当前 <input type="date" readonly id="clearData" /> 
				以前的投注记录和会员报表数据&nbsp;&nbsp;<a method="post" target="ajax" onajax="clearDataBefor" call="clearDataSuccess" title="数据清除不可修复，是否继续！" dataType="json" id="alt_btn3" href="/admin778899.php/System/clearData">清理</a></td>
			</tr>
			<tr>
				<td>清理数据 2</td>
				<td>仅清除当前 <input type="date" readonly id="clearData2" /> 以前的采集记录数据&nbsp;&nbsp;<a method="post" target="ajax" onajax="clearDataBefor2" call="clearDataSuccess2" title="采集记录数据清除不可修复，是否继续！" dataType="json" id="alt_btn3" href="/admin778899.php/System/clearData2">清理</a></td>
			</tr>
			<tr>
				<td>清理数据3</td>
				<td>清除当前 <input type="date" readonly id="clearData3" /> 以前的帐变记录数据&nbsp;&nbsp;<a method="post" target="ajax" onajax="clearDataBefor3" call="clearDataSuccess3" title="数据清除不可修复，是否继续！" dataType="json" id="alt_btn3" href="/admin778899.php/System/clearData3">清理</a></td>
			</tr>
			<tr>
				<td>清理数据4</td>
				<td>清除当前 <input type="date" readonly id="clearData4" /> 以前的管理员日志数据&nbsp;&nbsp;<a method="post" target="ajax" onajax="clearDataBefor4" call="clearDataSuccess4" title="数据清除不可修复，是否继续！" dataType="json" id="alt_btn3" href="/admin778899.php/System/clearData4">清理</a></td>
			</tr>
			<tr>
				<td>清理数据5</td>
				<td>清除当前 <input type="date" readonly id="clearData5" /> 以前的会员登录日志数据&nbsp;&nbsp;<a method="post" target="ajax" onajax="clearDataBefor5" call="clearDataSuccess5" title="数据清除不可修复，是否继续！" dataType="json" id="alt_btn3" href="/admin778899.php/System/clearData5">清理</a></td>
			</tr>
			<tr>
				<td>清理数据6</td>
				<td>清除当前 <input type="date" readonly id="clearData6" /> 以前的提现记录数据&nbsp;&nbsp;<a method="post" target="ajax" onajax="clearDataBefor6" call="clearDataSuccess6" title="数据清除不可修复，是否继续！" dataType="json" id="alt_btn3" href="/admin778899.php/System/clearData6">清理</a></td>
			</tr>
			<tr>
				<td>清理数据7</td>
				<td>清除当前 <input type="date" readonly id="clearData7" /> 以前的充值记录数据&nbsp;&nbsp;<a method="post" target="ajax" onajax="clearDataBefor7" call="clearDataSuccess7" title="数据清除不可修复，是否继续！" dataType="json" id="alt_btn3" href="/admin778899.php/System/clearData7">清理</a></td>
			</tr>
	</table>
	<footer>
		<div class="submit_link">
			<input type="submit" value="保存修改设置" title="保存设置" class="alt_btn">&nbsp;&nbsp;
			<input type="button" onclick="load('system/clearSettings')" value="重置" title="重置原来的设置" >
		</div>
	</footer>
	</form>
</article>