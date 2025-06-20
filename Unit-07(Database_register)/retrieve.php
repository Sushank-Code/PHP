<?php 
    // Connection
    $db_server = "127.0.0.1";
    $db_user = "root";
    $db_password = "mysql12345**";
    $db_name = "php_db";   # database

    $conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);

    // Retrieving
    // $sql = "SELECT * FROM users WHERE user = 'HariPrasadsadsad'
    //         ";  
    $sql = "SELECT * FROM users    # all data or row
            ";
    
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['id']."<br>";
            echo $row['user']."<br>";
            echo $row['reg_date']."<br>";
            echo "<hr>";
        }
    //     $row = mysqli_fetch_assoc($result);
    //     echo $row['id']."<br>";
    //     echo $row['user']."<br>";
    //     echo $row['reg_date']."<br>";
    }
    else{
        echo "No User Found";
    }

    mysqli_close($conn);
?>