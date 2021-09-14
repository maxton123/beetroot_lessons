<?php

$users = [
    2 => ['name' => 'Cavan Dotson', 'email' => 'cavan@gmail.com', 'lang' => 'ru'],
    3 => ['name' => 'Khadija ', 'email' => 'khadija@gmail.com', 'lang' => 'ru'],
    5 => ['name' => 'Iyla ', 'email' => 'iyla@gmail.com', 'lang' => 'en'],
    10 => ['name' => 'Summer Mcdougall', 'email' => 'mahir@gmail.com', 'lang' => 'fr'],
    11 => ['name' => 'Summer Mcdougall', 'email' => 'summer@gmail.com', 'lang' => 'de'],
    12 => ['name' => 'Ahmed Pollard', 'email' => 'ahmed@gmail.com', 'lang' => 'fr'],
    13 => ['name' => 'Khadija Sutherland', 'email' => 'khadija@gmail.com', 'lang' => 'ru'],
    14 => ['name' => 'Iyla Pacheco', 'email' => 'iyla@gmail.com', 'lang' => 'en'],
    15 => ['name' => 'Mahir Willis', 'email' => 'mahir@gmail.com', 'lang' => 'fr'],
    16 => ['name' => 'Summer Mcdougall', 'email' => 'summer@gmail.com', 'lang' => 'de'],
    17 => ['name' => 'Ahmed Pollard', 'email' => 'ahmed@gmail.com', 'lang' => 'fr'],
    18 => ['name' => 'Cavan Dotson', 'email' => 'cavan@gmail.com', 'lang' => 'ru'],
];

$i=0;
foreach ($users as $user){
 $names[$i]=$user['name'];
 $i++;
}
$counts= array_count_values($names);

foreach ($counts as $key=>$count){
    if ($count>1){
        echo $key.'='.$count.PHP_EOL;
    }
}

$ua=[];
$ru=[];
$en=[];
$fr=[];
$de=[];

foreach ($users as $user){
    switch ($user['lang']){
        case 'ua':
            $ua[] = $user;
            break;
        case 'ru':
            $ru[] = $user;
            break;
        case 'en':
            $en[] = $user;
            break;
        case 'fr':
            $fr[] = $user;
            break;
        case 'de':
            $de[] = $user;
            break;
    }
}



for (end($users); ($key = key($users)) !== null; prev($users) ) { //если массив нормально проиндексирован
    echo $key."=>";                                                            // можно через for($i=count($users)-1;$i>=0;$i--)
    var_export(current($users));
}
/* Вот так без использования циклов: $array_reverse=array_reverse($users,true);
var_export($array_reverse);*/
