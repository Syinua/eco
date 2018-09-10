<?php

namespace Tests;

use App\Factory\VehicleFactory;
use App\Models\Car;
use PHPUnit\Framework\TestCase;

class VehicleFactoryTest extends TestCase
{

    public function testCanCreateCar()
    {
        $car = (new VehicleFactory())->createCar('kia');
        $this->assertInstanceOf(Car::class, $car);
    }
}