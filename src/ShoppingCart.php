<?php declare(strict_types = 1);

class ShoppingCart
{
    /** @var array */
    private $articles;

    public function __construct()
    {
        $this->articles = [];
    }

    public function add(Article $article)
    {
        $this->articles[] = $article;
    }

    public function total() : Money
    {
        $sum = new Euro(0);
        foreach ($this->articles as $article) {
            /** Article $article */
            $sum = $sum->addTo($article->price());
        }
        return $sum;
    }
}
