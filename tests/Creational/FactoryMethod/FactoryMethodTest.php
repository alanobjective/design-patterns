<?php

namespace Test\App\Creational\FactoryMethod;

use App\Creational\FactoryMethod\Factory\VehicleFactory;
use App\Creational\FactoryMethod\FactoryMethod;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    private VehicleFactory $vehicleFactory;
    public function setUp(): void
    {
        $this->vehicleFactory = new FactoryMethod();
    }

    public function provideVehiclesRunMiles(): iterable
    {
        yield 'bike_runs_100_miles' => ['vehicle' => 'bike', 'miles' => 100, 'expects' => true];
        yield 'bike_runs_99_miles' => ['vehicle' => 'bike', 'miles' => 99, 'expects' => true];
        yield 'bike_runs_101_miles' => ['vehicle' => 'bike', 'miles' => 101, 'expects' => false];
        yield 'scooter_runs_101_miles' => ['vehicle' => 'scooter', 'miles' => 101, 'expects' => true];
        yield 'scooter_runs_1000_miles' => ['vehicle' => 'scooter', 'miles' => 1000, 'expects' => true];
        yield 'scooter_runs_99_miles' => ['vehicle' => 'scooter', 'miles' => 99, 'expects' => false];
    }

    /** @dataProvider provideVehiclesRunMiles */
    public function test_BikeShouldRun100Miles_ExpectsReturnTrue(
        string $vehicle,
        int $miles,
        bool $expects
    ): void
    {
        $runMiles = $this->vehicleFactory->drive($vehicle, $miles);
        $this->assertEquals($runMiles, $expects);
    }

    public function test_UnknownVehicleShouldRun_ShouldThrowException(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('O veículo informado não existe.');

        $this->vehicleFactory->drive('fakeVehicle', 100);
    }
}