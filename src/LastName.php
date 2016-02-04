<?php declare(strict_types = 1);

class LastName
{
    /** @var string */
    private $lastName;

    public function __construct(string $lastName)
    {
        $this->lastName = $lastName;
    }

    public function __toString() : string
    {
        return $this->lastName;
    }
}

