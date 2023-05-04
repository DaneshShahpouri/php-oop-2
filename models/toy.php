<?php

// CLASSE estesa di PRODOTTO = Giocattoli
class ToyProd extends Prod
{
    protected $quality;
    public $colors;
    public $brand;

    function __construct(string $name, float $price, string $target, DISCOUNT $discount, string $type, string $imgUrl, int $quality, array $colors, string $brand)
    {
        parent::__construct($name, $price, $target, $discount, $type, $imgUrl);

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
