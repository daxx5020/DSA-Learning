<?php

// Multiple recurssion calls

function fibonacciNumber($n){
    if ($n <= 1){
        return $n;
    }

    $last = fibonacciNumber($n - 1);
    $secondLast = fibonacciNumber($n - 2);

    return $last + $secondLast;
}

print_r(fibonacciNumber(10));