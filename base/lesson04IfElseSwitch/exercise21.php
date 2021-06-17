<?php

$month = 10;

switch ($month) {
    case $month >= 3 && $month <=5 :
        echo 'Весна';
        break;
    case $month >= 6 && $month <= 8 :
        echo 'Лето';
        break;
    case $month >= 9 && $month <= 11 :
        echo 'Осень';
        break;
    case $month === 1 && $month <= 2 || $month === 12:
        echo 'Зима';
        break;
    default:
        echo 'Введите число от 1 до 12';
}