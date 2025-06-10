<?php

function countNum($n) {
    $cnt = 0;
    while($n > 0) {
        $cnt++;
        $n = intval($n / 10); // use integer division
    }
    return $cnt;
}

$n = 594694;
print_r(countNum($n));