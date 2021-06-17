<?php


class Worker extends User
{
    private $salary;

    public function setSalary($salary){
        return $this->salary = $salary;
    }

    public function getSalary(){
        return $this->salary;
    }
}

