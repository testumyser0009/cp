<?php
namespace Applications\MyFile\Home;

class PeopleState
{
    public $id; // 玩家id
    public $name; // 玩家Name
    public $type; // 玩家类型
    public $money; // 玩家金额
    public $PlayMoney = array(array(),array(),array(),array(),array()); // 玩家下注的钱
    public $PlayState = array(); // 下注的位置 下标 0=>闲 1=>闲对 2=>和 3=>庄对 4=>庄
    
    public function __construct($id,$name,$money,$type){
        $this->id = $id;
        $this->name = $name;
        $this->money = $money;
        $this->type = $type;
    }
}

