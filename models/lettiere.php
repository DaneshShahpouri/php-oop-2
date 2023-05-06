<?php
require_once './Traits/colors.php';
// CLASSE estesa di PRODOTTO = cucce e lettiere
class LitterProd extends Prod
{
    use colors;
    public $material;

    function __construct(string $name, string $target, DISCOUNT $discount, string $type, string $imgUrl, string $material,)
    {

        parent::__construct($name, $target, $discount, $type, $imgUrl);

        $this->material = $material;
    }
}
