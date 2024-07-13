<?php

$data = [];

$output = 0;

$debug = true;

$d_old = 0;

// ----------------------------------- Quera

[$n, $l] = explode(' ', readline());

for ($i = 0 ; $i < $n ; $i++) {

    $data[] = explode(' ', readline());

}

// ----------------------------------- Local

for ($i = 0 ; $i < $n ; $i++) {

    $output += abs($d_old - $data[$i][0]);
    
    $red = true;
    
    $m = -$output;

    while ($m <= 0) {

        if ($red) {

            $m = $data[$i][1] - abs($m);
            
            $red = false;

        } else {

            $m = $data[$i][2] - abs($m);

            $red = true;

        }

    }

    $output = ($red) ? $output : $output + $m;
    
    $d_old = $data[$i][0];

}

$output += $l - $data[$n-1][0];

echo $output."\n";