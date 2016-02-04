<?php declare(strict_types = 1);

/**
 * @covers ShoppingCart
 *
 * @uses Euro
 * @uses Article
 * @uses Currency
 * @uses ArticleDescription
 * @uses ArticleName
 * @uses Money
 */
class ShoppingCartTest extends PHPUnit_Framework_TestCase
{
    public function testComputesSumOfArticles()
    {
        $shoppingCart = new ShoppingCart();
        $article = new Article(
            new ArticleName('Test'),
            new ArticleDescription(''),
            new Euro(1000)
        );
        $shoppingCart->add($article);
        $shoppingCart->add($article);

        $this->assertEquals(new Money(2000, new Currency('EUR')), $shoppingCart->total());
    }
}

