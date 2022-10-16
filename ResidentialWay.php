<?php

require_once 'HighWay.php';

class ResidentialWay extends HighWay
{
    public function __construct($numberLane=2, $maxSpeed=50)
    {
        parent::__construct($numberLane,$maxSpeed);
    }

    public function addVehicle($vehicle)
    {
        $this->setCurrentVehicle($vehicle);
    }
}