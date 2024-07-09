<?php

$n = readline();

[$x1, $x2] = explode(' ', $n);

$taf = $x1 - $x2;

if ($taf == 0) {

    echo 'Saal Noo Mobarak!';

} elseif ($taf < 0) {

    $taf = abs($taf);

    echo str_repeat('R', $taf);

} elseif ($taf > 0) {

    $taf = abs($taf);

    echo str_repeat('L', $taf);

}