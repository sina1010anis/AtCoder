<?php

[$n, $m] = explode(' ', readline());

$output = [];

if ($n > $m and $m == 1) {

    for ($i = 0 ; $i < $n ; $i++) {

        $output[] = 'A';

    }

} else {

    for ($j = 0 ; $j < $n ; $j++) {

        if ($j == 0) {

            $output[] = str_repeat('A', $m);

        } elseif ($j == $n-1) {

            $output[] = str_repeat('B', $m);

        } else {

            $output[] = 'A' . str_repeat('.', $m-2) . 'B';

        }
        

    }

}


foreach ($output as $val) {

    echo $val."\n";

} 

