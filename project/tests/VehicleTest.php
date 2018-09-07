<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use ReflectionClass;

class VehicleTest extends TestCase
{
    public function testConstructorCallsInternalMethods()
    {
        $classname = 'App\Models\Vehicle';

        // Get mock, without the constructor being called
        $mock = $this->getMockBuilder($classname)
          ->disableOriginalConstructor()
          ->setMethods(array('setName'))
          ->getMockForAbstractClass();

        // set expectations for constructor calls
        $mock->expects($this->once())
          ->method('setName')
          ->with(
            $this->equalTo('test')
          );

        // now call the constructor
        $reflectedClass = new ReflectionClass($classname);
        $constructor = $reflectedClass->getConstructor();
        $constructor->invoke($mock, 'test');
    }
}