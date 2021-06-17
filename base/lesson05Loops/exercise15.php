<?php

$arr = [
    1 => 'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятница',
    'Суббота',
    'Воскресенье'
    ];

foreach ($arr as $key => $value) {
    if ($key <= 5) {
        echo $value . '<br>';
    } else {
        echo "<b>$value</b><br>";
    }
}