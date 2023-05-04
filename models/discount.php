<?php
class Discount
{
    private $isDiscount;
    private $discount;

    public function getDiscount()
    {
        return $this->discount;
    }

    public function getisDiscount()
    {
        return $this->isDiscount;
    }

    public function __construct(bool $isDiscount, int $discount)
    {
        $this->isDiscount = $isDiscount;
        $this->discount = $discount;
    }
}
