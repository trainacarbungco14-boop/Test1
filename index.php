<?php

$user = "Wade";
$pagbati = "Hello, " .$user;
$offer = [
    'Ice Cream',
    5,
    25,
    5
];

$product = "Ice Cream";
$reg_price = $offer[1] * $offer[2];
$offer_price = $offer[1] * $offer[3];
$saving = $reg_price - $offer_price;
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link rel ="stylesheet" href="styles.css">
    </head>

    <body>
    <?php require "header.php"; ?>

    Save $<?php echo $saving; ?>

    <h2><?php echo $pagbati; ?></h2>

    <h2>Ice Cream Discounts</h2>
        <p>Discounted Price: $<?php echo $offer_price; ?></p>
        <p>Regular Price: $<?php echo $reg_price; ?></p>

        <?php require 'footer.php'; ?>
    </body>
    
</html>


