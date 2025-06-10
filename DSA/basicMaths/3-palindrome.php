<?php

function palindrome($n){
    $revNum = 0;
    $dup = $n;
    while($n > 0){
        $ld = $n % 10;
        $revNum = ($revNum * 10) + $ld;
        $n = intval($n / 10);
    }

    if($revNum == $dup){
        return "True";
    }
    else{
        return "False";
    }
    return $revNum;
}

$n = 121;
print_r(palindrome($n));