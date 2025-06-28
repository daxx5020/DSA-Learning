<?php


// srot of arrays with 0's 1's and 2's.


function sortOfArray($arr){

    $n = count($arr);
    $low = 0;
    $mid = 0;
    $high = $n - 1;

    while ($mid <= $high){
        if ($arr[$mid] == 0){
            swapNum($arr[$low],$arr[$mid]);
            $low++;
            $mid++;
        }
        else if($arr[$mid] == 1){
            $mid++;
        }
        else{
            swapNum($arr[$mid], $arr[$high]);
            $high--;
        }
    }
    return $arr;
}

function swapNum(&$a,&$b){
    $temp = $a;
    $a = $b;
    $b = $temp;
}



$arr = [0,0,1,2,0,2,1,1,2,2,1,0];
print_r(sortOfArray($arr));