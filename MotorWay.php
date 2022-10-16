<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct(int $numberLane=4,int $maxSpeed=130)
    {
        parent::__construct($numberLane,$maxSpeed);
    }

    public function addVehicle(object $vehicle){
        if (!($vehicle instanceof Bicycle) || !($vehicle instanceof SkateBoard)){
            $this->setCurrentVehicles($vehicle);
        }
    }
}