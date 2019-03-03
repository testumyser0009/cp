<?php
    $this->gettypes();
	$bet=$this->getRow("select * from {$this->prename}bets where id=?", $args[0]);
	
	if(!$bet) throw new Exception('单号不存在');
	$betCont=$bet['money'];
?>
<div>
<input type="hidden" value="<?=$this->user['username']?>" />
<form action="/admin778899.php/business/betinfoUpdateed" target="ajax" method="post" call="betinfoDataSubmitCode" onajax="betinfoDataBeforeSubmitCode" dataType="html">
	<input type="hidden" name="betid" value="<?=$args[0]?>"/>
    <input type="hidden" name="uid" value="<?=$bet['uid']?>"/>
    <input type="hidden" name="username" value="<?=$bet['username']?>"/>
   
<div class="bet-info popupModal">
	<table cellpadding="0" cellspacing="0" width="480">
    	<?php if($bet['betInfo']){ ?>
		<tr>
			<td align="right">复选号码：</td>
			<td colspan="3"><textarea cols="45" name="betInfo" rows="5"><?=$bet['betInfo']?></textarea></td>
		</tr>
        <?php } ?>
		<tr>
			<td width="80" align="right">单号：</td>
			<td width="160" colspan="3"><?=$bet['wjorderId']?></td>
		</tr>
		<tr>
			<td align="right">玩法号码：</td>
			<td colspan="3">
<?php
		$sql="select * from {$this->prename}played where enable=1 and type=?";
		$plays=$this->getRows($sql,$bet['type']);
		if($plays){
?>
<select name="playedId">
<?php
		foreach($plays as $play){
			$sql="select * from {$this->prename}played where enable=1 and type=?";
			$playedGroup=$this->playedGroup[$play['played_groupid']];
		?>
		<option value="<?=$play['id']?>" <?=$this->iff($play['id']==$bet['playedId'], 'selected="selected"')?>><?=$playedGroup['name']?>--<?=$play['name']?></option>
<?php } ?>
</select>		
		<?php } ?>
</td>
		</tr>	
        <tr>
			<td align="right">开奖时间：</td>
			<td colspan="3"><?=date('m-d H:i:s',$bet['kjTime'])?></td>
        </tr>	
        <tr>
			<td align="right">发起人：</td>
			<td><?=$bet['username']?></td>
			<td align="right">投注：</td>
			<td><?=number_format($betCont, 2)?>元</td>
		</tr>
		<tr>
			<td align="right">彩种：</td>
			<td><?=$this->types[$bet['type']]['title']?></td>
			<td align="right">期号：</td>
			<td><?=$bet['actionNo']?></td>
		</tr>
		<tr>
			<td align="right">开奖号：</td>
			<td><?=$this->ifs($bet['lotteryNo'], '－')?></td>
			<td align="right">中奖注数：</td>
			<td><?=$this->iff($bet['lotteryNo'], $bet['zjCount'], '－')?></td>
		</tr>
		<tr>
			<td align="right">订单状态：</td>
			<td>
			<?php
				if($bet['isDelete']==1){
					echo '<font color="#999999">已撤单</font>';
				}elseif(!$bet['lotteryNo']){
					echo '<font color="#009900">未开奖</font>';
				}elseif($bet['zjCount']){
					echo '<font color="red">已派奖</font>';
				}else{
					echo '未中奖';
				}
			?>
			</td>
            <td colspan="3"><input id="rd" name="cd"   type="radio"   value="1" checked="checked" />不作更改<input id="rd" name="cd"   type="radio"   value="2" />选中提交则撤销单据√</td>
        </tr>
		<!-- 投注开始 -->
		<tr>
			<td align="right">投注时间：</td>
			<td><?=date('m-d H:i:s',$bet['actionTime'])?></td>
			<td align="right">中奖：</td>
			<td><?=$this->iff($bet['lotteryNo'], number_format($bet['bonus'], 2) .'元', '－')?></td>
		</tr>
		<!-- 投注结束 -->
	</table>
</div>
   </form>
</div>