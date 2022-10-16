<?php

/**
 * Class abstract Highway
 * PHP 8.1
 */
abstract class HighWay
{
    private array $currentVehicle;
    private int $numberLane;
    private int $maxSpeed;

    public function __construct(int $numberLane, int $maxSpeed)
    {
        $this->numberLane = $numberLane;
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * @return array
     */
    public function getCurrentVehicle(): array
    {
        return $this->currentVehicle;
    }

    /**
     * @param array $currentVehicle
     */
    public function setCurrentVehicle(array $currentVehicle): void
    {
        $this->currentVehicle = $currentVehicle;
    }

    /**
     * @return int
     */
    public function getNumberLane(): int
    {
        return $this->numberLane;
    }

    /**
     * @param int $numberLane
     */
    public function setNumberLane(int $numberLane): void
    {
        $this->numberLane = $numberLane;
    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    public abstract function addVehicle(object $vehicle);
}