<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'address' => '/Address.php',
                'article' => '/Article.php',
                'articledescription' => '/ArticleDescription.php',
                'articlename' => '/ArticleName.php',
                'articletype' => '/ArticleType.php',
                'articletypenormal' => '/ArticleTypeNormal.php',
                'articletypereduced' => '/ArticleTypeReduced.php',
                'austria' => '/Austria.php',
                'city' => '/City.php',
                'country' => '/Country.php',
                'currency' => '/Currency.php',
                'customer' => '/Customer.php',
                'email' => '/Email.php',
                'euro' => '/Euro.php',
                'firstname' => '/FirstName.php',
                'germany' => '/Germany.php',
                'lastname' => '/LastName.php',
                'money' => '/Money.php',
                'shoppingcart' => '/ShoppingCart.php',
                'street' => '/Street.php',
                'zipcode' => '/ZipCode.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
