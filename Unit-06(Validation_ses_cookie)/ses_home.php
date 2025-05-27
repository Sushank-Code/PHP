<?php 
    session_start();

    $_SESSION["x"] = "ram";
    // $_SESSION["y"] = "hari";

    foreach ($_SESSION as $key => $value) {
        echo "$key = $value";
    }
    // echo $_SESSION["x"]."<br>";
    // echo $_SESSION["y"];

    session_unset();
    session_destroy();

    if(isset($_SESSION["x"])){
        echo "Yes";
    }
    else{
        echo "No";
    }
   
?>