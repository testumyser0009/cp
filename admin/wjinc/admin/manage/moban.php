<?php
	$sql="select uid, username, isDelete, enable from {$this->prename}sysmember where admin=1";
	$data=$this->getPage($sql, $this->page, $this->pageSize);
	//print_r($sql);
	$sql="select * from {$this->prename}member_session where uid=? order by id desc limit 1";
?>
<article class="module width_full">
<input type="hidden" value="<?=$this->user['username']?>" />
		<header>
			<h3 class="tabs_involved">投注模板修改</h3>
		</header>
		<table>
			
			<tbody>
			<tr>
				<td><input type="radio" value="1" onclick="radioval();" name="muban"/>旧模板</td>
				<td><input type="radio" value="2" onclick="radioval();" name="muban"/>新模板</td>
			</tr>
			</tbody>
			<tr>
				<input id="hidden" type="hidden" value="0"/>
				<td colspan="2"><a id="xiugai" href="" onclick="subCk()" >修改</a></td>
			</tr>
		</table>
	<script>
	function radioval(){
		var radio = document.getElementsByName("muban");  
		var hidden = document.getElementById("hidden");
		for (i=0; i<radio.length; i++) {  
			if (radio[i].checked) {  
				hidden.value=radio[i].value; 
			}  
		}  
	}
	function subCk(){
		var radio = document.getElementsByName("muban");  
		//var hidden = document.getElementById("hidden");
		for (i=0; i<radio.length; i++) {  
			if (radio[i].checked) {  
				//document.getElementById('xiugai').target="";
				document.getElementById('xiugai').href="/admin778899.php/manage/change?"+radio[i].value;
				//hidden.value=radio[i].value; 
			}  
		} 
		//document.getElementById('xiugai').href="manage/change"+;
	}
	</script>
	<footer>
	<?php
		$rel=get_class($this).'/coinLog-{page}?'.http_build_query($_GET,'','&');
		$this->display('inc/page.php', 0, $data['total'], $rel, 'betLogSearchPageAction');
	?>
	</footer>
</article>