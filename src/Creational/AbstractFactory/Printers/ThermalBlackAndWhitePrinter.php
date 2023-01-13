<?php

namespace App\Creational\AbstractFactory\Printers;

use App\Creational\AbstractFactory\Interfaces\Thermal;

class ThermalBlackAndWhitePrinter implements Thermal
{

    public function content(): string
    {
        return "Thermal black and white printer return";
    }
}