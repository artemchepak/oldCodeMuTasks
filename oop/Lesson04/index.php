<?php

require_once '../vendor/autoload.php';

use OOP\Lesson04\Worker;

$worker1 = new Worker('Дима', 25, 1000);

$result = $worker1->getAge() * $worker1->getSalary();

echo $result;