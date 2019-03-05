<?php
date_default_timezone_set('PRC');
    //cqssc

    if($_GET["type"]==1){
        $url = "http://359.com/webapi/base_getawardtime?code=cqssc";
        $html = file_get_contents($url);
        $json = json_decode($html);
        if(empty($json->data->current->result)){
            $data[0]['issue'] = '';
            $data[0]['code'] = '';
            echo json_encode($data);
        }
        $data[0]['issue'] = $json->data->current->period;
        $data[0]['code'] =  implode(',',$json->data->current->result);
        echo json_encode($data);
    }
    //bjpk10
    if($_GET["type"]==50){
        $url = "http://359.com/webapi/base_getawardtime?code=bjpk10";
        $html = file_get_contents($url);
        $json = json_decode($html);
        if(empty($json->data->current->result)){
            $data[0]['issue'] = '';
            $data[0]['code'] = '';
            echo json_encode($data);
        }
        $data[0]['issue'] = $json->data->current->period;
        $data[0]['code'] =  implode(',',$json->data->current->result);
        echo json_encode($data);
    }
    //xyft
    if($_GET["type"]==55){
        $url = "http://359.com/webapi/base_getawardtime?code=mlaft";
        $html = file_get_contents($url);
        $json = json_decode($html);
        if(empty($json->data->current->result)){
            $data[0]['issue'] = '';
            $data[0]['code'] = '';
            echo json_encode($data);
        }
        $data[0]['issue'] = $json->data->current->period;
        $data[0]['code'] =  implode(',',$json->data->current->result);
        echo json_encode($data);
    }

    if($_GET["type"]==71){
        $url = "https://mma.qq.com/cgi-bin/im/online";
        $html = file_get_contents($url);
        $regex = '/\:(.*?)\,/';
        $matches = array();
        preg_match($regex, $html, $matches);
        if(empty($matches[1])){
            $data[0]['issue'] = '';
            $data[0]['code'] = '';
            echo json_encode($data);
        }
        $num = sum_of_digits($matches[1]);
        $numwan = $num%10;
        $online = intval($matches[1]);
        $codes = getcodes($online,$numwan);
        $time = time()-strtotime(date("Y-m-d"));
        $issue = substr(intval($time/60)+10000,1,6);
        $issue = date("Ymd").'-'.$issue;
        $data[0]['issue'] = $issue;
        $data[0]['code'] = $codes;
        echo json_encode($data);

    }
	if($_GET["type"]==73){
        $arr= array();
        while(count($arr)<10){
            $rand_num = rand(1,10);
            if(!in_array($rand_num,$arr)){
                array_push($arr,$rand_num);
            }
        }
        $time = strtotime(date('Y-m-d',time()));
        if(time()-$time<60){
            $actionNo = 1152;
        }else{
            $actionNo = intval((time()-$time+15)/75);
        }
        $issue = date("Ymd").substr(10000+$actionNo,1);
        //$issue = "20190222046";
        $codes = implode(",",$arr);
        $data[0]['issue'] = $issue;
        $data[0]['code'] = $codes;
        echo json_encode($data);
	}
	if($_GET["type"]==72){
        $arr= array();
        while(count($arr)<10){
            $rand_num = rand(1,10);
            if(!in_array($rand_num,$arr)){
                array_push($arr,$rand_num);
            }
        }
        //"00:01:02","00:02:33","00:04:03","00:05:33","00:07:05",
        $time = strtotime(date('Y-m-d',time()));
        if(time()-$time<60){
            $actionNo = 960;
        }else{
            $actionNo = intval((time()-$time+30)/90);
        }
        $issue = date("Ymd").substr(10000+$actionNo,1);
        //$issue = "20190222046";
        $codes = implode(",",$arr);
        $issue = substr($issue,2,10);
        $data[0]['issue'] = $issue;
        $data[0]['code'] = $codes;
        echo json_encode($data);
	}



function sum_of_digits($nums) {
    $digits_sum = 0;
    for ($i = 0; $i < strlen($nums); $i++) {
        $digits_sum += $nums[$i];
    }
    return $digits_sum;
}

function getcodes($online,$wan){
    $last4num = $wan.',';
    $online = substr($online,-4);
    $num =  substr($online,0,1);
    $last4num .= $num.',';
    $num =  substr($online,1,1);
    $last4num .= $num.',';
    $num =  substr($online,2,1);
    $last4num .= $num.',';
    $num =  substr($online,3,1);
    $last4num .= $num;

    return $last4num;
}
