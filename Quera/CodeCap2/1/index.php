<?php

$n = readline();

$n = (int)$n;

$s = 'W';

for ($i = 0; $i < $n; $i++) {

    $s .= 'o';

}

$s .= 'w!';

echo $s."\n";
