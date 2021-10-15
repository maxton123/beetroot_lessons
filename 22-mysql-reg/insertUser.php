<?php
$login=$_POST['login'];
$pass=$_POST['password'];
try {
    $dbh = new PDO('mysql:host=db;dbname=beetroot', 'root', 'root');
    $dbh->exec("INSERT INTO Users ( login, password) VALUES ('$login','$pass')") ;


    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
header('Location:registration.html');

