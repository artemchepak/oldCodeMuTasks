<?php

$number = 31;
$flag = false;

for ($i = 2; $i < $number; $i++) {
    if ($number % $i == 0) {
        $flag = true;
        break;
    }
}

if ($flag === true){
    echo 'нет';
} else {
    echo 'да';
}