<?php

namespace App\Models;

use App\IVehicle;

abstract class Vehicle implements IVehicle
{

    /**
     * @var string
     */
    protected $name;

    /**
     * Vehicle constructor.
     *
     * @param string $name
     */
    public function __construct($name)
    {
        $this->setName($name);
    }

    /**
     * Setter for the name
     *
     * @param string $name
     *
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return $this
     */
    public function stop()
    {
        $this->render('stopped');

        return $this;
    }

    /**
     * @param $object
     *
     * @return $this
     */
    public function emptyLoads($object)
    {
        $this->render('empty loads', $object);

        return $this;
    }

    /**
     * @param string $object
     *
     * @return $this
     */
    public function refuel($object = 'gas')
    {
        $this->render('refuel', $object);

        return $this;
    }


    /**
     * @param $string
     * @param null $object
     */
    protected function render($string, $object = null)
    {
        echo '<b>'.$this->name.'</b> '.$string.' '.$object.'</br>';
    }

}