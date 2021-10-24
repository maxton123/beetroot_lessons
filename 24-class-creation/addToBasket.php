<?php

include_once 'Model.php';
include_once 'Basket.php';
$idGoods = $_POST['checkBox'];
$bascket= new Basket();
$bascket->insertGoods($idGoods);
header("Location:index.php");
