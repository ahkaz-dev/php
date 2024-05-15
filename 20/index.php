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
    setlocale(LC_ALL, 'da_DA');


        // Задание Timestamp: time и mktime
         echo "<b>Timestamp: time и mktime</b><br>";

        //1
        $current_date = date('Y-m-d H:i:s', time());
        echo $current_date;

        echo "<br>";

        echo date("d m-а Y года", mktime(0, 0, 0, 3, 25, 2025));
?>
    </div>
</div>
</body>
</html>