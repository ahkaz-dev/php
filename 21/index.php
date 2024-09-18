<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр 21</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <p class="LtoSecondPart">
            <a href="./index.php">Обновить страницу</a>
    </p>
    <?php
    // Задание 1
    echo "<b>Задание № 1</b><br>";
        // Сделайте функцию, которая возвращает квадрат числа. Число передается 
        // параметром
        function cube($num)
        {
            return pow($num, 2);
        }

        $num;
        if (isset($_GET['numeric'])) {
            $num = $_GET['numeric'];
            if (is_numeric($num)) {
                echo "Квадрат числа $num =  " . cube($num);
            } else {
                echo "Вы ввели не число!";
            }
        }
        echo "<br>";
    ?>
    <form action="" method="get">
        Введите число: <input type="text" name="numeric">
    <br>
        <input type="submit">
    </form>
    </div>
</div>

<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
    // Заданиe 2 
    echo "<b>Задание № 2</b><br>";
        // Сделайте функцию, которая возвращает сумму двух чисел. Числа передаются 
        // параметрами функции.
        function summ($a, $b){
            return $a + $b;
        }

        $a; $b;
        if (isset($_GET['numeric_a']) & isset($_GET['numeric_b'])) {
            $a = $_GET['numeric_a'];
            $b = $_GET['numeric_b'];
            if (is_numeric($a) & is_numeric($b)) {
                echo "Сумма чисел ($a + $b) =  " . summ($a, $b);
            } else {
                echo "Вы ввели не числа!";
            }
        }
    ?>
    <form action="" method="get">
        Введите a: <input type="text" name="numeric_a">
        Введите b: <input type="text" name="numeric_b">
    <br>
        <input type="submit">
    </form>    
    </div>
</div>    

<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
    // Заданиe 3 
    echo "<b>Задание № 3</b><br>";
        // Сделайте функцию, которая отнимает от первого числа второе и делит на третье.
        function minusTwoDiv($n1, $n2, $n3){
            return ($n1 - $n2) / $n3;
        }

        $n1; $n2; $n3;
        if (isset($_GET['numeric_n1']) & isset($_GET['numeric_n2']) & isset($_GET['numeric_n3'])) {
            $n1 = $_GET['numeric_n1'];
            $n2 = $_GET['numeric_n2'];
            $n3 = $_GET['numeric_n3'];

            if (is_numeric($n1) & is_numeric($n2) & is_numeric($n3)) {
                echo "Ответ примера ($n1 - $n2 / $n3) =  " . minusTwoDiv($n1, $n2, $n3);
            } else {
                echo "Вы ввели не числа!";
            }
        }
        
    ?>
    <form action="" method="get">
        Введите n1: <input type="text" name="numeric_n1">
        Введите n2: <input type="text" name="numeric_n2">
        Введите n3: <input type="text" name="numeric_n3">
    <br>
        <input type="submit">
    </form>      
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
    // Заданиe 4 
    echo "<b>Задание № 4</b><br>";
        // Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает 
        // день недели на русском языке.
        function find_date($date_num) {
            $date = array(1=>"Понедельник", 2=>"Вторник", 3=>"Среда", 4=>"Четверг", 5=>"Пятница", 6=>"Суббота", 7=>"Воскресенье");
        
            foreach($date as $key => $value) {
                if ((int)$date_num == $key) {
                    return $value;
                }
            }
            return "Пусто";
        }

        $date_num;
        if (isset($_GET['numeric_date'])) {
            $date_num = $_GET['numeric_date'];
            if (is_numeric($date_num)) {
                echo "Сегодня: " . find_date((int)$date_num);
            } else {
                echo "Вы ввели не число!";
            }
        }   
    ?>
    <form action="" method="get">
        Введите число от 1-7 <input type="text" name="numeric_date">
    <br>
        <input type="submit">
    </form>     
    </div>
</div>
</body>
</html>