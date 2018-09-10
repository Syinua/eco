<?php
// src/VehicleInterface.php

namespace App;

/**
 * Interface VehicleInterface
 *
 * @package App
 */
interface VehicleDirectoryInterface
{
    public function showVehicleDetails();

    public function addVehicle(VehicleInterface $vehicle);

    public function removeVehicle(VehicleInterface $vehicle);
}