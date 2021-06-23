<?php

$week = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

echo $week[date('w')] . '<br>';
echo $week[date('w', mktime(0, 0, 0, 6, 6, 2006))] . '<br>';