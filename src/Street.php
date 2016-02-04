<?php declare(strict_types = 1);

class Street
{
    const MIN_LENGTH = 5;

    /** @var string */
    private $street;

    public function __construct(string $street)
    {
        $this->ensureMinimumLength($street);

        $this->street = $street;
    }

    public function __toString() : string
    {
        return $this->street;
    }

    private function ensureMinimumLength(string $street)
    {
        if (strlen($street) < self::MIN_LENGTH) {
            throw new InvalidArgumentException('Minimum length 5');
        }
    }
}

