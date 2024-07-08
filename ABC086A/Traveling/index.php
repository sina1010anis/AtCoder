<?php

$handle = fopen("user.txt", "r");

fscanf($handle, "%d", $n);

$location = [[0, 0, 0]];

for ($i = 0 ; $i < $n ; $i++) {

    fscanf($handle, "%d %d %d", $t, $x, $y);

    $location[] = [$t, $x, $y];

}

for ($i = 0 ; $i < count($location) ; $i++) {

    echo "t:{$location[$i][0]} x:{$location[$i][1]} y:{$location[$i][2]}"."\n";

}