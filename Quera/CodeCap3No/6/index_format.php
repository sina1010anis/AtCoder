<?php
$data = [];
$n = readline();
$index_save = [];
$miss_data = [];
for ($i = 0 ; $i < 3 ; $i++) {
    $data[] = explode(' ',readline());
}
for ($i = 1 ; $i <= 2 ; $i++) {    
    for ($j = 0 ; $j < $n ; $j++) {
        $temp = $data[$i][$j];
        for ($s = $j + 1 ; $s < $n ; $s++) {
            if ($temp == $data[$i][$s]) {
                $index_save[] = $s;
            }
        }
    }
}
$index_save = array_unique($index_save);
for ($j = 1 ; $j <= 2 ; $j++) {
    for ($i = 1 ; $i <= $n ; $i++) {
        if (!in_array($i, $data[$j])) {
            if (in_array($i, $data[($j == 1 ) ? 2 : 1])) {
                $miss_data[] = array_search($i, $data[($j == 1 ) ? 2 : 1]);
            }    
        }    
    }
}
$miss_data = array_unique($miss_data);
echo count($index_save) + count($miss_data) ."\n";