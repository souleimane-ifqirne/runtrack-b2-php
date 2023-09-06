<?php

function my_is_multiple(int $divider, int $multiple) : bool {
    $fact = (boolean)false;
    if ($multiple % $divider === 0) $fact = (boolean)true;
    return $fact;
}