<?php

function arrayFill($value, $amount) {
    $arr = [];

    for ($i = 1; $i <=$amount; $i++){
        array_push($arr, $value);
    }

    var_dump($arr);
}

arrayFill('x', 5);