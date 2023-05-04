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
                    <div class="banner-top<?php echo ' ' . $item->type ?>">
                        <?php
                        if ($item->type == 'food') {
                        ?>

                            <h5 class="banner-title">FOOD</h5>

                        <?php
                        } else if ($item->type == 'toy') {
                        ?>

                            <h5 class="banner-title">TOY</h5>

                        <?php
                        } else if ($item->type == 'litter') {
                        ?>

                            <h5 class="banner-title">LITTER</h5>

                        <?php
                        } else {
                        ?> <?php
                            }
                                ?>
                    </div>
                    <div class="img-wrapper">
                        <img src="<?php echo $item->imgUrl ?>" alt="Immagine descrittiva">
                    </div>

                    <div class="info-wrapper">
                        <div class="topside">
                            <h3 class="title"><?php echo $item->name ?></h3>
                            <div class="target">
                                <?php
                                if ($item->target == 'Gatti') {
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

                            <?php
                            if ($item->type == 'food') {
                            ?> <?php
                            } else if ($item->type == 'toy') {
                                ?> <?php
                            } else if ($item->type == 'litter') {
                                ?> <?php
                                } else {
                                    ?> <?php
                                    }
                                        ?>
                        </div>

                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>

</body>

</html>