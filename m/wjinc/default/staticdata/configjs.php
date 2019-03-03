<?php 
$this->getSystemSettings();
$config=array();
$config['trialGamePro']=$this->settings['trialGamePro'];
$config['regFilterName']=$this->settings['regFilterName'];
$config['lhcWxJin']=$this->settings['lhcWxJin'];
$config['lhcWxMu']=$this->settings['lhcWxMu'];
$config['lhcWxShui']=$this->settings['lhcWxShui'];
$config['lhcWxHuo']=$this->settings['lhcWxHuo'];
$config['lhcWxTu']=$this->settings['lhcWxTu'];
$config['zxkfUrl']=$this->settings['zxkfUrl'];
$config['defaultSkin']=$this->settings['defaultSkin'];
$config['mainQQUrl']=$this->settings['mainQQUrl'];
$config['mainWxUrl']=$this->settings['mainWxUrl'];
$config['mainPhone']=$this->settings['mainPhone'];
$config['mainCustomerQQ']=$this->settings['mainCustomerQQ'];
$config['mainAgentQQ']=$this->settings['mainAgentQQ'];
$config['mainEmail']=$this->settings['mainEmail'];
$config['withdrawNumTotal']="7";
$config['showKjzb']='/';
$config['regUqFullName']="0";
echo 'var CONFIG_MAP = '.json_encode($config);
/*var CONFIG_MAP = {"trialGamePro":"0","regFilterName":"毛泽东;周恩来;潘春锋;潘春晖;潘金水;潘文海;章燕;秦明;周安;李银龙","lhcWxJin":"02,03,16,17,24,25,32,33,46,47","lhcWxMu":"06,07,14,15,28,29,36,37,44,45","lhcWxShui":"04,05,12,13,20,21,34,35,42,43","lhcWxHuo":"01,08,09,22,23,30,31,38,39","lhcWxTu":"10,11,18,19,26,27,40,41,48,49","zxkfUrl":"","defaultSkin":"blue","mainQQUrl":"http://wpa.qq.com/msgrd?v=3&uin=&site=web&menu=yes","mainWxUrl":"http://wpa.qq.com/msgrd?v=3&uin=&site=web&menu=yes","mainPhone":"0063-947-8788888","mainCustomerQQ":"","mainAgentQQ":"","mainEmail":"","withdrawNumTotal":"7","showKjzb":"/","regUqFullName":"0"};*/
?>