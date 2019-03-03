<?php
namespace GatewayWorker\Game;
class EventsGame{
    public static $busNme;
    
    
    public static function setBusName($busNme){
        self::$busNme = $busNme;
    }
    
    
    public static function getBusName(){
        return self::$busNme;
    }
}