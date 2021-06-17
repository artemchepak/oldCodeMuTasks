<?php


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
        return $this->age = $age;
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
}