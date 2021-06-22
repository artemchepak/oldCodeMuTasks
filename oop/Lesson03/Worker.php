<?php

namespace OOP\Lesson03;

class Worker
{
    private $name;
    private $age;
    private $salary;

    public function setName($name){
        return $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setAge($age){
        if($this->checkAge($age)){
            return $this->age = $age;
        };
    }

    public function getAge(){
        return $this->age;
    }

    public function setSalary($salary){
        return $this->salary = $salary;
    }

    public function getSalary(){
        return $this->salary;
    }

    private function checkAge($age){
        return $age >= 1 && $age <= 100 ? true : false;
    }
}