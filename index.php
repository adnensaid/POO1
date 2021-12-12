<?php
require_once 'src/Car.php';
$peugeot = new Car();
$peugeot->setColor('red');
$peugeot->forward();
echo "my car ". $peugeot->getColor() ." has a speed of : ". $peugeot->getCurrentSpeed() . "KM/H\n";
echo $peugeot->forward();
echo $peugeot->brake();

