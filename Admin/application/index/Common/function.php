<?php

/*
 * 自定义函数库
 */
// 字符串截取
function mysub($str, $len = 20)
{
    $strLen = mb_strlen($str, 'utf-8');
    if ($strLen > $len) {
        return mb_substr($str, 0, $len, 'utf-8') . '...';
    } else {
        return $str;
    }
}
function da($dian){//小
    $a=rand(1,6);
    $b=rand(1,6);
    $c=rand(1,6);
    $arr=array();
    $d=rand(3,10);//小
    $g	=rand(11,18);//大
    $e=$a+$b+$c;
    if($a==$b&&$b==$c){
        $dian1=$dian;
        return da($dian1);
    }
    $f=$e%2;
    switch ($dian) {
        case 'a1':{
            if($e<=$d&&$f==1){// 小 单
                $arr[0]=$a;
                $arr[1]=$b;
                $arr[2]=$c;
                $str=implode(',',$arr);
                return $str;
            }else{
                $dian1='a1';
                return da($dian1);
            }
        };break;
        case 'a2':{
            if($e>=$g && $f==1){//大 单
                $arr[0]=$a;
                $arr[1]=$b;
                $arr[2]=$c;
                $str=implode(',',$arr);
                return $str;
            }else{
                $dian1='a2';
                return da($dian1);
            }
        };break;
        case 'a3':{	//小 双
            if($f==0&&$e<=$d){
                $arr[0]=$a;
                $arr[1]=$b;
                $arr[2]=$c;
                $str=implode(',',$arr);
                return $str;
            }else{
                $dian1='a3';
                return da($dian1);
            }
        };break;
        case 'a4':{	// 大 双
            if($f==0&&$e>=$g){
                $arr[0]=$a;
                $arr[1]=$b;
                $arr[2]=$c;
                $str=implode(',',$arr);
                return $str;
            }else{
                $dian1='a4';
                return 	da($dian1);
            }
        };break;

    }
}