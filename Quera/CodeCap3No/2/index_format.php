<?php

$data = [];

$match = ['MOLANA', 'HAFEZ'];

$output = [];

$output_temp = '';

for ($j = 0 ; $j < 5 ; $j++) {

    $data[] = readline();

}

for ($i = 0 ; $i < count($data) ; $i++) {

    for ($s = 0 ; $s <= strlen($data[$i])-strlen($match[0]) ; $s++) {

        if (substr($data[$i], $s, strlen($match[0])) == $match[0]) {

            $output[] = $i+1;

        }

    } 

}

for ($i = 0 ; $i < count($data) ; $i++) {

    for ($s = 0 ; $s <= strlen($data[$i])-strlen($match[1]) ; $s++) {

        if (substr($data[$i], $s, strlen($match[1])) == $match[1]) {

            $output[] = $i+1;

        }

    } 

}

if (count($output) == 0) {

    echo 'NOT FOUND!';

} else {

    $output = array_unique($output);

    for ($a = 0 ; $a < count($output) ; $a++) {
    
        $output_temp .= $output[$a].' ';
    
    }
    
    echo substr($output_temp, 0, -1);

}


