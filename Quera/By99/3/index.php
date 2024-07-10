<?php

$n = readline();

[$n, $x, $y] = explode(' ', $n);

$mobiles = readline();

$mobiles = explode(' ', $mobiles);

$output = [];

sort($mobiles);

for ($i = 0; $i < $n-1; $i++) {

    if ($mobiles[$i] >= $x) {

        $mobiles[$i] -= $x;

        $mobiles[$i+1] += $y;

    }

}


for ($i = 0; $i < $n; $i++) {

    if ($mobiles[$i] >= 100) {
        
        $output[] = $mobiles[$i];
        
    }
    
}

// return print_r($output);

echo ($n-1 == count($output)) ? 'YES' : 'NO';