<?php declare(strict_types=1);

class Number
{
    /**
     * @var int
     */
    private $number;

    public static function from(int $number): Number
    {
        return new Number($number);
    }

    public static function randomize()
    {
        return new Number(random_int(1, 50));
    }

    /**
     * @throws OutOfBoundsException
     */
    private function __construct(int $number)
    {
        $this->ensureNotLessThanOne($number);
        $this->ensureNotGreaterThanFifty($number);

        $this->number = $number;
    }

    public function asInt(): int
    {
        return $this->number;
    }

    private function ensureNotLessThanOne(int $number): void
    {
        if ($number < 1) {
            throw new OutOfBoundsException;
        }
    }

    private function ensureNotGreaterThanFifty($number): void
    {
        if ($number > 50) {
            throw new OutOfBoundsException;
        }
    }
}
