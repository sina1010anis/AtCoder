<?php

$handle = fopen("user.txt", "r");

fscanf($handle, "%d", $n);

$numbers = explode(" ", trim(fgets($handle)));

rsort($numbers);

$A_cards = [];

$B_cards = [];

for ($i = 0 ; $i < count($numbers) ; $i++) {

    if ($i % 2 == 0) {

        $A_cards[] = $numbers[$i];

    } else {

        $B_cards[] = $numbers[$i];

    }

}

$A = array_sum($A_cards);

$B = array_sum($B_cards);

$output = $A - $B;

echo $output.PHP_EOL;