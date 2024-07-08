<?php

$d1 = readline();

$w1 = readline();

$d2 = readline();

$w2 = readline();

$d3 = readline();

$w3 = readline();

$Tw1 = explode(' ', $w1);

$Tw2 = explode(' ', $w2);

$Tw3 = explode(' ', $w3);

$temp = ['shanbe', '1shanbe', '2shanbe', '3shanbe', '4shanbe', '5shanbe', 'jome'];

$output = ['shanbe', '1shanbe', '2shanbe', '3shanbe', '4shanbe', '5shanbe', 'jome'];

$w = array_merge($Tw1, $Tw2, $Tw3);

for ($i = 0 ; $i < count($w) ; $i++) {

    for ($j = 0 ; $j < count($temp) ; $j++) {

        if ($w[$i] == $temp[$j]) {

            unset($output[$j]);

            break;

        }

    }

}

echo count($output)."\n";
