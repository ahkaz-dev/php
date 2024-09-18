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

        // 3 
        $timestamp = mktime(0, 0, 0, 02, 05, 2025);

        $formatted_date = date("d.m.Y", $timestamp);

        echo $formatted_date;
        echo "<br>";
        echo "<br>";

        // 4
        $week = ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"];

        $currentDay = date('w');
        echo "Сегодня: " . $week[$currentDay] . "<br>";

        $date = strtotime("2006-06-06");
        $dayOfWeek = date('w', $date);
        echo "06.06.2006 был: " . $week[$dayOfWeek] . "<br>";

        $birthday = strtotime("2006-03-07");
        $birthdayDayOfWeek = date('w', $birthday);
        echo "Ваш день рождения был: " . $week[$birthdayDayOfWeek];
        echo "<br><br>";

        // 5
        $month = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];

        $currentMonth = date('n') - 1; 
        echo "Сейчас месяц: " . $month[$currentMonth];
        echo "<br>";

        // 6
        $currentYear = date('Y');
        $currentMonth = date('n');

        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);

        echo "Количество дней в текущем месяце: " . $daysInMonth;
        echo "<br>";
    ?>
    <form method="post">
        <label for="year">Введите год (4 цифры):</label>
        <input type="number" id="year" name="year" required>
        <input type="submit" value="Проверить" name="fyear">
    </form>
    <?php
        if (isset($_POST['fyear'])) {
            $year = $_POST['year'];

            if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                echo "<p>$year год является високосным.</p>";
            } else {
                echo "<p>$year год не является високосным.</p>";
            }
        }
    ?>    
    <form method="post">
        <label for="date">Введите дату (в формате 31.12.2025):</label>
        <input type="text" id="date" name="date" required pattern="\d{2}\.\d{2}\.\d{4}" title="Введите дату в формате дд.мм.гггг">
        <input type="submit" value="Узнать день недели" name="fdate">
    </form>
    <?php
        if (isset($_POST['fdate'])) {
            $inputDate = $_POST['date'];

            $dateParts = explode('.', $inputDate);

            if (count($dateParts) == 3) {
                $day = (int)$dateParts[0];
                $month = (int)$dateParts[1];
                $year = (int)$dateParts[2];

                $timestamp = mktime(0, 0, 0, $month, $day, $year);

                $weekDays = ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"];

                $dayOfWeek = date('w', $timestamp);
                echo "<p>День недели для даты $inputDate: " . $weekDays[$dayOfWeek] . "</p>";
            } else {
                echo "<p>Неверный формат даты. Введите дату в формате дд.мм.гггг.</p>";
            }
        }
    ?>
    <form method="post">
        <label for="date">Введите дату (в формате 2025-12-31):</label>
        <input type="text" id="date" name="date" required pattern="\d{4}-\d{2}-\d{2}" title="Введите дату в формате гггг-мм-дд">
        <input type="submit" value="Узнать месяц" name="fmonth">
    </form>  
    <?php
        if (isset($_POST['fmonth'])) {
            $inputDate = $_POST['date'];

            $dateParts = explode('-', $inputDate);

            if (count($dateParts) == 3) {
                $year = (int)$dateParts[0];
                $month = (int)$dateParts[1];
                $day = (int)$dateParts[2];

                $timestamp = mktime(0, 0, 0, $month, $day, $year);

                $months = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];

                $monthIndex = date('n', $timestamp) - 1;
                echo "<p>Месяц для даты $inputDate: " . $months[$monthIndex] . "</p>";
            } else {
                echo "<p>Неверный формат даты. Введите дату в формате гггг-мм-дд.</p>";
            }
        }
    ?>          
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        // Сравнение дат
        echo "<b>Сравнение дат</b><br>"; 
    ?>
    <form method="post">
        <label for="date1">Введите первую дату (в формате 2025-12-31):</label>
        <input type="text" id="date1" name="date1" required pattern="\d{4}-\d{2}-\d{2}" title="Введите дату в формате гггг-мм-дд">
        <br><br>
        <label for="date2">Введите вторую дату (в формате 2025-12-31):</label>
        <input type="text" id="date2" name="date2" required pattern="\d{4}-\d{2}-\d{2}" title="Введите дату в формате гггг-мм-дд">
        <br><br>
        <input type="submit" value="Сравнить даты" name="equals">
    </form>
    <?php
        if (isset($_POST['equals'])) {
            // Получаем введенные пользователем даты
            $date1 = $_POST['date1'];
            $date2 = $_POST['date2'];

            // Преобразуем даты в формат timestamp с помощью функции strtotime
            $timestamp1 = strtotime($date1);
            $timestamp2 = strtotime($date2);

            // Сравниваем даты
            if ($timestamp1 > $timestamp2) {
                echo "<p>Большая дата: $date1</p>";
            } elseif ($timestamp1 < $timestamp2) {
                echo "<p>Большая дата: $date2</p>";
            } else {
                echo "<p>Обе даты равны.</p>";
            }
        }
    ?>    
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        // На strtotime
        echo "<b>На strtotime</b><br>";
        
        $date = '2025-12-31';

        $timestamp = strtotime($date);

        $newDateFormat = date('d-m-Y', $timestamp);

        echo "Преобразованная дата: " . $newDateFormat;
        echo "<br>";
    ?>    
    <form method="post">
        <label for="datetime">Введите дату-время (в формате 2025-12-31T12:13:59):</label>
        <input type="datetime-local" id="datetime" name="datetime" required>
        <br><br>
        <input type="submit" value="Преобразовать" name="datatime">
    </form>
    <?php
        if (isset($_POST['datatime'])) {
            $datetime = $_POST['datetime'];

            $timestamp = strtotime($datetime);

            $formattedDateTime = date('H:i:s d.m.Y', $timestamp);

            echo "<p>Преобразованное время: $formattedDateTime</p>";
        }
    ?>    
    </div>
</div>    
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        // Прибавление и отнимание дат
        echo "<b>Прибавление и отнимание дат</b><br>";

        $date = '2025-12-31';

        $dateObject = date_create($date);
        
        date_modify($dateObject, '+2 days');
        
        date_modify($dateObject, '+1 month +3 days');
        
        date_modify($dateObject, '+1 year');
        
        date_modify($dateObject, '-3 days');
        
        $finalDate = date_format($dateObject, 'Y-m-d');
        
        echo "Итоговая дата: " . $finalDate;        
    ?>
    </div>
</div>  
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        // Задачи
        echo "<b>Задачи</b><br>";

        $currentDate = date('Y-m-d');

        $newYearDate = date('Y') . '-12-31';

        $currentTimestamp = strtotime($currentDate);
        $newYearTimestamp = strtotime($newYearDate);

        // Вычисляем разницу в днях
        $daysRemaining = ($newYearTimestamp - $currentTimestamp) / (60 * 60 * 24);

        // Проверяем, если Новый год уже наступил, добавляем 365 дней для следующего года
        if ($daysRemaining < 0) {
            $daysRemaining = 365 + $daysRemaining;
        }

        echo "Дней осталось до Нового года: " . ceil($daysRemaining);        
    ?>
    <form method="post">
        <label for="year">Введите год:</label>
        <input type="number" id="year" name="year" required>
        <br><br>
        <input type="submit" value="Найти пятницы 13-е" name="friday13">
    </form>    
    <?php
        if (isset($_POST['friday13'])) {
            $year = (int)$_POST['year'];
            $fridays13 = [];


            for ($month = 1; $month <= 12; $month++) {
                $date = mktime(0, 0, 0, $month, 13, $year);

                if (date('w', $date) == 5) {
                    $fridays13[] = date('Y-m-d', $date);
                }
            }

            if (!empty($fridays13)) {
                echo "<p>Пятницы 13-е в $year:</p>";
                echo "<ul>";
                foreach ($fridays13 as $friday) {
                    echo "<li>$friday</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>В $year нет пятниц 13-х.</p>";
            }
        }

        $currentDate = date('Y-m-d');

        $date100DaysAgo = date('Y-m-d', strtotime('-100 days'));

        $dayOfWeek = date('l', strtotime($date100DaysAgo));

        echo "100 дней назад была дата: $date100DaysAgo, это был $dayOfWeek.";
    ?>    
    </div>
</div>             
</body>
</html>
