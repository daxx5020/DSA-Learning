<?php


// function mergeOverlappingIntervals(&$intervals){
//     $n = count($intervals);
    
//     usort($intervals, function($a,$b){
//         return $a[0] <=> $b[0];
//     });

//     $ans = [];

//     for ($i = 0; $i < $n; $i++){
//         $start = $intervals[$i][0];
//         $end = $intervals[$i][1];

//         if (!empty($ans) && $end <= $ans[count($ans) - 1][1]){
//             continue;
//         }

//         for ($j = $i + 1; $j < $n; $j++){
//             if ($intervals[$j][0] <= $end){
//                 $end = max($end, $intervals[$j][1]);
//             }
//             else{
//                 break;
//             }
//         }

//         $ans[] = [$start,$end];
//     }

//     return $ans;
// }

function mergeOverlappingIntervals(&$intervals){
    $n = count($intervals);
    
    usort($intervals, function($a,$b){
        return $a[0] <=> $b[0];
    });

    $ans = [];

    for ($i = 0; $i < $n; $i++){

        if (empty($ans) || $intervals[$i][0] > $ans[count($ans) - 1][1]){
            $ans[] = $intervals[$i];
        }
        else{
            $ans[count($ans) - 1][1] = max($ans[count($ans) - 1][1], $intervals[$i][1]);
        }
    }

    return $ans;
}

$intervals = [[1,3],[2,6],[8,10],[15,18]];
mergeOverlappingIntervals($intervals);
print_r($intervals);