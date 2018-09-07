<?php

namespace Tests;

use App\Models\Car;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{

    public function testCanCarMove()
    {
        $car = (new Car('kia'));
        $this->assertTrue(
          method_exists($car, 'move'),
          'Class does not have method move'
        );

        $this->assertInstanceOf(Car::class, $car->move());
    }

    public function testCanCarMusicOn()
    {
        $car = (new Car('kia'));
        $this->assertTrue(
          method_exists($car, 'musicOn'),
          'Class does not have method move'
        );

        $this->assertInstanceOf(Car::class, $car->musicOn());
    }
}