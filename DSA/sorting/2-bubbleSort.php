<?php

// Bubble sort

function bubbleSort($arr){
    $n = count($arr);
    for ($i = $n-1; $i >= 0; $i--){
        $didSwap = 0;
        for ($j = 0; $j <= $i-1; $j++){
            if ($arr[$j] > $arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
                $didSwap = 1;
            }
        }
        if ($didSwap == 0){
            break;
        }
    }
    return $arr;
}

$arr = [13,46,24,52,20,9];
print_r(bubbleSort($arr));