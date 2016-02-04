<?php declare(strict_types = 1);

class LastName
{
    const MIN_LENGTH = 2;

    /** @var string */
    private $lastName;

    public function __construct(string $lastName)
    {
        $this->ensureMinimumLength($lastName);

        $this->lastName = $lastName;
    }

    public function __toString() : string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    private function ensureMinimumLength(string $lastName)
    {
        if (strlen($lastName) < self::MIN_LENGTH) {
            throw new InvalidArgumentException('Minimum length '.self::MIN_LENGTH);
        }
    }
}

