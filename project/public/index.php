<?php
require '../vendor/autoload.php';

$factory = new \App\Factory\VehicleFactory();
$directory = new \App\Composite\VehicleDirectory();

$bmw = $factory->createCar('bmw');
$bmw = $factory->createCar('bmw')->move()->musicOn()->stop()->refuel();

$zaz = $factory->createCar('zaz')->move()->stop();

$directory->addVehicle($bmw);
$directory->addVehicle($zaz);
$directory->removeVehicle($zaz);
echo $directory->showVehicleDetails();