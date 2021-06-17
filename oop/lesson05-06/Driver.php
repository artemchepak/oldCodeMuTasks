<?php


class Driver extends Worker
{
    private $drivingExperience;
    private $drivingCategory;

    public function setDrivingExperience($drivingExperience){
        $this->drivingExperience = $drivingExperience;
    }

    public function getDrivingExperience(){
        return $this->drivingExperience;
    }

    public function setDrivingCategory($drivingCategory){
        $this->drivingCategory = $drivingCategory;
    }

    public function getDrivingCategory(){
        return $this->drivingCategory;
    }
}