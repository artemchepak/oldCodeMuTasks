<?php

namespace OOP\Lesson05_06;

use OOP\Lesson05_06\User;

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

