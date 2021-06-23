<?php

function getWeekDay($number){
    $week = [1 => 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    if ($number >= 1 && $number <= 7) {
        return $week[$number];
    } else {
        return 'Функция принимает параметром число от 1 до 7';
    }
}

echo getWeekDay(5);