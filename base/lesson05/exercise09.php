<?php

//Решение через цикл while
$number = 1;
$result;
while ($number <= 100) {
    $result += $number;
    $number++;
}
echo $result . '<br>';

//Решение через цикл for
$result = 0;
for ($i = 1; $i <= 100; $i++) {
    $result += $i;
}
echo $result . '<br>';
