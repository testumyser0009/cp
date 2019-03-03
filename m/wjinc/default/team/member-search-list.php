<?php
$this->getSystemSettings();

	$sql="select * from {$this->prename}members where 1=1 ";
	if($_GET['username'] && $_GET['username']!='用户名'){
		$_GET['username']=wjStrFilter($_GET['username']);
		if(!ctype_alnum($_GET['username'])) throw new Exception('用户名包含非法字符,请重新输入');
		// 按用户名查找时
		// 只要符合用户名且是自己所有下级的都可查询
		// 用户名用模糊方式查询
		$sql.=" and username like '%{$_GET['username']}%' and (parentId={$this->user['uid']} or zparentId={$this->user['uid']} or gudongId={$this->user['uid']} )";
	}else{
		unset($_GET['username']);
		switch($_GET['type']){
			case 0:
				// 所有人
				$sql.=" and (parentId={$this->user['uid']} or zparentId={$this->user['uid']} or gudongId={$this->user['uid']} ) ";
			break;
			case 1:
				// 我自己
				$sql.="and uid={$this->user['uid']} ";
			break;
			case 2:
				// 直属下级
				if($this->user['type']==1){
				$sql.=" and parentId={$this->user['uid']} and type=0 ";
				}elseif($this->user['type']==2){
				$sql.=" and zparentId={$this->user['uid']} and type=1 or (zparentId={$this->user['uid']} and parentId='' and type=0) ";
				}elseif($this->user['type']==3){
				$sql.=" and gudongId={$this->user['uid']} and type=2 or (gudongId={$this->user['uid']} and zparentId='' and parentId='' and type!=3) ";
				}
				break;
			break;
			case 3:
				// 所有下级
				$sql.=" and (parentId={$this->user['uid']} or zparentId={$this->user['uid']} or gudongId={$this->user['uid']} ) ";
			break;
		}
	}

	$data=$this->getPage($sql, $this->page, $this->pageSize);
	$params=http_build_query($_GET, '', '&');
	//echo $params;
?>
<table width="100%" class='table_b'>
	<thead>
		<tr class="table_b_th">
			<td>用户名</td>
            <td>用户类型</td>
            <td>返点</td>
			<td>余额</td>
			<td>状态</td>
			<td>在线</td>
			<td>最近登陆时间</td>
			<td>注册时间</td>
			<td width="17%">操作</td>
		</tr>
	</thead>
	<tbody class="table_b_tr">
	<?php if($data['data']) foreach($data['data'] as $var){ ?>
	 <?php $login=$this->getRow("select * from {$this->prename}member_session where uid=? order by id desc limit 1", $var['uid']);?>
		<tr>
			<td><?=$var['username']?></td>
            <td><? if($var['type']==1){
				echo '代理';
			}elseif($var['type']==2){
				echo '总代理';
			}elseif($var['type']==3){
				echo '股东';
			}else{
				echo '会员';
			}			
			?></td>
            <td><?=$var['fanDian']?>%</td>
			<td><?=$var['coin']?></td>
			
			<td><?=$this->iff($var['enable'],'正常','冻结')?></td>
            <td><?=$this->iff($login['isOnLine'] && ceil(strtotime(date('Y-m-d H:i:s', time()))-strtotime(date('Y-m-d H:i:s',$login['accessTime'])))<$GLOBALS['conf']['member']['sessionTime'], '<font color="#FF0000">在线</font>', '离线')?></td>
			<td><?=date('Y-m-d h:i:s',$login['loginTime'])?></td>
			<td><?=date('Y-m-d',$var['regTime'])?></td>         
            <td>
            <?php
			if($this->settings['recharge']==1 && $this->user['type'] && ($var['parentId']==$this->user['uid'] || $var['zparentId']==$this->user['uid'] or $var['gudongId']==$this->user['uid'])){?>
			<a href="/index.php/team/userUpdate2/<?=$var['uid']?>" style="color:#333;" target="modal"  width="420" title="给下级充值" modal="true" button="确定:dataAddCode|取消:defaultCloseModal">充值</a>&nbsp;&nbsp;
            <? } ?>
            <?php if($this->user['uid']!=$var['uid'] && $this->user['type'] && ($var['parentId']==$this->user['uid'] || $var['zparentId']==$this->user['uid'] or $var['gudongId']==$this->user['uid'])){ ?>
<a href="/index.php/team/userUpdate/<?=$var['uid']?>" style="color:#333;" target="modal"  width="420" title="修改用户" modal="true" button="确定:dataAddCode|取消:defaultCloseModal">修改</a>&nbsp;&nbsp;
<?php if($var['type']){ ?>
<a class="caozuo" href="/index.php/team/searchMember?type=2&uid=<?=$var['uid']?>">查看下级</a>
<?
	  }
 }?>
            </td>

		</tr>
	<?php } ?>
	</tbody>
</table>
<?php 
	$this->display('inc_page.php',0,$data['total'],$this->pageSize, '/index.php/team/searchMember-{page}?'.$params);
?>
