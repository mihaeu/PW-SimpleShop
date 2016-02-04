<?php declare(strict_types = 1);

/**
 * @covers ArticleName
 */
class ArticleNameTest extends PHPUnit_Framework_TestCase
{
    public function testPrints()
    {
        $articleName = new ArticleName('Musterartikel');
        $this->assertEquals('Musterartikel', $articleName);
    }

    public function testMinimumLength4()
    {
        $this->setExpectedException(InvalidArgumentException::class, 'Minimum length 4');
        new ArticleName('');
    }
}

