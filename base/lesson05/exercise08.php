<?php

//Решение через цикл while
$number = 0;
while ($number <= 100) {
    if ($number === 0) {
        $number += 2;
    }
    echo $number . '<br>';
    $number += 2;
}

//Решение через цикл for
for($i = 0; $i <= 100; $i += 2) {
    if ($i !== 0) {
        echo $i . '<br>';
    }

}