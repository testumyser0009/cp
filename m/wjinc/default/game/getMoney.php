<?php
if($this->user['testFlag']==1){
$userAmount=$this->getValue("select coin from {$this->prename}guestmembers where uid={$this->user['uid']}");
}else{
$userAmount=$this->getValue("select coin from {$this->prename}members where uid={$this->user['uid']}");
}
echo $userAmount;
?>