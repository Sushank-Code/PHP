
<?php 
    $password = "Apple123";
    $hash = password_hash($password,PASSWORD_DEFAULT);
    echo $hash . "<br>";
    echo  strlen($hash)."<br>";

    if (password_verify("Apple123",$hash)) {
        echo "<br>" . "You are logged";
    } else {
        echo "Incorrect";
    }
    
?>