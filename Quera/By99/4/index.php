<?php

[$n, $k] = explode(' ', readline());

$stains = [];

$output_temp = [];

$output = 0;

for ($i = 0 ; $i < $k ; $i++) {

    $stains[] = explode(' ', readline());

    $output_temp[(int)$stains[$i][0]][] = (int)$stains[$i][1];

}
foreach ($output_temp as $key=>$val) {

    $max = max($val);

    $min = min($val);

    $taf = ($max - $min > 0) ? ($max - $min) + 1 : 0;

    $output = ($taf < $output) ? $output : $taf;

}

echo $output;
