<?php

namespace App\Creational\Builder;

abstract class Chair
{
    public function setPart(string $key, object $value): void {}
}
