<?php

require_once 'Vehicle.php';

class Truck extends Vehicle {
    private int $storage;

    public int $lading = 0;

    private string $energy;

    public function __construct(string $color, int $nbSeats, string $energy, int $storage)
    {
        parent::__construct($color, $nbSeats);
        $this->storage = $storage;
        $this->energy = $energy;
    }

    public function __construct1()
    {

    }

    /**
     * @return int
     */
    public function getStorage(): int
    {
        return $this->storage;
    }

    public function setStorage(int $storage): void
    {
        $this->storage = $storage;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    /**
     * @return int
     */
    public function getLading(): int
    {
        return $this->lading;
    }

    /**
     * @param int $lading
     */
    public function setLading(int $lading): void
    {
        if ($lading == $this->storage) {
            echo 'The truck is FULL !!';
        } else {
            echo 'The truck is in filling !';
        }

    }
}