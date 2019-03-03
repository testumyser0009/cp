<?php
	$para=$_GET;
	
	// 用户限制
	if($para['username'] && $para['username']!="用户名"){
		$userWhere=" and username like '%{$para['username']}%'";
	}

	// 时间限制
	if($para['fromTime'] && $para['toTime']){
		$fromTime=strtotime($para['fromTime']);
		$toTime=strtotime($para['toTime'])+24*3600;
		$betTimeWhere="and actionTime between $fromTime and $toTime";
		$cashTimeWhere="and c.actionTime between $fromTime and $toTime";
		$rechargeTimeWhere="and r.actionTime between $fromTime and $toTime";
		$fanDiaTimeWhere="and actionTime between $fromTime and $toTime";
		$fanDiaTimeWhere2="and l.actionTime between $fromTime and $toTime";
		$brokerageTimeWhere=$fanDiaTimeWhere2;
	}elseif($para['fromTime']){
		$fromTime=strtotime($para['fromTime']);
		$betTimeWhere="and b.actionTime >=$fromTime";
		$cashTimeWhere="and c.actionTime >=$fromTime";
		$rechargeTimeWhere="and r.actionTime >=$fromTime";
		$fanDiaTimeWhere="and actionTime >= $fromTime";
		$fanDiaTimeWhere2="and l.actionTime >= $fromTime";
		$brokerageTimeWhere=$fanDiaTimeWhere2;
	}elseif($para['toTime']){
		$toTime=strtotime($para['toTime'])+24*3600;
		$betTimeWhere="and b.actionTime < $toTime";
		$cashTimeWhere="and c.actionTime < $toTime";
		$rechargeTimeWhere="and r.actionTime < $toTime";
		$fanDiaTimeWhere="and actionTime < $toTime";
		$fanDiaTimeWhere2="and l.actionTime < $toTime";
		$brokerageTimeWhere=$fanDiaTimeWhere2;
	}else{
		$toTime=strtotime('00:00')-7*24*3600;
		$betTimeWhere="and b.actionTime > $toTime";
		$cashTimeWhere="and c.actionTime > $toTime";
		$rechargeTimeWhere="and r.actionTime > $toTime";
		$fanDiaTimeWhere="and actionTime > $toTime";
		$fanDiaTimeWhere2="and l.actionTime > $toTime";
		$brokerageTimeWhere=$fanDiaTimeWhere2;
	}

	$sql="select * from {$this->prename}members where type>0 and isDelete=0 $userWhere order by type desc, uid desc";
	//echo $sql;
	$data=$this->getPage($sql, $this->page, $this->pageSize);
?>
<article class="module width_full">
  <header>
    <h3 class="tabs_involved">分成统计（默认查询的最近七天,可分成总额为(-下级盈亏总额)*分成比例）
      <form action="/admin778899.php/bonus/bonuslist" target="ajax" datatype="html" call="defaultSearch" class="submit_link wz">
        用户名：
        <input type="text" class="alt_btn" name="username">
        &nbsp;&nbsp;
        时间：从
        <input type="date" class="alt_btn" name="fromTime">
        到
        <input type="date" class="alt_btn" name="toTime">
        &nbsp;&nbsp;
        <input type="submit" value="查找" class="alt_btn">
      </form>
    </h3>
  </header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <td>代理账号</td>
        <td>返点(分成)比例</td>
        <td>下级充值总额</td>
        <td>下级提现总额</td>
        <td>下级账户余额</td>
        <td>下级投注总额</td>
        <td>下级中奖总额</td>
        <td>下级退水总额</td>
        <td>下级盈亏总额</td>
        <td>可分成总额</td>
      </tr>
    </thead>
    <tbody>
      <?php if($data['data']) foreach($data['data'] as $var){ 
	$userWhere2="select uid from ssc_members where admin=0 and enable=1 and parentId={$var['uid']} or zparentId={$var['uid']} or gudongId={$var['uid']}";
	$coin2="select sum(u.coin) from ssc_members u where u.`uid` in($userWhere2)";	
	$cash2="select sum(c.amount) from ssc_member_cash c where c.state=0 and c.`uid` in($userWhere2) $cashTimeWhere";
	$recharge2="select sum(r.amount) from ssc_member_recharge r where r.state in(1,2,9) and r.`uid` in($userWhere2) $rechargeTimeWhere";	
	$sql2="select sum(b.money * b.totalNums) betAmount, sum(b.rebateMoney) rebateMoneyDouble, sum(b.bonus) zjAmount, ($coin2) cointotal, ($cash2) cashAmount, ($recharge2) rechargeAmount from ssc_bets b where b.`uid` in($userWhere2) and b.lotteryNo !='' and b.isDelete=0 $betTimeWhere";
	$list=$this->getRow($sql2);
	  ?>
      <tr>
        <td><?=$var['username']?></td>
        <td><?=$var['fanDian']?>%</td>
        <td><?=$this->ifs($list['rechargeAmount'],'--')?></td>
        <td><?=$this->ifs($list['cashAmount'],'--')?></td>
        <td><?=$this->ifs($list['cointotal'],'--')?></td>
        <td><?=$this->ifs($list['betAmount'],'--')?></td>
        <td><?=$this->ifs($list['zjAmount'],'--')?></td>
        <td><?=$this->ifs(number_format($list['rebateMoneyDouble'],2), '--')?></td>
        <td><?=$this->ifs(number_format($list['zjAmount']-$list['betAmount']+$list['rebateMoneyDouble'],2), '--')?></td>
        <td><?php
		$winmoney=($list['betAmount']-$list['zjAmount']-$list['rebateMoneyDouble']) * $var['fanDian']/100;
		echo number_format(($winmoney),2);
		?></td>
      </tr>
      <?php }else{ ?>
      <tr>
        <td colspan="8" align="center">暂时没有记录。</td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <footer>
    <?php
		$rel=get_class($this).'/bonuslist-{page}?'.http_build_query($_GET,'','&');
		$this->display('inc/page.php', 0, $data['total'], $rel, 'defaultReplacePageAction');
?>
  </footer>
</article>
