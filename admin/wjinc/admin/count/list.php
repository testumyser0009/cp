<?php
	$sql="select * from {$this->prename}bets where lotteryNo='' and isDelete=0 order by actionTime desc";
	$data=$this->getPage($sql, $this->page, $this->pageSize);
	if(!$this->types) $this->getTypes();
	$dateString=date('Y-m-d ');
?>
<article class="module width_full">
	<header>
		<h3 class="tabs_involved">开奖检测</h3>
	</header>
	<table class="tablesorter" cellspacing="0">
		<thead>
			<tr>
				<td>单号</td>
				<td>投注时间</td>
				<td>彩种</td>
				<td>玩法</td>
				<td>期号</td>
				<td>投注号码</td>
				<td>开奖号码</td>
				<td>赔率</td>
				<td>金额</td>
				<td>奖金</td>
				<td>状态</td>
			</tr>
		</thead>
		<tbody id="nav01">
		<?php
			if($data['data']){ foreach($data['data'] as $var){
		?>
			<tr>
				<td><?=if(isset($var['wjorderId'])$var['wjorderId']?></td>
				<td><?=date('m-d H:i:s', $var['actionTime'])?></td>
				<td><?=$this->types[$var['type']]['shortName']?></td>
				<td><?=$var['Groupname']?></td>
		        <td><?=$var['actionNo']?></td>
		        <td class="code-list pointer"><?=Object::CsubStr($var['actionData'],0,10)?></td>
				<td><?=$this->iff($var['lotteryNo'],$var['lotteryNo'],'无')?></td>
		        <td><?=$var['odds']?></td>
                <td><?=$var['money']?></td>
		        <td><?=$this->iff($var['lotteryNo'], number_format($var['bonus'], 2), '0.00')?></td>
				<td><?php
				if($var['isDelete']==1){
					echo '<font color="#999999">已撤单</font>';
				}elseif(!$var['lotteryNo']){
					echo '<font color="#009900">未开奖</font>';
				}elseif($var['zjCount']){
					echo '<font color="red">已派奖</font>';
				}else{
					echo '<font color="#00CC00">未中奖</font>';
				}
			?></td>
			</tr>
			<?}}?>
		</tbody>
	</table>
</article>
<script type="text/javascript">  
	ghhs("nav01","tr");  
</script>
<?php
		$rel=get_class($this).'/test-{page}?'.http_build_query($_GET,'','&');
		$this->display('inc/page.php', 0, $data['total'], $rel, 'betLogSearchPageAction'); 
?>