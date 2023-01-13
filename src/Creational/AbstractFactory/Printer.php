<?php

namespace App\Creational\AbstractFactory;

use App\Creational\AbstractFactory\Interfaces\PrintInterface;

class Printer
{
    /** @throws \Exception */
    public static function resolve(string $name): PrintInterface
    {
        switch ($name) {
            case 'bw':
                return (new BlackAndWhitePrint);
            case 'color':
                return (new ColorPrint);
            default:
                throw new \Exception('Printer not found');
        }
    }
}