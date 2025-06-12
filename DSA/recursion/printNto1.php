<?php

function print1Ton($i,$n){
    if ($i < 1){
        return;
    }
    print($i);
    print1Ton($i-1,$n);
}

print(print1Ton(10,10));