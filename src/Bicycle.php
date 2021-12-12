<?php
class Bicycle
{
  private $color;
  private $currentSpeed;
  private $nbSeats = 1;
  private $nbWheels = 2;
  public function __construct(int $nbWheels=null, int $currentSpeed=null, string $color=null, int $nbSeats=null, string $energy=null, int $energyLevel=null){
    $this->nbWheels = $nbWheels;
    $this->currentSpeed = $currentSpeed;
    $this->color = $color;
    $this->nbSeats = $nbSeats;
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

}