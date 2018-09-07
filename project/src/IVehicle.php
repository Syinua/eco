<?php

namespace App;

/**
* Interface IVehicle
 * @package App
*/
interface IVehicle
{
    /**
     * @param $object
     *
     * @return string
     */
    public function refuel($object);
}