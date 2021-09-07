<?php
$login='mkapustiuk';
$password='123456!';
?>

<!DOCTYPE>
<html>
<head>
    <title>PHP</title>
</head>
<body>
<div id="app">
    <form action="">

        <p><b>Ваш логин:</b><br>
            <input type="text" value=<? echo $login; ?>>

        <p><b>Ваш пароль:</b><br>
            <input type="text" value=<? echo $password; ?>>

    </form>
</div>
</body>
</html>