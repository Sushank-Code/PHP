<?php 
    setcookie("fav_game","dying_light",time()+ (86400),"/");
    setcookie("fav_food","apple",time()-0,"/");

    foreach ($_COOKIE as $key => $value) {
        echo "$key = $value";
    }

    if (isset($_COOKIE["fav_game"])) {
        echo "<br>" .$_COOKIE["fav_game"];
    } else {
        echo "Nothing";
    }
?>