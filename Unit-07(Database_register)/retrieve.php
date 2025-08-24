<?php 
    // Connection
    require __DIR__ . "/config.php";

    $conn = mysqli_connect(
        $config["database"]["db_server"],
        $config["database"]["db_user"],
        $config["database"]["db_password"],
        $config["database"]["db_name"]
    );

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