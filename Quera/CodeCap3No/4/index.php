<?php

$n = readline();

function getPermutations($number) {

    $digits = str_split($number);

    $result = [];

    function permute($digits, $index, &$result) {

        if ($index == count($digits)) {

            $result[] = implode('', $digits);

            return;

        }

        for ($i = $index; $i < count($digits); $i++) {

            swap($digits, $index, $i);

            permute($digits, $index + 1, $result);

            swap($digits, $index, $i);

        }

    }

    function swap(&$array, $i, $j) {

        $temp = $array[$i];

        $array[$i] = $array[$j];

        $array[$j] = $temp;

    }

    permute($digits, 0, $result);

    return $result;

}

$permutations = getPermutations($n);

sort($permutations);

$permutations = array_values(array_unique($permutations));

foreach ($permutations as $i) {

    if ($i > $n) {

        echo $i;

        exit;

    }

}

echo '0';




