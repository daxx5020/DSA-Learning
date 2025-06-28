<?php


function buyAndSellStock($arr){
    $mini = $arr[0];
    $maxProfit = 0;
    $n = count($arr);

    for ($i = 0; $i < $n; $i++){
        $cost = $arr[$i] - $mini;
        $maxProfit = max($maxProfit, $cost);
        $mini = min($mini,$arr[$i]);
    }
    return $maxProfit;
}

$arr = [1,2,3,4,5,10];
print_r(buyAndSellStock($arr));