<?php


// Formula of ncr

// function nCr($n,$r){
//     $res = 1;

//     for ($i = 0; $i < $r; $i++){
//         $res = $res * ($n - $i);
//         $res = $res / ($i + 1);
//     }

//     return (int)$res;
// }

// echo nCr(5, 2);


// Print the full row of pascal triangel

// function printRow($n){
//     $ans = 1;
//     echo $ans;
//     for ($i = 1; $i < $n; $i++){
//         $ans = $ans * ($n - $i);
//         $ans = $ans / ($i);
//         echo $ans;
//     }
// }

// $n = 3;
// printRow($n);



// Print pscal triangle

function generateRow($row){
    $ans = 1;
    $ansRow = [];
    array_push($ansRow, $ans);

    for ($i = 1; $i < $row; $i++){
        $ans = $ans * ($row - $i);
        $ans = $ans / ($i);
        array_push($ansRow, $ans);
    }

    return $ansRow;

}

function pascalTriangle($n){
    $ans = [];
    for ($i = 1; $i <= $n; $i++){
        array_push($ans, generateRow($i));
    }
    return $ans;
}


print_r(pascalTriangle(6));