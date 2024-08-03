<?php

$data = [];

$data_x = [];

$data_y = [];

$data_z = [];

for ($i = 0 ; $i < 7 ; $i++) {

    $data[] = explode(' ', readline());

    if ($i == 6) {

       for ($j = 0 ; $j < 7 ; $j++) {

            $data_x[] = $data[$j][0];

            $data_y[] = $data[$j][1];

            $data_z[] = $data[$j][2];

            if ($i == 6) {

                $counts_x = array_count_values($data_x);

                $counts_y = array_count_values($data_y);
                
                $counts_z = array_count_values($data_z);

            }

       } 

    }

}

$key_x = array_search(3, $counts_x) ;
$key_y = array_search(3, $counts_y) ;
$key_z = array_search(3, $counts_z) ;

echo $key_x. ' '. $key_y .' '. $key_z;
