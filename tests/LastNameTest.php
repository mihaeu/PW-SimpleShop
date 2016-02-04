<?php declare(strict_types = 1);

/**
 * @covers LastName
 */
class LastNameTest extends PHPUnit_Framework_TestCase
{
    public function test()
    {
        $lastName = new LastName('Mustermann');
        $this->assertEquals('Mustermann', $lastName);
    }
}

