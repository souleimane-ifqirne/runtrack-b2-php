<?php
function my_strlen(string $string) : int {
    for ($i = 0; isset($string[$i]); $i++);
    return $i;
}

function my_str_reverse(string $string) : string {
    for ($temp = $string, $b = my_strlen($string), $i = 0; $i < my_strlen($string);$b--, $i++)
        $string[$i] = $temp[$b - 1];
    return $string;
}