<?php declare(strict_types = 1);

class GermanyTest extends PHPUnit_Framework_TestCase
{
    public function testPrints()
    {
        $this->assertEquals('Germany', new Germany());
    }
}
