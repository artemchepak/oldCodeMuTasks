<?php

$arr = [];
$lastChar = 1;
for ($i = 1; $i <= 3; $i++){
    $newArr = [];

    for ($n = $lastChar ; $n < $lastChar + 3; $n++) {
        array_push($newArr, $n);
    }

    $lastChar += 3;

    array_push($arr, $newArr);
}

var_dump($arr);