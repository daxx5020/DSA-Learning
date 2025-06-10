<?php
// Example:- 

// Input: nums = [1,2,3,1]
// Output:- True


$nums = [1,2,3,1];
$n = count($nums);

// Brute forcce approach

// for ($i = 0; $i < $n; $i++){
//     for ($j = $i + 1; $j < $n; $j++){
//         // print_r([$i , $j]);
//         // print_r([$nums[$i] , $nums[$j]]);
//         if ($nums[$i] == $nums[$j]){
//             echo "true";
//         }
//     }
//     echo "false";
// }


$unique = count(array_unique($nums));

if ($n == $unique){
    echo false;
}
else{
    return true;
}

?>