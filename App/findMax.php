<?php

namespace App;

class findMax {

    function findMax($x, $y, $n) {
        $t = 0;
    
        for ($k=0; $k < $n; $k++) { 
            if($k % $x == $y) $t = max($t, $k);
        }
    
        return ($t >= 0 && $t <= $n)? $t : -1;
    }

}