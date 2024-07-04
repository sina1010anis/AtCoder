<?php

$handle = fopen("user.txt", "r");

fscanf($handle, "%d %d", $n, $y);

// ---------------------------- My Error WE

// $output = [0, 0, 0];

// $money = ['10000' => 10000, '5000' => 5000, '1000' => 1000];

// for ($i = 1 ; $i <= $n ; $i++ ) {

//     if ($y > $money['10000']) {

//         $y -= $money['10000'];

//         $output[0] += 1;

//     } if ($y > $money['5000'] and $y < $money['10000']) {

//         $y -= $money['5000'];

//         $output[1] += 1;

//     } if ($y >= $money['1000']) {

//         $y -= $money['1000'];

//         $output[2] += 1;

//     }

//     if ($i == $n) {

//         if ($y != 0) {

//             $output = [-1, -1, -1];

//         }

//     }

// }

// printf("%d %d %d", $output[0], $output[1], $output[2]) . "\n";

// ------------------------------- You AC

for ($i = 0; $i <= $n; $i++) {

    for ($j = 0; $i + $j <= $n; $j++) {
        
        $k = $n - $i - $j;

        echo $k;

        echo $i .'-'. $j .'-'. $k."\n";

        if (10000 * $i + 5000 * $j + 1000 * $k === $y) {

            printf("%d %d %d", $i, $j, $k,) . "\n"; exit;

        }

    }

}

printf("%d %d %d", -1, -1, -1) . "\n";

// ------------------------------- My Eror TLE

// for ($i = 0 ; $i <= $n ; $i++) {

//     for ($j = 0 ; $j <= $n ; $j++) {

//         for ($s = 0 ; $s <= $n ; $s++) {

//             $monye = ($i + $j + $s == $n) ? (($i * 10000) + ($j * 5000) + ($s * 1000)) : null;

//             if ($monye != null and $monye == $y) {

//                 echo $i . ' ' . $j . ' ' . $s."\n";
//                 exit;

//             }

//         }

//     }

// }

// echo '-1' . ' ' . '-1' . ' ' . '-1';