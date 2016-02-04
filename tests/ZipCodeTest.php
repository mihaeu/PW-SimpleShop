<?php declare(strict_types = 1);

/**
 * @covers ZipCode
 */
class ZipCodeTest extends PHPUnit_Framework_TestCase
{
    public function test()
    {
        $zipcode = new ZipCode(12345);
        $this->assertEquals('12345', $zipcode);
    }
}

