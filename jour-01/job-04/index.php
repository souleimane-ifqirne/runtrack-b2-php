<?php

function my_fizz_buzz(int $length) : array {
    $table = [];
    for ($i = 0; $i < $length; $i++) {
        if (($i + 1) % 3 == 0) {
            (($i + 1) % 5 == 0) ? $table[$i] = 'FizzBuzz': $table[$i] = 'Fizz';
        } else if(($i + 1) % 5 == 0) $table[$i] = 'Buzz';
        else $table[$i] = $i + 1;
    }
    return $table;
}