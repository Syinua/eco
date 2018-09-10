<?php

namespace Tests;

use App\Models\Car;
use PHPUnit\Framework\TestCase;

class VehicleDirectoryTest extends TestCase
{

    public function testShowVehicleDetails()
    {
        $directory = new \App\Composite\VehicleDirectory();
        $directory->addVehicle((new Car('test'))->move());

        $this->assertEquals(
          '<ul><li>test - moving</li></ul>',
          $directory->showVehicleDetails()
        );
    }

    public function testAddVehicle()
    {
        $directory = new \App\Composite\VehicleDirectory();
        $directory->addVehicle((new Car('test'))->move());

        $this->assertArrayHasKey('test', $directory->getVehicles());
    }
}