<?php

$handle = fopen("user.txt", "r");

fscanf($handle, "%d %d", $a, $b);

echo (($a * $b) % 2 == 0) ? 'Even' : 'Odd';