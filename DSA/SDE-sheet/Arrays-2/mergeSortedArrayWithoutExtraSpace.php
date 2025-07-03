<?php


//Merge Sorted Arrays Without Extra Space


function mergeSortedArrayWithoutExtraSpace(&$nums1, $m, $nums2, $n){
    $arr3 = [];
    $right = 0;
    $left = 0;
    $index = 0;

    while($left < $m && $right < $n){
        if($nums1[$left] <= $nums2[$right]){
            $arr3[$index] = $nums1[$left];
            $left++; $index++;
        }
        else{
            $arr3[$index] = $nums2[$right];
            $right++; $index++;
        }
    }

    while($left < $m){
        $arr3[$index++] = $nums1[$left++];
    }

    while($right < $n){
        $arr3[$index++] = $nums2[$right++];
    }

    for($i = 0; $i < $m + $n; $i++){
        if ($i < $m) {
            $nums1[$i] = $arr3[$i];
        } else {
            $nums2[$i - $m] = $arr3[$i];
        }
    }

    return [$nums1,$nums2];
}


$arr1 = [1, 4, 8, 10];
$arr2 = [2, 3, 9];
$n = 4;
$m = 3;
print_r(mergeSortedArrayWithoutExtraSpace($arr1, $n, $arr2, $m));