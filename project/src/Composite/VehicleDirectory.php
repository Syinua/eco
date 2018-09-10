<?php

namespace App\Composite;

use App\VehicleDirectoryInterface;
use App\VehicleInterface;

class VehicleDirectory implements VehicleDirectoryInterface
{

    /**
     * @var VehicleInterface[]
     */
    private $vehicles;


    /**
     * @param \App\VehicleInterface $vehicle
     */
    public function addVehicle(VehicleInterface $vehicle)
    {
        $name = $vehicle->getName();
        $this->vehicles[$name] = $vehicle;
    }

    /**
     * @param \App\VehicleInterface $vehicle
     */
    public function removeVehicle(VehicleInterface $vehicle)
    {
        $name = $vehicle->getName();
        unset($this->vehicles[$name]);
    }

    /**
     * @return \App\VehicleInterface[]
     */
    public function getVehicles(): array
    {
        return $this->vehicles;
    }

    /**
     * @return string
     */
    public function showVehicleDetails(): string
    {
        if (empty($this->vehicles)) {
            // vehicle is empty.
            return 'vehicle not found';
        }

        $listVehicle = '<ul>';
        foreach ($this->vehicles as $vehicle) {
            $name = $vehicle->getName();
            foreach ($vehicle->getAction() as $action) {
                $listVehicle .= '<li>'.$name.' - '.$action.'</li>';
            }
        }

        $listVehicle .= '</ul>';

        return $listVehicle;
    }
}