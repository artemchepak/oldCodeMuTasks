<?php

$num = 1;

switch ($num) {
    case 1:
        $result = 'зима';
        break;
    case 2:
        $result = 'лето';
        break;
    case 3:
        $result = 'осень';
        break;
    case 4:
        $result = 'весна';
        break;
    default :
        echo 'Введите число от 1 до 4';
}