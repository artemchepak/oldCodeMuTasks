<?php

$number = 30;

$arr = [];

for($i = 1; $i <= $number; $i++) {
    if ($number % $i === 0) {
        array_push($arr, $i);
    }
}
