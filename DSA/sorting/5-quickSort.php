<?php

function quickSort(&$arr, $low, $high){
    if ($low < $high){
        $partionIndex = findPartion($arr,$low,$high);
        quickSort($arr,$low,$partionIndex-1);
        quickSort($arr,$partionIndex+1, $high);
    }
}

function findPartion(&$arr,$low,$high){
    $pivot = $arr[$low];
    $i = $low;
    $j = $high;

    while($i < $j){
        while($arr[$i] <= $pivot && $i <= $high-1){
            $i++;
        }

        while($arr[$j] > $pivot && $j >= $low + 1 ){
            $j--;
        }

        if ($i < $j){
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
    $temp = $arr[$low];
    $arr[$low] = $arr[$j];
    $arr[$j] = $temp;
    return $j;
}

$arr = [13,46,24,52,20,9];
$n = count($arr);
quickSort($arr,0,$n-1);
print_r($arr);