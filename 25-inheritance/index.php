<?php

include_once 'User.php';
include_once 'Worker.php.php';

$ivan = new Worker();
$vasil = new Worker();
$ivan->setAge(25);
$ivan->setSalary(1000);
$vasil->setAge(26);
$vasil->setSalary(2000);

$sum = $vasil->getSalary() + $ivan->getSalary();
echo $sum;



