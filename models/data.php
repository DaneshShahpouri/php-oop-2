<?php
require_once './models/prod.php';
require_once './models/food.php';
require_once './models/toy.php';
require_once './models/lettiere.php';

// FOOD
$croccantiniCani = new FoodProd('croccantini Cani', 'Cani', new Discount(19.90, false, 0), 'food', 'https://shop-cdn-m.mediazs.com/bilder/royal/canin/maxi/adult/crocchette/per/cani/6/400/icon_topseller_1_2022_02_24t122255_148_6.jpg', 5, '20-9-2030', ['carne di manzo', 'cipolla', 'aromi']);
$croccantiniGatti = new FoodProd('croccantini Gatti', 'Gatti', new Discount(16.90, false, 0), 'food', 'https://shop-cdn-m.mediazs.com/bilder/smilla/adult/sterilised/manzo/crocchette/per/gatti/4/800/smilla_sterilised_beef_1kg_1000x1000_4.jpg', 4, '04-3-2029', ['tonno', 'salmone']);
$scatoletta = new FoodProd('scatoletta di pesce', 'Gatti', new Discount(10.90, true, 10), 'food', 'https://shop-cdn-m.mediazs.com/bilder/macs/cat/mono/sensitive/agnello/2/400/1_63327_pla_propet_macs_cat_sensitive_lamm_200g_hs_01_0_2.jpg', 5, '04-3-2059', ['carne di vitello', 'sale']);
$scatolettaLow = new FoodProd('scatoletta di pesce - economica', 'Gatti', new Discount(2.90, false, 0), 'food', 'https://shop-cdn-m.mediazs.com/bilder/macs/cat/mono/sensitive/agnello/2/400/1_63327_pla_propet_macs_cat_sensitive_lamm_200g_hs_01_0_2.jpg', 2, '04-3-2059', ['carne di topo', 'poco sale']);


// TOY
$ball = new ToyProd('Palla - cani', 'Cani', new Discount(9.99, true, 20), 'toy', 'https://i.etsystatic.com/16175628/r/il/1be8d0/2097589535/il_1588xN.2097589535_eveb.jpg', 2, ['white', 'red'], 'Petologo');
$ballCat = new ToyProd('Palla Rossa', 'Gatti', new Discount(5.99, true, 15), 'toy', 'https://shop-cdn-m.mediazs.com/bilder/palle/matte/trixie/1/400/19594_PLA_Trixie_Noppenbaelle__4_Stueck_1.jpg', 3, ['red'], 'Petologo');
$billionair = new ToyProd('Il Milionario - per Gatti', 'Gatti', new Discount(5.99, true, 15), 'toy', 'https://m.media-amazon.com/images/I/71q3fbxu5FL.jpg', 3, ['blue'], 'PETtutto Questo Tempo');


//LITTERS
$small_litter = new LitterProd('Lettiera piccola', 'Gatti', new Discount(49.99, true, 40), 'litter', 'https://ss-pics.s3.eu-west-1.amazonaws.com/files/1945802/large-ferplast_ariel_11.jpg?1625845419', 'plastica', ['blu']);
$small_sit = new LitterProd('Cuccia', 'Cani', new Discount(129.99, true, 10), 'litter', 'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/spike/classic/1/800/icon_topseller_1_56__1.jpg', 'legno', ['marrone']);


$dataProd = [$croccantiniCani, $croccantiniGatti, $scatoletta,  $ball, $scatolettaLow, $ballCat, $billionair,  $small_litter, $small_sit];
