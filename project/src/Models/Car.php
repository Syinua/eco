<?php

namespace App\Models;

use App\ICarVehicle;

class Car extends Vehicle implements ICarVehicle
{

    public function move()
    {
        $this->render('moving');

        return $this;
    }

    public function musicOn()
    {
        $this->render('music switched on');

        return $this;
    }
}