<?php
    //Подключаем базу данных
    require 'connect.php';
    //Присваиваем переменным значения, полученные из AJAX запроса
    $busStop = strval($_GET['q']);
    $dayOfWeek = strval($_GET['d']);
    $timeClause = $_GET['t'];
    $limitClause = $_GET['l'];
    //Пишем запрос на каждую остановку
    $ag_machinery = "SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=2 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=2 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM saz k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=15 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=5 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=15 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=13 AND d.dest_id=12 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=13 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=12 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=15 AND d.dest_id=10 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=5 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=17 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=17 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=10 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=10 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM saz k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=5 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM saz k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $alesya = "SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=8 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $bakery_plant = "SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM saz k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=15 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=13 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=5 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $brovki_st = "SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=20 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=13 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $bus_station = "SELECT date_format(k.departure, '%H:%i') AS departure, b.bus_number, d.destination, k.comment 
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $car_park = "SELECT date_format(k.departure, '%H:%i') AS departure, b.bus_number, d.destination, k.comment 
        FROM car_park k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $cemetery = "SELECT date_format(k.departure, '%H:%i') AS departure, b.bus_number, d.destination, k.comment 
        FROM cemetery k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $city_forestry = "SELECT date_format(addtime(departure, 1300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=15 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=21 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=5 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $city_gas = "SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=13 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $сom_center = "SELECT date_format(addtime(k.departure, 1300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(k.departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=8 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(k.departure, 1500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=2 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(k.departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=2 AND d.dest_id=8 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(k.departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=8 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(k.departure, 1300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(k.departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=11 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(k.departure, 1300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(k.departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=15 AND d.dest_id=19 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $east = "SELECT date_format(k.departure, '%H:%i') AS departure, b.bus_number, d.destination, k.comment 
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $electricity = "SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=8 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=2 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=2 AND d.dest_id=8 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM forestry k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=3 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=3 AND d.dest_id=15 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 2300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=20 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=6 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=6 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 2300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM saz k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=21 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=7
        UNION ALL
        SELECT date_format(addtime(departure, 1900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM car_park k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=10 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=10 AND d.dest_id=17 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM field k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=17 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM car_park k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=18 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=13 AND d.dest_id=12 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=13 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=11 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=15 AND d.dest_id=19 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=17 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=17 AND d.dest_id=9 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $evroopt = "SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=8 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $field = "SELECT date_format(k.departure, '%H:%i') AS departure, b.bus_number, d.destination, k.comment 
        FROM field k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $forestry = "SELECT date_format(k.departure, '%H:%i') AS departure, b.bus_number, d.destination, k.comment 
        FROM forestry k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $gagarina_st = "SELECT date_format(addtime(departure, 500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=20 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=13 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $gas_station = "SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM car_park k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=10 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 2000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=10 AND d.dest_id=17 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $green_meadow = "SELECT date_format(addtime(departure, 1300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=3 AND d.dest_id=6 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM forestry k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=3 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM cemetery k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=4 AND d.dest_id=13 AND $dayOfWeek='1' $timeClause
        ORDER BY departure ASC $limitClause";
    $hales = "SELECT date_format(addtime(departure, 2700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM field k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=17 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM car_park k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=18 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $hcs = "SELECT date_format(addtime(departure, 2500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM field k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=17 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM car_park k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=18 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $hospital = "SELECT date_format(k.departure, '%H:%i') AS departure, b.bus_number, d.destination, k.comment 
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $hotel = "SELECT date_format(addtime(departure, 1100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=2 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=20 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM saz k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=21 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM car_park k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=10 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=13 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=17 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM saz k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $justice_house = "SELECT date_format(addtime(departure, 1500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=8 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=2 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=2 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=2 AND d.dest_id=8 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=2 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=11 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=12 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=15 AND d.dest_id=19 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=15 AND d.dest_id=10 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $kolosok = "SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=3 AND d.dest_id=15 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=6 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM saz k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $koreni = "SELECT date_format(k.departure, '%H:%i') AS departure, b.bus_number, d.destination, k.comment 
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $koreni_village = "SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM saz k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=15 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=13 AND d.dest_id=12 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=13 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=12 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=15 AND d.dest_id=10 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=5 AND $dayOfWeek='1' $timeClause
        ORDER BY departure ASC $limitClause";
    $lmz = "SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=20 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=13 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 2100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM field k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=17 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM car_park k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=18 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $market = "SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=9 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=8 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM field k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=17 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM car_park k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=18 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=10 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=22 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 2000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM saz k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $molodeznaya_st = "SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=20 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=13 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $molodezniy = "SELECT date_format(k.departure, '%H:%i') AS departure, b.bus_number, d.destination, k.comment 
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $polyclinic = "SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=2 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=15 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=5 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=15 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=13 AND d.dest_id=10 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=13 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=10 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=5 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=17 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $red_army = "SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=9 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=8 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM field k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=17 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM car_park k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=18 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=10 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=22 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM saz k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $rw_station = "SELECT date_format(k.departure, '%H:%i') AS departure, b.bus_number, d.destination, k.comment 
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $sadovaya = "SELECT date_format(addtime(departure, 500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=2 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM forestry k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=3 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 2200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=20 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=6 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 2200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM saz k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=21 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM car_park k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=10 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=13 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=17 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $saz = "SELECT date_format(k.departure, '%H:%i') AS departure, b.bus_number, d.destination, k.comment 
        FROM saz k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $school_1 = "SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=2 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=15 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=9 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=5 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=15 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=10 AND d.dest_id=17 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=13 AND d.dest_id=12 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=12 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=15 AND d.dest_id=10 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=5 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=17 AND d.dest_id=9 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=17 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=22 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=10 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=10 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM saz k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=5 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $school_2 = "SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=8 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=2 AND d.dest_id=8 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=3 AND d.dest_id=6 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=3 AND d.dest_id=15 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=6 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=10 AND d.dest_id=17 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM field k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=17 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM car_park k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=18 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=13 AND d.dest_id=12 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=11 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=15 AND d.dest_id=19 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $school_3 = "SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=3 AND d.dest_id=6 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=3 AND d.dest_id=15 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=20 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=13 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=6 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=6 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $school_7 = "SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=9 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM field k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=17 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM car_park k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=18 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=10 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=22 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 2200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM saz k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $shop = "SELECT date_format(addtime(departure, 1100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=3 AND d.dest_id=6 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM forestry k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=3 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM field k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=17 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 2100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM car_park k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=18 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $shop_5 = "SELECT date_format(addtime(departure, 1600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=15 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=5 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 2600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM cemetery k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM car_park k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=10 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=10 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $spc = "SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=6 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $square = "SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=2 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=2 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=3 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 2000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=20 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=6 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 2000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM saz k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=21 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=9 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM car_park k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=10 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=10 AND d.dest_id=17 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=13 AND d.dest_id=12 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=13 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=12 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=15 AND d.dest_id=10 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=17 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=17 AND d.dest_id=9 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=10 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=22 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $szos = "SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=3 AND d.dest_id=6 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=3 AND d.dest_id=15 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=20 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=13 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=6 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=6 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM field k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=17 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM car_park k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=18 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $veterinary = "SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=20 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM molodezniy k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND d.dest_id=13 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=5 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 2300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM field k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=17 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM car_park k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=12 AND d.dest_id=18 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $water_intake = "SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM saz k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=15 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=13 AND d.dest_id=12 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=13 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=12 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=15 AND d.dest_id=10 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=5 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $west = "SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=1 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=2 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=2 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM saz k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM bus_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=7 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=15 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1300), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=8 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=5 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=9 AND d.dest_id=15 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 800), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=11 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=13 AND d.dest_id=12 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=13 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=12 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=14 AND d.dest_id=4 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 700), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM hospital k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=15 AND d.dest_id=10 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1100), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=16 AND d.dest_id=5 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM koreni k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=17 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 600), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=17 AND d.dest_id=7 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1400), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=10 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 500), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM rw_station k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=10 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM saz k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=5 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1000), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM saz k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=18 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    $zaslonova_st = "SELECT date_format(addtime(departure, 200), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM car_park k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=10 AND d.dest_id=1 AND $dayOfWeek='1' $timeClause 
        UNION ALL
        SELECT date_format(addtime(departure, 1900), '%H:%i') AS departure, b.bus_number, d.destination, k.comment
        FROM east k INNER JOIN allbuses b ON k.bus_id = b.bus_id INNER JOIN alldestinations d ON k.dest_id = d.dest_id
        WHERE b.bus_id=10 AND d.dest_id=17 AND $dayOfWeek='1' $timeClause 
        ORDER BY departure ASC $limitClause";
    //Отправляем запрос в базу данных
    $result = mysqli_query($link, $$busStop);
    //Создаем шапку таблицы
    echo "<table class='table table-bordered table-hover table-dark table-sm table-responsive{-sm}'>
    <tr class='headline'>
    <th class='table_time'>Время</th>
    <th class='table_bus_number'>Номер автобуса</th>
    <th class='table_dest'>Куда едет</th>
    <th class='table_comment'>Примечание</th>
    </tr>";
    //Выводим результат в виде массива и вставляем соответствующие значения в ячейки таблицы
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr class='other'>";
        echo "<td class='table_time'>" . $row['departure'] . "</td>";
        echo "<td class='table_bus_number'>" . $row['bus_number'] . "</td>";
        echo "<td class='table_dest'>" . $row['destination'] . "</td>";
        echo "<td class='table_comment'>" . $row['comment'] . "</td>";
        echo "</tr>";
    }
    mysqli_close($link);
?>