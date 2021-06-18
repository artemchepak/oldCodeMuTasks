<?php

namespace oop\lesson05_06;

class User
{

    protected $name;
    protected $age;

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

}