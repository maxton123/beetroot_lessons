<?php

require_once 'jsonToArray.php';// если мы знаем, что этот файл будет подключен только в index.php - тогда можно данную строку удалить
function moreEight($user)
{
    if (strlen($user['password']) >= 8) {
        return $user;
    }
}

$filteredArrayUsers = array_filter($arrayUsers, "moreEight");

