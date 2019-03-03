<?php
namespace Applications\MyFile\HomeArray;

class BjlHomeArray
{
    private static $BjlHome;
    
    public static function setBjlHome($home){
        self::$BjlHome = $home;
    }
    
    public static function getBjlHome(){
        return self::$BjlHome;
    }
}

