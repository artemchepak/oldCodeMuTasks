<?php

$arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];

$sum = 0;

foreach($arr as $second){
    foreach($second as $third){
        $sum += array_sum($third);
    }
}

echo $sum;
