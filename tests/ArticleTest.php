<?php declare(strict_types = 1);

/**
 * @covers Article
 *
 * @uses Article
 * @uses Money
 * @uses Euro
 * @uses ArticleName
 * @uses ArticleDescription
 * @uses Currency
 */
class ArticleTest extends PHPUnit_Framework_TestCase
{
    public function testPrints()
    {
        $article = new Article(
            new ArticleName('Gummiboot'),
            new ArticleDescription(''),
            new Euro(100)
        );
        $this->assertEquals('Gummiboot (1.00 EUR)', $article->__toString());
    }

    public function testHasPrice()
    {
        $article = new Article(
            new ArticleName('Gummiboot'),
            new ArticleDescription(''),
            new Euro(100)
        );
        $this->assertEquals(new Euro(100), $article->price());
    }
}

