<?php declare(strict_types=1);

class EuroNumberTest extends PHPUnit\Framework\TestCase
{
    public function testIgnoreMe()
    {
        // Pointless test because all other test methods are initially commented out
        $this->assertTrue(true);
    }

    /* #1
    public function testCannotBeLessThanOne(): void
    {
        $this->expectException(OutOfBoundsException::class);

        EuroNumber::from(0);
    }
    */

    /* #2
    public function testCannotBeGreaterThanTen(): void
    {
        $this->expectException(OutOfBoundsException::class);

        EuroNumber::from(11);
    }
    */

    /* #3
    public function testCanBeRandomized(): void
    {
        $this->assertInstanceOf(EuroNumber::class, Number::randomize());
    }
    */

    /* #4
    public function testCanBeConvertedToInt(): void
    {
        $number = random_int(1, 10);

        $this->assertEquals($number, EuroNumber::from($number)->asInt());
    }
    */
}
