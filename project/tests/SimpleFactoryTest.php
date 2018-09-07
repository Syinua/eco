<?php

namespace Tests;

use App\Factory\SimpleFactory;
use App\Models\Car;
use App\Models\Plane;
use App\Models\Ship;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateCar()
    {
        $car = (new SimpleFactory())->createCar('kia');
        $this->assertInstanceOf(Car::class, $car);
    }

    public function testCanCreatePlane()
    {
        $plane = (new SimpleFactory())->createPlane('an-225');
        $this->assertInstanceOf(Plane::class, $plane);
    }

    public function testCanCreateShip()
    {
        $ship = (new SimpleFactory())->createShip('Magellan');
        $this->assertInstanceOf(Ship::class, $ship);
    }
}