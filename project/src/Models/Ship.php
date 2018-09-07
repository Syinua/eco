<?php

namespace App\Models;

use App\IShipVehicle;

class Ship extends Vehicle implements IShipVehicle
{

    public function swim()
    {
        $this->render('swimming');

        return $this;
    }

}