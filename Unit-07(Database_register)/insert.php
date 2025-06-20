<?php 
    $db_server = "127.0.0.1";
    $db_user = "root";
    $db_password = "mysql12345**";
    $db_name = "php_db";   # database

    $conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);

    if ($conn) {
        echo "You are Connected";
    } else {
        echo "Not Connected";
    }

    $sql = "INSERT INTO users(user,password)
            VALUES ('HariPrasad2','sadsad123')
            ";
    
    try {
        mysqli_query($conn,$sql);
        echo "<br>Inserted";
    } catch (\Throwable $e) {
        echo "<br> Not Inserted";
    }

    mysqli_close($conn);
?>