<?php declare(strict_types = 1);

/**
 * @covers ArticleDescription
 */
class ArticleDescriptionTest extends PHPUnit_Framework_TestCase
{
    public function testPrints()
    {
        $articleDescription = new ArticleDescription('');
        $this->assertEquals('', $articleDescription);
    }

    public function testMaximumLength1024()
    {
        $this->setExpectedException(InvalidArgumentException::class, 'Maximum length 1024');
        new ArticleDescription(str_repeat('.', 1025));
    }
}

