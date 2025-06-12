<?php

function printName($i,$n){
    if ($i > $n){
        return;
    }
    
    print_r("Daksh");
    printName($i+1,$n);
}

print_r(printName(1,4));