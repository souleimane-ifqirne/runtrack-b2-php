<?php

function my_str_search(string $needle, string $haystack) : int {
    $count = 0;
    for($i = 0; isset($needle[$i]); $i++)
        $needle[$i] == $haystack[0] ? $count += 1 : 0;
        
    return $count;
}