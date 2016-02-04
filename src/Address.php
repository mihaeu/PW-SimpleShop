<?php declare(strict_types = 1);

class Address
{
    /** @var Street */
    private $street;

    /** @var City */
    private $city;

    /** @var ZipCode */
    private $zipCode;

    /** @var Country */
    private $country;

    public function __construct(Street $street, City $city, ZipCode $zipCode, Country $country)
    {
        $this->street = $street;
        $this->city = $city;
        $this->zipCode = $zipCode;
        $this->country = $country;
    }

    public function __toString() : string
    {
        return $this->street . PHP_EOL
            . $this->zipCode . ' '
            . $this->city . PHP_EOL
            . $this->country;
    }
}

