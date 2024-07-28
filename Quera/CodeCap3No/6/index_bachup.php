<?php

// -----------------------------------------------------------------------------Backup file 1 (Start)------------------------------------------------

$data = [];
$n = readline(); // Quera
// $n = 100000; // Local
$counter = 0;
$end = true;
for ($i = 0 ; $i < 3 ; $i++) {
    $data[] = explode(' ',readline()); // Quera

    // $data[] = array_fill(0, $n, rand(0, $n)); //Local
}

$n0 = $data[0];

$n1 = $data[1];

$n2 = $data[2];

while ($end) {

    $te_number = $n0[$counter];

    if (in_array($te_number, $n1) && in_array($te_number, $n2)) {

        $counter++;

    } elseif (in_array($te_number, $n1) && !in_array($te_number, $n2)) {

        unset($n0[$counter]);

        unset($n1[$counter]);

        unset($n2[$counter]);

        $s = array_search($te_number, $n1);

        if ($s != $counter) {

            unset($n0[$s]);

            unset($n1[$s]);
    
            unset($n2[$s]);

        }

        $n0 = array_values($n0);

        $n1 = array_values($n1);

        $n2 = array_values($n2);

        $counter = 0;        

    } elseif (!in_array($te_number, $n1) && in_array($te_number, $n2)) {

        unset($n0[$counter]);

        unset($n1[$counter]);

        unset($n2[$counter]);

        $s = array_search($te_number, $n2);

        if ($s != $counter) {

            unset($n0[$s]);

            unset($n1[$s]);
    
            unset($n2[$s]);

        }

        $n0 = array_values($n0);

        $n1 = array_values($n1);

        $n2 = array_values($n2);

        $counter = 0;        

    } elseif (!in_array($te_number, $n1) && !in_array($te_number, $n2)) {

        unset($n0[$counter]);

        unset($n1[$counter]);

        unset($n2[$counter]);

        $n0 = array_values($n0);

        $n1 = array_values($n1);

        $n2 = array_values($n2);

        $counter = 0;        

    }

    $end = ($counter == count($n0)) ? false : true;

}

echo count($data[0]) - count($n0);
// -----------------------------------------------------------------------------Backup file 1 (End)------------------------------------------------

// -----------------------------------------------------------------------------Backup file 2 (Start)------------------------------------------------


$data = [];

$n = readline();

$keys = [];

$try = false;

for ($i = 0 ; $i < 3 ; $i++) {

    $data[] = explode(' ',readline());

}

$n0 = $data[0];

$n1 = $data[1];

$n2 = $data[2];

for ($i = 0; $i < $n ; $i++) {

    if ($i == count($n0)) {

        break;

    }
    if (!in_array($n0[$i], $n1) or !in_array($n0[$i], $n2)) {

        unset($n0[$i]);

        unset($n1[$i]);

        unset($n2[$i]);

        $n0 = array_values($n0);

        $n1 = array_values($n1);

        $n2 = array_values($n2);

        $i = 0;

    }

}

echo count($data[0]) - count($n0);

// -----------------------------------------------------------------------------Backup file 2 (End)------------------------------------------------

// -----------------------------------------------------------------------------Backup file 3 (Start)------------------------------------------------

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

echo count($index_save) + count($miss_data);

// -----------------------------------------------------------------------------Backup file 4 (End)------------------------------------------------

// -----------------------------------------------------------------------------Backup file 5 (Start)------------------------------------------------

$data = [];

$n = readline();

for ($i = 0 ; $i < 3 ; $i++) {

    $data[] = explode(' ',readline());

}

$n0 = $data[0];

$n1 = $data[1];

$n2 = $data[2];

$cut = 0;

$status = true;

while ($status) {

    $n0_sort = $n0;

    $n1_sort = $n1;

    $n2_sort = $n2;

    sort($n0_sort);

    sort($n1_sort);

    sort($n2_sort);

    if ($n0_sort != $n1_sort or $n0_sort != $n2_sort or !empty($n0)) {
	
        $int_n0_n1 = array_intersect($n0, $n1);

        $int_n0_n2 = array_intersect($n0, $n2);

        $int_n0_n1_n2 = array_intersect($int_n0_n1, $int_n0_n2);

        $diff_n0_all_int = array_values(array_diff($n0, $int_n0_n1_n2));


        if (!empty($diff_n0_all_int)) {


            for ($i = 0 ; $i < count($diff_n0_all_int) ; $i++) {

                if (in_array($diff_n0_all_int[$i], $n0)) {

                    $key_0 = array_search($diff_n0_all_int[$i], $n0);
        
                    unset($n0[$key_0]);
        
                    unset($n1[$key_0]);
        
                    unset($n2[$key_0]);
        
                    $cut++;
        
                    if (in_array($diff_n0_all_int[$i], $n1)) {
        
                        $key_1 = array_search($diff_n0_all_int[$i], $n1);
        
                        unset($n0[$key_1]);
            
                        unset($n1[$key_1]);
            
                        unset($n2[$key_1]);
            
                        $cut++;
        
                    }
        
                    if (in_array($diff_n0_all_int[$i], $n2)) {
        
                        $key_2 = array_search($diff_n0_all_int[$i], $n2);
        
                        unset($n0[$key_2]);
            
                        unset($n1[$key_2]);
            
                        unset($n2[$key_2]);
            
                        $cut++;
        
                    }
        
                }

            }



        } else {

            $status = false;

        }

        
        
	} else {

        $status = false;

    }

}


echo $cut."\n";

// -----------------------------------------------------------------------------Backup file 5 (End)------------------------------------------------
