<?php

$handle = fopen("user.txt", "r");

fscanf($handle, "%d %d %d", $n, $a, $b);

$output_temp = 0;

$output = 0;

$stoer_output = [];

for ($i = 0 ; $i <= $n ; $i++) {

    $output_temp = array_sum(str_split($i, 1));

    if ($output_temp >= $a and $output_temp <= $b) {
        
        $stoer_output[] = $i;

    }

    $output_temp = 0;

}

echo array_sum($stoer_output);