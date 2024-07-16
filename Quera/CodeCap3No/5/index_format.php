<?php
$data = [];
$price = 0;
$s = true;
$counter = 0;
[$n, $m] = explode(' ', readline());
if ($n > $m) {
    echo '-1';
    exit;
}
$div = round($m / $n);
for ($i = 0 ; $i < $n ; $i++) {
    $data[] = readline();
    $output_temp[] = $div;
}
sort($data);
while ($s) {
    $sum = 0;
    for ($i = 0 ; $i < count($output_temp) ; $i++) {
        $sum += $output_temp[$i] * $output_temp[$i];
    }
    if ($sum > $m) {
        if ($output_temp[$counter] > 1) {
            $output_temp[$counter] -= 1;
        }
        $try = false;
        $counter++;
    } elseif ($sum < $m) {
        echo '-1';
        exit;
    } elseif ($sum == $m) {
        $s = false;
    }
    if ($counter == $n) {
        $counter = 0;
    }
}
for ($i = 0 ; $i < $n ; $i++) {    
    $price += pow(abs($output_temp[$i] - $data[$i]), 2);    
}
echo $price;