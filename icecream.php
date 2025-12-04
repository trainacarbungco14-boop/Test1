<?php

$user = "Wade";
$greet = "Hello, " .$user;


$product = "Ice Cream";
$cost = 10;
$total = array();
for ($i = 1; $i < 16; $i++) {
    $subtotal = $cost * $i;
    $discount = ($cost/100) * ($i * 5);
    $totals[$i] = $subtotal - $discount;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link rel ="stylesheet" href="styles.css">
    </head>
    <body>
    
    <?php require 'header.php'; ?>

    <div class = "content">
        <h2><?php echo $greet; ?></h2>

        <table>
            <tr>
                <th>PACKS</th>
                <th>PRICE</th>
            </tr>

            <?php foreach ($totals as $quantity => $price) {?>
            <tr>
            <td><?php echo $quantity; ?> <?php echo ($quantity == 1)? 'pack' : 'packs' ; ?></td>
            <td>$<?php echo number_format($price, 2); ?></td>
            </tr>
         <?php } ?>
        </table>
    </div>
      <?php require 'footer.php'; ?>
    </body>
</html>
