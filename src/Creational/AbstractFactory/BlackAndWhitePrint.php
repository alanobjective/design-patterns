<?php

namespace App\Creational\AbstractFactory;

use App\Creational\AbstractFactory\Interfaces\Inkjet;
use App\Creational\AbstractFactory\Interfaces\PrintInterface;
use App\Creational\AbstractFactory\Interfaces\Thermal;
use App\Creational\AbstractFactory\Printers\InkjetBlackAndWhitePrinter;
use App\Creational\AbstractFactory\Printers\ThermalBlackAndWhitePrinter;

class BlackAndWhitePrint implements PrintInterface
{

    public function thermal(): Thermal
    {
        return new ThermalBlackAndWhitePrinter();
    }

    public function inkjet(): Inkjet
    {
        return new InkjetBlackAndWhitePrinter();
    }
}