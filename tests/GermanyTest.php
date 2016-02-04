<?php declare(strict_types = 1);

class GermanyTest extends PHPUnit_Framework_TestCase
{
    public function testPrints()
    {
        $this->assertEquals('Germany', new Germany());
    }

    public function testVat19()
    {
        $austria = new Germany();
        $this->assertEquals(19, $austria->vat());
    }

    public function testReducedVat7()
    {
        $austria = new Germany();
        $this->assertEquals(7, $austria->reducedVat());
    }
}
