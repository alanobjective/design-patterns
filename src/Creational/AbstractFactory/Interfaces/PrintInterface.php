<?php

namespace App\Creational\AbstractFactory\Interfaces;

interface PrintInterface
{
    public function thermal(): Thermal;
    public function inkjet(): Inkjet;
}