<?php

$arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

function func($array, $i = 0){
    if ($i !== count($array)){
        echo $array[$i] . '<br>';
        $i++;
        func($array, $i);
    }
}

func($arr);