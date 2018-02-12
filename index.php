<?php
require_once 'starter.php';



function br()
{
  echo "<br>";
}

function dumper($var)
{
  echo "<pre>";
  var_dump($var);
  echo "<pre>";
}

// require_once 'Classes/Animal.php';
// require_once 'Classes/Dog.php';
// require_once 'Classes/Bird.php';
// require_once 'Interfaces/IFly.php';
// require_once 'Trates/Bark.php';



$dog = new Dog('Pasha', 12, 4);
dumper($dog);

$dog->getName();
br();
$dog->Bark();
br();
$dog->getSpeed();
br();
$dog->canFly();
br();
$dog->banch();

$bird = new Bird('Lastka', 2, 2);
dumper($bird);

$bird->getName();
br();
$bird->Bark();
br();
$bird->getFlySpeed();
br();
$bird->getSpeed();
$bird->setFlySpeed(100);
br();
$bird->getFlySpeed();
br();
$bird->canFly();
br();
$bird->banch();



