<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math function</title>
</head>
<body>
    <form action="math_function.php" method="post">
        <label for="x"> X :
            <input type="text" name="x">
        </label>
        <br><br>
         <label for="y"> Y :
            <input type="text" name="y">
        </label>
        <br><br>
        <label for="z"> Z :
            <input type="text" name="z">
        </label>
        <br><br>
        <label for="r"> Radius:
            <input type="text" name="r">
        </label>
        <br><br>
        <input type="submit" value="Total">
        <br> <br>
    </form>
</body>
</html>
<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    // $total = abs($x);   // Alway give Positive
    // $total = round($x);
    // $total = ceil($x);
    // $total = floor($x);
    // $total = sqrt($x);

    // $total = pow($x,$y);  // power
    // $total = max($x,$y,$z); // Maximum
    // $total = min($x,$y,$z);    // Minimum

    // $total = pi();
    // $total = rand(1,100);

    // echo $total;

    // exercise : Finding area of circle

    $r = $_POST["r"];
    $pi = pi();
    
    // $area = null;
    // $area  = $pi * $r * $r;
    // echo "The Area of cicle is : $area";

    // exercise 2 : Finding the volume of circle

    $volume = null;
    $r_cube = pow($r,3);
    $volume = (4/3) * pi() * $r_cube;
    echo "Volume = $volume";
?>