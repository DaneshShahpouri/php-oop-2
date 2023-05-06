<?php
class Discount
{
    protected $price;
    protected $isDiscount;
    protected $discount;

    public function __construct(float $price, bool $isDiscount, int $discount)
    {
        $this->price = $price;
        $this->isDiscount = $isDiscount;
        $this->discount = $discount;
    }


    public function getPrice()
    {
        return number_format((float)$this->price, 2, '.', '') . ' euro';
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function getisDiscount()
    {
        return $this->isDiscount;
    }

    public function setPrice()
    {
        if ($this->isDiscount) {
            $this->price -= ($this->price * $this->discount / 100);
        }
    }
}
