<?php declare(strict_types = 1);

class City
{
    const MIN_LENGTH = 3;
    /** @var string */
    private $city;

    public function __construct(string $city)
    {
        $this->ensureMinimumLength($city);

        $this->city = $city;
    }

    public function __toString() : string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    private function ensureMinimumLength(string $city)
    {
        if (strlen($city) < self::MIN_LENGTH) {
            throw new InvalidArgumentException('Minimum length 3');
        }
    }
}

