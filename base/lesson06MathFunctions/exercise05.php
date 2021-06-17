<?php

$arr = [4, 2, 5, 19, 13, 0, 10];
$sum;

foreach ($arr as $item) {
    $sum += pow($item, 2);
}

echo sqrt($sum);
