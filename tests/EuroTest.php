<?php declare(strict_types = 1);

/**
 * @covers Euro
 *
 * @uses Currency
 * @uses Money
 */
class EuroTest extends PHPUnit_Framework_TestCase
{
    public function testPrints()
    {
        $euro = new Euro(0);
        $this->assertEquals('0.00 EUR', $euro->__toString());
    }
}

