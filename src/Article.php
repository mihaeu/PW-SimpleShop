<?php declare(strict_types = 1);

class Article
{
    /** @var ArticleName */
    private $name;

    /** @var ArticleDescription */
    private $description;

    /** @var Euro */
    private $price;

    /** @var ArticleType */
    private $type;

    public function __construct(
        ArticleName $name,
        ArticleDescription $description,
        Euro $price,
        ArticleType $type = null
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;

        if (null === $type) {
            $type = new ArticleTypeNormal();
        }
        $this->type = $type;
    }

    public function price() : Euro
    {
        return $this->price;
    }

    public function type() : ArticleType
    {
        return $this->type;
    }

    public function __toString() : string
    {
        return $this->name . ' (' . $this->price . ')';
    }
}

