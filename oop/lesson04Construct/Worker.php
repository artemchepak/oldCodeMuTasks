<?php


class Worker
{
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary){
        return $this->name = $name;
        return $this->age = $age;
        return $this->salary = $salary;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function getSalary(){
        return $this->salary;
    }
}