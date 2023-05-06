<?php
require_once './models/discount.php';

// CLASSE GENERALE
class Prod
{
    protected $name;
    protected $target;
    protected $discount;
    protected $type;
    protected $imgUrl;

    public function __construct(string $name, string $target, DISCOUNT $discount, string $type, string $imgUrl)
    {
        $this->name = $name;
        $this->target = $target;
        $this->discount = $discount;
        $this->type = $type;
        $this->imgUrl = $imgUrl;
    }

    // GET function
    public function getName()
    {
        return $this->name;
    }

    public function getTarget()
    {
        return $this->target;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getImgUrl()
    {
        return $this->imgUrl;
    }
}
