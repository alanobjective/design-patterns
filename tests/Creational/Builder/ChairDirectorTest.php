<?php

namespace Test\App\Creational\Builder;

use App\Creational\Builder\ChairDirector;
use App\Creational\Builder\Chairs\Ergonomic;
use App\Creational\Builder\Chairs\ErgonomicChair;
use App\Creational\Builder\Chairs\Gamer;
use App\Creational\Builder\Chairs\GamerChair;
use App\Creational\Builder\Chairs\Office;
use App\Creational\Builder\Chairs\OfficeChair;
use PHPUnit\Framework\TestCase;

class ChairDirectorTest extends TestCase
{
    public function test_CreateChair_ShouldReturnOfficeChairClass(): void
    {
        $officeChair = new OfficeChair();
        $newChair = (new ChairDirector())->build($officeChair);

        $this->assertInstanceOf(Office::class, $newChair);
    }

    public function test_CreateChair_ShouldReturnGamerChairClass(): void
    {
        $gameChair = new GamerChair();
        $newChair = (new ChairDirector())->build($gameChair);

        $this->assertInstanceOf(Gamer::class, $newChair);
    }

    public function test_CreateChair_ShouldReturnErgonomicChairClass(): void
    {
        $ergonomicChair = new ErgonomicChair();
        $newChair = (new ChairDirector())->build($ergonomicChair);

        $this->assertInstanceOf(Ergonomic::class, $newChair);
    }
}
