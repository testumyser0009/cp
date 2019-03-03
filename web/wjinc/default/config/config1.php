<?php
$this->getSystemSettings();
$config=array();
$config['logoUrl']=$this->settings['logoUrl'];
$config['defaultSkin']="yellow";
$config['isLocal']=false;
echo 'var webAppConfig = '.json_encode($config).';';
?>