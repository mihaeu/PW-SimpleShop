<?php declare(strict_types = 1);

class Customer
{
    /** @var FirstName */
    private $firstName;

    /** @var LastName */
    private $lastName;

    /** @var Email */
    private $email;

    /** @var Address */
    private $address;

    /** @var ShoppingCart */
    private $shoppingCart;


    public function __construct(
        FirstName $firstName,
        LastName $lastName,
        Email $email,
        Address $address
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->address = $address;

        $this->shoppingCart = new ShoppingCart($this->address->country());
    }

    public function __toString() : string
    {
        return $this->firstName . ' '
            . $this->lastName . ' ('
            . $this->email .')';
    }

    public function addToShoppingCart(Article $article)
    {
        $this->shoppingCart->add($article);
    }

    public function shoppingCart() : ShoppingCart
    {
        return $this->shoppingCart;
    }
}

