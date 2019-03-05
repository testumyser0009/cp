<?php
class Index extends WebBase{
	//平台首页
	public final function main(){		
		$this->display('index.php');
	}
    public final function create_time(){
	    echo time();
        $type = 50;
        $datas=$this->getRows("select * from {$this->prename}data_time where type={$type} order by actionNo asc");
        echo '[';
        foreach ($datas as $data) {
            echo '"'.$data['actionTime'].'"'.',';
        }
        echo ']';
        //$this->getRow();
    }
}