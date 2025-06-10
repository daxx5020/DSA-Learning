<?php
   
// function twoSum($nums, $target){
//     $n = count($nums);
//     for ($i = 0; $i <= $n; $i++){
//         for ($j = $i+1; $j <= $n; $j++){
//             if ($nums[$i] +$nums[$j] == $target){
//                 return [$i, $j];
//             }
//         }
//     }

// }

function twoSum($nums, $target){
    $map = [];
    $n = count($nums);
    for ($i = 0; $i < $n; $i++){
        $expectedNum = $target - $nums[$i];

        if (isset($map[$expectedNum])){
            return [$map[$expectedNum] , $i];
        }

        $map[$nums[$i]] = $i;
    }
}

$nums = [2,7,11,15];
$target = 9;
$answer = twoSum($nums, $target);
print_r($answer);
?>