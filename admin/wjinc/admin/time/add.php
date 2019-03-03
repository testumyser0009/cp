<?php
	$para=$_GET;
	$var=$this->getRow("select title,id from {$this->prename}type where id={$this->type}");
	
?>
<article class="module width_full">
<input type="hidden" value="<?=$this->user['username']?>" />
	<header>
		<h3 class="tabs_involved">彩种时间设置</h3>
	</header>

	<table class="tablesorter" cellspacing="0">
		<thead>
			<tr>
				<th>彩种</th>
				<th>期数</th>
				<th>开奖时间</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?=$var['title']?></td>
				<td><input type="text" name="actionNo"   value=""/>格式如:2016001</td>
                <td><input type="text" name="lhcTime"   value=""/>格式如:2016/01/01 21:35:00</td>
				<td><a href="/admin778899.php/time/addTime/<?=$var['id']?>" target="ajax" method="POST" onajax="sysBeforeUpdateTime" call="sysUpdateTime">确认添加</a> 
			</tr>
		</tbody>
	</table>
</article>