<?php
$this->type=$gameId=intval($_GET['gameId']);
$kjHao=$this->getRow("select * from {$this->prename}data where type={$this->type} order by number desc limit 1");
$curIssueData=array();
$curIssueData['gameId']=$this->type;
$curIssueData['issue']=$kjHao['number'];
$curIssueData['opentime']=date("Y-m-d H:i:s",$kjHao['time']);
$curIssueData['nums']=$kjHao['data'];

/*'var curIssueData = {"gameId":1,"issue":"20161209085","opentime":"2016-12-09 20:10:00","nums":"8,9,4,5,2"};
jsonpCallback(curIssueData)'*/
echo 'var curIssueData = '.json_encode($curIssueData).';
jsonpCallback(curIssueData)'
?>