<?php 
    $num1 = 14;
    $num2 = 24;
    $num3 = 44;

    // if ($num1 > $num2 && $num1 > $num3) {
    //     echo "Num1 is Greater, $num1";
    // } 
    // elseif($num2 > $num1 && $num2 > $num3){
    //     echo "Num2 is Greater, $num2";
    // }
    // else{
    //     echo "Num3 is Greater, $num3";
    // }

    // logical or  ( true if one condition matches)
    // logical and ( true if both condition matches)

    if ($num1 > 10 || $num2 < 20) {  
        echo "yes";
    } else {
        echo "no";
    }

    // logical not (can check something is not true)

    $rain = true;
    if(!$rain){
        echo "<br>It is raining today";
    }
    else{
        echo "<br>It is not raining today";
    }
?>