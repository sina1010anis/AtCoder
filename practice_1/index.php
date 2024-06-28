<?php

$handle = fopen("user.txt", "r");

fscanf($handle, "%d", $a);

fscanf($handle, "%d %d", $b, $c);

fscanf($handle, "%s", $s);

echo ($a+$b+$c)." ".$s."\n";