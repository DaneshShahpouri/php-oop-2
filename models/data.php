<?php
require_once './models/prod.php';

// FOOD
$croccantini = new FoodProd('croccantini', 19.90, 'Cani', new Discount(false, 0), 'food', 5, '20-9-230', ['carne di manzo', 'cipolla', 'aromi']);


// TOY
$ball = new ToyProd('Palla Rossa', 9.99, 'Cani', new Discount(true, 20), 'toy', 2, ['white', 'red'], 'Petologo');


//LITTERS
$small_litter = new LitterProd('Lettiera piccola', 49.99, 'Gatti', new Discount(true, 40), 'litter', 'plastica', ['blu']);


$dataProd = [$croccantini, $ball, $small_litter];

var_dump($dataProd);
