<?php
require_once './models/discount.php';

// CLASSE GENERALE
class Prod
{
    public $name;
    public $price;
    public $target;
    public $discount;
    public $type;
    public $imgUrl;

    public function __construct(string $name, float $price, string $target, DISCOUNT $discount, string $type, string $imgUrl)
    {
        $this->name = $name;
        $this->price = $this->getPrice($price, $discount);
        $this->target = $target;
        $this->discount = $discount;
        $this->type = $type;
        $this->imgUrl = $imgUrl;
    }

    public function getPrice($price, $discount)
    {
        if ($discount->getisDiscount()) {
            $price -= ($price * $discount->getdiscount() / 100);
        }

        return number_format((float)$price, 2, '.', '') . ' euro';
    }
}
