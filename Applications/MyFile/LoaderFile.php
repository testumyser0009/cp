<?php
//=================================================================
//自动加载MYFILE下面的所有文件，在程序里面使用直接使用命名空间可以使用
//仿照gateway自动加载使用
//作者：NNbaba
//2018-03-03
//================================================================
class LodeFile{
    
    function __construct(){
       
        $file = __DIR__;
        $this->loadFile($file);
    }
    function loadFile($file){
        $handler = opendir($file);
        
        while( ($filename = readdir($handler)) !== false )
        {
          
            //略过linux目录的名字为'.'和‘..'的文件
            if($filename != "." && $filename != "..")
            {
                $checkResult = is_file($file."/".$filename);
                if($checkResult){
                    if($filename != "LoaderFile.php"){
                        require_once $file."/".$filename;
                    }
                }else{
                    $this->loadFile($file."/".$filename);
                }
            }
        }
        closedir($handler);
    }
}

$ll = new LodeFile();