<?php

function armstrong($n) {
    $numDigits = strlen((string)$n);
    $sum = 0;
    $dup = $n;

    while ($n > 0) {
        $ld = $n % 10;
        $sum += pow($ld, $numDigits);  // Raise to the power of number of digits
        $n = intval($n / 10);
    }

    if ($sum == $dup) {
        return "True";
    } else {
        return "False";
    }
}

$n = 1634;
print_r(armstrong($n));