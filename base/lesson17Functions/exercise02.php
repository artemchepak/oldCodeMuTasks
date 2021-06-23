<?php

function isNumberInRange($number){
    return $number > 0 && $number < 10 ? true : false;
}

$arr = [0, 1, 9, 10, 15, -20];

$newArr = [];

for ($i = 0; $i < count($arr); $i++){
    if (isNumberInRange($arr[$i])) {
        array_push($newArr, $arr[$i]);
    }
}

var_dump($newArr);