<?php

require_once '../vendor/autoload.php';

use OOP\Lesson05_06\Worker;

$user1 = new Worker();
$user1->setName('Ivan');
$user1->setAge(25);
$user1->setSalary(1000);

$user2 = new Worker();
$user2->setName('Vasya');
$user2->setAge(26);
$user2->setSalary(2000);

$salaryCount = $user1->getSalary() + $user2->getSalary();

echo $salaryCount;