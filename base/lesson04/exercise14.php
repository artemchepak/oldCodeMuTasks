<?php

$var = true;

if ($var !== true){
    echo 'Верно';
} else {
    echo 'Неверно';
}

//с короткой записью

echo $var !== true ? 'Верно' : 'Неверно';