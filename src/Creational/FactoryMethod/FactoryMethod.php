<?php

namespace App\Creational\FactoryMethod;

use App\Creational\FactoryMethod\Factory\VehicleFactory;
use App\Creational\FactoryMethod\Interfaces\Vehicle;
use App\Creational\FactoryMethod\Vehicles\Bike;
use App\Creational\FactoryMethod\Vehicles\Scooter;

class FactoryMethod extends VehicleFactory
{
    /** @throws \Exception */
    public function drive(string $vehicle, int $miles): bool
    {
        $vehicle = $this->get($vehicle);
        return $vehicle->drive($miles);
    }

    /** @throws \Exception */
    public function get(string $vehicle): Vehicle
    {
        switch ($vehicle) {
            case 'bike':
                return new Bike();
            case 'scooter':
                return new Scooter();
            default:
                throw new \Exception('O veículo informado não existe.');
        }
    }
}