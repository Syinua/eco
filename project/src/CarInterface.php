<?php

namespace App;

/**
 * Interface CarInterface
 *
 * @package App
 */
interface CarInterface extends VehicleInterface
{

    public function move();

    public function musicOn();
}