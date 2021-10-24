<?php

include_once 'config.php';
use Shop\Classes\Goods;
use Shop\Classes\Basket;
?>

<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        p {
            padding: 10px;
        }

        #left {
            position: absolute;
            left: 0;
            top: 0;
            width: 50%;
        }

        #right {
            position: absolute;
            right: 0;
            top: 0;
            width: 50%;
        }
    </style>
    <title>Products</title>
</head>
<body>
<div id="left">
    <table>
        <tr>
            <td>
                <form action="addToBasket.php" method="post">
                    <p><b>Добавьте товар в корзину:</b><br>
                        <?php
                        $products = new Goods();
                        foreach ($products->all() as $good) {
                            echo "<input type='checkbox' name='checkBox[]'  value='" . $good['id'] . "'  >" . $good['name'] . "<br>";
                        }
                        ?>
                        <input type="submit" name="order" value="Добавить">
                </form>
</div>
<div id="right">

    <p><b>Корзина:</b><br>
        <?php
        $basketIn = new Basket();
        foreach ($basketIn->all() as $good) {
            echo $good['name'] . ", количество: " . $good['quantity'] . "<br>";
        }
        ?>
</div>
</body>
</html>







