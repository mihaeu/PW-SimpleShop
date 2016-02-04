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
 * @uses Germany
 * @uses Austria
 */
class ShoppingCartTest extends PHPUnit_Framework_TestCase
{
    public function testComputesSumOfArticles()
    {
        $shoppingCart = new ShoppingCart(new Germany());
        $article = new Article(
            new ArticleName('Test'),
            new ArticleDescription(''),
            new Euro(1000)
        );
        $shoppingCart->add($article);
        $shoppingCart->add($article);

        $this->assertEquals(new Money(2380, new Currency('EUR')), $shoppingCart->total());
    }

    public function testComputesReducedVatForTheRightCountry()
    {
        $shoppingCart = new ShoppingCart(new Austria());
        $article = new Article(
            new ArticleName('Test'),
            new ArticleDescription(''),
            new Euro(1000),
            new ArticleTypeReduced()
        );
        $shoppingCart->add($article);
        $shoppingCart->add($article);

        $this->assertEquals(new Money(2200, new Currency('EUR')), $shoppingCart->total());

    }
}

