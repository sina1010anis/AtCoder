<?php
fscanf(STDIN, "%s", $s);
$t =['dream', 'dreamer', 'erase', 'eraser'];
$s = strrev((string) $s);
while (strlen($s) > 0) {
    if (strrev($t[0]) == substr($s, 0, strlen($t[0]))) {
        $s = substr($s, strlen($t[0]));
    } elseif (strrev($t[1]) == substr($s, 0, strlen($t[1]))) {
        $s = substr($s, strlen($t[1]));
    } elseif (strrev($t[2]) == substr($s, 0, strlen($t[2]))) {
        $s = substr($s, strlen($t[2]));
    } elseif (strrev($t[3]) == substr($s, 0, strlen($t[3]))) {
        $s = substr($s, strlen($t[3]));
    } else {
        echo 'NO'."\n";
        exit;
    }
}
echo "YES"."\n";