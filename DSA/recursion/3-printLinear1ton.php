<?php

function print1Ton($n,$i){
    if ($i > $n){
        return;
    }
    print($i);
    print1Ton($n,$i+1);
}

print(print1Ton(10,1));