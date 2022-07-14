<?php  

include __DIR__ . '/classes/Product.php';
include __DIR__ . '/classes/Food.php';
include __DIR__ . '/classes/Kennel.php';
include __DIR__ . '/classes/User.php';
include __DIR__ . '/classes/Carrello.php';
include __DIR__ . '/classes/CreditCard.php';


/******************************
    PRODUCTS
*******************************/

$product_text = new Product ('text Product', 'zooplus', 50, 1, 'Dogs');

$croquettes = new Food ('Croquettes', 'Pedigree', 10, 4, 'Dogs', 200);

$kennel = new Kennel ('Kennel', 'Zooplus', 70, 2, 'Dogs', 'XL', 'red');


/******************************
    USERS
*******************************/

$marioRossi = new User ('Mario','Rossi','mariorossi@gmail.com', true);

$lucaVerdi = new User ('Luca','Verdi','lucaverdi@gmail.com', false);


/******************************
    CARRELLO
*******************************/

$carrello_marioRossi = new Carrello (3, $marioRossi, 150,);

$carrello_lucaVerdi = new Carrello (2, $lucaVerdi, 90,);


/******************************
    CREDIT CARD
*******************************/

$credit_card_marioRossi = new CreditCard (6587984,'23-08-2025', $marioRossi, $marioRossi);

$credit_card_lucaVerdi = new CreditCard (3336548,'12-02-2021', $lucaVerdi, $lucaVerdi);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pet Store</title>
</head>
<body>
    <div>
        <div>
            <h1>PRODUCTS</h1>
            <div class="products">
                <div>
                    <?= $croquettes->print_Product() ?>
                </div>

                <div>
                    <?= $kennel->print_Product() ?>
                </div>


        </div>
        <div>
            <h1>USERS</h1>
            <div class="users">
                <div>
                    <?= $carrello_marioRossi->print_user() ?>
                </div>

                <div>
                    <?= $carrello_lucaVerdi->print_user() ?>
                </div>
            </div>
        </div>
        <div>
            <h1>CREDIT CARD</h1>
            <div class="users">
                <div>
                    <?= $credit_card_marioRossi->credit_card() ?>
                </div>

                <div>
                    <?= $credit_card_lucaVerdi->credit_card() ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>