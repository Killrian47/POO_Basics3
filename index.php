<?php

require_once 'bicycle.php';
require_once 'cars.php';
require_once 'truck.php';

$bike = new Bicycle('blue', 1);
echo $bike->forward();
var_dump($bike);

$car = new Cars('green', 4, 'electric');
echo $car->forward();
var_dump($car);

$truck = new Truck('blue', 3, 'SP95', 20);
var_dump($truck);
$truck->setLading(20);
var_dump($truck);
echo $truck->forward() .'<br>';
echo $truck->brake();

