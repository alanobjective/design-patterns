<?php

namespace App\Creational\AbstractFactory\Printers;

use App\Creational\AbstractFactory\Interfaces\Inkjet;

class InkjetColorPrinter implements Inkjet
{

    public function content(): string
    {
        return "Inkjet color printer return";
    }
}