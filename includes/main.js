function getSchedule() {
    //Присваиваем значения выбранных опций соответствующим переменным
    var chooseStop = document.getElementById('chooseStop').value;
    var chooseDay = document.getElementById('chooseDay').value;
    var chooseTime = document.getElementById('chooseTime').value;
    //Определяем текущее время и вносим его в переменную для запроса ближайших автобусов
    if (chooseTime == "nearest") {
        var d = new Date();
        var curTime = [d.getHours(), d.getMinutes()].map(function (x) {
            return x < 10 ? "0" + x : x
        }).join(":")
        var timeClause = "AND departure>'" + curTime + "\'";
        var limitClause = 'LIMIT 10';
    //Если выбран пункт "Все автобусы", присваиваем переменным пустые значения
    } else {
        var timeClause = '';
        var limitClause = '';
    }
    //Если не выбрана ни одна остановка, оставляем поле пустым
    if (chooseStop == "0") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    //Если выбрана остановка, отправляем запрос со значениями переменных
    } else {
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('txtHint').innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "includes/getschedule.php?q="+chooseStop+"&d="+chooseDay+"&t="+timeClause+"&l="+limitClause, true);
        xmlhttp.send();
    }
}