<?php
require '../vendor/autoload.php';

$factory = new \App\Factory\SimpleFactory();

$bmw = $factory->createCar('bmw')->move()->musicOn()->stop()->refuel();

$boat = $factory->createShip('boat')->swim()->stop()->refuel();

$helicopter = $factory->createPlane('helicopter')
  ->takeOff()
  ->fly()
  ->stop()
  ->refuel();

$kamaz = $factory->createCar('kamaz')
  ->move()
  ->stop()
  ->emptyLoads('sand')
  ->stop()
  ->refuel();
