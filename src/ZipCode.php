<?php declare(strict_types = 1);

class ZipCode
{
    /** @var int */
    private $zipCode;

    public function __construct($zipCode)
    {
        $this->zipCode = $zipCode;
    }
    
    public function __toString() : string
    {
        return (string) $this->zipCode;
    }
}

