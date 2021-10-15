<?php

$login = $_POST['login'];
$pass = $_POST['password'];
$dbh = new PDO('mysql:host=db;dbname=beetroot', 'root', 'root');
$user = $dbh->query("select login,password from Users where login='$login' and password='$pass'");
$b = $user->fetchAll(PDO::FETCH_ASSOC);
//var_dump($b);
if (!empty($b)) {
    echo "привет ".$b[0]['login'];
} else{
    echo "не удалось авторизоваться";
}


