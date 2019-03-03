<?php
	$sql="select * from {$this->prename}sysadmin_bank where admin=1";
	$data=$this->getPage($sql, $this->page, $this->pageSize);
?>
<article class="module width_full">
<input type="hidden" value="<?=$this->user['username']?>" />
	<header>
		<h3 class="tabs_involved">收款类型设置
		<?php if($this->user['uid']==1){ ?>
			<div class="submit_link wz"><!--<input type="submit" value="添加收款类型" onclick="sysEditBank()" class="alt_btn">--></div>
		<?php } ?>
		</h3>
	</header>
	<table class="tablesorter" cellspacing="0" width="100%">
		<thead>
			<tr>
			    <td>接口名</td>
			    <td>收款账号</td>
			    <td>备注信息</td>
			    <td>收款码图片</td>
			    <td>编号</td>
			    <td>收款提交网址</td>
			    <td>前台名称</td>
				<td>状态(开/关)</td>
				<td>操作</td>
                
			</tr>
		</thead>
		<tbody id="nav01">
		<?php if($data['data']) foreach($data['data'] as $var){ ?>
			<tr>
				<td><?=$var['payeeName']?></td>
				<td><?=$var['account']?></td>
				<td><?=$var['address']?></td>
				<td><?=$var['qrCode']?></td>
				<td><?=$var['onlineType']?></td>
				<td><?=$var['domain']?></td>
				<td><?=$var['name']?></td>
				<td><?=$this->iff($var['enable'], '开', '关')?></td>
				<td><a href="/admin778899.php/system/switchBankStatus2/<?=$var['id']?>" target="ajax" call="sysReloadBank"><?=$this->iff($var['enable'], '关闭', '开启')?></a> 	
		    <?php //if($this->user['uid']==1){ ?>
				| <a href="#" onclick="sysEditBank(<?=$var['id']?>)">修改</a> <!--| <a href="/admin778899.php/system/deleteBank2/<?=$var['id']?>" target="ajax" call="sysReloadBank">删除</a>--></td>
		    <?php //} ?>
			</tr>
		<?php }else{ ?>
			<tr>
				<td colspan="9">暂时没有银行信息，请点右上角按钮添加银行</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
	<footer>
	<?php
		/*$rel=get_class($this).'/bank-{page}?'.http_build_query($_GET,'','&');
		$this->display('inc/page.php', 0, $data['total'], $rel, 'betLogSearchPageAction');*/
	?>
	</footer>
</article>
<script type="text/javascript">  
ghhs("nav01","tr");  
</script>