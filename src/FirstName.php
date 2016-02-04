<?php declare(strict_types = 1);

class FirstName
{
    /** @var string */
    private $firstName;

    public function __construct(string $firstName)
    {
        $this->firstName = $firstName;
    }
    
    public function __toString() : string
    {
        return $this->firstName;
    }
}

