<?php

function setMatrixZeroes(&$matrix){
    $n = count($matrix);
    $m = count($matrix[0]);

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $m; $j++) {
            if ($matrix[$i][$j] === 0) {
                $this->markRow($matrix, $i, $m);
                $this->markCol($matrix, $j, $n);
            }
        }
    }

    // 🔧 Convert only our marker (null) to 0
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $m; $j++) {
            if ($matrix[$i][$j] === null) {
                $matrix[$i][$j] = 0;
            }
        }
    }
}

function markRow(&$matrix, $i, $m){
    for ($j = 0; $j < $m; $j++){
        if ($matrix[$i][$j] !== 0 && $matrix[$i][$j] !== null){
            $matrix[$i][$j] = null;
        }
    }
}

function markCol(&$matrix, $j, $n){
    for ($i = 0; $i < $n; $i++){
        if ($matrix[$i][$j] !== 0 && $matrix[$i][$j] !== null){
            $matrix[$i][$j] = null;
        }
    }
}


$matrix = [[0,1,2,0],[3,4,5,2],[1,3,1,5]];
setMatrixZeroes($matrix);
print_r($matrix);