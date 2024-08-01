<?php

$n = readline();

$data = explode(' ', readline());

for ($i = 2; $i <= $n; $i++) {

    $j = floor($i / 2);

    $temp = $data[$i - 1];
    
    if ($data[$j - 1] > $data[$i - 1]) {

        $data[$i - 1] = $data[$j - 1];

        $data[$j - 1] = $temp;

    }

}

for ($i = 0; $i < count($data) ; $i++) {

    echo ($i == count($data)-1) ? $data[$i]."\n" : $data[$i]." ";

}

