<?php


function mergeSort($arr, $low, $high){
    $n = count($arr);
    $mid = (($low + $high) / 2);

    mergeSort($arr,$low, $mid);
    mergeSort($arr,$mid + 1, $high);

    merge($arr,$low,$mid,$high);
}

function merge($arr,$low,$mid,$high){

}

$arr = [13,46,24,52,20,9];
print_r(mergeSort($arr));   