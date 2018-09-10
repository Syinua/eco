<?php

namespace App\Models;

use App\VehicleInterface;

/**
 * Class Car
 *
 * @package App\Models
 */
class Car extends Vehicle implements VehicleInterface
{

    /**
     * @return $this
     */
    public function move()
    {
        $this->action[] = 'moving';

        return $this;
    }

    /**
     * @return $this
     */
    public function musicOn()
    {
        $this->action[] = 'music switched on';

        return $this;
    }
}