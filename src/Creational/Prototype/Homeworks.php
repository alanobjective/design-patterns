<?php

namespace App\Creational\Prototype;

class Homeworks
{
    private array $homeworks;

    public function addHomework(HomeWork $homeWork): void
    {
        $this->homeworks[] = $homeWork;
    }
}
