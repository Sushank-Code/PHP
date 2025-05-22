<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="isset_empty.php" method="post">
        <label for="username"> Username</label> <br>
        <input type="text" id="username" name="username">
        <br>
        <br>
        <button type="submit"> Login </button>
    </form>
</body>
</html>

<?php 
    // $username = "Sushank";
    // $lastname = null;

    // if(isset($lastname)){
    //     echo "The variable is declared, True";
    // }
    // else{
    //     echo "False";
    // }

    // if(empty($username)){
    //     echo "The variable is not declared, null or empty";
    // }
    // else{
    //     echo "variable is declared";
    // }

    $username = $_POST["username"];
    if (empty($username)) {
        echo "Please Fill the username";
    } else {
        echo $username;
    }
    
?>