<?php
$number = isset($_POST['number']) ? $_POST['number'] : rand(0, 100);
if (isset($_POST['answer'])) {
    if ($_POST['answer'] > $number) {
        echo "загаданное число меньше введеного";
    } elseif ($_POST['answer'] < $number) {
        echo "загаданное число больше введеного";
    } else {
        echo "вы угадали!! Было загаданно число $number. Можно пробовать еще раз)";
        $number = rand(0, 100);
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
        <p><b>Введите вариант ответа:</b><br>
            <input type="text" value="" name="answer">
            <input type="hidden" value="<?php
            echo $number; ?>" name="number">
        <p><input type="submit"></p>
    </form>
</div>
</body>
</html>
