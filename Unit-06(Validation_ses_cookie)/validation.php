<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validaiton</title>
</head>
<body>
    <form action="validation.php" method="post">
        <label for="username"> Username</label> <br>
        <input type="text" id="username" name="username">
        <br>
        <label for="age"> Age</label> <br>
        <input type="text" id="age" name="age">
        <br>
        <label for="email">  Email </label> <br>
        <input type="email" id="email" name="email">
        <br>
        <br>
        <button type="submit" name="login"> Login</button>
    </form>
</body>
</html>

<?php 
    if(isset($_POST["login"])){
        // $username = $_POST["username"];

        // Sanitize

        // $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        // $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
        // $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);

        // echo "<br>";
        // echo "Welcome , {$username}";
        // echo "<br>";
        // echo "Age : $age";
        // echo "<br>";
        // echo "Email : $email";


        // Validate

        $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
        
        // age
        // if(empty($age)){
        //     echo "Not Valid age";
        // }
        // else{
        //     echo "You are $age years old";
        // }

        // email
        if(empty($email)){
            echo "Not Valid Email";
        }
        else{
            echo "$email";
        }


    }
?>