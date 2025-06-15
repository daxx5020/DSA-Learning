<?php

function palindrome($var, $i){
    $n = strlen($var);

    if ($i >= $n / 2){
        return true;
    }

    if ($var[$i] == $var[$n - $i -1]){
       return palindrome($var,$i+1);
    }

    else{
        return false;
    }
}

$result = palindrome("madam", 0);
var_export($result);
