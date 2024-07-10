<?php

$input_1 = explode(' ', readline());

$input_2 = explode(' ', readline());

$output = 0;

for ($i = 0 ; $i < count($input_1) ; $i++) {

    if ($input_1[$i] == 1 && $input_1[$i] == $input_2[$i]) {

        $output++;

    }

}

echo $output."\n";

