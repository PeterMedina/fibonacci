<?php

/**
 * Fibonacci Generator
 *
 * 0 1 1 2 3 5 8 13 21 34
 *
 * @author Pete Medina
 */

function fib($number) {
    // Set defaults
    $n1 = 0;
    $n2 = 1;

    if($number === 1) {
        return 0;
    } elseif($number === 2){
        return 1;
    } else {
        for ($i = 2; $i < $number; $i++) {
            $fibonacci = $n1 + $n2;
            $n1 = $n2;
            $n2 = $fibonacci;
        }
    }
    return number_format($n2);
}

function fibr($n) {
    if($n === 0) {
        return 0;
    }

    if($n === 1) {
        return 1;
    }

    return number_format(fibr($n-1) + fibr($n-2));
}
