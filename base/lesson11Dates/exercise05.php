<?php

$sec = mktime() - mktime(7, 23, 48);

$hour = floor($sec / 60 / 60);

echo $hour;