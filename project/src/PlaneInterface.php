<?php

namespace App;

/**
 * Interface PlaneInterface
 *
 * @package App
 */
interface PlaneInterface extends VehicleInterface
{

    public function takeOff();

    public function landing();

    public function fly();
}