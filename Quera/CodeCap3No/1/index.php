<?php

[$x1, $x2, $x3] = explode(' ', readline());

if ($x1 <= 0 || $x2 <= 0 || $x3 <= 0) {

    echo 'NO';

} else {

    if ($x1 + $x2 + $x3 == 180) {

        echo 'YES';

    } else {

        echo 'NO';

    }

}