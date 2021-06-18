<?php

$firstArr = [1, 2, 3, 4, 5];
$secondArr = [3, 4, 5, 6, 7];

$result = array_intersect($firstArr, $secondArr);

var_dump($result);