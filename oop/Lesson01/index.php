<?php

require_once '../vendor/autoload.php';

Use OOP\Lesson01\Worker as Worker;

$worker1 = new Worker();
$worker2 = new Worker();

$worker1->name = 'Иван';
$worker1->age = 25;
$worker1->salary = 1000;

$worker2->name = 'Вася';
$worker2->age = 26;
$worker2->salary = 2000;

$salaryCount = $worker1->salary + $worker2->salary;
$ageCount = $worker1->age + $worker2->age;

echo 'Сумма зарплат Ивана и Васи равна ' . $salaryCount . '<br>';
echo 'Сумма возрастов Ивана и Васи равна ' . $ageCount . '<br>';