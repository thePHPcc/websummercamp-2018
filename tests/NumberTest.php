<?php declare(strict_types=1);

class NumberTest extends PHPUnit\Framework\TestCase
{
    public function testCannotBeLessThanOne(): void
    {
        $this->expectException(OutOfBoundsException::class);

        Number::from(0);
    }

    public function testCannotBeGreaterThanFifty(): void
    {
        $this->expectException(OutOfBoundsException::class);

        Number::from(51);
    }

    public function testCanBeRandomized(): void
    {
        $this->assertInstanceOf(Number::class, Number::randomize());
    }

    public function testCanBeConvertedToInt(): void
    {
        $number = random_int(1, 50);

        $this->assertEquals($number, Number::from($number)->asInt());
    }
}
