<?php declare(strict_types = 1);

class AustriaTest extends PHPUnit_Framework_TestCase
{
    public function testPrints()
    {
        $this->assertEquals('Austria', new Austria());
    }

    public function testVat20()
    {
        $austria = new Austria();
        $this->assertEquals(20, $austria->vat());
    }

    public function testReducedVat10()
    {
        $austria = new Austria();
        $this->assertEquals(10, $austria->reducedVat());
    }
}
