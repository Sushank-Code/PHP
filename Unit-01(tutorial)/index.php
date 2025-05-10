<?php
    echo " I Like Cricket <br>";
 
    echo " Play cricket & football <br>";

    // this is comment
    /* 
        This is 
        Multi Line Comments
    */

    // variable

    $name = "Sushank";  // String
    
    echo $name;
    echo "<br>";
    echo "My name is {$name}";

    $age = 200 ;        // intgers
    $gpa = 4.5;         // float
    $price = 5.99;

    echo "<br>";
    echo "Age : $age";
    echo "<br> Gpa : $gpa";
    echo "<br> Price :\${$price}";

    $logged = true;     // Boolean 
    $online = false;

    echo "<br> Authenticated : {$logged}";
    echo "<br> Online : {$online}";

    echo"<br>";

    $total = null;
    $num = 5;
    $apple_price = 20;
    echo "<br> $num X apple";
    $total = $num * $apple_price;
    echo "<br>Your total price is {$total}";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <p> Hello</p>
</body>
</html>
