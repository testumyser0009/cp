<?php
$this->getSystemSettings();
$config=array();
$config['logoUrl']=$this->settings['logoUrl'];
$config['skin']=$this->settings['defaultSkin'];
$config['copyright']='';
$config['isLocal']=false;
echo 'var appConfig = '.json_encode($config).';';
?>
var localConfig = {
	apiPath: '',
	staticPath: '/static/'
};
var slideList = ['./images/slide/zc/m1.jpg'];