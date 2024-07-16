<?php

$data = [];

$price = 0;

$debug = true;

$s = true;

$counter = 0;

function printMy (string $detile, $data, bool $debug = true) {

    echo ($debug) ? "({$detile}) -> ".$data."\n" : '';

}

// --------------------------------- Quera

// [$n, $m] = explode(' ', readline());

// for ($i = 0 ; $i < $n ; $i++) {

//     $data[] = readline();

// }

// --------------------------------- Local

$handle = fopen("user.txt", "r");

fscanf($handle, '%d %d', $n, $m);

if ($n > $m) {

    echo '-1';

    exit;

}

$div = round($m / $n);

for ($i = 0 ; $i < $n ; $i++) {

    fscanf($handle, "%d", $a);

    $data[] = $a;

    $output_temp[] = $div;

}

// ------------------------------------

sort($data);

while ($s) {

    $sum = 0;

    for ($i = 0 ; $i < count($output_temp) ; $i++) {

        $sum += $output_temp[$i] * $output_temp[$i];

    }

    if ($sum > $m) {

        if ($output_temp[$counter] > 1) {

            $output_temp[$counter] -= 1;

        }

        $counter++;

    } elseif ($sum < $m) {

        echo '-1';

        exit;

    } elseif ($sum == $m) {

        $s = false;

    }

    if ($counter == $n) {

        $counter = 0;

    }

}

for ($i = 0 ; $i < $n ; $i++) {

    $price += pow(abs($output_temp[$i] - $data[$i]), 2);

}

echo $price;
