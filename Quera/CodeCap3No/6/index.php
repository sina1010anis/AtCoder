<?php

$data = [];

$n = readline();

for ($i = 0 ; $i < 3 ; $i++) {

    $data[] = explode(' ',readline());

}

[$n0, $n1, $n2] = [$data[0], $data[1], $data[2]];

$cut = 0;

$status = true;

while ($status) {

    [$n0_sort, $n1_sort, $n2_sort] = [$n0, $n1, $n2];

    sort($n0_sort);

    sort($n1_sort);

    sort($n2_sort);

    if (empty($n0)) {

        echo $cut."\n";

        exit;

    }

    if ($n0_sort != $n1_sort or $n0_sort != $n2_sort) {
	
        $int_n0_n1 = array_values(array_diff($n0, array_intersect(array_intersect($n0, $n1), array_intersect($n0, $n2))));

        if (!empty($int_n0_n1)) {

            for ($i = 0 ; $i < count($int_n0_n1) ; $i++) {

                if (in_array($int_n0_n1[$i], $n0)) {
        
                    $key_0 = array_search($int_n0_n1[$i], $n0);

                    unset($n0[$key_0], $n1[$key_0], $n2[$key_0]);
        
                    $cut++;
        
                    if (in_array($int_n0_n1[$i], $n1)) {

                        $key_1 = array_search($int_n0_n1[$i], $n1);
        
                        unset($n0[$key_1], $n1[$key_1], $n2[$key_1]);
            
                        $cut++;
        
                    }
        
                    if (in_array($int_n0_n1[$i], $n2)) {

                        $key_2 = array_search($int_n0_n1[$i], $n2);
        
                        unset($n0[$key_2], $n1[$key_2], $n2[$key_2]);
            
                        $cut++;
        
                    }
        
                }

            }

        } else {

            echo $cut."\n";

            exit;

        }
        
	} else {

        echo $cut."\n";

        exit;

    }

}