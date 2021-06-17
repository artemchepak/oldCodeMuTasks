<?php

$arr = [
    'ru' => [
        1 => 'Понедельник',
        'Вторник',
        'Среда',
        'Четверг',
        'Пятница',
        'Суббота',
        'Воскресенье'
    ],
    'en' => [
        1 => 'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday',
        'Sunday'
    ]
];

$lang = 'ru';
$day = 3;

echo $arr[$lang][$day];