<?php
	$para=$_GET;
	
	// 默认取今天的数据
	if($para['date'] !=''){
		$date=strtotime($para['date']);
	}else{
		$date=strtotime('00:00');
	}
	// 取彩种信息
	$sql="select * from {$this->prename}type where id=?";
	$typeInfo=$this->getRow($sql, $this->type);
	
	// 取当天的开奖数据
	//$sql="select d.*, t.actionNo, t.actionTime from {$this->prename}data_time t left join {$this->prename}data d on right(d.number, 3)-0=t.actionNo where t.type=d.type and d.time between $date and $date+24*3600 and d.type={$this->type}";
	//echo $sql;exit;
	
	// 取当前彩种开奖时间表
	$sql="select * from {$this->prename}data_time where type={$this->type} order by actionNo asc, actionTime";
	$times=$this->getPage($sql, $this->page, $this->pageSize);
	
	$dateString=date('Y-m-d ');
	
	$sql="select * from {$this->prename}data where type={$this->type} and ";
	
	$sqlAmount="select sum(b.money) betAmount, sum(b.bonus) zjAmount, sum(b.fanDianAmount) fanDianAmount from ssc_bets b where type={$this->type} and b.isDelete=0";
	$all=$this->getRow($sqlAmount);
?>
<article class="module width_full">
<input type="hidden" value="<?=$this->user['username']?>" />
	<header>
		<h3 class="tabs_involved"><?=$typeInfo['title']?>开奖数据
		<form class="submit_link wz" action="/admin778899.php/data/index/<?=$this->type?>" target="ajax" call="defaultSearch" dataType="html">
			期数：<input name="actionNo" type="text"  />
			<label style="margin-left:30px;"><a class="item" href="data/index/<?=$this->type?><?=$args[0]['id']?>?date=<?=date('Y-m-d', $date-24*3600)?>">前一天</a></label>
			<label><a class="item" href="data/index/<?=$this->type?><?=$args[0]['id']?>?date=<?=date('Y-m-d', $this->time)?>">今天</a></label>
			<label><a class="item" href="data/index/<?=$this->type?><?=$args[0]['id']?>?date=<?=date('Y-m-d', $date+24*3600)?>">后一天</a></label>
			<label>日期：<input name="date" type="date" /></label>
			<input type="submit" value="查找" class="alt_btn">
			<input type="reset" value="重置条件">
		</form>
		</h3>
	</header>

	<table class="tablesorter" cellspacing="0">
		<thead>
			<tr>
				<th>彩种</th>
				<th>场次</th>
				<th>期数</th>
				<th>日期</th>
				<th>开奖数据</th>
				<th>状态</th>
				<th>开奖时间</th>
				<th>投注金额</th>
				<th>中奖金额</th>
				<th>返点金额</th>
				<th>手动开奖<!--备注--></th>
			</tr>
		</thead>
		<tbody>
			<?php
				$count=array();
				if($para['actionNo']) $times=array('data'=>array('id' =>'--'));
				$dateString=date('Y-m-d ', $date);
				foreach($times['data'] as $var){
					if($para['actionNo']){
						$data=$this->getRow("select * from {$this->prename}data where type={$this->type} and number='{$para['actionNo']}'");
						$date=$data['time'];
						$var=array('actionNo'=>'--','actionTime'=>date('Y-m-d H:i:s', $date));
						$dateString='';
					}else{
                        if($this->type==73) {
                   
	
							$number=date('Ymd', $date).substr(10000+$var['actionNo'],1);
							
                            $sql = "select * from {$this->prename}data where type={$this->type} and number='$number'";
                            $data = $this->getRow($sql);
                        }elseif($this->type==74) {
                            // 重庆彩特殊处理
                            $number = 1000 + $var['actionNo'];
                            if ($var['actionNo'] > 288) {
                                $number = date('Ymd', strtotime(date('Y-m-d', $date - 1 * 24 * 60 * 60))) . substr($number + 1000, 1);
                            } else {
                                $number = date('Ymd', $date) . substr($number + 1000, 1);

                            }
                            $sql = "select * from {$this->prename}data where type={$this->type} and number='$number'";
                            $data = $this->getRow($sql);
                        }elseif($this->type==72) {
                            // 重庆彩特殊处理
							$number=date('ymd', $date).substr(1000+$var['actionNo'],1);
							
                            $sql = "select * from {$this->prename}data where type={$this->type} and number='$number'";
                            $data = $this->getRow($sql);
                        }

                        elseif($this->type==1){
							// 重庆彩特殊处理
							$number=1000+$var['actionNo'];
							if($var['actionNo']>120){ 
								$number=date('Ymd', strtotime(date('Y-m-d',$date - 1*24*60*60))).substr($number+1000,1);
							}else{
								$number=date('Ymd', $date).substr($number+1000,1);
									
							}
							$sql="select * from {$this->prename}data where type={$this->type} and number='$number'";
							$data=$this->getRow($sql);
						}elseif($this->type==50){
							// PK10
							$number = 44*(strtotime(date('Y-m-d', $date))-strtotime('2019-2-10'))/3600/24+$var['actionNo']+729391-44;
							//$number = 179*(strtotime(date('Y-m-d', $date))-strtotime('2007-11-18'))/3600/24+$var['actionNo']-1267-1253;
							$sql="select * from {$this->prename}data where type={$this->type} and number='$number'";
							$data=$this->getRow($sql);							
						}elseif($this->type==60){
							//广东快乐10分
							$number=$var['actionNo'];
							if ($number > 84) {
							$date -= 24 * 3600;
							}
							$number = date('Ymd', $date) . substr(1000 + $number, 1);
							 
							$sql="select * from {$this->prename}data where type={$this->type} and number='$number'";
							$data=$this->getRow($sql);
						}elseif($this->type==61){
							//重庆幸运农场
							$number=$var['actionNo'];
							$number=date('Ymd',$date).substr(100+$number,1);
							
							$sql="select * from {$this->prename}data where type={$this->type} and number='$number'";
							$data=$this->getRow($sql);
						}elseif($this->type==65 || $this->type==66){
							//北京快乐8和PC蛋蛋
							$number = 179*(strtotime(date('Y-m-d', $date))-strtotime('2019-02-19'))/3600/24+$var['actionNo']+936980-180;
						//	$number = 179*(strtotime(date('Y-m-d', $date))-strtotime('2004-09-19'))/3600/24+$var['actionNo']-1292*2-1253;
							$sql="select * from {$this->prename}data where type={$this->type} and number='$number'";
							$data=$this->getRow($sql);							
						}elseif($this->type==21){
							//广东11选五
							$number=$var['actionNo'];
							
							$number=date('ymd', $date).substr(1000+$number,1);							 
							$sql="select * from {$this->prename}data where type={$this->type} and number='$number'";													
							$data=$this->getRow($sql);
						}elseif($this->type==10){
							// k3
							$number=$var['actionNo'];
							if($var['actionNo']>82){ 
								$number=date('ymd', strtotime(date('Y-m-d',$date - 1*24*60*60))).substr(1000+$number,1);
							}else{
								$number=date('ymd', $date).substr(1000+$number,1);
									
							}							
							$sql="select * from {$this->prename}data where type={$this->type} and number='$number'";								
							$data=$this->getRow($sql);
						}elseif($this->type==55){
							//幸运飞艇
							$number=$var['actionNo'];
							if($var['actionNo']>180){ 
								$number=date('Ymd', strtotime(date('Y-m-d',$date - 1*24*60*60))).substr(1000+$number,1);
							}else{
								$number=date('Ymd', $date).substr(1000+$number,1);
									
							}
							$timea=intval(date('Hi',strtotime($var['actionTime'])));	
							if($timea>=0 && $timea <= 405 && date('Y', $date)){
							if($dateString>131){$dateString=date('Y-m-d ', strtotime('+1 Day',$date));}
							}
							$sql="select * from {$this->prename}data where type={$this->type} and number='$number'";	
							$data=$this->getRow($sql);
						}elseif($this->type==70){
							// 六合彩
							$number=$var['actionNo'];
							$sql="select * from {$this->prename}data where type={$this->type} and number='$number'";	
							$data=$this->getRow($sql);
						}elseif($this->type==71){
							$time=strtotime($var['actionTime']);
							$actionNo=$var['actionNo'];
							$actionNo=date('Ymd', $time).'-'.substr(10000+$actionNo,1);
							$number=$actionNo;
							$sql="select * from {$this->prename}data where type={$this->type} and number='$number'";	
							$data=$this->getRow($sql);
						}else{
							
						}
					}
					if($data['data']){
						$amountData=$this->getRow($sqlAmount." and actionNo=?",$data['number']);
					}else{
						$amountData=array();
					}
					$count['betAmount']+=$amountData['betAmount'];
					$count['zjAmount']+=$amountData['zjAmount'];
					$count['fanDianAmount']+=$amountData['fanDianAmount'];
			?>
			<tr>
				<td><?=$typeInfo['title']?></td>
				<td><?=$var['actionNo']?></td>
				<td><?=$this->ifs($data['number'], '--')?></td>
				<td><?=date('Y-m-d', $date)?></td>
				<td><?=$this->ifs($data['data'], '--')?></td>
				<td><?=$this->iff($data['data'], '已开奖', '未开奖')?></td>
				<td><?php
                if($this->type==70){
					echo $var['lhcTime'];
				}else{
					echo $dateString.$var['actionTime'];
				}
				?></td>
				<td><?=$this->ifs($amountData['betAmount'], '--')?></td>
				<td><?=$this->ifs($amountData['zjAmount'], '--')?></td>
				<td><?=$this->ifs($amountData['fanDianAmount'], '--')?></td>
				<td><?php if($data['data']){?>
                <a href="/admin778899.php/data/updatedata/<?php echo $this->type;echo '/';echo $var['actionNo'];echo '/';echo $dateString.$var['actionTime'];?>" target="modal" width="340" title="修改开奖号码" modal="true" button="确定:dataAddCode|取消:defaultCloseModal">修改</a>
                <a href="/admin778899.php/data/kj" target="ajax" data-type="<?=$typeInfo['id']?>" data-number="<?=$data['number']?>" data-time="<?php if($this->type==70){echo $var['lhcTime'];}else{echo $dateString.$var['actionTime'];}
				?>" data-data="<?=$data['data']?>" onajax="setKjData" call="setKj" title="重新对没有开奖的投注开奖">开奖</a>
					<?php }else{ ?>
					<a href="/admin778899.php/data/add/<?=$this->type?>/<?=$var['actionNo']?>/<?php if($this->type==70){echo $var['lhcTime'];}else{echo $dateString.$var['actionTime'];}
				?>" target="modal" width="340" title="添加开奖号码" modal="true" button="确定:dataAddCode|取消:defaultCloseModal">添加</a>					
                    <?php }?>
				</td>
			</tr>
			<?php } ?>
            <tr>
                <td><span class="spn9">本页总结</span></td>
                <td>--</td>
                <td>--</td>
                <td>--</td>
                <td>--</td>
                <td>--</td>
                <td>--</td>
                <td><?=$this->ifs($count['betAmount'], '--')?></td>
                <td><?=$this->ifs($count['zjAmount'], '--')?></td>
                <td><?=$this->ifs($count['fanDianAmount'], '--')?></td>
                <td>--</td>
            </tr>
            <tr>
                <td><span class="spn9">全部总结</span></td>
                <td>--</td>
                <td>--</td>
                <td>--</td>
                <td>--</td>
                <td>--</td>
                <td>--</td>
                <td><?=$this->ifs($all['betAmount'], '--')?></td>
                <td><?=$this->ifs($all['zjAmount'], '--')?></td>
                <td><?=$this->ifs($all['fanDianAmount'], '--')?></td>
                <td>--</td>
            </tr>

		</tbody>
	</table>
	<footer>
	<?php
		//$rel=$args[0]['id'];
		if($para){
			$rel.='?'.http_build_query($para,'','&');
		}
		$rel=$this->controller.'/'.$this->action .'-{page}/'.$this->type.'?'.http_build_query($_GET,'','&');
		$this->display('inc/page.php', 0, $times['total'], $rel, 'dataPageAction');
	?>
	</footer>
</article>