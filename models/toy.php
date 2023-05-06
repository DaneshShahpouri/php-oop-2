<?php

// CLASSE estesa di PRODOTTO = Giocattoli
class ToyProd extends Prod
{
    protected $quality;
    protected $colors;
    protected $brand;

    function __construct(string $name, string $target, DISCOUNT $discount, string $type, string $imgUrl, int $quality, array $colors, string $brand)
    {
        parent::__construct($name, $target, $discount, $type, $imgUrl);

        $this->quality = $quality;
        $this->colors = $colors;
        $this->brand = $brand;
    }

    public function setQuality()
    {

        if ($this->quality >= 1 && $this->quality <= 3) {
            $this->quality = $this->quality;
        } else {
            throw new Exception('La qualità deve essere rappresentata da un numero intero compreso tra 1 e 3');
        }
    }

    public function getQuality()
    {
        return $this->quality;
    }

    public function getColors()
    {
        return $this->colors;
    }

    public function getBrand()
    {
        return $this->brand;
    }
}
