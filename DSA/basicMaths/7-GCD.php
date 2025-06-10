<?php

// function GCD($n1, $n2){
//     $gcd = 1;
//     for ($i = 1; $i < min($n1,$n2); $i++){
//         if ($n1 % $i == 0 && $n2 % $i == 0){
//             $gcd = $i;
//         }
//     }
//     return $gcd;
// }

// function GCD($n1, $n2){
//     for ($i = min($n1,$n2); $i >= 1; $i--){
//         if ($n1 % $i == 0 && $n2 % $i == 0){
//             echo $i;
//             break;
//         }
//     }
// }

function GCD($n1, $n2){
    while($n1 > 0 && $n2 > 0){
        if ($n1 > $n2) $n = $n % $n2;
        else $n2 = $n2 % $n1;
    }
    if ($n1 == 0) return $n2;
    return $n1;
}

$n1 = 20;
$n2 = 40;
print_r(GCD($n1,$n2));