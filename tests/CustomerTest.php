<?php declare(strict_types = 1);

/**
 * @covers Customer
 *
 * @uses Address
 * @uses FirstName
 * @uses LastName
 * @uses Email
 * @uses Street
 * @uses City
 * @uses ZipCode
 * @uses Country
 * @uses ShoppingCart
 * @uses Euro
 * @uses Article
 * @uses Currency
 * @uses ArticleName
 * @uses Money
 * @uses ArticleDescription
 */
class CustomerTest extends PHPUnit_Framework_TestCase
{
    /** @var Customer */
    private $customer;

    public function setUp()
    {
        $this->customer = new Customer(
            new FirstName('Max'),
            new LastName('Mustermann'),
            new Email('max@mustermann.de'),
            new Address(
                new Street('Musterstr. 1'),
                new City('Musterstadt'),
                new ZipCode(12345),
                new Germany()
            )
        );
    }

    public function testPrints()
    {
        $expected = 'Max Mustermann (max@mustermann.de)';
        $this->assertEquals($expected, $this->customer);
    }

    public function testCanAddArticlesToShoppingCart()
    {
        $this->customer->addToShoppingCart(new Article(
            new ArticleName('Example'),
            new ArticleDescription(''),
            new Euro(100)
        ));
        $this->assertEquals('1.00 EUR', $this->customer->shoppingCart()->total());
    }
}

