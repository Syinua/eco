<?php

namespace App\Models;

use App\ShipInterface;

/**
 * Class Ship
 *
 * @package App\Models
 */
class Ship extends Vehicle implements ShipInterface
{
    /**
     * @return $this
     */
    public function swim()
    {
        $this->action[] = 'swimming';

        return $this;
    }
}