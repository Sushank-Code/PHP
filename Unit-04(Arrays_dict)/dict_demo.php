<!-- dictionary = also known as associative array -->

<?php 
    $cap = array("Usa" => "Washhington",
                "Nepal"=>"Kathmandu",
                "Japan" => "Kyoto",
                "Afganistan" =>"kabul",
                );

    // Accessing 1 element
    // echo $cap["Nepal"];
    echo "<br>";

    // changing & adding
    // $cap["Afganistan"] = "Istambul";
    // $cap["China"] = "Beijing";

    // array_pop($cap);

    // array_shift($cap);

    // $cap = array_reverse($cap);
    
    // echo count($cap);

    // Accessing Key & values only

    // $keys = array_keys($cap);
    // $values = array_values($cap);

    // foreach ($values as $value) {
    //     echo "<br>";
    //     // echo $key . "<br>";
    //     echo $value . "<br>";
    // }

    $capital = array_flip($cap);
    echo "<br>";
    foreach ($capital as $key => $value) {
        echo "<br>";
        echo  "$key = $value" . "<br>";
    }
    
    echo "<br>";
    foreach ($cap as $key => $value) {
        echo "<br>";
        echo  "$key = $value" . "<br>";
    }
    
?>