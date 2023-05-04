<?php
require_once './models/prod.php';

// FOOD
$croccantini = new FoodProd('croccantini', 19.90, 'Cani', new Discount(false, 0), 5, '20-9-230', ['carne di manzo', 'cipolla', 'aromi']);
var_dump($croccantini);

// TOY
$ball = new ToyProd('Palla Rossa', 9.99, 'Cani', new Discount(true, 20), 2, ['white', 'red'], 'Petologo');
var_dump($ball);

//LITTERS
$small_litters = new LitterProd('Lettiera Piccola', 49.99, 'Gatti', new Discount(true, 40));
