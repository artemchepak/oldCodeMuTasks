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

function getCommonDivisors($firstNumber, $secondNumber)
{
    $firstArr = getDivisors($firstNumber);
    $secondArr = getDivisors($secondNumber);

    $result = array_intersect($firstArr, $secondArr);

    return $result;
}

var_dump(getCommonDivisors(10, 12));