<?php
	$para=$_GET;
	//echo $para['uid'];
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
	
	// 用户限制
	if($para['parentId']=intval($para['parentId'])){
		// 用户ID限制
		$para['parentId']=intval($para['parentId']);
		$para['type']=intval($para['type']);
		if($para['type']==1){
		$userWhere=" and u.parentId={$para['parentId']} and u.type=0 ";
		}elseif($para['type']==2){
		$userWhere=" and u.zparentId={$para['parentId']} and u.type=1 or (u.zparentId={$para['parentId']} and u.parentId='' and u.type=0) ";
		}elseif($para['type']==3){
		$userWhere=" and u.gudongId={$para['parentId']} and u.type=2 or (u.gudongId={$para['parentId']} and u.zparentId='' and u.parentId='' and u.type!=3) ";
		}else{
		$userWhere=" and u.parentId={$para['parentId']}";
		}	
	}
	if($para['uid']=intval($para['uid'])){
		// 用户ID限制
		$uParentId=$this->getValue("select parentId from {$this->prename}members where uid=?",$para['uid']);
		if(!$uParentId){
			$uParentId=$this->getValue("select zparentId from {$this->prename}members where uid=?",$para['uid']);			
		}
		if(!$uParentId){
			$uParentId=$this->getValue("select gudongId from {$this->prename}members where uid=?",$para['uid']);
		}
		$userWhere="and u.uid={$uParentId} ";
	}
	if($para['username'] && $para['username']!='用户名'){
		$para['username']=wjStrFilter($para['username']);
		if(!ctype_alnum($para['username'])) throw new Exception('用户名包含非法字符,请重新输入');
		// 用户名限制
		$userWhere="and u.username='{$para['username']}'";
	}

	$sql="select u.username, u.type, u.coin, u.uid, u.parentId, u.zparentId, u.gudongId, sum(b.money * b.totalNums) betAmount, sum(b.rebateMoney) rebateMoneyDouble, sum(b.bonus) zjAmount, (select sum(c.amount) from ssc_member_cash c where c.state=0 and c.`uid`=u.`uid` $cashTimeWhere) cashAmount,(select sum(r.amount) from ssc_member_recharge r where r.state in(1,2,9) and r.`uid`=u.`uid` $rechargeTimeWhere) rechargeAmount from ssc_members u left join ssc_bets b on u.uid=b.uid and b.lotteryNo !='' and b.isDelete=0 $betTimeWhere where 1 $userWhere";

//echo $sql;
	if($this->action!='betDate') $this->action='betDate';
	$list=$this->getPage($sql .' group by u.uid', $this->page, $this->pageSize);
	if(!$list['total']) {
		$uParentId2=$this->getValue("select parentId from {$this->prename}members where uid=?",$para['parentId']);
		$list=array(
			'total' => 1,
			'data'=>array(array(
				'parentId'=>$uParentId2,
				'uid'=>$para['parentId'],
				'username'=>'没有下级了'
			))
		);
		$noChildren=true;
	}
	$params=http_build_query($_REQUEST, '', '&');
	$count=array();
	$sql2="select sum(coin) from {$this->prename}coin_log where uid=? and liqType between 2 and 3 $fanDiaTimeWhere";

?>

<table class="tablesorter" cellspacing="0">
<input type="hidden" value="<?=$this->user['username']?>" />
	<thead>
		<tr>
			<td>用户名</td>
			<td>投注总额</td>
			<td>中奖总额</td>
			<td>退水总额</td>
			<td>总返点</td>
			<td>充值</td>
			<td>提现</td>
			<td>余额</td>
			<td>盈亏</td>
			<td>查看下级</td>
		</tr>
	</thead>
	<tbody id="nav01">
	<?php
		if($list['data']) foreach($list['data'] as $var){
		
		if($var['username']!='没有下级了'){
			$var['fanDianAmount']=$this->getValue($sql2, $var['uid']);
			$pId=$var['uid'];

		}
		
		$count['betAmount']+=$var['betAmount'];
		$count['zjAmount']+=$var['zjAmount'];
		$count['rebateMoneyDouble']+=$var['rebateMoneyDouble'];
		$count['fanDianAmount']+=$var['fanDianAmount'];
		$count['cashAmount']+=$var['cashAmount'];
		$count['coin']+=$var['coin'];
		$count['rechargeAmount']+=$var['rechargeAmount'];
	?>
		<tr>
			<td><?=$this->ifs($var['username'], '--')?>（<? if($var['type']==1){
				echo '代理';
			}elseif($var['type']==2){
				echo '总代理';
			}elseif($var['type']==3){
				echo '股东';
			}else{
				echo '会员';
			}			
			?>）</td>
			<td><?=$this->ifs($var['betAmount'], '--')?></td>
			<td><?=$this->ifs($var['zjAmount'], '--')?></td>
			<td><?=$this->ifs(number_format($var['rebateMoneyDouble'],2), '--')?></td>
			<td><?=$this->ifs($var['fanDianAmount'], '--')?></td>
		  <td><?=$this->ifs($var['rechargeAmount'], '--')?></td>
			<td><?=$this->ifs($var['cashAmount'], '--')?></td>
			<td><?=$this->ifs($var['coin'], '--')?></td>
			<td><?=$this->ifs(number_format($var['zjAmount']-$var['betAmount']+$var['fanDianAmount']+$var['rebateMoneyDouble'],2), '--')?></td>
			<td>
                <?php if($var['type']==1 || $var['type']==2 || $var['type']==3){?>
<a target="ajax" dataType="html" call="defaultList" href="<?="/admin778899.php/countData/betDateSearch/?parentId={$var['uid']}&type={$var['type']}&fromTime={$para['fromTime']}&toTime={$para['toTime']}"?>">下级</a>
				<?php }?>
                <?php if($var['parentId'] || $var['zparentId'] || $var['gudongId']){?>
<a target="ajax" dataType="html" call="defaultList" href="<?="/admin778899.php/countData/betDateSearch/?uid={$var['uid']}&fromTime={$para['fromTime']}&toTime={$para['toTime']}"?>">上级</a>
				<?php }?>
            </td>
		</tr>
	<?php } ?>
		<tr>
			<td><span class="spn9">本页总结</span></td>
			<td><?=$this->ifs($count['betAmount'], '--')?></td>
			<td><?=$this->ifs($count['zjAmount'], '--')?></td>
			<td><?=$this->ifs(number_format($count['rebateMoneyDouble'],2), '--')?></td>
			<td><?=$this->ifs($count['fanDianAmount'], '--')?></td>
            <td><?=$this->ifs($count['rechargeAmount'], '--')?></td>
			<td><?=$this->ifs($count['cashAmount'], '--')?></td>
			<td><?=$this->ifs($count['coin'], '--')?></td>
			<td><?=$this->ifs(number_format($count['zjAmount']-$count['betAmount']+$count['fanDianAmount']+$count['rebateMoneyDouble'],2), '--')?></td>
			<td></td>
		</tr>
		<?php 
        $datalist=$this->getRows($sql .' group by u.uid');
		$sql3="select sum(coin) from {$this->prename}coin_log where uid=? and liqType between 2 and 3 $fanDiaTimeWhere";
        if($datalist) foreach($datalist as $data){
			$data['fanDianAmount']=$this->getValue($sql3, $data['uid']);
			$countall['fanDianAmount']+=$data['fanDianAmount'];
			$countall['betAmount']+=$data['betAmount'];
			$countall['zjAmount']+=$data['zjAmount'];
			$countall['rebateMoneyDouble']+=$data['rebateMoneyDouble'];
			$countall['cashAmount']+=$data['cashAmount'];
			$countall['coin']+=$data['coin'];
			$countall['rechargeAmount']+=$data['rechargeAmount'];
		}
        ?>  
		<tr>
			<td><span class="spn9">所有总结</span></td>
			<td><?=$this->ifs($countall['betAmount'], '--')?></td>
			<td><?=$this->ifs($countall['zjAmount'], '--')?></td>
			<td><?=$this->ifs(number_format($countall['rebateMoneyDouble'],2), '--')?></td>
			<td><?=$this->ifs($countall['fanDianAmount'], '--')?></td>
            <td><?=$this->ifs($countall['rechargeAmount'], '--')?></td>
			<td><?=$this->ifs($countall['cashAmount'], '--')?></td>
			<td><?=$this->ifs($countall['coin'], '--')?></td>
			<td><?=$this->ifs(number_format($countall['zjAmount']-$countall['betAmount']+$countall['fanDianAmount']+$countall['rebateMoneyDouble'],2), '--')?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<footer>
	<?php
		$rel=get_class($this).'/betDate-{page}?'.http_build_query($_GET,'','&');
		$this->display('inc/page.php', 0, $list['total'], $rel, 'defaultReplacePageAction'); 
	?>
</footer>
<script type="text/javascript">  
ghhs("nav01","tr");  
</script>