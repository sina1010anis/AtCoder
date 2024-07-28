<?php
[$n, $m] = explode(' ', readline());
$store = array_fill(0, 11, 0);
for ($i = 1; $i <= $n; $i++) {
    $store[$i] = readline();
}
$data = array_fill(0, 10001, array_fill(0, 11, 0));
$none = 1000000000;
for ($i = 1; $i <= $m; $i++) {
    $data[$i][0] = $noen;
}
for ($j = 1; $j <= $n; $j++) {
    for ($i = 0; $i <= $m; $i++) {
        $data[$i][$j] = $none;
        for ($k = 1; $k * $k <= $i; $k++) {
            if ($data[$i][$j] > $data[$i - $k * $k][$j - 1] + ($store[$j] - $k) * ($store[$j] - $k)) {
                $data[$i][$j] = $data[$i - $k * $k][$j - 1] + ($store[$j] - $k) * ($store[$j] - $k);
            }
        }
    }
}
echo ($data[$m][$n] == $none) ? "-1\n" : $data[$m][$n] . "\n";