<?php

namespace App\Models;

use App\VehicleInterface;

abstract class Vehicle implements VehicleInterface
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $action = [];

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
     * @return string
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getAction(): array
    {
        return $this->action;
    }

    /**
     * @return $this
     */
    public function stop()
    {
        $this->action[] = 'stopped';

        return $this;
    }

    /**
     * @param $object
     *
     * @return $this
     */
    public function emptyLoads($object): string
    {
        $this->action[] = 'empty loads '.$object;

        return $this;
    }

    /**
     * @param string $object
     *
     * @return $this
     */
    public function refuel($object = 'gas')
    {
        $this->action[] = 'refuel '.$object;

        return $this;
    }
}