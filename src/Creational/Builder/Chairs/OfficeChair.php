<?php

namespace App\Creational\Builder\Chairs;

use App\Creational\Builder\Chair;
use App\Creational\Builder\Chairs\Parts\Seat;
use App\Creational\Builder\Chairs\Parts\Wheel;
use App\Creational\Builder\Interfaces\ChairBuilder;

class OfficeChair implements ChairBuilder
{
    private Office $office;

    public function createChair(): void
    {
        $this->office = new Office();
    }

    public function addSeat(): void
    {
        $this->office->setPart('office-seat', new Seat());
    }

    public function addWheels(): void
    {
        $this->office->setPart('plastic-wheels', new Wheel());
    }

    public function build(): Chair
    {
        return $this->office;
    }
}
