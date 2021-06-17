<?php

$arr = [1, 2, 3, 4, 5];
$result;

foreach ($arr as $item){
    $result += $item;
}

echo $result;