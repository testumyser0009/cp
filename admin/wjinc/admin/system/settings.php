<article class="module width_full">
<input type="hidden" value="<?=$this->user['username']?>" />
	<header><h3 class="tabs_involved">系统设置</h3></header>
	<form name="system_install" action="/admin778899.php/system/updateSettings" method="post" target="ajax" call="sysSettings" onajax="sysSettingsBefor">
	<table class="tablesorter left" cellspacing="0" width="100%">
		<tbody>
			<tr>
				<td>平台名称</td>
				<td><input type="text" value="<?=$this->settings['webName']?>" name="webName"/></td>
			</tr>
			<tr>
				<td>网站LOGO</td>
				<td><input type="text" value="<?=$this->settings['logoUrl']?>" name="logoUrl"/>请填写具体地址</td>
			</tr>
			<tr>
				<td>网站默认颜色</td>
				<td><input type="text" value="<?=$this->settings['defaultSkin']?>" name="defaultSkin"/>暂只支持blue和red</td>
			</tr>
			<tr>
				<td>网站开关</td>
				<td>
					<label><input type="radio" value="1" name="switchWeb" <?=$this->iff($this->settings['switchWeb'],'checked="checked"')?>/>开启</label>
					<label><input type="radio" value="0" name="switchWeb" <?=$this->iff(!$this->settings['switchWeb'],'checked="checked"')?>/>关闭</label>
				</td>
			</tr>
			<tr>
				<td>网站关闭公告</td>
				<td>
					<textarea name="webCloseServiceResult" cols="100" rows="3"><?=$this->settings['webCloseServiceResult']?></textarea>
				</td>
			</tr>
            <tr>
				<td>总投注开关</td>
				<td>
					<label><input type="radio" value="1" name="switchBuy" <?=$this->iff($this->settings['switchBuy'],'checked="checked"')?>/>开启</label>
					<label><input type="radio" value="0" name="switchBuy" <?=$this->iff(!$this->settings['switchBuy'],'checked="checked"')?>/>关闭</label>
				</td>

			</tr>
			<tr>
				<td>代理投注开关</td>
				<td>
					<label><input type="radio" value="1" name="switchDLBuy" <?=$this->iff($this->settings['switchDLBuy'],'checked="checked"')?>/>开启</label>
					<label><input type="radio" value="0" name="switchDLBuy" <?=$this->iff(!$this->settings['switchDLBuy'],'checked="checked"')?>/>关闭</label>
				</td>
			</tr>
			<tr>
				<td>总代投注开关</td>
				<td>
					<label><input type="radio" value="1" name="switchZDLBuy" <?=$this->iff($this->settings['switchZDLBuy'],'checked="checked"')?>/>开启</label>
					<label><input type="radio" value="0" name="switchZDLBuy" <?=$this->iff(!$this->settings['switchZDLBuy'],'checked="checked"')?>/>关闭</label>
				</td>
			</tr>
			<tr>
				<td>股东投注开关</td>
				<td>
					<label><input type="radio" value="1" name="switchGDBuy" <?=$this->iff($this->settings['switchGDBuy'],'checked="checked"')?>/>开启</label>
					<label><input type="radio" value="0" name="switchGDBuy" <?=$this->iff(!$this->settings['switchGDBuy'],'checked="checked"')?>/>关闭</label>
				</td>
			</tr>			
			<tr>
				<td>上级充值开关</td>
				<td>
					<label><input type="radio" value="1" name="recharge" <?=$this->iff($this->settings['recharge'],'checked="checked"')?>/>开启</label>
					<label><input type="radio" value="0" name="recharge" <?=$this->iff(!$this->settings['recharge'],'checked="checked"')?>/>关闭</label>
				</td>
			</tr>
			<tr>
				<td>返点最大值</td>
				<td><input type="text" class="textWid1" value="<?=$this->settings['fanDianMax']?>" name="fanDianMax"/>%</td>
			</tr>
			<tr>
				<td>上下级返点最小差值</td>
				<td><input type="text" class="textWid1" value="<?=$this->settings['fanDianDiff']?>" name="fanDianDiff"/>%</td>
			</tr>
			<tr>
				<td>充值限制</td>
				<td>
                	最低金额：<input type="text" class="textWid1" value="<?=$this->settings['rechargeMin']?>" name="rechargeMin"/>元&nbsp;&nbsp; 
                    最高金额：<input type="text" class="textWid1" value="<?=$this->settings['rechargeMax']?>" name="rechargeMax"/>元                    
                </td>
			</tr>
			<tr>
				<td>提现限制</td>
				<td>
                	消费满：<input type="text" class="textWid1" value="<?=$this->settings['cashMinAmount']?>" name="cashMinAmount"/>%&nbsp;&nbsp;
					最低金额：<input type="text" class="textWid1" value="<?=$this->settings['cashMin']?>" name="cashMin"/>元&nbsp;&nbsp;
					最高金额：<input type="text" class="textWid1" value="<?=$this->settings['cashMax']?>" name="cashMax"/>元&nbsp;&nbsp;
					时间段： 从 <input type="time" value="<?=$this->settings['cashFromTime']?>" name="cashFromTime" class="textWid1"/> 到 <input type="time" value="<?=$this->settings['cashToTime']?>" name="cashToTime" class="textWid1"/>
				</td>
			</tr>
            <tr>
				<td>客服状态</td>
				<td>
					<label><input type="radio" value="1" name="kefuStatus" <?=$this->iff($this->settings['kefuStatus'],'checked="checked"')?>/>开启</label>
					<label><input type="radio" value="0" name="kefuStatus" <?=$this->iff(!$this->settings['kefuStatus'],'checked="checked"')?>/>关闭</label>

				</td>
			</tr>
			<tr>
				<td>在线客服链接</td>
				<td>
					<textarea name="zxkfUrl" cols="100" rows="2"><?=$this->settings['zxkfUrl']?></textarea>
				</td>
			</tr>
			<tr>
				<td>QQ客服链接</td>
				<td>
					<textarea name="mainQQUrl" cols="100" rows="2"><?=$this->settings['mainQQUrl']?></textarea>
				</td>
			</tr>
			<tr>
				<td>微信客服链接</td>
				<td>
					<textarea name="mainWxUrl" cols="100" rows="2"><?=$this->settings['mainWxUrl']?></textarea>
				</td>
			</tr>
			<tr>
				<td>联系电话</td>
				<td>
					<input name="mainPhone"  type="text" value="<?=$this->settings['mainPhone']?>">
					&nbsp;&nbsp;QQ客服&nbsp;&nbsp;<input name="mainCustomerQQ" type="text" value="<?=$this->settings['mainCustomerQQ']?>">
                    &nbsp;&nbsp;代理QQ&nbsp;&nbsp;<input name="mainAgentQQ" type="text" value="<?=$this->settings['mainAgentQQ']?>">
					&nbsp;&nbsp;联系邮箱&nbsp;&nbsp;<input name="mainEmail" type="text" value="<?=$this->settings['mainEmail']?>" />
				</td>
			</tr>
			<tr>
				<td>提示</td>
				<td>
					以下设置进入下一年度才需要修改
				</td>
			</tr>
			<tr>
				<td>香港彩五行金</td>
				<td>
					<input name="lhcWxJin"  type="text" value="<?=$this->settings['lhcWxJin']?>">
                    &nbsp;&nbsp;香港彩五行木&nbsp;&nbsp;<input name="lhcWxMu"  type="text" value="<?=$this->settings['lhcWxMu']?>">
					&nbsp;&nbsp;香港彩五行水&nbsp;&nbsp;<input name="lhcWxShui"  type="text" value="<?=$this->settings['lhcWxShui']?>">
				</td>
			</tr>
			<tr>
				<td>香港彩五行土</td>
				<td>
					<input name="lhcWxTu"  type="text" value="<?=$this->settings['lhcWxTu']?>">
                    &nbsp;&nbsp;香港彩五行火&nbsp;&nbsp;<input name="lhcWxHuo"  type="text" value="<?=$this->settings['lhcWxHuo']?>">
                      &nbsp;&nbsp;本年生肖&nbsp;&nbsp;<input name="animalsYear"  type="text" value="<?=$this->settings['animalsYear']?>">
				</td>
			</tr>
            
		</tbody>
	</table>
	<footer>
		<div class="submit_link">
			<input type="submit" value="保存修改设置" title="保存设置" class="alt_btn">&nbsp;&nbsp;
			<input type="button" onclick="load('system/settings')" value="重置" title="重置原来的设置" >
		</div>
	</footer>
	</form>
</article>