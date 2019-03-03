<?php
$this->type=$gameId=intval($_GET['gameId']);
$count=intval($_GET['count']);
if($count){
$data=$this->getRows("select * from {$this->prename}data where type={$this->type} order by number desc,time desc limit {$count}");
}else{
$data=$this->getRows("select * from {$this->prename}data where type={$this->type} order by number desc,time desc limit 200");
}
$types=$this->getTypes();
$kjdTime=$types[$gameId]['data_ftime'];
$alldata=array();
$historyData=array();
$historyData['turnNum']=null;
$historyData['openNum']=null;
$historyData['openTime']=null;
$historyData['openDate']=null;
//$historyData['gameId']=$this->type;
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
$historyData['total']=null;
/*for($i = 1; $i <= 20; $i++){
	echo '$n'.$i.'=';
}*/
$historyData2='';
foreach ($data as $key=>$value){
	//echo $value['number'];
	$lastNo=$this->getGameLastNo($gameId,$value['time']);
	$diffTime=strtotime($lastNo['actionTime'])-$kjdTime;
	//echo $lastNo['actionNo'].'_'.$lastNo['actionTime'].'<br>';
	$historyData['turnNum']=$value['number'];
	$historyData['openNum']=$value['data'];
	$historyData['openTime']=date("m-d H:i",strtotime($lastNo['actionTime']));
	$historyData['openDate']=date("Y-m-d H:i:s",strtotime($lastNo['actionTime']));
	$historyData['total']=0;
	$nums = explode(',', $value['data']);
	foreach ($nums as $keynum=>$n){
		$historyData['n'.($keynum+1)]=intval($n);
		$historyData['total']+=intval($n);
	}
array_push($alldata, $historyData);

}

echo json_encode($alldata);
/*[{"turnNum":"161209081","openNum":"3,3,5","openTime":"12-09 22:00","openDate":"2016-12-09 22:00:00",
"n1":3,"n2":3,"n3":5,"n4":null,"n5":null,"n6":null,"n7":null,"n8":null,"n9":null,"n10":null,
"n11":null,"n12":null,"n13":null,"n14":null,"n15":null,"n16":null,"n17":null,"n18":null,"n19":null,"n20":null,"total":11}]*/
?>
