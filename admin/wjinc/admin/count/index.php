	<article class="stats_overview" style=" margin:10px 40% 10px auto;">
		<?php
		  $date=strtotime("00:00");
		  $data=$this->getDateCount($date);
		  $jtTCount=number_format($data['betAmount']-$data['zjAmount']-$data['fanDianAmount']-$data['brokerageAmount'],2,'.','');
		  $jtYKCount=number_format($data['betAmount'],2,'.','');
		  if($jtTCount>0){
			  $jtTCount="<span style='color:#76a4fa'>".$jtTCount."</span>";
			 }else if($jtTCount<0){
			   $jtTCount="<span style='color:#76a4fa'>-".abs($jtTCount)."</span>";
			 }else{
			  $jtTCount=$jtTCount;
		   }
		 ?>
		<div class="overview_today">
			<p class="overview_day">今日统计</p>
			<p class="overview_count" style="color:#76a4fa"><?=$jtTCount?></p>
			<p class="overview_type">盈亏</p>
			<p class="overview_count" style="color:#81c65b"><?=$jtYKCount?></p>
			<p class="overview_type">投注额</p>
		</div>
		<?php 
            $date=strtotime("00:00")-24*3600;
			$data=$this->getDateCount($date);
		  $ztTCount=number_format($data['betAmount']-$data['zjAmount']-$data['fanDianAmount']-$data['brokerageAmount'],2,'.','');
		  $ztYKCount=number_format($data['betAmount'],2,'.','');
		  if($ztTCount>0){
			  $ztTCount="<span style='color:#76a4fa'>".$ztTCount."</span>";
			 }else if($ztTCount<0){
			  $ztTCount="<span style='color:#76a4fa'>-".abs($ztTCount)."</span>";
			 }else{
			  $ztTCount=$ztTCount;
		   }
        ?>
		<div class="overview_previous">
			<p class="overview_day">昨日统计</p>
			<p class="overview_count" style="color:#76a4fa"><?=$ztTCount?></p>
			<p class="overview_type">盈亏</p>
			<p class="overview_count" style="color:#81c65b"><?=$ztYKCount?></p>
			<p class="overview_type">投注额</p>
		</div>
	</article>
	<div class="clear"></div>
</article>

<?php
	$date=strtotime(date("Y-m-d",$this->time)." 00:00:00");
	//echo date("Y-m-d",$this->time-24*3600);exit;
	$sql="select count(uid) allUser, sum(regTime>=$date) todayReg, sum(type=3) gdCount, sum(type=2) zdlCount, sum(type=1) dlCount, sum(type=0) memberCount, sum(coin+fcoin) amountCount from {$this->prename}members where isDelete=0";
	//echo $sql;
	$data=$this->getRow($sql);
	//var_dump($data);
    ?>
<article class="module width_full">
	<header><h3 class="tabs_involved">用户统计</h3></header>
	<table class="tablesorter" cellspacing="0"> 
	<thead> 
		<tr> 
			<th>用户总数</th> 
			<th>今日注册人数</th> 
			<th>股东人数</th> 
			<th>总代理人数</th> 
			<th>代理人数</th> 
			<th>会员人数</th> 
			<th>当前在线人数</th>
			<th>余额总数</th>
		</tr> 
	</thead> 
	<tbody> 
		<tr> 
			<td><?=$data['allUser']?></td> 
			<td><?=$data['todayReg']?></td>
			<td><?=$data['gdCount']?></td> 
			<td><?=$data['zdlCount']?></td> 
			<td><?=$data['dlCount']?></td> 
			<td><?=$data['memberCount']?></td> 
			<td><?=$this->getValue("select count(uid) from {$this->prename}member_session where isOnLine=1 and {$this->time}-accessTime<900 and uid in (select uid from {$this->prename}members)")?></td> 
			<td><?=number_format($data['amountCount'])?></td> 
		</tr> 
	</tbody> 
	</table>
</article>

<article class="module width_full">
    <header><h3 class="tabs_involved">彩种投注金额统计<span class="spn1">（彩种名称：投注金额）</span></h3></header>
    <div class="module_content">
	<?php
		$sql="select type, sum(money) amount from {$this->prename}bets where lotteryNo!='' group by type";
		$data=$this->getObject($sql, 'type');
		$this->getTypes();
		if($this->types) foreach($this->types as $var){
			if($var['isDelete']==0 && $var['enable']==1){
	?>
        <div class="cztz"><span class="title"><?=$var['title']?></span><span class="spn2">￥<?=number_format($this->ifs($data[$var['id']]['amount'], 0),2)?></span></div>
	<?php }} ?>
    </div>
</article>

<div class="tip">提示：本页数据被缓存5分钟，你看到的可能是几分钟之前的数据！</div>
