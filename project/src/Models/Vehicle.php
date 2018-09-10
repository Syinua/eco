<?php

namespace App\Models;

use App\Logger\LogWriter;
use App\VehicleInterface;
use Exception;

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
     * @var \App\Logger\LogWriter
     */
    private $log;


    public function __call(string $name, array $args)
    {

        try {
            $class = get_class($this);
            throw new Exception("Instance $class method $name() doesn't exist");
        } catch (\Exception $e) {
            $this->log->error($e->getMessage());
        }

        return $this;
    }

    /**
     * Vehicle constructor.
     *
     * @param string $name
     * @param \App\Logger\LogWriter $log
     */
    public function __construct(string $name, LogWriter $log)
    {
        $this->setName($name);
        $this->log = $log;
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