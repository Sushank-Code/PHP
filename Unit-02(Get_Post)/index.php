<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4> Login System </h4>
    <form action="index.php" method="post">
        <label for="username"> Username</label> <br>
        <input type="text" id="username" name="username">
        <br>
        <br>
        <label for="password"> password</label> <br>
        <input type="password" id="password" name="password">
        <br>
        <br>
        <button type="submit"> Login </button>
        <br>
        <br>
    </form>
</body>
</html>
<?php 
    // GET
    // echo " Username :" . $_GET["username"] . "<br>";
    // echo " Password : {$_GET["password"]}";

    // POST
    echo " Username :" . $_POST["username"] . "<br>";
    echo " Password : {$_POST["password"]}";
?>