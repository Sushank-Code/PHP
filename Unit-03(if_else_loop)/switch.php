<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switch.php" method="post">
        <label for="x"> X :
            <input type="text" name="x">
        </label>
        <br><br>
         <label for="y"> Y :
            <input type="text" name="y">
        </label>
        <br><br>
        <label for="op"> Enter the operation(+,-,* ):
            <input type="text" name="op">
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
    $op = $_POST["op"];

    switch ($op) {
        case '+':
            $add = $x +$y;
            echo "$x + $y = $add";
            break;
        case '-':
            $sub= $x - $y;
            echo "$x - $y = $sub";
            break;
        default:
            echo "Invalid operation";
            break;
    }
?>