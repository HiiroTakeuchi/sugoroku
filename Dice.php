<?php
Class Dice{

    public $dice = "";
    public $dice_ = "";

    function DiceNumber(){
       $this->dice = mt_rand(1,6);
        return $this->dice;
    }
    function DiceNumber2(){
        $this->dice_ = mt_rand(1,6);
         return $this->dice_;
    }
    function Square($now_square){
        echo str_repeat("■",$now_square);

    }
    function Square2($now_square2){
        echo str_repeat("■",$now_square2);

    }

}