<?php

namespace App\Creational\AbstractFactory\Printers;

use App\Creational\AbstractFactory\Interfaces\Thermal;

class ThermalColorPrinter implements Thermal
{

    public function content(): string
    {
        return "Thermal color printer return";
    }
}