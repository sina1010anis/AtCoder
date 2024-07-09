<?php

$input = readline();

$input = explode(" ", $input);

$n = $input[0];

$x = $input[1];

$y = $input[2];

$output_x = 0;

$output_y = 0; 

$b = 0;

while ($b * $y <= $n) {

    if (($n - $b * $y) % $x == 0) {

        echo round((($n - $b * $y ) / $x )).' '.$b;
    
        break;
        
    } else {
    
      print('-1');

      exit;

    }

    $b += 1;


}




