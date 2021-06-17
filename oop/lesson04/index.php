<?php

include "Worker.php";

$worker1 = new Worker('Дима', 25, 1000);

$result = $worker1->getAge() * $worker1->getSalary();

echo $result;