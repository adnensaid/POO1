<?php
require_once "Vehicle.php";
class Truck extends Vehicle{
    private $capacity;
    private $loading;
    public function __construct(string $color,int $nbSeats, string $energy, int $capacity, int $loading = 0)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->capacity = $capacity;
        $this->loading = $loading;        
    }
    public function getCapacity() : int
    {
        return $this->capacity;
    }
    public function setCapacity($capacity) : void
    {
        $this->capacity = $capacity;
    }
    public function getLoading(): int
    {
        return $this->loading;
    }
    public function setLoading() : void
    {
        $this->loading = $loading;
    }
    public function isFull(): string
    {
        $sentence = "";
        while($this->capacity > 0) {
            $this->capacity--;
            $sentence .= "in filling \n";
        }
        $sentence .=" full";
        return $sentence;
    }
}