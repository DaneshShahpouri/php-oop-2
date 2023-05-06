<?php
require_once './Traits/colors.php';

// CLASSE estesa di PRODOTTO = Giocattoli
class ToyProd extends Prod
{
    use colors;
    protected $quality;
    protected $brand;

    function __construct(string $name, string $target, DISCOUNT $discount, string $type, string $imgUrl, int $quality, string $brand)
    {
        parent::__construct($name, $target, $discount, $type, $imgUrl);

        $this->quality = $quality;
        $this->brand = $brand;
    }

    public function setQuality($quality)
    {

        if ($quality >= 1 && $quality <= 3) {
            $this->quality = $quality;
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
