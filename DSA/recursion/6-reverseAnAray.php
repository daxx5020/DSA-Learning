<?php

// function reverseArray($arr, $l, $r){
//     if ($l >= $r){
//         return $arr;
//     }

//     $temp = null;
//     $temp = $arr[$l];
//     $arr[$l] = $arr[$r];
//     $arr[$r] = $temp;

//     return reverseArray($arr, $l+1, $r-1);
// }


// pointer base solution

function reverseArray($arr,$i){
    $n = count($arr);
   
    if ($i >= $n / 2){
        return $arr;
    }

    $temp = null;
    $temp = $arr[$i];
    $arr[$i] = $arr[$n - $i - 1];
    $arr[$n - $i - 1] = $temp;

    return reverseArray($arr,$i+1);
}


$arr = [1,2,3,4,5];
print_r(reverseArray($arr,0));