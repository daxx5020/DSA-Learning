<?php

// function printDivisions($n){
//     for($i = 1; $i <= $n; $i++){
//         if ($n % $i == 0){
//             print_r($i . ', ');
//         }
//     }
// }

function printDivisions($n){
    $list = [];
    for($i = 1; $i <= sqrt($n); $i++){ // use i * i <= n in the place of sqrt function
        if ($n % $i == 0){
            array_push($list, $i);
            if(($n / $i) != $i){
                array_push($list, $n / $i);
            }
        }
    }

    sort($list);

    foreach ($list as $value){
        echo $value . "\n";
    }
}

$n = 36;
print_r(printDivisions($n));