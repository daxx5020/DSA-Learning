<!-- https://leetcode.com/problems/how-many-numbers-are-smaller-than-the-current-number/description/ -->


<?php
// Given array
$nums = [8, 1, 2, 2, 3];

$temp = $nums;
sort($temp);

$d = [];

foreach($temp as $i => $num){
    if (!isset($d[$num])){
        $d[$num] = $i;
    }
}

$ret = [];
foreach($nums as $i){
    $ret[] = $d[$i];
}

print_r($ret);

?>