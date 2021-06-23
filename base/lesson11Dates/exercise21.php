<?php

$date = date_create(time());
date_modify($date, '- 100 day');
$day = date_format($date, 'w');
$week = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
echo $week[$day];