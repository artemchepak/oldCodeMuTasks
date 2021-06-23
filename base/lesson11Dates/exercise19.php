<?php

$currentTime = time();

$newYear = mktime(0, 0, 0, 12, 31);

echo ($newYear - $currentTime) / 60 / 60 / 24;