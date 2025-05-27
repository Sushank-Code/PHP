<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <label for="username"> Username</label> <br>
        <input type="text" id="username" name="username">
        <br>
        <button type="submit" name="login"> Login</button>
    </form>
</body>
</html>
<?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = $_POST["username"];
        echo $username;
    }
?>