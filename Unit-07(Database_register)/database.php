<?php 
    $db_server = "127.0.0.1";
    $db_user = "root";
    $db_password = "mysql12345**";
    $db_name = "php_db";
    $conn = "";

    $conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);
    if ($conn) {
        echo "You are Connected";
    } else {
        echo "Not Connected";
    }
?>