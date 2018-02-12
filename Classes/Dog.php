<?php

class Dog extends Animal
{
  const CLASS_NAME = "Dog";

  private $say = "Gafffff";

  use Bark;

  public function __construct($name, $speed, $lags)
  {
    parent::__construct($name, $speed, $lags);
    echo "<br>I belive i can kus`!!!<br>";
  }

  public function canFly()
  {
    echo "He cann`t fly!";
  }

}