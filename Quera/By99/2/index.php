<?php

$n = readline();

$phone_numbers = [];



for ($i = 0 ; $i < $n ; $i++) {

    $phone_numbers[] = readline();

}

function hasTripleRepeat($str) {
    if (strlen($str) < 3) {
        return false; 
    }
    for ($i = 0; $i < strlen($str) - 2; $i++) {
        if ($str[$i] === $str[$i + 1] && $str[$i] === $str[$i + 2]) {
            if (is_numeric($str[$i])) { 
                return true;
            }
        }
    }
    return false;
}

for ($i = 0 ; $i < count($phone_numbers) ; $i++) {

    $int = ['0'=>0, '1'=>0, '2'=>0, '3'=>0, '4'=>0, '5'=>0, '6'=>0, '7'=>0, '8'=>0, '9'=>0];

    for ($j = 0 ; $j < strlen($phone_numbers[$i]) ; $j++) {

        $int[$phone_numbers[$i][$j]] += 1;

        if ($j == strlen($phone_numbers[$i])-1 and max($int) >= 4) {

            echo 'Ronde!'."\n";
            
        } elseif ($j == strlen($phone_numbers[$i])-1 and hasTripleRepeat($phone_numbers[$i])) {

            echo 'Ronde!'."\n";

        } elseif ($j == strlen($phone_numbers[$i])-1 and strrev(substr($phone_numbers[$i], 0, 4)) == substr($phone_numbers[$i], 4, 8)) {

            echo 'Ronde!'."\n";

        } elseif ($j == strlen($phone_numbers[$i])-1) {

            echo 'Rond Nist'."\n";


        }

    }

}


