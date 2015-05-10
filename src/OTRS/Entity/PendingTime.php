<?php

namespace OTRS\Entity;

class PendingTime {
    
    private $Year;
    private $Month;
    private $Day;
    private $Hour;
    private $Minute;
    
    public function getYear() {
        return $this->Year;
    }

    public function getMonth() {
        return $this->Month;
    }

    public function getDay() {
        return $this->Day;
    }

    public function getHour() {
        return $this->Hour;
    }

    public function getMinute() {
        return $this->Minute;
    }

    public function setYear($Year) {
        $this->Year = $Year;
        return $this;
    }

    public function setMonth($Month) {
        $this->Month = $Month;
        return $this;
    }

    public function setDay($Day) {
        $this->Day = $Day;
        return $this;
    }

    public function setHour($Hour) {
        $this->Hour = $Hour;
        return $this;
    }

    public function setMinute($Minute) {
        $this->Minute = $Minute;
        return $this;
    }


}
