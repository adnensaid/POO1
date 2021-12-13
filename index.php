<?php
require_once 'src/Car.php';
require_once 'src/Truck.php';
require_once 'src/Bicycle.php';
echo "***** TRUCK *****\n";
$truck = new Truck('pink', 8, 'electric', 10);
echo $truck->isFull();
echo $truck->forward();
echo $truck->brake();



