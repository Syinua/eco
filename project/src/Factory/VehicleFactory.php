<?php
// src/Factory/VehicleFactory.php

namespace App\Factory;

use App\Models\Car;

/**
 * Class VehicleFactory
 *
 * @package App
 */
class VehicleFactory
{

    /**
     * @param $name
     *
     * @return \App\Models\Car
     */
    public function createCar($name): Car
    {
        return new Car($name);
    }
}