<?php declare(strict_types = 1);

/**
 * @covers Street
 */
class StreetTest extends PHPUnit_Framework_TestCase
{
    public function testPrints()
    {
        $street = new Street('1 Musterstr.');
        $this->assertEquals('1 Musterstr.', $street);
    }

    public function testMinimumLength5()
    {
        $this->setExpectedException(InvalidArgumentException::class, 'Minimum length 5');
        new Street('1');
    }
}

