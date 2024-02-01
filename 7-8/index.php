<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр 7-8</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
<div id="phpDiv">
    <div class="center">
    <?php
        /* Работа с foreache */
        echo "<b>Работа с foreache</b><br>";

        $arr = ['html','css','php','js','jq'];
        foreach ($arr as $elem ) {
            echo $elem."<br>";
        }

        $numeric = [1,2,3,4,5];
        $result = 0;
        foreach ($numeric as $elem ) {
            $result += $elem;
        }  
        echo $result;
        echo "<br>";

        $numeric = [1,2,3,4,5];
        $result = 0;
        foreach ($numeric as $elem ) {
            $result += $elem * $elem;
        }
        echo $result;
        echo "<br>";

        /* Работа с ключами */
        echo "<b>Работа с ключами</b><br>";  
        
        $arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
        foreach ($arr as $elem => $elem_count ) {
            echo $elem . " - " . $elem_count . " ";
        }
        echo "<br>";

        $arr = ['Коля'=>'200','Вася'=>'300','Петя'=>'400'];
        foreach ($arr as $elem => $elem_count ) {
            echo $elem . ' - зарплата '. $elem_count . '$ ';
        }
        echo "<br>";

        /* Циклы while и for */
        echo "<b>Циклы while и for</b><br>";
        
        echo "<hr class=\"hrLineByLoop\">";
        $i = 1;
        while( $i <= 100) {
            echo "<span class=\"spFontId\">" . $i . " </span>";
            if ( $i == 19 or $i == 39 or $i == 59 or $i == 79) {
                echo "<br>";
            }
            $i++;
        }
        echo "<hr class=\"hrLineByLoop\"><br>";

        echo "<hr class=\"hrLineByLoop\">";
        $i = 11;
        while( $i <= 33) {
            echo "<span class=\"spFontId\">" . $i . " </span>";
            $i++;
        }
        echo "<hr class=\"hrLineByLoop\"><br>";

        echo "<hr class=\"hrLineByLoop\">";
        $i = 1;
        while( $i <= 100) {
            if ( $i % 2 == 0 ) {
                echo "<span class=\"spFontId\">" . $i . " </span>";
                if ($i ==22 or $i == 44  or $i == 66 or $i == 88) {
                    echo "<br>";
                }
            }
            $i++;
        }
        echo "<hr class=\"hrLineByLoop\"><br>";

        echo "<hr class=\"hrLineByLoop\">";
        $result = 0;
        for ($i = 0; $i <= 100; $i++) {
            $result += $i;
        }
        echo $result . "<hr class=\"hrLineByLoop\"><br>";

        /* Задачи */
        echo "<b>Задачи</b><br>"; 
        
        $numeric = [2, 5, 9, 15, 0, 4];
        foreach ( $numeric as $elem ) {
            if ($elem > 3 and $elem < 10) {
                echo $elem . " ";
            }
        }
        echo "<br>";

        $numeric = [5, -5, -3, 100, 0, 30];
        $result = 0;
        foreach ( $numeric as $elem ) {
            if ($elem >= 0) {
                $result += $elem;
            }
        }
        echo $result . "<br>";

        $numeric = [1, 2, 5, 9, 4, 13, 4, 10];
        foreach ( $numeric as $elem ) {
            if ($elem == 4) {
                echo "В массиве есть 4!";
                break;
            }
        }
        echo "<br>";

        $numeric = ['10', '20', '30', '50', '235', '3000'];
        foreach ( $numeric as $elem ) {
            if ($elem[0] == 1 or $elem[0] == 5 or $elem[0] == 2) {
                echo $elem . " ";
            }
        }
        echo "<br>"; 

        $numeric = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $strResult = "";
        foreach ( $numeric as $elem ) {
            $strResult .= "-" . $elem;
        }
        echo $strResult .= "-";
        echo "<br>";

        $arrDay = ['Понедельник','Вторник', 'Среда', 'Четверг', 'Пятница',
                    'Суббота', 'Воскресенье'];
        $i = 0;
        foreach ( $arrDay as $elem ) {
            if ($i >= 0 and $i <= 4) {
                echo $elem . " "; //echo $arrDay[$i];
            } else {
                echo '<b>' . $elem . ' </b>';
            }
            $i++;
        }
        echo '<br>';

        $day = 4;
        $i = 0;
        foreach ( $arrDay as $elem ) {
            if ( $day == $i) {
                echo "<u>" . $elem . "</u>";
            } else {
                echo " " . $elem . " ";
            }
            $i++;
        }
        echo "<br>";

        /* Задачи посложнее */
        echo "<b>Задачи посложнее</b><br>"; 

        $numeric = [];
        for ($i = 1; $i <= 100; $i++) {
            $numeric[] = $i;
        }
        foreach ( $numeric as $elem ) {
            echo "<span class=\"spFontId\">" . $elem . "</span> ";
            if ( $elem == 19 or $elem == 39 or $elem == 59 or $elem == 79) {
                echo "<br>";
            }
        }
        echo "<br>";

        $arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'синий'];
        $ru = [];
        $en = [];
        foreach ( $arr as $elem => $elem_count) {
            $ru[] = $elem_count;
            $en[] = $elem;
        }
        echo var_dump($ru);
        echo "<br>";
        echo var_dump($en);
        echo "<br>";

        $num = 1000;
        $i = 0;
        do {
            $num /= 2;
            $i++;
        } while ($num >= 50);
        echo "Результат = " . $num . " Количество итераций = " . $i;
    ?>
    </div>
</div>
</body>
</html>