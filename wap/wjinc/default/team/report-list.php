<?php
	$para=$_GET;
	
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
		$toTime=strtotime('00:00:00');
		$betTimeWhere="and b.actionTime > $toTime";
		$cashTimeWhere="and c.actionTime > $toTime";
		$rechargeTimeWhere="and r.actionTime > $toTime";
		$fanDiaTimeWhere="and actionTime > $toTime";
		$fanDiaTimeWhere2="and l.actionTime > $toTime";
		$brokerageTimeWhere=$fanDiaTimeWhere2;
	}
	
	if($para['parentId']=intval($para['parentId'])){
		// 用户ID限制
		if(!$para['parentId']) $para['parentId']=$this->user['uid'];
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
	}elseif($para['uid']=intval($para['uid'])){
		// 用户ID限制

		$uParentId=$this->getValue("select parentId from {$this->prename}members where uid=?",$para['uid']);
		if(!$uParentId){
			$uParentId=$this->getValue("select zparentId from {$this->prename}members where uid=?",$para['uid']);			
		}
		if(!$uParentId){
			$uParentId=$this->getValue("select gudongId from {$this->prename}members where uid=?",$para['uid']);
			if($uParentId != $this->user['uid']) $uParentId=0;
		}
		$userWhere="and u.uid={$uParentId} ";
	}elseif($para['username'] && $para['username']!='用户名'){
		// 用户名限制
		$para['username']=wjStrFilter($para['username']);
		if(!ctype_alnum($para['username'])) throw new Exception('用户名包含非法字符,请重新输入');

		$userWhere= " and u.username like '%{$para['username']}%' and (u.parentId={$this->user['uid']} or u.zparentId={$this->user['uid']} or u.gudongId={$this->user['uid']} ) ";
	}
	if(!intval($para['parentId']) && !intval($para['uid'])){
	switch(intval($para['userType'])){
		case 1:
			//我自己
			$userWhere .= " and u.uid={$this->user['uid']} ";
			break;
		case 2:
			//直属下线
			if($this->user['type']==1){
			$userWhere.=" and u.parentId={$this->user['uid']} and u.type=0 ";
			}elseif($this->user['type']==2){
			$userWhere.=" and u.zparentId={$this->user['uid']} and u.type=1 or (u.zparentId={$this->user['uid']} and u.parentId='' and u.type=0) ";
			}elseif($this->user['type']==3){
			$userWhere.=" and u.gudongId={$this->user['uid']} and u.type=2 or (u.gudongId={$this->user['uid']} and u.zparentId='' and u.parentId='' and u.type!=3) ";
			}
			break;
		case 3:
			// 所有下级
			$userWhere .= "  and (u.parentId={$this->user['uid']} or u.zparentId={$this->user['uid']} or u.gudongId={$this->user['uid']} ) and u.uid !={$this->user['uid']} ";
			break;
		default:
			// 所有人
			$userWhere .= "  and (u.parentId={$this->user['uid']} or u.zparentId={$this->user['uid']} or u.gudongId={$this->user['uid']} ) ";
		break;
	}
	}
	//没有账变的不显示
	//$userWhere.=" and u.uid in(select uid from {$this->prename}coin_log where 1=1 $logTimeWhere)";
	
	$sql="select u.username, u.type, u.coin, u.uid, u.parentId, sum(b.money * b.totalNums) betAmount, sum(b.rebateMoney) rebateMoneyDouble, sum(b.bonus) zjAmount, (select sum(c.amount) from ssc_member_cash c where c.`uid`=u.`uid` and c.state=0 $cashTimeWhere) cashAmount,(select sum(r.amount) from ssc_member_recharge r where r.`uid`=u.`uid` and r.state in(1,2,9) $rechargeTimeWhere) rechargeAmount from ssc_members u left join ssc_bets b on u.uid=b.uid and b.lotteryNo !='' and b.isDelete=0 $betTimeWhere where 1 $userWhere";
	//echo $sql;
	
//$this->pageSize=1;
	if($this->action!='searchReport') $this->action='searchReport';
	$list=$this->getPage($sql .' group by u.uid', $this->page, $this->pageSize);
	if(!$list['total']) {
		$uParentId2=$this->getValue("select parentId from {$this->prename}members where uid=?",$para['parentId']);
		$list=array(
			'total' => 1,
			'data'=>array(array(
				'parentId'=>$uParentId2,
				'uid'=>$para['parentId'],
				'username'=>'没有用户'
			))
		);
		$noChildren=true;
	}
	$params=http_build_query($_GET, '', '&');
	$count=array();
	$sql="select sum(coin) from {$this->prename}coin_log where uid=? and liqType in(2,3) $fanDiaTimeWhere";
	
	$rel="/index.php/{$this->controller}/{$this->action}";

?>
<div>
<table width="100%" class='table_b'>
	<thead>
		<tr class="table_b_th">
			<td>用户名</td>
            <td>充值总额</td>
            <td>提现总额</td>
			<td>投注总额</td>
			<td>中奖总额</td>
			<td>总退水</td>
			<td>总盈亏</td>
			<td>查看</td>
		</tr>
	</thead>
	<tbody class="table_b_tr">
	<?php

		if($list['data']) foreach($list['data'] as $var){
		if($var['username']!='没有用户'){
			$var['fanDianAmount']=$this->getValue($sql, $var['uid']);
			//echo $sql.$var['uid'];
			$pId=$var['uid'];
		}
		$count['betAmount']+=$var['betAmount'];
		$count['zjAmount']+=$var['zjAmount'];
		$count['fanDianAmount']+=$var['fanDianAmount'];
		$count['rebateMoneyDouble']+=$var['rebateMoneyDouble'];
		$count['cashAmount']+=$var['cashAmount'];
		$count['coin']+=$var['coin'];
		$count['rechargeAmount']+=$var['rechargeAmount'];
		
	?>
		<tr>
			<td><?=$this->ifs($var['username'], '--')?></td>
            <td><?=$this->ifs($var['rechargeAmount'], '--')?></td>
			<td><?=$this->ifs($var['cashAmount'], '--')?></td>
			<td><?=$this->ifs($var['betAmount'], '--')?></td>
			<td><?=$this->ifs($var['zjAmount'], '--')?></td>
			<td><?=$this->ifs(number_format($var['rebateMoneyDouble'],2), '--')?></td>
            <td><?=$this->ifs(number_format($var['zjAmount']-$var['betAmount']+$var['rebateMoneyDouble'],2), '--')?></td>
            <td>
                <?php 
				if($var['type']==1 || $var['type']==2 || $var['type']==3){?>
                <a target="ajax" dataType="html" call="searchData" class="qzbtn" href="<?="{$rel}/?parentId={$var['uid']}&type={$var['type']}&fromTime={$para['fromTime']}&toTime={$para['toTime']}"?>">下级</a>
				<?php }?>
                <?php if($this->user['type'] > $var['type']){?>
                  <a target="ajax" dataType="html" call="searchData" class="qzbtn" href="<?="{$rel}/?uid={$var['uid']}&fromTime={$para['fromTime']}&toTime={$para['toTime']}"?>">上级</a>
				<?php }?>
            </td>
		</tr>
	<?php } ?>
		
		<?php 
				$sql2="select sum(b.money * b.totalNums) betAmount, sum(b.rebateMoney) rebateMoneyDouble, sum(b.bonus) zjAmount from ssc_members u left join ssc_bets b on u.uid=b.uid and b.isDelete=0 $betTimeWhere $userWhere";
				$all=$this->getRow($sql2);
				$all['fanDianAmount']=$this->getValue("select sum(l.coin) from {$this->prename}coin_log l, {$this->prename}members u where l.liqType between 2 and 3 and l.uid=u.uid $fanDiaTimeWhere2 $userWhere", $var['uid']);
				$all['rechargeAmount']=$this->getValue("select sum(r.amount) from {$this->prename}member_recharge r, {$this->prename}members u where r.state in (1,2,9) and r.uid=u.uid $rechargeTimeWhere $userWhere", $var['uid']);
				$all['cashAmount']=$this->getValue("select sum(c.amount) from {$this->prename}member_cash c, {$this->prename}members u  where c.state=0 and c.uid=u.uid $cashTimeWhere $userWhere", $var['uid']);
				$all['coin']=$this->getValue("select sum(u.coin) coin from {$this->prename}members u where 1 $userWhere", $var['uid']);
				
		?>
        <tr>
			<td><span class="spn9">本页总结</span></td>
            <td><?=$this->ifs($count['rechargeAmount'], '--')?></td>
			<td><?=$this->ifs($count['cashAmount'], '--')?></td>
			<td><?=$this->ifs($count['betAmount'], '--')?></td>
			<td><?=$this->ifs($count['zjAmount'], '--')?></td>
			<td><?=$this->ifs(number_format($count['rebateMoneyDouble'],2), '--')?></td>
            <td><?=$this->ifs(number_format($count['zjAmount']-$count['betAmount']+$count['rebateMoneyDouble'],2), '--')?></td>
			<td></td>
		</tr>
        <?php if(intval($para['userType']) !=1 && $uParentId != $this->user['uid']){ ?>
		<tr>
			<td><span class="spn9"><?php if(intval($para['userType'])==2){echo '直接下线';}else if(intval($para['userType'])==3){echo '所有下线';}else{echo '总结';}?></span></td>
            <td><?=$this->ifs($all['rechargeAmount'], '--')?></td>
			<td><?=$this->ifs($all['cashAmount'], '--')?></td>
			<td><?=$this->ifs($all['betAmount'], '--')?></td>
			<td><?=$this->ifs($all['zjAmount'], '--')?></td>
			<td><?=$this->ifs(number_format($all['rebateMoneyDouble'],2), '--')?></td>
			<td><?=$this->ifs(number_format($all['zjAmount']-$all['betAmount']+$all['rebateMoneyDouble'],2), '--')?></td>
			<td></td>
		</tr>
		<? } ?>
	</tbody>
</table>
<?php 
	if(count($list['data']) >= $this->pageSize){
	$this->display('inc_page.php',0,$list['total'],$this->pageSize, "$rel-{page}?$params");
	}
?>
</div>