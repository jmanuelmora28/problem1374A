<?php

function findMax($x, $y, $n) {
    $t = 0;

    for ($k=0; $k < $n; $k++) { 
        if($k % $x == $y) $t = max($t, $k);
    }

    return ($t >= 0 && $t <= $n)? $t : -1;
}

$x = 2;
$y = 0;
$n = 999999999;

print_r(findMax($x, $y, $n));
