<?php

namespace App\Creational\AbstractFactory\Printers;

use App\Creational\AbstractFactory\Interfaces\Inkjet;

class InkjetBlackAndWhitePrinter implements Inkjet
{

    public function content(): string
    {
        return "Inkjet black and white printer return";
    }
}