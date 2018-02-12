<?php

class Animal
{
  const CLASS_NAME = 'Animal';

  private $name;
  private $speed;
  private $lags;

  public function __construct($name, $speed, $lags)
  {
    $this->name = $name;
    $this->speed = $speed;
    $this->lags = $lags;
  }

  public function getName()
  {
    echo "Name animal is: ".$this->name;
  }

  public function getSpeed()
  {
    echo "This animal speed is: ".$this->speed;
  }

  public function getLags()
  {
    echo "This animal have: ".$this->lags."lags!";
  }


  public function banch()
  {
    echo "Parent class is: ".static::CLASS_NAME;
    echo "<br>";
    echo "Class name is: ".self::CLASS_NAME;
  }

}