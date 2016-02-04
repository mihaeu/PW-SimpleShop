<?php declare(strict_types = 1);

class AustriaTest extends PHPUnit_Framework_TestCase
{
    public function testPrints()
    {
        $this->assertEquals('Austria', new Austria());
    }
}
