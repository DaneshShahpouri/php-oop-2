<?php

// CLASSE estesa di PRODOTTO = cucce e lettiere
class LitterProd extends Prod
{
    public $material;
    public $colors;

    function __construct(string $name, string $target, DISCOUNT $discount, string $type, string $imgUrl, string $material, array $colors)
    {

        parent::__construct($name, $target, $discount, $type, $imgUrl);

        $this->material = $material;
        $this->colors = $colors;
    }
}
