<?php

$answer = file_get_contents('answersToGame.txt');
$number = $argv[1];
if ($answer === '') {
    $answer = rand(0, 100);
    file_put_contents('./answersToGame.txt', $answer);
}
if ($answer > $number) {
    echo "загаданное число больше введеного";
} elseif ($answer < $number) {
    echo "загаданное число меньше введеного";
} else {
    echo "вы угадали!! Было загаданно число $number. Можно пробовать еще раз)";
    $answer_new = rand(0, 100);
    file_put_contents('./answersToGame.txt', $answer_new);
}
echo PHP_EOL;




