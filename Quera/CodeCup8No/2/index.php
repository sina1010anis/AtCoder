<?php
return phpinfo();


[$n, $v] = explode(' ', readline());

$data = [];

$sum = 0;

$dir = round($v / $n);

for ($i = 0 ; $i < $n ; $i++) {

    [$data[$i][0], $data[$i][1]] = explode(' ', readline());

}

@usort($data, function ($a, $b) {

    return $a[0] < $b[0];

});

for ($k = 0 ; $k < $n ; $k++) {

    if ($data[$k][1] >= $dir) {

        $percent = ($data[$k][0] / )

    }

}

echo number_format($sum, 1)."\n";