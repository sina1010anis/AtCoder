<?php
$data = [];
$cut_n1 = [];
$cut_n2 = [];
$n = readline();
for ($i = 0 ; $i < 3 ; $i++) {
    $data[] = explode(' ',readline());
}
$n0 = $data[0];
$n1 = $data[1];
$n2 = $data[2];
$key_delete = array_values(array_diff($n0, array_intersect(array_intersect($n0,$n1), $n2)));
for ($i = 0 ; $i < count($key_delete) ; $i++) {
	if (in_array($key_delete[$i], $n0)){
			$key_store = array_search($key_delete[$i], $n0);
			$cut_n1[] = $n1[$key_store];
			$cut_n2[] = $n2[$key_store];
			unset($n0[$key_store]);
			unset($n1[$key_store]);
			unset($n2[$key_store]);
		}
			if (in_array($key_delete[$i], $n1)){
			$key_store = array_search($key_delete[$i], $n1);
			unset($n0[$key_store]);
			unset($n1[$key_store]);
			unset($n2[$key_store]);
		}
			if (in_array($key_delete[$i], $n2)){
			$key_store = array_search($key_delete[$i], $n2);
			unset($n0[$key_store]);
			unset($n1[$key_store]);
			unset($n2[$key_store]);
		}
		$sh = array_values(array_intersect($cut_n1, $cut_n2));
		if (!empty($sh)){
			for ($j = 0 ; $j <count($sh); $j++){
				if (in_array($sh[$j], $n0)){
						$key_store_2 = array_search($sh[$j], $n0);
						$cut_n1[] = $n1[$key_store_2];
			$cut_n2[] = $n2[$key_store_2];
						unset($n0[$key_store_2]);
						unset($n1[$key_store_2]);
						unset($n2[$key_store_2]);
					}
		}
		}
}
	echo count($data[0]) - count($n0);
