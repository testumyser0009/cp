<?php

/**
 * Created by PhpStorm.
 * User: u
 * Date: 2017/4/28
 * Time: 0:39
 */
class sylot extends WebBase
{
    public final function js_ssc(){
//         echo 1;
        $this->display('sylot/js/js_ssc.php');
    }
    public final function js_pk10(){
        $this->display('sylot/js/js_pk10.php');
    }
    public final function js_lhc(){
        $this->display('sylot/js/js_lhc.php');
    }
    public final function lhc(){
        $this->display('sylot/lhc.php');
    }
}