<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$str;

foreach ($arr as $item) {
    if (isset($str)) {
        $str .= $item . '-';
    } else {
        $str .= '-' . $item . '-';
    }
}

echo $str;