<?php
class Car {
  private $nbWheels = 4;
  private $currentSpeed;
  private $color;
  private $nbSeats;
  private $energy;
  private $energyLevel;

  public function __construct(int $nbWheels=null, int $currentSpeed=null, string $color=null, int $nbSeats=null, string $energy=null, int $energyLevel=null){
    $this->nbWheels = $nbWheels;
    $this->currentSpeed = $currentSpeed;
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
    $this->energyLevel = $energyLevel;
  }

  public function forward() : string
  {
      $this->currentSpeed = 15;
      return "GO !\n";
  }
  public function brake() : string
  {
      $sentence = "";
      while($this->currentSpeed > 0)
      {
        $this->currentSpeed--;
        $sentence .= "Brake !!!\n";
      }
      $sentence .= "I'm Stopped\n";
      return $sentence;
  }

  public function getCurrentSpeed()
  {
    return $this->currentSpeed;
  }

  public function getNbWeels()
  {
      return $this->nbWheels;
  }

  public function getColor()
  {
      return $this->color;
  }
  public function setColor($color)
  {
      return $this->color = $color;
  }

  public function getNbSeats ()
  {
      return $this->nbSeats;
  }
  public function getEnergy ()
  {
      return $this->energy;
  }
  public function getEnergyLevel ()
  {
      return $this->energyLevel;
  }  

}