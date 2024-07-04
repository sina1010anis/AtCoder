<?php

fscanf(STDIN, "%d %d", $n, $y);

$output = [0, 0, 0];

$money = ['10000' => 10000, '5000' => 5000, '1000' => 1000];

for ($i = 1 ; $i <= $n ; $i++ ) {

    if ($y >= $money['10000']) {

        $y -= $money['10000'];

        $output[0] += 1;

    } elseif ($y >= $money['5000'] and $y < $money['10000']) {

        $y -= $money['5000'];

        $output[1] += 1;

    } elseif ($y >= $money['1000']) {

        $y -= $money['1000'];

        $output[2] += 1;

    }

    if ($i == $n) {

        if ($y != 0) {

            $output = [-1, -1, -1];

        }

    }

}

