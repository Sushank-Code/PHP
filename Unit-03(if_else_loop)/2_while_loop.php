
<?php 

    // while loop uses for infinite looping or just condition looping
    $counter = 0;
    while ($counter <= 10) {
        echo $counter;
        $counter++;
    }

    $second = 0;
    $running = true;

    while ($running) {
        $second++;
        if($second == 10){
            $running = false;
        }
    }
    echo $second . "You stop";
?>