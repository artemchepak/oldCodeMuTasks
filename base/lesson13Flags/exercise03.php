<?php

$arr = [1, 2, 3, 4, 5, 5];
$flag = false;

for ($i = 1; $i < count($arr); $i++){
    if ($arr[$i] === $arr[$i-1]){
        $flag = true;
        break;
    }
}

if ($flag === true){
    echo 'да';
} else {
    echo 'нет';
}