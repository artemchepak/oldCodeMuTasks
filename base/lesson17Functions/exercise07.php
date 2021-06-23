<?php

function getDivisors($number){
    $arr = [];

    for ($i = 1; $i <= $number; $i++){
        if ($number % $i === 0) {
            array_push($arr, $i);
        }
    }

    return $arr;
}

var_dump(getDivisors(10));