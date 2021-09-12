<?php

$login = 'mkapustiuk';
$password = '123456!';
$languages = ['Ukrainian', 'Russian', 'English'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>
<div id="app">
    <form action="">

        <p><b>Ваш логин:</b><br>
            <input type="text" value="<?php
            echo $login; ?>">

        <p><b>Ваш пароль:</b><br>
            <input type="text" value="<?php
            echo $password; ?>">

        <p><b>Выберите язык:</b><br>
            <select name="" id="">
                <option value=""><?php
                    echo $languages[0]; ?></option>
                <option value=""><?php
                    echo $languages[1]; ?></option>
                <option value=""><?php
                    echo $languages[2]; ?></option>
            </select>

    </form>
</div>
</body>
</html>