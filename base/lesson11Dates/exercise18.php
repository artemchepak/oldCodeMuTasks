<?php

$date = date_create('2025-12-31');

echo date_format(date_modify($date, '1 day'), 'Y-m-d');
echo date_format(date_modify($date, '1 month 3 day'), 'Y-m-d');
echo date_format(date_modify($date, '1 year'), 'Y-m-d');
echo date_format(date_modify($date, '-3 day'), 'Y-m-d');