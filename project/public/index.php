<?php
require '../vendor/autoload.php';

$factory = new \App\Factory\VehicleFactory();
$directory = new \App\Composite\VehicleDirectory();

$bmw = $factory->createCar('bmw')->move()->musicOn()->stop()->refuel();
$zaz = $factory->createCar('zaz')->move()->stop();

//Instance Car method test doesn't exist
$kia = $factory->createCar('kia')->move()->stop()->test();

$directory->addVehicle($bmw);
$directory->addVehicle($kia);
$directory->addVehicle($zaz);
$directory->removeVehicle($zaz);
echo $directory->showVehicleDetails();