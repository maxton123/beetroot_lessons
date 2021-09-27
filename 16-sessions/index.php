<?php

require_once 'productsToArray.php';
try {
    $products = jsonToArray('products.json');
} catch (Exception $e) {
    echo $e->getMessage();
}
session_start();
if (!empty($_POST)) {
    foreach ($_POST as $name => $order) {
        if (!isset($_SESSION[$name])) {
            $_SESSION[$name] = 1;
        } else {
            $_SESSION[$name]++;
        }
    }
}
if (!empty($_SESSION)) {
    echo "Ваш заказ:<br>";
    foreach ($_SESSION as $name => $number) {
        echo "<b>" . $name . ":</b> " . $number . " единиц<br>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
<div id="app">
    <form action="" method="post">
        <p><b>Выберите товар:</b><br>
            <?php
            foreach ($products as $product) {
                $quantity = $product['quantity'] - $_SESSION[$product['name']];
                if ($quantity === 0) {
                    continue;
                }
                echo "<input type='checkbox' name=" . $product['name'] . "  ><b>" . $product['name'] . "</b>";
                echo " price = " . $product['price'] . ",available quantity = " . $quantity;
                echo "<br>";
            }
            ?>
            <input type="submit" value="Заказать">
    </form>
</div>
</body>
</html>
