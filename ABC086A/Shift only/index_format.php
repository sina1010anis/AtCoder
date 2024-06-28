<?php

fscanf(STDIN, "%d", $n);

$numbers = explode(" ", trim(fgets(STDIN)));

$n = count($numbers);

$count = 0;

$finsh = true;

while ($finsh) {

    for ($i = 0 ; $i < $n ; $i++) { // Block M1 ( Start )

        $numbers[$i] = (int)$numbers[$i];

        if ($numbers[$i] % 2 == 0) {
    
            $numbers[$i] = $numbers[$i] / 2;
    
        } else {
    
            $finsh = false;
    
            break;
    
        }
    
    } // Block M1 ( End )

    $finsh == false ? false : $count++;
}

echo $count;