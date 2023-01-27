<?php

namespace App\Creational\Builder\Chairs;

use App\Creational\Builder\Chair;
use App\Creational\Builder\Chairs\Parts\Seat;
use App\Creational\Builder\Chairs\Parts\Wheel;
use App\Creational\Builder\Interfaces\ChairBuilder;

class ErgonomicChair implements ChairBuilder
{
    private Ergonomic $ergonomic;

    public function createChair(): void
    {
        $this->ergonomic = new Ergonomic();
    }

    public function addSeat(): void
    {
        $this->ergonomic->setPart('ergonomic-seat', new Seat());
    }

    public function addWheels(): void
    {
        $this->ergonomic->setPart('metal-wheels', new Wheel());
    }

    public function build(): Chair
    {
        return $this->ergonomic;
    }
}
