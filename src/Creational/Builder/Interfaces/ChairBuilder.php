<?php

namespace App\Creational\Builder\Interfaces;

use App\Creational\Builder\Chair;

interface ChairBuilder
{
    public function createChair(): void;
    public function addSeat(): void;
    public function addWheels(): void;
    public function build(): Chair;
}
