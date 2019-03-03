<?php
	function jsft($html,$type){
		$arr['status'] = 1;
		$arr['data']['type'] = $type;
		$arr['data']['time'] = time();
		$arr['data']['number'] = '20190216218';
		$arr['data']['data'] = '01,02,03,04,05,06,07,08,09,10';
		return $arr;
	}
	
	function txff($html,$type){
		$arr['status'] = 1;
		$arr['data']['type'] = $type;
		$arr['data']['time'] = time();
		$arr['data']['number'] = '20190216218';
		$arr['data']['data'] = '01,02,03,04,05,06,07,08,09,10';
		return $arr;
	}