<?php

function my_is_prime(int $number) : bool {
    $square = fn(int $i) => $i * $i;
    if ($number <= 1)
        return false;
    if ($number <= 3)
        return true;
    for ($i = 5; $square($i) <= $number; $i += 6) {
        if ($number % $i == 0 || $number % ($i + 2) == 0)
            return false;
    }
    return true;
}

echo "The number is pair : " . (my_is_prime(3) ? 'true' : 'false');