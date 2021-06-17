<?php

$num = 1000;
$iterationCount;

//Решение через цикл while
while ($num > 50) {
    $num /= 2;
    $iterationCount ++;
}
echo $iterationCount . "<br>";

//Решение через цикл for
$num = 1000;

for($iterationCount = 0; $num > 50; $iterationCount++) {
    $num /= 2;
}
echo $iterationCount;
