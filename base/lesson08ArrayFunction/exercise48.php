<?php

$arr = [1, 2, 4, 5, 5];

$newArr = array_unique($arr);

rsort($newArr);

echo $newArr[1];
