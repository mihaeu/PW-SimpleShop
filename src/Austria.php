<?php declare(strict_types = 1);

class Austria implements Country
{
    const VAT = 20;
    const REDUCED_VAT = 10;

    public function vat() : int
    {
        return self::VAT;
    }

    public function reducedVat() : int
    {
        return self::REDUCED_VAT;
    }

    public function __toString() : string
    {
        return 'Austria';
    }
}
