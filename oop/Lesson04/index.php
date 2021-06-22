<?php

require_once '../vendor/autoload.php';

Use OOP\Lesson04\Worker as Worker;

$worker1 = new Worker('Дима', 25, 1000);

$result = $worker1->getAge() * $worker1->getSalary();

echo $result;