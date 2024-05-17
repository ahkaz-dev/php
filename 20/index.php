<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр 20</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
    date_default_timezone_set('Europe/Moscow');


        // Задание Timestamp: time и mktime
        echo "<b>Timestamp: time и mktime</b><br>";
        
        // 1
        echo "Текущее время в timestamp - <span class=other>" . time() . "</span>";
        echo "<br>";

        // 2
        $timestamp = mktime(0, 0, 0, 3, 1, 2025);
        echo " 1 марта 2025 в timestamp - <span class=other>" . $timestamp . "</span>";
        echo "<br>";

        // 3
        $currentYear = date("Y");
        $timestamp = mktime(0, 0, 0, 12, 31, $currentYear);
        echo "31 декабря текущего года - <span class=other>" . $timestamp . "</span>";
        echo "<br>";

        // 4
        $pastTimestamp = mktime(13, 12, 59, 3, 15, 2000);
        $currentTimestamp = time();
        $difference = $currentTimestamp - $pastTimestamp;
        echo "Секунды с 15.03.2000 13:12:59 - <span class=other>" . $difference . "</span>";
        echo "<br>";

        // 5 
        $pastTimestamp = mktime(7, 23, 48, date("m"), date("d"), date("Y"));
        $currentTimestamp = time();
        $difference = $currentTimestamp - $pastTimestamp;
        $hours = floor($difference / 3600);
        echo "Кол-во часов с 7:23:48 текущего дня - <span class=other>" . $hours . "</span>";
?>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        // Функция date
        echo "<b>Функция date</b><br>";    

        // 1
        echo "Дата и текущее время - <span class=other>" . date("(Y.m.d) H:i:s") . "</span>"; 
        echo "<br>";

        // 2
        echo "Разные форматы дат: <span class=other>[" . 
                date("Y-m-d") . ', ' . 
                date("d.m.Y") . ', ' .  
                date("d.m.y") . ', ' .  
                date("H:i:s") . ', ' .  
            "]</span>";
        echo "<br>";

        // 2 


        // 3 
        $week = [];
    ?>
    </div>
</div>
</body>
</html>
