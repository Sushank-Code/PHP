<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the session page
    <!-- <a href="ses_home.php"> This goes to home page</a> -->
    <form action="session.php" method="post">
        <button type="submit" name="logout"> logout</button>
    </form>
</body>
</html>
<?php 
    $_SESSION["username"] = "MrY";
    $_SESSION["password"] = "hello";

    echo $_SESSION["username"]."<br>";
    echo $_SESSION["password"];

    if(isset($_POST["logout"])){
        session_destroy();
    }
?>