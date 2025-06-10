<?php
   
function findAllMissingNumbers($nums){
    $n = count($nums);
    $numSet = array_flip($nums); // Keys become values => fast lookup
    $newArr = [];

    for ($i = 1; $i <= $n; $i++) {
        if (!isset($numSet[$i])) {
            $newArr[] = $i;
        }
    }

    return $newArr;

}

$nums = [4,3,2,7,8,2,3,1];
$answer = findAllMissingNumbers($nums);
print_r($answer);
?>