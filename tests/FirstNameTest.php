<?php declare(strict_types = 1);

/**
 * @covers FirstName
 */
class FirstNameTest extends PHPUnit_Framework_TestCase
{
    public function test()
    {
        $firstName = new FirstName('Max');
        $this->assertEquals('Max', $firstName);
    }
}

