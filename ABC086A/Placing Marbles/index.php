<?php

$handle = fopen("user.txt", "r");

fscanf($handle, "%s", $a);

$output = 0;

for ($i = 0 ; $i < strlen($a) ; $i++) {

    if ($a[$i] == 1) {

        $output++;

    }

}

echo $output;
