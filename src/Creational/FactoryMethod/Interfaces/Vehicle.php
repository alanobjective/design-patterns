<?php

namespace App\Creational\FactoryMethod\Interfaces;

interface Vehicle
{
    public function drive(int $miles): bool;
}