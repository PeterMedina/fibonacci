<?php

/**
 * Fibronicci Generator
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
        echo $n1;
    } elseif($number === 2){
        echo $n1.'<br>'.$n2.'<br>';
    } else {
        // Show defaults to start the sequence;
        // start the loop if arg is greater than 3
        echo $n1.'<br>'.$n2.'<br>';
        for ($i = 2; $i < $number; $i++) {
            $fibronicci = $n1 + $n2;
            echo number_format($fibronicci).'<br>';
            $n1 = $n2;
            $n2 = $fibronicci;
        }
    }

    // Uncomment below to echo just the final result
    // echo $n2;
}
