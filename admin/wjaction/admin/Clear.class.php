<?php
/*清空缓存*/
class Clear extends AdminBase{
    public final function rmfile(){
		$dir =$GLOBALS['conf']['cache']['dir'];
        $dh=opendir($dir);							//先删除目录下的文件
		while ($file=readdir($dh)) {
			if($file!="." && $file!="..") {
				$fullpath=$dir."/".$file;
				if(!is_dir($fullpath)) {
					@unlink($fullpath);
				} else {
					@deldir($fullpath);
				}
			}
		}
		closedir($dh);
		if(@rmdir($dir)) {							//删除当前文件夹
			throw new Exception('清除成功');
		} else {
			throw new Exception('清除失败');
		}
     }
	 
    public final function rmfileqiantai(){
		$dir =$GLOBALS['conf']['cache']['dirqiantai'];
        $dh=opendir($dir);							//先删除目录下的文件
		while ($file=readdir($dh)) {
			if($file!="." && $file!="..") {
				$fullpath=$dir."/".$file;
				if(!is_dir($fullpath)) {
					@unlink($fullpath);
				} else {
					@deldir($fullpath);
				}
			}
		}
		closedir($dh);
		if(@rmdir($dir)) {							//删除当前文件夹
			throw new Exception('清除成功');
		} else {
			throw new Exception('清除失败');
		}
     }
	 
    public final function rmfilewap(){
		$dir =$GLOBALS['conf']['cache']['dirwap'];
        $dh=opendir($dir);							//先删除目录下的文件
		while ($file=readdir($dh)) {
			if($file!="." && $file!="..") {
				$fullpath=$dir."/".$file;
				if(!is_dir($fullpath)) {
					@unlink($fullpath);
				} else {
					@deldir($fullpath);
				}
			}
		}
		closedir($dh);
		if(@rmdir($dir)) {							//删除当前文件夹
			throw new Exception('清除成功');
		} else {
			throw new Exception('清除失败');
		}
     }
}