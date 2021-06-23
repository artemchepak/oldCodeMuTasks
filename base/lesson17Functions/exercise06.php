<?php

function isEven($number){
    return $number % 2 == 0 ? true : false;
}

$arr = [0, 1, 9, 10, 15, -20];

$newArr = [];

for ($i = 0; $i < count($arr); $i++){
    if (isEven($arr[$i])) {
        array_push($newArr, $arr[$i]);
    }
}

var_dump($newArr);