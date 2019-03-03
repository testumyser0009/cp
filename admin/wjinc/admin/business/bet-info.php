<?php
	$bet=$this->getRow("select * from {$this->prename}bets where id=?", $args[0]);
	
	if(!$bet) throw new Exception('单号不存在');
	$betCont=$bet['money'];
?>
<div class="bet-info popupModal">
  <input type="hidden" value="<?=$this->user['username']?>" />
  <table cellpadding="0" cellspacing="0" width="600">
    <tr>
      <td width="80" align="right">投注单号：</td>
      <td width="160" colspan="3"><?=$bet['wjorderId']?></td>
    </tr>
    <tr>
      <td align="right">彩种：</td>
      <td><?=$this->types[$bet['type']]['title']?></td>
      <td align="right">期号：</td>
      <td><?=$bet['actionNo']?></td>
    </tr>
    <tr>
      <td align="right">投注号码：</td>
      <td style="color:red"><?=$wei.$bet['actionData']?></td>
      <td align="right">投注时间：</td>
      <td><?=date('m-d H:i:s',$bet['actionTime'])?></td>
    </tr>
    <tr>
      <td align="right"></td>
      <td></td>
    </tr>
    <tr>
      <td align="right">开奖号：</td>
      <td style="font-size:12px;"><?=$this->ifs($bet['lotteryNo'], '－')?></td>
      <td align="right">投注：</td>
      <td style="color:red"><?=number_format($betCont, 2)?>
        元</td>
    </tr>
    <tr>
      <td align="right">订单状态：</td>
      <td><?php
				if($bet['isDelete']==1){
					echo '<font color="#999999">已撤单</font>';
				}elseif(!$bet['lotteryNo']){
					echo '<font color="#009900">未开奖</font>';
				}elseif($bet['zjCount']){
					echo '<font color="red">已派奖</font>';
				}else{
					echo '未中奖';
				}
			?></td>
      <td align="right">中奖：</td>
      <td><?=$this->iff($bet['lotteryNo'], number_format($bet['bonus'], 2) .'元', '－')?></td>
    </tr>
     <tr>
      <td align="right">退水比例：</td>
      <td><?=$bet['rebate']*100?>%</td>
      <td align="right">退水金额：</td>
      <td><?=$bet['rebateMoney']?></td>
    </tr>   
    <tr>
      <td align="right">发起人：</td>
      <td><?=$bet['username']?></td>
      <td align="right">个人盈亏：</td>
      <td><?=$this->iff($bet['lotteryNo'], number_format($bet['bonus'] - $betCont, 2) . '元', '－')?></td>
    </tr>
  </table>
</div>
