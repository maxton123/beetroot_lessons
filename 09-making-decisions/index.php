<?php

$users = [
    2 => ['name' => 'Cavan Dotson', 'email' => 'cavan@gmail.com', 'lang' => 'ru'],
    3 => ['name' => 'Khadija Sutherland', 'email' => 'khadija@gmail.com', 'lang' => 'ru'],
    5 => ['name' => 'Iyla Pacheco', 'email' => 'iyla@gmail.com', 'lang' => 'en'],
    10 => ['name' => 'Mahir Willis', 'email' => 'mahir@gmail.com', 'lang' => 'fr'],
    11 => ['name' => 'Summer Mcdougall', 'email' => 'summer@gmail.com', 'lang' => 'de'],
    132 => ['name' => 'Ahmed Pollard', 'email' => 'ahmed@gmail.com', 'lang' => 'fr'],
];

$lang = [
    'ua' => 'Привіт Козак',
    'ru' => 'Привет Боярин)',
    'en' => 'Hello',
    'fr' => 'Bonjur',
    'de' => 'Hallo',
];

$minId = reset($users);
$maxId = end($users);


if ($minId['lang'] === $maxId['lang']) {
    echo $lang[$minId['lang']];
    echo PHP_EOL;
} else {
    echo $lang[$minId['lang']];
    echo PHP_EOL;
    echo $lang[$maxId['lang']];
    echo PHP_EOL;
}