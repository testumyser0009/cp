<?php
	$sql="select * from {$this->prename}bank_list order by sort asc";
	$data=$this->getPage($sql, $this->page, $this->pageSize);
?>
<article class="module width_full">
<input type="hidden" value="<?=$this->user['username']?>" />
	<header>
		<h3 class="tabs_involved">提款类型设置
		<?php if($this->user['uid']==1){ ?>
			<div class="submit_link wz"><input type="submit" value="添加提款类型" onclick="sysEditwithdraw()" class="alt_btn"></div>
		<?php } ?>
		</h3>
	</header>
	<table class="tablesorter" cellspacing="0" width="100%">
		<thead>
			<tr>
			    <td>编号(ID)</td>
			    <td>提款银行名称</td>
			    <td>提款银行LOGO</td>
			    <td>提款银行网址</td>
			    <td>排序</td>
				<td>状态(开/关)</td>
				<td>操作</td>
                
			</tr>
		</thead>
		<tbody id="nav01">
		<?php if($data['data']) foreach($data['data'] as $var){ ?>
			<tr>
			    <td><?=$var['id']?></td>
			    <td><?=$var['name']?></td>
			    <td><?=$var['logo']?></td>
			    <td><?=$var['home']?></td>
			    <td><?=$var['sort']?></td>
				<td><?=$this->iff($var['isDelete'], '关', '开')?></td>
				<td><a href="/admin778899.php/system/switchwithdrawStatus/<?=$var['id']?>" target="ajax" call="sysReloadwithdraw"><?=$this->iff($var['isDelete'], '开启', '关闭')?></a> 	
		    <?php if($this->user['uid']==1){ ?>
				| <a href="#" onclick="sysEditwithdraw(<?=$var['id']?>)">修改</a> <!--| <a href="/admin778899.php/system/deletewithdraw/<?=$var['id']?>" target="ajax" call="sysReloadwithdraw">删除</a>--></td>
		    <?php } ?>
			</tr>
		<?php }else{ ?>
			<tr>
				<td colspan="9">暂时没有收款银行信息，请点右上角按钮添加收款银行</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
	<footer>
	<?php
		$rel=get_class($this).'/withdraw-{page}?'.http_build_query($_GET,'','&');
		$this->display('inc/page.php', 0, $data['total'], $rel, 'betLogSearchPageAction');
	?>
	</footer>
</article>
<script type="text/javascript">  
ghhs("nav01","tr");  
</script>