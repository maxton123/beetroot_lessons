<?php

function readerFile($nameFile)
{
    if (!file_exists($nameFile)) {
        die("Файла $nameFile не существует");
    }
    $fileContent = file_get_contents($nameFile);
    $arrayContent = [];
    try {
        $arrayContent = json_decode($fileContent, true, 512, JSON_THROW_ON_ERROR);
    } catch (JsonException $e) {
        echo $e;
    }
    return $arrayContent;
}

function showUserInfo($log, $pass, $dataUsers)
{
    if (is_array($dataUsers)) {
        if (!empty($dataUsers)) {
            $findUser = 0;
            foreach ($dataUsers as $user) {
                if ($user['login'] === $log && $user['password'] === $pass) {
                    echo "имя юзера:" . $user['name'] . PHP_EOL;
                    echo "почта юзера:" . $user['mail'];
                    $findUser = 1;
                    break;
                }
            }
            if ($findUser === 0) {
                echo "юзер не найден";
            }
        } else {
            echo "Передан пустой массив";
        }
    } else {
        echo "Переданные данные не являются массивом или переменной не существует";
    }
}
$login= 'vpetrov2';
$password= '12345!13423';
$users = readerFile('users.json');
showUserInfo($login, $password, $users);



