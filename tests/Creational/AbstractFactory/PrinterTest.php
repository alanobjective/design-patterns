<?php

namespace Test\App\Creational\FactoryMethod;

use App\Creational\AbstractFactory\BlackAndWhitePrint;
use App\Creational\AbstractFactory\Printer;
use PHPUnit\Framework\TestCase;

class PrinterTest extends TestCase
{

    public function providePrinters(): iterable
    {
        yield 'black_and_white_thermal' => ['name' => 'bw', 'type' => 'thermal', 'expected' => 'Thermal black and white printer return'];
        yield 'black_and_white_inkjet' => ['name' => 'bw', 'type' => 'inkjet', 'expected' => 'Inkjet black and white printer return'];
        yield 'color_thermal' => ['name' => 'color', 'type' => 'thermal', 'expected' => 'Thermal color printer return'];
        yield 'color_inkjet' => ['name' => 'color', 'type' => 'inkjet', 'expected' => 'Inkjet color printer return'];
    }

    /** @dataProvider providePrinters */
    public function test_Print_ShouldReturnExpectedValues(
        string $name,
        string $type,
        string $expectedReturn
    ): void
    {
        $printer = Printer::resolve($name);
        $return = $printer->{$type}();
        $this->assertEquals($expectedReturn, $return->content());
    }

    public function test_Print_ShouldThrowException_WhenNameDoesNotExists(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Printer not found');

        Printer::resolve('unexpectedPrinter');
    }
}