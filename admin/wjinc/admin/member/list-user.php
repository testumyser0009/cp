<?php
	$sql="select u.*,sum(b.money * b.totalNums) betAmount, sum(b.rebateMoney) rebateMoneyDouble, sum(b.bonus) zjAmount, (select sum(c.amount) from ssc_member_cash c where c.`uid`=u.`uid` and c.state=0 ) cashAmount,(select sum(r.amount) from ssc_member_recharge r where r.`uid`=u.`uid` and r.state in(1,2,9) ) rechargeAmount from ssc_members u left join ssc_bets b on u.uid=b.uid and b.lotteryNo !='' and b.isDelete=0 where u.admin=0";

	//echo $this->sortType;
	
	// 用户名限制
	// 从属关系限制
	if($_GET['username'] && $_GET['username']!="用户名"){
		if(!ctype_alnum($_GET['username'])) throw new Exception('用户名包含非法字符,请重新输入');
		$sql.=" and u.username='{$_GET['username']}'";
	}else{
		unset($_GET['username']);
	}
		
	switch($_GET['type']){
		case 1:
			//我自己
			$sql.=" and u.uid={$this->user['uid']}";
		break;
		case 2:
			// 所有下级
			if(!$_GET['uid']) $_GET['uid']=$this->user['uid'];
			$sql.=" and u.parentId={$_GET['uid']} or u.zparentId={$_GET['uid']} or u.gudongId={$_GET['uid']}";
		break;
		case 3:
			// 所有下级
			if(!$_GET['uid']) $_GET['uid']=$this->user['uid'];
			$sql.=" and u.parentId={$_GET['uid']} or u.zparentId={$_GET['uid']} or u.gudongId={$_GET['uid']}";
		break;
		default:
			// 所有人
			//$sql.=" and concat(',',u.parents,',') like '%,{$this->user['uid']},%'";
		break;
	}
	$sql.=' group by u.uid';
	
	//排序
	switch($_GET['paixu']){
		case 'uid':
			//默认
			$sql.=" order by u.uid asc";
			break;
		case 'coin':
			//按资金
			$sql.=" order by u.coin desc";
			break;
		case 'betAmount':
			//按投注金额
			$sql.=" order by betAmount desc";	
			break;
		case 'zjAmount':
			//按中奖金额
			$sql.=" order by zjAmount desc";
			break;
		case 'fanDian':
			//按返点
			$sql.=" order by u.fanDian desc";
			break;
		case 'type':
			//累计积分
			$sql.=" order by u.type desc";
			break;
		default:
			// 注册时间
			$sql.=" order by u.regTime desc";
		break;
	}

 	//echo $sql;
	$data=$this->getPage($sql, $this->page, $this->pageSize);
	$sql="select sum(coin) from ssc_coin_log where uid=? and liqType between 2 and 3";
	$sql2="select * from ssc_member_session where uid=? order by id desc limit 1";
?>
<article class="module width_full">
<input type="hidden" value="<?=$this->user['username']?>" />
<table class="tablesorter" cellspacing="0"> 
<thead> 
    <tr> 
        <th>ID</th> 
        <th>用户名</th> 
        <th>真实姓名</th> 
        <th>类型</th>
        <th>来源</th>
        <th>可用|冻结</th> 
        <th>中奖|退水</th> 
        <th>投注|盈亏</th>
        <th>返点(分成)</th> 
        <th>状态</th> 
        <th>最后登录</th> 
        <th>操作</th> 
    </tr> 
</thead> 
<tbody id="nav01"> 
<?php
	if($data['data']) foreach($data['data'] as $var){ 
	$var['fanDianAmount']=$this->getValue($sql, $var['uid']);
	$login=$this->getRow($sql2, $var['uid']);
	/*//统计总投注额,此处为复式投注总额
	$sql3="select sum(totalMoney) from ssc_bets where isDelete=0 and uid=? and lotteryNo!='' and betInfo!='' and totalNums>1 and totalMoney>0";
	$var['betAmount']=$this->getValue($sql3, $var['uid']);
	//此处为单式投注总额
	$sql4="select sum(money) from ssc_bets where isDelete=0 and uid=? and lotteryNo!='' and totalNums=1 and totalMoney=0";
	$var['betAmountb']=$this->getValue($sql4, $var['uid']);
	$var['betAmount']+=$var['betAmountb'];*/
?>
	<?php
        if($var['isDelete']==0){ //是否删除
    ?>
    <tr> 
        <td><?=$var['uid']?></td> 
        <td><?=$var['username']; ?></td> 
        <td><?=$var['name']; ?></td> 
        <td><a href="Member/listUser?ttype=<?=$var['type']?>"><?php if($var['type']==1){echo'代理';}elseif($var['type']==2){echo'总代理';}elseif($var['type']==3){echo'股东';}
		else{echo '会员';}?>
		<?php if($var['panid']==2){
			echo '(B盘)';
		}else{
			echo '(A盘)';			
		}?></a></td>
        <?php 
        	$idxx = explode(':', $var['src']);
        	if(count($idxx)==2){
		?>
		<td><a href="Member/listUser?srcCode=<?=$idxx[0]?>"><?=$idxx[0]?></a>|<a href="Member/listUser?srcLink=<?=$idxx[1]?>"><?=$idxx[1]?></a></td>
			<?php }else{ ?>
		<td><a href="Member/listUser?srcCode=<?=$var['src']?>"><?=$this->iff($var['src']=="",'--', $var['src'])?></a></td>
        <?php } ?>
        <td><?=$var['coin']?><span class='spn10'>|</span><?=$var['fcoin']?></td> 

        <td><?=$this->ifs($var['zjAmount'], '--')?><span class='spn10'>|</span><?=$var['rebateMoneyDouble']?></td> 
        <td><?=$this->ifs($var['betAmount'], '--')?><span class='spn10'>|</span><?=$this->ifs($var['zjAmount']-$var['betAmount']+$var['rebateMoneyDouble'], '--')?></td>
        <td><?=$var['fanDian']?>%</td> 
        <td><?=$this->iff($login['isOnLine'] && ceil(strtotime(date('Y-m-d H:i:s', time()))-strtotime(date('Y-m-d H:i:s',$login['accessTime'])))<$GLOBALS['conf']['member']['sessionTime'], '<font color="#FF0000">在线</font>', '离线')?></td> 
        <td><?=$this->iff($login['loginTime'],date('m-d H:i', $login['loginTime']),'--')?></td> 
        <td><a href="/admin778899.php/Member/userAmount/<?=$var['uid']?>" target="modal"  width="420" title="用户统计" modal="true">统计</a> | <a href="business/coinLog?username=<?=$var['username']?>">帐变</a> | <a href="/admin778899.php/Member/userUpdate/<?=$var['uid']?>" target="modal"  width="420" title="编辑用户" modal="true" button="确定:dataAddCode|取消:defaultCloseModal">编辑</a> | 
        <?php if($var['type']){ ?><a href="Member/index?type=2&uid=<?=$var['uid']?>" call="">下级</a> | <?php } ?>
        <a href="Member/tiuser/<?=$var['uid']?>" target="ajax" call="tiuser"  onajax="settiuser">踢他下线</a> 
        <a href="/admin778899.php/Member/delete/<?=$var['uid']?>" target="modal"  width="320" title="删除用户" modal="true" button="确定:dataAddCode" style=" color:#0099CC;">删除</a></td> 
    </tr>
   <?php }else{?>
    <tr> 
        <td class="spn9"><?=$var['uid']?></td> 
        <td class="spn9"><?=$var['username']?></td> 
        <td class="spn9"><?=$var['name']; ?></td> 
        <td class="spn9"><?php if($var['type']==1){echo'代理';}elseif($var['type']==2){echo'总代理';}elseif($var['type']==3){echo'股东';}else{echo '会员';}?></td> 
        <td class="spn9"><?=$var['coin']?><span class='spn10'>|</span><?=$var['fcoin']?></td> 
        <td class="spn9"><?=$var['score']?><span class='spn10'>|</span><?=$var['scoreTotal']?><span class='spn10'>|</span><?=$var['grade']?></td> 
        <td class="spn9"><?=$this->ifs($var['zjAmount'], '--')?><span class='spn10'>|</span><?=$var['rebateMoneyDouble']?></td> 
        <td class="spn9"><?=$this->ifs($var['betAmount'], '--')?><span class='spn10'>|</span><?=$this->ifs($var['zjAmount']-$var['betAmount']+$var['rebateMoneyDouble'], '--')?></td>
        <td class="spn9"><?=$var['fanDian']?>%</td> 
        <td class="spn9">已删除</td> 
        <td class="spn9"><?=$var['updateTime']?></td> 
        <td class="spn9"><a href="/admin778899.php/Member/userAmount/<?=$var['uid']?>" target="modal"  width="420" title="用户统计" modal="true">统计</a> | <a href="business/coinLog?username=<?=$var['username']?>">帐变</a> | <a href="Member/index?type=2&uid=<?=$var['uid']?>" call="">下级</a></td> 
    </tr>
	<?php }} ?>
</tbody> 
</table>
<footer>
	<?php
		$rel=get_class($this).'/index-{page}?'.http_build_query($_GET,'','&');
		$this->display('inc/page.php', 0, $data['total'], $rel, 'defaultReplacePageAction');
	?>
</footer>
<script type="text/javascript">  
ghhs("nav01","tr");  
</script>

</article>