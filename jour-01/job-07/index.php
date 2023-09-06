<?php
function my_closest_to_zero(array $array) : int {
    $arrayTemp = $array;
    $temp = $array[0] < 0 ? ($array[0] *= -1) : $array[0];
    $i = 0;

    for ($z = 1; $z < count($array); $z++) {
        $array[$z] < 0 && ($array[$z] *= -1);
        $temp > $array[$z] && (($temp = $array[$z]) && ($i = $z));
    }
    return $arrayTemp[$i];
}