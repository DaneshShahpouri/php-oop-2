<?php
// CLASSE estesa di PRODOTTO = CIBO
class FoodProd extends Prod
{
    public $energy;
    public $expiration;
    public $ingredients;

    function __construct(string $name, float $price, string $target, DISCOUNT $discount, string $type, string $imgUrl, int $energy, string $expiration, array $ingredients)
    {
        parent::__construct($name, $price, $target, $discount, $type, $imgUrl);

        $this->energy = $energy;
        $this->expiration = $expiration;
        $this->ingredients = $ingredients;
    }
}
