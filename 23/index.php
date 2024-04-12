<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр 23</title>
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

        function boolListener($num_a, $num_b) {
            if ($num_a != null & $num_b != null ) {
                if ($num_a == $num_b) {
                    return true;
                }
            }
             else {
                return false;
            }
        }

        $num_a; $num_b;
        if (isset($_GET['num_a']) & isset($_GET['num_b'])) {
            $num_a = $_GET['num_a'];
            $num_b = $_GET['num_b'];
            if (is_numeric($num_b) & is_numeric($num_b)) {
                if (boolListener($num_a, $num_b) == true) {
                    echo "Числа $num_a и $num_b равны!";
                } else {
                    echo "Числа $num_a и $num_b не равны!";
                }
            } else {
                echo "Вы ввели не числа!";
            }
        }
    ?>
    <form action="" method="get">
        Первое число: <input type="text" name="num_a" placeholder="Введите число 1">
        Второе число: <input type="text" name="num_b" placeholder="Введите число 2">
        <br>
        <input type="submit">
    </form>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        // Задание 2
        echo "<b>Задание № 2</b><br>";  
        
        function summListener($num_a, $num_b) {
            if ($num_a != null & $num_b != null ) {
                if (($num_a + $num_b) >= 10) {
                    return true;
                }
            }
             else {
                return false;
            }
        }

        $num_a; $num_b;
        if (isset($_GET['num_aQ2']) & isset($_GET['num_bQ2'])) {
            $num_a = $_GET['num_aQ2'];
            $num_b = $_GET['num_bQ2'];
            if (is_numeric($num_b) & is_numeric($num_b)) {
                if (summListener($num_a, $num_b) == true) {
                    echo "Числа $num_a и $num_b в сумме больше 10";
                } else {
                    echo "Числа $num_a и $num_b в сумме меньше 10!";
                }
            } else {
                echo "Вы ввели не числа!";
            }
        }
    ?>
    <form action="" method="get">
    Первое число: <input type="text" name="num_aQ2" placeholder="Введите число 1">
    Второе число: <input type="text" name="num_bQ2" placeholder="Введите число 2">
    <br>
    <input type="submit">
    </form>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        // Задание 3
        echo "<b>Задание № 3</b><br>";  

        function whatDigitIsit($num_a) {
            if ($num_a != null) {
                if ($num_a < 0) {
                    return true;
                }
            }
             else {
                return false;
            }
        }

        $num_a;
        if (isset($_GET['num_aQ3'])) {
            $num_a = $_GET['num_aQ3'];
            if (is_numeric($num_a)) {
                if (whatDigitIsit($num_a) == true) {
                    echo "Число $num_a отрицательно!";
                } else {
                    echo "Числа $num_a видимо положительное";
                }
            } else {
                echo "Вы ввели не число!";
            }
        }
    ?>
    <form action="" method="get">
    Число: <input type="text" name="num_aQ3" placeholder="Введите">
    <br>
    <input type="submit">
    </form>      
    </div>  
</div>
</body>
</html>