<?php
require("board.php");
require("player.php");
require("Dice.php");
require("Game.php");

$board = new Board;
$taro = new Player;
$jiro = new Player;
$dice = new Dice;
$game = new game;

$now_square = 0;
$now_square2 = 0;
$d_number = $dice->DiceNumber();
$d__number = $dice->DiceNumber2();
$b_squares =$board->open();








echo "すごろくゲーム<br>";
$taro->outputName("太郎");

if(isset($_COOKIE["now_square"])){
    $now_square = $_COOKIE["now_square"];
}
if($now_square  <50 ){
    $now_square =$now_square + $d_number + $b_squares[$now_square];
    if($now_square>50 and $now_square<=55 ){$now_square = 50;}
    elseif($now_square>55 or $now_square<0){$now_square = 0;
    }
}else{
    $now_square = 50;
}
    
    setcookie("now_square",$now_square);

echo "(".$now_square.")";

$dice->Square($now_square);

echo"<br>サイコロの目は".$d_number."です。";

$game->ReturnMessage($now_square);

echo"<br>イベント:";
if($b_squares[$now_square] <= -1 and $now_square + $b_squares[$now_square] >0 ){
echo "アンラッキー...".($b_squares[$now_square] * -1)."マス戻る。";
}elseif($b_squares[$now_square] >= 1 and $now_square + $b_squares[$now_square]<50 ){
    echo "ラッキー！".$b_squares[$now_square]."マス進む。";
}elseif($now_square + $b_squares[$now_square] >55 or $now_square + $b_squares[$now_square] <0 )
{echo"残念。スタートへ戻る。";
    
}else{echo "";}






echo"<br><br>";


$jiro->outputName("二郎");
if(isset($_COOKIE["now_square2"])){
    $now_square2 = $_COOKIE["now_square2"];
}
  
if($now_square2 <50){
    $now_square2 =$now_square2 + $d__number + $b_squares[$now_square2];
    if($now_square2>50 and $now_square2<=55 ){$now_square2 = 50;
    }elseif($now_square2>55 or $now_square2<0){$now_square2 = 0;
    }
}else{
    $now_square2 =50;
}
    
    setcookie("now_square2",$now_square2);
echo"(".$now_square2.")";

$dice->Square2($now_square2);

echo"<br>サイコロの目は".$d__number."です。";

$game->ReturnMessage2($now_square2);

echo"<br>イベント:";
if($b_squares[$now_square2] <= -1 and $now_square2 + $b_squares[$now_square2] >0 ){
    echo "アンラッキー...".($b_squares[$now_square2] * -1)."マス戻る。";
    }elseif($b_squares[$now_square2] >= 1 and $now_square2 + $b_squares[$now_square2]<50 ){
        echo "ラッキー！".$b_squares[$now_square2]."マス進む。";
    }elseif($now_square2 + $b_squares[$now_square2] >55 or $now_square2 + $b_squares[$now_square2] <0 )
    {echo"残念。スタートへ戻る。";
    }else{
        echo"";
    }
    echo"<br><br>";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>すごろく</title>
    </head>
    <body>

        
        <form action="result.php">
            <input type ="submit" name="start" value="サイコロを振る">
        </form>

    </body>
</html>
