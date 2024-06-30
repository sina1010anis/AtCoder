<?php

fscanf(STDIN, "%d", $n);

$mochi_store = [];

$temp = 0;

$mochi_space = [];

for ($i = 0 ; $i < $n ; $i++) {

    fscanf(STDIN, "%d", $a);

    $mochi_store[] = $a;

    $a = 0;
}

for ($i = 0 ; $i < count($mochi_store) ; $i++) {

    for ($j = 0 ; $j < count($mochi_store) ; $j++) {

        if ($i != $j and $mochi_store[$i] != $mochi_store[$j]) {

            $mochi_space[$mochi_store[$i]] = 0;

        }

    }

}

echo (count($mochi_space) == 0) ? 1 : count($mochi_space);
