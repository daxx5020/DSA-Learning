<?php


function insertionSort($arr){
    $n = count($arr);

    for ($i = 0; $i <= $n-1; $i++){
        $j = $i;

        while($j > 0 && $arr[$j-1] > $arr[$j]){
            $temp = $arr[$j];
            $arr[$j] = $arr[$j - 1];
            $arr[$j - 1] = $temp;

            $j--;
        }
    }
    return $arr;
}

$arr = [13,46,24,52,20,9];
print_r(insertionSort($arr));