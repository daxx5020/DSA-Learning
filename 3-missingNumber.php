<?php

// function missingNumber($nums) {
//     sort($nums);
//     foreach($nums as $index => $value){
//         if ($index != $value){
//             return $value - 1;
//         }

//         if ($value == (count($nums) - 1)){
//             return $value + 1;
//         }
//     }
// }

function missingNumber($nums) {
    $n = count($nums);
    
    // sum of all numbers from 0 to n
    $expectedSum = array_sum(range(0, $n)); 
    
    // sum of all given numbers
    $actualSum = array_sum($nums);
    
    // the missing number
    return $expectedSum - $actualSum;
}


$nums = [3,0,1];
$answer = missingNumber($nums);
print_r($answer);
?>