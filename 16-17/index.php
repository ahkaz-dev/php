<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр 16-17</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        /* Задание № 1 */
        echo "<b>Задание № 1</b><br>";
        echo "выбор из разнообразных фруктов:<br>";


        $fruits = array("Банан", "Яблоко", "Груша", "Арбуз");
        $answer = $fruits[shuffle($fruits)];
        switch($answer) {
            case "Банан": echo "Был выбран <u style=\"color: green;\">Банан</u>"; break;
            case "Яблоко": echo "Было выбрано <u style=\"color: green;\">Яблоко</u>"; break;
            case "Груша": echo "Была выбрана <u style=\"color: green;\">Груша</u>"; break;
            case "Арбуз": echo "Был выбран <u style=\"color: green;\">Арбуз</u>"; break;
        }
    ?>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        /* Задание № 2 */
        echo "<b>Задание № 2</b><br>";
        echo "Найти наибольшее из 2-х чисел.<br>";

        $a = rand(1,50);
        $b = rand(1,50);
        echo "Условие: даны числа (a,b) => ($a,$b)<br><br>" . "Решение: ";
        if ($a >= $b) {
            echo "Число a больше числа b ($a,$b)"; 
        } else {
            echo "Число b больше числа a ($b,$a)"; 
        }
    ?>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        /* Задание № 3 */
        echo "<b>Задание № 3</b><br>";
        echo "Найти какое число ('+' или '-' или '0')<br>";

        $n = 3.1415;
        echo "Условие: дано число (n) => ($n)<br><br>" . "Решение: ";
        if ($n > 0) {
            echo "Число n($n) больше нуля";
        } else if ($n < 0) {
            echo "Число n($n) меньше нуля"; 
        } else if($n == 0) {
            echo "Число n($n) - ноль"; 
        } else {
            echo "Нет числа.";
        }
    ?>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        /* Задание № 4 */
        echo "<b>Задание № 4</b><br>";
        echo "Найти правильность введенного пароля<br>";

        $password = "qwerty123";
        $checking_password = "qweerty123";
        echo "Условие: дан пароль ($password)<br><br>" . "Решение: ";
        if ($checking_password === $password) {
            echo "Пароли совпадают";
        } else {
            echo "Пароли не совпадают. Веденный пароль = $checking_password";
        }

    ?>
    </div>
</div>
</body>
</html>