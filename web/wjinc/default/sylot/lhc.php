<?php
$lastNo=$this->getGameLastNo(70);
//$nowdate=date("Ymd");
$lasNo=$lastNo['actionNo'];
$code=randKeys();
$issue='';
$opentime='';
//echo $lasNo;
//$lasNo=strlen($lasNo)==3?$lasNo:"0".$lasNo;

header('Content-type: application/xml');
echo'<?xml version="1.0" encoding="utf-8"?>';
echo '<xml><row expect="'.$GLOBALS['issue'].'" opencode="'.randKeys().'" opentime="'. $GLOBALS['opentime'].'"/></xml>';

function randKeys(){
    header("application/json, text/javascript, */*; q=0.01");
    $output = "";
    $url='http://129kai.cn/index.php?c=api2&a=getLastData&cp=hk6&_=0.9007102444220094';
    $html = file_get_contents($url);
    $json=json_decode($html,true);
    $GLOBALS['issue']=$json['c_t'];
    $GLOBALS['opentime']=$json['c_d'];
//    echo  $GLOBALS['issue'];
    $arr=$json['c_r'];
//    var_dump($arr) ;
    $output .= $arr[0]['no'].",";
    $output .= $arr[1]['no'].",";
    $output .= $arr[2]['no'].",";
    $output .= $arr[3]['no'].",";
    $output .= $arr[4]['no'].",";
    $output .= $arr[5]['no'].",";
    $output .= $arr[6]['no'].",";

    return rtrim($output, ',');
}

?>

