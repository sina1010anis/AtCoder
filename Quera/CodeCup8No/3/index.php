<?php

$t = readline();

$data = [];

for ($i = 0 ; $i < $t*2 ; $i++) {

    $data[$i] = readline();

}

for ($j = 0 ; $j < count($data) ; $j++) {

    $n = ($data[$j]);

    $x = ($data[$j+1]);

    echo floor($n * $x)."\n";

    $j++;

}


