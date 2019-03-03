<?php 
$this->getSystemSettings();
$sysServerDate=date("Y-m-d H:i:s",time());
echo "var animalsYear = '".$this->settings['animalsYear']."';
var sysServerDate = '".$sysServerDate."';
var sysTrialGamePro=0;"
?>
