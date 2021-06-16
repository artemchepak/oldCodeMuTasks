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

echo $arr['ru'][3];
echo '<br>';
echo $arr['en'][3];