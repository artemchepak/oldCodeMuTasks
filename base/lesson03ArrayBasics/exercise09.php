<?php

$days = [
    1 => 'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятница',
    'Суббота',
    'Воскресенье',
];

echo getdate()['wday'] === 0 ? $days[7] : $days[getdate()['wday']];