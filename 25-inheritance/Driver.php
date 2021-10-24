<?php

class Driver extends Worker{
    private $driverCategory;
    private $driverExpirience;ew


    public function setDriverCategory($driverCategory): void
    {
        $this->driverCategory = $driverCategory;
    }

    public function getDriverCategory()
    {
        return $this->driverCategory;
    }

    public function setDriverExpirience($driverExpirience): void
    {
        $this->driverExpirience = $driverExpirience;
    }

    public function getDriverExpirience()
    {
        return $this->driverExpirience;
    }

}
