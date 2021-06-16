<?php

$arr = [1, 2, 5, 9, 4, 13, 4, 10];
$result;

foreach ($arr as $item) {
    if ($item % 2 === 0) {
        $result += $item;
    }
}

echo $result;