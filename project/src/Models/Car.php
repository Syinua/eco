<?php

namespace App\Models;

use App\CarInterface;

/**
 * Class Car
 *
 * @package App\Models
 */
class Car extends Vehicle implements CarInterface
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