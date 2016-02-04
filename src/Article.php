<?php declare(strict_types = 1);

class Article
{
    /** @var ArticleName */
    private $name;

    /** @var ArticleDescription */
    private $description;

    /** @var Euro */
    private $price;

    public function __construct(
        ArticleName $name,
        ArticleDescription $description,
        Euro $price
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function price() : Euro
    {
        return $this->price;
    }

    public function __toString() : string
    {
        return $this->name . ' (' . $this->price . ')';
    }
}

