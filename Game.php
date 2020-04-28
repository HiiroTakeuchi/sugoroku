<?php
class game{
public $now_square =0;
public $now_square2 = 0;
public $goal_made = 50;


function ReturnMessage($now_square){


$goal_made = 50- $now_square;

$message = "";
if($now_square == 0){

    $message = "<br>現在地:STARTマス";
}elseif($now_square >= 50){
    $message = "<br>ゴールしました！おめでとうございます！";
}
else{
    $message = "<br>ゴールまで". $goal_made."です。";
}
echo $message;
}

function ReturnMessage2($now_square2){


    $goal_made = 50- $now_square2;
    
    $message = "";
    if($now_square2 == 0){
    
        $message = "<br>現在地:STARTマス";
    }elseif($now_square2 >= 50){
        $message = "<br>ゴールしました！おめでとうございます！";
    }
    else{
        $message =  "<br>ゴールまで". $goal_made."です。";
    }
    echo $message;
    }
}