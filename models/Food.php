<?php
// CLASSE estesa di PRODOTTO = CIBO
class FoodProd extends Prod
{
    protected $energy;
    protected $expiration;
    protected $ingredients;

    function __construct(string $name, string $target, DISCOUNT $discount, string $type, string $imgUrl, int $energy, string $expiration, array $ingredients)
    {
        parent::__construct($name, $target, $discount, $type, $imgUrl);

        $this->energy = $energy;
        $this->expiration = $expiration;
        $this->ingredients = $ingredients;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function getExpiration()
    {
        return $this->expiration;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }
}
