<?php


function selectionSort($arr){
    $n = count($arr);

    for ($i = 0; $i <= $n - 2; $i++){
        $mini = $i;
        for ($j = $i; $j <= $n-1; $j++){
            if ($arr[$j] < $arr[$mini]){
                $mini = $j;
            }
        }
        
        $temp = $arr[$i];
        $arr[$i] = $arr[$mini];
        $arr[$mini] = $temp;
    }

    return $arr;
}


$arr = [13,46,24,52,20,9];
print_r(selectionSort($arr));