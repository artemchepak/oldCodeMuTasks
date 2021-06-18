<?php

namespace oop\lesson05_06;

Use oop\lesson05_06\User as User;

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

