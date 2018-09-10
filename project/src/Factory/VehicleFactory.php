<?php
// src/Factory/VehicleFactory.php

namespace App\Factory;

use App\Logger\LogWriter;
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
     * @param \App\Logger\LogWriter $log
     *
     * @return \App\Models\Car
     */
    public function createCar($name, LogWriter $log): Car
    {
        return new Car($name, $log);
    }
}