<?php

function swapNum(&$a,&$b){
    $temp = $a;
    $a = $b;
    $b = $temp;
}

// Rotate matrix by 90 degree

// function rotateMatrix(&$matrix){
//     $n = count($matrix);
//     $rotated = array_fill(0,$n,array_fill(0,$n,0));

//     for ($i = 0; $i < $n; $i++){
//         for ($j = 0; $j < $n; $j++){
//             $rotated[$j][$n - $i - 1] = $matrix[$i][$j];
//         }
//     }
//     return $rotated;
// }


function rotateMatrix(&$matrix){
    $n = count($matrix);

    for ($i = 0; $i < $n; $i++){
        for ($j = $i + 1; $j < $n; $j++){
            swapNum($matrix[$i][$j],$matrix[$j][$i]);
        }
    }

    foreach($matrix as &$row){
        $row = array_reverse($row);
    }

    return $matrix;
}

$arr = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];


$rotated = rotateMatrix($arr);
$n = count($arr);
print_r($rotated);