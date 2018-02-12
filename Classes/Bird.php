<?php

class Bird extends Animal implements IFly 
{
  const CLASS_NAME = "Bird";

  private $flySpeed = 0;
  private $say = "Tsvirin";

  use Bark;

  public function __construct($name, $speed, $lags)
  {
    parent::__construct($name, $speed, $lags);
  }

  public function getFlySpeed()
  {
    echo "This animal have fly speed: ".$this->flySpeed;
  }

  public function setFlySpeed($speed)
  {
    $this->flySpeed = $speed;
  }

   public function canFly()
  {
    echo "He can fly!";
  }

}