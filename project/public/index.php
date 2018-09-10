<?php
require '../vendor/autoload.php';

$factory = new \App\Factory\VehicleFactory();
$directory = new \App\Composite\VehicleDirectory();

try {
    $logger = new App\Logger\LogWriter(
      __DIR__.'/../logs/log-'.date('d-M-Y').'.txt'
    );
} catch (Exception $e) {
    var_dump($e->getMessage());
}

$bmw = $factory->createCar('bmw', $logger)->move()->musicOn()->stop()->refuel();
$zaz = $factory->createCar('zaz', $logger)->move()->stop();

//Instance Car method test doesn't exist
$kia = $factory->createCar('kia', $logger)->move()->stop()->test();

$directory->addVehicle($bmw);
$directory->addVehicle($kia);
$directory->addVehicle($zaz);
$directory->removeVehicle($zaz);
echo $directory->showVehicleDetails();