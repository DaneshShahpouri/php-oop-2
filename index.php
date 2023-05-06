<?php
require_once './models/data.php';
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet-Commerce</title>

    <!-- Style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="bg">
        <div class="container">

            <?php
            foreach ($dataProd as $item) {
            ?>

                <div class="card">
                    <div class="banner-top<?php echo ' ' . $item->getType() ?>">
                        <?php
                        if ($item->getType() == 'food') {
                        ?>

                            <h5 class="banner-title">FOOD</h5>

                        <?php
                        } else if ($item->getType() == 'toy') {
                        ?>

                            <h5 class="banner-title">TOY</h5>

                        <?php
                        } else if ($item->getType() == 'litter') {
                        ?>

                            <h5 class="banner-title">LITTER</h5>

                        <?php
                        } else {
                        ?> <?php
                        }
                            ?>
                    </div>
                    <div class="img-wrapper">
                        <img src="<?php echo $item->getImgUrl() ?>" alt="Immagine descrittiva">

                        <?php
                        if ($item->getTarget() == 'Gatti') {
                        ?>
                            <i class="fa-solid fa-cat"></i>
                        <?php
                        } else {
                        ?>
                            <i class="fa-solid fa-dog"></i>
                        <?php
                        }
                        ?>

                    </div>

                    <div class="info-wrapper">
                        <div class="topside">
                            <h3 class="title"><?php echo $item->getName() ?></h3>
                            <span class="price">
                                <?php

                                $item->getDiscount()->setPrice();
                                echo  $item->getDiscount()->getPrice()


                                ?>
                            </span>
                        </div>

                        <div class="info">
                            <?php
                            if ($item->getType() == 'food') {
                                echo 'Energia: ' . $item->getEnergy() . '<br>';
                                echo 'Scadenza: ' . $item->getExpiration() . '<br>';
                                echo '<ul class="ingredienti">';
                                foreach ($item->getIngredients() as $Ingr) {
                            ?>
                                    <li><?php echo $Ingr ?></li>
                                <?php
                                }
                                echo '</ul>';
                            } else if ($item->getType() == 'toy') {
                                try {
                                    $item->setQuality(2);
                                    echo 'Qualità: ' . $item->getQuality() . '<br>';
                                } catch (Exception $ex) {
                                    echo $ex->getMessage('errore');
                                };

                                echo '<ul class="colors">';
                                foreach ($item->getColors() as $color) {
                                ?>
                                    <li><?php echo $color ?></li>
                                <?php
                                }
                                echo '</ul>';
                                echo 'Marca: ' . $item->getBrand() . '<br>';
                            } else {
                                echo  'Materiali: ' . $item->material . '<br>';
                                echo '<ul class="colors">';
                                foreach ($item->colors as $color) {
                                ?>
                                    <li><?php echo $color ?></li>
                            <?php
                                }
                                echo '</ul>';
                            }
                            ?>

                        </div>
                        <button class="btn btn-primary">Acquista</button>

                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>

</body>

</html>