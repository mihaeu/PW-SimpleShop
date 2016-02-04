<?php declare(strict_types = 1);

class Germany implements Country
{
    const VAT = 19;
    const REDUCED_VAT = 7;

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
        return 'Germany';
    }
}
