<?php


function mergeSort(&$arr, $low, $high){

    if ($low >= $high) return;
    $mid = intval(($low + $high) / 2);

    mergeSort($arr,$low, $mid);
    mergeSort($arr,$mid + 1, $high);

    merge($arr,$low,$mid,$high);
}

function merge(&$arr,$low,$mid,$high){
    $temp = [];
    $left = $low;
    $right = $mid + 1;
    
    while($left <= $mid && $right <= $high){
        if ($arr[$left] <= $arr[$right]){
            array_push($temp, $arr[$left]);
            $left++;
        }
        else{
            array_push($temp, $arr[$right]);
            $right++;
        }
    }

    while($left <= $mid){
        array_push($temp, $arr[$left]);
        $left++;
    }

    while($right <= $high){
        array_push($temp, $arr[$right]);
        $right++;
    }

    for ($i = 0; $i < count($temp); $i++) {
        $arr[$low + $i] = $temp[$i];
    }
}

$arr = [13,46,24,52,20,9];
$n = count($arr);
mergeSort($arr,0,$n-1);
print_r($arr);