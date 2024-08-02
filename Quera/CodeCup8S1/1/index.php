<?php

// $counts = array_count_values($data);

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

       } 

    }

}

print_r($data_x);
print_r($data_y);
print_r($data_z);

