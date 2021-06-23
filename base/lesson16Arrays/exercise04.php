<?php

$arr = range(1, 10);
$sum = 0;
$count = 0;

for ($i = 0; $sum < 10; $i++) {
    $sum += $arr[$i];
    $count++;
}

echo $count;
