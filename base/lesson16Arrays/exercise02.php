<?php

$arr = [];

for ($i = 1; $i <=9; $i++){
    $value = '';

    for ($n = 1; $n <= $i; $n++){
        $value .= $i;
    }

    array_push($arr, $value);
}

var_dump($arr);