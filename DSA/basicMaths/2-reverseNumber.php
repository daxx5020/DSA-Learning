<?php

function reverseNumber($n){
    $revNum = 0;
    while($n > 0){
        $ld = $n % 10;
        $revNum = ($revNum * 10) + $ld;
        $n = intval($n / 10);
    }
    return $revNum;
}

$n = 123;
print_r(reverseNumber($n));