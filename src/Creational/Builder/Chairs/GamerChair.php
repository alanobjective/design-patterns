<?php

namespace App\Creational\Builder\Chairs;

use App\Creational\Builder\Chair;
use App\Creational\Builder\Chairs\Parts\Seat;
use App\Creational\Builder\Chairs\Parts\Wheel;
use App\Creational\Builder\Interfaces\ChairBuilder;

class GamerChair implements ChairBuilder
{
    private Gamer $gamer;

    public function createChair(): void
    {
        $this->gamer = new Gamer();
    }

    public function addSeat(): void
    {
        $this->gamer->setPart('gamer-seat', new Seat());
    }

    public function addWheels(): void
    {
        $this->gamer->setPart('metal-wheels', new Wheel());
    }

    public function build(): Chair
    {
        return $this->gamer;
    }
}
