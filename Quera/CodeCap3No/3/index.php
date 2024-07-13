<?php

$data = [];

$output = 0;

$debug = true;

$d_old = 0;

// ----------------------------------- Quera

// [$n, $l] = explode(' ', readline());

// for ($i = 0 ; $i < $n ; $i++) {

//     $data[] = explode(' ', readline());

// }

// ----------------------------------- Local

function printMy (string $detile, $data, bool $debug = true) {

    echo ($debug) ? "({$detile}) -> ".$data."\n" : '';

}

$handle = fopen("user.txt", "r");

fscanf($handle, '%d %d', $n, $l);

for ($i = 0 ; $i < $n ; $i++) {

    fscanf($handle, "%d %d %d", $d, $r, $g);

    $data[] = [$d, $r, $g];

}

// -----------------------------------

for ($i = 0 ; $i < $n ; $i++) {

    printMy('Output', $d_old .'-'. $data[$i][0], $debug);

    $output += abs($d_old - $data[$i][0]);
    
    $red = true;
    
    $m = -$output;

    while ($m <= 0) {

        if ($red) {

            printMy('--While--(Red)', $data[$i][1] .' - '. abs($m) .' => '.$data[$i][1] - abs($m), $debug);

            $m = $data[$i][1] - abs($m);
            
            $red = false;

        } else {

            printMy('--While--(Green)', $data[$i][2] .' - '. abs($m) .' => '.$data[$i][2] - abs($m), $debug);

            $m = $data[$i][2] - abs($m);

            $red = true;

        }

    }

    printMy('End--Output (Location 0)', $m.' + '.$output, $debug);

    $output = ($red) ? $output : $output + $m;
    
    printMy('End--Output (Location 1)',$output, $debug);

    $d_old = $data[$i][0];

}

$output += $l - $data[$n-1][0];

echo $output."\n";