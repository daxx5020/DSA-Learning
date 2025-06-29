<?php


function buyAndSellStock($arr){
    $max = $arr[0];
    $maxProfit = 0;
    $n = count($arr);

    for ($i = 0; $i < $n; $i++){
        $cost = $max - $arr[$i];
        $maxProfit = max($maxProfit, $cost);
        $max = max($max,$arr[$i]);
    }
    return $maxProfit;
}

$arr = [9, 7, 3, 6, 2];
print_r(buyAndSellStock($arr));