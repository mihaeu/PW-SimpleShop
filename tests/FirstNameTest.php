<?php declare(strict_types = 1);

/**
 * @covers FirstName
 */
class FirstNameTest extends PHPUnit_Framework_TestCase
{
    public function testPrints()
    {
        $firstName = new FirstName('Max');
        $this->assertEquals('Max', $firstName);
    }

    public function testMinimumLength2()
    {
        $this->setExpectedException(InvalidArgumentException::class, 'Minimum length 2');
        new FirstName('1');
    }
}

