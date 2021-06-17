<?php

$day = getdate()['wday'];

$arr = [
    1 => 'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятница',
    'Суббота',
    'Воскресенье'
];

if ($day === 0) {
    $day = 7;
}

foreach ($arr as $key => $value) {
    if ($day === $key) {
        echo "<i>$value</i><br>";
    } else {
        echo $value . '<br>';
    }
}