<?php declare(strict_types = 1);

interface Country
{
    public function vat() : int;
    public function reducedVat() : int;
    public function __toString() : string;
}
