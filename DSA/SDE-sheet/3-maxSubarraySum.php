<?php


// Bruteforce solution

// function maxSubarraySum($arr){
//     $n = count($arr);
//     $maxi = 0;

//     for ($i = 0; $i < $n; $i++){
//         for ($j = $i; $j < $n; $j++){
//             $sum = 0;
//             for ($k = $i; $k <= $j; $k++){
//                 $sum += $arr[$k];
//                 $maxi = max($sum,$maxi);
//             }
//         }
//     }
//     return $maxi;
// }


// Better solution

// function maxSubarraySum($arr){
//     $n = count($arr);
//     $maxi = 0;

//     for ($i = 0; $i < $n; $i++){
//         $sum = 0;
//         for ($j = $i; $j < $n; $j++){
//             $sum += $arr[$j];
//             $maxi = max($sum,$maxi);
//         }
//     }
//     return $maxi;
// }

// Optimal Approch

function maxSubarraySum($arr){
    $n = count($arr);
    $maxi = 0;
    $sum = 0;

    for ($i = 0; $i < $n; $i++){
        $sum += $arr[$i];

        if ($sum > $maxi){
            $maxi = $sum;
        }

        if ($sum < 0){
            $sum = 0;
        }
    }
    return $maxi;
}

$arr=[1,2,3,4,5,6];
print_r(maxSubarraySum($arr));