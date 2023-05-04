<?php
require_once './models/discount.php';

// CLASSE GENERALE
class Prod
{
    public $name;
    public $price;
    public $target;
    public $discount;

    public function __construct(string $name, float $price, string $target, DISCOUNT $discount)
    {
        $this->name = $name;
        $this->price = $this->getPrice($price, $discount);
        $this->target = $target;
        $this->discount = $discount;
    }

    public function getPrice($price, $discount)
    {
        if ($discount->getisDiscount()) {
            $price -= ($price * $discount->getdiscount() / 100);
        }

        return number_format((float)$price, 2, '.', '') . ' euro';
    }
}


// CLASSE estesa di PRODOTTO = CIBO
class FoodProd extends Prod
{
    public $energy;
    public $expiration;
    public $ingredients;

    function __construct(string $name, float $price, string $target, DISCOUNT $discount, int $energy, string $expiration, array $ingredients)
    {
        parent::__construct($name, $price, $target, $discount);

        $this->energy = $energy;
        $this->expiration = $expiration;
        $this->ingredients = $ingredients;
    }
}


// CLASSE estesa di PRODOTTO = Giocattoli
class ToyProd extends Prod
{
    protected $quality;
    public $colors;
    public $brand;

    function __construct(string $name, float $price, string $target, DISCOUNT $discount, int $quality, array $colors, string $brand)
    {
        parent::__construct($name, $price, $target, $discount);

        $this->quality = $this->getQuality($quality);
        $this->colors = $colors;
        $this->brand = $brand;
    }

    public function getQuality($quality)
    {

        if ($quality > 0 && $quality < 4) {

            if ($quality == 0) {
                return 'scarsa';
            } else if ($quality == 1 || $quality == 2) {
                return 'media';
            } else {
                return 'top';
            }
        } else {
            return 'dato non corretto';
        }
    }
}

// CLASSE estesa di PRODOTTO = cucce e lettiere
class LitterProd extends Prod
{
    public $material;
    public $colors;

    public function __construct(string $material,)
    {
    }
}
