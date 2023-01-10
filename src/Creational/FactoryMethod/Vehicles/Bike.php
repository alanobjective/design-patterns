<?php

namespace App\Creational\FactoryMethod\Vehicles;

use App\Creational\FactoryMethod\Interfaces\Vehicle;

class Bike implements Vehicle
{

    public function drive(int $miles): bool
    {
        if ($miles <= 100) {
            return true;
        }
        return false;
    }
}