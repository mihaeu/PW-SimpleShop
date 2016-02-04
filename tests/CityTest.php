<?php declare(strict_types = 1);

/**
 * @covers City
 */
class CityTest extends PHPUnit_Framework_TestCase
{
    public function testPrints()
    {
        $city = new City('Musterstadt');
        $this->assertEquals('Musterstadt', $city);
    }

    public function testMinimumLength3()
    {
        $this->setExpectedException(
            InvalidArgumentException::class,
            'Minimum length 3'
        );
        new City('1');
    }
}

