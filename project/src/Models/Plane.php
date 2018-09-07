<?php

namespace App\Models;

use App\IPlaneVehicle;

class Plane extends Vehicle implements IPlaneVehicle
{

    public function takeOff()
    {
        $this->render('took off');

        return $this;
    }

    public function landing()
    {
        $this->render('landing');

        return $this;
    }

    public function fly()
    {
        $this->render('flying');

        return $this;
    }
}