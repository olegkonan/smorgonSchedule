<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Расписание автобусов</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="includes/main.css">
    </head>
<body>
    <form>
        <select class="form-control" id="chooseStop" onchange=getSchedule()>
            <option value="0">Выберите остановку</option>
            <?php
                require 'includes/getstop.php';
            ?>
        </select>
        <select class="form-control-sm" id="chooseDay" onchange=getSchedule()>
            <option value="week_day">по будням</option>
            <option value="day_off">по выходным</option>
        </select>
        <select class="form-control-sm" id="chooseTime" onchange=getSchedule()>
            <option value="nearest">ближайшие автобусы</option>
            <option value="all">все автобусы</option>
        </select>
    </form>
    <div id="txtHint"></div>
    <div id="route"></div>
    <script src="includes/main.js"></script>
    <script src="includes/route.js"></script>
</body>
</html>