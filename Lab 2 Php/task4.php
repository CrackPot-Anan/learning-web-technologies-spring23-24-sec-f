<?php
    $num1 = 23;
    $num2 = 28;
    $num3 = 26;

    if($num1>$num2 && $num1>$num3){
        echo("Number 1 is the largest Number.");
    }
    elseif($num2>$num1 && $num2>$num3){
        echo("Number 2 is the largest Number.");
    }
    else{
        echo("Number 3 is the  largest Number.");
    }
?>