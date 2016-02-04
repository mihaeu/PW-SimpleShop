<?php declare(strict_types = 1);

/**
 * @covers Address
 * @covers Country
 * @covers Austria
 *
 * @uses ZipCode
 * @uses City
 * @uses Street
 */
class AddressTest extends PHPUnit_Framework_TestCase
{
    public function testPrints()
    {
        $address = new Address(
            new Street('Musterstr. 1'),
            new City('Musterstadt'),
            new ZipCode(12345),
            new Austria()
        );
        $this->assertEquals('Musterstr. 1' . PHP_EOL
            . '12345 Musterstadt' . PHP_EOL
            . 'Austria', $address->__toString());
    }

    public function testHasCountry()
    {
        $address = new Address(
            new Street('Musterstr. 1'),
            new City('Musterstadt'),
            new ZipCode(12345),
            new Austria()
        );
        $this->assertInstanceOf(Austria::class, $address->country());
    }
}

