<?php

namespace App\Factory;

use App\Models\Car;
use App\Models\Plane;
use App\Models\Ship;

/**
 * Class SimpleFactory
 *
 * @package App
 */
class SimpleFactory
{
    public function createCar($name): Car
    {
        return new Car($name);
    }

    public function createPlane($name): Plane
    {
        return new Plane($name);
    }

    public function createShip($name): Ship
    {
        return new Ship($name);
    }
}