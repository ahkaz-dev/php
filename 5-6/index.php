<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр5-6</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="phpDiv">
    <div class="center">
    <?php
    /* Работа с if-else */
    echo "<b>Работа с if-else</b><br>";

    $a = 0;
    if ( $a == 0 ){ 
        echo "true";
    } else{
        echo "false";
    }
    echo "<br>";

    $a = -3;
    if ( $a > 0 ){ 
        echo "true";
    } else {
        echo "false";
    };
    echo "<br>";

    $a = 5;
    if ( $a < 0 ){ 
        echo "true";
    } else {
        echo "false";
    };
    echo "<br>";

    $a = 0;
    if ( $a >= 0 ){ 
        echo "true";
    } else {
        echo "false";
    };
    echo "<br>";

    $a = 5;
    if ( $a <= 0 ){ 
        echo "true";
    } else {
        echo "false";
    };
    echo "<br>";

    $a = "tEst";
    if ( $a == "Test" ){ 
        echo "true";
    } else {
        echo "false";
    };
    echo "<br>";

    $a = '1';
    if ( $a == '1' ){ 
        echo "true";
    } else {
        echo "false";
    };
    echo "<br>";
    /* Работа с empty и isset */
    echo "<b>Работа с empty и isset</b><br>";
    
    $a = "1";
    if (empty($a)) {
        echo "true";
    } else {
        echo "false";
    }
    echo "<br>";

    $a = "";
    if (!empty($a)) {
        echo "true";
    } else {
        echo "false";
    }
    echo "<br>";

    $a = "";
    if ( isset($a) ) {
        echo "true";
    }  else {
        echo "false";
    }
    echo "<br>";

    $b;
    if ( !isset($b) ) {
        echo "true";
    }  else {
        echo "false";
    }
    echo "<br>";

    /* Работа с OR и AND */
    echo "<b>Работа с OR и AND</b><br>";

    $a = 3;
    if ($a > 0 or $a < 5) {
        echo "true"; 
    } else {
        echo "false";
    }
    echo "<br>";

    $a = 6;
    if ( $a == 0 or $a == 2 ) {
        echo $a + 7;
    } else {
        echo $a /10;
    }
    echo "<br>";

    $a = 1;
    $b = 3;
    if ( $a <= 1 and $b >= 3) {
        echo $a + $b;
    } else {
        echo $a - $b;
    }
    echo "<br>";

    $a = 10;
    $b = 3;
    if ( ($a >= 1 and $a < 11) or ($b >= 6 and $b <14) ) {
        echo "true";
    } else {
        echo "false";
    }
    echo "<br>";    

    /* На switch-case */
    echo "<b>На switch-case</b><br>";

    $num = 3;
    switch ($num) {
        case 1: echo $num = "Зима"; break;
        case 2: echo $num = "Весна"; break;
        case 3: echo $num = "Лето"; break;
        case 4: echo $num = "ОСень"; break;
    }
    echo "<br>";

    /* Задачи */
    echo "<b>Задачи</b><br>";

    $day = 31; //с 1-го по 10-е число, и с 11-го по 20-е
    if ($day >= 1 and $day <= 10) {
        echo "Число находится в первой декаде месяца";
    } else if ( $day >= 11 and $day <= 20) {
        echo "Число находится во второй декаде месяца";
    } else if ( $day >= 21 and $day <= 31) {
        echo "Число находится в третьей декаде месяца";
    } else {
        echo "Число выходит за границы месяца!";
    }
    echo "<br>";

    $month = 9;
    if ($month >= 1 and $month <= 2 and $month == 12) {
        echo "Зима";
    } else if ( $month >= 3 and $month <= 5) {
        echo "Весна";
    } else if ( $month >= 6 and $month <= 8) {
        echo "Лето";
    } else if ( $month >= 9 and $month <= 11) {
        echo "Осень";
    } else {
        echo "Число выходит за границы";
    }
    echo "<br>";

    $year = 2024;
    if ( $year%4 == 0 and $year%100 != 0 or $year % 400== 0) {
        echo "$year год - високосный";
    } else {
        echo "$year год - не високосный";
    }
    echo "<br>";

    $str = "abcde";
    if ( $str[0] == 'a') {
        echo "Первая буква а";
    } else {
        echo "Первая буква не а";
    }
    echo "<br>";

    $str = "12345";
    if ( $str[0] == 1 or $str[0] == 2 or $str[0] == 3) {
        echo "Первая цифра равна 1,2 или 3";
    } else {
        echo "Первая цифра не равна 1,2 или 3";
    }
    echo "<br>";

    $str = "222";
    echo "Сумма строки \"222\" = "; echo $str[0]+$str[1]+$str[2];

    echo "<br>";

    $str = "222333"; 
    if ($str[0]+$str[1]+$str[2] == $str[3]+$str[4]+$str[5]){
        echo "Да";
    } else {
        echo "Нет";
    }
    ?>
    </div>
</div>
</body>
</html>