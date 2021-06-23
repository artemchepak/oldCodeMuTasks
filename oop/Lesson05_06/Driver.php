<?php

namespace OOP\Lesson05_06;

use OOP\Lesson05_06\Worker;

class Driver extends Worker
{
    private $drivingExperience;
    private $drivingCategory;

    public function setDrivingExperience($drivingExperience){
        return $this->drivingExperience = $drivingExperience;
    }

    public function getDrivingExperience(){
        return $this->drivingExperience;
    }

    public function setDrivingCategory($drivingCategory){
        return $this->drivingCategory = $drivingCategory;
    }

    public function getDrivingCategory(){
        return $this->drivingCategory;
    }
}