<?php
// src/Factory/VehicleFactory.php

namespace App\Factory;

use App\Logger\LogWriter;
use App\Models\Car;
use App\Models\Plane;
use App\Models\Ship;

/**
 * Class VehicleFactory
 *
 * @package App
 */
class VehicleFactory
{

    /**
     * @param string $name
     * @param \App\Logger\LogWriter $log
     *
     * @return \App\Models\Car
     */
    public function createCar(string $name, LogWriter $log): Car
    {
        return new Car($name, $log);
    }

    /**
     * @param string $name
     * @param \App\Logger\LogWriter $log
     *
     * @return \App\Models\Ship
     */
    public function createShip(string $name, LogWriter $log): Ship
    {
        return new Ship($name, $log);
    }

    /**
     * @param string $name
     * @param \App\Logger\LogWriter $log
     *
     * @return \App\Models\Plane
     */
    public function createPlane(string $name, LogWriter $log): Plane
    {
        return new Plane($name, $log);
    }
}