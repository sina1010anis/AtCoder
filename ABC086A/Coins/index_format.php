<?php

// $handle = fopen("user.txt", "r");

fscanf(STDIN, "%d", $a);

fscanf(STDIN, "%d", $b);

fscanf(STDIN, "%d", $c);

fscanf(STDIN, "%d", $x);

$coins = [];

$counter = 0;

$score = 0;

for ($i = 0 ; $i <= $a ; $i++) {

    for ($j = 0 ; $j <= $b ; $j++) {

        for ($s = 0 ; $s <= $c ; $s++) {
                
            // $coins[$counter] = [$i, $j, $s];

            $sum = (($i * 500) + ($j * 100) + ($s * 50));

            if ($sum == $x) {

                $score++;

            }

            // $counter++;

        }

    }

}

echo $score;