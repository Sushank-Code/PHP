<?php 
    $game_genre = array("action","fantasy","fictional","hero_shooter");

    // Accessing 1 element of array  

    // echo $game_genre[0];
    // echo "<br>";
    // echo $game_genre[1];
    
    // changing the array element
    // $game_genre[0]="battle_royal";

    // push -insert at last
    // array_push($game_genre,"single_player","multi_player");

    // pop - last elment removed
    // array_pop($game_genre);

    // unshift- insert at the first
    // array_unshift($game_genre,"open_world");

    // shift-first element removed
    // array_shift($game_genre);

    // reverse
    // $game_genre = array_reverse($game_genre);

    echo count($game_genre);

    echo "<br>";
    foreach ($game_genre as $game) {
        echo "<br>";
        echo "$game" . "<br>";
    }
?>