<?php

namespace App\Creational\AbstractFactory;

use App\Creational\AbstractFactory\Interfaces\Inkjet;
use App\Creational\AbstractFactory\Interfaces\PrintInterface;
use App\Creational\AbstractFactory\Interfaces\Thermal;
use App\Creational\AbstractFactory\Printers\InkjetColorPrinter;
use App\Creational\AbstractFactory\Printers\ThermalColorPrinter;

class ColorPrint implements PrintInterface
{

    public function thermal(): Thermal
    {
        return new ThermalColorPrinter();
    }

    public function inkjet(): Inkjet
    {
        return new InkjetColorPrinter();
    }
}