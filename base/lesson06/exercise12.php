<?php

$arr = [1, 2, -1, -2, 3, -3];
$newArr = [];

foreach ($arr as $item) {
    array_push($newArr, abs($item));
}

var_dump($newArr);