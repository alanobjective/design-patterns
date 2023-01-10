<?php

namespace App\Creational\FactoryMethod\Factory;

use App\Creational\FactoryMethod\Interfaces\Vehicle;

abstract class VehicleFactory
{
    public abstract function get(string $vehicle): Vehicle;
}