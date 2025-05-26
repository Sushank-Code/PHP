<?php 
    $str = "The Good , The bad , The Ugly";
    $arr = array("Hello", "&","Hi");

    // $str = strtolower($str);
    // $str = strtoupper($str);
    // $str = trim($str);
    // $str = str_pad($str,40,"P");  // pad string to right to make 40 length
    // $str = str_replace("," ,"&" ,$str);
    // $str = strrev($str);
    // $str = str_shuffle($str); // rearraning in random order

    // $compare = strcmp($str,"The Good , The bad & The Ugly");
    // echo "$compare";

    // $str = strlen($str);

    // $str = strpos($str,"o");     // position

    // $str2 = substr($str,0,5);    // string slicing , 0 - first letter to start with
    // $str2 = substr($str,4);    
    // echo "$str2";

    // String into array
    // $arr = explode(",",$str);
    // foreach ($arr as $ele) {
    //     echo "$ele"."<br>";   
    // }

    // array into string
    // $str_a = implode($arr);
    $str_a = implode(" ",$arr);
    echo "$str_a";


    // echo "$str";
?>