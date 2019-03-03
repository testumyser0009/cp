<?php
	$sql="select u.username, u.coin, u.uid, u.parentId, sum(b.money * b.totalNums) betAmount, sum(b.rebateMoney) rebateMoneyDouble, sum(b.bonus) zjAmount,(select sum(c.amount) from ssc_member_cash c where c.`uid`=u.`uid` and c.state=0) cashAmount,(select sum(r.amount) from ssc_member_recharge r where r.`uid`=u.`uid` and r.state in(1,2,9)) rechargeAmount from ssc_members u left join ssc_bets b on u.uid=b.uid and b.lotteryNo !='' and b.isDelete=0 where u.uid=?";
	$var=$this->getRow($sql, $args[0]);

	$var['fanDianAmount']=$this->getValue("select sum(coin) from {$this->prename}coin_log where uid=? and liqType between 2 and 3", $args[0]);
	/*$var['rechargeAmount']=$this->getValue("select sum(coin) from {$this->prename}coin_log where uid=? and liqType=1", $args[0]);
	$var['cashAmount']=$this->getValue("select sum(abs(fcoin)) from {$this->prename}coin_log where uid=? and liqType=107", $args[0]);*/
	//print_r($parentData);

?>
<div>
	<table cellpadding="2" cellspacing="2" class="popupModal">
	<input type="hidden" value="<?=$this->user['username']?>" />
		<tr>
			<td class="title" width="180">用户名：</td>
			<td><input type="text" readonly value="<?=$var['username']?>"/></td>
		</tr>
        	<td class="title">投注总额</td>
            <td><input type="text" readonly value="<?=$this->ifs($var['betAmount'], '--')?>"/></td>
		</tr>
		<tr>
			<td class="title">中奖总额</td>
			<td><input type="text" readonly value="<?=$this->ifs($var['zjAmount'], '--')?>"/></td>
		</tr>
		<tr>
			<td class="title">退水总额</td>
			<td><input type="text" readonly value="<?=$this->ifs(number_format($var['rebateMoneyDouble'],2), '--')?>"/></td>
		</tr>
		<tr>
			<td class="title">总返点</td>
			<td><input type="text" readonly value="<?=$this->ifs($var['fanDianAmount'], '--')?>"/></td>
		</tr>
		<tr>
			<td class="title">充值</td>
			<td><input type="text" readonly value="<?=$this->ifs($var['rechargeAmount'], '--')?>"/></td>
		</tr>
		<tr>
			<td class="title">提现</td>
			<td><input type="text" readonly value="<?=$this->ifs($var['cashAmount'], '--')?>"/></td>
		</tr>
		<tr>
			<td class="title">余额</td>
			<td><input type="text" readonly value="<?=$this->ifs($var['coin'], '--')?>"/></td>
		</tr>
		<tr>
			<td class="title">盈亏</td>
			<td><input type="text" readonly value="<?=$this->ifs(number_format($var['zjAmount']-$var['betAmount']+$var['fanDianAmount']+$var['rebateMoneyDouble'],2), '--')?>"/></td>
		</tr>
	</table>
</div>