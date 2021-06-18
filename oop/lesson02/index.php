<?php

require_once '../vendor/autoload.php';

Use oop\lesson02\Worker as Worker;

$worker1 = new Worker();
$worker2 = new Worker();

$worker1->setName('Иван');
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);

$salaryCount = $worker1->getSalary() + $worker2->getSalary();
$ageCount = $worker1->getAge() + $worker2->getAge();

echo 'Сумма зарплат Ивана и Васи равна ' . $salaryCount . '<br>';
echo 'Сумма возрастов Ивана и Васи равна ' . $ageCount . '<br>';