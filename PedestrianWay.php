<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct(int $numberLane=1, int $maxSpeed=10)
    {
        parent::__construct($numberLane, $maxSpeed);
    }

    public function addVehicle(object $vehicle)
    {
        if (($vehicle instanceof Bicycle) || ($vehicle instanceof SkateBoard)) {
            $this->setCurrentVehicle($vehicle);
        } else {
            echo 'Go on road asshole';
        }
    }
}