<?php

// Parameterized recurssion

// function sumOfNumbers($n,$sum){
//     if ($n < 1){
//         return $sum;
//     }

//     return sumOfNumbers($n-1, $sum+$n);
// }

// print(sumOfNumbers(5,0));


// Functional recurssion

function sumOfNumbersFunctional($n){
    if ($n == 0){
        return $n;
    }

    return $n + sumOfNumbersFunctional($n - 1);
}

print(sumOfNumbersFunctional(15));