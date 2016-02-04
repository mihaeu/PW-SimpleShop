<?php declare(strict_types = 1);

class ShoppingCart
{
    /** @var array */
    private $articles;

    /** @var ShoppingCart */
    private $country;

    public function __construct(Country $country)
    {
        $this->country = $country;
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
            $price = $this->priceIncludingVat($article);
            $sum = $sum->addTo($price);
        }
        return $sum;
    }

    private function priceIncludingVat(Article $article) : Money
    {
        if ($article->type() instanceof ArticleTypeNormal) {
            $taxFactor = 1 + $this->country->vat() / 100;
        } else {
            $taxFactor = 1 + $this->country->reducedVat() / 100;
        }

        $price = (int)($article->price()->amount() * $taxFactor);
        return new Euro($price);
    }
}
