<?php
$this->type=$gameId=intval($_GET['gameId']);
if(intval($_GET['dateStr'])){
$datenum=intval($_GET['dateStr']);
$dateStr=strtotime(date('Y-m-d 00:00:00',strtotime(intval($_GET['dateStr']))));
$dateStr2=strtotime(date('Y-m-d 23:59:59',strtotime(intval($_GET['dateStr']))));

}else{
$datenum=date('Ymd',time());
$dateStr=strtotime(date('Y-m-d 00:00:00',time()));	
$dateStr2=strtotime(date('Y-m-d 23:59:59',time()));

}
if($this->type==70){
$data=$this->getRows("select * from {$this->prename}data where type={$this->type} order by number desc,time desc limit 50");
}elseif($this->type==1 || $this->type==55){
$data=$this->getRows("select * from {$this->prename}data where type={$this->type} and number like '{$datenum}%' order by number desc,time desc");	
}else{
$data=$this->getRows("select * from {$this->prename}data where type={$this->type} and time >= '{$dateStr}' and time <= '{$dateStr2}' order by number desc,time desc");	
}
	$types=$this->getTypes();
	$kjdTime=$types[$gameId]['data_ftime'];
$alldata=array();
$historyData=array();
$historyData['id']=null;
$historyData['betEndTime']=null;
$historyData['turnNum']=null;
$historyData['openNum']=null;
$historyData['openTime']=null;
$historyData['gameId']=$this->type;
$historyData['status']=2;
$historyData['remark']=null;
/*$historyData['n1']=null;
$historyData['n2']=null;
$historyData['n3']=null;
$historyData['n4']=null;
$historyData['n5']=null;
$historyData['n6']=null;
$historyData['n7']=null;
$historyData['n8']=null;
$historyData['n9']=null;
$historyData['n10']=null;
$historyData['n11']=null;
$historyData['n12']=null;
$historyData['n13']=null;
$historyData['n14']=null;
$historyData['n15']=null;
$historyData['n16']=null;
$historyData['n17']=null;
$historyData['n18']=null;
$historyData['n19']=null;
$historyData['n20']=null;*/
$historyData['statDate']=date("Y-m-d H:i:s",time());
/*for($i = 1; $i <= 20; $i++){
	echo '$n'.$i.'=';
}*/
$historyData2='';
foreach ($data as $key=>$value){
	//echo $value['number'];
	$lastNo=$this->getGameLastNo($gameId,$value['time']);
	$diffTime=strtotime($lastNo['actionTime'])-$kjdTime;
	//echo $lastNo['actionNo'].'_'.$lastNo['actionTime'].'<br>';

$historyData['id']=intval($value['id']);
$historyData['betEndTime']=date("Y-m-d H:i:s",$diffTime);
$historyData['turnNum']=$value['number'];
$historyData['openNum']=$value['data'];
$historyData['openTime']=date("Y-m-d H:i:s",strtotime($lastNo['actionTime']));
	$nums = explode(',', $value['data']);
	foreach ($nums as $keynum=>$n){
		$historyData['n'.($keynum+1)]=intval($n);
	}
array_push($alldata,$historyData);

}

echo 'var historyData = '.json_encode($alldata).';
jsonpCallback(historyData);';
 /*var historyData = [{"id":402262,"betEndTime":"2016-12-08 21:30:00","turnNum":"2016142","openNum":"39,37,24,09,26,28,29","openTime":"2016-12-08 21:35:00","gameId":70,"status":2,"remark":"","n1":39,"n2":37,"n3":24,"n4":9,"n5":26,"n6":28,"n7":29,"n8":null,"n9":null,"n10":null,"n11":null,"n12":null,"n13":null,"n14":null,"n15":null,"n16":null,"n17":null,"n18":null,"n19":null,"n20":null,"statDate":"2016-12-08 00:00:00"}];
jsonpCallback(historyData);*/
?>
