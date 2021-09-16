<?php
if (isset($_POST['login'], $_POST['pass'])) {
    $accessData = file('./passwords.txt');
    $checkLogin = false;
    foreach ($accessData as $access) {
        list($loginAccess, $passAccess) = explode(' ', $access);
        if ((trim($loginAccess) === $_POST['login']) && (trim($passAccess) === $_POST['pass'])) {
            echo $loginAccess;
            $fileName = "$loginAccess.txt";
            file_put_contents($fileName, $loginAccess . ' ' . date(DATE_RFC822) . PHP_EOL, FILE_APPEND);
            $checkLogin = true;
            break;
        }
    }
    if ($checkLogin === false) {
        echo "введен не верный логин или пароль";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>
<div id="app">
    <form action="" method="post">

        <p><b>Ваш логин:</b><br>
            <input type="text" value="" name="login">

        <p><b>Ваш пароль:</b><br>
            <input type="text" value="" name="pass">
        <p><input type="submit"></p>
    </form>
</div>
</body>
</html>

