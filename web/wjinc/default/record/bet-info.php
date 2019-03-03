<?php
	$bet=$this->getRow("select * from {$this->prename}bets where id=?", $args[0]);
	if(!$bet) throw new Exception('单号不存在');
	$betCont=$bet['money'] * $bet['totalNums'];
?>
<div class="popupModal">
	<table cellpadding="0" cellspacing="0" style="width:600px;">
		
		<tr>
			<td width="170"><em>投注用户：</em><span class="red"><?=$this->iff($bet['username']==$this->user['username'], $bet['username'], preg_replace('/^(\w).*(\w{2})$/', '\1***\2', $bet['username']))?></span></td>
			<td colspan="2"><em>订单编号：</em><span class="red"><?=$bet['wjorderId']?></span></td>
            
		</tr>
        <tr>
			<td width="170"><em>彩种：</em><span class="red"><?=$this->types[$bet['type']]['title']?></span></td>
			<td  width="250"><em>投注时间：</em><span class="red"><?=date('m-d H:i:s',$bet['actionTime'])?></span></td>
            <td><em>订单状态：</em><em>
			<?php
				if($bet['isDelete']==1){
					echo '<font color="#999999">已撤单</font>';
				}elseif(!$bet['lotteryNo']){
					echo '<font color="#009900">未开奖</font>';
				}elseif($bet['zjCount']){
					echo '<font color="red">已派奖</font>';
				}else{
					echo '<font color="#00CC00">未中奖</font>';
				}
			?>
            </em>
            </td>
		</tr>
        <tr>
			<td><em>投注期号：</em><span class="red"><?=$bet['actionNo']?></span></td>
            <td><em>投注号码：</em><span class="red"><?=$bet['actionData']?><?php if($bet['betInfo']){echo '('.$bet['betInfo'].')';}?></span></td>  
            <td><em>玩法组：</em><span class="red"><?=$bet['Groupname']?></span></td> 
		</tr>
		<tr>
			<td><em>投注注数：</em><span class="red"><?=$bet['totalNums'].'注'?></span></td>
			<td><em>投注总额：</em><span class="red"><?=number_format($betCont, 2)?></span></td>
			<td><em>开奖时间：</em><span class="red"><?=$this->iff($bet['lotteryNo'], date('m-d H:i:s',$bet['kjTime']), '－')?></span></td>
		</tr>
         <tr>
			<td><em>中奖注数：</em><span class="red"><?=$this->iff($bet['lotteryNo'], $bet['zjCount'].'注', '－')?></span></td>
			<td><em>中奖金额：</em><span class="red"><?=$this->iff($bet['lotteryNo'], number_format($bet['bonus'], 2) .'元', '－')?></span></td>
			<td><em>购买盈亏：￥&nbsp</em><em class="green"><?=$this->iff($bet['lotteryNo'], number_format($bet['bonus'] - $betCont + $bet['rebateMoney'], 2), '－')?></em> 元<em class="green">&nbsp(<?=$this->iff($bet['lotteryNo'], $this->iff(number_format($bet['bonus'] - $betCont + $bet['rebateMoney'], 2)>=0,"赢","亏"), '－')?>)</em></td>
		</tr>
        <tr class="nobd">
			<td colspan="3"><em>开奖号码：</em><span class="red"><?=$this->ifs($bet['lotteryNo'], '－')?></span></td>
		</tr>
		
        
	</table>
</div>