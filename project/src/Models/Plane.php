<?php

namespace App\Models;

use App\PlaneInterface;

/**
 * Class Plane
 *
 * @package App\Models
 */
class Plane extends Vehicle implements PlaneInterface
{

    /**
     * @return $this
     */
    public function takeOff()
    {
        $this->action[] = 'took off';

        return $this;
    }

    /**
     * @return $this
     */
    public function landing()
    {
        $this->action[] = 'landing';

        return $this;
    }

    /**
     * @return $this
     */
    public function fly()
    {
        $this->action[] = 'flying';

        return $this;
    }
}