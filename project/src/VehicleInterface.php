<?php

namespace App;

/**
 * Interface VehicleInterface
 *
 * @package App
 */
interface VehicleInterface
{

    public function setName($name);

    public function getName();

    /** Vehicle actions */
    public function stop();

    public function emptyLoads($object);

    public function refuel($object = 'gas');
}