<?php
	if(!$args[0]) $args[0]=50;		// 默认查看时时彩玩法
	
	$data=$this->getRows("select id,shortName from {$this->prename}type order by sort asc");
	$chiTypes=array();
 	foreach($data as $key=>$var){
		$chiTypes[$var['id']]=$var['shortName'];	
	}
	
	$groups=$this->getRows("select * from {$this->prename}played_group where type=?  order by id asc", $args[0]);	
	$sql="select * from {$this->prename}played where played_groupid=? order by id asc";
?>
<article class="module width_full">
<input type="hidden" value="<?=$this->user['username']?>" />
	<header>
		<h3 class="tabs_involved">玩法设置<span style='font-size:16px; font-weight:bold;'>(A盘)</span>
			<ul class="tabs" style="margin-right:25px;">
			<?php foreach($chiTypes as $key=>$var){ ?>
				<li <?=$this->iff($args[0]==$key, 'class="active"')?>><a href="system/played/<?=$key?>" <?=$this->iff($args[0]==$key, 'style="color:red"')?>><?=$var?></a></li>
			<?php } ?>
			</ul>
		</h3>
	</header>
	<?php if($groups) foreach($groups as $group){ ?>
	<table class="tablesorter" cellspacing="0">
		<thead>
			<tr>
				<th colspan="9" style="text-align:left;">               	
					<span style="float:right; margin-right:20px"><a href="/admin778899.php/system/switchPlayedGroupStatus/<?=$group['id']?>" target="ajax" call="reloadPlayed"><?=$this->iff($group['enable'],'关闭','开启')?></a></span>
					<?=$group['name']?>&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="spn1">[状态：<span class="state1"><?=$this->iff($group['enable'],'开启','关闭')?></span>]</span>                    
				</th>
			</tr>
		</thead>
		<tbody>
<?php if($dataarrs=$this->getRows($sql, $group['id'])) foreach($dataarrs as $dataarr){ ?>		
			<tr>
				<td width='10%'><?=$dataarr['name']?><?php if($dataarr['alias']){echo '['.$dataarr['alias'].']';}?></td>
				<td>赔率：<input type="text" class="textWid1" name="odds" value="<?=$dataarr['odds']?>"></td>
				<td>退水：<input type="text" class="textWid1" name="rebate" value="<?=$dataarr['rebate']?>"></td>
                <td>单注最低：<input type="text" class="textWid1" name="minMoney" value="<?=$dataarr['minMoney']?>"></td>
                <td>单注最高：<input type="text" class="textWid1" name="maxMoney" value="<?=$dataarr['maxMoney']?>"></td>
                <td >单期最高：<input type="text" class="textWid1" name="maxTurnMoney" value="<?=$dataarr['maxTurnMoney']?>"></td>				
                <!--<td width="16%">排序：<input type="text" class="textWid1" name="sort" value="<?=$dataarr['sort']?>"></td>-->
				<td width="10%"><span class="state2"><?=$this->iff($dataarr['enable'], '开启', '关闭')?></span></td>
				<td><a href="/admin778899.php/system/switchPlayedStatus/<?=$dataarr['id']?>" target="ajax" call="reloadPlayed"><?=$this->iff($dataarr['enable'], '关闭', '开启')?></a> | <a href="/admin778899.php/system/updatePlayed/<?=$dataarr['id']?>" target="ajax" method="post" onajax="sysBeforeUpdatePlayed" call="reloadPlayed">保存修改</a> | <a href="/admin778899.php/system/betPlayedInfoUpdate/<?=$dataarr['id']?>" button="修改:dataAddCode|取消:defaultCloseModal" title="修改信息" width="510" target="modal" modal="true">修改信息</a></td>
			</tr>
		<?php }else{ ?>
			<tr>
				<td colspan="7">暂时没有玩法1</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
	<?php }else{ ?>
		暂时没有玩法
	<?php } ?>
</article>