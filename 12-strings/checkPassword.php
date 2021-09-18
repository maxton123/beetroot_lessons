<?php
$password='12324321';
$length=strlen($password);
if ($length>7 && $length<12){
    echo "пароль подходит";
}else{
    echo "пароль не подходит";
}
