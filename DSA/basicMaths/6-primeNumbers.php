<?php

// function primeNumber($n){
//     $cnt = 0;
//     for ($i = 1; $i <= $n; $i++){
//         if ($n % $i == 0){
//             $cnt++;
//         }
//     }
//     if ($cnt == 2){
//         return "True";
//     }
//     else{
//         return "False";
//     }
// }

function primeNumber($n){
    $cnt = 0;
    for ($i = 1; $i * $i <= $n; $i++){
        if ($n % $i == 0){
            $cnt++;
            if(($n / $i) != $i){
                $cnt++;
            }
        }
    }
    if ($cnt == 2){
        return "True";
    }
    else{
        return "False";
    }
}

$n = 8;
print_r(primeNumber($n));