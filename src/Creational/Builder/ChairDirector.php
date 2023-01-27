<?php

namespace App\Creational\Builder;

use App\Creational\Builder\Interfaces\ChairBuilder;

class ChairDirector
{
    public function build(ChairBuilder $builder): Chair
    {
        $builder->createChair();
        $builder->addSeat();
        $builder->addWheels();

        return $builder->build();
    }
}
