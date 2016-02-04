<?php declare(strict_types = 1);

class FirstName
{
    const MIN_LENGTH = 2;
    /** @var string */
    private $firstName;

    public function __construct(string $firstName)
    {
        $this->ensureMinimumLength($firstName);

        $this->firstName = $firstName;
    }
    
    public function __toString() : string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    private function ensureMinimumLength(string $firstName)
    {
        if (strlen($firstName) < self::MIN_LENGTH) {
            throw new InvalidArgumentException('Minimum length '.self::MIN_LENGTH);
        }
    }
}

