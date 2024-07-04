<?php

$handle = fopen("user.txt", "r");

fscanf($handle, "%s", $s);

$t =['dream', 'dreamer', 'erase', 'eraser'];

$output = 'NO';

$output_temp = [];

for ($i = 0; $i <= strlen($s); $i++) {

    for ($j = 0; $j < count($t); $j++) {

        $cat = substr($s, $i, strlen($t[$j]));

        if ($cat == $t[$j]) {

            $output_temp[] = $cat;

            $i += strlen($t[$j]);

        }

        echo $cat."\n";

    }
}
