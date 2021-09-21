<?php

$jsonName = 'users.json';
if (!file_exists($jsonName)) {
    die("Файла $jsonName не существует");
}
$jsonContent = file_get_contents($jsonName);
$arrayUsers = json_decode($jsonContent, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    die("Возникла следующай ошибка при обращении к $jsonName :" . json_last_error_msg());
}


