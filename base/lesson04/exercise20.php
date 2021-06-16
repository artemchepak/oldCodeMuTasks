<?php

$day = 25;

switch ($day){
    case $day >= 1 && $day <= 10:
        echo 'Первая декада';
        break;
    case $day >= 11 && $day <= 20:
        echo 'Вторая декада';
        break;
    case $day >= 21 && $day <= 31:
        echo 'Третья декада';
        break;
    default :
        echo 'Введите число от 1 до 31';
}