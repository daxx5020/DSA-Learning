<?php


// Brutefoce approch

// function setMatrixZeroes(&$matrix){
//     $n = count($matrix);
//     $m = count($matrix[0]);

//     for ($i = 0; $i < $n; $i++) {
//         for ($j = 0; $j < $m; $j++) {
//             if ($matrix[$i][$j] === 0) {
//                 markRow($matrix, $i, $m);
//                 markCol($matrix, $j, $n);
//             }
//         }
//     }

//     // 🔧 Convert only our marker (null) to 0
//     for ($i = 0; $i < $n; $i++) {
//         for ($j = 0; $j < $m; $j++) {
//             if ($matrix[$i][$j] === null) {
//                 $matrix[$i][$j] = 0;
//             }
//         }
//     }
// }

// function markRow(&$matrix, $i, $m){
//     for ($j = 0; $j < $m; $j++){
//         if ($matrix[$i][$j] !== 0 && $matrix[$i][$j] !== null){
//             $matrix[$i][$j] = null;
//         }
//     }
// }

// function markCol(&$matrix, $j, $n){
//     for ($i = 0; $i < $n; $i++){
//         if ($matrix[$i][$j] !== 0 && $matrix[$i][$j] !== null){
//             $matrix[$i][$j] = null;
//         }
//     }
// }

// Better approch

// function setMatrixZeroes(&$matrix){
//     $n = count($matrix);
//     $m = count($matrix[0]);

//     $row = array_fill(0,10,0);
//     $col = array_fill(0,10,0);

//     for ($i = 0; $i < $n; $i++){
//         for ($j = 0; $j < $m; $j++){
//             if ($matrix[$i][$j] == 0){
//                 $row[$i] = 1;
//                 $col[$j] = 1;
//             }
//         }
//     }

//     for ($i = 0; $i < $n; $i++){
//         for ($j = 0; $j < $m; $j++){
//             if($row[$i] == 1 || $col[$j] == 1){
//                 $matrix[$i][$j] = 0;
//             }
//         }
//     }

//     return $matrix;
// }

function setMatrixZeroes(&$matrix){
    $n = count($matrix);
    $m = count($matrix[0]);

    $col0 = 1;

    for ($i = 0; $i < $n; $i++){
        for ($j = 0; $j < $m; $j++){
            if ($matrix[$i][$j] == 0){
                $matrix[$i][0] = 0;
                if ($j != 0){
                    $matrix[0][$j] = 0;
                }
                else{
                    $col0 = 0;
                }
            }
        }
    }

    for ($i = 1; $i < $n; $i++){
        for ($j = 1; $j < $m; $j++){
            if ($matrix[$i][0] == 0 || $matrix[0][$j] == 0){
                $matrix[$i][$j] = 0;
            }
        }
    }

    if ($matrix[0][0] == 0){
        for ($j = 0; $j < $m; $j++){
            $matrix[0][$j] = 0;
        }
    }

    if ($col0 == 0){
        for ($i = 0; $i < $n; $i++){
            $matrix[$i][0] = 0;
        }
    }

    return $matrix;
}



$matrix = [[0,1,2,0],[3,4,5,2],[1,3,1,5]];
setMatrixZeroes($matrix);
print_r($matrix);