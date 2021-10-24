<?php

include_once 'config.php';
use Shop\Classes\Basket;
$idGoods = $_POST['checkBox'];
$bascket= new Basket();
$bascket->insertGoods($idGoods);
header("Location:index.php");
