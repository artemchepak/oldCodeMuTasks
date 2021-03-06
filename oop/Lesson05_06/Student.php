<?php

namespace OOP\Lesson05_06;

use OOP\Lesson05_06\User;

class Student extends User
{
    private $scholarship;
    private $course;

    public function setScholarship($scholarship){
        return $this->scholarship = $scholarship;
    }

    public function getScholarship(){
        return $this->scholarship;
    }

    public function setCourse($course){
        return $this->course = $course;
    }

    public function getCourse(){
        return $this->course;
    }
}