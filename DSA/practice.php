<?php 

function swapTwoNum(&$a,&$b){
    $temp = $a;
    $a = $b;
    $b = $temp;
}

// Selection sort

// function selectionSort($arr){
//     $n = count($arr);

//     for ($i = 0; $i < $n - 1; $i++){
//         $mini = $i;
//         for ($j = $i + 1; $j < $n; $j++){
//             if ($arr[$j] < $arr[$mini]){
//                 $mini = $j;
//             }
//         }
//         swapTwoNum($arr[$mini],$arr[$i]);
//     }
//     return $arr;
// }


// $arr = [1,6,3,6,8,3,6,4,7,3];
// print_r(selectionSort($arr));


// Bubble sort

// function bubbleSort($arr){
//     $n = count($arr);

//     for ($i=$n - 1; $i >= 0; $i--){
//         $swap = 0;
//         for ($j = 0; $j < $i; $j++){
//             if ($arr[$j] > $arr[$j + 1]){
//                 swapTwoNum($arr[$j],$arr[$j+1]);
//                 $swap = 1;
//             }
//         }
//         if ($swap = 0){
//             break;
//         }
//     }
//     return $arr;
// }

// $arr = [1,6,3,6,8,3,6,4,7,3];
// print_r(bubbleSort($arr));



// Insertion sort


// function insertionSort($arr){
//     $n = count($arr);

//     for ($i = 0; $i < $n; $i++){
//         $j = $i;

//         while($j > 0 && $arr[$j - 1] > $arr[$j]){
//             swapTwoNum($arr[$j-1],$arr[$j]);
//             $j--;
//         }
//     }

//     return $arr;
// }

// $arr = [1,6,3,6,8,3,6,4,7,3];
// print_r(insertionSort($arr));




// Merge sort


// function mergeSort(&$arr, $low, $high){
//     if ($low >= $high){
//         return;
//     }

//     $mid = intval(($low + $high) / 2);

//     mergeSort($arr,$low,$mid);
//     mergeSort($arr,$mid + 1, $high);
//     merge($low, $mid, $high, $arr);
// }

// function merge($low, $mid, $high, &$arr){
//     $temp = [];
//     $left = $low;
//     $right = $mid + 1;

//     while($left <= $mid && $right <= $high){
//         if ($arr[$left] <= $arr[$right]){
//             array_push($temp,$arr[$left]);
//             $left++;
//         }
//         else{
//             array_push($temp,$arr[$right]);
//             $right++;
//         }
//     }

//     while($left <= $mid){
//         array_push($temp,$arr[$left]);
//         $left++;
//     }

//     while($right <= $high){
//         array_push($temp,$arr[$right]);
//         $right++;
//     }

//     for ($i = 0; $i < count($temp); $i++){
//         $arr[$i + $low] = $temp[$i];
//     }
// }

// $arr = [1,6,3,6,8,3,6,4,7,3];
// $n = count($arr);
// mergeSort($arr,0, $n-1);
// print_r($arr);






// Set Matrix to zeroes



// function setMatrixZeroes(&$matrix){
//     $n = count($matrix);
//     $m = count($matrix[0]);

//     for ($i = 0; $i < $n; $i++){
//         for ($j = 0; $j < $m; $j++){
//             if ($matrix[$i][$j] === 0){
//                 markRow($matrix,$i,$m);
//                 markColumn($matrix,$j,$n);
//             }
//         }
//     }

//     for ($i = 0; $i < $n; $i++){
//         for ($j = 0; $j < $m; $j++){
//             if ($matrix[$i][$j] == null){
//                 $matrix[$i][$j] = 0;
//             }
//         }
//     }

// }


// function markRow(&$matrix,$i,$m){
//     for ($j = 0; $j < $m; $j++){
//         if ($matrix[$i][$j] !== 0 && $matrix[$i][$j] !== null){
//             $matrix[$i][$j] = null;
//         }
//     }
// }

// function markColumn(&$matrix,$j,$n){
//     for ($i = 0; $i < $n; $i++){
//         if ($matrix[$i][$j] !== 0 && $matrix[$i][$j] !== null){
//             $matrix[$i][$j] = null;
//         }
//     }
// }



// Better


// function setMatrixZeroes(&$matrix){
//     $n = count($matrix);
//     $m = count($matrix[0]);

//     $row = array_fill(0,10,0);
//     $col = array_fill(0,10,0);

//     for ($i = 0; $i < $n; $i++){
//         for ($j = 0; $j < $m; $j++){
//             if ($matrix[$i][$j] === 0){
//                 $row[$i] = 1;
//                 $col[$j] = 1;
//             }
//         }
//     }

//     for ($i = 0; $i < $n; $i++){
//         for ($j = 0; $j < $m; $j++){
//             if ($row[$i] == 1 || $col[$j] == 1){
//                 $matrix[$i][$j] = 0;
//             }
//         }
//     }
// }

// optimal

// function setMatrixZeroes(&$matrix){
//     $n = count($matrix);
//     $m = count($matrix[0]);

//     $col0 = null;

//     for ($i = 0; $i < $n; $i++){
//         for ($j = 0; $j < $m; $j++){
//             if ($matrix[$i][$j] == 0){
//                 $matrix[$i][0] = 0;

//                 if ($j !== 0){
//                     $matrix[0][$j] = 0;
//                 }
//                 else{
//                     $col0 = 0;
//                 }
//             }
//         }
//     }

//     for ($i = 1; $i < $n; $i++){
//         for ($j = 1; $j < $m; $j++){
//             if ($matrix[$i][0] == 0 || $matrix[0][$j] == 0){
//                 $matrix[$i][$j] = 0;
//             }
//         }
//     }

//     if ($matrix[0][0] == 0){
//         for ($i = 0; $i < $m; $i++){
//             $matrix[0][$i] = 0;
//         }
//     }

//     if ($col0 == 0){
//         for ($i = 0; $i < $n; $i++){
//             $matrix[$i][0] = 0;
//         }
//     }
// }


// $matrix = [[0,1,2,0],[3,4,5,2],[1,3,1,5]];
// setMatrixZeroes($matrix);
// print_r($matrix);







// Find maximum sum of subarray

// function maxSubarraySum($arr){
//     $n = count($arr);
//     $maxi = 0;

//     for ($i = 0; $i < $n; $i++){
//         for ($j = $i; $j < $n; $j++){
//             $sum = 0;
//             for ($k = $i; $k <= $j; $k++){
//                 $sum += $arr[$k];
//                 $maxi = max($maxi,$sum);
//             }
//         }
//     }
//     return $maxi;
// }


// function maxSubarraySum($arr){
//     $n = count($arr);
//     $maxi = 0;

//     for ($i = 0; $i < $n; $i++){
//         $sum = 0;
//         for ($j = $i; $j < $n; $j++){
//             $sum += $arr[$j];
//             $maxi = max($maxi, $sum);
//         }
//     }

//     return $maxi;
// }


// function maxSubarraySum($arr){
//     $n = count($arr);
//     $maxi = PHP_INT_MIN;
//     $sum = 0;

//     for ($i = 0; $i < $n; $i++){
//         $sum += $arr[$i];

//         if ($sum > $maxi){
//             $maxi = $sum;
//         }

//         if ($sum < 0){
//             $sum = 0;
//         }
//     }
//     return $maxi;
// }


// $arr=[1,2,3,-10,4,5,6];
// print_r(maxSubarraySum($arr));





// sort of arrays with 0's 1's and 2's.

// function sortOfArray($arr){
//     $n = count($arr);
//     $low = 0;
//     $mid = 0;
//     $high = $n-1;

//     while($mid <= $high){
//         if ($arr[$mid] == 0){
//             swapTwoNum($arr[$mid],$arr[$low]);
//             $mid++;
//             $low++;
//         }
//         else if ($arr[$mid] == 1){
//             $mid++;
//         }
//         else{
//             swapTwoNum($arr[$mid],$arr[$high]);
//             $mid++;
//             $high--;
//         }
//     }
//     return $arr;
// }

// $arr = [0,0,1,2,0,2,1,1,2,2,1,0];
// print_r(sortOfArray($arr));





// Buy and sell stock and find max profit


function buyAndSellStock($arr){
    $n = count($arr);
    $maxProfit = 0;
    $mini = $arr[0];

    for ($i = 0; $i < $n; $i++){
        $cost = $arr[$i] - $mini;
        $maxProfit = max($cost, $maxProfit);
        $mini = min($mini, $arr[$i]);
    }
    return $maxProfit;
}

$arr = [9, 7, 3, 6, 2];
print_r(buyAndSellStock($arr));