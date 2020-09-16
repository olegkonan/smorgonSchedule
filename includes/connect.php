<?php
    $host = 'localhost';
    $user = 'id8841728_root';
    $pass = '19911991';
    $dbname = 'id8841728_schedule';
    
    $link = mysqli_connect($host, $user, $pass, $dbname);
    if (!$link) {
        echo "Не могу соединиться с базой данных. Код ошибки: " . mysqli_connect_errno() . ", ошибка: " . mysqli_connect_error();
        exit;
    }
    mysqli_set_charset($link, "utf8");
    date_default_timezone_set('Europe/Minsk');
?>