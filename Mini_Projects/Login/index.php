<?php 

    $db_server = "127.0.0.1";
    $db_user = "root";
    $db_password = "mysql12345**";
    $db_name = "php_db";

    $conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);

    // if ($conn) {
    //     echo "You are Connected";
    // } else {
    //     echo "Not Connected";
    // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1> Welcome to Login page</h1>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <label for="username"> Username </label> <br>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">  password </label> <br>
        <input type="password" id="password" name="password">
        <br>
        <button type="submit" name="login"> Login </button>
    </form>
</body>
</html>
<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo "Please enter username";
        }
        elseif(empty($password)){
            echo "Please enter password";
        }
        else{
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(user,password)
                    VaLUES ('$username','$hash')
                    ";
            try {
                mysqli_query($conn,$sql);
                echo "<br>Logged";
            } catch (Throwable $e) {
                echo "<br> Not Logged";
            }
        }
    }
    mysqli_close($conn);
?>